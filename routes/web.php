<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// 以下、先生用
Route::get('/teacher/login', [App\Http\Controllers\UserController::class, 'login_form']);//OK

Route::post('/teacher/login', [App\Http\Controllers\UserController::class, 't_login'])->name('teacher.login');//OK

Route::get('/teacher/home', function() {
    return view ('teacher/home');
}); //OK

Route::get('/teacher/create', [App\Http\Controllers\UserController::class, 't_create'])->name('teacher.create');//OK

Route::post('/teacher/create', [App\Http\Controllers\UserController::class, 'insertTeacher']);//OK

Route::get('/teacher/registerforstudent', [App\Http\Controllers\UserController::class, 'create_form']);//OK

Route::post('/teacher/registerforstudent', [App\Http\Controllers\UserController::class, 'registerstudent']);//OK

Route::get('/teacher/delete/{id}', [App\Http\Controllers\UserController::class, 'account_destroy']);

Route::get('/teacher/report/{id}', [App\Http\Controllers\ReportController::class, 't_report']);

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

// Route::get('/teacher/home', function() {
//     return view ('teacher/home');
// });  2022/5/15 下村追記 4.先生用ホーム画面用

Route::get('/teacher/list', [App\Http\Controllers\ListController::class, 't_list']);
// 2022/5/15 下村追記 5-1.生徒一覧画面用

// 2022/5/16 住吉 5-2.生徒体調確認画面用 Route文変更

Route::get('/teacher/account', function() {
    return view ('teacher/account');
}); // 2022/5/15 下村追記 6-1.アカウント作成／編集画面(先生用)用

// 以下、生徒用
Route::get('/student/login', [App\Http\Controllers\UserController::class, 's_login']);//OK

Route::post('/student/login',[App\Http\Controllers\UserController::class, 'login_check']);//OK

Route::get('/student/firstlogin', [App\Http\Controllers\UserController::class, 'student_f_login'])->name('student.firstlogin');

Route::put('/student/firstlogin', [App\Http\Controllers\UserController::class, 'change_pass']);

// Route::post('/student/firstlogin', [App\Http\Controllers\UserController::class, '']);

Route::get('/student/report', [App\Http\Controllers\ReportController::class, 's_report']);

Route::get('/student/edit', [App\Http\Controllers\UserController::class, 's_edit'])->name('student.edit');

Route::post('/student/edit',[App\Http\Controllers\UserController::class, '']);

Route::get('/student/home', function() {
    return view ('student/home');
}); // 2022/5/15 下村追記 4.生徒用ホーム画面用



// Route::get('/student/edit', function () {
//     return view('student/edit');
// });

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
Route::get('chat', [App\Http\Controllers\MessageController::class, 'chat']);
 // 2022/5/16 住吉Route変更
