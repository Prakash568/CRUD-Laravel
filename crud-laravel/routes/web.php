<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Route::resource('users',UserController::class);

// Route::group(["prefix"=>"users"],function(){
//     Route::get('/',[UserController::class,'index']);
//     Route::get('/create',[UserController::class,'create']);
//     Route::post('/create',[UserController::class,'store']);
//     Route::get('/edit/{id}',[UserController::class,'edit']);
//     Route::put('/edit/{id}',[UserController::class,'update']);
//     Route::delete('/{id}',[UserController::class,'destroy']);

// });
