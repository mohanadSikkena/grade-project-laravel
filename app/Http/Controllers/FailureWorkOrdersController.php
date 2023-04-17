<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FailureWorkOrder;


class WorkOrdersController extends Controller
{
    public function index () {
        $workorders = WorkOrder :: all() ;
        return view ('failure_workorders.list' , compact ('workorders')) ;
    }

    public function create () {
        return view ('failure_workorders.create') ;
    }

    public function store () {
        $workorder = new WorkOrder ;
        $workorder->name = request('name') ;
        $workorder->save() ;
        return redirect()->route('failure_workorders.list') ;
         
    }

    public function edit ($id) {
        $workorder = WorkOrder :: find('$id') ;
        return view ('failure_workorders.edit' , compact('workorder')) ; 
    }

    public function update ($id) {
        $workorder = WorkOrder :: find('$id') ;
        $workorder->name = request('name') ;
        $workorder->save() ; 
        return redirect()->route('failure_workorders.list') ;

    }

    public function delete ($id) {
        $workorder = WorkOrder :: find('$id') ;
        $workorder->delete() ;
        return redirect()->route('failure_workorders.list') ;

    }

    public function show ($id) {
        $workorder = WorkOrder :: find('$id') ; 
        return view ('failure_workorders.list' , comapct('workorder')) ;
    }
}
