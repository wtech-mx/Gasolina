
<!-- Modal -->
<div class="modal fade" id="updateModal{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Difución {{$row->id_elemento}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('difundir.update', $row->id) }}" enctype="multipart/form-data"
                role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                    <div class="form-group">
                        {{-- <label for="tipo">Elemento de difución</label> --}}
                        <input type="hidden" class="form-control" name="id_elemento" id="id_elemento" value="{{$row->id_elemento}}" >
                    </div>

                    <div class="form-group col-12 mt-3">
                        <label for="producto">¿Quien solicita?</label>
                        @error('producto') <span class="error text-danger">{{ $message }}</span> @enderror
                        <select class="form-select" aria-label="Default select example" id="id_user" name="id_user" >
                            <option value="{{$row->id_user}}">{{$row->Users->name}} {{$row->Users->apellido}}</option>
                            @foreach ($users as $item)
                                <option value="{{$item->id}}">{{$item->name}} {{$item->apellido}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-4">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" class="form-control" id="descripcion" cols="20" rows="5"
                            placeholder="Descripcion" >{{$row->descripcion}}</textarea>
                    </div>
                    <div class="form-group mt-4">
                        <label for="tipo">Tipo</label>
                        <select name="tipo" class="form-control" id="tipo" >
                            <option value="{{$row->tipo}}">{{$row->tipo}}</option>
                            <option value="externa">Externa</option>
                            <option value="interna">Interna</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="form-group col-6 mt-4">
                            <label for="inicial">Fecha inicial</label>
                            <input name="inicial" type="date" class="form-control" id="inicial"
                                value="{{$row->inicial}}" >
                        </div>
                        <div class="form-group col-6 mt-4">
                            <label for="final">Fecha final</label>
                            <input name="final" type="date" class="form-control" id="final" value="{{$row->final}}"
                                >
                        </div>
                    </div>

                    <div class="form-group col-12 col-xs-6 col-sm-6 col-md-6">
                        <label for="">Evidencia</label>
                        <input type="file" id="pdf" class="form-control" name="pdf">
                        <a href="{{asset('pdf_difundir/'.$row->pdf)}}">
                            <embed src="{{asset('pdf_difundir/'.$row->pdf)}}" class="img-firma">
                        </a>
                    </div>


                    <div class="row mt-4">
                        <div class="col-8" style="background-color: #212529; color: #fff; height: 30px">Medio de c.
                        </div>
                        <div class="col-4" style="background-color: #212529; color: #fff;">Especificar</div>

                        @foreach ($row->mediosDifundirs as $item)
                        @if ($item->id_difundir == $row->id)
                        <div class="col-8"><input name="comunicacion[]" type="text" class="form-control" id="comunicacion[]"
                                value="{{$item->comunicacion}}" disabled></div>
                        <div class="col-4"><input name="descripcion2[]" type="text" class="form-control" id="descripcion2[]"
                                value="{{$item->descripcion}}" disabled></div>
                        @endif
                        @endforeach
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
