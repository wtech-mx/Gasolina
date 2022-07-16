@extends('layouts.app')
@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/custom_table.css') }}">
@endsection
@section('content')
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <style>
                        div.dataTables_wrapper div.dataTables_length label{
                            color: #fff;
                        }
                        div.dataTables_wrapper div.dataTables_info{
                            color: #fff;
                        }
                        div.dataTables_wrapper div.dataTables_filter label{
                            color: #fff;
                        }
                    </style>
                    <div class="box">
                        <div class="row">

                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-between p-3">

                                    <a href="{{ route('home') }}" class="btn btn-back">
                                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                                    </a >

                                    <h5 class="text-white">VI-01-01 identificación de competencia y formación interna y externa.</h5>

                                    <a href="">

                                    </a>

                                </div>
                            </div>

                            <div class="col-12 p-4">
                                <table class="table" id="table_id" >
                                    <thead class="text-white">
                                    <tr>
                                        <th scope="col">Empleado</th>
                                        <th scope="col">Puesto</th>
                                        <th scope="col">Total de conocimiento laboral</th>
                                        <th scope="col">Evaluacion</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        @foreach ($user as $item)
                                        <tr>
                                            <td>{{$item->name}} {{$item->apellido}}</td>
                                            <td>{{$item->puesto}}</td>
                                            <td>0</td>
                                            <td>

                                                    @if($item->puesto == 'Empresario Gasolinero')
                                                        <a href="{{route('edit_empresario.evaluacion', $item->ViElemento->id)}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                                    @elseif($item->puesto == 'Gerente')
                                                        <a href="{{route('edit_gerente.evaluacion', $item->ViElemento->id)}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                                    @elseif($item->puesto == 'Oficial Gasolinero')
                                                        <a href="{{route('edit_gasolinero.evaluacion', $item->ViElemento->id)}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>

                                                    @elseif($item->puesto == 'Auxiliar administrativo')
                                                        <a href="{{route('edit_administrativo.evaluacion', $item->ViElemento->id)}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>

                                                    @elseif($item->puesto == 'Oficial de Mantenimiento')
                                                        <a href="{{route('edit_mantenimiento.evaluacion', $item->ViElemento->id)}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                                    @else
                                                        <a href=""></a>
                                                    @endif

                                            </td>
                                        </tr>
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
