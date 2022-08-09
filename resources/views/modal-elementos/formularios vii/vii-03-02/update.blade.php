<!-- Modal -->
<div class="modal fade" id="updateModalVii{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar VII-03-02</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.vii_03_02', $item->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-6 mt-3">
                            <label>Fecha inicial</label>
                            <input name="fecha" type="date" class="form-control" id="fecha" value="{{$item->fecha }}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>servicio</label>
                            <input name="servicio" type="text" class="form-control" id="servicio" value="{{$item->servicio }}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Tipo de solicitud</label>
                            <input name="tipo" type="text" class="form-control" id="tipo" value="{{$item->tipo }}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Descripción de solicitud</label>
                            <textarea name="descripcion" class="form-control" id="descripcion" cols="2" rows="2">{{$item->descripcion }}</textarea>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>Solicitante</label>
                            <input name="solicitante" type="text" class="form-control" id="solicitante" value="{{$item->solicitante }}">
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label for="nombre">Reportado por</label>
                            <select name="id_reportado" class="form-control" id="id_reportado">
                                    <option value="{{$item->id_reportado }}">{{$item->User->name }} {{ $item->apellido}}</option>
                                    @foreach ($users as $item2)
                                        <option value="{{$item2->id_empleado}}">{{$item2->name}} {{ $item2->apellido}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="form-group col-6 mt-3">
                            <label>¿Solicitud viable?</label>
                            <input name="solicitud" type="text" class="form-control" id="solicitud" value="{{$item->solicitud}}">
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">Evidencia</label>
                                <input type="file" class="custom-file-input input-group-text" id="pdf" name="pdf" value="{{$item->pdf }}">

                                <a href="{{asset('vii_elemento_03/'.$item->pdf)}}">
                                    <iframe width="400" height="400" src="{{asset('vii_elemento_03/'.$item->pdf)}}" frameborder="0"></iframe>
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
