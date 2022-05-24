@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h5 class="text-white">III MATRIZ DE REQUISITOS LEGALES</h5>

                    <a type="button" class="btn btn-back" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa fa-plus btn-icon-back"></i>
                    </a>
                    @include('modal-elementos.formularios iii.create')
                </div>
            </div>

            <div class="col-12 p-4">
                <table class="table" id="table_id" >
                    <thead class="text-white">
                    <tr>
                        <th scope="col">Leyes, reglamentos o normas</th>
                        <th scope="col">Marco normativo</th>
                        <th scope="col">Descripción del marco normativo</th>
                        <th scope="col">Ámbito de la aplicación</th>
                        <th scope="col">Mecanismo de cumplimiento SA</th>
                        <th scope="col">Mecanismo específico</th>
                        <th scope="col">Periocidad</th>
                        <th scope="col">Obligatorio</th>
                        <th scope="col">Aplica</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody class="text-white">
                        @foreach ($iiiElemento as $row)
                        <tr>
                            <td>{{$row->leyes}}</td>
                            <td>{{$row->marco}}</td>
                            <td>{{$row->descripcion}}</td>
                            <td>{{$row->ambito}}</td>
                            <td>{{$row->mecanismo_cumplimiento}}</td>
                            <td>{{$row->mecanismo_especifico}}</td>
                            <td>{{$row->periodicidad}}</td>
                            <td>{{$row->obligatorio}}</td>
                            <td>{{$row->aplica}}</td>
                            <td>
                                <a data-bs-toggle="modal" data-bs-target="#updateModal{{$row->id}}" style="color: #ffffff;font-size: 16px;padding: 5px;">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>

                                <a data-bs-toggle="modal" data-bs-target="#modal{{$row->id}}" style="color: #ffffff;font-size: 16px;padding: 5px;">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                  </a>
                            </td>
                        </tr>
                        @include('modal-elementos.formularios iii.update')
                        @include('modal-elementos.formularios iii.eliminar')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection