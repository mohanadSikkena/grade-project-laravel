<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function index () {
        $users = User :: all() ;
        return view ('users.list' , compact ('users')) ;
    }

    public function create () {
        return view ('users.create') ;
    }

    public function store () {
        $user = new User ;
        $user->name = request('name') ;
        $user->save() ;
        return redirect()->route('users.list') ;
         
    }

    public function edit ($id) {
        $user = User :: find('$id') ;
        return view ('users.edit' , compact('location')) ; 
    }

    public function update ($id) {
        $user = User :: find('$id') ;
        $user->name = request('name') ;
        $user->save() ; 
        return redirect()->route('users.list') ;

    }

    public function delete ($id) {
        $user = User :: find('$id') ;
        $user->delete() ;
        return redirect()->route('users.list') ;

    }

    public function show ($id) {
        $user = User :: find('$id') ; 
        return view ('users.list' , comapct('user')) ;
    }


    
}
