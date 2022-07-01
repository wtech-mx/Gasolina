<!-- Modal -->
<div class="modal fade" id="exampleModalXIV" tabindex="-1" aria-labelledby="exampleModalXIV" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXIV">Crear XIV-01-02</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.xiv_01_06') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">

                    <div class="form-group col-6 mt-3">
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="nombre">
                    </div>

                    <div class="form-group col-6 mt-3">
                        <label>FECHA-HORA DE INCIDENCIA</label>
                        <input name="fecha" type="date" class="form-control" id="fecha">
                    </div>

                    <div class="form-group col-6 mt-3">
                        <label>INCIDENCIA/VISITA</label>
                        <input name="incidencia" type="text" class="form-control" id="incidencia">
                    </div>

                    <div class="form-group col-6 mt-3">
                        <label>DEPENDENCIA/LABORATORIO</label>
                        <input name="dependencia" type="text" class="form-control" id="dependencia">
                    </div>

                    <div class="form-group col-6 mt-3">
                        <label>OBSERVACIONES</label>
                        <input name="observaciones" type="text" class="form-control" id="observaciones">
                    </div>

                    <div class="col-sm-12 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label class="form-label label-custom-yellow">PDF</label>
                            <input type="file" class="custom-file-input input-group-text" id="pdf"
                                name="pdf">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
