<!-- 4.先生用ホーム画面 -->

@extends('layouts.teacher')

@section('content')
    <div class="d-grid gap-5 col-4 mx-auto py-5">
        <button type="submit" class="btn btn-primary" onclick="location.href='list'">
            {{ __('生徒一覧画面') }}
        </button>
        <button type="submit" class="btn btn-primary" onclick="location.href='notification'">
            {{ __('お知らせ投稿') }}
        </button>
        <button type="submit" class="btn btn-primary" onclick="location.href='../chat'">
            {{ __('生徒とチャット') }}
        </button>
    </div>
</div>
@endsection