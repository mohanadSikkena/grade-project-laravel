<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
            'fcm' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $user = $request->user();
        $user->device_key = request('fcm');
        $user->save();

        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json([
            'id' => $user->id,
            'role' => $user->role,
            'token' => $token
        ]);
    }

    public function get_user(){
        $user = Auth::user();
        $userx = User:: with('role')->find($user->id);
        $userx->device_key = request('fcm');
        $userx->save();
        return response()->json($userx , 200);

    }

    public function logout(){
        $user=Auth::user();
        $user->device_key=null;
        $user->save();
        return response()->json("user Logged Out Successfully", 200, );
    }
}
