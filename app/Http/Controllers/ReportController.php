<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Report;


class ReportController extends Controller
{

    public function t_report($id)
    {
        $user = User::find($id);
        $reports = Report::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        //dd($user);
        return view('teacher.report',[
            'user' => $user,
            'reports' => $reports
        ]);
    }

    public function s_manage(Request $request)
    {
        $id = $request->session()->get('id'); //セッションIDを取得
        return view('student.manage',[
            'id' => $id,
        ]);
    }

    public function t_list()
    {
        return view('teacher.list');
    }

    public function s_report()
    {
        return view('student.report');
    }

    public function registerReport(Request $request)
    {
        return view('student.home');
    }
    public function s_instert(Request $request)
    {
        $user = new Report();
        $user->day = $request->day;
        $user->condition = $request->condition;
        $user->temperature = $request->temperature;
        $user->sleep = $request->sleep;
        $user->meal = $request->meal;
        $user->user_id = $request->user_id;
        $user->save();
        return redirect('/student/home')->with('flash_message', '');
    }
}
