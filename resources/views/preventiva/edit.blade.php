@php
if ($row->elemento == 'i-01-01') {
$elemento = 'I-01-01 Política documentada.';
}elseif ($row->elemento == 'ii-01-01') {
$elemento = 'II-01-01 Matriz para la identificación de peligros y análisis de riesgos.';
}elseif ($row->elemento == 'ii-02-01') {
$elemento = 'II-02-01 Matriz de aspectos e impactos ambientales.';
}elseif ($row->elemento == 'iii-01-01') {
$elemento = 'III-01-01 Matriz de requisitos legales.';
}elseif ($row->elemento == 'iv-01-01') {
$elemento = 'IV-01-01 Matriz de objetivos metas e indicadores.';
}elseif ($row->elemento == 'v-01-01') {
$elemento = 'V-01-01 Matriz de responsabilidades.';
}elseif ($row->elemento == 'vi-01-01') {
$elemento = 'VI-01-01 Matriz de identificación de competencia y formación interna y externa.';
}elseif ($row->elemento == 'vi-01-03') {
$elemento = 'VI-01-03 Plan general de capacitación externo.';
}elseif ($row->elemento == 'vii-01-01') {
$elemento = 'VII-01-01 Matriz de registro y seguimiento de comunicación interna y externa.';
}elseif ($row->elemento == 'vii-02-02') {
$elemento = 'VII-02-02 Matriz de registro y seguimiento de actos o condiciones inseguras.';
}elseif ($row->elemento == 'vii-03-02') {
$elemento = 'VII-03-02 Matriz de control, seguimiento y cierre de quejas y sugerencias.';
}elseif ($row->elemento == 'viii-01-01') {
$elemento = 'VIII-01-01 Listado de documentación interna.';
}elseif ($row->elemento == 'viii-01-02') {
$elemento = 'VIII-01-02 Listado de formatos, registros y bitácoras.';
}elseif ($row->elemento == 'viii-01-03') {
$elemento = 'VIII-01-03 Lista de control de autorizaciones y permisos.';
}elseif ($row->elemento == 'viii-01-04') {
$elemento = 'VIII-01-04 Listado de documentación externa.';
}elseif ($row->elemento == 'viii-01-05') {
$elemento = 'VIII-01-05 Listado de distribución de documentación.';
}elseif ($row->elemento == 'ix-01-01') {
$elemento = 'IX-01-01 Matriz de mejores prácticas.';
}elseif ($row->elemento == 'xi-01-01') {
$elemento = 'XI-01-01 Lista y catálogo de equipos críticos.';
}elseif ($row->elemento == 'xii-01-01') {
$elemento = 'XII-01-01 Listado de proveedor o contratista.';
}elseif ($row->elemento == 'xiv-01-01') {
$elemento = 'XIV-01-01 Matriz de calibración y monitoreo de dispensarios.';
}elseif ($row->elemento == 'xiv-01-02') {
$elemento = 'XIV-01-02 Matriz de calibración y monitoreo de Tanque.';
}elseif ($row->elemento == 'xiv-03-01') {
$elemento = 'XIV-03-01 Incidencias en operaciones';
}elseif ($row->elemento == 'xv-01-01') {
$elemento = 'XV-01-01 Plan y Programa de auditoría interna.';
}elseif ($row->elemento == 'xv-01-02') {
$elemento = 'XV-02-01 Plan y Programa de auditoría externa.';
}elseif ($row->elemento == 'xvi-01-01') {
$elemento = 'XVI-01-01 Matriz para la investigación de accidentes e incidentes.';
}elseif ($row->elemento == 'xvi-01-02') {
$elemento = 'XVI-02-02 Formato de consolidación mensual.';
}
@endphp
<!-- Modal -->
<div class="modal fade" id="updateModal{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 30px;">

            <div class="modal-body"
                style="border-radius: 30px!important;border: 2px solid #FFC300;background-color: #001d3d;">

                <div class="d-flex justify-content-between">
                    <h5 class="modal-title mb-5 text-white">Accion Correctiva {{$row->elemento}}</h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"
                        style="background: transparent url({{asset('assets/img/icons/cancel.png') }}) center/1.5em auto no-repeat;">
                    </button>
                </div>
                <form method="POST" action="{{ route('preventiva.update', $row->id) }}" enctype="multipart/form-data"
                    role="form">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">

                    <div class="form-group text-white">
                        <label for="cliente">Cliente</label>
                        <p>324 - PL/20543/EXP/ES/2017 - SAC XIB CHAAC, S.A. DE C.V.</p>
                    </div>
                    <div class="form-group text-white">
                        <label for="tipo">Tipo de accion</label>
                        <p>Correctiva</p>
                    </div>
                    <div class="form-group text-white">
                        <label for="tipo">Fuente de hallazgo / oportunidad de mejora</label>
                        <p>Formato de registro.</p>
                    </div>
                    <div class="form-group text-white">
                        <label for="tipo">Especifique</label>
                        <p>{{$elemento}}</p>
                    </div>

                    <div class="form-group text-white">
                        <label for="descripcion">Descripcion</label>
                        <input name="descripcion" type="text" class="form-control" id="descripcion"
                            value="{{ $row->descripcion}}">
                    </div>

                    <div class="form-group text-white">
                        <label for="estatus">Estatus</label>
                        <input type="text" class="form-control" id="estatus" name="estatus"  value="{{ $row->estatus}}">
                    </div>
                    <div class="form-group text-white">
                        <h4 for="solicitud">Solicitante</h4>
                    </div>

                    <div class="form-group text-white">
                        <label for="nombre">Nombre</label>
                        <select name="id_user" class="form-control" id="id_user">
                            <option value="{{ $row->id_user}}">{{ $row->Users->name}}{{ $row->Users->apellido}}</option>
                            @foreach ($users as $item)
                            <option value="{{$item->id}}">{{$item->name}}{{ $item->apellido}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex justify-content-around mt-5">
                        <button class="btn" wire:click.prevent="store()"
                            style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Actualizar
                        </button>

                        <button class="btn" data-bs-dismiss="modal"
                            style="background-color:#001d3d;color:  grey!important; border: 2px solid grey!important;">
                            <i class="fa fa-trash" aria-hidden="true"></i> Cancelar
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
