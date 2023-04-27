<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FailureWorkOrder;
use App\Models\User;
use App\Models\Machine;


class WorkOrdersController extends Controller
{
    public function index () {
        $fWorkorder = WorkOrder :: all() ;
        return view ('failure_workorder.list' , compact ('workorders')) ;
    }

    public function create () {
        $users = User :: all ();
        $machines = Machine :: all();
        return view ('failure_workorder.create' . compact('users , machines')) ;
    }

    public function store () {
        $fWorkorder = new WorkOrder ;
        $fWorkorder->name = request('name') ;
        $fWorkorder->save() ;
        return redirect()->route('failure_workorder.list') ;
         
    }

    public function edit ($id) {
        $fWorkorder = WorkOrder :: find('$id') ;
        return view ('failure_workorder.edit' , compact('workorder')) ; 
    }

    public function update ($id) {
        $fWorkorder = WorkOrder :: find('$id') ;
        $fWorkorder->name = request('name') ;
        $fWorkorder->save() ; 
        return redirect()->route('failure_workorder.list') ;

    }

    public function delete ($id) {
        $fWorkorder = WorkOrder :: find('$id') ;
        $fWorkorder->delete() ;
        return redirect()->route('failure_workorders.list') ;

    }

    public function show ($id) {
        $fWorkorder = WorkOrder :: find('$id') ; 
        return view ('failure_workorders.list' , comapct('workorder')) ;
    }
}
