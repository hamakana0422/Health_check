<!-- 7-1.お知らせ文作成(投稿))画面 -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('東京小学校　体調管理システム<お知らせ投稿>') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/teacher/notification') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="notification" class="col-md-4 col-form-label text-md-end">{{ __('お知らせ内容入力') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="notification" row="3"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('投稿する') }}
                                </button>

                                <button type="submit" class="btn btn-secondary" onclick="location.href='./teacher/home'" style="position:relative;left:36.5px;">
                                    {{ __('キャンセル') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary" onclick="location.href='./teacher/'">
                                    {{ __('以前投稿した内容を編集／削除') }}
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
