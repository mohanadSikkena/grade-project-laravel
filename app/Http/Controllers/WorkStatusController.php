<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkStatus;

class WorkStatusController extends Controller
{
    public function index () {
        $workstatus = WorkStatus :: all() ;
        return view ('workstatus.list' , compact ('workstatus')) ;
    }

    public function create () {
        return view ('workstatus.create') ;
    }

    public function store () {
        $workstatus = new WorkStatus ;
        $workstatus->name = request('name') ;
        $workstatus->save() ;
        return redirect()->route('workstatus.list') ;
         
    }

    public function edit ($id) {
        $workstatus = WorkStatus :: find('$id') ;
        return view ('workstatus.edit' , compact('workstatus')) ; 
    }

    public function update ($id) {
        $workstatus = WorkStatus :: find('$id') ;
        $workstatus->name = request('name') ;
        $workstatus->save() ; 
        return redirect()->route('workstatus.list') ;

    }

    public function delete ($id) {
        $workstatus = WorkStatus :: find('$id') ;
        $workstatus->delete() ;
        return redirect()->route('workstatus.list') ;

    }

    public function show ($id) {
        $workstatus = WorkStatus :: find('$id') ; 
        return view ('workstatus.list' , comapct('workstatus')) ;
    }
}
