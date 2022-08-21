<!-- 5-2.生徒体調確認画面 -->

@extends('layouts.teacher')

@section('content')
<form method="POST" action="{{ url('/teacher/report') }}">
    @csrf
    <div class="gap-5 col-4 mx-3 py-4">
        <a href="/teacher/home" class="btn btn-primary">
            {{ __('ホーム画面へ戻る') }}
        </a>
    </div>

    <!-- "田中学"の部分はレコードより取得できるように実装すること -->
    <div class="text-center mt-5">
            <h3>{{$user->last_name}}{{$user->first_name}}さんの体調確認画面です。</h3>
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
        @foreach ($reports as $report)
        <tr>
            <td>{{ $report->created_at }}</td>
            <td>{{ $report->condition }}</td>
            <td>{{ $report->temperature }}</td>
            <td>{{ $report->meal }}</td>
            <td>{{ $report->sleep }}</td>
        </tr>
        @endforeach
    </table>

</div>
@endsection