<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkType;

class WorkTypesController extends Controller
{
    public function index () {
        $worktypes = WorkType :: all() ;
        return view ('worktypes.list' , compact ('worktypes')) ;
    }

    public function create () {
        return view ('worktypes.create') ;
    }

    public function store () {
        $worktype = new WorkType ;
        $worktype->name = request('name') ;
        $worktype->save() ;
        return redirect()->route('worktypes.list') ;
         
    }

    public function edit ($id) {
        $worktype = WorkType :: find('$id') ;
        return view ('worktypes.edit' , compact('worktype')) ; 
    }

    public function update ($id) {
        $worktype = WorkType :: find('$id') ;
        $worktype->name = request('name') ;
        $worktype->save() ; 
        return redirect()->route('worktypes.list') ;

    }

    public function delete ($id) {
        $worktypes = WorkType :: find('$id') ;
        $worktype->delete() ;
        return redirect()->route('worktypes.list') ;

    }

    public function show ($id) {
        $worktype = WorkType :: find('$id') ; 
        return view ('worktypes.list' , comapct('worktype')) ;
    }
}