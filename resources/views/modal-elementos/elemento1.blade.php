@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-center" id="elemento1" style="font-size: 16px;">
            Política
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
                        <div id="element7_one" class="accordion-collapse collapse show" aria-labelledby="element7_one" data-bs-parent="#accordionExample7">
                            <div class="accordion-body">

                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select" onChange="mostrar1(this.value);">
                                        <option value="">Documento*</option>
                                        <option value="I-01">I - Política Documentada</option>
                                        <option value="I">I-01 Procedimiento de elaboración y comunicación de la política.-9495</option>
                                    </select>
                                </form>

                                <div id="I-01" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_i_01.view')}}" target="_blank"><i class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_i_01.print')}}"><i class="icon_config fa fa-download" aria-hidden="true"></i></a>
                                </div>

                                <div id="I" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_sasisopa.view')}}" target="_blank"><i class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_sasisopa.print')}}"><i class="icon_config fa fa-download" aria-hidden="true"></i></a>
                                </div>


                            </div>
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
                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select" onChange="mostrars1(this.value);">
                                        <option value="">Servicio*</option>
                                        <option value="elementoi">I-01-01 Política documentada.</option>
                                    </select>
                                </form>

                                <div id="elementoi" class="text-center" style="display: none;">
                                    <a class="btn text-dark" href="{{route('pdf_i_01.view')}}" target="_blank" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important">
                                        Ejecutar
                                    </a>

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
        </div>
        @include('modal-elementos.formularios i.script')
      </div>
    </div>
  </div>
</div>
