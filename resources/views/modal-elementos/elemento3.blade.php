@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="width: 200%">

      <div class="modal-header">
        <h5 class="modal-title text-center" id="elemento3" style="font-size: 16px;">
            Requisitos legales
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
                        <div id="element7_one" class="accordion-collapse collapse show" aria-labelledby="element7_1" data-bs-parent="#accordionExample7">
                            <div class="accordion-body">
                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select" onChange="mostrar3(this.value);">
                                        <option value="">Documento*</option>
                                        <option value="iii-01">III - Requisitos Legales</option>
                                        <option value="iii">III-01 Procedimiento de identificación y evaluación de requisitos legales.-285</option>
                                    </select>
                                </form>

                                <div id="iii-01" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_iii_01.view')}}" target="_blank"><i class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_iii_01.print')}}"><i class="fa fa-download" aria-hidden="true"></i></a>
                                </div>

                                <div id="iii" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_iii.view')}}" target="_blank"><i class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_iii.print')}}"><i class="fa fa-download" aria-hidden="true"></i></a>
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
                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select" onChange="mostrars3(this.value);">
                                        <option value="">Servicio*</option>
                                        <option value="elementoiii">III-01-01 Matriz de requisitos legales.</option>
                                    </select>
                                </form>

                                <div id="elementoiii" class="text-center" style="display: none;">
                                    <a class="btn text-dark" href="{{route('ejecutar_iii_01_01.index')}}" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important">
                                        Ejecutar
                                    </a>

                                    <a class="btn text-dark" href="{{route('difundir_iii_01_01.index')}}" style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                        Difundir
                                    </a>

                                    <a class="btn  " href="{{route('preventiva_iii_01_01.index')}}" style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                        Accion Correctiva
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        @include('modal-elementos.formularios iii.script')
      </div>

{{--      <div class="modal-footer">--}}
{{--        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--        <button type="button" class="btn btn-primary">Understood</button>--}}
{{--      </div>--}}

    </div>
  </div>
</div>
