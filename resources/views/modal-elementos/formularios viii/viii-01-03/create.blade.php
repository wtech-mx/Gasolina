<!-- Modal -->
<div class="modal fade" id="exampleModalViii03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear VIII-01-03</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('store.viii_01_03') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="modal-body">
                    <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-datos-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-datos" type="button" role="tab" aria-controls="pills-datos"
                                aria-selected="true">
                                Datos
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-calendario-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-calendario" type="button" role="tab" aria-controls="pills-calendario"
                                aria-selected="false">
                                Calendario
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-datos" role="tabpanel"
                            aria-labelledby="pills-datos-tab">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>Autorizacion</label>
                                    <input name="autorizacion" type="text" class="form-control" id="autorizacion"
                                        placeholder="autorizacion">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Condicionante</label>
                                    <input name="condicionante" type="text" class="form-control" id="condicionante"
                                        placeholder="condicionante">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Etapa</label>
                                    <input name="etapa" type="text" class="form-control" id="etapa" placeholder="etapa">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>autoridad</label>
                                    <input name="autoridad" type="text" class="form-control" id="autoridad"
                                        placeholder="autoridad">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>obtencion</label>
                                    <input name="obtencion" type="date" class="form-control" id="obtencion"
                                        placeholder="obtencion">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label for="nombre">renovacion</label>
                                    <input name="renovacion" type="text" class="form-control" id="renovacion"
                                        placeholder="renovacion">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>cumplimiento</label>
                                    <input name="cumplimiento" type="text" class="form-control" id="cumplimiento"
                                        placeholder="cumplimiento">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>periodicidad</label>
                                    <input name="periodicidad" type="text" class="form-control" id="periodicidad"
                                        placeholder="periodicidad">
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
                                {{-- <div class="form-group col-6 mt-3">
                                    <label>Titulo</label>
                                    <input name="titulo" type="text" class="form-control" id="titulo"
                                        placeholder="titulo">
                                </div> --}}

                                <div class="form-group col-6 mt-3">
                                    <label>Inicio</label>
                                    <input name="start" type="date" class="form-control" id="start" placeholder="start">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Tiempo</label>
                                    <select name="tiempo" id="tiempo">
                                        <option value="tri">Trimestral</option>
                                        <option value="sem">Semestral</option>
                                        <option value="uno">1 año</option>
                                        <option value="cinco">5 años</option>
                                        <option value="diez">10 años</option>
                                        <option value="treinta">30 años</option>
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
