<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matrial;
use App\Models\Location;
use App\Models\Category;
use App\Models\Criticality;
use App\Models\SparePart;

class MatrialsController extends Controller
{
    public function index () {
        $materials = Matrial :: all() ;
        return view ('materials.list' , compact ('materials')) ;
    }

    public function create () {
        $locations = Location :: all();
        $categories = Category :: all();
        $criticals = Criticality :: all();
        $spareParts = SparePart :: all ();
        return view ('materials.new' , compact('locations' , 'categories' , 'criticals' , 'spareParts')) ;
    }

    public function store () {
        $material = new Matrial ;
        $material->name = request('name') ;
        $material->spare_part_id = request('spare_part_id') ;
        $material->location_id = request('location_id') ;
        $material->criticality_id = request('criticality_id') ;
        $material->category_id = request('category_id') ;
        $material->quantity = request('quantity') ;
        $material->save() ;
        return redirect()->route('materials.list') ;
         
    }

    public function edit ($id) {
        $material = Matrial :: find($id) ;
        $locations = Location :: all();
        $categories = Category :: all();
        $criticals = Criticality :: all();
        $spareParts = SparePart :: all ();
        return view ('materials.edit' , compact('material','locations' , 'categories' , 'criticals' , 'spareParts')) ; 
    }

    public function update ($id) {
        $material = Matrial :: find($id) ;
        $material->name = request('name') ;
        $material->spare_part_id = request('spare_part_id') ;
        $material->location_id = request('location_id') ;
        $material->criticality_id = request('criticality_id') ;
        $material->category_id = request('category_id') ;
        $material->quantity = request('quantity') ;
        $material->save() ;
        return redirect()->route('materials.list') ;

    }

    public function delete ($id) {
        $material = Matrial :: find('$id') ;
        $material->delete() ;
        return redirect()->route('materials.list') ;

    }

    public function show ($id) {
        $material = Matrial :: find('$id') ; 
        return view ('materials.list' , comapct('material')) ;
    }
}
