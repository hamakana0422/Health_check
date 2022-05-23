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
        $reports = Report::all();
        //dd($user);
        return view('teacher.report',[
            'user' => $user,
            'reports' => $reports
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
}
