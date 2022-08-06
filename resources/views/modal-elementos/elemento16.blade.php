@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento16" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento16" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-center"  style="font-size: 16px;">
            Investigación de incidentes y accidentes
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="row">
            <div class="col-12 ">

                <div class="accordion accordion-flush" id="accordionExample161">

                    {{-------Descarga---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse"
                                data-bs-target="#element16_one" aria-expanded="true"
                                aria-controls="element16_one">
                                Documentos de consulta
                            </button>
                        </h2>
                        <div id="element16_one" class="accordion-collapse collapse show"
                            aria-labelledby="element16_1" data-bs-parent="#accordionExample161">
                            <div class="accordion-body">

                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select"
                                        onChange="mostrar16(this.value);">
                                        <option value="">Documento*</option>
                                        <option value="xvi">XVI Investigación de incidentes y accidentes</option>
                                        <option value="xvi-01">XVI-01 Procedimiento de registro e investigación de accidentes</option>
                                    </select>
                                </form>

                                <div id="xvi" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_xvi.view')}}" target="_blank"><i
                                            class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_xvi.print')}}"><i class="icon_config fa fa-download"
                                            aria-hidden="true"></i></a>
                                </div>

                                <div id="xvi-01" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_xvi_01.view')}}" target="_blank"><i
                                            class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_xvi_01.print')}}"><i class="icon_config fa fa-download"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-------Formulario---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="element1">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse"
                                data-bs-target="#element16_tree" aria-expanded="true"
                                aria-controls="element16_tree">
                                Formatos del elemento
                            </button>
                        </h2>
                        <div id="element16_tree" class="accordion-collapse collapse "
                            aria-labelledby="element16_2" data-bs-parent="#accordionExample161">
                            <div class="accordion-body">

                                {{--nav content ejecutar/calendario --}}
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="ejecutar" role="tabpanel"
                                        aria-labelledby="ejecutar-tab">
                                        <form action="index.php" method="post">
                                            <select id="status" name="status" class="form-select"
                                                onChange="mostrars16(this.value);">
                                                <option value="">Seleccione Elemento</option>
                                                <option value="xvi-01-01">XVI-01-01 Matriz para la investigación de accidentes e incidentes.</option>
                                                <option value="xvi-01-02">XVI-02-02 Reporte de Acto y Condición Insegura.</option>
                                            </select>
                                        </form>

                                        <div id="xvi-01-01" style="display: none;">
                                            <a class="btn" href="{{route('index.xvi_01_01')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark"
                                                href="{{route('difundir_xvi_01_01.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_xvi_01_01.index')}}"
                                                style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                                Accion Correctiva
                                            </a>
                                        </div>

                                        <div id="xvi-01-02" style="display: none;">
                                            <a class="btn" href="{{route('index.xvi_01_02')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark"
                                                href="{{route('difundir_xvi_01_02.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_xvi_01_02.index')}}"
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

      @include('modal-elementos.formularios xvi.script')

    </div>
  </div>
</div>

