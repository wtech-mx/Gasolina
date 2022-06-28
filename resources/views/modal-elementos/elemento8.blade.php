@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento8" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-center"  style="font-size: 16px;">
            Comunicacion , participacion y consulta
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="row">
            <div class="col-12 ">
                <div class="accordion accordion-flush" id="accordionExample8">

                    {{-------Descarga---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse"
                                data-bs-target="#element8_one" aria-expanded="true"
                                aria-controls="element8_one">
                                Documentos de consulta
                            </button>
                        </h2>
                        <div id="element8_one" class="accordion-collapse collapse show"
                            aria-labelledby="element8_1" data-bs-parent="#accordionExample8">
                            <div class="accordion-body">

                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select"
                                        onChange="mostrar8(this.value);">
                                        <option value="">Documento*</option>
                                        <option value="viii">VIII - Control de documentos y registros</option>
                                        <option value="viii-01">VIII-01 Procedimiento de control de documentos</option>
                                    </select>
                                </form>

                                <div id="viii" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_viii.view')}}" target="_blank"><i
                                            class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_viii.print')}}"><i class="icon_config fa fa-download"
                                            aria-hidden="true"></i></a>
                                </div>

                                <div id="viii-01" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_viii_01.view')}}" target="_blank"><i
                                            class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_viii_01.print')}}"><i
                                            class="icon_config fa fa-download" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-------Formulario---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="element1">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse"
                                data-bs-target="#element8_tree" aria-expanded="true"
                                aria-controls="element8_tree">
                                Formatos del elemento
                            </button>
                        </h2>
                        <div id="element8_tree" class="accordion-collapse collapse "
                            aria-labelledby="element8_2" data-bs-parent="#accordionExample8">
                            <div class="accordion-body">

                                {{--nav content ejecutar/calendario --}}
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="ejecutar" role="tabpanel"
                                        aria-labelledby="ejecutar-tab">
                                        <form action="index.php" method="post">
                                            <select id="status" name="status" class="form-select"
                                                onChange="mostrars8(this.value);">
                                                <option value="">Seleccione Elemento</option>
                                                <option value="VIII-01-01">VIII-01-01 Listado de documentación interna.</option>
                                                <option value="VIII-01-02">VIII-01-02 Listado de formatos, registros y bitácoras.</option>
                                                <option value="VIII-01-03">VIII-01-03 Lista de control de autorizaciones y permisos.</option>
                                                <option value="VIII-01-04">VIII-01-04 Listado de documentación externa.</option>
                                                <option value="VIII-01-05">VIII-01-05 Listado de distribución de documentación.</option>
                                            </select>
                                        </form>

                                        <div id="VIII-01-01" style="display: none;">

                                            <a class="btn" href="{{route('index.viii_01_01')}}"
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

                                        <div id="VIII-01-02" style="display: none;">

                                            <a class="btn" href="{{route('index.viii_01_02')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark" href="{{route('difundir_vi_01_03.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_vi_01_03.index')}}"
                                                style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                                Accion Correctiva
                                            </a>

                                        </div>
                                        <div id="VIII-01-03" style="display: none;">

                                            <a class="btn" href="{{route('index.viii_01_03')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark" href="{{route('difundir_vi_01_03.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_vi_01_03.index')}}"
                                                style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                                Accion Correctiva
                                            </a>
                                        </div>
                                        <div id="VIII-01-04" style="display: none;">
                                            <a class="btn" href="{{route('index.viii_01_04')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark" href="{{route('difundir_vi_01_03.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_vi_01_03.index')}}"
                                                style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                                Accion Correctiva
                                            </a>
                                        </div>
                                        <div id="VIII-01-05" style="display: none;">
                                            <a class="btn" href="{{route('index.viii_01_05')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark" href="{{route('difundir_vi_01_03.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_vi_01_03.index')}}"
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

{{--      <div class="modal-footer">--}}
{{--        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--        <button type="button" class="btn btn-primary">Understood</button>--}}
{{--      </div>--}}
    @include('modal-elementos.formularios viii.script')
    </div>
  </div>
</div>
