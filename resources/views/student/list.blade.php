<!-- 先生一覧画面 -->

@extends('layouts.student')

@section('content')
    <div class="gap-5 col-4 mx-3 py-4">
        <a href="/student/home" class="btn btn-primary">
            {{ __('ホーム画面へ戻る') }}
        </a>
    </div>

    <div class="text-center mt-5">
        <h3>チャットしたい先生を選んでください。</h3>
    </div>

    <table class="table table-striped table-bordered mt-5 text-center">
        <tr>
            <th>先生一覧</th>
            <th></th>
        </tr>
        <!-- 下記波括弧部分(姓～メールアドレス)については、レコードから情報を取得できるようにすること -->
        <tr>
            <td>{{ '日本先生' }}</td>
            <!-- TODO:リンク先の後ろにユーザーIDを取得させる(今は固定値で1が入っている)-->
            <td style="text-align: center;"><a href="{{ url('/student/chat/1') }}/2">{{ 'チャット画面へ' }}</a></td>
            {{-- <td style="text-align: center;"><a href="{{ url('/student/chat/{{ $chatroom->id }}') }}/{{ $user->id }}">{{ 'チャット画面へ' }}</a></td> --}}
        </tr>
        {{-- <tr>
            <td>{{ '西尾先生' }}</td>
            <td style="text-align: center;"><a href="{{ url('/student/chat/t2') }}">{{ 'チャット画面へ' }}</a></td>
        </tr>
        <tr>
            <td>{{ '近藤先生' }}</td>
            <td style="text-align: center;"><a href="{{ url('/student/chat/t3') }}">{{ 'チャット画面へ' }}</a></td>
        </tr> --}}
    </table>
</div>
@endsection