<!-- Modal -->
<div class="modal fade" id="updateModalXV{{$row->id}}" tabindex="-1" aria-labelledby="updateModalXV" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalXV">Editar plan y programa de auditoría externa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.xv_01_02', $row->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-6 mt-3">
                            <label>Fecha de asignación</label>
                            <input name="start" type="date" class="form-control" id="start" value="{{$row->start}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Fecha de elaboración</label>
                            <input name="fecha_elaboracion" type="date" class="form-control" id="fecha_elaboracion" value="{{$row->fecha_elaboracion}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Fecha de auditoría</label>
                            <input name="fecha_auditoria" type="date" class="form-control" id="fecha_auditoria" value="{{$row->fecha_auditoria}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Contratista/Proveedor</label>
                            <input name="contratista" type="text" class="form-control" id="contratista" value="{{$row->contratista}}">
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">PDF</label>
                                <input type="file" class="custom-file-input input-group-text" id="pdf" name="pdf" value="{{$row->pdf}}">
                                <a href="{{asset('xv_elemento_02/'.$row->pdf)}}">
                                    <embed src="{{asset('xv_elemento_02/'.$row->pdf)}}" class="img-firma">
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
