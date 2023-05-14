<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\WorkOrder;
use App\Models\User;
use App\Models\Machine;
use App\Models\WorkRequest;
use Illuminate\Support\Facades\Auth;

class FailureWorkOrdersController extends Controller
{
    public function index () {
        if(Auth::user()->role->name=='manger'){
        $fworkOrders = WorkOrder :: latest()->where('fault' , 1)->get();}
        else{
            $fworkOrders = WorkOrder :: latest()->where('fault' , 1)->where('assign_to' , Auth::user()->id)->get();
        }
        return view ('failure_workorder.list' , compact('fworkOrders')) ;
    }

    public function create ($id) {
        $users = User :: all ();
        $workRequest = WorkRequest::find($id);
        return view ('failure_workorder.new' , compact('users' , 'workRequest'));
    }

    public function store ($id) {
        $fworkOrder = new WorkOrder ;
        $fworkOrder->problem_description = request('problem_description') ;
        $fworkOrder->machine_id =request('machine_id');
        $fworkOrder->assign_to=request('assign_to');
        $fworkOrder->requirements =request('requirements');
        $fworkOrder->save() ;
        $workRequest = WorkRequest::find($id);
        $workRequest->delete();
        $FcmToken = User::whereNotNull('device_key')
        ->where("id",$fworkOrder->assign_to)
        ->pluck('device_key');
        if(count($FcmToken)==0){
            return redirect()->route('failure_workorder.list') ;
        }
        $data = [
        "registration_ids" => $FcmToken,
        "notification" => [
            "title" => "Work Order Recieved",
            // title =>workrequest =>
            "body" => "الفرعون العاشق جاهز للاحتفال",
        ]
    ];
        $notificationController =new WebNotificationController;
        $notificationController->sendWebNotification($data);

        return redirect()->route('failure_workorder.list') ;

    }

    public function edit ($id) {
        $fworkOrder = WorkOrder :: find($id) ;
        $users = User :: all ();
        $machines = Machine :: all();

        return view ('failure_workorder.edit' , compact('fworkOrder','users','machines')) ;
    }

    public function update ($id) {
        $fworkOrder = WorkOrder :: find($id) ;
        $fworkOrder->problem_description = request('problem_description') ;
        $fworkOrder->machine_id =request('machine_id');
        $fworkOrder->assign_to=request('assign_to');
        $fworkOrder->requirements =request('requirements');
        $fworkOrder->save() ;
        
        return redirect()->route('failure_workorder.list') ;

    }

    public function delete ($id) {
        $fworkOrder = WorkOrder :: find($id) ;
        $fworkOrder->delete() ;
        return redirect()->route('failure_workorders.list') ;

    }

    public function show ($id) {
        $fworkOrder = WorkOrder :: find($id) ;
        return view ('failure_workorders.list' , comapct('fworkOrder')) ;
    }

    public function show_work_order_api_worker($id)
{
    $fworkOrder = WorkOrder::select('id', 'failure_cause', 'machine_id')->with('machine:id,machine_model,name')->find($id);

    if (!$fworkOrder) {
        return response()->json(['error' => 'Work order not found'], 404);
    }

    return response()->json(['data' => $fworkOrder], 200);
}

public function show_work_order_api($id)
{
    $fworkOrder = WorkOrder::select('id', 'machine_id', 'requirements', 'failure_cause')->with('machine:id,machine_model,name')->find($id);

    if (!$fworkOrder) {
        return response()->json(['error' => 'Work order not found'], 404);
    }

    return response()->json(['data' => $fworkOrder], 200);
}

public function create_work_order_api()
{
    $validator = Validator::make(request()->all(), [
        'problem_description' => 'required|string',
        'machine_id' => 'required|integer|exists:machines,id',
        'requster_id' => 'required|integer|exists:users,id',
        'assign_to' => 'required|integer|exists:users,id',
        'requirements' => 'nullable|string',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 400);
    }

    $fworkOrder = new WorkOrder;
    $fworkOrder->problem_description = request('problem_description');
    $fworkOrder->machine_id = request('machine_id');
    $fworkOrder->requster_id = request('requster_id');
    $fworkOrder->assign_to = request('assign_to');
    $fworkOrder->requirements = request('requirements');
    $fworkOrder->save();

    //changed $id to request('work_request_id')
    $workRequest = WorkRequest::find(request('work_request_id'));
    $workRequest->delete();


    $FcmToken = User::whereNotNull('device_key')
        ->where("id", $fworkOrder->assign_to)
        ->pluck('device_key');

    if (count($FcmToken) == 0) {
        return response()->json(['data' => 'Added Succesfully'], 200);
    }

    $data = [
        "registration_ids" => $FcmToken,
        "notification" => [
            "title" => "Work Order Recieved",
            "body" => "الفرعون العاشق جاهز للاحتفال",
        ]
    ];

    $notificationController = new WebNotificationController;
    $notificationController->sendWebNotification($data);

    return response()->json(['data' => 'Added Succesfully'], 200);
}





}
