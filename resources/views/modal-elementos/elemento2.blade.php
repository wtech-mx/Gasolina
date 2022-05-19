@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-center" id="elemento1" style="font-size: 16px;">
            Identificacion de peligros y aspectos ambientales
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
                        <div id="element7_one" class="accordion-collapse collapse show" aria-labelledby="element7_1" data-bs-parent="#accordionExample7">
                            <div class="accordion-body">
                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select" onChange="mostrar2(this.value);">
                                        <option value="">Servicio*</option>
                                        <option value="ii-SASISOPA">002-SASISOPA</option>
                                        <option value="ii-SGM">003-SGM</option>
                                    </select>
                                </form>

                                <div id="ii-SASISOPA" style="display: none;">
                                    <a href="{{route('pdf_ii.view')}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_sasisopa.print')}}"><i class="fa fa-download" aria-hidden="true"></i></a>
                                </div>

                                <div id="ii-SGM" style="display: none;">
                                    <a href="{{route('pdf_sasisopa.view')}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('pdf_sasisopa.print')}}"><i class="fa fa-download" aria-hidden="true"></i></a>
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
                                    <select id="status" name="status" class="form-select" onChange="mostrar2(this.value);">
                                        <option value="">Servicio*</option>
                                        <option value="II-01-01">II-01-01 Matriz para la identificación de peligros y análisis de riesgos.</option>
                                        <option value="II-02-01">II-02-01 Matriz de aspectos e impactos ambientales.</option>
                                    </select>
                                </form>
                                <div id="II-01-01" style="display: none;">
                                    <a class="btn text-dark" href="#" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important">
                                        Ejecutar
                                    </a>

                                    <a class="btn" href="{{route('difundir_i_01_01.index')}}" style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important">
                                        Difundir
                                    </a>

                                    <a class="btn text-dark" href="{{route('preventiva_i_01_01.index')}}" style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                        Accion Correctiva
                                    </a>
                                </div>
                                <div id="II-02-01" style="display: none;">
                                    <a class="btn text-dark" href="{{route('index.consulta')}}" style="background-color:#001d3d;color:  #852ecc!important; border: 2px solid #852ecc!important">
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
        @include('modal-elementos.formularios ii.script')
      </div>
    </div>
  </div>
</div>
