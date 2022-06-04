<!-- 4.生徒用ホーム画面 -->

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('/student/home') }}">
    @csrf
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/student/home') }}">
                    {{ __('東京小学校　体調管理システム') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <!-- @guest
                            @if (Route::has('login')) -->
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/student/notification') }}">{{ __('先生からのお知らせ') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/student/edit') }}">{{ __('アカウント編集') }}</a>
                                </li>
                            <!-- @endif -->
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div style="display: block; text-align: center; margin-bottom: 20px;">
    <?php
        date_default_timezone_set('Asia/Tokyo');
        function funcWeek(){
            return array('日', '月', '火', '水', '木', '金', '土');
        }
        $w = funcWeek()[date("w")];
        echo '今日は、';
        echo date("Y年m月d日　$w");
        echo '曜日　です。';
    ?>
    </div>

    <!-- 前日に報告がない場合のみ表示するように実装予定 -->
    <div class="text-center mb-5 bg-warning">
        <h3>前日の体調報告がありません。</br>体調報告画面より報告してください。</h3>
    </div>

    <div class="d-grid gap-5 col-4 mx-auto">
        <button type="submit" class="btn btn-primary" onclick="location.href='manage/'">
            {{ __('体調報告画面') }}
        </button>
        <button type="submit" class="btn btn-primary" onclick="location.href='../chat'">
            {{ __('先生とチャット') }}
        </button>
    </div>
</div>