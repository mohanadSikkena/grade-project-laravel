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
        $workorders = WorkOrder :: all() ;
        return view ('planeed_workorders.list' , compact ('workorders')) ;
    }

    public function create () {
        $workstatuses = WorkStatus :: all ();
        $worktrades = WorkTrade :: all ();
        $worktypes = WorkType :: all ();
        $users = User :: all ();
        $machines = Machine :: all ();
        $workPriority = WorkPriority :: all ();

        return view ('planeed_workorders.create' , compact('workstatuses,worktrades,worktypes,users,machines,workPriority')) ;
    }

    public function store () {
        $workorder = new WorkOrder ;
        $workorder->name = request('name') ;
        $workorder->save() ;
        return redirect()->route('planeed_workorders.list') ;
         
    }

    public function edit ($id) {
        $workorder = WorkOrder :: find('$id') ;
        return view ('planeed_workorders.edit' , compact('workorder')) ; 
    }

    public function update ($id) {
        $workorder = WorkOrder :: find('$id') ;
        $workorder->name = request('name') ;
        $workorder->save() ; 
        return redirect()->route('planeed_workorders.list') ;

    }

    public function delete ($id) {
        $workorder = WorkOrder :: find('$id') ;
        $workorder->delete() ;
        return redirect()->route('planeed_workorders.list') ;

    }

    public function show ($id) {
        $workorder = WorkOrder :: find('$id') ; 
        return view ('planeed_workorders.list' , comapct('workorder')) ;
    }
}
