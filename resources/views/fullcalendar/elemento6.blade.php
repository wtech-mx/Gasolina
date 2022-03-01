<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius: 30px;">

        <div class="modal-body" style="border-radius: 30px!important;border: 2px solid #FFC300;background-color: #001d3d;">

        <div class="d-flex justify-content-between">

            <h5 class="modal-title mb-5 text-white" id="exampleModalLabel">Datos del Evento 06</h5>

             <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close" style="background: transparent url({{asset('assets/img/icons/cancel.png') }}) center/1.5em auto no-repeat;">
             </button>

        </div>

            <div class="form-row">

                <div class="form-group col-12">
                  <input class="form-control" type="hidden" name="txtID" id="txtID">
                </div>

                <div class="form-group col-12">
                  <label class="text-white" for="">Fecha</label>
                  <input class="form-control" type="date" name="txtFecha" id="txtFecha">
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

                <label class="text-white" for="">Description</label>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="3"></textarea>

                <div class="form-group col-12 mt-3">
                    <label class="text-white" for="">¿Esta tarea ya esta realizada?</label>

                    {{-- <select class="form-control" id="check" name="check">
                        <option value="0">Pendientesssss</option>
                        <option value="1">Realizado</option>
                    </select> --}}
                    <br><br>
                  <a href="{{ route('ejecutar.index') }}"><button type="button" class="btn btn-outline-info">Ejecutar</button></a>
                  <a href=""><button type="button" class="btn btn-outline-secondary">Difundir</button></a>
                  <a href=""><button type="button" class="btn btn-outline-warning">Correctiva</button></a>
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



      </div>
    </div>
</div>
