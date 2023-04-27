<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkRequest;
use App\Models\Machine;
use App\Models\User;

class WorkRequestsController extends Controller
{
    public function index () {
        $workRequests = WorkRequest :: all() ;
        return view ('workRequests.list' , compact ('workRequests')) ;
    }

    public function create () {
        $machines = Machine :: all () ; 
        $users = User :: all () ;
        return view ('workRequests.create') ;
    }

    public function store () {
        $workRequest = new WorkRequest ;
        $workRequest->name = request('name') ;
        $workRequest->save() ;
        return redirect()->route('workRequests.list') ;
         
    }

    public function edit ($id) {
        $workRequest= WorkRequest :: find('$id') ;
        return view ('workRequests.edit' , compact('workRequest')) ; 
    }

    public function update ($id) {
        $workRequest = WorkRequest :: find('$id') ;
        $workRequest->name = request('name') ;
        $workRequest->save() ; 
        return redirect()->route('workRequests.list') ;

    }

    public function delete ($id) {
        $workRequest = WorkRequest :: find('$id') ;
        $workRequest->delete() ;
        return redirect()->route('workRequests.list') ;

    }

    public function show ($id) {
        $workRequest = WorkRequest :: find('$id') ; 
        return view ('workRequests.list' , comapct('workRequest')) ;
    }
}
