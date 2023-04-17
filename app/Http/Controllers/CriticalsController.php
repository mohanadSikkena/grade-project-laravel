<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Critical;

class CriticalsController extends Controller
{
    public function index () {
        $criticals = Critical :: all() ;
        return view ('criticals.list' , compact ('criticals')) ;
    }

    public function create () {
        return view ('criticals.create') ;
    }

    public function store () {
        $critical = new Critical ;
        $critical->name = request('name') ;
        $critical->save() ;
        return redirect()->route('criticals.list') ;
         
    }

    public function edit ($id) {
        $critical = Critical :: find('$id') ;
        return view ('criticals.edit' , compact('critical')) ; 
    }

    public function update ($id) {
        $critical = Critical :: find('$id') ;
        $critical->name = request('name') ;
        $critical->save() ; 
        return redirect()->route('criticals.list') ;

    }

    public function delete ($id) {
        $critical = Critical :: find('$id') ;
        $critical->delete() ;
        return redirect()->route('criticals.list') ;

    }

    public function show ($id) {
        $category = Critical :: find('$id') ; 
        return view ('categories.list' , comapct('category')) ;
    }
}
