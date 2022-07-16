<!-- Modal -->
<div class="modal fade" id="exampleModalViii05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear VIII-01-05</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.viii_01_05') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>tipo</label>
                                    <input name="tipo" type="text" class="form-control" id="tipo"
                                        placeholder="tipo">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Reglas</label>
                                    <input name="reglas" type="text" class="form-control" id="reglas" placeholder="reglas">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label for="nombre">Responsable</label>
                                    <select name="id_responsable" class="form-control" id="id_responsable">
                                            <option value="">Nombre usuario</option>
                                            @foreach ($users as $item)
                                                <option value="{{$item->id}}">{{$item->name}}{{ $item->apellido}}</option>
                                            @endforeach
                                        </select>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Fecha aprovacion</label>
                                    <input name="fecha_aprovacion" type="date" class="form-control" id="fecha_aprovacion">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Personal Objetivo</label>
                                    <input name="personal_objetivo" type="text" class="form-control" id="personal_objetivo" placeholder="personal objetivo">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Fecha notificacion</label>
                                    <input name="fecha_notificacion" type="date" class="form-control" id="fecha_notificacion">
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
