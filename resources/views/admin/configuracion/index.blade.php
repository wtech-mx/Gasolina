@extends('layouts.app')

@section('content')

<div class="box">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="d-flex justify-content-between p-3">

                <a href="javascript:history.back()" class="btn btn-back">
                    <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                </a >

                <h1 class="text-white">Editar Usuario</h1>

            {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                <a class="btn btn-back" href="#">
                    <i class="fa fa-pencil btn-icon-back"></i>
                </a>

            </div>
        </div>

        <ul class="nav nav-pills d-flex justify-content-center mb-3 mt-5" id="pills-tab" role="tablist">

          <li class="nav-item p-2" role="presentation">
            <a class="nav-link a-perso active show" id="estacion-servicio" data-bs-toggle="pill" data-bs-target="#pills-servicio" type="button" role="tab" aria-controls="pills-servicio" aria-selected="true">
                 <i class="fa fa-user icon-style-2 p-1 "></i>Estacion de Servicio
            </a>
          </li>

          <li class="nav-item p-2" role="presentation">
            <a class="nav-link a-perso" id="firmas" data-bs-toggle="pill" data-bs-target="#pills-firmas" type="button" role="tab" aria-controls="pills-firmas" aria-selected="false">
                <i class="fa fa-pencil" aria-hidden="true"></i> Firmas
            </a>
          </li>

          <li class="nav-item p-2" role="presentation">
            <a class="nav-link a-perso" id="otros-ajustes" data-bs-toggle="pill" data-bs-target="#pills-otros" type="button" role="tab" aria-controls="pills-otros" aria-selected="false">
                <i class="fa fa-lock icon-style-2 p-1 "></i> Otros Ajustes
            </a>
          </li>

          <li class="nav-item p-2" role="presentation">
            <a class="nav-link a-perso" id="roles-permisos" data-bs-toggle="pill" data-bs-target="#pills-permisos" type="button" role="tab" aria-controls="pills-permisos" aria-selected="false">
                <i class="fa fa-lock icon-style-2 p-1 "></i> Roles y permisos
            </a>
          </li>

        </ul>

        <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active p-3" id="pills-servicio" role="tabpanel" aria-labelledby="pills-servicio">
                <h1 class="text-white">Estacion</h1>
                    @include('admin.configuracion.estacion')
            </div>

            <div class="tab-pane fade p-3" id="pills-firmas" role="tabpanel" aria-labelledby="firmas">
                <h1 class="text-white">Firmas</h1>
                @include('admin.configuracion.firmas')

            </div>

            <div class="tab-pane fade p-3" id="pills-otros" role="tabpanel" aria-labelledby="otros-ajustes">
                <h1>Otros Ajustes</h1>

            </div>

            <div class="tab-pane fade p-3" id="pills-permisos" role="tabpanel" aria-labelledby="roles-permisos">
                <h1>Roles y permisos</h1>

            </div>

        </div>
    </div>
</div>

@endsection
