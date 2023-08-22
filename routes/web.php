<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeControllrer;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web middleware group. Make something great!
|
*/

Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('actionlogin',[logincontroller::class, 'actionlogin'])->name('actionlogin');

Route::get('home',[homecontroller::'index'])->name('home')->middleware('auth');
Route::post('actionlogout',[logincontroller::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//REGISTER
Route::get('register' [RegisterController::class, 'register'])->name('register');
Route::post('register/action',[RegisterController::cass, 'actionregistar'])->name('actionregistar');

Route::get('/', function () {
    return view('login/index');
});
