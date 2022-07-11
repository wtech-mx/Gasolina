@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento14" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento14" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-center"  style="font-size: 16px;">
           Seguridad de contratistas
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="row">
            <div class="col-14 ">

                <div class="accordion accordion-flush" id="accordionExample14">

                    {{-------Descarga---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse"
                                data-bs-target="#element14_one" aria-expanded="true"
                                aria-controls="element14_one">
                                Documentos de consulta
                            </button>
                        </h2>
                        <div id="element14_one" class="accordion-collapse collapse show"
                            aria-labelledby="element14_1" data-bs-parent="#accordionExample14">
                            <div class="accordion-body">

                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select"
                                        onChange="mostrar14(this.value);">
                                        <option value="">Documento*</option>
                                        <option value="xiv">XIV - Monitoreo, verificación y evaluación</option>
                                        <option value="xiv-02">XIV-01 Procedimiento de verificación y calibración de los equipos</option>
                                        <option value="xiv-03">XIV-02 Procedimiento para el manejo de no conformidades, acciones preventivas y correctivas del Sistema de Administración</option>
                                    </select>
                                </form>

                                <div id="xiv" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_xiv.view')}}" target="_blank"><i
                                            class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_xiv.print')}}"><i class="icon_config fa fa-download"
                                            aria-hidden="true"></i></a>
                                </div>

                                <div id="xiv-02" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_xiv_02.view')}}" target="_blank"><i
                                            class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_xiv_02.print')}}"><i class="icon_config fa fa-download"
                                            aria-hidden="true"></i></a>
                                </div>

                                <div id="xiv-03" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_xiv_03.view')}}" target="_blank"><i
                                            class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_xiv_03.print')}}"><i class="icon_config fa fa-download"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-------Formulario---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="element1">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse"
                                data-bs-target="#element14_tree" aria-expanded="true"
                                aria-controls="element14_tree">
                                Formatos del elemento
                            </button>
                        </h2>
                        <div id="element14_tree" class="accordion-collapse collapse "
                            aria-labelledby="element14_2" data-bs-parent="#accordionExample14">
                            <div class="accordion-body">

                                {{--nav content ejecutar/calendario --}}
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="ejecutar" role="tabpanel"
                                        aria-labelledby="ejecutar-tab">
                                        <form action="index.php" method="post">
                                            <select id="status" name="status" class="form-select"
                                                onChange="mostrars14(this.value);">
                                                <option value="">Seleccione Elemento</option>
                                                <option value="xiv-01-01">XIV-01-01 Matriz de calibración y monitoreo de dispensarios.</option>
                                                <option value="xiv-01-02">XIV-01-02 Matriz de calibración y monitoreo de Tanque.</option>
                                                {{-- <option value="xiv-01-03">XIV-01-03 Matriz de calibración y monitoreo de Jarra de Monitoreo.</option>
                                                <option value="xiv-01-04">XIV-01-04 Matriz de calibración y monitoreo de Regleta de Medicion.</option>
                                                <option value="xiv-01-05">XIV-02-01 Matriz de alta y seguimiento de acción preventiva o correctiva.</option> --}}
                                                <option value="xiv-01-06">XIV-03-01 Incidencias en operaciones</option>
                                            </select>
                                        </form>

                                        <div id="xiv-01-01" style="display: none;">
                                            <a class="btn" href="{{route('index.ix_01_01')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark"
                                                href="{{route('difundir_vii_01_01.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_vii_01_01.index')}}"
                                                style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                                Accion Correctiva
                                            </a>
                                        </div>

                                        <div id="xiv-01-02" style="display: none;">
                                            <a class="btn" href="{{route('index.xiv_01_02')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark"
                                                href="{{route('difundir_vii_01_01.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_vii_01_01.index')}}"
                                                style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                                Accion Correctiva
                                            </a>
                                        </div>

                                        <div id="xiv-01-03" style="display: none;">
                                            <a class="btn" href="{{route('index.xiv_01_03')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark"
                                                href="{{route('difundir_vii_01_01.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_vii_01_01.index')}}"
                                                style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                                Accion Correctiva
                                            </a>
                                        </div>

                                        <div id="xiv-01-06" style="display: none;">
                                            <a class="btn" href="{{route('index.xiv_01_06')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark"
                                                href="{{route('difundir_vii_01_01.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_vii_01_01.index')}}"
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

    @include('modal-elementos.formularios xiv.script')
    </div>
  </div>
</div>

