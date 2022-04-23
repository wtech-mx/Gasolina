@extends('layouts.app')

@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/forms.css') }}">
@endsection

@section('content')
<div class="box">
    <div class="row">

        <div class="col-12 mt-3">
            <div class="d-flex justify-content-between p-3">

                <a href="javascript:history.back()" class="btn btn-back">
                    <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                </a >

                <h1 class="text-white">Puestos</h1>

            {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                <h5></h5>

            </div>
        </div>
        <div class="col-12 p-4">

                <div class="row">
                    <table class="table" id="table_id">
                        <thead class="text-white">
                        <tr>
                            <th scope="col">Puesto</th>
                            <th scope="col">Actividades</th>
                        </tr>
                        </thead>
                        <tbody class="text-white">
                            <tr>
                                <td>Auxiliar administrativo.</td>
                                <td>
                                    <a href="{{route('consulta.puesto_formato')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Empresario Gasolinero.</td>
                                <td>
                                    <a href="{{route('consulta.puesto_formato')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td> Gerente.</td>
                                <td>
                                    <a href="{{route('consulta.puesto_formato')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Oficial de Mantenimiento</td>
                                <td>
                                    <a href="{{route('consulta.puesto_formato')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Oficial Gasolinero.</td>
                                <td>
                                    <a href="{{route('consulta.puesto_formato')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Proveedor y/o Contratista.</td>
                                <td>
                                    <a href="{{route('consulta.puesto_formato')}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
        </div>
    </div>
</div>
    @endsection
