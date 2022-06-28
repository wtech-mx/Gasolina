<!-- Modal -->
<div class="modal fade" id="exampleModalViii04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear VIII-01-04</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.viii_01_04') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>nombre</label>
                                    <input name="nombre" type="text" class="form-control" id="nombre"
                                        placeholder="nombre">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>area</label>
                                    <input name="area" type="text" class="form-control" id="area"
                                        placeholder="area">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>descripcion</label>
                                    <input name="descripcion" type="text" class="form-control" id="descripcion" placeholder="descripcion">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>revision</label>
                                    <input name="revision" type="text" class="form-control" id="revision" placeholder="revision">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>fecha</label>
                                    <input name="fecha" type="date" class="form-control" id="fecha" placeholder="fecha">
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
