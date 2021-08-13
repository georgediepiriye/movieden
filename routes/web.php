<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/movie/{id}',[HomeController::class,'show'])->name('movie.details');


Route::get('/actors',[ActorsController::class,'index'])->name('actors');
Route::get('/actor/{actor}',[ActorsController::class,'show'])->name('actor.details');