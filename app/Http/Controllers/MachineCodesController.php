<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MachineCode;


class MachineCodesController extends Controller
{
    public function index () {
        $machinecodes = MachineCode :: all();
        return view ('machinecodes.list' , compact('machinecodes'));
    }

    public function create () {
        return view('machinecodes.new');
    }

    public function store () {
        $machinecode = new MachineCode ;
        $machinecode->name = request('name');
        $machinecode->save();
        return redirect ()->route('machinecodes.list');
    }

    public function edit ($id) {
        $machinecode = MachineCode :: find($id);
        return view('machinecodes.edit' , compact('machinecode'));
        
    }    
    public function update ($id) {
        $machinecode = MachineCode :: find($id);
        $machinecode->name = request('name');
        $machinecode->save();
        return redirect ()->route('machinecodes.list');
    }

    public function delete ($id) {
        $machinecode = MachineCode :: find($id);
        $machinecode->delete();
        return redirect ()->route('machinecodes.list');
    }

    public function show ($id) {
        $machinecode = MachineCode :: find($id);
        return view ('machinecodes.show' , compact('machinecode'));
    }
}
