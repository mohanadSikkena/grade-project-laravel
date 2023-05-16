<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Location;
use App\Models\Role;
use App\Models\Department;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            // Other validation rules for the rest of the fields
        ]);
    
        try {
            $user = new User;
            $user->name = $request->input('name');
            $user->address = $request->input('address');
            $user->phone_no = $request->input('phone_no');
            $user->house_no = $request->input('house_no');
            $user->role_id = $request->input('role_id');
            $user->location_id = $request->input('location_id');
            $user->hourly_salery = $request->input('hourly_salery');
            $user->password = Hash::make($request->input('password'));
            $user->email = $request->input('email');
            $user->department_id = $request->input('department_id');
            $user->save();
    
            return redirect()->route('users.list');
        } catch (\Exception $e) {
            if ($e instanceof \Illuminate\Database\QueryException) {
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062) {
                    throw ValidationException::withMessages(['email' => 'This email is already taken.']);
                }
            }
            
            // Handle other exceptions or errors if needed
        }
    

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
        $user->password = Hash::make( request('password'));;
        $user->email = request('email') ;
        $user->department_id = request('department_id') ;
        $user->save() ;
        return redirect()->route('users.list') ;

    }

    public function delete ($id) {
        $user = User :: find($id) ;
        $user->delete() ;
        return redirect()->route('users.list') ;

    }

    public function show ($id) {
        $user = User :: find($id) ;
        return view ('users.report' , compact('user')) ;
    }

    public function get_users_roles_api(){
        $users = User::whereIn('role_id', [3, 5])->get();
        return response()->json(['data' => $users], 200);
    }

public function search()
{
    $term = request('term');
        $users = User::where('name', 'like','%' . $term . '%')->orWhere('address', 'LIKE', "%$term%")
        ->orWhere('phone_no', 'LIKE', "%$term%")
        ->orWhere('house_no', 'LIKE', "%$term%")
        ->orWhere('hourly_salery', 'LIKE', "%$term%")
        ->orWhereHas('department', function ($department) {
            $term = request('term');
            $department->where('name', 'LIKE', "%$term%");
        })
        ->orWhereHas('location', function ($location) {
            $term = request('term');
            $location->where('location_description', 'LIKE', "%$term%");
        })->get();
        return view('users.search', compact('users'));
}
}
