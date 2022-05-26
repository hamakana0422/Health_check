<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function chat()
    {
        return view('chat');

    }
    // ここでチャット内容を保存
    public function chat2(Request $request)
    {
        $message = $request->msg;
        return response()->json(
            [
                'body' => $request->msg,
                'chat_room_id' => '1',
                'create_user_id' => '2'
            ]);
    }
}
