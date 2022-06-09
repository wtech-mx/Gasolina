@php
$url = $_SERVER['REQUEST_URI'];
if ($url == '/difundir/iv-01-01') {
$rest = substr($url, -8);
}elseif ($url == '/difundir/iii-01-01') {
$rest = substr($url, -9);
}else {
$rest = substr($url, -7);
}
@endphp

<!-- Modal -->
<div class="modal fade" id="updateModal{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Difución</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('difundir.update', $row->id) }}" enctype="multipart/form-data"
                role="form">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tipo">Elemento de difución</label>
                        <input type="text" class="form-control" value="{{$row->id_elemento}}" disabled>
                    </div>

                    <div class="form-group mt-4">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" class="form-control" id="descripcion" cols="20" rows="5"
                            placeholder="Descripcion" disabled>{{$row->descripcion}}</textarea>
                    </div>
                    <div class="form-group mt-4">
                        <label for="tipo">Tipo</label>
                        <select name="tipo" class="form-control" id="tipo" disabled>
                            <option value="{{$row->tipo}}">{{$row->tipo}}</option>
                            <option value="externa">Externa</option>
                            <option value="interna">Interna</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="form-group col-6 mt-4">
                            <label for="inicial">Fecha inicial</label>
                            <input name="inicial" type="date" class="form-control" id="inicial"
                                value="{{$row->inicial}}" disabled>
                        </div>
                        <div class="form-group col-6 mt-4">
                            <label for="final">Fecha final</label>
                            <input name="final" type="date" class="form-control" id="final" value="{{$row->final}}"
                                disabled>
                        </div>
                    </div>

                    <div class="form-group col-12 col-xs-6 col-sm-6 col-md-6">
                        <label for="">Evidencia</label>
                        <input type="file" id="pdf" class="form-control" name="pdf">
                        <a href="{{asset('pdf_difundir/'.$row->pdf)}}" data-lightbox="photos">
                            <img src="{{asset('pdf_difundir/'.$row->pdf)}}" class="img-firma">
                        </a>
                    </div>


                    <div class="row mt-4">
                        <div class="col-8" style="background-color: #212529; color: #fff; height: 30px">Medio de c.
                        </div>
                        <div class="col-4" style="background-color: #212529; color: #fff;">Especificar</div>

                        @foreach ($row->mediosDifundirs as $item)
                        @if ($item->id_difundir == $row->id)
                        <div class="col-8"><input name="inicial" type="text" class="form-control" id="inicial"
                                value="{{$item->comunicacion}}" disabled></div>
                        <div class="col-4"><input name="inicial" type="text" class="form-control" id="inicial"
                                value="{{$item->descripcion}}" disabled></div>
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    {{-- <button type="submit" class="btn btn-primary">Actualizar</button> --}}
                </div>
            </form>
        </div>
    </div>
</div>
