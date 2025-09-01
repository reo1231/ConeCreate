<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
{{-- @includeは小さな部品を再利用するときに使う。コードの重複をなくすため --}}
{{-- @extendsは全体レイアウト用 --}}
    @include('parts.header')

    <main>
        @yield('content')
    </main>

</body>
</html>
