<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MachinesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WorkRequestsController;
use App\Http\Controllers\WorkOrdersController;
use App\Http\Controllers\PlannedWorkOrdersController;
use App\Http\Controllers\FailureWorkOrdersController;
use App\Http\Controllers\UsersController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Login API Routes */
Route::post('/login', [AuthController::class , 'login']);
Route::post('/user/test', [AuthController::class , 'get_user'])->middleware('auth:sanctum');
Route::get('/user/logout', [AuthController::class , 'logout'])->middleware('auth:sanctum');

/* Machines API Routes */
Route::get('/machines' , [MachinesController::class ,'index_api'])->middleware('auth:sanctum' , 'role_and_permission:manger,view_machine_details');
Route::get('/machines/{id}' , [MachinesController::class ,'get_machine']);
Route::get('machines/{id}/show_details' , [MachinesController::class ,'show_machine_api']);
Route::delete('machines/{id}/delete' , [MachinesController::class ,'delete_machine_api']);


/* WO API Routes */
Route::get('/workorders/manger_work_orders' ,[PlannedWorkOrdersController::class , 'index_api_manger']);
Route::get('/workorders/{id}/user_work_orders' ,[PlannedWorkOrdersController::class , 'index_api_user']);
Route::get('/work_order/{id}/show' , [PlannedWorkOrdersController::class ,'show_work_order_api']);
Route::PUT('/workorders/{id}/transform' ,[PlannedWorkOrdersController::class , 'transform']);
Route::delete('/workorders/{id}/delete' , [PlannedWorkOrdersController::class ,'delete_work_order_api']);
//Failure
Route::post('/work_order/{id}' , [FailureWorkOrdersController::class , 'create_work_order_api']);


/* WR API Routes */
Route::get('/work_requests' , [WorkRequestsController::class ,'index_api']);
Route::get('/work_requests/{id}/show_details' , [WorkRequestsController::class , 'show_work_request_details']);
Route::post('/work_requests/create' , [WorkRequestsController::class , 'create_work_request_api']);
Route::delete('work_requests/{id}/delete' , [WorkRequestsController::class ,'delete_work_request_api']);

/*Users API Routes*/
Route::get('/users', [UsersController::class,'get_users_roles_api']);
