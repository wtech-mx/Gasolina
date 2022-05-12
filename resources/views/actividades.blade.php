@php
    $userId = auth()->user()->admin;
@endphp
<h2 class="text-left title-cardso mt-3 mb-3" style="color: #ffffff!important">Mis actividades</h2>

<div class="d-flex justify-content-center">

    <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-pendientes-tab" data-bs-toggle="pill" data-bs-target="#pills-pendientes" type="button" role="tab" aria-controls="pills-pendientes" aria-selected="true">
            <img class="img-card-menu" src=" {{ asset('assets/img/icons/lista-de-deseos.png') }}" style="width: 30px;">Pendientes
        </button>
      </li>

      <li class="nav-item" role="presentation">

        <button class="nav-link" id="pills-terminadas-tab" data-bs-toggle="pill" data-bs-target="#pills-terminadas" type="button" role="tab" aria-controls="pills-terminadas" aria-selected="false">
            <img class="img-card-menu" src=" {{ asset('assets/img/icons/lista.png') }}" style="width: 30px;">Terminadas
        </button>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-vencer-tab" data-bs-toggle="pill" data-bs-target="#pills-vencer" type="button" role="tab" aria-controls="pills-vencer" aria-selected="false">
            <img class="img-card-menu" src=" {{ asset('assets/img/icons/timetable.png') }}" style="width: 30px;">Por Vencer
        </button>
      </li>
    </ul>
</div>

<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-pendientes" role="tabpanel" aria-labelledby="pills-pendientes-tab">
        @include('actividades.pendientes')
    </div>
    <div class="tab-pane fade" id="pills-terminadas" role="tabpanel" aria-labelledby="pills-terminadas-tab">
        @include('actividades.terminadas')
    </div>
    <div class="tab-pane fade" id="pills-vencer" role="tabpanel" aria-labelledby="pills-vencer-tab">
        @include('actividades.vencer')
    </div>
</div>
