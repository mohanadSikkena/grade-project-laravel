<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlannedWorkOrder;
use App\Models\WorkStatus;
use App\Models\WorkTrade;
use App\Models\WorkType;
use App\Models\User;
use App\Models\Machine;
use App\Models\WorkPriority;


class WorkOrdersController extends Controller
{
    public function index () {
        $pworkOrders = WorkOrder :: all() ;
        return view ('planeed_workorders.list' , compact ('pworkOrders')) ;
    }

    public function create () {
        $workStatuses = WorkStatus :: all ();
        $workTrades = WorkTrade :: all ();
        $workTypes = WorkType :: all ();
        $users = User :: all ();
        $machines = Machine :: all ();
        $workPriorities = WorkPriority :: all ();

        return view ('planeed_workorders.create' , compact('workStatuses,workTrades,workTypes,users,machines,workPriorities')) ;
    }

    public function store () {
        $pworkOrder = new WorkOrder ;
        $pworkOrder->name = request('name') ;
        $pworkOrder->save() ;
        return redirect()->route('planeed_workorders.list') ;
         
    }

    public function edit ($id) {
        $pworkOrder = WorkOrder :: find('$id') ;
        return view ('planeed_workorders.edit' , compact('workpworkOrderorder')) ; 
    }

    public function update ($id) {
        $pworkOrder = WorkOrder :: find('$id') ;
        $pworkOrder->name = request('name') ;
        $pworkOrder->save() ; 
        return redirect()->route('planeed_workorders.list') ;

    }

    public function delete ($id) {
        $pworkOrder = WorkOrder :: find('$id') ;
        $pworkOrder->delete() ;
        return redirect()->route('planeed_workorders.list') ;

    }

    public function show ($id) {
        $pworkOrder = WorkOrder :: find('$id') ; 
        return view ('planeed_workorders.list' , comapct('pworkOrder')) ;
    }
}
