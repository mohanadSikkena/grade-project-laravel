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

/* Machines Routes */
Route::get('/machines' , [MachinesController::class , 'index'])->name('machines.list');
Route::post('/machines/save' , [MachinesController::class , 'store'])->name('machines.save');
Route::get('/machines/new' , [MachinesController::class , 'create'])->name('machines.new');
Route::get('/machines/{id}/show' , [MachinesController::class , 'show'])->name('machines.show');
Route::get('/machines/{id}/edit' , [MachinesController::class , 'edit'])->name('machines.edit');
Route::put('/machines/{id}/update' , [MachinesController::class , 'update'])->name('machines.update');
Route::delete('/machines/{id}/delete' , [MachinesController::class , 'delete'])->name('machines.delete');

/* Matrials Routes */
Route::get('/matrials' , [MatrialsController::class , 'index'])->name('matrials.list');
Route::post('/matrials/save' , [MatrialsController::class , 'store'])->name('matrials.save');
Route::get('/matrials/new' , [MatrialsController::class , 'create'])->name('matrials.new');
Route::get('/matrials/{id}/show' , [MatrialsController::class , 'show'])->name('matrials.show');
Route::get('/matrials/{id}/edit' , [MatrialsController::class , 'edit'])->name('matrials.edit');
Route::put('/matrials/{id}/update' , [MatrialsController::class , 'update'])->name('matrials.update');
Route::delete('/matrials/{id}/delete' , [MatrialsController::class , 'delete'])->name('matrials.delete');

/* Machine Codes Routes */
Route::get('/machinecodes' , [MachineCodesController::class , 'index'])->name('machinecodes.list');
Route::post('/machinecodes/save' , [MachineCodesController::class , 'store'])->name('machinecodes.save');
Route::get('/machinecodes/new' , [MachineCodesController::class , 'create'])->name('machinecodes.new');
Route::get('/machinecodes/{id}/show' , [MachineCodesController::class , 'show'])->name('machinecodes.show');
Route::get('/machinecodes/{id}/edit' , [MachineCodesController::class , 'edit'])->name('machinecodes.edit');
Route::put('/machinecodes/{id}/update' , [MachineCodesController::class , 'update'])->name('machinecodes.update');
Route::delete('/machinecodes/{id}/delete' , [MachineCodesController::class , 'delete'])->name('machinecodes.delete');

/* Spare Parts Routes */
Route::get('/spareparts' , [SparePartsController::class , 'index'])->name('spareparts.list');
Route::post('/spareparts/save' , [SparePartsController::class , 'store'])->name('spareparts.save');
Route::get('/spareparts/new' , [SparePartsController::class , 'create'])->name('spareparts.new');
Route::get('/spareparts/{id}/show' , [SparePartsController::class , 'show'])->name('spareparts.show');
Route::get('/spareparts/{id}/edit' , [SparePartsController::class , 'edit'])->name('spareparts.edit');
Route::put('/spareparts/{id}/update' , [SparePartsController::class , 'update'])->name('spareparts.update');
Route::delete('/spareparts/{id}/delete' , [SparePartsController::class , 'delete'])->name('spareparts.delete');

/*planeed Work Orders Routes */
Route::get('/planeed_workorders' , [PlaneedWorkOrdersController::class , 'index'])->name('planeed_workorders.list');
Route::post('/planeed_workorders/save' , [PlaneedWorkOrdersController::class , 'store'])->name('planeed_workorders.save');
Route::get('/planeed_workorders/new' , [PlaneedWorkOrdersController::class , 'create'])->name('planeed_workorders.new');
Route::get('/planeed_workorders/{id}/show' , [PlaneedWorkOrdersController::class , 'show'])->name('planeed_workorders.show');
Route::get('/planeed_workorders/{id}/edit' , [PlaneedWorkOrdersController::class , 'edit'])->name('planeed_workorders.edit');
Route::put('/planeed_workorders/{id}/update' , [PlaneedWorkOrdersController::class , 'update'])->name('planeed_workorders.update');
Route::delete('/planeed_workorders/{id}/delete' , [PlaneedWorkOrdersController::class , 'delete'])->name('planeed_workorders.delete');

/*failure Work Orders Routes */
Route::get('/failure_workorders' , [FailureWorkOrdersController::class , 'index'])->name('failure_workorders.list');
Route::post('/failure_workorders/save' , [FailureWorkOrdersController::class , 'store'])->name('failure_workorders.save');
Route::get('/failure_workorders/new' , [FailureWorkOrdersController::class , 'create'])->name('failure_workorders.new');
Route::get('/failure_workorders/{id}/show' , [FailureWorkOrdersController::class , 'show'])->name('failure_workorders.show');
Route::get('/failure_workorders/{id}/edit' , [FailureWorkOrdersController::class , 'edit'])->name('failure_workorders.edit');
Route::put('/failure_workorders/{id}/update' , [FailureWorkOrdersController::class , 'update'])->name('failure_workorders.update');
Route::delete('/failure_workorders/{id}/delete' , [FailureWorkOrdersController::class , 'delete'])->name('failure_workorders.delete');


/* Work Requests Routes */
Route::get('/workrequests' , [WorkRequestsController::class , 'index'])->name('workrequests.list');
Route::post('/workrequests/save' , [WorkRequestsController::class , 'store'])->name('workrequests.save');
Route::get('/workrequests/new' , [WorkRequestsController::class , 'create'])->name('workrequests.new');
Route::get('/workrequests/{id}/show' , [WorkRequestsController::class , 'show'])->name('workrequests.show');
Route::get('/workrequests/{id}/edit' , [WorkRequestsController::class , 'edit'])->name('workrequests.edit');
Route::put('/workrequests/{id}/update' , [WorkRequestsController::class , 'update'])->name('workrequests.update');
Route::delete('/workrequests/{id}/delete' , [WorkRequestsController::class , 'delete'])->name('workrequests.delete');

