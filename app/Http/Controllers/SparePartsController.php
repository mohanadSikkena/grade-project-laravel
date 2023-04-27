<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SparePart;
use App\Models\Location;
use App\Models\Matrial;

class SparePartsController extends Controller
{
    public function index () {
        $spareParts = SparePart :: all() ;
        return view ('spareParts.list' , compact ('spareParts')) ;
    }

    public function create () {
        $materials = Matrial :: all ();
        $locations = Location :: all() ;
        return view ('spareParts.create' . compact('materials , locations')) ;
    }

    public function store () {
        $sparePart = new SparePart ;
        $sparePart->name = request('name') ;
        $sparePart->save() ;
        return redirect()->route('spareParts.list') ;
         
    }

    public function edit ($id) {
        $sparePart = SparePart :: find('$id') ;
        return view ('spareParts.edit' , compact('sparePart')) ; 
    }

    public function update ($id) {
        $sparePart = SparePart :: find('$id') ;
        $sparePart->name = request('name') ;
        $sparePart->save() ; 
        return redirect()->route('spareParts.list') ;

    }

    public function delete ($id) {
        $sparePart = SparePart :: find('$id') ;
        $sparePart->delete() ;
        return redirect()->route('spareParts.list') ;

    }

    public function show ($id) {
        $sparePart = SparePart :: find('$id') ; 
        return view ('spareParts.list' , comapct('sparePart')) ;
    }
}
