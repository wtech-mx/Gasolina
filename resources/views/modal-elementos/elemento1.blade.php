@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

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

                <div class="accordion accordion-flush" id="accordionExample7">

                    {{-------Descarga---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" >
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse" data-bs-target="#element7_one" aria-expanded="true" aria-controls="element7_one">
                                Documentos de consulta
                            </button>
                        </h2>
                        <div id="element7_one" class="accordion-collapse collapse show" aria-labelledby="element7_one" data-bs-parent="#accordionExample7">
                            <div class="accordion-body">



                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select" onChange="mostrar1(this.value);">
                                        <option value="">Servicio*</option>
                                        <option value="002-SASISOPA">002-SASISOPA</option>
                                        <option value="003-SGM">003-SGM</option>
                                    </select>
                                </form>

                                <div id="002-SASISOPA" style="display: none;">
                                    <iframe src="{{route('pdf_sasisopa.print')}}" style="width:100%; height:700px;" frameborder="0" ></iframe>
                                </div>

                                <div id="003-SGM" style="display: none;">
                                    <iframe src="{{route('pdf_sasisopa.print')}}" style="width:100%; height:700px;" frameborder="0" ></iframe>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-------Formulario---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="element1">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse" data-bs-target="#element7_tree" aria-expanded="true" aria-controls="element7_tree">
                                Formatos del elemento
                            </button>
                        </h2>
                        <div id="element7_tree" class="accordion-collapse collapse " aria-labelledby="element7_2" data-bs-parent="#accordionExample7">
                            <div class="accordion-body">
                                <a class="btn" href="{{route('difundir_i_01_01.index')}}" style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important">
                                    Difundir
                                </a>

                                <a class="btn text-dark" href="{{route('preventiva_i_01_01.index')}}" style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                    Accion Correctiva
                                </a>
                            </div>
                        </div>
                    </div>

                  </div>

            </div>
        </div>
        @include('modal-elementos.formularios i.script')
      </div>
    </div>
  </div>
</div>
