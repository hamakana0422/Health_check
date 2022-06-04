<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Hashing\Hasher;
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
    public function login_form()
    {
        return view('teacher.login');
    }


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
            'first_name' => $request->first_name,
            'last_name'=> $request->last_name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)

        ]);

        return redirect('teacher/home');

    }

    public function t_login(Request $request)
    {

        $login_user = User::where('email', $request->email)->first(); //２件以上のレコードがある場合はget○

        $result = Hash::check($request->password, $login_user->password); //Hash::が入力されたパスワードをハッシュ化してその上でDBにあるものと一致するか判別してくれる。
        if ($result){

            return redirect('teacher/home');
        }
            $message = "パスワードが間違っています";
            return view('teacher.login',compact('message'));
    }//OK

    public function create_form()
    {
        return view('teacher.registerforstudent');

    }

    public function registerstudent(Request $request)
    {
        //【todo/Validation】
        User::create([
            'user_type' => 1,
            'first_name' => $request->first_name,
            'last_name'=> $request->last_name,
            'first_name_kana' => $request->first_name_kana,
            'last_name_kana' => $request->last_name_kana,
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)

        ]);

        return redirect('teacher/home');

    }

    public function t_edit()
    {
        return view('teacher.edit');
    }

    public function account_destroy(Request $request)
    {
        $user = User::where('id','=',$request->id)->delete();
        return redirect('/teacher/list');
    }

    //生徒
    public function s_login()
    {
        return view('student.login');

    }

    //ログイン画面で先生か生徒か、初回ログインか２回目以降かの判別をする→生徒と先生のログイン画面は元々違うので、
    //
    public function login_check(Request $request)
    {
        $login_user = User::where('email', $request->email)->first(['id','login_check','first_name','last_name','password']); //２件以上のレコードがある場合はget○
        // dd($login_user);
        $result = Hash::check($request->password, $login_user->password); //Hash::が入力されたパスワードをハッシュ化してその上でDBにあるものと一致するか判別してくれる。
        if ($result) {

            session(['id' => $login_user->id,
                    'email'=> $login_user->email
                    ]);
            if ($login_user->login_check === 0) { //issetではNULLのみfalse  空文字・0・false全てtrueになる→!issetはNULLのみtrue それ以外はfalse

                $name = $login_user->last_name;
                // dd($name);
                return redirect()->route('student.firstlogin')->with('login_user', $name); //（ログインチェックがtrueじゃなければ。パスワード変更画面へ）

            }else if ($login_user->login_check === 1) {
                $request->session()->put('login_user_id', $login_user->id);
                return redirect('student/home'); //（ログインチェックがfaulseでない→trueであればhome画面へ）
            }

        }

            $message = "パスワードが間違っています";
            return view('student.login',compact('message'));


        //メールアドレスとパスワードが一致するかどうかを判別し、一致しなければ【ログインIDもしくはパスワードが違います】
        //一致したら、以下の処理

    }

    public function student_f_login()
    {
        return view('student/firstlogin');
    }

    public function change_pass(Request $request)
    {
        $id = $request->session()->get('id'); //セッションIDを取得
        $login_user = User::where('id', $id)->first(['id','login_check','first_name','last_name','password']);
        $login_user->password = Hash::make($request->password);
        $login_user->login_check = 1;
        $login_user->save();

        return redirect('student/home');

    }


    public function s_edit()//ただの画面遷移なのでRequestはつけない
    {
        $id = session('id');//セッションに保存されたidを取得
        $user_email = User::where('id', $id)->first('email');
        $user_email = $user_email->email;
        return view('student.edit',compact('user_email'));

    }

    public function s_store(Request $request)
    {
        dd($request);
    }
}
