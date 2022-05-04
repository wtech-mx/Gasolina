@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h5 class="text-white">II-02-01 FASE DEL PROYECTO::Preparación del Sitio</h5>

                    <a href="">

                    </a>

                </div>
            </div>

            <div class="col-12 p-4">
                <table class="table" id="table_id" >
                    <thead class="text-white">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Fase del proyecto</th>
                        <th scope="col">Actividad</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Estatus</th>
                        <th scope="col">Preconfiguracion</th>
                    </tr>
                    </thead>
                    <tbody class="text-white">
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Preparación del Sitio</td>
                            <td>Despalme de terreno</td>
                            <td>Dentro de esta actividad se realizarán las actividades de remoción de la capa Horizonte O ó capa superficial del horizonte. que es la capa formada por materia orgánica que ha caído de la vegetación que la cubren (hojas, troncos y ramas).</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Preparación del Sitio</td>
                            <td>Limpieza de terreno.</td>
                            <td>Actividad que se realiza previo a realizar un despalme del terreno y mejoramiento del terreno</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Preparación del Sitio</td>
                            <td>Mejoramiento del terreno</td>
                            <td>Es la actividad que se realiza para mejorar o reforzar el terreno, el incremento de sus propiedades resistentes o de rigidez para poder apoyar sobre el adecuadamente cimentaciones.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

@endsection
