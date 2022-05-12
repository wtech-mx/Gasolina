@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="width: 200%">

      <div class="modal-header">
        <h5 class="modal-title text-center"  style="font-size: 16px;">
            IV-01-01 Matriz de objetivos metas e indicadores.
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="row">
            <div class="col-12 ">

                <div class="accordion accordion-flush" id="accordionExample7">

                    {{-------Documentos de consulta---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" >
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse" data-bs-target="#element7_one" aria-expanded="true" aria-controls="element7_one">
                            Documentos de consulta
                            </button>
                        </h2>
                        <div id="element7_one" class="accordion-collapse collapse show mt-3" aria-labelledby="element7_1" data-bs-parent="#accordionExample7">
                            @include('modal-elementos.formularios iv.select')
                        </div>
                    </div>


                    {{-------Formatos del elemento---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="element1">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse" data-bs-target="#element7_tree" aria-expanded="true" aria-controls="element7_tree">
                                Formatos del elemento
                            </button>
                        </h2>
                        <div id="element7_tree" class="accordion-collapse collapse " aria-labelledby="element7_2" data-bs-parent="#accordionExample7">
                            <div class="accordion-body">
                                    <a class="btn text-dark" href="{{route('difundir_iv_01_01.index')}}" style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                        Difundir
                                    </a>

                                    <a class="btn  " href="{{route('preventiva_iv_01_01.index')}}" style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                        Accion Correctiva
                                    </a>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        @include('modal-elementos.formularios iv.script')
      </div>

{{--      <div class="modal-footer">--}}
{{--        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--        <button type="button" class="btn btn-primary">Understood</button>--}}
{{--      </div>--}}

    </div>
  </div>
</div>
