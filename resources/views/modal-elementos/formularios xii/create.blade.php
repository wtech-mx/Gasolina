<!-- Modal -->
<div class="modal fade" id="exampleModalXII" tabindex="-1" aria-labelledby="exampleModalXI" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXI">Crear XII-01-01</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.xii_01_01') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">
                    <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-datos-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-datos" type="button" role="tab" aria-controls="pills-datos"
                                aria-selected="true">
                                CEDULA DEL PROVEEDOR
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-calendario-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-calendario" type="button" role="tab" aria-controls="pills-calendario"
                                aria-selected="false">
                                USUARIOS
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-datos" role="tabpanel"
                            aria-labelledby="pills-datos-tab">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>Fecha Alta</label>
                                    <input name="fecha_alta" type="date" class="form-control" id="fecha_alta"
                                        placeholder="fecha_alta">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Nombre</label>
                                    <input name="nombre" type="text" class="form-control" id="nombre"
                                        placeholder="nombre">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Tipo</label>
                                    <input name="tipo" type="text" class="form-control" id="tipo"
                                        placeholder="tipo">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Estatus</label>
                                    <select name="estatus" id="estatus">
                                        <option value="Rechazado">Rechazado</option>
                                        <option value="Aceptado">Aceptado</option>
                                        <option value="Dado de baja">Dado de baja</option>
                                    </select>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>razon social</label>
                                    <input name="razon_social" type="text" class="form-control" id="razon_social"
                                        placeholder="razon social">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>email</label>
                                    <input name="email" type="email" class="form-control" id="email"
                                        placeholder="email">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>telefono</label>
                                    <input name="telefono" type="number" class="form-control" id="telefono"
                                        placeholder="telefono">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>direccion</label>
                                    <input name="direccion" type="text" class="form-control" id="direccion"
                                        placeholder="direccion">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Responsable</label>
                                    <select name="id_responsable" id="id_responsable">
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
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-calendario" role="tabpanel" aria-labelledby="pills-calendario-tab">
                            <div class="row">

                                <div class="form-group col-6 mt-3">
                                    <label>usuarios</label>
                                    <select class="select2-multiple form-control" name="id_usuarios[]" multiple="multiple"
                                    id="select2Multiple">
                                        @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}} {{$user->apellido}}</option>
                                        @endforeach
                                    </select>
                                </div>

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
