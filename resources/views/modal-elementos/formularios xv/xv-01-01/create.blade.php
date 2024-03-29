<!-- Modal -->
<div class="modal fade" id="exampleModalXV" tabindex="-1" aria-labelledby="exampleModalXV" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXV">Crear plan y programa de auditoría</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.xv_01_01') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">
                            <div class="row">

                                <div class="form-group col-6 mt-3">
                                    <label>Tipo auditoria</label>
                                    <input name="tipo_auditoria" type="text" class="form-control" id="tipo_auditoria">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Contratista/Proveedor</label>
                                    <input name="contratista" type="text" class="form-control" id="contratista">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Fecha de inicio</label>
                                    <input name="start" type="date" class="form-control" id="start">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Fecha final</label>
                                    <input name="end" type="date" class="form-control" id="end">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Objetivo</label>
                                    <textarea class="form-control" id="objetivo" name="objetivo" rows="2"></textarea>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Alcance</label>
                                    <input name="alcance" type="text" class="form-control" id="alcance">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Fecha de programación</label>
                                    <input name="fecha_inicio" type="date" class="form-control" id="fecha_inicio">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Estatus</label>
                                    <select id="estatus" name="estatus" class="form-select">
                                        <option value="0" selected>Pendiente</option>
                                        <option value="1">Realizado</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 col-12 mt-3">
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
