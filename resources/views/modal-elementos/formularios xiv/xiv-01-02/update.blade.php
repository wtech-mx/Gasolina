<!-- Modal -->
<div class="modal fade" id="updateModalXIV{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalXIV" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXIV">Crear XI-01-02</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.xiv_01_02', $item->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-6 mt-3">
                            <label>Tanque de almacenamiento subterráneo</label>
                            <select id="tanque" name="tanque" class="form-select">
                                <option value="{{$item->tanque}}">{{$item->tanque}}</option>
                                <option value="{{$config->tanque1}}">{{$config->tanque1}}</option>
                                <option value="{{$config->tanque2}}">{{$config->tanque2}}</option>
                                <option value="{{$config->tanque3}}">{{$config->tanque3}}</option>
                            </select>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Tipo</label>
                            <select id="tipo" name="tipo" class="form-select">
                                <option value="{{$item->tipo}}">{{$item->tipo}}</option>
                                <option value="Extraordinaria">Extraordinaria</option>
                                <option value="Ordinaria">Ordinaria</option>
                            </select>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Nombre laboratorio</label>
                            <input name="laboratorio" type="text" class="form-control" id="laboratorio" value="{{$item->laboratorio}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Num autorizacion</label>
                            <input name="num_autorizacion" type="number" class="form-control" id="num_autorizacion" value="{{$item->num_autorizacion}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Fecha solicitud</label>
                            <input name="fecha_solicitud" type="date" class="form-control" id="fecha_solicitud" value="{{$item->fecha_solicitud}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Fecha seguimiento</label>
                            <input name="fecha_seguimiento" type="date" class="form-control" id="fecha_seguimiento" value="{{$item->fecha_seguimiento}}">
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">PDF</label>
                                <input type="file" class="custom-file-input input-group-text" id="pdf"
                                    name="pdf">
                                <a href="{{asset('xiv_elemento/'.$item->pdf)}}" target="_blank">
                                <embed src="{{asset('xiv_elemento/'.$item->pdf)}}" class="img-firma">
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