/* Work Status Routes */
Route::get('/workstatus' , [WorkStatusController::class , 'index'])->name('workstatus.list');
Route::post('/workstatus/save' , [WorkStatusController::class , 'store'])->name('workstatus.save');
Route::get('/workstatus/new' , [WorkStatusController::class , 'create'])->name('workstatus.new');
Route::get('/workstatus/{id}/show' , [WorkStatusController::class , 'show'])->name('workstatus.show');
Route::get('/workstatus/{id}/edit' , [WorkStatusController::class , 'edit'])->name('workstatus.edit');
Route::put('/workstatus/{id}/update' , [WorkStatusController::class , 'update'])->name('workstatus.update');
Route::delete('/workstatus/{id}/delete' , [WorkStatusController::class , 'delete'])->name('workstatus.delete');

/* Work Trades Routes */
Route::get('/worktrades' , [WorkTradesController::class , 'index'])->name('worktrades.list');
Route::post('/worktrades/save' , [WorkTradesController::class , 'store'])->name('worktrades.save');
Route::get('/worktrades/new' , [WorkTradesController::class , 'create'])->name('worktrades.new');
Route::get('/worktrades/{id}/show' , [WorkTradesController::class , 'show'])->name('worktrades.show');
Route::get('/worktrades/{id}/edit' , [WorkTradesController::class , 'edit'])->name('worktrades.edit');
Route::put('/worktrades/{id}/update' , [WorkTradesController::class , 'update'])->name('worktrades.update');
Route::delete('/worktrades/{id}/delete' , [WorkTradesController::class , 'delete'])->name('worktrades.delete');

/* Work Types Routes */
Route::get('/worktypes' , [WorkTypesController::class , 'index'])->name('worktypes.list');
Route::post('/worktypes/save' , [WorkTypesController::class , 'store'])->name('worktypes.save');
Route::get('/worktypes/new' , [WorkTypesController::class , 'create'])->name('worktypes.new');
Route::get('/worktypes/{id}/show' , [WorkTypesController::class , 'show'])->name('worktypes.show');
Route::get('/worktypes/{id}/edit' , [WorkTypesController::class , 'edit'])->name('worktypes.edit');
Route::put('/worktypes/{id}/update' , [WorkTypesController::class , 'update'])->name('worktypes.update');
Route::delete('/worktypes/{id}/delete' , [WorkTypesController::class , 'delete'])->name('worktypes.delete');

/* Locations Routes */
Route::get('/locations' , [LocationsController::class , 'index'])->name('locations.list');
Route::post('/locations/save' , [LocationsController::class , 'store'])->name('locations.save');
Route::get('/locations/new' , [LocationsController::class , 'create'])->name('locations.new');
Route::get('/locations/{id}/show' , [LocationsController::class , 'show'])->name('locations.show');
Route::get('/locations/{id}/edit' , [LocationsController::class , 'edit'])->name('locations.edit');
Route::put('/locations/{id}/update' , [LocationsController::class , 'update'])->name('locations.update');
Route::delete('/locations/{id}/delete' , [LocationsController::class , 'delete'])->name('locations.delete');

/* Departments Routes */
Route::get('/departments' , [DepartmentsController::class , 'index'])->name('departments.list');
Route::post('/departments/save' , [DepartmentsController::class , 'store'])->name('departments.save');
Route::get('/departments/new' , [DepartmentsController::class , 'create'])->name('departments.new');
Route::get('/departments/{id}/show' , [DepartmentsController::class , 'show'])->name('departments.show');
Route::get('/departments/{id}/edit' , [DepartmentsController::class , 'edit'])->name('departments.edit');
Route::put('/departments/{id}/update' , [DepartmentsController::class , 'update'])->name('departments.update');
Route::delete('/departments/{id}/delete' , [DepartmentsController::class , 'delete'])->name('departments.delete');

/* Categories Routes */
Route::get('/categories' , [CategoriesController::class , 'index'])->name('categories.list');
Route::post('/categories/save' , [CategoriesController::class , 'store'])->name('categories.save');
Route::get('/categories/new' , [CategoriesController::class , 'create'])->name('categories.new');
Route::get('/categories/{id}/show' , [CategoriesController::class , 'show'])->name('categories.show');
Route::get('/categories/{id}/edit' , [CategoriesController::class , 'edit'])->name('categories.edit');
Route::put('/categories/{id}/update' , [CategoriesController::class , 'update'])->name('categories.update');
Route::delete('/categories/{id}/delete' , [CategoriesController::class , 'delete'])->name('categories.delete');

/* Criticals Routes */
Route::get('/criticals' , [CriticalsController::class , 'index'])->name('criticals.list');
Route::post('/criticals/save' , [CriticalsController::class , 'store'])->name('criticals.save');
Route::get('/criticals/new' , [CriticalsController::class , 'create'])->name('criticals.new');
Route::get('/criticals/{id}/show' , [CriticalsController::class , 'show'])->name('criticals.show');
Route::get('/criticals/{id}/edit' , [CriticalsController::class , 'edit'])->name('criticals.edit');
Route::put('/criticals/{id}/update' , [CriticalsController::class , 'update'])->name('criticals.update');
Route::delete('/criticals/{id}/delete' , [CriticalsController::class , 'delete'])->name('criticals.delete');

