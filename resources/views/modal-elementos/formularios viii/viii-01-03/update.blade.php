<!-- Modal -->
<div class="modal fade" id="updateModalViii03{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel01" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar VIII-01-03</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.viii_01_03', $item->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">

                    <ul class="nav nav-pills mb-3 d-flex " id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-calendario-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-calendario{{$item->id}}" type="button" role="tab" aria-controls="pills-calendario"
                                aria-selected="false">
                                Calendario
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-datos-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-datos{{$item->id}}" type="button" role="tab" aria-controls="pills-datos"
                                aria-selected="true">
                                Editar Datos
                            </button>
                        </li>

                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-calendario{{$item->id}}" role="tabpanel" aria-labelledby="pills-calendario-tab">
                            <div class="row">
                                {{-- <div class="form-group col-6 mt-3">
                                    <label>Titulo</label>
                                    <input name="titulo" type="text" class="form-control" id="titulo"
                                        value="{{$item->titulo}}">
                                </div> --}}

                                <div class="form-group col-6 mt-3">
                                    <label>Inicio</label>
                                    <input name="start" type="date" class="form-control" id="start" value="{{$item->start}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Tiempo</label>
                                    <select name="tiempo" id="tiempo">
                                        <option value="{{$item->tiempo}}">{{$item->tiempo}}</option>
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

                        <div class="tab-pane fade" id="pills-datos{{$item->id}}" role="tabpanel"
                            aria-labelledby="pills-datos-tab">
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label>Autorizacion</label>
                                    <input name="autorizacion" type="text" class="form-control" id="autorizacion" value="{{$item->autorizacion}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Condicionante</label>
                                    <input name="condicionante" type="text" class="form-control" id="condicionante" value="{{$item->condicionante}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>Etapa</label>
                                    <input name="etapa" type="text" class="form-control" id="etapa"  value="{{$item->etapa}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>autoridad</label>
                                    <input name="autoridad" type="text" class="form-control" id="autoridad"
                                    value="{{$item->autoridad}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>obtencion</label>
                                    <input name="obtencion" type="date" class="form-control" id="obtencion" value="{{$item->obtencion}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label for="nombre">renovacion</label>
                                    <input name="renovacion" type="text" class="form-control" id="renovacion"
                                    value="{{$item->renovacion}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>cumplimiento</label>
                                    <input name="cumplimiento" type="text" class="form-control" id="cumplimiento"
                                    value="{{$item->cumplimiento}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label>periodicidad</label>
                                    <input name="periodicidad" type="text" class="form-control" id="periodicidad"
                                    value="{{$item->periodicidad}}">
                                </div>

                                {{-- <div class="col-sm-12 col-12">
                                    <div class="form-group mb-3 position-relative">
                                        <label class="form-label label-custom-yellow">PDF</label>
                                        <input type="file" class="custom-file-input input-group-text" id="pdf"
                                            name="pdf"  value="{{$item->pdf}}">
                                        <iframe src="{{asset('viii_elemento/'.$item->pdf)}}" class="img-firma">
                                    </div>
                                </div> --}}
                            </div>
                        </div>

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
