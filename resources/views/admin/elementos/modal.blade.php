@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actividad del formato de Registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <div class="row">
                <div class="col-12 text-center">

                    <p>
                      <a class="btn btn-grid d-grid" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Acción Correctiva
                      </a>
                    </p>

                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">
                          <p>
                            PERIODICIDAD
                            Por demanda
                          </p>
                        <strong >Ultima ejecución</strong>
                        <p>
                            @if ($elemento->correctiva == NULL)
                                <span>// </span>
                            @else
                                <span>{{$elemento->correctiva}}</span>
                            @endif
                        </p>
                      </div>
                    </div>

                    <p>
                      <a class="btn btn-grid d-grid" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                        Actualizar
                      </a>
                    </p>

                    <div class="collapse" id="collapseExample2">
                      <div class="card card-body">
                          <p>
                            PERIODICIDAD
                            Por demanda
                          </p>

                        <strong >Ultima ejecución</strong>
                        <p>
                            @if ($elemento->correctiva == NULL)
                                <span>// </span>
                            @else
                                <span>{{$elemento->actualizar}}</span>
                            @endif
                        </p>
                      </div>
                    </div>

                    <p>
                      <a class="btn btn-grid d-grid" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                        Consultar
                      </a>
                    </p>

                    <div class="collapse" id="collapseExample3">
                      <div class="card card-body">
                          <p>
                            PERIODICIDAD
                            Por demanda
                          </p>
                        <strong >Ultima ejecución</strong>
                        <p>
                            @if ($elemento->correctiva == NULL)
                                <span>// </span>
                            @else
                                <span>{{$elemento->consultar}}</span>
                            @endif
                        </p>
                      </div>
                    </div>

                    <p>
                      <a class="btn btn-grid d-grid" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                        Difundir
                      </a>
                    </p>

                    <div class="collapse" id="collapseExample4">
                      <div class="card card-body">
                          <p>
                            PERIODICIDAD
                            Por demanda
                          </p>
                        <strong >Ultima ejecución</strong>
                        <p>
                            @if ($elemento->correctiva == NULL)
                                <span>// </span>
                            @else
                                <span>{{$elemento->consultar}}</span>
                            @endif
                        </p>
                      </div>
                    </div>

                    <p>
                      <a class="btn btn-grid d-grid" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
                        Generar
                      </a>
                    </p>

                    <div class="collapse" id="collapseExample5">
                      <div class="card card-body">
                          <p>
                            PERIODICIDAD
                            Por demanda
                          </p>
                        <strong >Ultima ejecución</strong>
                        <p>
                            @if ($elemento->correctiva == NULL)
                                <span>// </span>
                            @else
                                <span>{{$elemento->generar}}</span>
                            @endif
                        </p>
                      </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
        </div>

      </div>
    </div>
  </div>
