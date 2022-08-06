<!-- Modal -->
<div class="modal fade" id="updateModalXIV{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalXIV" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXIV">Editar XI-01-01</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.xiv_01_01', $item->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-6 mt-3">
                            <label>Subcomponente</label>
                            <select name="subcomponente" id="subcomponente" class="form-select">
                                <option value="{{$item->subcomponente}}">{{$item->subcomponente}}</option>
                                @foreach ($xi_elemento as $row)
                                    <option value="{{$row->id_det}}-{{$row->componente}}">{{$row->id_det}}-{{$row->componente}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Nombre de la unidad</label>
                            <input name="nombre_unidad" type="text" class="form-control" id="nombre_unidad" value="{{$item->nombre_unidad}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Número de autorización</label>
                            <input name="numero_autorizacion" type="text" class="form-control" id="numero_autorizacion" value="{{$item->numero_autorizacion}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Estatus</label>
                            <select id="estatus" name="estatus" class="form-select">
                                <option value="{{$item->estatus}}">{{$item->estatus}}</option>
                                <option value="Pendiente">Pendiente</option>
                                <option value="Realizada">Realizada</option>
                            </select>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Fecha solicitud</label>
                            <input name="fecha_solicitud" type="date" class="form-control" id="fecha_solicitud" value="{{$item->fecha_solicitud}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Vigencia</label>
                            <input name="vigencia" type="date" class="form-control" id="vigencia" value="{{$item->vigencia}}">
                        </div>

                        <div class="form-group col-12 mt-3">
                            <label>Observaciones</label>
                            <textarea name="observaciones" class="form-control" id="observaciones" rows="2">{{$item->observaciones}}</textarea>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Error max en certificado</label>
                            <input name="error_max" type="text" class="form-control" id="error_max" value="{{$item->error_max}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Valor patron</label>
                            <input name="valor_patron" type="text" class="form-control" id="valor_patron" value="{{$item->valor_patron}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Incertidumbre</label>
                            <input name="incertidumbre" type="text" class="form-control" id="incertidumbre" value="{{$item->incertidumbre}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Resolucion del instrumento</label>
                            <input name="resolucion_instrumento" type="text" class="form-control" id="resolucion_instrumento" value="{{$item->resolucion_instrumento}}">
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
