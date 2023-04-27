<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkStatus;

class WorkStatusController extends Controller
{
    public function index () {
        $workStatuses = WorkStatus :: all() ;
        return view ('workStatuses.list' , compact ('workStatuses')) ;
    }

    public function create () {
        return view ('workStatuses.create') ;
    }

    public function store () {
        $workStatus = new WorkStatus ;
        $workStatus->name = request('name') ;
        $workStatus->save() ;
        return redirect()->route('workStatuses.list') ;
         
    }

    public function edit ($id) {
        $workStatus = WorkStatus :: find('$id') ;
        return view ('workStatuses.edit' , compact('workStatus')) ; 
    }

    public function update ($id) {
        $workStatus = WorkStatus :: find('$id') ;
        $workStatus->name = request('name') ;
        $workStatus->save() ; 
        return redirect()->route('workStatuses.list') ;

    }

    public function delete ($id) {
        $workStatus = WorkStatus :: find('$id') ;
        $workStatus->delete() ;
        return redirect()->route('workStatuses.list') ;

    }

    public function show ($id) {
        $workStatus = WorkStatus :: find('$id') ; 
        return view ('workStatuses.list' , comapct('workStatus')) ;
    }
}
