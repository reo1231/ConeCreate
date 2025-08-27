<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パスワード再設定</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <div class="login-container">
        <h2>パスワード再設定</h2>

        <form action="/password/email" method="POST">
            <div class="login-form-group">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="login-button-container">
                <button type="submit">送信</button>
            </div>
        </form>

        <div class="login-links">
            <p><a href="/login">ログイン画面に戻る</a></p>
        </div>
    </div>

</body>
</html>
