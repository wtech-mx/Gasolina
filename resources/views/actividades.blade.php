<h2 class="text-left mb-3" style="color: #ffffff!important">Mis actividades</h2>


<div class="card card-menu" style="background-color: #ffffff!important">
    <div class="card-body">
        <a style="text-decoration: none;color: #000000" href="{{ route('elementos.pendientes') }}">
            <img class="img-card-menu" src=" {{ asset('assets/img/icons/lista-de-deseos.png') }}">
            <h4 class="card-title card-menu-title">Pendientes</h4>
        </a>
    </div>
</div>

<div class="card card-menu" style="background-color: #ffffff!important">
    <div class="card-body">
        <a style="text-decoration: none;color: #000000" href="{{ route('elementos.terminadas') }}">
            <img class="img-card-menu" src=" {{ asset('assets/img/icons/fechas.png') }}">
            <h4 class="card-title card-menu-title">Terminadas</h4>
        </a>
    </div>
</div>

<div class="card card-menu" style="background-color: #ffffff!important">
    <div class="card-body">
        <a style="text-decoration: none;color: #000000" href="{{ route('elementos.por_vencer') }}">
            <img class="img-card-menu" src=" {{ asset('assets/img/icons/calendario-de-escritorio.png') }}">
            <h4 class="card-title card-menu-title">Por Vencer</h4>
        </a>
    </div>
</div>
