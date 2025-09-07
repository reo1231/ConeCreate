<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Connecreate')</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <style>
        #createPostModal {
            display: none;
        }
    </style>

</head>
<body>
    @include('parts.header')

    @if (in_array(Route::currentRouteName(), ['login', 'register', 'password.request', 'password.reset']))
        <main class="py-4">
            @yield('content')
        </main>
    @else
        <main class="three-column-layout">
            <div class="sidebar-left">
                <nav class="main-menu">
                    <ul>
                        <li><a href="{{ url('/home') }}">ホーム</a></li>
                        <li><a href="#">検索</a></li>
                        <li><a href="#">ブックマーク</a></li>
                        <li><a href="{{url('/dm')}}">DM</a></li>
                        <li><a href="#">タスク</a></li>
                    </ul>
                </nav>
                <div class="post-button-container">
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
    @endif

    <div id="createPostModal" class="modal">
        <div class="modal-content">
            @include('parts.create_post')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
