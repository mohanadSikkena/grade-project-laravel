<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index () {
        $categories = Category :: all() ;
        return view ('categories.list' , compact ('categories')) ;
    }

    public function create () {
        return view ('categories.create') ;
    }

    public function store () {
        $category = new Category ;
        $category->name = request('name') ;
        $category->save() ;
        return redirect()->route('categories.list') ;
         
    }

    public function edit ($id) {
        $category = Category :: find('$id') ;
        return view ('categories.edit' , compact('category')) ; 
    }

    public function update ($id) {
        $category = Category :: find('$id') ;
        $category->name = request('name') ;
        $category->save() ; 
        return redirect()->route('categories.list') ;

    }

    public function delete ($id) {
        $category = Category :: find('$id') ;
        $category->delete() ;
        return redirect()->route('categories.list') ;

    }

    public function show ($id) {
        $category = Category :: find('$id') ; 
        return view ('categories.list' , comapct('category')) ;
    }
}
