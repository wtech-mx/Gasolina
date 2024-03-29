@php
$url = $_SERVER['REQUEST_URI'];
if ($url == '/difundir/i-01-01') {
$rest = substr($url, -7);
}elseif ($url == '/difundir/ii-01-01') {
$rest = substr($url, -8);
}elseif ($url == '/difundir/ii-02-01') {
$rest = substr($url, -8);
}elseif ($url == '/difundir/iii-01-01') {
$rest = substr($url, -9);
}elseif ($url == '/difundir/iv-01-01') {
$rest = substr($url, -8);
}elseif ($url == '/difundir/v-01-01') {
$rest = substr($url, -7);
}elseif ($url == '/difundir/vi-01-01') {
$rest = substr($url, -8);
}elseif ($url == '/difundir/vi-01-03') {
$rest = substr($url, -8);
}elseif ($url == '/difundir/vii-01-01') {
$rest = substr($url, -9);
}elseif ($url == '/difundir/vii-02-02') {
$rest = substr($url, -9);
}elseif ($url == '/difundir/vii-03-02') {
$rest = substr($url, -9);
}elseif ($url == '/difundir/viii-01-01') {
$rest = substr($url, -10);
}elseif ($url == '/difundir/viii-01-02') {
$rest = substr($url, -10);
}elseif ($url == '/difundir/viii-01-03') {
$rest = substr($url, -10);
}elseif ($url == '/difundir/viii-01-04') {
$rest = substr($url, -10);
}elseif ($url == '/difundir/viii-01-05') {
$rest = substr($url, -10);
}elseif ($url == '/difundir/ix-01-01') {
$rest = substr($url, -8);
}elseif ($url == '/difundir/xi-01-01') {
$rest = substr($url, -8);
}elseif ($url == '/difundir/xii-01-01') {
$rest = substr($url, -9);
}elseif ($url == '/difundir/xiv-01-01') {
$rest = substr($url, -9);
}elseif ($url == '/difundir/xiv-01-02') {
$rest = substr($url, -9);
}elseif ($url == '/difundir/xiv-03-01') {
$rest = substr($url, -9);
}elseif ($url == '/difundir/xv-01-01') {
$rest = substr($url, -8);
}elseif ($url == '/difundir/xv-01-02') {
$rest = substr($url, -8);
}elseif ($url == '/difundir/xvi-01-01') {
$rest = substr($url, -9);
}elseif ($url == '/difundir/xvi-01-02') {
$rest = substr($url, -9);
}
@endphp
<!-- Modal -->
<div class="modal fade" id="exampleModalDifundir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Difución</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('difundir.store') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">


                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id_elemento" name="id_elemento" value="{{$rest}}">
                    </div>

                    <div class="form-group col-12 mt-3">
                        <label for="producto">¿Quien solicita?</label>
                        @error('producto') <span class="error text-danger">{{ $message }}</span> @enderror
                        <select class="form-select" aria-label="Default select example" id="id_user" name="id_user" >
                            @foreach ($users as $item)
                                <option value="{{$item->id}}">{{$item->name}} {{$item->apellido}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" class="form-control" id="descripcion" cols="20" rows="5" placeholder="Descripcion"></textarea>@error('descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="tipo">Señalar el tipo de Publicación</label>
                        <select name="tipo" class="form-control" id="tipo">
                            <option value="">Señalar el tipo de Publicación</option>
                            <option value="externa">Externa</option>
                            <option value="interna">Interna</option>
                        </select>@error('tipo') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-6 mt-3">
                            <label for="inicial">Fecha inicial</label>
                            <input name="inicial" type="date" class="form-control" id="inicial" placeholder="Inicial">@error('inicial') <span class="error text-danger">{{ $message
                                }}</span> @enderror
                        </div>
                        <div class="form-group col-6 mt-3 ">
                            <label for="final">Fecha final</label>
                            <input name="final" type="date" class="form-control" id="final" placeholder="Final">@error('final') <span class="error text-danger">{{ $message
                                }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label for="pdf">Evidencia</label>
                        <input name="pdf" type="file" class="form-control" id="pdf">@error('pdf') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                    <table class="table table-bordered" id="tabla_script">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th>Medio de c.</th>
                                <th>Especificar</th>
                            </tr>
                        </thead>
                    </table>

                    <a href="javascript:;" id="agregar" class="btn" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">Agregar
                        servicio</a>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

