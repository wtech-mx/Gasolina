<!-- Modal -->
<div class="modal fade" id="exampleModalXI" tabindex="-1" aria-labelledby="exampleModalXI" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXI">Crear XI-01-01</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.xi_01_01') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>componente</label>
                                    <input name="componente" type="text" class="form-control" id="componente" value="{{$item->componente}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>id_det</label>
                                    <input name="id_det" type="text" class="form-control" id="id_det" value="{{$item->id_det}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>subcomponente</label>
                                    <input name="subcomponente" type="text" class="form-control" id="subcomponente" value="{{$item->subcomponente}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>etiqueta</label>
                                    <input name="etiqueta" type="text" class="form-control" id="etiqueta" value="{{$item->etiqueta}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>marca</label>
                                    <input name="marca" type="text" class="form-control" id="marca" value="{{$item->marca}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>modelo</label>
                                    <input name="modelo" type="text" class="form-control" id="modelo" value="{{$item->modelo}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>serie</label>
                                    <input name="serie" type="text" class="form-control" id="serie" value="{{$item->serie}}">
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

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
