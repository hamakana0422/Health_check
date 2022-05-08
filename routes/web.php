<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/student/login',[App\Http\Controllers\Auth\LoginController::class, 's_login']);

Route::post('/student/login',[App\Http\Controllers\Auth\LoginController::class, 'login']);


Route::get('/student/home',[App\Http\Controllers\LoginController::class, '']);