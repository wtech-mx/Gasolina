<!-- Modal -->
<div class="modal fade" id="updateModalViii05{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel05" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar VIII-01-05</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.viii_01_05', $item->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>Tipo</label>
                                    <input name="tipo" type="text" class="form-control" id="tipo"
                                        value="{{$item->tipo}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Reglas</label>
                                    <input name="reglas" type="text" class="form-control" id="reglas"
                                        value="{{$item->reglas}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label for="nombre">Responsable</label>
                                    <select name="id_responsable" class="form-control" id="id_responsable">
                                            <option value="{{$item->id_responsable}}">{{$item->User->name}} {{ $item->User->apellido}}</option>
                                            @foreach ($users as $value)
                                            <option value="{{$value->id}}"> {{$value->name}} {{ $value->apellido}} </option>
                                            @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Fecha aprovacion</label>
                                    <input name="fecha_aprovacion" type="date" class="form-control" id="fecha_aprovacion" value="{{$item->fecha_aprovacion}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Personal Objetivo</label>
                                    <input name="personal_objetivo" type="text" class="form-control" id="personal_objetivo" value="{{$item->personal_objetivo}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Fecha notificacion</label>
                                    <input name="fecha_notificacion" type="date" class="form-control" id="fecha_notificacion" value="{{$item->fecha_notificacion}}">
                                </div>

                                <div class="form-group col-12 mt-3">
                                        <label class="form-label label-custom-yellow">PDF</label>
                                        <input type="file" class="custom-file-input input-group-text" id="pdf"
                                            name="pdf"  value="{{$item->pdf}}">
                                            <a href="{{asset('viii_elemento_05/'.$item->pdf)}}" target="_blank">
                                                <embed src="{{asset('viii_elemento_05/'.$item->pdf)}}" class="img-firma">
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
