<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Location;
use App\Models\Role;
use App\Models\Department;


class UsersController extends Controller
{
    public function index () {
        $users = User :: all() ;
        
        return view ('users.list' , compact ('users')) ;
    }

    public function create () {
        $locations = Location::all();
        $roles= Role:: all();
        $departments = Department:: all();
        return view ('users.new' ,compact('roles','departments' ,'locations')) ;
    }

    public function store () {
        $user = new User ;
        $user->name = request('name') ;
        $user->address = request('address') ;
        $user->phone_no = request('phone_no') ;
        $user->house_no = request('house_no') ;
        $user->role_id = request('role_id') ;
        $user->location_id = location_id('name') ;
        $user->hourly_salery = request('hourly_salery') ;
        $user->password = request('password') ;
        $user->email = request('email') ;
        $user->department_id = request('department_id') ;
        $user->save() ;
        return redirect()->route('users.list') ;
       
    }

    public function edit ($id) {
        $user = User :: find($id) ;
        $locations = Location::all();
        $roles= Role:: all();
        $departments = Department:: all();
        return view ('users.edit' , compact('user','locations','roles','departments')) ; 
    }

    public function update ($id) {
        $user = User :: find($id) ;
        $user->name = request('name') ;
        $user->address = request('address') ;
        $user->phone_no = request('phone_no') ;
        $user->house_no = request('house_no') ;
        $user->role_id = request('role_id') ;
        $user->location_id = request('location_id') ;
        $user->hourly_salery = request('hourly_salery') ;
        $user->password = request('password') ;
        $user->email = request('email') ;
        $user->department_id = request('department_id') ;
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

    public function get_users_roles_api(){
        $users = User::whereIn('role_id', [3, 5])->get();
        return response()->json(['data' => $users], 200);
    }

    


    
}
