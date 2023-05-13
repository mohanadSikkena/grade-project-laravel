<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use app\Models\User;

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
        
        

        if (Gate::allows('view-all',$user)) {
            
        } elseif (Gate::allows('view-coordinator',$user)) {
            
        } /*elseif (Gate::allows('view-engineer',$user)) {
            
        } elseif (Gate::allows('view-technician',$user)) {

        }elseif (Gate::allows('view-worker',$user)) {

   
        } */else {
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
