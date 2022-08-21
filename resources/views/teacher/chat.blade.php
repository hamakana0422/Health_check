<!-- 先生用チャット画面 -->


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
                            <a class="nav-link" href="{{ url('/teacher/home') }}">{{ __('ホーム画面へ戻る') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/teacher/list') }}">{{ __('生徒一覧画面へ') }}</a>
                        </li>
                        <!-- @endif -->
                        <li class="nav-item">
                            <button type="submit" class="btn btn-danger">
                                {{ __('このチャット部屋を削除') }}
                            </button>
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

@extends('layouts.chatapp')

@section('content')

<div class="container">
    <div class="chat-container row justify-content-center">
        <div class="chat-area">
            <div class="card">
                <div class="card-header">チャット部屋</div>
                    <div class="card-body chat-card">
                        <div id="test"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="comment-container row justify-content-center">
            <div class="input-group comment-area">
                <?php // dd($body) ?>
                <input type="hidden" id="chat_room_id" value="{{ $chatroom }}">
                <input type="hidden" id="login_user_id" value="{{ $login_user_id }}">
                <textarea id="msg" class="form-control" placeholder="ここにメッセージを入力(最大250文字まで)" maxlength="250" aria-label="With textarea"></textarea>
                <button id="submit-button" type="input-group-prepend button" class="btn btn-outline-primary comment-btn">投稿する</button>
            </div>
        </div>

        @endsection

        @section('js')
        <script src="{{ asset('js/chat.js') }}"></script>

        @endsection
    </div>
</div>