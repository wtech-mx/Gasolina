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

                    {{-------Descarga---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" >
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse" data-bs-target="#element7_one" aria-expanded="true" aria-controls="element7_one">
                            Consultar
                            </button>
                        </h2>
                        <div id="element7_one" class="accordion-collapse collapse show" aria-labelledby="element7_1" data-bs-parent="#accordionExample7">
                            <div class="accordion-body">

                                <table class="table" id="table_id" >
                                    <thead class="text-white">
                                    <tr>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Reglas</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Revision</th>
                                        <th scope="col">Ultima fecha</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        <tr>
                                            <td>Regla</td>
                                            <td>I Política.</td>
                                            <td>03/07/2019</td>
                                            <td>00</td>
                                            <td>06/02/2020</td>
                                            <td>
                                                <a href="#" style="color: #ffffff;font-size: 16px;padding: 5px">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" style="color: #ffffff;font-size: 16px;padding: 5px">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Procedimientos y/o Actividades</td>
                                            <td>I-01 Procedimiento de elaboración y comunicación de la política.</td>
                                            <td>03/07/2019</td>
                                            <td>00</td>
                                            <td>06/02/2020</td>
                                            <td>
                                                <a href="#" style="color: #ffffff;font-size: 16px;padding: 5px">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" style="color: #ffffff;font-size: 16px;padding: 5px">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    {{-------Formulario---------}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="element1">
                            <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse" data-bs-target="#element7_tree" aria-expanded="true" aria-controls="element7_tree">
                                Actividades
                            </button>
                        </h2>
                        <div id="element7_tree" class="accordion-collapse collapse " aria-labelledby="element7_2" data-bs-parent="#accordionExample7">
                            <div class="accordion-body">
                                    <a class="btn text-dark" href="#" style="background-color:#001d3d;color:  #852ecc!important; border: 2px solid #852ecc!important">
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
        @include('modal-elementos.formularios ii.script')
      </div>
    </div>
  </div>
</div>
