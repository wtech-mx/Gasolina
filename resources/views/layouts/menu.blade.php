<div class="redondo">
    <div id="burgerBtn"></div>
</div>

  <div id="nav">
 <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">STRUCTURE</span>
    </a>
    <hr>

    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link nav-menuiem {{ Request::is('home') ? 'active' : '' }}" aria-current="page">
          <img class="img-card-menu2" src=" {{ asset('assets/img/casam.png') }}">
          Inicio
        </a>
      </li>

      {{-- <li class="">
        <a href="#" class="nav-link nav-menuiem text-white">
          <img class="img-card-menu2" src=" {{ asset('assets/img/tank-truck%20(1).png') }}">
          Pipa
        </a>
      </li>

      <li class="">
        <a href="#" class="nav-link nav-menuiem text-white">
          <img class="img-card-menu2" src=" {{ asset('assets/img/spray-bottle.png') }}">
          Product
        </a>
      </li> --}}

      <li class="">
        <a href="{{ route('graficas_admin') }}" class="nav-link nav-menuiem text-white">
          <img class="img-card-menu2" src=" {{ asset('assets/img/barra-grafica.png') }}">
          Metas
        </a>
      </li>

      <li class="">
        <a href="{{ route('roles.index') }}" class="nav-link nav-menuiem text-white">
          <img class="img-card-menu2" src="{{ asset('assets/img/roles.png') }}">
          Roles
        </a>
      </li>

      <li class="">
        <a href="{{ route('index.usuario') }}" class="nav-link nav-menuiem {{ Request::is('usuario') ? 'active' : '' }} text-white">
          <img class="img-card-menu2" src="{{ asset('assets/img/team.png') }}">
          Usuarios
        </a>
      </li>

     <li class="">
        <a href="{{ route('index.sucursal') }}" class="nav-link nav-menuiem {{ Request::is('sucursales') ? 'active' : '' }} text-white">
          <img class="img-card-menu2" src="{{ asset('assets/img/gasolinera.png') }}">
          Sucursales
        </a>
      </li>

      <li class="">
        <a href="{{ route('index.empresa') }}" class="nav-link nav-menuiem text-white">
          <img class="img-card-menu2" src="{{ asset('assets/img/empresa.png') }}">
          Empresa
        </a>
      </li>

      <li class="">
        <a href="{{ route('index.configuracion') }}" class="nav-link nav-menuiem text-white">
          <img class="img-card-menu2" src=" {{ asset('assets/img/dosier.png') }}">
          Configuración
        </a>
      </li>


    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong> {{ Auth::user()->name }}</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li>
            <a class="dropdown-item" href="{{ route('edit.usuario', $userId) }}">
                Perfil
            </a>
        </li>

        <li><hr class="dropdown-divider"></li>
        <li>

            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </li>
      </ul>
    </div>
  </div>
  </div>

