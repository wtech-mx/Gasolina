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
                            </a>

                            <h1 class="text-white">Editar Usuario</h1>

                            {{-- <a class="btn btn-back" href="{{ route('create.empresa') }}"> --}}

                            <a>
                                {{-- <i class="fa fa-pencil btn-icon-back"></i> --}}
                            </a>

                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <ul class="nav nav-pills d-flex justify-content-center mb-3 mt-5" id="pills-tab" role="tablist">

                        <li class="nav-item p-2" role="presentation">
                            <a class="nav-link a-perso active show" id="users-registers" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">
                                <i class="fa fa-user icon-style-2 p-1 "></i>Datos de usuarios
                            </a>
                        </li>

                        <li class="nav-item p-2" role="presentation">
                            <a class="nav-link a-perso" id="register-passwords" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">
                                <i class="fa fa-lock icon-style-2 p-1 "></i> Contraseña
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active p-3" id="pills-home" role="tabpanel"
                            aria-labelledby="users-registers">

                            <form method="POST" action="{{ route('update.usuario', $usuario->id) }}"
                                enctype="multipart/form-data" role="form">
                                @csrf
                                <input type="hidden" name="_method" value="PATCH">

                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative">
                                            <i class="fa fa-user icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Nombre</label>
                                            <input type="text" class="form-control " id="name" name="name"
                                                value="{{ $usuario->name }}">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-6">

                                        <div class="form-group mb-3 position-relative">
                                            <i class="fa fa-font icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Apellido</label>
                                            <input type="text" class="form-control " id="apellido" name="apellido"
                                                value="{{ $usuario->apellido }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3 position-relative" style="position: relative">
                                            <i class="fa fa-envelope icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Correo</label>
                                            <input class="form-control " id="email" name="email" type="text"
                                                value="{{ $usuario->email }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3 position-relative" style="position: relative">
                                            <i class="fa fa-phone icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Telefono</label>
                                            <input class="form-control " type="tel" id="telefono" name="telefono"
                                                value="{{ $usuario->telefono }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3 position-relative" style="position: relative">
                                            <i class="fa fa-street-view icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Puesto</label>
                                            <select class="form-select" name="puesto" id="puesto" required>
                                                <option value="{{ $usuario->puesto }}" selected>{{ $usuario->puesto }}</option>
                                                <option value="Empresario Gasolinero">Empresario Gasolinero</option>
                                                <option value="Gerente">Gerente</option>
                                                <option value="Oficial Gasolinero">Oficial Gasolinero</option>
                                                <option value="Auxiliar administrativo">Auxiliar administrativo</option>
                                                <option value="Oficial de Mantenimiento">Oficial de Mantenimiento</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative">
                                        <i class="fa fa-cube icon-style-2"></i>
                                        <label class="form-label label-custom-yellow">Empresa</label>
                                        <select class="form-select" aria-label="Default select example" id="id_empresa"
                                            name="id_empresa">
                                            <option value="{{$usuario->id_empresa}}">Seleccionar en caso de cambiar</option>
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
                                        <select class="form-select" aria-label="Default select example" id="id_sucursal"
                                            name="id_sucursal">
                                            <option value="{{$usuario->id_sucursal}}">Seleccionar en caso de cambiar</option>
                                            @foreach ($sucursal as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                    <div class="col-sm-12 col-12">
                                        <div class="form-group mb-3 position-relative">
                                            <i class="fa fa-cubes icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Role</label>
                                            {!! Form::select('roles[]', $roles, $userRole, ['class' => 'form-control', 'multiple'], ['value'=> $usuario->email]) !!}
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3 position-relative" style="position: relative">
                                            <i class="fa fa-pencil icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Firma</label>
                                            <input type="file" class="form-control " id="firma"
                                                name="firma" value="{{ $usuario->firma }}">
                                        </div>
                                    </div>
                                </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group mb-3 position-relative" style="position: relative">
                                        <a href="{{asset('firma/'.$usuario->firma)}}">
                                            <embed src="{{asset('firma/'.$usuario->firma)}}" class="img-firma">
                                        </a>
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

                        <div class="tab-pane fade p-3" id="pills-profile" role="tabpanel" aria-labelledby="register-passwords">

                            <form method="POST" action="{{ route('update_usuario_password.usuario', $usuario->id) }}"
                                enctype="multipart/form-data" role="form">
                                @csrf
                                <input type="hidden" name="_method" value="PATCH">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3 position-relative" placeholder="Contraseña">
                                            <i class="fa fa-lock icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Contraseña</label>
                                            <input type="password" class="form-control " id="password"
                                                name="password" placeholder="****">
                                                @error('password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
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

                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Select anidado Empresa-->
        <script>
            $(document).ready(function() {
                $('#id_empresa').on('change', function() {
                    let id = $(this).val();
                    //id_empresa no esta en la tabla de automovil
                    $('#id_sucursal').empty();
                    $('#id_sucursal').append(`<option value="" disabled selected>Procesando..</option>`);
                    $.ajax({
                        type: 'GET',
                        url: '/create/usuario/' + id,
                        success: function(response) {
                            var response = JSON.parse(response);
                            console.log(response);
                            //trae los automoviles relacionados con el id_empresaac
                            $('#id_sucursal').empty();
                            $('#id_sucursal').append(
                                `<option value="" disabled selected>Seleccione Sucursal</option>`
                            );
                            response.forEach(element => {
                                $('#id_sucursal').append(
                                    `<option value="${element['id']}">${element['name']}</option>`
                                );
                            });
                        }
                    });
                });
            });
        </script>
    @endsection
