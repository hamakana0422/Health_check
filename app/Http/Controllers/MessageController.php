<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    // 先生用
    public function t_chat(Request $request)
    {
        // $request->session()->put('chat_room_id', 1);
        $chat_room_id=1; //仮で1を代入
        $login_user_id=1; //仮で1を代入
        // return view('teacher.chat', compact('chat_room_id','login_user_id'));

        // TODO:過去投稿分を再表示させる
        $messages = Message::orderBy('created_at', 'asc')->get();
        return view('teacher.chat', [
            'body' => $messages,
            'chatroom' => $chat_room_id,
            'login_user_id' => $login_user_id,
        ]);
    }

    // 生徒用
    public function s_chat(Request $request)
    {
        // $request->session()->put('chat_room_id', 1);
        $chat_room_id=2; //仮で2を代入
        $login_user_id=2; //仮で2を代入
        return view('student.chat', compact('chat_room_id','login_user_id'));

        // TODO:過去投稿分を再表示させる
        $messages = Message::orderBy('created_at', 'asc')->get();
        return view('student.chat', [
            'body' => $messages,
        ]);
    }

    // ここでチャット内容を保存
    public function chat2(Request $request)
    {
        $message = new Message();
        $message->body=$request->msg;
        $message->chat_room_id=$request->cid;
        $message->create_user_id=$request->lid;
        $message->save();


        
        return response()->json(
            [
                'body' => $request->msg,
                'chat_room_id' => $request->cid,
                'create_user_id' => $request->lid,
                'created_at' => $message->created_at
            ]);
    }
}
