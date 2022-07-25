
<!-- Modal -->
<div class="modal fade" id="updateModalXVI{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Notificaión de incidente/accidente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.xvi_01_01', $row->id) }}" enctype="multipart/form-data"
                role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                    <div class="form-group">
                        {{-- <label for="tipo">Elemento de difución</label> --}}
                        <input type="hidden" class="form-control" name="id_elemento" id="id_elemento" value="{{$row->id_elemento}}" >
                    </div>
                    <div class="row">
                        <div class="form-group mt-4 col-6">
                            <label for="descripcion">Fecha</label>
                            <input name="fecha" type="date" class="form-control" id="fecha" value="{{$row->fecha}}" >
                        </div>

                        <div class="form-group mt-4 col-6">
                            <label for="descripcion">Hora</label>
                            <input name="hora" type="time" class="form-control" id="hora" value="{{$row->hora}}" >
                        </div>

                        <div class="form-group mt-4 col-6">
                            <label for="tipo">Área</label>
                            <select name="area" class="form-control" id="area" >
                                <option value="{{$row->area}}">{{$row->area}}</option>
                                <option value="Oficina administrativa">Oficina administrativa</option>
                                <option value="Sanitarios de empleados">Sanitarios de empleados</option>
                                <option value="Cuarto de empleados">Cuarto de empleados</option>
                                <option value="Sanitarios de servicio">Sanitarios de servicio</option>
                                <option value="Cuarto de control electrico">Cuarto de control electrico</option>
                                <option value="Cuarto de maquinas">Cuarto de maquinas</option>
                                <option value="Cuarto de sucios">Cuarto de sucios</option>
                                <option value="Bodega/Almacen">Bodega/Almacen</option>
                                <option value="Alamacen de residuos peligrosos">Alamacen de residuos peligrosos</option>
                                <option value="Area de despacho/islas">Area de despacho/islas</option>
                                <option value="Area de tanques o almacenamiento">Area de tanques o almacenamiento</option>
                                <option value="Areas verdes">Areas verdes</option>
                                <option value="Accesos y salidas">Accesos y salidas</option>
                            </select>
                        </div>

                        <div class="form-group mt-4 col-6">
                            <label for="tipo">Accidente ha originado</label>
                            <select name="daño_accidente" class="form-control" id="daño_accidente" >
                                <option value="{{$row->daño_accidente}}">{{$row->daño_accidente}}</option>
                                <option value="Lesion Personal">Lesion Personal</option>
                                <option value="Daños Materiales">Daños Materiales</option>
                            </select>
                        </div>

                        <div class="form-group mt-4 col-6">
                            <label for="tipo">Tipo de personal que notificó</label>
                            <select name="tipo_personal" class="form-control" id="tipo_personal">
                                <option value="{{$row->tipo_personal}}">{{$row->tipo_personal}}</option>
                                <option value="Personal interno">Personal interno</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>

                        <div class="form-group mt-4 col-6">
                            <label>Notificado por</label>
                            {{-- <select id="interusuario" name="usuario" class="form-select" style="display: none">
                                <option value="{{$row->usuario}}">{{$row->usuario}}</option>
                                @foreach ($users as $item)
                                <option value="{{$item->name}} {{$item->apellido}}">{{$item->name}} {{$item->apellido}}</option>
                                @endforeach
                            </select> --}}

                            <input name="usuario" type="text" class="form-control" id="usuario" value="{{$row->usuario}}">
                        </div>

                        <div class="form-group col-12 col-xs-6 col-sm-6 col-md-6">
                            <label for="">Evidencia</label>
                            <input type="file" id="pdf" class="form-control" name="pdf" value="{{$row->pdf}}">
                            <a href="{{asset('xvi_elemento/'.$row->pdf)}}">
                                <embed src="{{asset('xvi_elemento/'.$row->pdf)}}" class="img-firma">
                            </a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-8" style="background-color: #212529; color: #fff; height: 30px">Tipo de vinculación</div>
                        <div class="col-4" style="background-color: #212529; color: #fff;">Nombre</div>

                        @foreach ($xvi_elemento_vinculacion as $item)
                            @if ($item->id_xvi == $row->id)
                            <div class="col-8"><input name="tipo_vinculacion[]" type="text" class="form-control" id="tipo_vinculacion[]"
                                    value="{{$item->tipo_vinculacion}}" disabled></div>
                            <div class="col-4"><input name="nombre[]" type="text" class="form-control" id="nombre[]"
                                    value="{{$item->nombre}}" disabled></div>
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
