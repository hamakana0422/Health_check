<!-- 1.生徒用お知らせ全文観覧画面 -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
            <div class="card-header">{{ __('東京小学校　体調管理システム') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/student/login') }}">
                        @csrf
                        <p>＜お知らせ確認画面＞</p>
                        <div>
                            <label for="name">お知らせ内容</label></br>
                            <input type="text" name="text" size = "6">
                        </div>
                    <a href=""><button type="button">確認しました</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection