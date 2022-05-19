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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                        <div class="form-group mt-3">
                            <label for="inicial">Fecha inicial</label>
                            <input name="inicial" type="date" class="form-control" id="inicial" placeholder="Inicial">@error('inicial') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label for="final">Fecha final</label>
                            <input name="final" type="date" class="form-control" id="final" placeholder="Final">@error('final') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <table class="table table-bordered" id="tabla_script">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th>Medio de c.</th>
                                    <th>Especificar</th>
                                </tr>
                            </thead>
                        </table>

                        <a href="javascript:;" id="agregar" class="btn" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">Agregar servicio</a>



                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

