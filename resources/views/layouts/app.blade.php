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
    <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">



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
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_id').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'print',
                    },
                    'colvis'
                ],
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
            var comunicacion=$('#comunicacion').val();
            var descripcion=$('#descripcion').val();
            var fila='<tr>'+
            '<td><select name="comunicacion[]" class="form-control" id="comunicacion[]">'+
                '<option value="">Seleccionar medio</option>'+
                '<option value="Buzon de observaciones quejas y/o sugerencias.">Buzon de observaciones quejas y/o sugerencias.</option>'+
                '<option value="Cartel o manta">Cartel o manta</option>'+
                '<option value="Circulares internas">Circulares internas</option>'+
                '<option value="Correo interno">Correo interno</option>'+
                '<option value="Encuestas">Encuestas</option>'+
                '<option value="Otro">Otro</option>'+
                '<option value="Publicaciones internas">Publicaciones internas</option>'+
                '<option value="Reuniones en grupo">Reuniones en grupo</option>'+
                '<option value="Tablero de anuncios (vitrinas)">Tablero de anuncios (vitrinas)</option>'+
                '<option value="Video">Video</option>'+
                '</select></td>'+
            '<td><input type="text" class="form-control" placeholder="Especificar" id="descripcion2[]" name="descripcion2[]"></td>'+
            '</tr>';

            $('#tabla_script').append(fila);
        }
    </script>

    <script type="text/javascript">
        var agregar3 = document.getElementById('proveedor3');
        var contenedor3 = document.getElementById('nuevo-form3');
        var cont = 0;

        agregar3.addEventListener('click', function(){
            cont ++;
            var _form3 = '<div class="col-6 mt-3"><p for=""><input class="form-check-input" type="checkbox" value="1" id="estatus[]" name="estatus[]" checked>'+
                            '<strong>Dispensario '+cont+'</strong></p>'+
                            '<label for="">Pistola 1</label>'+
                            '<select class="form-control" id="pistola1[]" name="pistola1[]">'+
                                '<option value="">Seleccionar tipo</option>'+
                                '<option value="Magna">Magna</option>'+
                                '<option value="Disel">Disel</option>'+
                                '<option value="Premium">Premium</option>'+
                            '</select>'+
                            '<label for="">Pistola 2</label>'+
                            '<select class="form-control" id="pistola2[]" name="pistola2[]">'+
                                '<option value="">Seleccionar tipo</option>'+
                                '<option value="Magna">Magna</option>'+
                                '<option value="Disel">Disel</option>'+
                                '<option value="Premium">Premium</option>'+
                            '</select>'+
                            '<label for="">Pistola 3</label>'+
                            '<select class="form-control" id="pistola3[]" name="pistola3[]">'+
                                '<option value="">Seleccionar tipo</option>'+
                                '<option value="Magna">Magna</option>'+
                                '<option value="Disel">Disel</option>'+
                                '<option value="Premium">Premium</option>'+
                            '</select></div>';

            contenedor3.innerHTML += _form3;
        })

        //remove fields group
        // $("body").on("click",".remove",function(){
        //     $(this).parents("._form").remove();
        // });
    </script>

<script>
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            placeholder: "Select",
            allowClear: true
        });

    });

</script>

	@livewireScripts

    <script>
        $(document).ready(function () {
            window.livewire.emit('show');
        });

        window.livewire.on('show', () => {
            $('#createDataModal').modal('show');
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('#exampleModalDifundir').modal('show')
        });
    </script>

    @include('sweetalert::alert')


</html>
