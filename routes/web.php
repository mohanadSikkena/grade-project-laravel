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
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';


/* Home Routes */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homeworkorder', [App\Http\Controllers\HomeController::class, 'workorder'])->name('home.WorkOrder');



/* Machines Routes */
Route::get('/machines' , [MachinesController::class , 'index'])->name('machines.list')->middleWare("auth" ,"role_and_permission:manger,view_machine_details");
Route::post('/machines/save' , [MachinesController::class , 'store'])->name('machines.save')->middleWare("auth");
Route::get('/machines/new' , [MachinesController::class , 'create'])->name('machines.new')->middleWare("auth");
Route::get('/machines/{id}/show' , [MachinesController::class , 'show'])->name('machines.show')->middleWare("auth");
Route::get('/machines/{id}/edit' , [MachinesController::class , 'edit'])->name('machines.edit')->middleWare("auth");
Route::put('/machines/{id}/update' , [MachinesController::class , 'update'])->name('machines.update')->middleWare("auth");
Route::delete('/machines/{id}/delete' , [MachinesController::class , 'delete'])->name('machines.delete')->middleWare("auth");

/* Matrials Routes */
Route::get('/materials' , [MatrialsController::class , 'index'])->name('materials.list')->middleWare("auth");
Route::post('/materials/save' , [MatrialsController::class , 'store'])->name('materials.save')->middleWare("auth");
Route::get('/materials/new' , [MatrialsController::class , 'create'])->name('materials.new')->middleWare("auth");
Route::get('/materials/{id}/show' , [MatrialsController::class , 'show'])->name('materials.show')->middleWare("auth");
Route::get('/materials/{id}/edit' , [MatrialsController::class , 'edit'])->name('materials.edit')->middleWare("auth");
Route::put('/materials/{id}/update' , [MatrialsController::class , 'update'])->name('materials.update')->middleWare("auth");
Route::delete('/materials/{id}/delete' , [MatrialsController::class , 'delete'])->name('materials.delete')->middleWare("auth");

/* Machine Codes Routes */
Route::get('/machineCodes' , [MachineCodesController::class , 'index'])->name('machineCodes.list')->middleWare("auth");
Route::post('/machineCodes/save' , [MachineCodesController::class , 'store'])->name('machineCodes.save')->middleWare("auth");
Route::get('/machineCodes/new' , [MachineCodesController::class , 'create'])->name('machineCodes.new')->middleWare("auth");
Route::get('/machineCodes/{id}/show' , [MachineCodesController::class , 'show'])->name('machineCodes.show')->middleWare("auth");
Route::get('/machineCodes/{id}/edit' , [MachineCodesController::class , 'edit'])->name('machineCodes.edit')->middleWare("auth");
Route::put('/machineCodes/{id}/update' , [MachineCodesController::class , 'update'])->name('machineCodes.update')->middleWare("auth");
Route::delete('/machineCodes/{id}/delete' , [MachineCodesController::class , 'delete'])->name('machineCodes.delete')->middleWare("auth");

/* Spare Parts Routes */
Route::get('/spareParts' , [SparePartsController::class , 'index'])->name('spareParts.list')->middleWare("auth");
Route::post('/spareParts/save' , [SparePartsController::class , 'store'])->name('spareParts.save')->middleWare("auth");
Route::get('/spareParts/new' , [SparePartsController::class , 'create'])->name('spareParts.new')->middleWare("auth");
Route::get('/spareParts/{id}/show' , [SparePartsController::class , 'show'])->name('spareParts.show')->middleWare("auth");
Route::get('/spareParts/{id}/edit' , [SparePartsController::class , 'edit'])->name('spareParts.edit')->middleWare("auth");
Route::put('/spareParts/{id}/update' , [SparePartsController::class , 'update'])->name('spareParts.update')->middleWare("auth");
Route::delete('/spareParts/{id}/delete' , [SparePartsController::class , 'delete'])->name('spareParts.delete')->middleWare("auth");

/*planeed Work Orders Routes */
Route::get('/planned_workorder' , [PlannedWorkOrdersController::class , 'index'])->name('planned_workorder.list')->middleWare("auth");
Route::post('/planned_workorder/save' , [PlannedWorkOrdersController::class , 'store'])->name('planned_workorder.save')->middleWare("auth");
Route::get('/planned_workorder/new' , [PlannedWorkOrdersController::class , 'create'])->name('planned_workorder.new')->middleWare("auth");
Route::get('/planned_workorder/{id}/show' , [PlannedWorkOrdersController::class , 'show'])->name('planned_workorder.show')->middleWare("auth");
Route::get('/planned_workorder/{id}/edit' , [PlannedWorkOrdersController::class , 'edit'])->name('planned_workorder.edit')->middleWare("auth");
Route::put('/planned_workorder/{id}/update' , [PlannedWorkOrdersController::class , 'update'])->name('planned_workorder.update')->middleWare("auth");
Route::delete('/planned_workorder/{id}/delete' , [PlannedWorkOrdersController::class , 'delete'])->name('planned_workorder.delete')->middleWare("auth");

