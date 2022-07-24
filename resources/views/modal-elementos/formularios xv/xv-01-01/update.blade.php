<!-- Modal -->
<div class="modal fade" id="updateModalXV{{$row->id}}" tabindex="-1" aria-labelledby="updateModalXV" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalXV">Editar plan y programa de auditoría</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.xv_01_01', $row->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-6 mt-3">
                            <label>Tipo auditoria</label>
                            <input name="tipo_auditoria" type="text" class="form-control" id="tipo_auditoria" value="{{$row->tipo_auditoria}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Inicio</label>
                            <input name="start" type="date" class="form-control" id="start" value="{{$row->start}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Final</label>
                            <input name="end" type="date" class="form-control" id="end" value="{{$row->end}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Alcance</label>
                            <input name="alcance" type="text" class="form-control" id="alcance" value="{{$row->alcance}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Objetivo</label>
                            <textarea class="form-control" id="objetivo" name="objetivo" rows="3">{{$row->objetivo}}</textarea>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">PDF</label>
                                <input type="file" class="custom-file-input input-group-text" id="pdf" name="pdf" value="{{$row->pdf}}">
                                <a href="{{asset('xv_elemento/'.$row->pdf)}}">
                                    <embed src="{{asset('xv_elemento/'.$row->pdf)}}" class="img-firma">
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
