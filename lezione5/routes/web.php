<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/',[PageController::class,'homepage']) ->name ('welcome');
Route::get('/contatti',[PageController::class,'contatti']) ->name ('contatti');
Route::get('/singolocorso',[PageController::class,'singolocorso']) ->name ('singolocorso');
Route::get('/corsi',[PageController::class,'corsi']) ->name ('corsi');
Route::post('/send',[PageController::class,'send']) ->name ('send');
