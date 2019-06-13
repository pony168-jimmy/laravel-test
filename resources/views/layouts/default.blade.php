<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Weibo App')</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">  
    </head>
    <body>
        @include('layouts._header')
        <div id='app'></div>
        <div class="container">
            @yield('content')
            @include('layouts._footer')
        </div>
        <script src='/js/app.js'></script>
    </body>
</html>