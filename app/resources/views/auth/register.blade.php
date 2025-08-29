<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規ユーザー登録</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <div class="login-container">
        <h2>新規ユーザー登録</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="login-form-group">
                <label for="username">ユーザー名</label>
                <input type="text" id="username" name="user_name" required>
            </div>

            <div class="login-form-group">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="login-form-group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="login-form-group">
                <label for="password-confirm">パスワード（確認用）</label>
                <input type="password" id="password-confirm" name="password_confirmation" required>
            </div>

            <div class="login-button-container">
                <button type="submit">登録</button>
            </div>
        </form>

        <div class="login-links">
            <p>
                <a href="/login">ログイン画面に戻る</a>
            </p>
        </div>
    </div>

</body>
</html>