/*failure Work Orders Routes */
Route::get('/failure_workorder' , [FailureWorkOrdersController::class , 'index'])->name('failure_workorder.list');
Route::post('/failure_workorder/save' , [FailureWorkOrdersController::class , 'store'])->name('failure_workorder.save')->middleWare("auth");
Route::get('/failure_workorder/new' , [FailureWorkOrdersController::class , 'create'])->name('failure_workorder.new')->middleWare("auth");
Route::get('/failure_workorder/{id}/show' , [FailureWorkOrdersController::class , 'show'])->name('failure_workorder.show')->middleWare("auth");
Route::get('/failure_workorder/{id}/edit' , [FailureWorkOrdersController::class , 'edit'])->name('failure_workorder.edit')->middleWare("auth");
Route::put('/failure_workorder/{id}/update' , [FailureWorkOrdersController::class , 'update'])->name('failure_workorder.update')->middleWare("auth");
Route::delete('/failure_workorder/{id}/delete' , [FailureWorkOrdersController::class , 'delete'])->name('failure_workorder.delete')->middleWare("auth");


/* Work Requests Routes */
Route::get('/workRequests' , [WorkRequestsController::class , 'index'])->name('workRequests.list')->middleWare("auth");
Route::post('/workRequests/save' , [WorkRequestsController::class , 'store'])->name('workRequests.save')->middleWare("auth");
Route::get('/workRequests/new' , [WorkRequestsController::class , 'create'])->name('workRequests.new')->middleWare("auth");
Route::get('/workRequests/{id}/show' , [WorkRequestsController::class , 'show'])->name('workRequests.show')->middleWare("auth");
Route::get('/workRequests/{id}/edit' , [WorkRequestsController::class , 'edit'])->name('workRequests.edit')->middleWare("auth");
Route::put('/workRequests/{id}/update' , [WorkRequestsController::class , 'update'])->name('workRequests.update')->middleWare("auth");
Route::delete('/workRequests/{id}/delete' , [WorkRequestsController::class , 'delete'])->name('workRequests.delete')->middleWare("auth");

/* Work Status Routes */
Route::get('/workStatuses' , [WorkStatusController::class , 'index'])->name('workStatuses.list')->middleWare("auth");
Route::post('/workStatuses/save' , [WorkStatusController::class , 'store'])->name('workStatuses.save')->middleWare("auth");
Route::get('/workStatuses/new' , [WorkStatusController::class , 'create'])->name('workStatuses.new')->middleWare("auth");
Route::get('/workStatuses/{id}/show' , [WorkStatusController::class , 'show'])->name('workStatuses.show')->middleWare("auth");
Route::get('/workStatuses/{id}/edit' , [WorkStatusController::class , 'edit'])->name('workStatuses.edit')->middleWare("auth");
Route::put('/workStatuses/{id}/update' , [WorkStatusController::class , 'update'])->name('workStatuses.update')->middleWare("auth");
Route::delete('/workStatuses/{id}/delete' , [WorkStatusController::class , 'delete'])->name('workStatuses.delete')->middleWare("auth");

/* Work Trades Routes */
Route::get('/workTrades' , [WorkTradesController::class , 'index'])->name('workTrades.list')->middleWare("auth");
Route::post('/workTrades/save' , [WorkTradesController::class , 'store'])->name('workTrades.save')->middleWare("auth");
Route::get('/workTrades/new' , [WorkTradesController::class , 'create'])->name('workTrades.new')->middleWare("auth");
Route::get('/workTrades/{id}/show' , [WorkTradesController::class , 'show'])->name('workTrades.show')->middleWare("auth");
Route::get('/workTrades/{id}/edit' , [WorkTradesController::class , 'edit'])->name('workTrades.edit')->middleWare("auth");
Route::put('/workTrades/{id}/update' , [WorkTradesController::class , 'update'])->name('workTrades.update')->middleWare("auth");
Route::delete('/workTrades/{id}/delete' , [WorkTradesController::class , 'delete'])->name('workTrades.delete')->middleWare("auth");

/* Work Types Routes */
Route::get('/workTypes' , [WorkTypesController::class , 'index'])->name('workTypes.list')->middleWare("auth");
Route::post('/workTypes/save' , [WorkTypesController::class , 'store'])->name('workTypes.save')->middleWare("auth");
Route::get('/workTypes/new' , [WorkTypesController::class , 'create'])->name('workTypes.new')->middleWare("auth");
Route::get('/workTypes/{id}/show' , [WorkTypesController::class , 'show'])->name('workTypes.show')->middleWare("auth");
Route::get('/workTypes/{id}/edit' , [WorkTypesController::class , 'edit'])->name('workTypes.edit')->middleWare("auth");
Route::put('/workTypes/{id}/update' , [WorkTypesController::class , 'update'])->name('workTypes.update')->middleWare("auth");
Route::delete('/workTypes/{id}/delete' , [WorkTypesController::class , 'delete'])->name('workTypes.delete')->middleWare("auth");

