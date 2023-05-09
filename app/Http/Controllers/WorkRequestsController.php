<?php

namespace App\Http\Controllers;
use App\Events\OrderEvent;
use Illuminate\Http\Request;
use App\Models\WorkRequest;
use App\Models\Machine;
use App\Models\User;

class WorkRequestsController extends Controller
{
    public function index () {
        $workRequests = WorkRequest :: all() ;
        return view ('workRequests.list' , compact ('workRequests')) ;
    }

    public function create () {
        $machines = Machine :: all () ; 
        $users = User :: all () ;
        return view ('workRequests.create') ;
    }

    public function store () {
        $workRequest = new WorkRequest ;
        $workRequest->name = request('name') ;
        $workRequest->save() ;
        return redirect()->route('workRequests.list') ;
         
    }

    public function edit ($id) {
        $workRequest= WorkRequest :: find('$id') ;
        return view ('workRequests.edit' , compact('workRequest')) ; 
    }

    public function update ($id) {
        $workRequest = WorkRequest :: find('$id') ;
        $workRequest->name = request('name') ;
        $workRequest->save() ; 
        return redirect()->route('workRequests.list') ;

    }

    public function delete ($id) {
        $workRequest = WorkRequest :: find('$id') ;
        $workRequest->delete() ;
        return redirect()->route('workRequests.list') ;

    }

    public function show ($id) {
        $workRequest = WorkRequest :: find('$id') ; 
        return view ('workRequests.list' , comapct('workRequest')) ;
    }

    public function index_api(){
        $workRequests = WorkRequest :: all();
        return response()->json(['data' => $workRequests], 200);
    }

    public function show_work_request_details($id){
        $workRequest = WorkRequest :: select('machine_id' , 'id' ,'problem_description')->with('machine.machineCode')-> find($id);
        return response()->json(['data' => $workRequest], 200);
    }

    public function delete_work_request_api($id){
        $workRequest = WorkRequest::find($id);
        $workRequest->delete();
        return response()->json(['data' => 'deleted'], 200);
    }
    public function create_work_request_api(){
        $workRequest = new WorkRequest ;
        $workRequest->problem_description = request('problem_description') ;
        $workRequest ->machine_id = request('machine_id') ;
        $workRequest ->requster_id = request('requster_id') ;
        event(new WorkRequest($workRequest));
        return response()->json(['message' => 'Order created successfully']);
        return response()->json(['data' => 'Added Succesfully'], 200);
    }
    // web sockets
    public function createOrder(Request $request)
{
    // create the order
    $order = WorkRequest::create($request->all());

    // broadcast the event
    event(new WorkRequest($order));

    // return the response
    return response()->json(['message' => 'Order created successfully']);
}

}
