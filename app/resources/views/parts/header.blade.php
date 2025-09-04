<header>
    <div class="header-left">
        </div>
    <div class="header-center">
        <a href="{{ url('/home') }}" class="logo">
            アプリのロゴをあとで置く
        </a>
    </div>

    <div class="header-right">
        @auth
            <a href="#" class="user-icon">
                👤
            </a>
        @else
            <a href="{{ route('login') }}">ログイン</a>
            <a href="{{ route('register') }}">ユーザー登録</a>
        @endauth
    </div>
</header>
