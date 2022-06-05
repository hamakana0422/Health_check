<!-- 5-1.生徒一覧画面 -->

@extends('layouts.teacher')

@section('content')

    <div class="gap-5 col-4 mx-3 py-4">
        <a href="/teacher/home" class="btn btn-primary">
            {{ __('ホーム画面へ戻る') }}
        </a>
    </div>

    <div class="text-center mt-5">
        <h3>＜生徒一覧画面＞<br>各生徒の体調確認画面／チャット画面へ移動できます。</h3>
    </div>

    <table class="table table-bordered mt-5">
        <tr>
            <th>姓(フリガナ)</th>
            <th>名(フリガナ)</th>
            <th>性別</th>
            <th>誕生日</th>
            <th>メールアドレス</th>
            <th></th>
        </tr>
        <!-- 下記波括弧部分(姓～メールアドレス)については、レコードから情報を取得できるようにすること -->
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->last_name }}({{ $user->last_name_kana }})</td>
            <td>{{ $user->first_name }}({{ $user->first_name_kana }})</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->birthday }}</td>
            <td>{{ $user->email }}</td>
            <td style="text-align: center;"><a href="{{ url('/teacher/report') }}/{{ $user->id }}">{{ '体調確認画面へ' }}</a></td>  <!--urlの/2は生徒idが入るようにする-->
            <td style="text-align: center;"><a href="{{ url('/teacher/chat') }}/{{ $user->id }}">{{ 'チャット画面へ' }}</a></td>
            <td style="text-align: center;"><button type="submit" class="btn btn-danger">{{ __('アカウント削除') }}</button></td>
        </tr>
        @endforeach
    </table>
@endsection
