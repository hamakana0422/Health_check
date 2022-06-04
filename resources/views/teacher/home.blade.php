<!-- 4.先生用ホーム画面 -->

@extends('layouts.app')

@section('content')
    <div class="d-grid gap-5 col-4 mx-auto">
        <a href="/teacher/list" class="btn btn-primary">{{ __('生徒一覧画面') }}</a>
        <a href="notification" class="btn btn-primary">{{ __('お知らせ投稿') }}</a>
        <a href="../teacher/chat" class="btn btn-primary">{{ __('生徒とチャット') }}</a>
    </div>
@endsection
