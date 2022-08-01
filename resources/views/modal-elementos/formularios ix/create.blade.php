<!-- Modal -->
<div class="modal fade" id="exampleModalIX" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear IX-01-01</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.ix_01_01') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>mejores_practicas</label>
                                    <input name="mejores_practicas" type="text" class="form-control" id="mejores_practicas"
                                        placeholder="mejores_practicas">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>marco_normativo</label>
                                    <input name="marco_normativo" type="text" class="form-control" id="marco_normativo"
                                        placeholder="marco_normativo">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>dependencia</label>
                                    <input name="dependencia" type="text" class="form-control" id="dependencia" placeholder="dependencia">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>tipo</label>
                                    <input name="tipo" type="text" class="form-control" id="tipo" placeholder="tipo">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>fecha</label>
                                    <input name="fecha" type="date" class="form-control" id="fecha" placeholder="fecha">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>reglas</label>
                                    <input name="reglas" type="text" class="form-control" id="reglas" placeholder="reglas">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>mecanismos</label>
                                    <input name="mecanismos" type="text" class="form-control" id="mecanismos" placeholder="mecanismos">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>¿Válido para la estación?</label>
                                    <input class="form-check-input" type="radio" name="configuracion" id="configuracion" value="1">
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
