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


/* Machines Routes */
Route::get('/machines' , [MachinesController::class , 'index'])->name('machines.list')->middleWare("auth");
Route::post('/machines/save' , [MachinesController::class , 'store'])->name('machines.save')->middleWare("auth");
Route::get('/machines/new' , [MachinesController::class , 'create'])->name('machines.new')->middleWare("auth");
Route::get('/machines/{id}/show' , [MachinesController::class , 'show'])->name('machines.show')->middleWare("auth");
Route::get('/machines/{id}/edit' , [MachinesController::class , 'edit'])->name('machines.edit')->middleWare("auth");
Route::put('/machines/{id}/update' , [MachinesController::class , 'update'])->name('machines.update')->middleWare("auth");
Route::delete('/machines/{id}/delete' , [MachinesController::class , 'delete'])->name('machines.delete')->middleWare("auth");

/* Matrials Routes */
Route::get('/matrials' , [MatrialsController::class , 'index'])->name('matrials.list')->middleWare("auth");
Route::post('/matrials/save' , [MatrialsController::class , 'store'])->name('matrials.save')->middleWare("auth");
Route::get('/matrials/new' , [MatrialsController::class , 'create'])->name('matrials.new')->middleWare("auth");
Route::get('/matrials/{id}/show' , [MatrialsController::class , 'show'])->name('matrials.show')->middleWare("auth");
Route::get('/matrials/{id}/edit' , [MatrialsController::class , 'edit'])->name('matrials.edit')->middleWare("auth");
Route::put('/matrials/{id}/update' , [MatrialsController::class , 'update'])->name('matrials.update')->middleWare("auth");
Route::delete('/matrials/{id}/delete' , [MatrialsController::class , 'delete'])->name('matrials.delete')->middleWare("auth");

/* Machine Codes Routes */
Route::get('/machinecodes' , [MachineCodesController::class , 'index'])->name('machinecodes.list')->middleWare("auth");
Route::post('/machinecodes/save' , [MachineCodesController::class , 'store'])->name('machinecodes.save')->middleWare("auth");
Route::get('/machinecodes/new' , [MachineCodesController::class , 'create'])->name('machinecodes.new')->middleWare("auth");
Route::get('/machinecodes/{id}/show' , [MachineCodesController::class , 'show'])->name('machinecodes.show')->middleWare("auth");
Route::get('/machinecodes/{id}/edit' , [MachineCodesController::class , 'edit'])->name('machinecodes.edit')->middleWare("auth");
Route::put('/machinecodes/{id}/update' , [MachineCodesController::class , 'update'])->name('machinecodes.update')->middleWare("auth");
Route::delete('/machinecodes/{id}/delete' , [MachineCodesController::class , 'delete'])->name('machinecodes.delete')->middleWare("auth");

/* Spare Parts Routes */
Route::get('/spareparts' , [SparePartsController::class , 'index'])->name('spareparts.list')->middleWare("auth");
Route::post('/spareparts/save' , [SparePartsController::class , 'store'])->name('spareparts.save')->middleWare("auth");
Route::get('/spareparts/new' , [SparePartsController::class , 'create'])->name('spareparts.new')->middleWare("auth");
Route::get('/spareparts/{id}/show' , [SparePartsController::class , 'show'])->name('spareparts.show')->middleWare("auth");
Route::get('/spareparts/{id}/edit' , [SparePartsController::class , 'edit'])->name('spareparts.edit')->middleWare("auth");
Route::put('/spareparts/{id}/update' , [SparePartsController::class , 'update'])->name('spareparts.update')->middleWare("auth");
Route::delete('/spareparts/{id}/delete' , [SparePartsController::class , 'delete'])->name('spareparts.delete')->middleWare("auth");

/*planeed Work Orders Routes */
Route::get('/planeed_workorders' , [PlaneedWorkOrdersController::class , 'index'])->name('planeed_workorders.list')->middleWare("auth");
Route::post('/planeed_workorders/save' , [PlaneedWorkOrdersController::class , 'store'])->name('planeed_workorders.save')->middleWare("auth");
Route::get('/planeed_workorders/new' , [PlaneedWorkOrdersController::class , 'create'])->name('planeed_workorders.new')->middleWare("auth");
Route::get('/planeed_workorders/{id}/show' , [PlaneedWorkOrdersController::class , 'show'])->name('planeed_workorders.show')->middleWare("auth");
Route::get('/planeed_workorders/{id}/edit' , [PlaneedWorkOrdersController::class , 'edit'])->name('planeed_workorders.edit')->middleWare("auth");
Route::put('/planeed_workorders/{id}/update' , [PlaneedWorkOrdersController::class , 'update'])->name('planeed_workorders.update')->middleWare("auth");
Route::delete('/planeed_workorders/{id}/delete' , [PlaneedWorkOrdersController::class , 'delete'])->name('planeed_workorders.delete')->middleWare("auth");

