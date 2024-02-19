<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [employeeController::class, 'ViewEmployee']);

Route::get('/employee/add', [employeeController::class, 'AddEmployee']);

Route::post('/employee/store', [employeeController::class, 'StoreEmployee']);

Route::get('/employee/update/{id}/', [employeeController::class, 'UpdateEmployee']);

Route::put('/employee/saveUpdate/{id}/', [employeeController::class, 'UpdateSave']);

Route::get('/employee/delete/{id}/', [employeeController::class, 'DeleteEmployee']);