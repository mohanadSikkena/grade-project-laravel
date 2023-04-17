<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkTrade;

class WorkTradesController extends Controller
{
    public function index () {
        $worktrades = WorkTrade :: all() ;
        return view ('worktrades.list' , compact ('worktrades')) ;
    }

    public function create () {
        return view ('worktrades.create') ;
    }

    public function store () {
        $worktrade = new WorkTrade ;
        $worktrade->name = request('name') ;
        $worktrade->save() ;
        return redirect()->route('worktrades.list') ;
         
    }

    public function edit ($id) {
        $worktrade = WorkTrade :: find('$id') ;
        return view ('worktrades.edit' , compact('worktrade')) ; 
    }

    public function update ($id) {
        $worktrade = WorkTrade :: find('$id') ;
        $worktrade->name = request('name') ;
        $worktrade->save() ; 
        return redirect()->route('worktrades.list') ;

    }

    public function delete ($id) {
        $worktrade = WorkTrade :: find('$id') ;
        $worktrade->delete() ;
        return redirect()->route('worktrades.list') ;

    }

    public function show ($id) {
        $worktrade = WorkTrade :: find('$id') ; 
        return view ('worktrades.list' , comapct('worktrade')) ;
    }
}
