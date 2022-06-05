<!-- 8-2 生徒用報告情報編集/削除 選択画面 -->

@extends('layouts.student')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card my-4">
                <div class="card-body">
                    <form method="POST" action="{{ url('/student/login') }}">
                        @csrf
                        <div class="gap-5 col-4 mx-3 py-4">
                            <a href="/teacher/home" class="btn btn-primary">
                                {{ __('ホーム画面へ戻る') }}
                            </a>
                        </div>
                        <div style="border: #808000 solid 1px; font-size: 100%; padding: 3px; background-color:#87CEFA;" class="my-4">先生からのお知らせ一覧画面です。</div>
                        <div>
                            <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                <th>日付</th>
                                <th>お知らせ内容</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2022/1/10</td>
                                    <td>あけましておめでとうございます。本年もよろしくお願い致します。</td>
                                    <td style="text-align: center;"><a href="{{ url('/student/notification') }}">{{ '全文を見る' }}</a></td>
                                </tr>
                                <tr>
                                    <td>2022/5/2</td>
                                    <td>普通</td>
                                    <td style="text-align: center;"><a href="{{ url('/student/notification') }}">{{ '全文を見る' }}</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;"><a href="{{ url('/student/notification') }}">{{ '全文を見る' }}</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;"><a href="{{ url('/student/notification') }}">{{ '全文を見る' }}</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;"><a href="{{ url('/student/notification') }}">{{ '全文を見る' }}</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;"><a href="{{ url('/student/notification') }}">{{ '全文を見る' }}</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;"><a href="{{ url('/student/notification') }}">{{ '全文を見る' }}</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;"><a href="{{ url('/student/notification') }}">{{ '全文を見る' }}</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;"><a href="{{ url('/student/notification') }}">{{ '全文を見る' }}</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;"><a href="{{ url('/student/notification') }}">{{ '全文を見る' }}</a></td>
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