<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\MachinesController;
use App\HTTP\Controllers\MatrialsController;
use App\HTTP\Controllers\MachineCodesController;
use App\HTTP\Controllers\SparePartsController;
use App\HTTP\Controllers\PlannedWorkOrdersController;
use App\HTTP\Controllers\FailureWorkOrdersController;
use App\HTTP\Controllers\WorkRequestsController;
use App\HTTP\Controllers\WorkStatusController;
use App\HTTP\Controllers\WorkTradesController;
use App\HTTP\Controllers\WorkTypesController;
use App\HTTP\Controllers\LocationsController;
use App\HTTP\Controllers\DepartmentsController;
use App\HTTP\Controllers\CategoriesController;
use App\HTTP\Controllers\CriticalsController;
use App\HTTP\Controllers\UsersController;
use App\Services\FirebaseService;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. ,"role_and_permission:manger," Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

require __DIR__.'/auth.php';


/* Home Routes */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleWare("auth" );
Route::get('/homeworkorder', [App\Http\Controllers\HomeController::class, 'workorder'])->name('home.WorkOrder')->middleWare("auth");
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('Aboutus')->middleWare("auth" );




/* Machines Routes */
Route::get('/machines' , [MachinesController::class , 'index'])->name('machines.list')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::post('/machines/save' , [MachinesController::class , 'store'])->name('machines.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/machines/new' , [MachinesController::class , 'create'])->name('machines.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/machines/{id}/show' , [MachinesController::class , 'show'])->name('machines.show')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/machines/{id}/edit' , [MachinesController::class , 'edit'])->name('machines.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/machines/{id}/update' , [MachinesController::class , 'update'])->name('machines.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/machines/{id}/delete' , [MachinesController::class , 'delete'])->name('machines.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/* Matrials Routes */
Route::get('/materials' , [MatrialsController::class , 'index'])->name('materials.list')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::post('/materials/save' , [MatrialsController::class , 'store'])->name('materials.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/materials/new' , [MatrialsController::class , 'create'])->name('materials.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/materials/{id}/show' , [MatrialsController::class , 'show'])->name('materials.show')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/materials/{id}/edit' , [MatrialsController::class , 'edit'])->name('materials.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/materials/{id}/update' , [MatrialsController::class , 'update'])->name('materials.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/materials/{id}/delete' , [MatrialsController::class , 'delete'])->name('materials.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/* Machine Codes Routes */
Route::get('/machineCodes' , [MachineCodesController::class , 'index'])->name('machineCodes.list')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::post('/machineCodes/save' , [MachineCodesController::class , 'store'])->name('machineCodes.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/machineCodes/new' , [MachineCodesController::class , 'create'])->name('machineCodes.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/machineCodes/{id}/show' , [MachineCodesController::class , 'show'])->name('machineCodes.show')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/machineCodes/{id}/edit' , [MachineCodesController::class , 'edit'])->name('machineCodes.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/machineCodes/{id}/update' , [MachineCodesController::class , 'update'])->name('machineCodes.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/machineCodes/{id}/delete' , [MachineCodesController::class , 'delete'])->name('machineCodes.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/* Spare Parts Routes */
Route::get('/spareParts' , [SparePartsController::class , 'index'])->name('spareParts.list')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::post('/spareParts/save' , [SparePartsController::class , 'store'])->name('spareParts.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/spareParts/new' , [SparePartsController::class , 'create'])->name('spareParts.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/spareParts/{id}/show' , [SparePartsController::class , 'show'])->name('spareParts.show')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/spareParts/{id}/edit' , [SparePartsController::class , 'edit'])->name('spareParts.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/spareParts/{id}/update' , [SparePartsController::class , 'update'])->name('spareParts.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/spareParts/{id}/delete' , [SparePartsController::class , 'delete'])->name('spareParts.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/*planeed Work Orders Routes */
Route::get('/planned_workorder' , [PlannedWorkOrdersController::class , 'index'])->name('planned_workorder.list')->middleWare("auth" ,"role_and_permission:manger|engineer|technician,user_work_orders");
Route::post('/planned_workorder/save' , [PlannedWorkOrdersController::class , 'store'])->name('planned_workorder.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/planned_workorder/new' , [PlannedWorkOrdersController::class , 'create'])->name('planned_workorder.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/planned_workorder/{id}/show' , [PlannedWorkOrdersController::class , 'show'])->name('planned_workorder.show')->middleWare("auth" ,"role_and_permission:manger|engineer|technician,user_work_orders");
Route::get('/planned_workorder/{id}/edit' , [PlannedWorkOrdersController::class , 'edit'])->name('planned_workorder.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/planned_workorder/{id}/update' , [PlannedWorkOrdersController::class , 'update'])->name('planned_workorder.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/planned_workorder/{id}/delete' , [PlannedWorkOrdersController::class , 'delete'])->name('planned_workorder.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/*failure Work Orders Routes */
Route::get('/failure_workorder' , [FailureWorkOrdersController::class , 'index'])->name('failure_workorder.list')->middleWare("auth" ,"role_and_permission:manger|engineer|technician,user_work_orders");
Route::post('/failure_workorder/save/{id}' , [FailureWorkOrdersController::class , 'store'])->name('failure_workorder.save')->middleWare("auth" ,"role_and_permission:manger|coordinator|engineer,create_work_orders");
Route::get('/failure_workorder/{id}/new' , [FailureWorkOrdersController::class , 'create'])->name('failure_workorder.new')->middleWare("auth" ,"role_and_permission:manger|coordinator|engineer,create_work_orders");
Route::get('/failure_workorder/{id}/show' , [FailureWorkOrdersController::class , 'show'])->name('failure_workorder.show')->middleWare("auth" ,"role_and_permission:manger|engineer|technician,user_work_orders");
Route::get('/failure_workorder/{id}/edit' , [FailureWorkOrdersController::class , 'edit'])->name('failure_workorder.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/failure_workorder/{id}/update' , [FailureWorkOrdersController::class , 'update'])->name('failure_workorder.update')->middleWare("auth","role_and_permission:manger,maneger_access");
Route::delete('/failure_workorder/{id}/delete' , [FailureWorkOrdersController::class , 'delete'])->name('failure_workorder.delete')->middleWare("auth","role_and_permission:manger,maneger_access");


/* Work Requests Routes */
Route::get('/workRequests' , [WorkRequestsController::class , 'index'])->name('workRequests.list')->middleWare("auth" ,"role_and_permission:manger|coordinator|engineer,all_work_requests");
Route::get('/workRequests/{id}/show' , [WorkRequestsController::class , 'show'])->name('workRequests.show')->middleWare("auth" ,"role_and_permission:manger|coordinator|engineer,create_work_orders");
Route::get('/workRequests/{id}/edit' , [WorkRequestsController::class , 'edit'])->name('workRequests.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/workRequests/{id}/update' , [WorkRequestsController::class , 'update'])->name('workRequests.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/workRequests/{id}/delete' , [WorkRequestsController::class , 'delete'])->name('workRequests.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/* Work Status Routes */
Route::get('/workStatuses' , [WorkStatusController::class , 'index'])->name('workStatuses.list')->middleWare("auth" ,"role_and_permission:manger,all_work_requests");
Route::post('/workStatuses/save' , [WorkStatusController::class , 'store'])->name('workStatuses.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/workStatuses/new' , [WorkStatusController::class , 'create'])->name('workStatuses.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/workStatuses/{id}/show' , [WorkStatusController::class , 'show'])->name('workStatuses.show')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/workStatuses/{id}/edit' , [WorkStatusController::class , 'edit'])->name('workStatuses.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/workStatuses/{id}/update' , [WorkStatusController::class , 'update'])->name('workStatuses.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/workStatuses/{id}/delete' , [WorkStatusController::class , 'delete'])->name('workStatuses.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/* Work Trades Routes */
Route::get('/workTrades' , [WorkTradesController::class , 'index'])->name('workTrades.list')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::post('/workTrades/save' , [WorkTradesController::class , 'store'])->name('workTrades.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/workTrades/new' , [WorkTradesController::class , 'create'])->name('workTrades.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/workTrades/{id}/show' , [WorkTradesController::class , 'show'])->name('workTrades.show')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/workTrades/{id}/edit' , [WorkTradesController::class , 'edit'])->name('workTrades.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/workTrades/{id}/update' , [WorkTradesController::class , 'update'])->name('workTrades.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/workTrades/{id}/delete' , [WorkTradesController::class , 'delete'])->name('workTrades.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/* Work Types Routes */
Route::get('/workTypes' , [WorkTypesController::class , 'index'])->name('workTypes.list')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::post('/workTypes/save' , [WorkTypesController::class , 'store'])->name('workTypes.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/workTypes/new' , [WorkTypesController::class , 'create'])->name('workTypes.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/workTypes/{id}/show' , [WorkTypesController::class , 'show'])->name('workTypes.show')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/workTypes/{id}/edit' , [WorkTypesController::class , 'edit'])->name('workTypes.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/workTypes/{id}/update' , [WorkTypesController::class , 'update'])->name('workTypes.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/workTypes/{id}/delete' , [WorkTypesController::class , 'delete'])->name('workTypes.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/* Locations Routes */
Route::get('/locations' , [LocationsController::class , 'index'])->name('locations.list')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::post('/locations/save' , [LocationsController::class , 'store'])->name('locations.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/locations/new' , [LocationsController::class , 'create'])->name('locations.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/locations/{id}/show' , [LocationsController::class , 'show'])->name('locations.show')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/locations/{id}/edit' , [LocationsController::class , 'edit'])->name('locations.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/locations/{id}/update' , [LocationsController::class , 'update'])->name('locations.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/locations/{id}/delete' , [LocationsController::class , 'delete'])->name('locations.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/* Departments Routes */
Route::get('/departments' , [DepartmentsController::class , 'index'])->name('departments.list')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::post('/departments/save' , [DepartmentsController::class , 'store'])->name('departments.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/departments/new' , [DepartmentsController::class , 'create'])->name('departments.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/departments/{id}/show' , [DepartmentsController::class , 'show'])->name('departments.show')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/departments/{id}/edit' , [DepartmentsController::class , 'edit'])->name('departments.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/departments/{id}/update' , [DepartmentsController::class , 'update'])->name('departments.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/departments/{id}/delete' , [DepartmentsController::class , 'delete'])->name('departments.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/* Categories Routes */
Route::get('/categories' , [CategoriesController::class , 'index'])->name('categories.list')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::post('/categories/save' , [CategoriesController::class , 'store'])->name('categories.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/categories/new' , [CategoriesController::class , 'create'])->name('categories.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/categories/{id}/show' , [CategoriesController::class , 'show'])->name('categories.show')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/categories/{id}/edit' , [CategoriesController::class , 'edit'])->name('categories.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/categories/{id}/update' , [CategoriesController::class , 'update'])->name('categories.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/categories/{id}/delete' , [CategoriesController::class , 'delete'])->name('categories.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/* Criticals Routes */
Route::get('/criticals' , [CriticalsController::class , 'index'])->name('criticals.list')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::post('/criticals/save' , [CriticalsController::class , 'store'])->name('criticals.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/criticals/new' , [CriticalsController::class , 'create'])->name('criticals.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/criticals/{id}/show' , [CriticalsController::class , 'show'])->name('criticals.show')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/criticals/{id}/edit' , [CriticalsController::class , 'edit'])->name('criticals.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/criticals/{id}/update' , [CriticalsController::class , 'update'])->name('criticals.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/criticals/{id}/delete' , [CriticalsController::class , 'delete'])->name('criticals.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/* Users Routes */
Route::get('/users' , [UsersController::class , 'index'])->name('users.list')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::post('/users/save' , [UsersController::class , 'store'])->name('users.save')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/users/new' , [UsersController::class , 'create'])->name('users.new')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/users/{id}/show' , [UsersController::class , 'show'])->name('users.show')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/users/{id}/edit' , [UsersController::class , 'edit'])->name('users.edit')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::put('/users/{id}/update' , [UsersController::class , 'update'])->name('users.update')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::delete('/users/{id}/delete' , [UsersController::class , 'delete'])->name('users.delete')->middleWare("auth" ,"role_and_permission:manger,maneger_access");

/*search*/
Route::get('/users/search' , [UsersController::class , 'search'])->name('users.search')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/materials/search' , [MatrialsController::class , 'search'])->name('materials.search')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/workRequests/search' , [WorkRequestsController::class , 'search'])->name('workRequest.search')->middleWare("auth" ,"role_and_permission:manger|coordinator|engineer,all_work_requests");
Route::get('/machines/search' , [MachinesController::class , 'search'])->name('machines.search')->middleWare("auth" ,"role_and_permission:manger,maneger_access");
Route::get('/failure_workorder/search' , [FailureWorkOrdersController::class , 'search'])->name('failure_workorder.search')->middleWare("auth" ,"role_and_permission:manger|engineer|technician,user_work_orders");
Route::get('/planned_workorder/search' , [PlannedWorkOrdersController::class , 'search'])->name('planned_workorder.search')->middleWare("auth" ,"role_and_permission:manger|engineer|technician,user_work_orders");



