<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Elemento III</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('store.ejecutar_iii-01-01') }}" enctype="multipart/form-data" role="form">
            @csrf
            <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">Leyes, reglamentos o normas</label>
                                <input type="text" class="form-control input-style" id="leyes" name="leyes" placeholder="leyes" value="{{ old('leyes') }}">
                            </div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">Marco normativo</label>
                                <input type="text" class="form-control input-style" id="marco" name="marco" placeholder="marco" value="{{ old('marco') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">Ámbito de la aplicación</label>
                                <input type="text" class="form-control input-style" id="ambito" name="ambito" placeholder="ambito" value="{{ old('ambito') }}">
                            </div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">Meca. de cumplimiento SA</label>
                                <input type="text" class="form-control input-style" id="mecanismo_cumplimiento" name="mecanismo_cumplimiento" placeholder="mecanismo_cumplimiento" value="{{ old('mecanismo_cumplimiento') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">Mecanismo específico</label>
                                <input type="text" class="form-control input-style" id="mecanismo_especifico" name="mecanismo_especifico" placeholder="mecanismo_especifico" value="{{ old('mecanismo_especifico') }}">
                            </div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">Desc. del marco normativo</label>
                                <textarea name="descripcion" id="descripcion" cols="20" rows="2"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">Periocidad</label>
                                <input type="text" class="form-control input-style" id="periodicidad" name="periodicidad" placeholder="periodicidad" value="{{ old('periodicidad') }}">
                            </div>
                        </div>

                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label label-custom-yellow">Aplica</label>
                                <input type="text" class="form-control input-style" id="aplica" name="aplica" placeholder="aplica" value="{{ old('aplica') }}">
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
