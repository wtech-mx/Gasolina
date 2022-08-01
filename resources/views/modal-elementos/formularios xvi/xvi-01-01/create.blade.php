<!-- Modal -->
<div class="modal fade" id="exampleModalXVI" tabindex="-1" aria-labelledby="exampleModalXVI" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXVI">Crear Notificaión de incidentes/accidentes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.xvi_01_01') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>Fecha</label>
                                    <input name="fecha" type="date" class="form-control" id="fecha">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Hora</label>
                                    <input name="hora" type="time" class="form-control" id="hora">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Área</label>
                                    <select id="area" name="area" class="form-select">
                                        <option value="">Seleccione</option>
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
                                    <label>Accidente ha originado</label>
                                    <select id="daño_accidente" name="daño_accidente" class="form-select">
                                        <option value="">Seleccione</option>
                                        <option value="Lesion Personal">Lesion Personal</option>
                                        <option value="Daños Materiales">Daños Materiales</option>
                                    </select>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Tipo de personal que notificó</label>
                                    <select id="tipo_personal" name="tipo_personal" class="form-select" onchange="showInp()">
                                        <option value="">Seleccione</option>
                                        <option value="Personal interno">Personal interno</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Notificado por</label>
                                    <select id="interusuario" name="usuario" class="form-select" style="display: none">
                                        <option value="">Seleccione</option>
                                        @foreach ($users as $item)
                                        <option value="{{$item->name}} {{$item->apellido}}">{{$item->name}} {{$item->apellido}}</option>
                                        @endforeach
                                    </select>

                                    <input name="usuario_otro" type="text" class="form-control" id="otrouser" style="display: none">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Observación</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                                </div>

                                <table class="table table-bordered" id="tabla_vinculacion">
                                    <thead class="table-dark">
                                        <tr class="text-center">
                                            <th>Tipo de vinculación</th>
                                            <th>Nombre</th>
                                        </tr>
                                    </thead>
                                </table>

                                <a href="javascript:;" id="agregar2" class="btn" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">Agregar
                                    servicio</a>

                                <div class="col-sm-12 col-12">
                                    <div class="form-group mb-3 position-relative">
                                        <label class="form-label label-custom-yellow">PDF</label>
                                        <input type="file" class="custom-file-input input-group-text" id="pdf"
                                            name="pdf">
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
