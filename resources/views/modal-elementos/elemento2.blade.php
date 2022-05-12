@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-center" id="elemento1" style="font-size: 16px;">
            Comunicacion , participacion y consulta
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
                                        <th scope="col">Normas</th>
                                        <th scope="col">Marco</th>
                                        <th scope="col">Descrip.</th>
                                        <th scope="col">Ambito</th>
                                        <th scope="col">Mecanismos Cum.</th>
                                        <th scope="col">Mecanismos Esp.</th>
                                        <th scope="col">Perio.</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        <tr>
                                            <td>RES/811/2015</td>
                                            <td>4. Obligaciones del Permisionario</td>
                                            <td>4.5. El Permisionario debe elaborar los documentos...</td>
                                            <td>SGM</td>
                                            <td>I Política.</td>
                                            <td>Manual del Sistema..</td>
                                            <td>1 año</td>
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
                                            <td>Nom-009-STPS-2011</td>
                                            <td>5. Obligaciones del patrón:</td>
                                            <td>5.1 Contar con un análisis de las condiciones...</td>
                                            <td>Seguridad.</td>
                                            <td>II Identificación de peligros..</td>
                                            <td>1 Procedimiento para la identificación..</td>
                                            <td>1 año</td>
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
                                            <td>RES/811/2015</td>
                                            <td>2. Sistema de Gestión de..</td>
                                            <td>4.3. El SGM deberá contener la organización..</td>
                                            <td>SGM</td>
                                            <td>V Funciones, responsabilidades..</td>
                                            <td>E05-P01. Procedimiento de funciones..</td>
                                            <td>1 año</td>
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
                                <form action="index.php" method="post">
                                    <select id="status" name="status" class="form-select" onChange="mostrar2(this.value);">
                                        <option value="">Servicio*</option>
                                        <option value="II-01-01">II-01-01</option>
                                        <option value="II-02-01">II-02-01</option>
                                    </select>
                                </form>
                                <div id="II-01-01" style="display: none;">
                                    <a class="btn text-dark" href="#" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important">
                                        Evaluar
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
                                        Consultar
                                    </a>

                                    <a class="btn text-dark" href="#" style="background-color:#001d3d;color:  #2e9fcc!important; border: 2px solid #2e9fcc!important">
                                        Generar Alta
                                    </a>

                                    <a class="btn text-dark" href="#" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important">
                                        Evaluar
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
