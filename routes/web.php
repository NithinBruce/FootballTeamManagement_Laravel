<?php

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

Route::get('', function () {
    return view('welcome');
});


Route::middleware('user_auth')->group(function () {
    Route::get('products',[App\Http\Controllers\FootballController::class,'read']);
    
Route::post('products/create',[App\Http\Controllers\FootballController::class,'store']);
Route::get('products/create',[App\Http\Controllers\FootballController::class,'create']);
Route::get('products/{id}/edit',[App\Http\Controllers\FootballController::class,'edit']);
Route::post('products/{id}/edit',[App\Http\Controllers\FootballController::class,'update']);
Route::get('products/{id}/delete',[App\Http\Controllers\FootballController::class,'delete']);
   });
   



   Route::get('logout',[App\Http\Controllers\AuthController::class,'logout']);



Route::get('signup',[App\Http\Controllers\AuthController::class,'showSignup']);
Route::post('signup',[App\Http\Controllers\AuthController::class,'registerUser']);


Route::get('login',[App\Http\Controllers\AuthController::class,'showLogin']);
Route::post('login',[App\Http\Controllers\AuthController::class,'loginUser']);

