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

                            <h5 class="text-white">XIV-03-01 Incidencias en operaciones.</h5>

                                <a type="button" class="btn btn-back" data-bs-toggle="modal" data-bs-target="#exampleModalXIV">
                                    <i class="fa fa-plus btn-icon-back"></i>
                                </a>

                        </div>
                    </div>
                    @include('modal-elementos.formularios xiv.xiv-03-01.create')
                    <div class="col-12 p-4">
                        <table class="table" id="table_id">
                            <thead class="text-white">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Fecha-hora de incidencia</th>
                                    <th scope="col">Incidencia/vista</th>
                                    <th scope="col">Dependencia/laboratorio</th>
                                    <th scope="col">Observaciones</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @foreach ($xiv_elemento_03_01 as $item)

                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->fecha}}</td>
                                    <td>{{$item->incidencia}}</td>
                                    <td>{{$item->dependencia}}</td>
                                    <td>{{$item->observaciones}}</td>
                                    <td>
                                        @if ($item->pdf == NULL)
                                        <a data-bs-toggle="modal" data-bs-target="#updateModalXIV{{$item->id}}"
                                            style="color: #ffffff4d;font-size: 16px;padding: 5px;">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        @else
                                        <a data-bs-toggle="modal" data-bs-target="#updateModalXIV{{$item->id}}"
                                            style="color: #ffffff;font-size: 16px;padding: 5px;">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        @endif
                                        <a type="button" class="text-white" data-bs-toggle="modal" data-bs-target="#modaleliminar{{ $item->id }}">
                                            <i class="fa fa-trash" style="color: #ffffff;font-size: 16px;padding: 5px;"></i>
                                        </a>
                                    </td>
                                </tr>
                                @include('modal-elementos.formularios xiv.xiv-03-01.update')
                                @include('modal-elementos.formularios xiv.xiv-03-01.eliminar')
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
