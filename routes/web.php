<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontedController;
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

Route::get('/', function () {
    return view('welcome');
});
  // fronted 

  Route::get('/home',[FrontedController::class,'index'])->name('index');


  // backand 
  Route::get('desbord',[AdminController::class,'desbord'])->name('desbord');
  Route::get('form',[AdminController::class,'form'])->name('form');
  Route::get('login',[AdminController::class,'login'])->name('login');