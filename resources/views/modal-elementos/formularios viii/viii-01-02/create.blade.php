<!-- Modal -->
<div class="modal fade" id="exampleModalViii02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear VIII-01-02</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.viii_01_02') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>Nombre</label>
                                    <input name="nombre" type="text" class="form-control" id="nombre"
                                        placeholder="nombre">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Fecha</label>
                                    <input name="fecha" type="date" class="form-control" id="fecha">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Modificación</label>
                                    <input name="modificacion" type="text" class="form-control" id="modificacion"
                                        placeholder="modificacion">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Estatus</label>
                                    <select name="estatus" id="estatus" class="form-control">
                                        <option value="Alta">Alta</option>
                                        <option value="Baja">Baja</option>
                                    </select>
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
