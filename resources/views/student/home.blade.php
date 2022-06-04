<!-- 4.生徒用ホーム画面 -->

@extends('layouts.student')

@section('content')

    <div style="display: block; text-align: center; margin: 20px 0 20px 0;">
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center bg-warning rounded-3 py-1 h3">
                    前日の体調報告がありません。</br>体調報告画面より報告してください。
                </div>
            </div>
        </div>
    </div>

    <div class="d-grid gap-5 col-4 mx-auto py-4">
        <button type="submit" class="btn btn-primary" onclick="location.href='manage/'">
            {{ __('体調報告画面') }}
        </button>
        <button type="submit" class="btn btn-primary" onclick="location.href='../student/list'">
            {{ __('先生とチャット') }}
        </button>
    </div>
@endsection 