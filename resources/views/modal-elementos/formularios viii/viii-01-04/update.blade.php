<!-- Modal -->
<div class="modal fade" id="updateModalViii04{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel04" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar VIII-01-04</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.viii_01_04', $item->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>nombre</label>
                                    <input name="nombre" type="text" class="form-control" id="nombre"
                                        value="{{$item->nombre}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>area</label>
                                    <input name="area" type="text" class="form-control" id="area"
                                        value="{{$item->area}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>descripcion</label>
                                    <textarea name="descripcion" id="descripcion" cols="20" rows="10">{{$item->descripcion}}</textarea>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>revision</label>
                                    <input name="revision" type="text" class="form-control" id="revision"
                                        value="{{$item->revision}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>fecha</label>
                                    <input name="fecha" type="date" class="form-control" id="fecha"
                                        value="{{$item->fecha}}">
                                </div>

                                <div class="form-group col-12 mt-3">
                                        <label class="form-label label-custom-yellow">PDF</label>
                                        <input type="file" class="custom-file-input input-group-text" id="pdf"
                                            name="pdf"  value="{{$item->pdf}}">
                                            <a href="{{asset('viii_elemento_04/'.$item->pdf)}}" target="_blank">
                                                <embed src="{{asset('viii_elemento_04/'.$item->pdf)}}" class="img-firma">
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
