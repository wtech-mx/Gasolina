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
                    <img class="img-card-menu" src=" {{ asset('assets/img/pie-chart (1).png') }}">
                    <h3 class="text-white">Mensual</h3>
                </div>
                <div class="col-6 text-center">
                    <img class="img-card-menu" src=" {{ asset('assets/img/pie-chart.png') }}">
                    <h3 class="text-white">Anual</h3>
                </div>
            </div>
            <div class="row mt-5">
                <h5 class="text-center text-white">Generar Grafica</h5>
            </div>
            <div class="row mt-4">
                <ul class="nav nav-tabs mb-3" id="myTab0" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab0" data-mdb-toggle="tab" data-mdb-target="#home0"
                        type="button" role="tab" aria-controls="home" aria-selected="true">
                        Actividades
                    </button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab0" data-mdb-toggle="tab" data-mdb-target="#profile0"
                        type="button" role="tab" aria-controls="profile" aria-selected="false" >
                        Preventivo
                    </button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab0" data-mdb-toggle="tab" data-mdb-target="#contact0"
                        type="button" role="tab" aria-controls="contact" aria-selected="false">
                        Correctivo
                    </button>
                    </li>
                </ul>
            </div>

            <div class="tab-content text-white" id="myTabContent0">
                <div class="tab-pane fade show active" id="home0" role="tabpanel" aria-labelledby="home-tab0">
                    <div class="row mt-4">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative text-center">
                                <i class="fa fa-calendar icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Desde*</label>
                                <input type="date" class="form-control input-style">
                            </div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative text-center">
                                <i class="fa fa-calendar icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Hasta*</label>
                                <input type="date" class="form-control input-style">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn-sinestilo" type="submit">
                                <div class="button" >
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
                  Tab 2 content
                </div>
                <div class="tab-pane fade" id="contact0" role="tabpanel" aria-labelledby="contact-tab0">
                  Tab 3 content
                </div>
            </div>
@endsection
