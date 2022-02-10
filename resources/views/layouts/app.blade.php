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
    <link rel="stylesheet" href="{{ asset('assets/css/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">

    <!-- Scripts -->
>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">


    <!-- Boostrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

     @yield('css')
     @yield('fullcalendar')
     @yield('scripts')
</head>

<body class="body-bg">
            @yield('content')

        @auth
            <div class="btn-menu-fixed">
                <a class="btn btn-floating" role="button" data-bs-toggle="modal" data-bs-target="#modal-menu">
                    <i class="fa fa-bars text-dark"></i>
                </a>
            </div>
            {{--modal--}}

            @include('layouts.menu')
        @endauth

</body>

<!-- Boostrap -->

    <script src={{ asset('assets/bootstrap/js/bootstrap.min.js') }}></script>
    @include('sweetalert::alert')

</html>
