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

                            <h5 class="text-white">VIII-01-01 Listado de documentación interna.</h5>

                                <a type="button" class="btn btn-back" data-bs-toggle="modal" data-bs-target="#exampleModalViii01">
                                    <i class="fa fa-plus btn-icon-back"></i>
                                </a>

                        </div>
                    </div>
                    @include('modal-elementos.formularios viii.viii-01-01.create')
                    <div class="col-12 p-4">
                        <table class="table" id="table_id">
                            <thead class="text-white">
                                <tr>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Reglas</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Aprobacion</th>
                                    <th scope="col">Modificación</th>
                                    <th scope="col">Revisión</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @foreach ($viii_elemento as $item)

                                <tr>
                                    <td>{{$item->tipo}}</td>
                                    <td>{{$item->reglas}}</td>
                                    <td>{{$item->fecha}}</td>
                                    <td>{{$item->aprobacion}}</td>
                                    <td>{{$item->notificacion}}</td>
                                    <td>{{$item->revision}}</td>
                                    <td>
                                        @if ($item->pdf == NULL)
                                        <a data-bs-toggle="modal" data-bs-target="#updateModalViii01{{$item->id}}"
                                            style="color: #ffffff4d;font-size: 16px;padding: 5px;">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        @else
                                        <a data-bs-toggle="modal" data-bs-target="#updateModalViii01{{$item->id}}"
                                            style="color: #ffffff;font-size: 16px;padding: 5px;">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        @endif
                                            {{-- <a href="#" target="_blank">
                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            </a> --}}
                                    </td>
                                </tr>
                                @include('modal-elementos.formularios viii.viii-01-01.update')
                                {{-- @include('modal-elementos.formularios viii.viii-01-01.if_pdf') --}}
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
