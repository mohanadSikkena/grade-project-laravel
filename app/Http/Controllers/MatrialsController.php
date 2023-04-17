<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matrial;
use App\Models\Location;
use App\Models\Category;
use App\Models\Criticaly;
use App\Models\SparePart;

class MatrialsController extends Controller
{
    public function index () {
        $matrials = Matrial :: all() ;
        return view ('matrials.list' , compact ('matrials')) ;
    }

    public function create () {
        $locations = Location :: all();
        $categories = Category :: all();
        $Criticals = Criticaly :: all();
        $spareParts = SparePart :: all ();
        return view ('matrials.create' , compact('locations,categories,Criticals,spareParts')) ;
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
