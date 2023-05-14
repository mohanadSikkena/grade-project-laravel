<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewWorkRequest;
use Illuminate\Support\Facades\Validator;

use App\Events\OrderEvent;
use Illuminate\Http\Request;
use App\Models\WorkRequest;
use App\Models\WorkType;
use App\Models\WorkTrade;
use App\Models\WorkPriority;
use App\Models\WorkStatus;
use App\Models\Matrial;
use App\Models\Machine;
use App\Models\User;

class WorkRequestsController extends Controller
{
    public function index () {
        $workRequests = WorkRequest :: all() ;
        return view ('workRequests.list' , compact ('workRequests')) ;
    }



    public function edit ($id) {
        $workRequest= WorkRequest :: find($id) ;
        $machines = Machine:: all();
        $users = User:: all();
        return view ('workRequests.edit' , compact('workRequest','machines','users')) ;
    }

    public function update ($id) {
        $workRequest = WorkRequest :: find($id) ;
        $workRequest->problem_description = request('problem_description') ;
        $workRequest->machine_id = request('machine_id') ;
        $workRequest ->requster_id = request('requster_id') ;
        $workRequest->save() ;
        return redirect()->route('workRequests.list') ;

    }

    public function delete ($id) {
        $workRequest = WorkRequest :: find($id) ;
        $workRequest->delete() ;
        return redirect()->route('workRequests.list') ;

    }

    public function show ($id) {
        $workRequest = WorkRequest :: find($id) ;
        return view ('workRequests.report' , compact('workRequest')) ;
    }

    public function index_api()
{
    $workRequests = WorkRequest::all();

    return response()->json(['data' => $workRequests], 200);
}

public function show_work_request_details($id)
{
    $workRequest = WorkRequest::select('machine_id', 'id', 'problem_description', 'requster_id')->with('machine.machineCode')->find($id);

    if (!$workRequest) {
        return response()->json(['error' => 'Work request not found'], 404);
    }

    return response()->json(['data' => $workRequest], 200);
}

public function delete_work_request_api($id)
{
    $workRequest = WorkRequest::find($id);

    if (!$workRequest) {
        return response()->json(['error' => 'Work request not found'], 404);
    }

    $workRequest->delete();

    return response()->json(['data' => 'deleted'], 200);
}

public function create_work_request_api()
{
    $workRequest = new WorkRequest;
    $workRequest->problem_description = request('problem_description');
    $workRequest->machine_id = request('machine_id');
    $workRequest->requster_id = request('requster_id');
    $workRequest->save();

    $FcmToken = User::whereNotNull('device_key')
        ->whereIn("role_id", [1, 2, 3])
        ->pluck('device_key');

    if (count($FcmToken) == 0) {
        return response()->json(['data' => 'Added Successfully'], 200);
    }

    $data = [
        "registration_ids" => $FcmToken,
        "notification" => [
            "title" => "Work Request Received",
            "body" => "الفرعون العاشق جاهز للاحتفال",
        ]
    ];

    $notificationController = new WebNotificationController;
    $notificationController->sendWebNotification($data);

    return response()->json(['data' => 'Added Successfully'], 200);
}

    public function search(){
        $term = request('term');
            $workRequests = WorkRequest::where('problem_description', 'like','%' . $term . '%')
            ->orWhere('id', 'LIKE', "%$term%")
            ->orWhereHas('machine', function ($machine) {
                $term = request('term');
                $machine->where('name', 'LIKE', "%$term%");
            })
            
            ->orWhereHas('user', function ($user) {
                $term = request('term');
                $user->where('name', 'LIKE', "%$term%");
            })->get();
            return view('workRequests.search', compact('workRequests'));
    }


}
