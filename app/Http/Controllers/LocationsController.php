<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationsController extends Controller
{
    public function index () {
        $locations = Location :: all() ;
        return view ('locations.list' , compact ('locations')) ;
    }

    public function create () {
        return view ('locations.create') ;
    }

    public function store () {
        $location = new Location ;
        $location->name = request('name') ;
        $location->save() ;
        return redirect()->route('locations.list') ;
         
    }

    public function edit ($id) {
        $location = Location :: find('$id') ;
        return view ('locations.edit' , compact('location')) ; 
    }

    public function update ($id) {
        $location = Location :: find('$id') ;
        $location->name = request('name') ;
        $location->save() ; 
        return redirect()->route('locations.list') ;

    }

    public function delete ($id) {
        $location = Location :: find('$id') ;
        $location->delete() ;
        return redirect()->route('locations.list') ;

    }

    public function show ($id) {
        $location = Location :: find('$id') ; 
        return view ('locations.list' , comapct('location')) ;
    }
}
