<!-- 7-3.報告情報編集画面 -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('東京小学校　体調管理システム<過去投稿したお知らせを編集する画面です>') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/teacher/edithistory') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('投稿日') }}</label>

                            <!-- 自動的に投稿した日付が表示されるように実装予定 -->

                        </div>

                        <div class="row mb-3">
                            <label for="notification" class="col-md-4 col-form-label text-md-end">{{ __('お知らせ文') }}</label>

                            <!-- 自動的に投稿した内容が表示されるように実装予定 -->
                            <div class="col-md-6">
                                <textarea class="form-control" id="notification" row="3"></textarea>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('変更する') }}
                                </button>

                                <button type="submit" class="btn btn-secondary" onclick="location.href='noticehistory'" style="position:relative;left:36.5px;">
                                    {{ __('キャンセル') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
