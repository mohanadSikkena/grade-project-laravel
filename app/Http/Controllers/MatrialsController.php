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
        $material = Matrial :: find($id) ;
        $material->delete() ;
        return redirect()->route('materials.list') ;

    }

    public function show ($id) {
        $material = Matrial :: find($id) ;
        return view ('materials.report' , compact('material')) ;
    }

    public function search(){
    $term = request('term');
        $materials = Matrial::where('name', 'like','%' . $term . '%')->orWhere('quantity', 'LIKE', "%$term%")
        ->orWhereHas('sparePart', function ($spare_part) {
            $term = request('term');
            $spare_part->where('name', 'LIKE', "%$term%");
        })
        ->orWhereHas('location', function ($location) {
            $term = request('term');
            $location->where('location_description', 'LIKE', "%$term%");
        })
        ->orWhereHas('category', function ($category) {
            $term = request('term');
            $category->where('name', 'LIKE', "%$term%");
        })
        ->orWhereHas('criticality', function ($criticality) {
            $term = request('term');
            $criticality->where('name', 'LIKE', "%$term%");
        })->get();
        return view('materials.search', compact('materials'));
}

}
