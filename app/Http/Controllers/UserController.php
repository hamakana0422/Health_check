<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //先生
    public function t_login()
    {
        return view('teacher.login');
    }

    public function t_create()
    {
        return view('teacher.create');
    }

    public function registerstudent()
    {
        return view('teacher.registerforstudent');
    }

    public function t_edit()
    {
        return view('teacher.edit');
    }

    //生徒
    public function s_login()
    {
        return view('student.login');

    }

    public function f_login(Request $request)
    {
        $login_user = User::where('email', $request->email)->first();
        if ($login_user->login_check) {
            return redirect('/student/home'); //true（ログインしたことがある。ホーム画面へ）
        }
        return redirect('/student/firstlogin'); //faulse（ログインしたことがないのでパスワード変更画面へ）

    }

    // public function f_login()
    // {
    //     return view('student.firstlogin');
    // }

    public function s_edit()
    {
        return view('student.edit');
    }


}
