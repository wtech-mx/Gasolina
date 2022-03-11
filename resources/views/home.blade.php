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

                <div class=" d-flex justify-content-between bg-white p-2 rounded-pill">
                    <a href=""> <span class="badge badge-pill"
                            style="background-color: #2ECC71">Diaria</span> </a>
                    <a href=""> <span class="badge badge-pill"
                            style="background-color: #2980B9">Mensual</span> </a>
                    <a href=""> <span class="badge badge-pill"
                            style="background-color: #8E44AD;color: #faf7f7">Semestral</span> </a>
                    <a href=""> <span class="badge badge-pill"
                            style="background-color: #FF0000">No realizada</span> </a>
                </div>

                <div id='calendar'></div>

            </div>

            <div class="col-xs-12 col-sm-12 col-lg-6 p-4 ">

                @include('elemetnos')

                @include('actividades')

                @include('graficas')

                 @include('cursos')

            </div>


@endsection
