<!-- 6-1.アカウント作成／編集画面(先生用) -->

@extends('layouts.teacher')

@section('content')
    <div class="d-grid gap-5 col-4 mx-auto py-5">
        <button type="submit" class="btn btn-primary" onclick="location.href='registerforstudent'">
            {{ __('生徒用アカウント作成') }}
        </button>
        <button type="submit" class="btn btn-primary" onclick="location.href='edit'">
            {{ __('自分のアカウント編集') }}
        </button>
    </div>
@endsection