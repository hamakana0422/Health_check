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



// 以下、先生用
Route::get('/teacher/login', [App\Http\Controllers\UserController::class, 't_login']);

// Route::get('/teacher/login', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/teacher/create', [App\Http\Controllers\UserController::class, 't_create']);

Route::get('/teacher/registerforstudent', [App\Http\Controllers\UserController::class, 'registerstudent']);

Route::get('/teacher/edit', [App\Http\Controllers\UserController::class, 't_edit']);

Route::get('/teacher/notification', function() {
    return view ('teacher/notification');
});

Route::get('/teacher/noticehistory', function() {
    return view ('teacher/noticehistory');
});

Route::get('/teacher/edithistory', function() {
    return view ('teacher/edithistory');
});

// 以下、生徒用
Route::get('/student/login', [App\Http\Controllers\UserController::class, 's_login']);

//Route::post('/student/login',[App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/student/firstlogin', [App\Http\Controllers\UserController::class, 'f_login']);

Route::get('/student/edit', [App\Http\Controllers\UserController::class, 's_edit']);


// チャット画面
Route::get('/chat', function () {
    return view('chat');
});