/*failure Work Orders Routes */
Route::get('/failure_workorders' , [FailureWorkOrdersController::class , 'index'])->name('failure_workorders.list')->middleWare("auth");
Route::post('/failure_workorders/save' , [FailureWorkOrdersController::class , 'store'])->name('failure_workorders.save')->middleWare("auth");
Route::get('/failure_workorders/new' , [FailureWorkOrdersController::class , 'create'])->name('failure_workorders.new')->middleWare("auth");
Route::get('/failure_workorders/{id}/show' , [FailureWorkOrdersController::class , 'show'])->name('failure_workorders.show')->middleWare("auth");
Route::get('/failure_workorders/{id}/edit' , [FailureWorkOrdersController::class , 'edit'])->name('failure_workorders.edit')->middleWare("auth");
Route::put('/failure_workorders/{id}/update' , [FailureWorkOrdersController::class , 'update'])->name('failure_workorders.update')->middleWare("auth");
Route::delete('/failure_workorders/{id}/delete' , [FailureWorkOrdersController::class , 'delete'])->name('failure_workorders.delete')->middleWare("auth");


/* Work Requests Routes */
Route::get('/workrequests' , [WorkRequestsController::class , 'index'])->name('workrequests.list')->middleWare("auth");
Route::post('/workrequests/save' , [WorkRequestsController::class , 'store'])->name('workrequests.save')->middleWare("auth");
Route::get('/workrequests/new' , [WorkRequestsController::class , 'create'])->name('workrequests.new')->middleWare("auth");
Route::get('/workrequests/{id}/show' , [WorkRequestsController::class , 'show'])->name('workrequests.show')->middleWare("auth");
Route::get('/workrequests/{id}/edit' , [WorkRequestsController::class , 'edit'])->name('workrequests.edit')->middleWare("auth");
Route::put('/workrequests/{id}/update' , [WorkRequestsController::class , 'update'])->name('workrequests.update')->middleWare("auth");
Route::delete('/workrequests/{id}/delete' , [WorkRequestsController::class , 'delete'])->name('workrequests.delete')->middleWare("auth");

/* Work Status Routes */
Route::get('/workstatus' , [WorkStatusController::class , 'index'])->name('workstatus.list')->middleWare("auth");
Route::post('/workstatus/save' , [WorkStatusController::class , 'store'])->name('workstatus.save')->middleWare("auth");
Route::get('/workstatus/new' , [WorkStatusController::class , 'create'])->name('workstatus.new')->middleWare("auth");
Route::get('/workstatus/{id}/show' , [WorkStatusController::class , 'show'])->name('workstatus.show')->middleWare("auth");
Route::get('/workstatus/{id}/edit' , [WorkStatusController::class , 'edit'])->name('workstatus.edit')->middleWare("auth");
Route::put('/workstatus/{id}/update' , [WorkStatusController::class , 'update'])->name('workstatus.update')->middleWare("auth");
Route::delete('/workstatus/{id}/delete' , [WorkStatusController::class , 'delete'])->name('workstatus.delete')->middleWare("auth");

/* Work Trades Routes */
Route::get('/worktrades' , [WorkTradesController::class , 'index'])->name('worktrades.list')->middleWare("auth");
Route::post('/worktrades/save' , [WorkTradesController::class , 'store'])->name('worktrades.save')->middleWare("auth");
Route::get('/worktrades/new' , [WorkTradesController::class , 'create'])->name('worktrades.new')->middleWare("auth");
Route::get('/worktrades/{id}/show' , [WorkTradesController::class , 'show'])->name('worktrades.show')->middleWare("auth");
Route::get('/worktrades/{id}/edit' , [WorkTradesController::class , 'edit'])->name('worktrades.edit')->middleWare("auth");
Route::put('/worktrades/{id}/update' , [WorkTradesController::class , 'update'])->name('worktrades.update')->middleWare("auth");
Route::delete('/worktrades/{id}/delete' , [WorkTradesController::class , 'delete'])->name('worktrades.delete')->middleWare("auth");

/* Work Types Routes */
Route::get('/worktypes' , [WorkTypesController::class , 'index'])->name('worktypes.list')->middleWare("auth");
Route::post('/worktypes/save' , [WorkTypesController::class , 'store'])->name('worktypes.save')->middleWare("auth");
Route::get('/worktypes/new' , [WorkTypesController::class , 'create'])->name('worktypes.new')->middleWare("auth");
Route::get('/worktypes/{id}/show' , [WorkTypesController::class , 'show'])->name('worktypes.show')->middleWare("auth");
Route::get('/worktypes/{id}/edit' , [WorkTypesController::class , 'edit'])->name('worktypes.edit')->middleWare("auth");
Route::put('/worktypes/{id}/update' , [WorkTypesController::class , 'update'])->name('worktypes.update')->middleWare("auth");
Route::delete('/worktypes/{id}/delete' , [WorkTypesController::class , 'delete'])->name('worktypes.delete')->middleWare("auth");

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


