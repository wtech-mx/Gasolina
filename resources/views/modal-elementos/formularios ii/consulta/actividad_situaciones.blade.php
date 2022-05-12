@extends('layouts.app')

@section('content')

    <div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h5 class="text-white">II-02-01 FASE DEL PROYECTO::Situaciones de emergencia dentro de la fase de operación.</h5>

                    <a href="">

                    </a>

                </div>
            </div>
            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3 text-white">

                    <label for="">Cliente</label>
                    <p>324</p>

                    <label for="">fase del proyecto</label>
                    <p>2</p>

                    <label for="">Configuracion de valorización/control operacional</label>
                    <p>1</p>

                </div>
            </div>

                <ul class="nav justify-content-center mb-3" id="pills-tab" role="tablist">

                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-valorizacion-tab" data-bs-toggle="pill" data-bs-target="#pills-valorizacion" type="button" role="tab" aria-controls="pills-valorizacion" aria-selected="false">
                        Valorización
                    </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-operacional-tab" data-bs-toggle="pill" data-bs-target="#pills-operacional" type="button" role="tab" aria-controls="pills-operacional" aria-selected="false">
                            Control operacional
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-aplicable-tab" data-bs-toggle="pill" data-bs-target="#pills-aplicable" type="button" role="tab" aria-controls="pills-aplicable" aria-selected="false">
                            Normatividad aplicable
                        </button>
                    </li>
                </ul>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-valorizacion" role="tabpanel" aria-labelledby="pills-valorizacion-tab">
                    <div class="col-12 p-4">
                        @include('modal-elementos.formularios ii.consulta.tabla_valori_situaciones')
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-operacional" role="tabpanel" aria-labelledby="pills-operacional-tab">
                    @include('modal-elementos.formularios ii.consulta.tabla_control_situaciones')
                </div>

                <div class="tab-pane fade" id="pills-aplicable" role="tabpanel" aria-labelledby="pills-aplicable-tab">
                    @include('modal-elementos.formularios ii.consulta.tabla_norma_situaciones')
                </div>
            </div>
        </div>
    </div>

@endsection
