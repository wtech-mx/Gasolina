@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <button class="btn btn-back" type="button">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </button>

                    <h1 class="text-white">Usuario</h1>

                    <h1 class="text-white">-</h1>

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
                                <input type="text" class="form-control input-style" id="name" name="name" placeholder="Nombre">
                            </div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-font icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Apellido</label>
                                <input type="text" class="form-control input-style" id="apellido" name="apellido" placeholder="Apellido">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" style="position: relative">
                                <i class="fa fa-envelope icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Correo</label>
                                <input class="form-control input-style"  id="email" name="email" type="text" placeholder="Correo Electronico">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" style="position: relative">
                                <i class="fa fa-phone icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Telefono</label>
                                <input class="form-control input-style" type="number" id="telefono" name="telefono" placeholder="telefono">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" style="position: relative">
                                <i class="fa fa-street-view icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Puesto</label>
                                <input type="text" class="form-control input-style" id="puesto" name="puesto" placeholder="Puesto">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" placeholder="Contraseña">
                                <i class="fa fa-lock icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Contraseña</label>
                                <input type="password" class="form-control input-style" id="password" name="password" placeholder="Contraseña">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-cube icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Empresa</label>
                                    <select class="form-select" aria-label="Default select example" id="id_empresa" name="id_empresa">
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
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button class="btn-saved" type="submit">
                                 <i class="fa fa-save"></i>Guardar
                            </button>
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
                </form>
            </div>
</div>


@endsection
