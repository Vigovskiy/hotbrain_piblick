<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Scripts -->
    <script defer src="/js/jquery-3.6.3.min.js"></script>
    <script defer src="/js/bootstrap.min.js"></script>
</head>
<body>
    @include('inc.hat')

    @yield('mein_content')

    @include('inc.footer')
</body>
</html>