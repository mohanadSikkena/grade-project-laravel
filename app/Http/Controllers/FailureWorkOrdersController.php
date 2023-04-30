<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkOrder;
use App\Models\User;
use App\Models\Machine;


class FailureWorkOrdersController extends Controller
{
    public function index () {
        $fworkOrders = WorkOrder :: all() ;
        return view ('failure_workorder.list' , compact('fworkOrders')) ;
    }

    public function create () {
        $users = User :: all ();
        $machines = Machine :: all();
        return view ('failure_workorder.new' , compact('users' , 'machines')) ;
    }

    public function store () {
        $fworkOrder = new WorkOrder ;
        $fworkOrder->name = request('name') ;
        $fworkOrder->save() ;
        return redirect()->route('failure_workorder.list') ;
         
    }

    public function edit ($id) {
        $fworkOrder = WorkOrder :: find('$id') ;
        return view ('failure_workorder.edit' , compact('fworkOrder')) ; 
    }

    public function update ($id) {
        $fworkOrder = WorkOrder :: find('$id') ;
        $fworkOrder->name = request('name') ;
        $fworkOrder->save() ; 
        return redirect()->route('failure_workorder.list') ;

    }

    public function delete ($id) {
        $fworkOrder = WorkOrder :: find('$id') ;
        $fworkOrder->delete() ;
        return redirect()->route('failure_workorders.list') ;

    }

    public function show ($id) {
        $fworkOrder = WorkOrder :: find('$id') ; 
        return view ('failure_workorders.list' , comapct('fworkOrder')) ;
    }
}
