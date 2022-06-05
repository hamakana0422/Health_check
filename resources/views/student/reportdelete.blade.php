<!-- 8-2 生徒用報告情報編集/削除 選択画面 -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
            <div class="card-header">{{ __('東京小学校　体調管理システム') }}</div>
                <div class="card-body">

                        <a href="/student/manage"><button type="button">前画面へ戻る</button></a>
                        <div style="border: #808000 solid 1px; font-size: 100%; padding: 3px; background-color:#87CEFA;">過去に報告した体罰について、編集や削除が出来ます</div>
                        <div>
                            <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                <th>報告日</th>
                                <th>体調</th>
                                <th>体温</th>
                                <th>食事回数</th>
                                <th>睡眠時間</th>
                                <th></th>
                                <th></th>
                                </tr>
                            </thead>
                            @foreach ($reports as $report)
                            <tr>
                                <td>{{ $report->created_at }}</td>
                                <td>{{ $report->condition }}</td>
                                <td>{{ $report->temperature }}</td>
                                <td>{{ $report->meal }}</td>
                                <td>{{ $report->sleep }}</td>
                                <td><a href="{{ url('/student/report/'.$report->id)}}"><button type="submit" class="btn btn-primary">
                                    {{ __('編集する') }}
                                </td></button>
                                <form action="{{ url('/report/delete/' . $report->id )}}" method="POST">
                                @csrf
                                <td><input type="submit" class="btn btn-danger btn-dell" value="削除"></td>
                                </form>
                            </tr>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection