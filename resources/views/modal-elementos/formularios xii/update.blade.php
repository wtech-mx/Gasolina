<!-- Modal -->
<div class="modal fade" id="updateModalXII{{$item->id}}" tabindex="-1" aria-labelledby="updateModalXII" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXI">Crear XI-01-01</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.xii_01_01', $item->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                    <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-proveedor-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-proveedor{{$item->id}}" type="button" role="tab" aria-controls="pills-proveedor"
                                aria-selected="true">
                                CEDULA DEL PROVEEDOR
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-usuarios-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-usuarios{{$item->id}}" type="button" role="tab" aria-controls="pills-usuarios"
                                aria-selected="false">
                                USUARIOS
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-proveedor{{$item->id}}" role="tabpanel"
                            aria-labelledby="pills-proveedor-tab">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>Fecha Alta</label>
                                    <input name="fecha_alta" type="date" class="form-control" id="fecha_alta"
                                        value="{{$item->fecha_alta}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Nombre</label>
                                    <input name="nombre" type="text" class="form-control" id="nombre"
                                        value="{{$item->nombre}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Tipo</label>
                                    <input name="tipo" type="text" class="form-control" id="tipo"
                                        value="{{$item->tipo}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Estatus</label>
                                    <select name="estatus" id="estatus">
                                        <option value="{{$item->estatus}}">{{$item->estatus}}</option>
                                        <option value="Rechazado">Rechazado</option>
                                        <option value="Aceptado">Aceptado</option>
                                        <option value="Dado de baja">Dado de baja</option>
                                    </select>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>razon social</label>
                                    <input name="razon_social" type="text" class="form-control" id="razon_social"
                                        value="{{$item->razon_social}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>email</label>
                                    <input name="email" type="email" class="form-control" id="email"
                                        value="{{$item->email}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>telefono</label>
                                    <input name="telefono" type="number" class="form-control" id="telefono"
                                        value="{{$item->telefono}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>direccion</label>
                                    <input name="direccion" type="text" class="form-control" id="direccion"
                                        value="{{$item->direccion}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Responsable</label>
                                    <select name="id_responsable" id="id_responsable">
                                        <option value="{{$item->id_responsable}}">{{$item->User->name}} {{$item->User->apellido}}</option>
                                        @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}} {{$user->apellido}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-12 col-12">
                                    <div class="form-group mb-3 position-relative">
                                        <label class="form-label label-custom-yellow">PDF</label>
                                        <input type="file" class="custom-file-input input-group-text" id="pdf"
                                            name="pdf">
                                        <a href="{{asset('xii_elemento/'.$item->pdf)}}" target="_blank">
                                            <embed src="{{asset('xii_elemento/'.$item->pdf)}}" class="img-firma">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-usuarios{{$item->id}}" role="tabpanel" aria-labelledby="pills-usuarios-tab">
                            <div class="row">

                                {{-- <div class="tab-pane fade" id="pills-calendario" role="tabpanel" aria-labelledby="pills-calendario-tab">
                                    <div class="row">

                                        <table class="table table-bordered" id="tabla_proveedor">
                                            <thead class="table-dark">
                                                <tr class="text-center">
                                                    <th>nombre</th>
                                                    <th>correo</th>
                                                    <th>puesto</th>
                                                    <th>telefono</th>
                                                    <th>cargo</th>
                                                </tr>
                                            </thead>
                                        </table>

                                        <a href="javascript:;" id="agregar3" class="btn" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">Agregar
                                            usuario</a>

                                    </div>
                                </div> --}}

                                <hr>

                                <div class="col-2" style="background-color: #212529; color: #fff">Nombre</div>
                                <div class="col-2" style="background-color: #212529; color: #fff;">Correo</div>
                                <div class="col-2" style="background-color: #212529; color: #fff;">Puesto</div>
                                <div class="col-2" style="background-color: #212529; color: #fff;">Telefono</div>
                                <div class="col-2" style="background-color: #212529; color: #fff;">Cargo</div>
                                <div class="col-2" style="background-color: #212529; color: #fff;">Accion</div>

                                        @foreach ($xii_elemento_user as $xii_elemento)
                                            @if ($xii_elemento->id_xii == $item->id)
                                                <div class="col-2">{{$xii_elemento->nombre}}</div>
                                                <div class="col-2">{{$xii_elemento->correo}}</div>
                                                <div class="col-2">{{$xii_elemento->puesto}}</div>
                                                <div class="col-2">{{$xii_elemento->telefono}}</div>
                                                <div class="col-2">{{$xii_elemento->cargo}}</div>
                                                <button class="btn btn-danger delete-link" value="{{$xii_elemento->id}}" onclick="location.reload()"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            @endif
                                        @endforeach

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
