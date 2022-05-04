@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h5 class="text-white">II-02-01 FASE DEL PROYECTO ::Operación</h5>

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
                            <td>Operación</td>
                            <td>Calibración de dispensarios.</td>
                            <td>Actividad que se realiza de manera semestral, para asegurar el correcto funcionamiento de los dispensarios en base a norma y así cumplir con los solicitado en el Sistema de Gestión de Mediciones.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Calibración de Tanques</td>
                            <td>Actividad no rutinaria que se realiza a los tanques, para asegurar el correcto funcionamiento de la sonda que toma los datos y variables para arrojar un valor en la consola de monitoreo y control de inventarios.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Descarga de producto del autotanque al tanque de almacenamiento</td>
                            <td>Proceso que se realiza al recibir el producto y almacenarlo en los tanque de almacenamiento </td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Despacho de gasolina a clientes.</td>
                            <td>Actividad principal de la Estación de Servicio</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Lavado en área de tanques.</td>
                            <td>Actividad Rutinaria que realizan los trabajadores al área de tanques</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Lavado en zona de islas (área de despacho).</td>
                            <td>Actividad rutinaria que realizan los trabajadores de la estación de servicio en la zona de despacho</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Limpieza de drenajes.</td>
                            <td>Actividad no rutinaria que se realiza para garantizar el cumplimiento de la norma oficial mexicana aplicable en materia de descarga de aguas residuales.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Limpieza de sanitarios.</td>
                            <td>Actividad rutinaria que se realiza para asegurar la higiene y salud de los clientes que hacen uso de este servicio</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Limpieza de trampa de grasas.</td>
                            <td>Actividad que se realiza para garantizar el correcto funcionamiento de la trampa de grasas</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Mantenimiento a dispensarios.</td>
                            <td>Actividad no rutinaria que se realiza a los dispensarios para asegurar la integridad mecánica</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Mantenimiento a señalización.</td>
                            <td>Actividad no rutinaria que se realiza para garantizar la correcta señalización dentro de la Estación de Servicio.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Mantenimiento a tanques de almacenamiento.</td>
                            <td>Actividad no rutinaria realizada a los tanques de almacenamiento para segurar la integridad mecánica.</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Servicios (sanitarios, agua, aire, otros).</td>
                            <td>Servicios que se le prestan al cliente durante el servicio</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('actividad_abandono.abandono')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </td>
                            <td>Operación</td>
                            <td>Venta de aceites y aditivos.</td>
                            <td>Es una de las actividades principales de la Estación de servicio</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled></td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

@endsection
