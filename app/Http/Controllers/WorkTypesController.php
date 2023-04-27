<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkType;

class WorkTypesController extends Controller
{
    public function index () {
        $workTypes = WorkType :: all() ;
        return view ('workTypes.list' , compact ('workTypes')) ;
    }

    public function create () {
        return view ('workTypes.create') ;
    }

    public function store () {
        $workType = new WorkType ;
        $workType->name = request('name') ;
        $workType->save() ;
        return redirect()->route('workTypes.list') ;
         
    }

    public function edit ($id) {
        $workType = WorkType :: find('$id') ;
        return view ('workTypes.edit' , compact('workType')) ; 
    }

    public function update ($id) {
        $workType = WorkType :: find('$id') ;
        $workType->name = request('name') ;
        $workType->save() ; 
        return redirect()->route('workTypes.list') ;

    }

    public function delete ($id) {
        $workType = WorkType :: find('$id') ;
        $workType->delete() ;
        return redirect()->route('workTypes.list') ;

    }

    public function show ($id) {
        $workType = WorkType :: find('$id') ; 
        return view ('workTypes.list' , comapct('workType')) ;
    }
}