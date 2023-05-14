<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\WorkOrder;
use App\Models\WorkStatus;
use App\Models\WorkTrade;
use App\Models\WorkType;
use App\Models\User;
use App\Models\Machine;
use App\Models\WorkPriority;



class plannedWorkOrdersController extends Controller
{
    public function index () {
        if(Auth::user()->role->name=='manger'){
            $pworkOrders = WorkOrder :: latest()->where('fault' , 0)->get();}
            else{
                $pworkOrders = WorkOrder :: latest()->where('fault', 0)->where('assign_to' , Auth::user()->id)->get();
            }
            return view ('planned_workorder.list' , compact ('pworkOrders')) ;
    }

    public function create () {
        $workStatuses = WorkStatus :: all ();
        $workTrades = WorkTrade :: all ();
        $workTypes = WorkType :: all ();
        $users = User :: all ();
        $machines = Machine :: all ();
        $workPriorities = WorkPriority :: all ();

        return view ('planned_workorder.new' , compact('workStatuses' , 'workTrades' , 'workTypes' , 'users' , 'machines' , 'workPriorities')) ;
    }

    public function store () {
        $pworkOrder = new WorkOrder ;
        $pworkOrder->assign_to = request('assign_to') ;
        $pworkOrder->machine_id = request('machine_id') ;
        $pworkOrder->work_status_id = request('work_status_id') ;
        $pworkOrder->work_type_id = request('work_type_id') ;
        $pworkOrder->work_priority_id = request('work_priority_id') ;
        $pworkOrder->requirements = request('requirements') ;
        $pworkOrder->fault = request('fault') ;
        $pworkOrder->save() ;
        return redirect()->route('planned_workorder.list') ;

    }

    public function edit ($id) {
        $pworkOrder = WorkOrder :: find('$id') ;
        return view ('planned_workorder.edit' , compact('workpworkOrderorder')) ;
    }

    public function update ($id) {
        $pworkOrder = WorkOrder :: find('$id') ;
        $pworkOrder->assign_to = request('assign_to') ;
        $pworkOrder->machine_id = request('machine_id') ;
        $pworkOrder->work_status_id = request('work_status_id') ;
        $pworkOrder->work_type_id = request('work_type_id') ;
        $pworkOrder->work_priority_id = request('work_priority_id') ;
        $pworkOrder->requirements = request('requirements') ;
        $pworkOrder->fault = request('fault') ;
        $pworkOrder->received_date = request('received_date') ;
        $pworkOrder->save() ;
        return redirect()->route('planned_workorder.list') ;

    }

    public function delete ($id) {
        $pworkOrder = WorkOrder :: find($id) ;
        $pworkOrder->delete() ;
        return redirect()->route('planned_workorder.list') ;

    }

    public function show ($id) {
        $pworkOrder = WorkOrder :: find($id) ;
        return view ('planned_workorder.report' , compact('pworkOrder')) ;
    }



    public function show_work_order_api($id)
{
    $pworkOrder = WorkOrder::with('machine.machineCode')->with('workPriority', 'workStatus', 'workType')->find($id);

    if (!$pworkOrder) {
        return response()->json(['error' => 'Work order not found'], 404);
    }

    return response()->json(['data' => $pworkOrder], 200);
}

public function index_api_manger()
{
    $pworkOrders = WorkOrder::with('workStatus')->where('fault', 1)->get();

    return response()->json(['data' => $pworkOrders], 200);
}

public function index_api_user($id)
{
    $pworkOrders = WorkOrder::with('workStatus')->where('assign_to', $id)->get();

    return response()->json(['data' => $pworkOrders], 200);
}

public function transform_api($id)
{
    $pworkOrder = WorkOrder::find($id);

    if (!$pworkOrder) {
        return response()->json(['error' => 'Work order not found'], 404);
    }

    $pworkOrder->work_status_id = 2;
    $pworkOrder->save();

    return response()->json(['data' => $pworkOrder], 200);
}

public function delete_work_order_api($id)
{
    $pworkOrder = WorkOrder::find($id);

    if (!$pworkOrder) {
        return response()->json(['error' => 'Work order not found'], 404);
    }

    $pworkOrder->delete();

    return response()->json(['data' => 'deleted'], 200);
}

public function search(){
    $term = request('term');
        $pworkOrders = WorkOrder::where('requirements', 'like','%' . $term . '%')
        ->orWhere('received_date', 'LIKE', "%$term%")
        ->orWhere('id', 'LIKE', "%$term%")
        ->orWhereHas('requester', function ($user) {
            $term = request('term');
            $user->where('name', 'LIKE', "%$term%");
        })
        ->orWhereHas('machine', function ($machine) {
            $term = request('term');
            $machine->where('machine_code_id', 'LIKE', "%$term%");
        })
        ->orWhereHas('workStatus', function ($workStatus) {
            $term = request('term');
            $workStatus->where('name', 'LIKE', "%$term%");
        })
        ->orWhereHas('workType', function ($workType) {
            $term = request('term');
            $workType->where('name', 'LIKE', "%$term%");
        })
        ->orWhereHas('workTrade', function ($workTrade) {
            $term = request('term');
            $workTrade->where('name', 'LIKE', "%$term%");
        })
        ->orWhereHas('workPriority', function ($criticality) {
            $term = request('term');
            $criticality->where('name', 'LIKE', "%$term%");
        })->get();
        return view('planned_workorder.search', compact('pworkOrders'));
}


}