/* Locations Routes */
Route::get('/locations' , [LocationsController::class , 'index'])->name('locations.list')->middleWare("auth");
Route::post('/locations/save' , [LocationsController::class , 'store'])->name('locations.save')->middleWare("auth");
Route::get('/locations/new' , [LocationsController::class , 'create'])->name('locations.new')->middleWare("auth");
Route::get('/locations/{id}/show' , [LocationsController::class , 'show'])->name('locations.show')->middleWare("auth");
Route::get('/locations/{id}/edit' , [LocationsController::class , 'edit'])->name('locations.edit')->middleWare("auth");
Route::put('/locations/{id}/update' , [LocationsController::class , 'update'])->name('locations.update')->middleWare("auth");
Route::delete('/locations/{id}/delete' , [LocationsController::class , 'delete'])->name('locations.delete')->middleWare("auth");

/* Departments Routes */
Route::get('/departments' , [DepartmentsController::class , 'index'])->name('departments.list')->middleWare("auth");
Route::post('/departments/save' , [DepartmentsController::class , 'store'])->name('departments.save')->middleWare("auth");
Route::get('/departments/new' , [DepartmentsController::class , 'create'])->name('departments.new')->middleWare("auth");
Route::get('/departments/{id}/show' , [DepartmentsController::class , 'show'])->name('departments.show')->middleWare("auth");
Route::get('/departments/{id}/edit' , [DepartmentsController::class , 'edit'])->name('departments.edit')->middleWare("auth");
Route::put('/departments/{id}/update' , [DepartmentsController::class , 'update'])->name('departments.update')->middleWare("auth");
Route::delete('/departments/{id}/delete' , [DepartmentsController::class , 'delete'])->name('departments.delete')->middleWare("auth");

/* Categories Routes */
Route::get('/categories' , [CategoriesController::class , 'index'])->name('categories.list')->middleWare("auth");
Route::post('/categories/save' , [CategoriesController::class , 'store'])->name('categories.save')->middleWare("auth");
Route::get('/categories/new' , [CategoriesController::class , 'create'])->name('categories.new')->middleWare("auth");
Route::get('/categories/{id}/show' , [CategoriesController::class , 'show'])->name('categories.show')->middleWare("auth");
Route::get('/categories/{id}/edit' , [CategoriesController::class , 'edit'])->name('categories.edit')->middleWare("auth");
Route::put('/categories/{id}/update' , [CategoriesController::class , 'update'])->name('categories.update')->middleWare("auth");
Route::delete('/categories/{id}/delete' , [CategoriesController::class , 'delete'])->name('categories.delete')->middleWare("auth");

/* Criticals Routes */
Route::get('/criticals' , [CriticalsController::class , 'index'])->name('criticals.list')->middleWare("auth");
Route::post('/criticals/save' , [CriticalsController::class , 'store'])->name('criticals.save')->middleWare("auth");
Route::get('/criticals/new' , [CriticalsController::class , 'create'])->name('criticals.new')->middleWare("auth");
Route::get('/criticals/{id}/show' , [CriticalsController::class , 'show'])->name('criticals.show')->middleWare("auth");
Route::get('/criticals/{id}/edit' , [CriticalsController::class , 'edit'])->name('criticals.edit')->middleWare("auth");
Route::put('/criticals/{id}/update' , [CriticalsController::class , 'update'])->name('criticals.update')->middleWare("auth");
Route::delete('/criticals/{id}/delete' , [CriticalsController::class , 'delete'])->name('criticals.delete')->middleWare("auth");

/* Users Routes */
Route::get('/users' , [UsersController::class , 'index'])->name('users.list')->middleWare("auth");
Route::post('/users/save' , [UsersController::class , 'store'])->name('users.save')->middleWare("auth");
Route::get('/users/new' , [UsersController::class , 'create'])->name('users.new')->middleWare("auth");
Route::get('/users/{id}/show' , [UsersController::class , 'show'])->name('users.show')->middleWare("auth");
Route::get('/users/{id}/edit' , [UsersController::class , 'edit'])->name('users.edit')->middleWare("auth");
Route::put('/users/{id}/update' , [UsersController::class , 'update'])->name('users.update')->middleWare("auth");
Route::delete('/users/{id}/delete' , [UsersController::class , 'delete'])->name('users.delete')->middleWare("auth");


