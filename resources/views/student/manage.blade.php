<!-- 1.生徒用体調報告画面 -->

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('/student/manage') }}">
    <input type="hidden" name="user_id" value="{{ $id }}">
    @csrf
<div id="app">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
            <div class="card-header">{{ __('東京小学校　体調管理システム') }}</div>
                <div class="card-body">
                        <p>＜体調を報告する画面です＞</p>
                        <div>
                            <label for="day">報告日</label></br>
                            <label><input type="date" name="day" required autofocus></label>
                        </div>
                        <div>
                            <label for="condition">今朝の体調はどうですか？</label></br>
                            <!-- <input type="text" name="condition" size="30" required> -->
                            <select name="condition" id="condition">
                                <option value="快調">快調</option>
                                <option value="普通">普通</option>
                                <option value="少し悪い">少し悪い</option>
                                <option value="不調">不調</option>
                                <option value="風邪">風邪</option>
                            </select>

                        </div>
                        <div>
                            <label for="temperature">今朝の体温は何度ですか？</label></br>
                            <input type="number" name="temperature" value="36.0" min="34.0" max="42.0" step = "0.1" required>
                        </div>
                        <div>
                            <label for="sleep">昨日の夜は何時間寝ましたか？</label></br>
                            <input type="number" name="sleep" value="7.0" min="0" max="24.0" step = "0.5" required>
                        </div>
                        <div>
                            <label for="meal">昨日は何回食事をとりましたか？</label></br>
                            <input type="number" name="meal" value="3" min="0" max="10" step = "1" required>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-primary my-3">報告する</button>
                    <a href="{{ url('/student/home') }}"><button type="button" class="btn btn-secondary">キャンセル</button></a>
                    <a href="{{ url('student/reportdelete') }}/{{ $id }}"><button type="button" class="btn btn-secondary my-2">過去に報告した内容を</br>確認/編集する</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
