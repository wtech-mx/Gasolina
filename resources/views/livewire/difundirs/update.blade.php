<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Difundir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="id_user"></label>
                <input wire:model="id_user" type="text" class="form-control" id="id_user" placeholder="Id User">@error('id_user') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="id_elemento"></label>
                <input wire:model="id_elemento" type="text" class="form-control" id="id_elemento" placeholder="Id Elemento">@error('id_elemento') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha"></label>
                <input wire:model="fecha" type="text" class="form-control" id="fecha" placeholder="Fecha">@error('fecha') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="descripcion"></label>
                <input wire:model="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion">@error('descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tipo"></label>
                <input wire:model="tipo" type="text" class="form-control" id="tipo" placeholder="Tipo">@error('tipo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="inicial"></label>
                <input wire:model="inicial" type="text" class="form-control" id="inicial" placeholder="Inicial">@error('inicial') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="final"></label>
                <input wire:model="final" type="text" class="form-control" id="final" placeholder="Final">@error('final') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
