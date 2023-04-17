<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkRequest;

class WorkRequestsController extends Controller
{
    public function index () {
        $workrequests = WorkRequest :: all() ;
        return view ('workrequests.list' , compact ('workrequests')) ;
    }

    public function create () {
        return view ('workrequests.create') ;
    }

    public function store () {
        $workrequest = new WorkRequest ;
        $workrequest->name = request('name') ;
        $workrequest->save() ;
        return redirect()->route('workrequests.list') ;
         
    }

    public function edit ($id) {
        $workrequest= WorkRequest :: find('$id') ;
        return view ('workrequests.edit' , compact('workrequest')) ; 
    }

    public function update ($id) {
        $workrequest = WorkRequest :: find('$id') ;
        $workrequest->name = request('name') ;
        $workrequest->save() ; 
        return redirect()->route('workrequests.list') ;

    }

    public function delete ($id) {
        $workrequest = WorkRequest :: find('$id') ;
        $workrequest->delete() ;
        return redirect()->route('workrequests.list') ;

    }

    public function show ($id) {
        $workrequest = WorkRequest :: find('$id') ; 
        return view ('workrequests.list' , comapct('workrequest')) ;
    }
}
