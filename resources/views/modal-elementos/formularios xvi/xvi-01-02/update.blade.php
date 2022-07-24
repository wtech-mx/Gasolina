<!-- Modal -->
<div class="modal fade" id="updateModalXVI{{$row->id}}" tabindex="-1" aria-labelledby="updateModalXVI" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalXVI">Crear reporte de acto y condición insegura</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.xvi_01_02', $row->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                            <div class="row">

                                <div class="form-group col-12 mt-3">
                                    <label>Reportado por</label>
                                    <input name="id_usuarios" type="text" class="form-control" id="id_usuarios" value="{{$row->User->name}} {{$row->User->apellido}}" disabled>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Fecha</label>
                                    <input name="fecha" type="date" class="form-control" id="fecha" value="{{$row->fecha}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Situación observada</label>
                                    <input name="situacion_observada" type="text" class="form-control" id="situacion_observada" value="{{$row->situacion_observada}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Tipo</label>
                                    <input name="tipo" type="text" class="form-control" id="tipo" value="{{$row->tipo}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Lugar</label>
                                    <select id="lugar" name="lugar" class="form-select">
                                        <option value="{{$row->lugar}}">{{$row->lugar}}</option>
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

                                <div class="form-group col-6 mt-3">
                                    <label>Descripción</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{$row->descripcion}}</textarea>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Involucrados</label>
                                    <textarea class="form-control" id="usuario" name="usuario" rows="3">{{$row->usuario}}</textarea>
                                </div>



                                <div class="col-sm-12 col-12">
                                    <div class="form-group mb-3 position-relative">
                                        <label for="">Evidencia</label>
                                        <input type="file" id="pdf" class="form-control" name="pdf" value="{{$row->pdf}}">
                                        <a href="{{asset('xvi_elemento/'.$row->pdf)}}">
                                            <embed src="{{asset('xvi_elemento/'.$row->pdf)}}" class="img-firma">
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
