@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento15" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento15" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-center"  style="font-size: 16px;">
            Auditorías
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="row">
            <div class="col-12 ">

                <div class="accordion accordion-flush" id="accordionExample15">

                    {{-------Descarga---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse"
                                data-bs-target="#element15_one" aria-expanded="true"
                                aria-controls="element15_one">
                                Documentos de consulta
                            </button>
                        </h2>
                        <div id="element15_one" class="accordion-collapse collapse show"
                            aria-labelledby="element15_1" data-bs-parent="#accordionExample15">
                            <div class="accordion-body">

                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select"
                                        onChange="mostrar15(this.value);">
                                        <option value="">Documento*</option>
                                        <option value="xv">XV Auditorías</option>
                                        <option value="xv-01">XV-01 Procediemiento de auditoría interna</option>
                                    </select>
                                </form>

                                <div id="xv" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_xv.view')}}" target="_blank"><i
                                            class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_xv.print')}}"><i class="icon_config fa fa-download"
                                            aria-hidden="true"></i></a>
                                </div>

                                <div id="xv-01" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_xv_01.view')}}" target="_blank"><i
                                            class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_xv_01.print')}}"><i class="icon_config fa fa-download"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-------Formulario---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="element1">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse"
                                data-bs-target="#element15_tree" aria-expanded="true"
                                aria-controls="element15_tree">
                                Formatos del elemento
                            </button>
                        </h2>
                        <div id="element15_tree" class="accordion-collapse collapse "
                            aria-labelledby="element15_2" data-bs-parent="#accordionExample15">
                            <div class="accordion-body">

                                {{--nav content ejecutar/calendario --}}
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="ejecutar" role="tabpanel"
                                        aria-labelledby="ejecutar-tab">
                                        <form action="index.php" method="post">
                                            <select id="status" name="status" class="form-select"
                                                onChange="mostrars15(this.value);">
                                                <option value="">Seleccione Elemento</option>
                                                <option value="xv-01-01">XV Plan y programa de auditoria</option>
                                                <option value="xv-01-02">XV Plan y programa de auditoria externa</option>
                                            </select>
                                        </form>

                                        <div id="xv-01-01" style="display: none;">
                                            <a class="btn" href="{{route('index.xv_01_01')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark"
                                                href="{{route('difundir_xv_01_01.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_xv_01_01.index')}}"
                                                style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                                Accion Correctiva
                                            </a>
                                        </div>

                                        <div id="xv-01-02" style="display: none;">
                                            <a class="btn" href="{{route('index.xv_01_02')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark"
                                                href="{{route('difundir_xv_01_02.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_xv_01_02.index')}}"
                                                style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                                Accion Correctiva
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{--nav content ejecutar/calendario --}}

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

      </div>

      @include('modal-elementos.formularios xv.script')

    </div>
  </div>
</div>
