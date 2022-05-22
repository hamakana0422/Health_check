<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function chat()
    {
        return view('.chat');

    }
    public function chat2()
    {
        return response()->json(
            [
                'body' => 'こんにちは',
                'chat_room_id' => '1',
                'create_user_id' => '2'
            ]);
    }
}
