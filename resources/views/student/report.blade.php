<!-- 8-3.生徒用情報編集画面 -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
            <div class="card-header">{{ __('東京小学校　体調管理システム') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/student/reportedit/'. $report->id ) }}">
                        @csrf
                        <p>＜体調を報告する画面です＞</p>
                        <div>
                            <label for="day">報告日</label></br>
                            <label><input type="date" name="day" required autofocus value = "{{$report->day}}"></label>
                        </div>
                        <div>
                            <label for="condition">今朝の体調はどうですか？</label></br>
                            <input type="text" name="condition" size = "30" value = "{{$report->condition}}">
                        </div>
                        <div>
                            <label for="temperature">今朝の体温は何度ですか？</label></br>
                            <input type="text" name="temperature" size = "30" value = "{{$report->temperature}}">
                        </div>
                        <div>
                            <label for="sleep">昨日の夜は何時間寝ましたか？</label></br>
                            <input type="text" name="sleep" size = "30" value = "{{$report->sleep}}">
                        </div>
                        <div>
                            <label for="meal">昨日は何回食事をとりましたか？</label></br>
                            <input type="text" name="meal" size = "30" value = "{{$report->meal}}">
                        </div>
                    <button type="submit" class="btn btn-primary">
                        更新する
                    </button>
                    </form>
                    <a href="{{ url('/student/home') }}"><button type="button">キャンセル</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
