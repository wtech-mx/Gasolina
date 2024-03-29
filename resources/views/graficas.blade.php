@php
    $userId = auth()->user()->admin;
@endphp

<div id="grafica_v" class="accordion-collapse collapse" aria-labelledby="grafica_v" data-bs-parent="#accordionactividades">
    <div class="card card-body d-inline-block" style="background: none;">

        <h2 class="text-left title-cardso mt-3 mb-3" style="color: #ffffff!important">Graficas</h2>

        {{-- @if ($userId == 1)
        <div class="card card-menu" style="background-color: #ffffff!important">
            <a style="text-decoration: none;color: #000000" href="{{ route('graficas_admin') }}">
                <div class="card-body">
                    <img class="img-card-menu" src=" {{ asset('assets/img/icons/grafico-de-barras.png') }}">
                    <h4 class="card-title card-menu-title">Mis Actividades</h4>
                </div>
            </a>
        </div>
        @else --}}
        <div class="card card-menu" style="background-color: #ffffff!important">
            <a style="text-decoration: none;color: #000000" href="{{ route('graficas_admin') }}">
                <div class="card-body">
                    <img class="img-card-menu" src=" {{ asset('assets/img/icons/grafico-de-barras.png') }}">
                    <h4 class="card-title card-menu-title">Mis Actividades</h4>
                </div>
            </a>
        </div>
        {{-- @endif --}}

        <div class="card card-menu" style="background-color: #ffffff!important">
            <div class="card-body">
                <img class="img-card-menu" src=" {{ asset('assets/img/icons/grafico.png') }}">
                <h4 class="card-title card-menu-title">Man. Preventivo</h4>
            </div>
        </div>

        <div class="card card-menu" style="background-color: #ffffff!important">
            <div class="card-body">
                <img class="img-card-menu" src=" {{ asset('assets/img/icons/barra-grafica.png') }}">
                <h4 class="card-title card-menu-title">Man. correctivo</h4>
            </div>
        </div>
    </div>
</div>
