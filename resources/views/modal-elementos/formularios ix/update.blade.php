<!-- Modal -->
<div class="modal fade" id="updateModalIX{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel04" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar IX-01-01</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.ix_01_01', $item->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>mejores_practicas</label>
                                    <input name="mejores_practicas" type="text" class="form-control" id="mejores_practicas"
                                        value="{{$item->mejores_practicas}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>dependencia</label>
                                    <input name="dependencia" type="text" class="form-control" id="dependencia"
                                        value="{{$item->dependencia}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>tipo</label>
                                    <input name="tipo" type="text" class="form-control" id="tipo"
                                        value="{{$item->tipo}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>fecha</label>
                                    <input name="fecha" type="date" class="form-control" id="fecha"
                                        value="{{$item->fecha}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>reglas</label>
                                    <input name="reglas" type="text" class="form-control" id="reglas"
                                        value="{{$item->reglas}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>mecanismos</label>
                                    <input name="mecanismos" type="text" class="form-control" id="mecanismos"
                                        value="{{$item->mecanismos}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Válido para la estación</label>
                                    @if ($item->configuracion == '1')
                                        <input class="form-check-input" type="radio" name="configuracion" id="configuracion" value="1" checked>
                                    @else
                                        <input class="form-check-input" type="radio" name="configuracion" id="configuracion" value="1">
                                    @endif

                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>marco_normativo</label>
                                    <textarea name="marco_normativo" id="marco_normativo" cols="20" rows="3">{{$item->marco_normativo}}</textarea>
                                </div>

                                <div class="form-group col-12 mt-3">
                                        <label class="form-label label-custom-yellow">PDF</label>
                                        <input type="file" class="custom-file-input input-group-text" id="pdf"
                                            name="pdf"  value="{{$item->pdf}}">
                                        <embed src="{{asset('ix_elemento/'.$item->pdf)}}" class="img-firma">
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
