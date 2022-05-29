<!-- 8-3.生徒用情報編集画面 -->

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('/student/report') }}">
    @csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
            <div class="card-header">{{ __('東京小学校　体調管理システム') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/student/login') }}">
                        @csrf
                        <p>＜体調を報告する画面です＞</p>
                        <div>
                            <label for="day">報告日</label></br>
                            <label><input type="date" name="day" required autofocus></label>
                            <!-- <input type="text" name="year" size = "6">年 -->
                            <!-- <input type="text" name="moon" size = "3">月 -->
                            <!-- <input type="text" name="day" size = "3">日 -->
                        </div>
                        <div>
                            <label for="condition">今朝の体調はどうですか？</label></br>
                            <input type="text" name="day" size = "30">
                        </div>
                        <div>
                            <label for="temperature">今朝の体温は何度ですか？</label></br>
                            <input type="text" name="day" size = "30">
                        </div>
                        <div>
                            <label for="sleep">昨日の夜は何時間寝ましたか？</label></br>
                            <input type="text" name="day" size = "30">
                        </div>
                        <div>
                            <label for="meal">昨日は何回食事をとりましたか？</label></br>
                            <input type="text" name="day" size = "30">
                        </div>
                    </form>
                    <a href=""><button type="submit" class="btn btn-primary">
                        更新する
                    </button></a>
                    <a href="{{ url('/student/home') }}"><button type="button">キャンセル</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
