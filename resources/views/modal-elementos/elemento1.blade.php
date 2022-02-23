@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection
@php
   $fecha = date("Y-m-d");
@endphp
<!-- Modal -->
<div class="modal fade" id="elemento1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-center" id="elemento1" style="font-size: 16px;">
            Comunicacion , participacion y consulta
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="row">
            <div class="col-12 ">

                <div class="accordion accordion-flush" id="element_1">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="element1">
                      <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse" data-bs-target="#element_1collapse" aria-expanded="true" aria-controls="element_1collapse">
                         V-01-01
                      </button>
                    </h2>
                    <div id="element_1collapse" class="accordion-collapse collapse show" aria-labelledby="element1" data-bs-parent="#element_1">
                      <div class="accordion-body">
                            <h5 class="text-center" style="font-size: 15px">Matriz de responsabilidades.</h5>
                            <form method="POST" action="{{ route('elemento.store') }}" enctype="multipart/form-data" role="form">
                                @csrf
                                {{-- Tareas elementos --}}
                                <input type="hidden" name="elemntos" id="elemntos" value="1">
                                <input type="hidden" name="consultar" id="consultar" value="0">
                                <input type="hidden" name="generar" id="generar" value="0">
                                <input type="hidden" name="actualizar" id="actualizar" value="0">
                                <input type="hidden" name="difundir" id="difundir" value="0">
                                <input type="hidden" name="correctiva" id="correctiva" value="0">

                                {{-- Calendario --}}
                                <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">
                                <input type="hidden" name="title" id="title" value="V-01-01">
                                <input type="hidden" name="color" id="color" value="#2367D9">
                                <input type="hidden" name="start" id="start" value="{{$fecha}}">

                            <button type="submit" class="btn btn-dark">Activar</button>
                            </form>
                            {{--nav tittle arrow--}}
                            <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                              <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#Acción-correctiva" type="button" role="tab" aria-controls="Acción-correctiva" aria-selected="true">
                                    Acción correctiva
                                </button>
                              </li>
                            </ul>
                            </div>
                             {{--nav tittle arrow--}}
                             {{--nav content --}}
                            <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="Acción-correctiva" role="tabpanel" aria-labelledby="pills-home-tab">
                                 <form method="POST" action="{{ route('correctiva.store') }}" enctype="multipart/form-data" role="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12 col-12 text-left">
                                          <label class="" for="inlineFormInputGroup">Fecha</label>
                                          <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">
                                                  <i class="fa fa-calendar" style="font-size: 150%;}"></i>
                                              </div>
                                            </div>
                                            <input type="date" class="form-control" name="fecha" id="fecha" value="{{$fecha}}">
                                          </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-12 text-left">
                                          <label class="" for="inlineFormInputGroup">Descripcion</label>
                                          <div class="input-group mb-2">
                                              <textarea name="descripcion" id="descripcion" cols="100" rows="5"></textarea>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                      <button class="mt-2 btn-sinestilo" type="submit">
                                          <div class="button_n">
                                              <div class="icon_n">
                                                  <i class="fa fa-floppy-o"></i>
                                              </div>
                                          </div>
                                      </button>
                                    </div>
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
