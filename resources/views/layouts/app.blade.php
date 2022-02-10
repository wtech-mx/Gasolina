<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Css CUSTOM-->
    <link rel="icon"       href="{{ asset('images/icons/icon-72x72.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/buttons.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mobil-menu.css') }}">


    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">


    <!-- Boostrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

     @yield('css-custom')
     @yield('fullcalendar')
     @yield('scripts')

</head>

<body class="body-bg demo1" id="mobile">


        @auth
        @include('layouts.menu')
        @endauth
        <div id="mobileBodyContent">
         @yield('content')
        </div>




</body>

    <!-- Boostrap -->
    <script src={{ asset('assets/js/mobil-menu.js') }}></script>
    <script src={{ asset('assets/bootstrap/js/bootstrap.min.js') }}></script>
    @include('sweetalert::alert')

</html>
