<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos del Evento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <div class="form-row">

                <div class="form-group col-12">
                  {{--<label for="">id</label>--}}
                  <input class="form-control" type="hidden" name="txtID" id="txtID">
                </div>

                <div class="form-group col-12">
                  <label for="">Fecha</label>
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
                    <label for="">Título</label>
                    <input class="form-control" type="text" name="txtTitle" id="txtTitle" >
                </div>

                <label for="">Description</label>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="3"></textarea>

                <div class="form-group col-12 mt-3">
                    <label for="">¿Esta tarea ya esta realizada?</label>

                    <select class="form-control" id="check" name="check">
                        <option value="0">Pendiente</option>
                        <option value="1">Realizado</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-success text-white" id="btnAgregar">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar
            </button>

            <button class="btn btn-warning text-dark" id="btnModificar">
                <i class="fa fa-retweet" aria-hidden="true"></i> Modificar
            </button>

            <button class="btn btn-danger text-white" id="btnBorrar">
                <i class="fa fa-trash" aria-hidden="true"></i> Borrar
            </button>
        </div>

      </div>
    </div>
</div>
