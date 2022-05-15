<!-- 5-1.生徒一覧画面 -->

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('/teacher/list') }}">
    @csrf
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
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
        <button type="submit" class="btn btn-primary">
            <a href="{{ url('/teacher/home') }}"></a>{{ __('ホーム画面へ戻る') }}
        </button>
    </div>

    <div class="text-center mt-5">
        <h3>生徒一覧の確認、および各生徒の体調確認画面へ移動できます。</h3>
    </div>

    <table class="table table-bordered mt-5">
        <tr>
            <th>姓(フリガナ)</th>
            <th>名(フリガナ)</th>
            <th>性別</th>
            <th>誕生日</th>
            <th>メールアドレス</th>
            <th></th>
        </tr>
        <!-- 下記波括弧部分(姓～メールアドレス)については、レコードから情報を取得できるようにすること -->
        <tr>
            <td>{{ '田中(タナカ)' }}</td>
            <td>{{ '学(マナブ)' }}</td>
            <td>{{ '男' }}</td>
            <td>{{ '1990/5/5' }}</td>
            <td>{{ 'example@email.com' }}</td>
            <td><a href="{{ url('/teacher/report') }}">{{ '体調確認画面へ' }}</a></td>
            <td><button type="submit" class="btn btn-danger">{{ __('アカウント削除') }}</button></td>
        </tr>
    </table>

</div>