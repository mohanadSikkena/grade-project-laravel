<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SparePart;

class SparePartsController extends Controller
{
    public function index () {
        $spareparts = SparePart :: all() ;
        return view ('spareparts.list' , compact ('spareparts')) ;
    }

    public function create () {
        return view ('spareparts.create') ;
    }

    public function store () {
        $sparepart = new SparePart ;
        $sparepart->name = request('name') ;
        $sparepart->save() ;
        return redirect()->route('spareparts.list') ;
         
    }

    public function edit ($id) {
        $sparepart = SparePart :: find('$id') ;
        return view ('spareparts.edit' , compact('sparepart')) ; 
    }

    public function update ($id) {
        $sparepart = SparePart :: find('$id') ;
        $sparepart->name = request('name') ;
        $sparepart->save() ; 
        return redirect()->route('spareparts.list') ;

    }

    public function delete ($id) {
        $sparepart = SparePart :: find('$id') ;
        $sparepart->delete() ;
        return redirect()->route('spareparts.list') ;

    }

    public function show ($id) {
        $sparepart = SparePart :: find('$id') ; 
        return view ('spareparts.list' , comapct('sparepart')) ;
    }
}
