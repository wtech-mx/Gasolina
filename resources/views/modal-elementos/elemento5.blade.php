@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-center" id="elemento1" style="font-size: 16px;">
            V-01-01 Matriz de responsabilidades.
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
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse" data-bs-target="#element5_one" aria-expanded="true" aria-controls="element5_one">
                                Documentos de consulta
                            </button>
                        </h2>
                        <div id="element5_one" class="accordion-collapse collapse show" aria-labelledby="element5_one" data-bs-parent="#accordionExample5">
                            <div class="accordion-body">
                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select" onChange="mostrar5(this.value);">
                                        <option value="">Documento*</option>
                                        <option value="V">V - Funciones, responsabilidaes y autoridad</option>
                                        <option value="V-01">V-01 Procedimiento de funciones y responsabilidades</option>
                                    </select>
                                </form>

                                <div id="V" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_v.view')}}" target="_blank"><i class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_v.print')}}"><i class="icon_config fa fa-download" aria-hidden="true"></i></a>
                                </div>

                                <div id="V-01" class="text-center" style="display: none;">
                                    <a href="{{route('pdf_v_01.view')}}" target="_blank"><i class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_v_01.print')}}"><i class="icon_config fa fa-download" aria-hidden="true"></i></a>
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
                                    <select id="status" name="status" class="form-select" onChange="mostrars5(this.value);">
                                        <option value="">Servicio*</option>
                                        <option value="elementov">V-01-01 Matriz de responsabilidades.</option>
                                    </select>
                                </form>

                                <div id="elementov" class="text-center" style="display: none;">

                                    <a class="btn text-dark" href="{{route('pdf_otorgamiento_v.view')}}" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important" target="_blank">
                                        Otorgamiento
                                    </a>

                                    <a class="btn text-dark" href="{{route('pdf_generar_v.view')}}" style="background-color:#001d3d;color:  #852ecc!important; border: 2px solid #852ecc!important" target="_blank">
                                        Generar
                                    </a>

                                    <a class="btn text-dark" href="{{route('index.actualizar')}}" style="background-color:#001d3d;color:  #2e9fcc!important; border: 2px solid #2e9fcc!important">
                                        Actializar
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
        @include('modal-elementos.formularios v.script')
      </div>
    </div>
  </div>
</div>
