<!-- 先生一覧画面 -->

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('/student/list') }}">
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

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="gap-5 col-4 mx-3">
        <a href="/student/home" class="btn btn-primary">
            {{ __('ホーム画面へ戻る') }}
        </a>
    </div>

    <div class="text-center mt-5">
        <h3>チャットしたい先生を選んでください。</h3>
    </div>

    <table class="table table-bordered mt-5 text-center">
        <tr>
            <th>先生一覧</th>
            <th></th>
        </tr>
        <!-- 下記波括弧部分(姓～メールアドレス)については、レコードから情報を取得できるようにすること -->
        <tr>
            <td>{{ '佐藤先生' }}</td>
            <td style="text-align: center;"><a href="{{ url('/student/chat') }}">{{ 'チャット画面へ' }}</a></td>
        </tr>
        <tr>
            <td>{{ '西尾先生' }}</td>
            <td style="text-align: center;"><a href="{{ url('/student/chat') }}">{{ 'チャット画面へ' }}</a></td>
        </tr>
        <tr>
            <td>{{ '近藤先生' }}</td>
            <td style="text-align: center;"><a href="{{ url('/student/chat') }}">{{ 'チャット画面へ' }}</a></td>
        </tr>
    </table>

</div>