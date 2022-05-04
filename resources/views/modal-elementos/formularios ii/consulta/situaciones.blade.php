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
                            <td>Situaciones de emergencia dentro de la fase de operación.</td>
                            <td>Derrame de productos.</td>
                            <td>Actividad que se puede presentar si no se lleva acabo las medidas de seguridad</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Situaciones de emergencia dentro de la fase de operación.</td>
                            <td>Explosión.</td>
                            <td>Situación no esperada por la estación de servicio, que puede ocasionar daño al personal y a las instalaciones</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Situaciones de emergencia dentro de la fase de operación.</td>
                            <td>Incendio</td>
                            <td>Situación no esperada por la estación de servicio, que tiene el potencia de generar daño al personal y a las instalaciones.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Situaciones de emergencia dentro de la fase de operación.</td>
                            <td>inundaciones</td>
                            <td>Situación no espera por la estación de Servicio que puede ocacionar daño al personal y a las instalaciones.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Situaciones de emergencia dentro de la fase de operación.</td>
                            <td>Sismos.</td>
                            <td>Situación no espera por la Estación de Servicio, que puede ocacionar daño al personal y a las instalaciones</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

@endsection
