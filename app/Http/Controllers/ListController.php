<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ListController extends Controller
{

    public function t_list()
    {
        $users = User::all();
        return view('teacher.list',['users' => $users]);
    }


}
