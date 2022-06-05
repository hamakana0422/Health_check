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
                                <textarea id="notification" type="text" class="form-control @error('notification') is-invalid @enderror" name="notification" value="{{ old('notification') }}" required autocomplete="notification" autofocus></textarea>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('投稿する') }}
                                </button>

                                <button type="submit" class="btn btn-secondary" onclick="location.href='home'" style="position:relative;left:36.5px;">
                                    {{ __('キャンセル') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary" onclick="location.href='../teacher/noticehistory'">
                                    {{ __('以前投稿した内容一覧') }}
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
