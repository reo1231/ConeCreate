@extends('layouts.app')

@section('title', 'DM')

@section('content')
<div class="dm-container">
    <div class="conversation-list-container">
        <h2 class="section-title">DM</h2>
        <ul class="conversation-list">
            <li class="conversation-item active">
                <div class="user-info">
                    <img src="https://via.placeholder.com/50" alt="User Icon" class="user-icon">
                    <span class="user-name">ユーザーA</span>
                </div>
                <div class="last-message">
                    <span>おはようございます！</span>
                </div>
            </li>
            <li class="conversation-item">
                <div class="user-info">
                    <img src="https://via.placeholder.com/50" alt="User Icon" class="user-icon">
                    <span class="user-name">ユーザー2</span>
                </div>
                <div class="last-message">
                    <span>こんにちは</span>
                </div>
            </li>
            <li class="conversation-item">
                <div class="user-info">
                    <img src="https://via.placeholder.com/50" alt="User Icon" class="user-icon">
                    <span class="user-name">ユーザー3</span>
                </div>
                <div class="last-message">
                    <span>

[Image of Beer]
</span>
                </div>
            </li>
        </ul>
    </div>

    <!-- 右側のチャット画面 -->
    <div class="chat-main-container">
        <div class="chat-header">
            <h3 class="user-name-chat">ユーザーB</h3>
        </div>
        <div class="chat-messages">
            <!-- 仮のチャットメッセージ -->
            <div class="message-item received">
                <img src="https://via.placeholder.com/40" alt="User Icon" class="message-user-icon">
                <p class="message-bubble">こんにちは！</p>
            </div>
            <div class="message-item sent">
                <p class="message-bubble">こんにちは！</p>
            </div>
            <div class="message-item received">
                <img src="https://via.placeholder.com/40" alt="User Icon" class="message-user-icon">
                <p class="message-bubble">お元気ですか？</p>
            </div>
            <div class="message-item sent">
                <p class="message-bubble">元気ですよ！</p>
            </div>
        </div>
        <div class="chat-input-area">
            <textarea class="message-input" placeholder="メッセージを入力"></textarea>
            <button class="send-button">送信</button>
        </div>
    </div>
</div>
@endsection
