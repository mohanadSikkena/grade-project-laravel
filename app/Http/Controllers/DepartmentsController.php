<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentsController extends Controller
{
    public function index () {
        $departments = Department :: all() ;
        return view ('departments.list' , compact ('departments')) ;
    }

    public function create () {
        return view ('departments.create') ;
    }

    public function store () {
        $department = new Department ;
        $department->name = request('name') ;
        $department->save() ;
        return redirect()->route('departments.list') ;
         
    }

    public function edit ($id) {
        $department = Department :: find('$id') ;
        return view ('departments.edit' , compact('department')) ; 
    }

    public function update ($id) {
        $department = Department :: find('$id') ;
        $department->name = request('name') ;
        $department->save() ; 
        return redirect()->route('departments.list') ;

    }

    public function delete ($id) {
        $department = Department :: find('$id') ;
        $department->delete() ;
        return redirect()->route('departments.list') ;

    }

    public function show ($id) {
        $department = Department :: find('$id') ; 
        return view ('departments.list' , comapct('department')) ;
    }
}
