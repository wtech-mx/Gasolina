<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Ejecutar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" wire:model="selected_id">

            <div class="form-group">
                <label for="cliente"></label>
                <input wire:model="cliente" type="text" class="form-control" id="cliente" placeholder="Cliente" disabled>@error('cliente') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tanque"></label>
                <input wire:model="tanque" type="text" class="form-control" id="tanque" placeholder="Tanque">@error('tanque') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="recibido"></label>
                <input wire:model="recibido" type="text" class="form-control" id="recibido" placeholder="Recibido">@error('recibido') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="salida"></label>
                <input wire:model="salida" type="text" class="form-control" id="salida" placeholder="Salida">@error('salida') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="operador"></label>
                <input wire:model="operador" type="text" class="form-control" id="operador" placeholder="Operador">@error('operador') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="identificacion"></label>
                <input wire:model="identificacion" type="text" class="form-control" id="identificacion" placeholder="Identificacion">@error('identificacion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="producto"></label>
                <input wire:model="producto" type="text" class="form-control" id="producto" placeholder="Producto">@error('producto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="nota"></label>
                <input wire:model="nota" type="text" class="form-control" id="nota" placeholder="nota">@error('nota') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cantidad"></label>
                <input wire:model="cantidad" type="text" class="form-control" id="cantidad" placeholder="cantidad">@error('cantidad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="remision"></label>
                <input wire:model="remision" type="file" class="form-control" id="remision" placeholder="Remision">@error('remision') <span class="error file-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="factura"></label>
                <input wire:model="factura" type="file" class="form-control" id="factura" placeholder="Factura">@error('factura') <span class="error text-danger">{{ $message }}</span> @enderror
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
