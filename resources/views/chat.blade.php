<!-- チャット画面 -->

@extends('layouts.chatapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('東京小学校　体調管理システム<チャット画面>') }}</div>

                    <div class="line__container">
                        <div class="line__title">
                        チャットルーム
                        </div>
                            <div class="line__contents scroll">
                            <!-- 相手の吹き出し -->
                            <div class="line__left">
                                <div class="line__left-text">
                                    <div class="name">
                                        生徒の名前
                                    </div>
                                    <div class="text">
                                        先生こんにちは
                                    </div>
                                </div>
                            </div>
                            <!-- 自分の吹き出し -->
                            <div class="line__right">
                                <div class="text">
                                    〇〇さん、こんにちは。どうかしましたか？
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <textarea class="form-control" id="notification" row="3" maxlength="250" placeholder="ここにメッセージを入力(最大250文字)"></textarea>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('投稿する') }}
                            </button>
                        </div>
                    </div>


            </div>
        </div>
    </div>
</div>
@endsection
