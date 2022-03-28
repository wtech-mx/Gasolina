@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-center"  style="font-size: 16px;">
           Control de documentos y registros
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="row">
            <div class="col-12 ">

                <div class="accordion accordion-flush" id="accordionExample">

                  <div class="accordion-item">
                    <h2 class="accordion-header" >
                      <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse" data-bs-target="#element2_one" aria-expanded="true" aria-controls="element2_one">
                         VIII-01-01
                      </button>
                    </h2>
                    <div id="element2_one" class="accordion-collapse collapse show" aria-labelledby="element2_1" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                            <h5 class="text-center" style="font-size: 15px">Listado de documentación interna.</h5>
                            {{--nav tittle arrow--}}
                            <div class="d-flex justify-content-center">

                                <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home2" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Opcion 1
                                    </button>
                                  </li>

                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Opcion 2
                                    </button>
                                  </li>
                                </ul>
                            </div>
                            {{--nav tittle arrow--}}
                            {{--nav content --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
                                   <form method="POST" action="{{ route('tareas.store') }}" enctype="multipart/form-data" role="form">
                                      @csrf
                                      {{-- Tareas elementos --}}
                                      <input type="hidden" name="elementos" id="elementos" value="2">
                                      <input type="hidden" name="num_elementos" id="num_elementos" value="1">
                                      <input type="hidden" name="consultar" id="consultar" value="0">
                                      <input type="hidden" name="difundir" id="difundir" value="0">
                                      <input type="hidden" name="correctiva" id="correctiva" value="0">

                                      {{-- Calendario --}}
                                      <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                      <input type="hidden" name="title" id="title" value="VII-01-01">
                                      <input type="hidden" name="color" id="color" value="#2367D9">
                                      <input type="hidden" name="url" id="url" value="#exampleModal">

                                      @include('modal-elementos.formulario1')
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab">
                                   <form method="POST" action="{{ route('tareas.store') }}" enctype="multipart/form-data" role="form">
                                      @csrf

                                      {{-- Tareas elementos --}}
                                      <input type="hidden" name="elementos" id="elementos" value="2">
                                      <input type="hidden" name="num_elementos" id="num_elementos" value="1">
                                      <input type="hidden" name="consultar" id="consultar" value="0">
                                      <input type="hidden" name="difundir" id="difundir" value="0">
                                      <input type="hidden" name="correctiva" id="correctiva" value="0">

                                      {{-- Calendario --}}
                                      <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                      <input type="hidden" name="title" id="title" value="VII-01-01">
                                      <input type="hidden" name="url" id="url" value="#exampleModal">

                                      @include('modal-elementos.formulario2')
                                   </form>
                                </div>
                            </div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button btn-grid collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#element2_two" aria-expanded="false" aria-controls="element2_two">
                       VIII-01-02
                      </button>
                    </h2>
                    <div id="element2_two" class="accordion-collapse collapse" aria-labelledby="element2_2" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                             <h5 class="text-center" style="font-size: 15px">Listado de formatos, registros y bitácoras.</h5>
                            {{--nav tittle arrow--}}
                            <div class="d-flex justify-content-center">

                                <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home3" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Opcion 1
                                    </button>
                                  </li>

                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile3" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Opcion 2
                                    </button>
                                  </li>
                                </ul>
                            </div>
                            {{--nav tittle arrow--}}
                            {{--nav content --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home-tab">
                                   <form method="POST" action="{{ route('tareas.store') }}" enctype="multipart/form-data" role="form">
                                      @csrf
                                      {{-- Tareas elementos --}}
                                      <input type="hidden" name="elementos" id="elementos" value="2">
                                      <input type="hidden" name="num_elementos" id="num_elementos" value="2">
                                      <input type="hidden" name="consultar" id="consultar" value="0">
                                      <input type="hidden" name="difundir" id="difundir" value="0">
                                      <input type="hidden" name="correctiva" id="correctiva" value="0">

                                      {{-- Calendario --}}
                                      <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                      <input type="hidden" name="title" id="title" value="VIII-01-02">
                                      <input type="hidden" name="color" id="color" value="#2367D9">
                                      <input type="hidden" name="url" id="url" value="#exampleModal">

                                      @include('modal-elementos.formulario1')
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile-tab">
                                   <form method="POST" action="{{ route('tareas.store') }}" enctype="multipart/form-data" role="form">
                                      @csrf

                                      {{-- Tareas elementos --}}
                                      <input type="hidden" name="elementos" id="elementos" value="2">
                                      <input type="hidden" name="num_elementos" id="num_elementos" value="2">
                                      <input type="hidden" name="consultar" id="consultar" value="0">
                                      <input type="hidden" name="difundir" id="difundir" value="0">
                                      <input type="hidden" name="correctiva" id="correctiva" value="0">

                                      {{-- Calendario --}}
                                      <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                      <input type="hidden" name="title" id="title" value="VIII-01-02">
                                      <input type="hidden" name="url" id="url" value="#exampleModal">

                                      @include('modal-elementos.formulario2')
                                   </form>
                                </div>
                            </div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="element2_3">
                      <button class="accordion-button btn-grid collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#element2_Three" aria-expanded="false" aria-controls="element2_Three">
                        VIII-01-03
                      </button>
                    </h2>
                    <div id="element2_Three" class="accordion-collapse collapse" aria-labelledby="element2_3" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                            <h5 class="text-center" style="font-size: 15px">Lista de control de autorizaciones y permisos.</h5>
                            {{--nav tittle arrow--}}
                            <div class="d-flex justify-content-center">

                                <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home4" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Opcion 1
                                    </button>
                                  </li>

                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile4" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Opcion 2
                                    </button>
                                  </li>
                                </ul>
                            </div>
                            {{--nav tittle arrow--}}
                            {{--nav content --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home4" role="tabpanel" aria-labelledby="pills-home-tab">
                                   <form method="POST" action="{{ route('tareas.store') }}" enctype="multipart/form-data" role="form">
                                      @csrf
                                      {{-- Tareas elementos --}}
                                      <input type="hidden" name="elementos" id="elementos" value="2">
                                      <input type="hidden" name="num_elementos" id="num_elementos" value="3">
                                      <input type="hidden" name="consultar" id="consultar" value="0">
                                      <input type="hidden" name="difundir" id="difundir" value="0">
                                      <input type="hidden" name="correctiva" id="correctiva" value="0">

                                      {{-- Calendario --}}
                                      <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                      <input type="hidden" name="title" id="title" value="VIII-01-03">
                                      <input type="hidden" name="color" id="color" value="#2367D9">
                                      <input type="hidden" name="url" id="url" value="#exampleModal">

                                      @include('modal-elementos.formulario1')
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile4" role="tabpanel" aria-labelledby="pills-profile-tab">
                                   <form method="POST" action="{{ route('tareas.store') }}" enctype="multipart/form-data" role="form">
                                      @csrf

                                      {{-- Tareas elementos --}}
                                      <input type="hidden" name="elementos" id="elementos" value="2">
                                      <input type="hidden" name="num_elementos" id="num_elementos" value="3">
                                      <input type="hidden" name="consultar" id="consultar" value="0">
                                      <input type="hidden" name="difundir" id="difundir" value="0">
                                      <input type="hidden" name="correctiva" id="correctiva" value="0">

                                      {{-- Calendario --}}
                                      <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                      <input type="hidden" name="title" id="title" value="VIII-01-03">
                                      <input type="hidden" name="url" id="url" value="#exampleModal">

                                      @include('modal-elementos.formulario2')
                                   </form>
                                </div>
                            </div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="element2_4">
                      <button class="accordion-button btn-grid collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#element2_Four" aria-expanded="false" aria-controls="element2_Four">
                       VIII-01-04
                      </button>
                    </h2>
                    <div id="element2_Four" class="accordion-collapse collapse" aria-labelledby="element2_4" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                            <h5 class="text-center" style="font-size: 15px">Listado de documentación externa.</h5>
                            {{--nav tittle arrow--}}
                            <div class="d-flex justify-content-center">

                                <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home5" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Opcion 1
                                    </button>
                                  </li>

                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile5" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Opcion 2
                                    </button>
                                  </li>
                                </ul>
                            </div>
                            {{--nav tittle arrow--}}
                            {{--nav content --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home5" role="tabpanel" aria-labelledby="pills-home-tab">
                                   <form method="POST" action="{{ route('tareas.store') }}" enctype="multipart/form-data" role="form">
                                      @csrf
                                      {{-- Tareas elementos --}}
                                      <input type="hidden" name="elementos" id="elementos" value="2">
                                      <input type="hidden" name="num_elementos" id="num_elementos" value="4">
                                      <input type="hidden" name="consultar" id="consultar" value="0">
                                      <input type="hidden" name="difundir" id="difundir" value="0">
                                      <input type="hidden" name="correctiva" id="correctiva" value="0">

                                      {{-- Calendario --}}
                                      <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                      <input type="hidden" name="title" id="title" value="VIII-01-04">
                                      <input type="hidden" name="color" id="color" value="#2367D9">
                                      <input type="hidden" name="url" id="url" value="#exampleModal">

                                      @include('modal-elementos.formulario1')
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile5" role="tabpanel" aria-labelledby="pills-profile-tab">
                                   <form method="POST" action="{{ route('tareas.store') }}" enctype="multipart/form-data" role="form">
                                      @csrf

                                      {{-- Tareas elementos --}}
                                      <input type="hidden" name="elementos" id="elementos" value="2">
                                      <input type="hidden" name="num_elementos" id="num_elementos" value="4">
                                      <input type="hidden" name="consultar" id="consultar" value="0">
                                      <input type="hidden" name="difundir" id="difundir" value="0">
                                      <input type="hidden" name="correctiva" id="correctiva" value="0">

                                      {{-- Calendario --}}
                                      <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                      <input type="hidden" name="title" id="title" value="VIII-01-04">
                                      <input type="hidden" name="url" id="url" value="#exampleModal">

                                      @include('modal-elementos.formulario2')
                                   </form>
                                </div>
                            </div>
                      </div>
                    </div>
                  </div>

                    <div class="accordion-item">
                    <h2 class="accordion-header" id="element2_5">
                      <button class="accordion-button btn-grid collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#element2_Five" aria-expanded="false" aria-controls="element2_Five">
                       VIII-01-05
                      </button>
                    </h2>
                    <div id="element2_Five" class="accordion-collapse collapse" aria-labelledby="element2_5" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                            <h5 class="text-center" style="font-size: 15px">Listado de distribución de documentación.</h5>
                            {{--nav tittle arrow--}}
                            <div class="d-flex justify-content-center">

                                <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home6" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Opcion 1
                                    </button>
                                  </li>

                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile6" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Opcion 2
                                    </button>
                                  </li>
                                </ul>
                            </div>
                            {{--nav tittle arrow--}}
                            {{--nav content --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home6" role="tabpanel" aria-labelledby="pills-home-tab">
                                   <form method="POST" action="{{ route('tareas.store') }}" enctype="multipart/form-data" role="form">
                                      @csrf
                                      {{-- Tareas elementos --}}
                                      <input type="hidden" name="elementos" id="elementos" value="2">
                                      <input type="hidden" name="num_elementos" id="num_elementos" value="5">
                                      <input type="hidden" name="consultar" id="consultar" value="0">
                                      <input type="hidden" name="difundir" id="difundir" value="0">
                                      <input type="hidden" name="correctiva" id="correctiva" value="0">

                                      {{-- Calendario --}}
                                      <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                      <input type="hidden" name="title" id="title" value="VIII-01-05">
                                      <input type="hidden" name="color" id="color" value="#2367D9">
                                      <input type="hidden" name="url" id="url" value="#exampleModal">

                                      @include('modal-elementos.formulario1')
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile6" role="tabpanel" aria-labelledby="pills-profile-tab">
                                   <form method="POST" action="{{ route('tareas.store') }}" enctype="multipart/form-data" role="form">
                                      @csrf

                                      {{-- Tareas elementos --}}
                                      <input type="hidden" name="elementos" id="elementos" value="2">
                                      <input type="hidden" name="num_elementos" id="num_elementos" value="5">
                                      <input type="hidden" name="consultar" id="consultar" value="0">
                                      <input type="hidden" name="difundir" id="difundir" value="0">
                                      <input type="hidden" name="correctiva" id="correctiva" value="0">

                                      {{-- Calendario --}}
                                      <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                      <input type="hidden" name="title" id="title" value="VIII-01-05">
                                      <input type="hidden" name="url" id="url" value="#exampleModal">

                                      @include('modal-elementos.formulario2')
                                   </form>
                                </div>
                            </div>
                      </div>
                    </div>
                  </div>

                </div>

            </div>
        </div>

      </div>

{{--      <div class="modal-footer">--}}
{{--        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--        <button type="button" class="btn btn-primary">Understood</button>--}}
{{--      </div>--}}

    </div>
  </div>
</div>

