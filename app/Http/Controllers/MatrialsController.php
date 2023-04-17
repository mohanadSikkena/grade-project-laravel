<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matrial;

class MatrialsController extends Controller
{
    public function index () {
        $matrials = Matrial :: all() ;
        return view ('matrials.list' , compact ('matrials')) ;
    }

    public function create () {
        return view ('matrials.create') ;
    }

    public function store () {
        $matrial = new Matrial ;
        $matrial->name = request('name') ;
        $matrial->save() ;
        return redirect()->route('matrials.list') ;
         
    }

    public function edit ($id) {
        $matrial = Matrial :: find('$id') ;
        return view ('matrials.edit' , compact('matrial')) ; 
    }

    public function update ($id) {
        $matrial = Matrial :: find('$id') ;
        $matrial->name = request('name') ;
        $matrial->save() ; 
        return redirect()->route('matrials.list') ;

    }

    public function delete ($id) {
        $matrial = Matrial :: find('$id') ;
        $matrial->delete() ;
        return redirect()->route('matrials.list') ;

    }

    public function show ($id) {
        $matiral = Matrial :: find('$id') ; 
        return view ('matrials.list' , comapct('matrial')) ;
    }
}
