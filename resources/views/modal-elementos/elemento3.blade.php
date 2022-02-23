@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-center" id="elemento3" style="font-size: 16px;">
           Politica
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="row">
            <div class="col-12 ">

                <div class="accordion accordion-flush" id="element_1">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="politica">
                      <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse" data-bs-target="#element_1collapse" aria-expanded="true" aria-controls="element_1collapse">
                         I-01-01
                      </button>
                    </h2>
                    <div id="element_1collapse" class="accordion-collapse collapse show" aria-labelledby="politica" data-bs-parent="#element_1">
                      <div class="accordion-body">
                            <h5 class="text-center" style="font-size: 15px">Política documentada.</h5>
                            {{--nav tittle arrow--}}
                            <div class="d-flex justify-content-center">

                                <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home7" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Opcion 1
                                    </button>
                                  </li>

                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile7" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Opcion 2
                                    </button>
                                  </li>
                                </ul>
                            </div>
                            {{--nav tittle arrow--}}
                            {{--nav content --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home7" role="tabpanel" aria-labelledby="pills-home-tab">
                                   <form method="POST" action="{{ route('tareas.store') }}" enctype="multipart/form-data" role="form">
                                      @csrf
                                      {{-- Tareas elementos --}}
                                      <input type="hidden" name="elementos" id="elementos" value="3">
                                      <input type="hidden" name="consultar" id="consultar" value="0">
                                      <input type="hidden" name="generar" id="generar" value="0">
                                      <input type="hidden" name="difundir" id="difundir" value="0">
                                      <input type="hidden" name="correctiva" id="correctiva" value="0">

                                      {{-- Calendario --}}
                                      <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                      <input type="hidden" name="title" id="title" value="I-01-01">
                                      <input type="hidden" name="color" id="color" value="#2367D9">
                                      <input type="hidden" name="url" id="url" value="#exampleModal">

                                      @include('modal-elementos.formulario1')
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile7" role="tabpanel" aria-labelledby="pills-profile-tab">
                                   <form method="POST" action="{{ route('tareas.store') }}" enctype="multipart/form-data" role="form">
                                      @csrf

                                      {{-- Tareas elementos --}}
                                      <input type="hidden" name="elementos" id="elementos" value="3">
                                      <input type="hidden" name="consultar" id="consultar" value="0">
                                      <input type="hidden" name="generar" id="generar" value="0">
                                      <input type="hidden" name="difundir" id="difundir" value="0">
                                      <input type="hidden" name="correctiva" id="correctiva" value="0">

                                      {{-- Calendario --}}
                                      <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                      <input type="hidden" name="title" id="title" value="I-01-01">
                                      <input type="hidden" name="url" id="url" value="#exampleModal">

                                      @include('modal-elementos.formulario2')
                                   </form>
                                </div>
                            </div>
                            {{--nav content --}}
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
