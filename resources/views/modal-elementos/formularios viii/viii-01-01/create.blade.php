<!-- Modal -->
<div class="modal fade" id="exampleModalViii01" tabindex="-1" aria-labelledby="exampleModalViii01" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalViii01">Crear VIII-01-01</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.viii_01_01') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>Tipo</label>
                                    <input name="tipo" type="text" class="form-control" id="tipo"
                                        placeholder="tipo">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Reglas</label>
                                    <input name="reglas" type="text" class="form-control" id="reglas"
                                        placeholder="reglas">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Fecha</label>
                                    <input name="fecha" type="date" class="form-control" id="fecha"
                                        placeholder="fecha">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Aprobación</label>
                                    <input name="aprobacion" type="date" class="form-control" id="aprobacion"
                                        placeholder="aprobacion">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Modificación</label>
                                    <input name="notificacion" type="date" class="form-control" id="notificacion"
                                        placeholder="notificacion">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Revision</label>
                                    <input name="revision" type="number" class="form-control" id="revision"
                                        placeholder="revision">
                                </div>

                                <div class="col-sm-12 col-12">
                                    <div class="form-group mb-3 position-relative">
                                        <label class="form-label label-custom-yellow">PDF</label>
                                        <input type="file" class="custom-file-input input-group-text" id="pdf"
                                            name="pdf">
                                    </div>
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
