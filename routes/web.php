<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowapiCon;
use App\Http\Controllers\travellersController;


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

Route::get('/showapi', [App\Http\Controllers\ShowapiCon::class, 'list']);

Route::get('/travellers',[travellersController::class,'show'])->name('show');
Route::post('/ctravellers',[travellersController::class,'create'])->name('create');
Route::get('/edtravellers/{id}',[travellersController::class,'edit'])->name('edit');
Route::post('/uptravellers',[travellersController::class,'update'])->name('update');

Route::get('/deltravellers/{id}',[travellersController::class,'delete'])->name('delete');