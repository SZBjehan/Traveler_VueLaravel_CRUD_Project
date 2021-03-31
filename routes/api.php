<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\travellersController;
use App\Http\Controllers\travelApi;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/showapi', [App\Http\Controllers\ShowapiCon::class, 'list']);

Route::get('/travellers',[travellersController::class,'show'])->name('show');
Route::post('/ctravellers',[travellersController::class,'create'])->name('create');
Route::get('/edtravellers/{id}',[travellersController::class,'edit'])->name('edit');
Route::post('/uptravellers',[travellersController::class,'update'])->name('update');
Route::get('/deltravellers/{id}',[travellersController::class,'delete'])->name('delete');

//Route::apiResource("Post",travelApi::class);




Route::get('/post', [travelApi::class,'index']);
Route::post('/post', [travelApi::class,'store']);
Route::get('/post/{id}', [travelApi::class,'show']);
Route::put('/post/{id}', [travelApi::class,'update']);
Route::delete('/post/{id}', [travelApi::class,'destroy']);




