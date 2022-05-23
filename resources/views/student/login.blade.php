<!-- 1.生徒用ログイン画面 -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('東京小学校　体調管理システム<生徒用ログイン画面>') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/student/login') }}">
                        @csrf

                        <div class="text-center bg-warning rounded-3">
                            <p><b><u>初めてのログイン</u></b><br>先生から入手したIDとパスワードでログインしてください。</p>
                            <p><b><u>２回目以降のログイン</u></b><br>ご自身で変更したパスワードでログインしてください。</p>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('ID(メールアドレス)') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                <!-- 濱田追加分 パスワード誤りのエラーメッセージ-->
                                @if(isset($message))
                                <div class = "">{{ $message }}</div>
                                @endif
                                <!-- 追加分おわり -->


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ログイン') }}
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
