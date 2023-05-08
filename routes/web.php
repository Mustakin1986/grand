<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GrandController;
use App\Http\Controllers\LoginRegisterController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('login');});
Route::post('/login',[LoginRegisterController::class,'Login']);
Route::get('/index',[GrandController::class,'index']);
//employee controller
Route::resource('employee',EmployeeController::class);
//Customer Controller
Route::resource('customer',CustomerController::class);

