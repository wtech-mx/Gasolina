<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Css -->
    <link rel="icon"       href="{{ asset('images/icons/icon-72x72.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Rounded-Button.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">

    <!-- Boostrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

</head>

<body class="body-bg">
            @yield('content')
</body>
<!-- Boostrap -->
<script src={{ asset('assets/bootstrap/js/bootstrap.min.js') }}></script>

</html>
