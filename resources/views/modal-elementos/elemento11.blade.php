@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento11" aria-hidden="true">
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

                <div class="accordion accordion-flush" id="accordionExample11">

                    {{-------Descarga---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse"
                                data-bs-target="#element11_one" aria-expanded="true"
                                aria-controls="element11_one">
                                Documentos de consulta
                            </button>
                        </h2>
                        <div id="element11_one" class="accordion-collapse collapse show"
                            aria-labelledby="element11_1" data-bs-parent="#accordionExample11">
                            <div class="accordion-body">

                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select"
                                        onChange="mostrar11(this.value);">
                                        <option value="">Documento*</option>
                                        <option value="xi">XI - Integridad mecánica y aseguramiento de la calidad</option>
                                    </select>
                                </form>

                                <div id="xi" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_xi.view')}}" target="_blank"><i
                                            class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_xi.print')}}"><i class="icon_config fa fa-download"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-------Formulario---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="element1">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse"
                                data-bs-target="#element11_tree" aria-expanded="true"
                                aria-controls="element11_tree">
                                Formatos del elemento
                            </button>
                        </h2>
                        <div id="element11_tree" class="accordion-collapse collapse "
                            aria-labelledby="element11_2" data-bs-parent="#accordionExample11">
                            <div class="accordion-body">

                                {{--nav content ejecutar/calendario --}}
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="ejecutar" role="tabpanel"
                                        aria-labelledby="ejecutar-tab">
                                        <form action="index.php" method="post">
                                            <select id="status" name="status" class="form-select"
                                                onChange="mostrars11(this.value);">
                                                <option value="">Seleccione Elemento</option>
                                                <option value="xi-01-01">xi-01-01 Matriz de mejores prácticas.</option>
                                            </select>
                                        </form>

                                        <div id="xi-01-01" style="display: none;">
                                            <a class="btn" href="{{route('index.xi_01_01')}}"
                                                style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                Ejecutar
                                            </a>

                                            <a class="btn text-dark"
                                                href="{{route('difundir_xi_01_01.index')}}"
                                                style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                Difundir
                                            </a>

                                            <a class="btn  " href="{{route('preventiva_xi_01_01.index')}}"
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
    @include('modal-elementos.formularios xi.script')
    </div>
  </div>
</div>

