<!-- 1.生徒用報告情報編集/削除 選択画面 -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
            <div class="card-header">{{ __('東京小学校　体調管理システム') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/student/login') }}">
                        @csrf
                        <a href=""><button type="button">前画面へ戻る</button></a>
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
                            <tbody>
                                <tr>
                                    <td>2022/5/1</td>
                                    <td>快調</td>
                                    <td>36.5</td>
                                    <td>3</td>
                                    <td>8</td>
                                    <td><button>編集する</button></td>
                                    <td><button>削除する</button></td>
                                </tr>
                                <tr>
                                    <td>2022/5/2</td>
                                    <td>普通</td>
                                    <td>36.5</td>
                                    <td>3</td>
                                    <td>8</td>
                                    <td><button>編集する</button></td>
                                    <td><button>削除する</button></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection