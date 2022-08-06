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

                            <h5 class="text-white">IX-01-01 Matriz de mejores prácticas.</h5>

                                <a type="button" class="btn btn-back" data-bs-toggle="modal" data-bs-target="#exampleModalIX">
                                    <i class="fa fa-plus btn-icon-back"></i>
                                </a>

                        </div>
                    </div>
                    @include('modal-elementos.formularios ix.create')
                    <div class="col-12 p-4">
                        <table class="table" id="table_id">
                            <thead class="text-white">
                                <tr>
                                    <th scope="col">Mejores practicas</th>
                                    <th scope="col">Marco normativo</th>
                                    <th scope="col">Dependencia</th>
                                    <th scope="col">Fecha de emesión</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Reglas y procedimientos</th>
                                    <th scope="col">Mecanismo especifico</th>
                                    <th scope="col">¿Válido para la estación?</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @foreach ($ix_elemento as $item)

                                <tr>
                                    <td>{{$item->mejores_practicas}}</td>
                                    <td>{{$item->marco_normativo}}</td>
                                    <td>{{$item->dependencia}}</td>
                                    <td>{{$item->fecha}}</td>
                                    <td>{{$item->tipo}}</td>
                                    <td>{{$item->reglas}}</td>
                                    <td>{{$item->mecanismos}}</td>
                                    <td> @if ($item->configuracion == '1')
                                        <input class="form-check-input" type="radio" name="configuracion" id="configuracion" checked disabled>
                                    @else
                                        <input class="form-check-input" type="radio" name="configuracion" id="configuracion" disabled>
                                    @endif</td>
                                    <td>
                                        @if ($item->pdf == NULL)
                                        <a data-bs-toggle="modal" data-bs-target="#updateModalIX{{$item->id}}"
                                            style="color: #ffffff4d;font-size: 16px;padding: 5px;">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        @else
                                        <a data-bs-toggle="modal" data-bs-target="#updateModalIX{{$item->id}}"
                                            style="color: #ffffff;font-size: 16px;padding: 5px;">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        @endif
                                        <a type="button" class="text-white" data-bs-toggle="modal" data-bs-target="#modaleliminar{{ $item->id }}">
                                            <i class="fa fa-trash" style="color: #ffffff;font-size: 16px;padding: 5px;"></i>
                                        </a>
                                    </td>
                                </tr>
                                @include('modal-elementos.formularios ix.update')
                                @include('modal-elementos.formularios ix.eliminar')
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
