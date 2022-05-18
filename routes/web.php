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
Route::get('/teacher/login', function () {
    return view('teacher/login');
});

// Route::get('/teacher/login', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/teacher/create', function () {
    return view('teacher/create');
});

Route::get('/teacher/registerforstudent', function () {
    return view('teacher/registerforstudent');
});

Route::get('/teacher/edit', function () {
    return view('teacher/edit');
});

// 以下、生徒用
Route::get('/student/login', function () {
    return view('student/login');
});

Route::get('/student/firstlogin', function () {
    return view('student/firstlogin');
});

Route::get('/student/edit', function () {
    return view('student/edit');
});


Route::get('/test', function () {
    return view('student/manage');
});

Route::get('/test1', function () {
    return view('student/news');
});

Route::get('/test2', function () {
    return view('student/reportdelete');
});