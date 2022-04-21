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
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
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
     @yield('graficas_js')
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
            $('#table_id').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
                }
            });
        });

        $(document).ready(function() {
            $('#table_id2').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
                }
            });
        });

        $(document).ready(function() {
            $('#table_id3').DataTable({
                "info": false,
                responsive: true,
                "iDisplayLength": 4,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
                }
            });
        });

    </script>

    <script type="text/javascript">
        $('#agregar').click(function(){
        agregar();
    });

    function agregar(){
        var vendedor=$('#vendedor').val();
        var refaccion=$('#refaccion').val();
        var cantidad=$('#cantidad').val();
        var id_co=$('#id_co').val();
        var fila='<tr>'+
        '<td><select wire:model.defer="id_elemento" class="form-control" id="id_elemento">'+
            '<option value="">Seleccionar medio</option>'+
            '<option value="1">Buzon de observaciones quejas y/o sugerencias.</option>'+
            '<option value="2">Cartel o manta</option>'+
            '<option value="3">Circulares internas</option>'+
            '<option value="4">Correo interno</option>'+
            '<option value="5">Encuestas</option>'+
            '<option value="6">Otro</option>'+
            '<option value="7">Publicaciones internas</option>'+
            '<option value="8">Reuniones en grupo</option>'+
            '<option value="9">Tablero de anuncios (vitrinas)</option>'+
            '<option value="10">Video</option>'+
            '</select></td>'+
        '<td><input type="text" class="form-control" placeholder="Especificar" id="especificar[]" name="especificar[]"></td>'+
        '</tr>';

        $('#tabla_id').append(fila);
    }
    </script>

	@livewireScripts

    <script type="text/javascript">
        window.livewire.on('closeModal', () => {
            $('#createDataModal').modal('hide');
        });
    </script>

    @include('sweetalert::alert')


</html>
