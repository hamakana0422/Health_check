<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ListController extends Controller
{

    public function t_list(Request $request)
    {   
        if(is_null($request->session()->get('users'))){
            return redirect('teacher/login');
        }
         
        $users = User::all();
        return view('teacher.list',['users' => $users]);
    }


    public function account_destroy(Request $request)
    {
        $id = $request->session('id');//セッションに保存されたidを取得
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('teacher/list');
    }
    

}
