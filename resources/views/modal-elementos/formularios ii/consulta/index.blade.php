@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h5 class="text-white">II-02-01 FASE DEL PROYECTO</h5>

                    <a href="">

                    </a>

                </div>
            </div>

            <div class="col-12 p-4">
                <table class="table" id="table_id" >
                    <thead class="text-white">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Fase del proyecto</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Estatus</th>
                        <th scope="col">Preconfiguracion</th>
                    </tr>
                    </thead>
                    <tbody class="text-white">
                        <tr>
                            <td>
                              <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                              <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                            </td>
                            <td>SAC XIB CHAAC, S.A. DE C.V.</td>
                            <td>Abandono y rehabilitación del sitio.</td>
                            <td>Actividades realizadas al término de la vida útil.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                <a href="{{route('actividad_construccion.construccion')}}"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                            </td>
                            <td>SAC XIB CHAAC, S.A. DE C.V.</td>
                            <td>Construcción</td>
                            <td>Son un conjunto de actividades que se realizan con la finalidad construir la estación de servicio.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                <a href="{{route('actividad_operacion.operacion')}}"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                            </td>
                            <td>SAC XIB CHAAC, S.A. DE C.V.</td>
                            <td>Operación.</td>
                            <td>Actividad que se realiza al recibir el producto y almacenarlo en los tanques de almacenamiento.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                <a href="{{route('actividad_preparacion.preparacion')}}"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                            </td>
                            <td>SAC XIB CHAAC, S.A. DE C.V.</td>
                            <td>Preparación del Sitio</td>
                            <td>Durante esta fase del proyecto se llevan acabo las actividades limpieza de terreno, despalme del terreno y mejoramiento del terreno.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                <a href="{{route('actividad_situaciones.situaciones')}}"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                            </td>
                            <td>SAC XIB CHAAC, S.A. DE C.V.</td>
                            <td>Situaciones de emergencia dentro de la fase de operación.</td>
                            <td>Situaciones no esperadas por la Estación de Servicio.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

@endsection
ñ
