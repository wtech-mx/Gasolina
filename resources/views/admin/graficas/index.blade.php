@extends('layouts.app')

@section('content')

            <div class="row">
                <div class="col-12 mt-3 mb-5">
                    <div class="d-flex justify-content-between p-3">

                        <a href="javascript:history.back()" class="btn btn-back">
                            <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                        </a >

                        <h5 class="text-white">Metas</h5>

                        <a class="btn btn-back" href="">
                            <i class="fa fa-bell btn-icon-back"></i>
                        </a>

                    </div>
                </div>

                <div class="col-6 text-center">
                    <img class="img-card-menu" src=" {{ asset('assets/img/pie-chart (1).png') }}">
                    <h3 class="text-white">Mensual</h3>
                </div>
                <div class="col-6 text-center">
                    <img class="img-card-menu" src=" {{ asset('assets/img/pie-chart.png') }}">
                    <h3 class="text-white">Anual</h3>
                </div>
            </div>
            <div class="row mt-5">
                <h5 class="text-center text-white">Generar Grafica Actividades</h5>
            </div>


@endsection
