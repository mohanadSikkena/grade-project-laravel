<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkTrade;

class WorkTradesController extends Controller
{
    public function index () {
        $workTrades = WorkTrade :: all() ;
        return view ('workTrades.list' , compact ('workTrades')) ;
    }

    public function create () {
        return view ('worktrades.create') ;
    }

    public function store () {
        $workTrade = new WorkTrade ;
        $workTrade->name = request('name') ;
        $workTrade->save() ;
        return redirect()->route('workTrades.list') ;
         
    }

    public function edit ($id) {
        $workTrade = WorkTrade :: find('$id') ;
        return view ('workTrades.edit' , compact('workTrade')) ; 
    }

    public function update ($id) {
        $workTrade = WorkTrade :: find('$id') ;
        $workTrade->name = request('name') ;
        $workTrade->save() ; 
        return redirect()->route('workTrades.list') ;

    }

    public function delete ($id) {
        $workTrade = WorkTrade :: find('$id') ;
        $workTrade->delete() ;
        return redirect()->route('workTrades.list') ;

    }

    public function show ($id) {
        $workTrade = WorkTrade :: find('$id') ; 
        return view ('workTrades.list' , comapct('workTrade')) ;
    }
}
