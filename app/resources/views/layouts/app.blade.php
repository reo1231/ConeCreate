<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create_post.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
    @include('parts.header')

    <main class="three-column-layout">
        <div class="sidebar-left">
            <nav class="main-menu">
                <ul>
                    <li><a href="{{ url('/home') }}">ホーム</a></li>
                    <li><a href="#">検索</a></li>
                    <li><a href="#">ブックマーク</a></li>
                    <li><a href="#">DM</a></li>
                    <li><a href="#">タスク</a></li>
                </ul>
            </nav>
            <div class="post-button-container">
                <!-- ページ遷移しないようにbuttonタグに変更 -->
                <button id="openModalBtn" class="post-button">+</button>
            </div>
        </div>

        <div class="content">
            @yield('content')
        </div>

        <div class="sidebar-right">
            <h3>おすすめユーザー</h3>
            <ul>
                <li>ユーザー</li>
                <li>ユーザー</li>
            </ul>
            <br>
            <h3>トレンド</h3>
            <ul>
                <li>#あいうえお</li>
                <li>#あとでいろいろする</li>
            </ul>
        </div>
    </main>

    <!-- モーダルウィンドウ -->
    <div id="createPostModal" class="modal">
        <div class="modal-content">
            @include('parts.create_post')
        </div>
    </div>
</body>
</html>
