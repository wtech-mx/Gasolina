@php
    $url = $_SERVER['REQUEST_URI'];
    $rest = substr($url, -7);
@endphp
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" tabindex="-1" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content" style="border-radius: 30px;">

            <div class="modal-body" style="border-radius: 30px!important;border: 2px solid #FFC300;background-color: #001d3d;">

                <div class="d-flex justify-content-between">
                    <h5 class="modal-title mb-5 text-white">Accion Correctiva</h5>
                     <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close" style="background: transparent url({{asset('assets/img/icons/cancel.png') }}) center/1.5em auto no-repeat;">
                     </button>
                </div>

            <div class="form-group text-white mb-3">
                <label for="elemento">Seleccionar elemento</label>
                <select wire:model.defer="elemento" class="form-control" id="elemento">
                    <option value="">Seleccionar elemento</option>
                    <option value="{{$rest}}">{{$rest}}</option>
                </select>@error('elemento') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

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
                <p>X-01-01 Cédula para identificar el producto que será descargado.</p>
            </div>

                <form class="row">

            <div class="form-group text-white">
                <label for="descripcion">Descripcion</label>
                <input wire:model.defer="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion">@error('descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>

            <div class="form-group text-white">
                <label for="estatus">Estatus</label>
                <p>Solicitud</p>
            </div>
            <div class="form-group text-white">
                <h4 for="solicitud">Solicitante</h4>
            </div>

            <div class="form-group text-white">
                <label for="nombre">Nombre</label>
                <p>{{$users->name}}</p>
            </div>
            <div class="form-group text-white">
                <label for="cargo">Cargo</label>
                <p>Gerente</p>
            </div>

                <div class="d-flex justify-content-around mt-5">
                    <button class="btn" wire:click.prevent="store()"  style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Guardar
                    </button>

                    <button class="btn"  data-bs-dismiss="modal"  style="background-color:#001d3d;color:  grey!important; border: 2px solid grey!important;">
                        <i class="fa fa-trash" aria-hidden="true"></i> Cancelar
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
