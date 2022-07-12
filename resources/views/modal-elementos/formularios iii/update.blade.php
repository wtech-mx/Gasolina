<!-- Modal -->
<div class="modal fade" id="updateModal{{$row->id}}" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Actualizar Ley</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('update.ejecutar_iii-01-01', $row->id) }}" enctype="multipart/form-data" role="form">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">

                                <label class="form-label label-custom-yellow">Leyes, reglamentos o normas</label>
                                <input type="text" class="form-control input-style" id="leyes" name="leyes" placeholder="leyes" value="{{$row->leyes }}">
                            </div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">

                                <label class="form-label label-custom-yellow">Marco normativo</label>
                                <input type="text" class="form-control input-style" id="marco" name="marco" placeholder="marco" value="{{$row->marco }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">Mec. de cumplimiento SA</label>
                                <input type="text" class="form-control input-style" id="mecanismo_cumplimiento" name="mecanismo_cumplimiento" placeholder="mecanismo_cumplimiento" value="{{$row->mecanismo_cumplimiento }}">
                            </div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">

                                <label class="form-label label-custom-yellow">Ámbito de la aplicación</label>
                                <input type="text" class="form-control input-style" id="ambito" name="ambito" placeholder="ambito" value="{{$row->ambito }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">

                                <label class="form-label label-custom-yellow">Mecanismo específico</label>
                                <input type="text" class="form-control input-style" id="mecanismo_especifico" name="mecanismo_especifico" placeholder="mecanismo_especifico" value="{{$row->mecanismo_especifico }}">
                            </div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">Desc. del marco normativo</label>
                                <textarea name="descripcion" id="descripcion" cols="20" rows="2">{{$row->descripcion }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">

                                <label class="form-label label-custom-yellow">Periocidad</label>
                                <input type="text" class="form-control input-style" id="periodicidad" name="periodicidad" placeholder="periodicidad" value="{{$row->periodicidad }}">
                            </div>
                        </div>

                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">

                                <label class="form-label label-custom-yellow">Aplica</label>
                                <input type="text" class="form-control input-style" id="aplica" name="aplica" placeholder="aplica" value="{{$row->aplica }}">
                            </div>
                        </div>

                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">

                                <label class="form-label label-custom-yellow">Obligatorio</label>
                                <input class="form-check-input" type="checkbox" id="periodicidad" name="periodicidad" value="1" id="flexCheckDefault">
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">PDF</label>
                                <input type="file" class="custom-file-input input-group-text" id="pdf" name="pdf">
                            </div>
                        </div>

                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">PDF</label>
                                <a href="{{asset('iii_elemento/'.$row->pdf)}}" target="_blank">
                                    <embed src="{{asset('iii_elemento/'.$row->pdf)}}" class="img-firma">
                                </a>
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
