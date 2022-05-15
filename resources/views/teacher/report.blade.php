<!-- 5-2.生徒体調確認画面 -->

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('/teacher/report') }}">
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
        <button type="submit" class="btn btn-primary" onclick="location.href='home'">
            {{ __('ホーム画面へ戻る') }}
        </button>
    </div>

    <!-- "田中学"の部分はレコードより取得できるように実装すること -->
    <div class="text-center mt-5">
        <h3>田中学さんの体調確認画面です。</h3>
    </div>

    <table class="table table-bordered mt-5">
        <tr>
            <th>報告日</th>
            <th>体調</th>
            <th>体温</th>
            <th>食事回数</th>
            <th>睡眠時間</th>
        </tr>
        <!-- 下記波括弧部分については、レコードから情報を取得できるようにすること -->
        <tr>
            <td>{{ '2022/5/1' }}</td>
            <td>{{ '快調' }}</td>
            <td>{{ '36.5' }}</td>
            <td>{{ '3' }}</td>
            <td>{{ '8' }}</td>
        </tr>
    </table>

</div>