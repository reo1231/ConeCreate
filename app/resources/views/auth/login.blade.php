<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<div class="login-container">
    <h2>ログイン</h2>

    <form action="/login" method="POST">
        <div class="login-form-group">
            <label for="email">メールアドレス/ユーザーID</label>
            <input type="text" id="email" name="email" required>
        </div>

        <div class="login-form-group">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="login-button-container">
            <button type="submit">ログイン</button>
        </div>
    </form>


    <div class="login-links">
        <p><a href="/register">新規ユーザー登録</a></p>
        <p>パスワードを忘れた方は<a href="/password/reset">こちら</a></p>
    </div>
</div>
