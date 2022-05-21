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

Route::get('/teacher/home', function() {
    return view ('teacher/home');
}); // 2022/5/15 下村追記 4.先生用ホーム画面用

Route::get('/teacher/list', function() {
    return view ('teacher/list');
}); // 2022/5/15 下村追記 5-1.生徒一覧画面用

Route::get('/teacher/report', function() {
    return view ('teacher/report');
}); // 2022/5/15 下村追記 5-2.生徒体調確認画面用

Route::get('/teacher/account', function() {
    return view ('teacher/account');
}); // 2022/5/15 下村追記 6-1.アカウント作成／編集画面(先生用)用

// 以下、生徒用
Route::get('/student/login', [App\Http\Controllers\UserController::class, 's_login']);

//Route::post('/student/login',[App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/student/firstlogin', [App\Http\Controllers\UserController::class, 'f_login']);

Route::get('/student/edit', [App\Http\Controllers\UserController::class, 's_edit']);

Route::get('/student/home', function() {
    return view ('student/home');
}); // 2022/5/15 下村追記 4.生徒用ホーム画面用



Route::get('/student/edit', function () {
    return view('student/edit');
});

//中武追加 8-1体調管理報告画面用

Route::get('/test', function () {
    return view('student/manage');
});
Route::post('/student/test',[App\Http\Controllers\UserController::class,'s_store']);

//中武追加 10-2お知らせ文一覧画面用【生徒用】
Route::get('/test1', function () {
    return view('student/news');
});

//中武追加 8-2報告情報編集画面.【生徒用】
Route::get('/test2', function () {
    return view('student/reportdelete');
});

//中武追加 8-3報告情報編集画面.【生徒用】
Route::get('/test3', function () {
    return view('student/report');
});

//中武追加 10-1お知らせ文一覧画面.【生徒用】
Route::get('/test4', function () {
    return view('student/newslist');
});

// チャット画面
Route::get('/chat', function () {
    return view('chat');
}); // 2022/5/15 下村追記 チャット画面用

