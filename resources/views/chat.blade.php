<!-- チャット画面 -->

@extends('layouts.chatapp')

@section('content')
<div class="chat-container row justify-content-center">
    <div class="chat-area">
        <div class="card">
            <div class="card-header">Comment</div>
            <div class="card-body chat-card">
                <div id="test"></div>
            </div>
        </div>
    </div>
</div>

<div class="comment-container row justify-content-center">
    <div class="input-group comment-area">
        <textarea id="msg" class="form-control" placeholder="input message" aria-label="With textarea"></textarea>
        <button id="submit-button" type="input-group-prepend button" class="btn btn-outline-primary comment-btn">Submit</button>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('js/chat.js') }}"></script>

@endsection