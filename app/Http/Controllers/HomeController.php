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
        

        if (Gate::allows('view-all',$user)) {
            $manger = Gate::allows('view-all');
            return view('home.home', ['manger' => $manger]);
        } elseif (Gate::allows('view-coordinator',$user)) {
            $coordinator = Gate::allows('view-all');
            return view('home.home', ['coordinator' => $coordinator]);
        } elseif (Gate::allows('view-engineer',$user)) {
            $engineer = Gate::allows('view-all');
            return view('home.home', ['engineer' => $engineer]);
        } elseif (Gate::allows('view-technician',$user)) {
            $technician = Gate::allows('view-all');
            return view('home.home', ['technician' => $technician]);
        }elseif (Gate::allows('view-worker',$user)) {
            $worker = Gate::allows('view-all');
            return view('home.home', ['worker' => $worker]);
        }
        else {
            // Unauthorized access
            abort(403);
        }
        
        return view('home.home');
    }
    public function workorder()
    {
        return view('home.WorkOrder');
    }

    public function aboutus()
    {
        return view('aboutUs');
    }


    
}
