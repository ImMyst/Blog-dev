<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Titouan GALVANI</title>

        <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body id="@yield('body_id')">
        <div id="app">
            @include('layout.sidebar')
            <main>
                @yield('content')
            </main>

        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
