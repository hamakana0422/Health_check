<!-- 7-2.お知らせ文編集／削除選択画面 -->

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('/teacher/noticehistory') }}">
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
        <h3>過去に投稿したお知らせについて、編集や削除ができます。</h3>
    </div>

    <table class="table table-bordered mt-5">
        <tr>
            <th>投稿日</th>
            <th>お知らせ内容</th>
            <th></th>
            <th></th>
        </tr>
        <!-- 下記波括弧部分(投稿日とお知らせ内容文)については、レコードから情報を取得できるようにすること -->
        <tr>
            <td>{{ '2022/1/10' }}</td>
            <td>{{ 'あけましておめでとうございます。本年もよろしくお願いいたします。' }}</td>
            <td><a href="{{ url('/teacher/edithistory') }}">{{ '編集する' }}</a></td>
            <td><button type="submit" class="btn btn-danger">削除する</button></td>
        </tr>
    </table>

</div>