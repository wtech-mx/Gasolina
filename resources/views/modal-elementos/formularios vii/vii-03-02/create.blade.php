<!-- Modal -->
<div class="modal fade" id="exampleModalVii03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear VII-03-02</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.vii_03_02') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-6 mt-3">
                            <label>Fecha de solicitud</label>
                            <input name="fecha" type="date" class="form-control" id="fecha" placeholder="fecha">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Servicio</label>
                            <input name="servicio" type="text" class="form-control" id="servicio" placeholder="servicio">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Tipo de solicitud</label>
                            <input name="tipo" type="text" class="form-control" id="tipo"
                                placeholder="tipo">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Descripción de solicitud</label>
                            <textarea name="descripcion" class="form-control" id="descripcion" cols="2" rows="2"
                                placeholder="Descripcion"></textarea>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Solicitante</label>
                            <input name="solicitante" type="text" class="form-control" id="solicitante"
                                placeholder="solicitante">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label for="nombre">Reportado por</label>
                            <select name="id_reportado" class="form-control" id="id_reportado">
                                    <option value="">Nombre usuario</option>
                                    @foreach ($users as $item)
                                        <option value="{{$item->id}}">{{$item->name}}{{ $item->apellido}}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>¿Solicitud viable?</label>
                            <input name="solicitud" type="text" class="form-control" id="solicitud" placeholder="solicitud">
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">Evidencia</label>
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
