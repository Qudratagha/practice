<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxContactController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/students', [\App\Http\Controllers\StudentController::class, 'index']);
Route::post('/add-student', [\App\Http\Controllers\StudentController::class, 'addStudent'])->name('student.add');


Route::get('ajax-form', [AjaxContactController::class, 'index']);
Route::post('store-data', [AjaxContactController::class, 'store']);
