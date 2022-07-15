@extends('layouts.app')

@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/forms.css') }}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="box">
                    <div class="row">

                        <div class="col-12 mt-3">
                            <div class="d-flex justify-content-between p-3">

                                <a href="{{ route('index.usuario') }}" class="btn btn-back">
                                    <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                                </a >

                                <h1 class="text-white">Crear Usuario</h1>

                            {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                                <a>
                                    {{-- <i class="fa fa-pencil btn-icon-back"></i> --}}
                                </a>

                            </div>
                        </div>

                        <div class="col-12 p-4">
                            <form method="POST" action="{{ route('store.usuario') }}" enctype="multipart/form-data" role="form">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative">
                                            <i class="fa fa-user icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Nombre</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative">
                                            <i class="fa fa-font icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Apellido</label>
                                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3 position-relative" style="position: relative">
                                            <i class="fa fa-envelope icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Correo</label>
                                            <input class="form-control"  id="email" name="email" type="text" placeholder="Correo Electronico" value="{{ old('email') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3 position-relative" style="position: relative">
                                            <i class="fa fa-phone icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Telefono</label>
                                            <input class="form-control" type="number" id="telefono" name="telefono" placeholder="telefono" value="{{ old('telefono') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3 position-relative" style="position: relative">
                                            <i class="fa fa-street-view icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Puesto</label>
                                            <input type="text" class="form-control" id="puesto" name="puesto" placeholder="Puesto" value="{{ old('puesto') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3 position-relative" >
                                            <i class="fa fa-lock icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Contraseña</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3 position-relative" placeholder="Contraseña">
                                            <i class="fa fa-lock icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Confirmar contraseña</label>
                                            <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="****" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative">
                                            <i class="fa fa-cube icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Empresa</label>
                                                <select class="form-select" aria-label="Default select example" id="id_empresa" name="id_empresa">
                                                    <option>Seleccione Empresa</option>
                                                    @foreach ($empresa as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative">
                                            <i class="fa fa-cubes icon-style-2"></i>
                                                <label class="form-label label-custom-yellow">Sucursal</label>
                                                <select class="form-control" id="id_sucursal" name="id_sucursal">
                                                    <option value="">Seleccione Sucursal</option>
                                                </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-12">
                                        <div class="form-group mb-3 position-relative">
                                            <i class="fa fa-cubes icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Role</label>
                                            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group mb-3 position-relative" style="position: relative">
                                                <i class="fa fa-street-view icon-style-2"></i>
                                                <label class="form-label label-custom-yellow">Firma</label>
                                                <input type="file" class="form-control " id="firma"
                                                    name="firma">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button class="mt-5 btn-sinestilo" type="submit">
                                            <div class="button">
                                                <div class="icon">
                                                    <i class="fa fa-floppy-o"></i>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
            </div>

            <!-- Select anidado Empresa-->
            <script>
                $(document).ready(function () {
                            $('#id_empresa').on('change', function () {
                            let id = $(this).val();
                            //id_empresa no esta en la tabla de automovil
                            $('#id_sucursal').empty();
                            $('#id_sucursal').append(`<option value="" disabled selected>Procesando..</option>`);
                            $.ajax({
                            type: 'GET',
                            url: '/create/usuario/' + id,
                            success: function (response) {
                            var response = JSON.parse(response);
                            console.log(response);
                            //trae los automoviles relacionados con el id_empresaac
                            $('#id_sucursal').empty();
                            $('#id_sucursal').append(`<option value="" disabled selected>Seleccione Sucursal</option>`);
                            response.forEach(element => {
                                $('#id_sucursal').append(`<option value="${element['id']}">${element['name']}</option>`);
                                });
                            }
                        });
                    });
                });
            </script>
        </div>
    </div>
</div>
@endsection
