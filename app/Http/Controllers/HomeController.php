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
    public function studentChat($tid,$id)
    {
        $login_user=1;
        if ($login_user !== $id){
            return redirect("/student/home");
        }
        $chatroom = chatroom::where('teacher_id', $tid)->where('student_id', $id)->first();
        $message = Message::where('chat_room_id', $chatroom->id)->get();
        return view('student.chat', [
            'chatroom' => $chatroom,
            'message' => $message,
        ]);
    }
}
