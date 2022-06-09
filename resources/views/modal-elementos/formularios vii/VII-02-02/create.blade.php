<!-- Modal -->
<div class="modal fade" id="exampleModalVii02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear VII-02-02</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.vii_02_02') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-6 mt-3">
                            <label>Fecha inicial</label>
                            <input name="fecha" type="date" class="form-control" id="fecha" placeholder="fecha">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Lugar</label>
                            <input name="lugar" type="text" class="form-control" id="lugar" placeholder="lugar">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Situación Observada</label>
                            <input name="observada" type="text" class="form-control" id="observada"
                                placeholder="observada">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Tipo</label>
                            <input name="tipo" type="text" class="form-control" id="tipo" placeholder="tipo">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Descripción</label>
                            <textarea name="descripcion" class="form-control" id="descripcion" cols="2" rows="2"
                                placeholder="Descripcion"></textarea>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label for="nombre">Empleado</label>
                            <select name="id_empleado" class="form-control" id="id_empleado">
                                    <option value="">Nombre usuario</option>
                                    @foreach ($users as $item)
                                        <option value="{{$item->id}}">{{$item->name}}{{ $item->apellido}}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Contratista</label>
                            <input name="contratista" type="text" class="form-control" id="contratista" placeholder="contratista">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Visitante</label>
                            <input name="visitante" type="text" class="form-control" id="visitante" placeholder="visitante">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Reportado por</label>
                            <input name="reportado" type="text" class="form-control" id="reportado" placeholder="reportado">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Observaciones</label>
                            <textarea name="observacion" class="form-control" id="observacion" cols="2" rows="2"
                                placeholder="observacion"></textarea>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Responsable de seguimiento</label>
                            <input name="responsable" type="text" class="form-control" id="responsable" placeholder="responsable">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Estatus</label>
                            <input name="estatus" type="text" class="form-control" id="estatus" placeholder="estatus">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Seguimiento</label>
                            <input name="seguimiento" type="text" class="form-control" id="seguimiento" placeholder="seguimiento">
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">PDF</label>
                                <input type="file" class="custom-file-input input-group-text" id="pdf" name="pdf">
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
