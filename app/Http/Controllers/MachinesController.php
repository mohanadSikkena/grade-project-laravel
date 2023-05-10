<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use App\Models\WorkOrder;
use App\Models\WorkRequest;
use App\Models\Department;
use App\Models\Location;
use App\Models\Category;
use App\Models\Criticality;
use App\Models\MachineCode;
use App\Models\User;

class MachinesController extends Controller
{
    public function index () {
        $machines = Machine :: all();
        return view ('machines.list' , compact('machines'));
    }

    public function create () {
        $pworkOredrs = WorkOrder :: all();
        $fworkOredrs = WorkOrder :: all();
        $workRequests = WorkRequest :: all();
        $departments = Department :: all();
        $categories = Category :: all();
        $machineCodes = MachineCode :: all();
        $criticals = Criticality :: all();
        $users = User :: all();
        $locations = Location :: all();

        return view('machines.new' , compact('pworkOredrs', 'locations' , 'fworkOredrs' , 'workRequests' , 'departments' , 'categories' , 'machineCodes' , 'criticals' , 'users' ));
    }

    public function store () {
        $machine = new Machine ;
        $machine->name = request('name');
        $machine->description = request('description');
        $machine->location_id = request('location_id');
        $machine->machine_model = request('machine_model');
        $machine->manfacturer = request('manfacturer');
        $machine->user_id = request('user_id');
        $machine->department_id = request('department_id');
        $machine->category_id = request('category_id');
        $machine->contractor = request('contractor');
        $machine->serial_number = request('serial_number');
        $machine->supplier = request('supplier');
        $machine->criticality_id = request('criticality_id');
        $machine->notes_to_technection = request('note_to_technection');
        $machine->contract_expiry_date = request('contract_expiry_data');
        $machine->machine_code_id = request('machine_code_id');
        $machine->save();
        return redirect ()->route('machines.list');
    }

    public function edit ($id) {
        $machine = Machine :: find($id);
        return view('machines.edit' , compact('machine'));
        
    }    
    public function update ($id) {
        $machine = Machine :: find($id);
        $machine->name = request('name');
        $machine->description = request('description');
        $machine->location_id = request('location_id');
        $machine->machine_model = request('machine_model');
        $machine->manfacturer = request('manfacturer');
        $machine->user_id = request('user_id');
        $machine->department_id = request('department_id');
        $machine->category_id = request('category_id');
        $machine->contractor = request('contractor');
        $machine->serial_number = request('serial_number');
        $machine->machine_status = request('machine_status');
        $machine->supplier = request('supplier');
        $machine->criticality_id = request('criticality_id');
        $machine->note_to_technection = request('note_to_technection');
        $machine->contract_expiry_data = request('contract_expiry_data');
        $machine->machine_code_id = request('machine_code_id');
        $machine->save();
        return redirect ()->route('machines.list');
    }

    public function delete ($id) {
        $machine = Machine :: find($id);
        $machine->delete();
        return redirect ()->route('machines.list');
    }

    public function show ($id) {
        $machine = Machine :: find($id);
        return view ('machines.show' , compact('machines'));
    }

    public function index_api()
    {
        $machines = Machine::all();
        return response()->json(['data' => $machines], 200);
    }
    public function get_machine($id)
    {
        $machine = Machine::find($id);
        return response()->json(['data' => $machine], 200);
    }

    public function delete_machine_api($id){
        $machine = Machine::find($id);
        $machine->delete();
        return response()->json(['data' => $machine], 200);
    }
    public function show_machine_api ($id) {
        $machine = Machine :: select('name','id','machine_model')->with('workOrder.workStatus')->find($id);
        return response()->json(['data' => $machine], 200);
    }
    
}
