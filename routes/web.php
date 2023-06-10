<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Frontend\FrontendController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('employee/add', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employee/add')->middleware('auth');
Route::post('employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee/store')->middleware('auth');
Route::get('employee/index', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee/index')->middleware('auth');
Route::get('employee/edit{employee}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee/edit')->middleware('auth');
Route::put('employee/update', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee/update')->middleware('auth');
Route::delete('employee/delete/{employee}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee/delete')->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('autocare', [App\Http\Controllers\Frontend\FrontendController::class, 'show'])->name('autocare')->middleware('auth');