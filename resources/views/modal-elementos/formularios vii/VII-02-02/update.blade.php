<!-- Modal -->
<div class="modal fade" id="updateModalVii{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar VII-02-02</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.vii_02_02', $item->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-6 mt-3">
                            <label>Fecha inicial</label>
                            <input name="fecha" type="date" class="form-control" id="fecha" value="{{$item->fecha }}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Lugar</label>
                            <input name="lugar" type="text" class="form-control" id="lugar" value="{{$item->lugar }}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Situación Observada</label>
                            <input name="observada" type="text" class="form-control" id="observada" value="{{$item->observada }}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Tipo</label>
                            <input name="tipo" type="text" class="form-control" id="tipo" value="{{$item->tipo }}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Descripción</label>
                            <textarea name="descripcion" class="form-control" id="descripcion" cols="2" rows="2">{{$item->descripcion }}</textarea>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label for="nombre">Empleado</label>
                            <select name="id_empleado" class="form-control" id="id_empleado">
                                    <option value="{{$item->id_empleado }}">{{$item->User->name }} {{ $item->User->apellido}}</option>
                                    @foreach ($users as $item2)
                                        <option value="{{$item2->id_empleado}}">{{$item2->name}} {{ $item2->apellido}}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Contratista</label>
                            <input name="contratista" type="text" class="form-control" id="contratista" value="{{$item->contratista}}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Visitante</label>
                            <input name="visitante" type="text" class="form-control" id="visitante" value="{{$item->visitante }}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Reportado por</label>
                            <input name="reportado" type="text" class="form-control" id="reportado" value="{{$item->reportado }}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Observaciones</label>
                            <textarea name="observacion" class="form-control" id="observacion" cols="2" rows="2">{{$item->observacion }}</textarea>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Responsable de seguimiento</label>
                            <input name="responsable" type="text" class="form-control" id="responsable" value="{{$item->responsable }}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Estatus</label>
                            <input name="estatus" type="text" class="form-control" id="estatus" value="{{$item->estatus }}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Seguimiento</label>
                            <input name="seguimiento" type="text" class="form-control" id="seguimiento" value="{{$item->seguimiento }}">
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">PDF</label>
                                <input type="file" class="custom-file-input input-group-text" id="pdf" name="pdf" value="{{$item->pdf }}">
                                <a href="{{asset('vii_elemento/'.$item->pdf)}}" target="_blank">
                                    <embed src="{{asset('vii_elemento/'.$item->pdf)}}" class="img-firma">
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
