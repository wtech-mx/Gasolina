@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h5 class="text-white">MATRIZ DE RESPONSABILIDADES</h5>

                    <a href="">

                    </a>

                </div>
            </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
                        <div class="col-12 p-4">
                            <table class="table" id="table_id" >
                                <thead class="text-white">
                                <tr>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Reglas y procedimientos</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Fecha de aprobacion</th>
                                </tr>
                                </thead>
                                <tbody class="text-white">
                                    @foreach ($users as $item)
                                    <tr>
                                        <td>{{$item->name}} {{$item->apellido}}</td>
                                        <td>{{$item->puesto}}</td>
                                        <td>0</td>
                                        <td>
                                            <a href="{{route('edit.usuario', $item->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
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
                </div>

        </div>

@endsection
