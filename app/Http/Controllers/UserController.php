<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function insertTeacher(Request $request)
    {
        User::create([
            'user_type' => 0,
            'first_name' => $request->name,
            'last_name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);

        retuen redirec
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
        $login_user = User::where('email', $request->email)->first(); //２件以上のレコードがある場合はget○
        
        //メールアドレスとパスワードが一致するかどうかを判別し、一致しなければ【ログインIDもしくはパスワードが違います】
        //一致したら、以下の処理

        if ($login_user->login_check === 0) { //issetではNULLのみfalse  空文字・0・false全てtrueになる→!issetはNULLのみtrue それ以外はfalse
            return view('student.firstlogin'); //（ログインチェックがtrueじゃなければ。パスワード変更画面へ）
        }else if ($login_user->login_check === 1) {
            return view('student.home'); //（ログインチェックがfaulseでない→trueであればhome画面へ）
        }
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
