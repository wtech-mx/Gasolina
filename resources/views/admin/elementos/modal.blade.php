<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actividad del formato de Registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>
                <h5>Acción Correctiva.</h5>
            </p>
            <strong>Periodicidad</strong>
            <p>Por demanda</p>

            <strong >Ultima ejecución</strong>
            <p>
                @if ($elemento->correctiva == NULL)
                    <span>// </span>
                @else
                    <span>{{$elemento->correctiva}}</span>
                @endif
            </p>

            <p>
                <h5>Actualizar</h5>
            </p>
            <strong>Periodicidad</strong>
            <p>Por demanda</p>

            <strong >Ultima ejecución</strong>
            <p>
                @if ($elemento->correctiva == NULL)
                    <span>// </span>
                @else
                    <span>{{$elemento->actualizar}}</span>
                @endif
            </p>

            <p>
                <h5>Consultar</h5>
            </p>
            <strong>Periodicidad</strong>
            <p>Por demanda</p>

            <strong >Ultima ejecución</strong>
            <p>
                @if ($elemento->correctiva == NULL)
                    <span>// </span>
                @else
                    <span>{{$elemento->consultar}}</span>
                @endif
            </p>

            <p>
                <h5>Difundir</h5>
            </p>
            <strong>Periodicidad</strong>
            <p>Por demanda</p>

            <strong >Ultima ejecución</strong>
            <p>
                @if ($elemento->correctiva == NULL)
                    <span>// </span>
                @else
                    <span>{{$elemento->consultar}}</span>
                @endif
            </p>

            <p>
                <h5>Generar</h5>
            </p>
            <strong>Periodicidad</strong>
            <p>Por demanda</p>

            <strong >Ultima ejecución</strong>
            <p>
                @if ($elemento->correctiva == NULL)
                    <span>// </span>
                @else
                    <span>{{$elemento->generar}}</span>
                @endif
            </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
        </div>
      </div>
    </div>
  </div>
