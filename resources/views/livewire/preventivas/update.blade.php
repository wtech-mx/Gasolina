<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Editar Accion preventiva o correctiva</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="cliente">Cliente</label>
                <p>324 - PL/20543/EXP/ES/2017 - SAC XIB CHAAC, S.A. DE C.V.</p>
            </div>
            <div class="form-group">
                <label for="fecha">fecha alta</label>
                <input type="text" class="form-control" wire:model="fecha" id="fecha" disabled>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo de accion</label>
                <p>Correctiva</p>
            </div>
            <div class="form-group">
                <label for="tipo">Fuente de hallazgo / oportunidad de mejora</label>
                <p>Formato de registro.</p>
            </div>
            <div class="form-group">
                <label for="tipo">Especifique</label>
                <p>X-01-01 Cédula para identificar el producto que será descargado.</p>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input wire:model="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion">@error('descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            <div class="form-group">
                <label for="estatus">Estatus</label>
                <p>Solicitud</p>
            </div>
            <div class="form-group">
                <h4 for="solicitud">Solicitante</h4>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <p>{{$users->name}}</p>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <p>Gerente</p>
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Guardar</button>
            </div>
       </div>
    </div>
</div>
