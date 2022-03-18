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
                <label for="id_user"></label>
                <input wire:model="id_user" type="text" class="form-control" id="id_user" placeholder="Id User">@error('id_user') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cliente"></label>
                <input wire:model="cliente" type="text" class="form-control" id="cliente" placeholder="Cliente">@error('cliente') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <input wire:model="nota" type="text" class="form-control" id="nota" placeholder="Nota">@error('nota') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cantidad"></label>
                <input wire:model="cantidad" type="text" class="form-control" id="cantidad" placeholder="Cantidad">@error('cantidad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="remision"></label>
                <input wire:model="remision" type="text" class="form-control" id="remision" placeholder="Remision">@error('remision') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="factura"></label>
                <input wire:model="factura" type="text" class="form-control" id="factura" placeholder="Factura">@error('factura') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="producto_tanqute"></label>
                <input wire:model="producto_tanqute" type="text" class="form-control" id="producto_tanqute" placeholder="Producto Tanqute">@error('producto_tanqute') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cantidad_antes"></label>
                <input wire:model="cantidad_antes" type="text" class="form-control" id="cantidad_antes" placeholder="Cantidad Antes">@error('cantidad_antes') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cantidad_despues"></label>
                <input wire:model="cantidad_despues" type="text" class="form-control" id="cantidad_despues" placeholder="Cantidad Despues">@error('cantidad_despues') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="energia"></label>
                <input wire:model="energia" type="text" class="form-control" id="energia" placeholder="Energia">@error('energia') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="suspender"></label>
                <input wire:model="suspender" type="text" class="form-control" id="suspender" placeholder="Suspender">@error('suspender') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="trillada_antes"></label>
                <input wire:model="trillada_antes" type="text" class="form-control" id="trillada_antes" placeholder="Trillada Antes">@error('trillada_antes') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="trillada_despues"></label>
                <input wire:model="trillada_despues" type="text" class="form-control" id="trillada_despues" placeholder="Trillada Despues">@error('trillada_despues') <span class="error text-danger">{{ $message }}</span> @enderror
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
