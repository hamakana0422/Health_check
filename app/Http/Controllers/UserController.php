<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{   
    //コンストラクタ・・認証機能をUserControllerで有効にするためのコード？

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        
    }

    //先生
    public function t_login()
    {
        return view('teacher.login');
    }

    // public function t_create()
    // {
    //     return view('teacher.create');
    // }

    public function t_create(Request $request)
    {
        return view('teacher.create');
    
    }

    // 先生の会員登録
    public function insertTeacher(Request $request)
    {
        //【todo】Validation追加
        User::create([
            'user_type' => 0,
            'first_name' => $request->name,
            'last_name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)

        ]);

        return redirect('teacher/home');

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

    //ログイン画面で先生か生徒か、初回ログインか２回目以降かの判別をする→生徒と先生のログイン画面は元々違うので、
    //
    public function f_login(Request $request)
    {
        $login_user = User::where('email', $request->email)->first(); //２件以上のレコードがある場合はget○
      
        $result = Hash::check($request->password, $login_user->password); //Hash::が入力されたパスワードをハッシュ化してその上でDBにあるものと一致するか判別してくれる。
        if ($result){
            if ($login_user->login_check === 0) { //issetではNULLのみfalse  空文字・0・false全てtrueになる→!issetはNULLのみtrue それ以外はfalse
                return redirect('/student/firstlogin'); //（ログインチェックがtrueじゃなければ。パスワード変更画面へ）
            }else if ($login_user->login_check === 1) {
                return view('student.home'); //（ログインチェックがfaulseでない→trueであればhome画面へ）
            }
            
        } 
            $message = "パスワードが間違っています";
            return view('teacher.login',compact('message'));

        
        //メールアドレスとパスワードが一致するかどうかを判別し、一致しなければ【ログインIDもしくはパスワードが違います】
        //一致したら、以下の処理

    } 

    public function student_f_login()
    {
        return view('student/firstlogin');
    }
    public function s_edit()
    {
        return view('student.edit');
    }


}
