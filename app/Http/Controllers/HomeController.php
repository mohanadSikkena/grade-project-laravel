<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use app\Models\User;
use app\Models\Matrial;
use app\Models\Machine;
use app\Models\WorkOrder;
use app\Models\WorkRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        
        if (Gate::allows('view-all',[WorkRequest::class, WorkOrder::class, Machine::class, Matrial::class],$user)) {
            
        } elseif (Gate::allows('view-coordinator',[WorkRequest::class],$user)) {
            
        } elseif (Gate::allows('view-engineer',[WorkRequest::class, WorkOrder::class],$user)) {
            
        } elseif (Gate::allows('view-technician', [WorkOrder::class],$user)) {

        } elseif (Gate::allows('view-worker',$user)) {

   
        } else {
            // Unauthorized access
            abort(403);
        }
        
        return view('home.home');
    }
    public function workorder()
    {
        return view('home.WorkOrder');
    }


    
}
