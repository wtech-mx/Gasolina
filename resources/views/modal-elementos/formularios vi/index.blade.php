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
                                            @php
                                                if ($item->ViElemento->pregunta1 == NULL) {
                                                $count1 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta1 == 'Si') {
                                                $count1 = 1;
                                                }else {
                                                    $count1 = 0;
                                                }}
                                                if ($item->ViElemento->pregunta2 == NULL) {
                                                $count2 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta2 == 'Si') {
                                                $count2 = 1;
                                                }else {
                                                    $count2 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta3 == NULL) {
                                                $count3 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta3 == 'Si') {
                                                $count3 = 1;
                                                }else {
                                                    $count3 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta4 == NULL) {
                                                $count4 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta4 == 'Si') {
                                                $count4 = 1;
                                                }else {
                                                    $count4 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta5 == NULL) {
                                                $count5 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta5 == 'Si') {
                                                $count5 = 1;
                                                }else {
                                                    $count5 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta6 == NULL) {
                                                $count6 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta6 == 'Si') {
                                                $count6 = 1;
                                                }else {
                                                    $count6 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta7 == NULL) {
                                                $count7 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta7 == 'Si') {
                                                $count7 = 1;
                                                }else {
                                                    $count7 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta8 == NULL) {
                                                $count8 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta8 == 'Si') {
                                                $count8 = 1;
                                                }else {
                                                    $count8 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta9 == NULL) {
                                                $count9 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta9 == 'Si') {
                                                $count9 = 1;
                                                }else {
                                                    $count9 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta10 == NULL) {
                                                $count10 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta10 == 'Si') {
                                                $count10 = 1;
                                                }else {
                                                    $count10 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta11 == NULL) {
                                                $count11 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta11 == 'Si') {
                                                $count11 = 1;
                                                }else {
                                                    $count11 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta12 == NULL) {
                                                $count12 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta12 == 'Si') {
                                                $count12 = 1;
                                                }else {
                                                    $count12 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta13 == NULL) {
                                                $count13 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta13 == 'Si') {
                                                $count13 = 1;
                                                }else {
                                                    $count13 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta14 == NULL) {
                                                $count14 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta14 == 'Si') {
                                                $count14 = 1;
                                                }else {
                                                    $count14 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta15 == NULL) {
                                                $count15 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta15 == 'Si') {
                                                $count15 = 1;
                                                }else {
                                                    $count15 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta16 == NULL) {
                                                $count16 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta16 == 'Si') {
                                                $count16 = 1;
                                                }else {
                                                    $count16 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta17 == NULL) {
                                                $count17 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta17 == 'Si') {
                                                $count17 = 1;
                                                }else {
                                                    $count17 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta18 == NULL) {
                                                $count18 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta18 == 'Si') {
                                                $count18 = 1;
                                                }else {
                                                    $count18 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta19 == NULL) {
                                                $count19 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta19 == 'Si') {
                                                $count19 = 1;
                                                }else {
                                                    $count19 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta20 == NULL) {
                                                $count20 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta20 == 'Si') {
                                                $count20 = 1;
                                                }else {
                                                    $count20 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta21 == NULL) {
                                                $count21 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta21 == 'Si') {
                                                $count21 = 1;
                                                }else {
                                                    $count21 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta22 == NULL) {
                                                $count22 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta22 == 'Si') {
                                                $count22 = 1;
                                                }else {
                                                    $count22 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta23 == NULL) {
                                                $count23 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta23 == 'Si') {
                                                $count23 = 1;
                                                }else {
                                                    $count23 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta24 == NULL) {
                                                $count24 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta24 == 'Si') {
                                                $count24 = 1;
                                                }else {
                                                    $count24 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta25 == NULL) {
                                                $count25 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta25 == 'Si') {
                                                $count25 = 1;
                                                }else {
                                                    $count25 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta26 == NULL) {
                                                $count26 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta26 == 'Si') {
                                                $count26 = 1;
                                                }else {
                                                    $count26 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta27 == NULL) {
                                                $count27 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta27 == 'Si') {
                                                $count27 = 1;
                                                }else {
                                                    $count27 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta28 == NULL) {
                                                $count28 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta28 == 'Si') {
                                                $count28 = 1;
                                                }else {
                                                    $count28 = 0;
                                                }
                                                }
                                                if ($item->ViElemento->pregunta29 == NULL) {
                                                $count29 = 0;
                                                }else {
                                                if ($item->ViElemento->pregunta29 == 'Si') {
                                                $count29 = 1;
                                                }else {
                                                    $count29 = 0;
                                                }
                                                }

                                                $count = $count = $count1 + $count2 + $count3 + $count4 +
                                                $count5 + $count6 + $count7 + $count8 + $count9 + $count10 +
                                                $count11 + $count12 + $count13 + $count14 + $count15 + $count16 +
                                                $count17 + $count18 + $count19 + $count20 + $count21 + $count22 +
                                                $count23 + $count24 + $count25 + $count26 + $count27 + $count28 +
                                                $count29;

                                            @endphp
                                        <tr>
                                            <td>{{$item->name}} {{$item->apellido}}</td>
                                            <td>{{$item->puesto}}</td>
                                            <td>{{$count}}</td>
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
