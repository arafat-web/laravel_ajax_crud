<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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
    return view('employee');
});
Route::post('/employee-add', [EmployeeController::class, 'employee_add']);
Route::get('/employee-view', [EmployeeController::class, 'employee_view']);
Route::get('/employee-delete', [EmployeeController::class, 'employee_delete']);
Route::post('/employee-edit', [EmployeeController::class, 'employee_edit']);
Route::get('/employee-list', [EmployeeController::class, 'employee_list']);
