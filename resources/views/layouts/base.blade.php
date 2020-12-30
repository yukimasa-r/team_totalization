<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="container mt-2 mb-3">
            <nav class="navbar navbar-light border-bottom">
                <a class="navbar-brand" href="/">エリア得点集計システム</a>
            </nav>
        </div>
    </header>
    <div class="container">
        @section('main')
            <p>デフォルト</p>
        @show
    </div>
    <footer></footer>
</body>
</html>