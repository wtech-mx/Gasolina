@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h5 class="text-white">II-02-01 FASE DEL PROYECTO::Abandono y rehabilitación del sitio</h5>

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
                            <td>Abandono y rehabilitación del sitio.</td>
                            <td>Desconectar y aislar las tuberías, líneas eléctricas y conexiones y posterior, realizar la limpieza interior de tanques.</td>
                            <td>Actividad de desmantelamiento.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Abandono y rehabilitación del sitio.</td>
                            <td>Desmantelamiento, demolición de instalaciones y retiro de los tanques de almacenamiento (en caso de que la autoridad así lo determine).</td>
                            <td>Actividad para el desmantelamiento y abandono</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Abandono y rehabilitación del sitio.</td>
                            <td>Rehabilitación del sitio a sus condiciones de origen.</td>
                            <td>Actividad para regresar el sitio a sus condiciones de origen</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

@endsection
