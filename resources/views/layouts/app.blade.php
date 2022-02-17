<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@hasSection('title') @yield('title') | @endif {{ config('app.name', 'Laravel') }}</title>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Css CUSTOM-->
    <link rel="icon"       href="{{ asset('images/icons/icon-72x72.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mobil-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/calendario.css') }}">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">


    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" ></script>--}}

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Boostrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

	 @livewireStyles

     @yield('css-custom')
     @yield('fullcalendar')
     @yield('scripts')

</head>

<body class="body-bg demo1" id="mobile">
    <div id="app">

            @auth
            <p style="display: none">{{ $userId = Auth::id() }}</p>
            @include('layouts.menu')
            @endauth
            <div id="mobileBodyContent">
             @yield('content')
            </div>
    </div>
</body>

    <!-- Boostrap -->
    <script src={{ asset('assets/js/mobil-menu.js') }}></script>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src={{ asset('assets/bootstrap/js/bootstrap.min.js') }}></script>

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_id').DataTable();
        });

    </script>

	@livewireScripts

    <script type="text/javascript">
        window.livewire.on('closeModal', () => {
            $('#createDataModal').modal('hide');
        });
    </script>
    @include('sweetalert::alert')


</html>
