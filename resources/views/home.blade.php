@extends('layouts.app')

@include('fullcalendar.calendar')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-lg-6 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h1 class="text-white">Inicio</h1>

                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                    <a class="btn btn-back" href="">
                        <i class="fa fa-bell btn-icon-back"></i>
                    </a>

                </div>

                <div id='calendar'></div>

                <div class=" d-flex justify-content-between bg-white p-2 rounded-pill">
                    <a href=""> <span class="badge badge-pill"
                            style="background-color: {{$config->color_diaria}}">Diaria</span> </a>
                    <a href=""> <span class="badge badge-pill"
                            style="background-color: {{$config->color_mensual}}">Mensual</span> </a>
                    <a href=""> <span class="badge badge-pill"
                            style="background-color: {{$config->color_semestral}};color: #faf7f7">Semestral</span> </a>
                            <a href=""> <span class="badge badge-pill"
                                style="background-color: {{$config->color_año}};color: #faf7f7">Anual</span> </a>
                    <a href=""> <span class="badge badge-pill"
                            style="background-color: {{$config->color_no_realizada}}">No realizada</span> </a>
                </div>



            </div>

            <div class="col-xs-12 col-sm-12 col-lg-6 p-4 ">

                @include('estacion')

                <div class="row">
                    <div class="col-4 mt-3">
                        <a class="btn text-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <h2 class="text-left title-cardso" style="color: #FFC300!important">Elementos V</h2>
                        </a>
                    </div>

                    <div class="col-4 mt-3">
                        <a class="btn text-white" data-bs-toggle="collapse" href="#collapseExampleGraficas" role="button" aria-expanded="false" aria-controls="collapseExampleGraficas">
                            <h2 class="text-left title-cardso" style="color: #FFC300!important">Graficas V</h2>
                        </a>
                    </div>

                    <div class="col-4 mt-3">
                        <a class="btn text-white" data-bs-toggle="collapse" href="#collapseExampleCursos" role="button" aria-expanded="false" aria-controls="collapseExampleCursos">
                            <h2 class="text-left title-cardso" style="color: #FFC300!important">Cursos V</h2>
                        </a>
                    </div>


                </div>
                @include('elemetnos')

                @include('graficas')

                 @include('cursos')

                 @include('actividades')

            </div>


@endsection
