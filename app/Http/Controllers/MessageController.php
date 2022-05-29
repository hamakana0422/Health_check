<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function chat(Request $request)
    {
        // $request->session()->put('chat_room_id', 1);
        $chat_room_id=2;
        $login_user_id=2;
        return view('chat',[
            'chat_room_id' => $chat_room_id,
            'login_user_id' => $login_user_id,
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
                'create_user_id' => $request->lid
            ]);

    }
}
