@extends('layouts.app')

@include('fullcalendar.calendar')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
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
            </div>

            <div class="col-12 p-4">

                <div id='calendar'></div>

            </div>

            <div class="col-12 p-4">

            @include('elemetnos')

            </div>

            <div class="col-12 p-4">

                @include('actividades')

            </div>

            <div class="col-12 p-4">

                @include('cursos')

            </div>

            <div class="col-12 p-4">

                @include('graficas')

            </div>


@endsection
