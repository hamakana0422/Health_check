<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat_room as chatroom; 
use App\Models\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

        // 先生用チャットのコントローラー
        // public function teacherChat(Request $request, $tid,$id)
        // {
        //     $login_user=1;
        //     // ログインユーザーIDとidが一致しない場合、生徒用ホーム画面へ遷移させる
        //     // if ($login_user !== $id){
        //     //     return redirect("/student/home");
        //     // }
            
        //     $name = $request->session()->get('name');
    
        //     $chatroom = chatroom::where('teacher_id', $tid)->where('student_id', $id)->first();
        //     $message = Message::where('chat_room_id', $chatroom->id)->get();
        //     return view('teacher.chat', [
        //         'chatroom' => $chatroom,
        //         'message' => $message,
        //         'login_user_id' => $login_user,
        //         'name' => $name
        //     ]);
        // }

    // 生徒用チャットのコントローラー
    public function studentChat(Request $request, $tid,$id)
    {
        // dd($request);
        $login_user=$request->session()->get('id'); //仮で1を代入
        // dd($login_user);
        // ログインユーザーIDとidが一致しない場合、生徒用ホーム画面へ遷移させる
        if ($login_user != $id){
            echo "1"; exit;
            // return redirect("/student/home");
        }
        
        $name = $request->session()->get('name');

        $chatroom = chatroom::where('teacher_id', $tid)->where('student_id', $id)->first();
        $message = Message::where('chat_room_id', $chatroom->id)->get();
        return view('student.chat', [
            'chatroom' => $chatroom,
            'message' => $message,
            'login_user_id' => $login_user,
            'name' => $name
        ]);
    }
}
