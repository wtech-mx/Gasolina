@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h5 class="text-white">II-02-01 FASE DEL PROYECTO ::Construcción</h5>

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
                            <td>Construcción</td>
                            <td>Construcción de zonas de despacho (área de islas y techumbre).</td>
                            <td>Es la actividad que se ejecuta para construir una zona especifica</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Construcción</td>
                            <td>Edificio Administrativo y de Servicios.</td>
                            <td>Es el conjunto de actividades que se desarrollan para construir un área específica.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Construcción</td>
                            <td>Excavación de cimentación y fosa de tanques.</td>
                            <td>Son las actividades previas a ejecutar el desplante de la construcción</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Construcción</td>
                            <td>Instalación eléctrica.</td>
                            <td>Es la instalación del sistema eléctrico.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Construcción</td>
                            <td>Instalación hidro-sanitaria.</td>
                            <td>Es la instalación de sistemas que alimentan a los diferentes servicios dentro de la estación de servicios.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Construcción</td>
                            <td>Instalación mecánica</td>
                            <td>Es el conjunto de instalaciones de determinados sistemas</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Construcción</td>
                            <td>Pavimentos y obras de exteriores.</td>
                            <td>Es el conjunto de actividades que se desarrollan para construir un área específica.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

@endsection
