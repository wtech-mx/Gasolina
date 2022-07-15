@extends('layouts.app')

@include('fullcalendar.calendar')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-lg-6 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a>
                        {{-- <i class="fa fa-arrow-circle-o-left btn-icon-back"></i> --}}
                    </a >

                    <h1 class="text-white">Inicio</h1>

                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                    <a >
                        {{-- <i class="fa fa-bell btn-icon-back"></i> --}}
                    </a>

                </div>

                <div id='calendar'></div>

                <div class=" d-flex justify-content-between bg-white p-2 rounded-pill">
                    <a > <span class="badge badge-pill"
                            style="background-color: {{$config->color_diaria}}">Diaria</span> </a>
                    <a > <span class="badge badge-pill"
                            style="background-color: {{$config->color_mensual}}">Mensual</span> </a>
                    <a > <span class="badge badge-pill"
                            style="background-color: {{$config->color_semestral}};color: #faf7f7">Semestral</span> </a>
                            <a > <span class="badge badge-pill"
                                style="background-color: {{$config->color_año}};color: #faf7f7">Anual</span> </a>
                    <a > <span class="badge badge-pill"
                            style="background-color: {{$config->color_no_realizada}}">No realizada</span> </a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-lg-6 p-4 ">

                <div class="row">

                    @include('estacion')

                    <div class="accordion accordion-flush mb-3" id="accordionactividades" style="display: contents;">
                        <div class="col-4 p-2 mt-2">
                            <button class="collapse_principal collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#elemento_v" aria-expanded="false" aria-controls="elemento_v">
                                <h2 class="text-left title-cardso" >Elementos V</h2>
                            </button>
                        </div>

                        <div class="col-4 p-2 mt-2">
                            <button class="collapse_principal collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#grafica_v" aria-expanded="false" aria-controls="grafica_v">
                                <h2 class="text-left title-cardso" >Graficas V</h2>
                            </button>
                        </div>

                        <div class="col-4 p-2 mt-2">
                           <button class="collapse_principal collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cursos_v" aria-expanded="false" aria-controls="cursos_v">
                                <h2 class="text-left title-cardso" >Cursos V</h2>
                            </button>
                        </div>

                         @include('elemetnos')
                         @include('graficas')
                         @include('cursos')
                    </div>

                    <div class="col-12">
                        @include('actividades')
                    </div>

                </div>
            </div>
        </div>


@endsection
