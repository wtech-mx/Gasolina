@extends('layouts.app')
@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/custom_table.css') }}">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container-fluid">
                <style>
                    div.dataTables_wrapper div.dataTables_length label {
                        color: #fff;
                    }

                    div.dataTables_wrapper div.dataTables_info {
                        color: #fff;
                    }

                    div.dataTables_wrapper div.dataTables_filter label {
                        color: #fff;
                    }
                </style>
                <div class="row">

                    <div class="col-12 mt-3">
                        <div class="d-flex justify-content-between p-3">

                            <a href="{{ route('home') }}" class="btn btn-back">
                                <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                            </a>

                            <h5 class="text-white">NOTIFICACIÓN INTERNA DE INCIDENTES/ACCIDENTES</h5>

                                <a type="button" class="btn btn-back" data-bs-toggle="modal" data-bs-target="#exampleModalXVI">
                                    <i class="fa fa-plus btn-icon-back"></i>
                                </a>

                        </div>
                    </div>
                    @include('modal-elementos.formularios xvi.xvi-01-01.create')
                    <div class="col-12 p-4">
                        <table class="table" id="table_id">
                            <thead class="text-white">
                                <tr>
                                    <th scope="col">Daño accidente</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Tipo personal</th>
                                    <th scope="col">Observación</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Hora</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @foreach ($xvi_elemento as $row)
                                <tr>
                                    <td>{{$row->daño_accidente}}</td>
                                    <td>{{$row->area}}</td>
                                    <td>{{$row->tipo_personal}}</td>
                                    <td>{{$row->descripcion}}</td>
                                    <td>{{$row->fecha}}</td>
                                    <td>{{$row->hora}}</td>

                                    <td>
                                        @if ($row->pdf == NULL)
                                        <a data-bs-toggle="modal" data-bs-target="#updateModalXVI{{$row->id}}"
                                            style="color: #ffffff4d;font-size: 16px;padding: 5px;">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        @else
                                        <a data-bs-toggle="modal" data-bs-target="#updateModalXVI{{$row->id}}"
                                            style="color: #ffffff;font-size: 16px;padding: 5px;">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        @endif
                                        <a type="button" class="text-white" data-bs-toggle="modal" data-bs-target="#modaleliminar{{ $row->id }}">
                                            <i class="fa fa-trash" style="color: #ffffff;font-size: 16px;padding: 5px;"></i>
                                        </a>
                                    </td>
                                </tr>
                                @include('modal-elementos.formularios xvi.xvi-01-01.update')
                                @include('modal-elementos.formularios xvi.xvi-01-01.eliminar')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function showInp(){
        getSelectValue = document.getElementById("tipo_personal").value;
        if(getSelectValue=="Personal interno"){
            document.getElementById("interusuario").style.display = "inline-block";
            document.getElementById("otrouser").style.display = "none";
        }else if(getSelectValue=="Otro"){
            document.getElementById("interusuario").style.display = "none";
            document.getElementById("otrouser").style.display = "inline-block";
        }
    }
</script>
