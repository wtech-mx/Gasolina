<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" tabindex="-1" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Nuevo Tanque</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="id_user"></label>
                <input wire:model="id_user" type="hidden" class="form-control" id="id_user" value="{{auth()->user()->id}}">@error('id_user') <span class="error hidden-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cliente"></label>
                <input wire:model="cliente" type="hidden" class="form-control" id="cliente" value="324 - PL/20543/EXP/ES/2017 - SAC XIB CHAAC, S.A. DE C.V." disabled>@error('cliente') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tanque"></label>
                @error('tanque') <span class="error text-danger">{{ $message }}</span> @enderror
                <select wire:model="tanque" class="form-select" aria-label="Default select example" id="tanque">
                    <option selected>Seleccionar Tanque</option>
                    <option value="1">TAS011-TAS001-Tanque de almacenamiento subterráneo. - MAGNA 1</option>
                    <option value="2">TAS012-TAS001-Tanque de almacenamiento subterráneo. - MAGNA 2</option>
                    <option value="3">TAS013-TAS001-Tanque de almacenamiento subterráneo. - DIESEL</option>
                </select>
            </div>
            <div class="form-group">
                <label for="recibido"></label>
                <input wire:model="recibido" type="datetime-local" class="form-control" id="recibido" placeholder="Recibido">@error('recibido') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="salida"></label>
                <input wire:model="salida" type="time" class="form-control" id="salida" placeholder="Salida">@error('salida') <span class="error text-danger">{{ $message }}</span> @enderror
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
                @error('producto') <span class="error text-danger">{{ $message }}</span> @enderror
                <select wire:model="producto" class="form-select" aria-label="Default select example" id="producto">
                    <option selected>Seleccionar Producto</option>
                    <option value="1">TAS011</option>
                    <option value="2">TAS012</option>
                    <option value="3">TAS013</option>
                </select>
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
                    <input wire:model="remision" type="file" class="form-control" id="remision" placeholder="Remision">@error('remision') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="factura"></label>
                <input wire:model="factura" type="file" class="form-control" id="factura" placeholder="Factura">@error('factura') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar</button>
            </div>
        </div>
    </div>
</div>
