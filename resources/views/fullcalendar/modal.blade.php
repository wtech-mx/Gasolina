<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius: 30px;">

        <div class="modal-body" style="border-radius: 30px!important;border: 2px solid #FFC300;background-color: #001d3d;">

            <div class="d-flex justify-content-between">

                <h5 class="modal-title mb-5 text-white" id="exampleModalLabel">Datos del Evento</h5>

                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close" style="background: transparent url({{asset('assets/img/icons/cancel.png') }}) center/1.5em auto no-repeat;">
                </button>

            </div>

            <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                      Diaria
                  </button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-tres" type="button" role="tab" aria-controls="pills-tres" aria-selected="false">
                      Temporalidad
                  </button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="form-row">

                        <div class="form-group col-12">
                          <input class="form-control" type="hidden" name="txtID" id="txtID">
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-6 mb-3">
                            <label class="text-white" for="">Fecha</label>
                            <input class="form-control" type="date" name="txtFecha" id="txtFecha">
                            </div>

                            <div class="form-group col-6 mb-3">
                                <label class="text-white" for="">Fecha Fin</label>
                                <input class="form-control" type="date" name="txtFechaEnd" id="txtFechaEnd">
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <input type="hidden" class="form-control" name="color" id="color">
                        </div>

                        <div class="form-group col-12" >
                            <input type="hidden" class="form-control" name="image" id="image">
                        </div>

                        <div class="form-group col-12" >
                            <input class="form-control" type="hidden" name="estatus" id="estatus" >
                        </div>

                        <div class="form-group col-12 mb-3">
                            <label class="text-white" for="">Título</label>
                            <input class="form-control" type="text" name="txtTitle" id="txtTitle" >
                        </div>

                        <label class="text-white" for="">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="3"></textarea>

                        <div class="form-group col-12 mt-3">
                            <label class="text-white" for="">¿Esta tarea ya esta realizada?</label>

                            <select class="form-control" id="check" name="check">
                                <option value="0">Pendiente</option>
                                <option value="1">Realizado</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around mt-5">
                        <button class="btn  " id="btnAgregar" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar
                        </button>

                        <button class="btn  text-dark " id="btnModificar" style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                            <i class="fa fa-retweet" aria-hidden="true"></i> Modificar
                        </button>

                        <button class="btn  " id="btnBorrar" style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                            <i class="fa fa-trash" aria-hidden="true"></i> Borrar
                        </button>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-tres" role="tabpanel" aria-labelledby="pills-tres-tab">
                    <form method="POST" action="{{ route('calendar.temp') }}" enctype="multipart/form-data" role="form">
                        @csrf

                        <input type="hidden" name="image" id="image" value="{{ asset('assets/img/icons/checked.png') }}">

                        <div class="row">

                            <div class="col-sm-6 col-12 text-left">
                                <label class="text-white" for="inlineFormInputGroup">Titulo</label>
                                    <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <div class="col-sm-6 col-12 text-left">
                                <label class="text-white" for="inlineFormInputGroup">Selecciona el dia</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar-plus-o" style="font-size: 150%;}"></i>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" name="start" id="start" value="{{$fecha}}">
                                </div>
                            </div>

                            <input type="hidden" class="form-control" name="end" id="end" value="{{$fecha}}">

                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-6 text-left">
                                <label class="text-white" for="inlineFormInputGroup">Elije a partir de que mes</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar-plus-o" style="font-size: 150%;}"></i>
                                    </div>
                                    </div>
                                    <select class="form-select" aria-label="Default select example" name="mes" id="mes">
                                        <option selected>Selecciona mes</option>
                                        <option value="01">Enero</option>
                                        <option value="02">Febrero</option>
                                        <option value="03">Marzo</option>
                                        <option value="04">Abril</option>
                                        <option value="05">Mayo</option>
                                        <option value="06">Junio</option>
                                        <option value="07">Julio</option>
                                        <option value="08">Agosto</option>
                                        <option value="09">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                </div>
                                </div>

                            <div class="col-sm-6 col-6 text-left">
                                <label class="text-white" for="inlineFormInputGroup">No Meses para repetir la actividad</label>
                                <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar-check-o" style="font-size: 150%;"></i>
                                    </div>
                                </div>
                                <input type="number" class="form-control" name="num_veces" id="num_veces" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-12 text-left">
                                <label class="text-white" for="inlineFormInputGroup">Descripcion</label>
                                <div class="input-group mb-2">
                                    <textarea name="descripcion" id="descripcion" cols="100" rows="5"></textarea>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="d-flex justify-content-center">
                            <button class="mt-2 btn-sinestilo" type="submit">
                                <div class="button_n">
                                    <div class="icon_n">
                                        <i class="fa fa-floppy-o"></i>
                                    </div>
                                </div>
                            </button>
                        </div> --}}

                        <div class="d-flex justify-content-around mt-5">
                            <button type="submit" class="btn  " style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar
                            </button>

                            {{-- <button class="btn  text-dark " id="btnModificar" style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                <i class="fa fa-retweet" aria-hidden="true"></i> Modificar
                            </button> --}}

                            <button aria-label="Close" class="btn  " style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                <i class="fa fa-trash" aria-hidden="true"></i> Borrar
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>



      </div>
    </div>
</div>
