<!-- 4.先生用ホーム画面 -->

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('/teacher/home') }}">
    @csrf
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/teacher/home') }}">
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
                                    <a class="nav-link" href="{{ url('/teacher/edit') }}">{{ __('アカウント作成／編集') }}</a>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="d-grid gap-5 col-4 mx-auto">
        <button type="submit" class="btn btn-primary" onclick="location.href='list'">
            {{ __('生徒一覧画面') }}
        </button>
        <button type="submit" class="btn btn-primary" onclick="location.href='notification'">
            {{ __('お知らせ投稿') }}
        </button>
        <button type="submit" class="btn btn-primary" onclick="location.href='../chat'">
            {{ __('生徒とチャット') }}
        </button>
    </div>
</div>