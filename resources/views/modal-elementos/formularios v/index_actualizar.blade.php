@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container-fluid">
                <style>
                    div.dataTables_wrapper div.dataTables_length label{
                        color: #fff;
                    }
                    div.dataTables_wrapper div.dataTables_info{
                        color: #fff;
                    }
                    div.dataTables_wrapper div.dataTables_filter label{
                        color: #fff;
                    }
                </style>
                <div class="row">

                    <div class="col-12 mt-3">
                        <div class="d-flex justify-content-between p-3">

                            <a href="javascript:history.back()" class="btn btn-back">
                                <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                            </a >

                            <h5 class="text-white">V-01-01 Matriz de responsabilidades.</h5>

                            <a href="">

                            </a>

                        </div>
                    </div>
                        <ul class="nav justify-content-center mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-user-tab" data-bs-toggle="pill" data-bs-target="#pills-user" type="button" role="tab" aria-controls="pills-user" aria-selected="true">
                                    Usuarios
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-formatos-tab" data-bs-toggle="pill" data-bs-target="#pills-formatos" type="button" role="tab" aria-controls="pills-formatos" aria-selected="false">
                                    Formatos
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-instalaciones-tab" data-bs-toggle="pill" data-bs-target="#pills-instalaciones" type="button" role="tab" aria-controls="pills-instalaciones" aria-selected="false">
                                    Instalaciones
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
                                <div class="col-12 p-4">

                                    <a type="button" class="btn btn-back" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fa fa-plus btn-icon-back"></i>
                                    </a>

                                    <table class="table" id="table_id" >
                                        <thead class="text-white">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Puesto</th>
                                            <th scope="col">Alta</th>
                                            <th scope="col">baja</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-white">
                                            @php
                                                $count = 1;
                                            @endphp
                                            @foreach ($users as $item)
                                            <tr>
                                                <td>{{$count++}}</td>
                                                <td>{{$item->name}} {{$item->apellido}}</td>
                                                <td>{{$item->puesto}}</td>
                                                <td>{{$item->alta}}</td>
                                                @if ($item->baja == null)
                                                    <td>-</td>
                                                @else
                                                    <td>{{$item->baja}}</td>
                                                @endif
                                                <td>
                                                    <a type="button" class="btn btn-back" data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @include('modal-elementos.formularios v.usuarios.edit')
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-formatos" role="tabpanel" aria-labelledby="pills-formatos-tab">
                                <div class="col-12 p-4">
                                    <table class="table" id="table_id" >
                                        <thead class="text-white">
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Configuracion</th>
                                            <th scope="col">Responsables</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-white">
                                            <tr>
                                                <td>I-01-01 Política documentada.</td>
                                                <td>NO</td>
                                                <td>LIGIA ARELI KU CARDEÑA, YENSI KARINA AYIL GARRIDO</td>
                                                <td>
                                                    <a href="{{route('edit.usuario', $item->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>II-01-01 Matriz para la identificación de peligros y análisis de riesgos.</td>
                                                <td>NO</td>
                                                <td>LIGIA ARELI KU CARDEÑA, YENSI KARINA AYIL GARRIDO</td>
                                                <td>
                                                    <a href="{{route('edit.usuario', $item->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>II-02-01 Matriz de aspectos e impactos ambientales.</td>
                                                <td>NO</td>
                                                <td>VICTOR MANUEL PEREZ CARRILLO</td>
                                                <td>
                                                    <a href="{{route('edit.usuario', $item->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-instalaciones" role="tabpanel" aria-labelledby="pills-instalaciones-tab">
                                <table class="table" id="table_id" >
                                    <thead class="text-white">
                                    <tr>
                                        <th></th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Componente</th>
                                        <th scope="col">¿Requiere mantto preventivo?</th>
                                        <th scope="col">¿Configurada?</th>
                                        <th scope="col">Estatus</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        <tr>
                                            <td></td>
                                            <td>CE001-Canalizaciones Eléctricas</td>
                                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                                            <td>
                                                <a href="{{route('edit.usuario', $item->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>CMQ002-Cuarto de máquinas.</td>
                                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                                            <td>
                                                <a href="{{route('edit.usuario', $item->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>DIS003-Dispensarios.</td>
                                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                                            <td>
                                                <a href="{{route('edit.usuario', $item->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @include('modal-elementos.formularios v.usuarios.create')
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
