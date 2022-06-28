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
                                    <label>Estatus</label>
                                    <input name="estatus" type="date" class="form-control" id="estatus" value="{{$item->estatus}}">
                                </div>

                                {{-- <div class="form-group col-6 col-xs-6 col-sm-6 col-md-6 mt-4">
                                    <label for="">pdf</label>
                                    <input type="file" id="pdf" class="form-control" name="pdf">
                                    <iframe src="{{asset('viii_elemento/'.$item->pdf)}}" class="img-firma">
                                </div> --}}
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
