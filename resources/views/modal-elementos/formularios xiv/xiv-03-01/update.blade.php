<!-- Modal -->
<div class="modal fade" id="updateModalXIV{{$item->id}}" tabindex="-1" aria-labelledby="updateModalXIV" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalXIV">Crear XIV-03-01</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.xiv_01_06', $item->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                    <div class="row">

                        <div class="form-group col-6 mt-3">
                            <label>Nombre</label>
                            <input name="nombre" type="text" class="form-control" id="nombre" value="{{$item->nombre}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>FECHA-HORA DE INCIDENCIA</label>
                            <input name="fecha" type="datetime" class="form-control" id="fecha" value="{{$item->fecha}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>INCIDENCIA/VISITA</label>
                            <input name="incidencia" type="text" class="form-control" id="incidencia" value="{{$item->incidencia}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>DEPENDENCIA/LABORATORIO</label>
                            <input name="dependencia" type="text" class="form-control" id="dependencia" value="{{$item->dependencia}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>OBSERVACIONES</label>
                            <input name="observaciones" type="text" class="form-control" id="observaciones" value="{{$item->observaciones}}">
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">PDF</label>
                                <input type="file" class="custom-file-input input-group-text" id="pdf"
                                    name="pdf">
                                <a href="{{asset('xiv_elemento_06/'.$item->pdf)}}" target="_blank">
                                   <embed src="{{asset('xiv_elemento_06/'.$item->pdf)}}" class="img-firma">
                                </a>
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
