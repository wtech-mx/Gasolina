<!-- Modal -->
<div class="modal fade" id="updateModalViii01{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar VIII-01-01</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.viii_01_01', $item->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">

                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>tipo</label>
                                    <input name="tipo" type="text" class="form-control" id="tipo"
                                        value="{{$item->tipo}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>reglas</label>
                                    <input name="reglas" type="text" class="form-control" id="reglas" value="{{$item->reglas}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>fecha</label>
                                    <input name="fecha" type="date" class="form-control" id="fecha" value="{{$item->fecha}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>aprobacion</label>
                                    <input name="aprobacion" type="date" class="form-control" id="aprobacion" value="{{$item->aprobacion}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>notificacion</label>
                                    <input name="notificacion" type="date" class="form-control" id="notificacion" value="{{$item->notificacion}}">
                                </div>

                                <div class="form-group col-12 col-xs-12 col-sm-12 col-md-12 mt-4">
                                    <label for="">pdf</label>
                                    <input type="file" id="pdf" class="form-control" name="pdf">
                                    <a href="{{asset('viii_elemento/'.$item->pdf)}}" target="_blank">
                                        <embed src="{{asset('viii_elemento/'.$item->pdf)}}" class="img-firma">
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
