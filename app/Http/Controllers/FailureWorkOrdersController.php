<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkOrder;
use App\Models\User;
use App\Models\Machine;


class FailureWorkOrdersController extends Controller
{
    public function index () {
        $fworkOrders = WorkOrder :: latest()->where('fault' , 1)->get();
        return view ('failure_workorder.list' , compact('fworkOrders')) ;
    }

    public function create () {
        $users = User :: all ();
        $machines = Machine :: all();
        return view ('failure_workorder.new' , compact('users' , 'machines'))
         ;
    }

    public function store () {
        $fworkOrder = new WorkOrder ;
        $fworkOrder->problem_description = request('problem_description') ;
        $fworkOrder->machine_id =request('machine_id');
        $fworkOrder->assign_to=request('assign_to');
        $fworkOrder->requirements =request('requirements');
        $fworkOrder->save() ;
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

    public function show_work_order_api_worker($id){
        $fworkOrder = WorkOrder :: select('id','failure_cause','machine_id')->with('machine:id,machine_model,name')-> find($id);
        return response()->json(['data' => $fworkOrder], 200);
    }
    public function show_work_order_api($id){
        $fworkOrder = WorkOrder :: select('id','machine_id','requirements','failure_cause')->with('machine:id,machine_model,name')->find($id);
        return response()->json(['data' => $fworkOrder], 200);
    }

    public function create_work_order_api(){
        $fworkOrder = new WorkOrder ;
        $fworkOrder->problem_description = request('problem_description') ;
        $fworkOrder ->machine_id = request('machine_id') ;
        $fworkOrder ->requster_id = request('requster_id') ;
        $fworkOrder ->assign_to = request('assign_to') ;
        $fworkOrder ->requirements = request('requirements') ;
        $fworkOrder->save();
        $FcmToken = User::whereNotNull('device_key')
        ->where("id",$fworkOrder->assign_to)
        ->pluck('device_key');
        if(count($FcmToken)==0){
            return response()->json(['data' => 'Added Succesfully'], 200);
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

        return response()->json(['data' => 'Added Succesfully'], 200);
        
    }

    

    
    
}
