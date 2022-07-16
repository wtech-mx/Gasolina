<!-- Modal -->
<div class="modal fade" id="updateModalViii{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar VIII-01-02</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.viii_01_02', $item->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">

                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>Nombre</label>
                                    <input name="nombre" type="text" class="form-control" id="nombre"
                                        value="{{$item->nombre}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Fecha</label>
                                    <input name="fecha" type="date" class="form-control" id="fecha" value="{{$item->fecha}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Modificación</label>
                                    <input name="modificacion" type="text" class="form-control" id="modificacion"
                                    value="{{$item->modificacion}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Estatus</label>
                                    <select name="estatus" id="estatus" class="form-control">
                                        <option value="{{$item->estatus}}">{{$item->estatus}}</option>
                                        <option value="Alta">Alta</option>
                                        <option value="Baja">Baja</option>
                                    </select>
                                </div>

                                <div class="form-group col-12 col-xs-12 col-sm-12 col-md-12 mt-4">
                                    <label for="">PDF</label>
                                    <input type="file" id="pdf" class="form-control" name="pdf">
                                    <a href="{{asset('viii_elemento_02/'.$item->pdf)}}" target="_blank">
                                        <embed src="{{asset('viii_elemento_02/'.$item->pdf)}}" class="img-firma">
                                    </a>
                                </div>
                            </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
