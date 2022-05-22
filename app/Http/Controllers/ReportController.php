<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function t_report()
    {
        return view('teacher.report');
    }

    public function s_report()
    {
        return view('student.report');
    }
}
