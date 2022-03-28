<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" tabindex="-1" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content" style="border-radius: 30px;">

            <div class="modal-body" style="border-radius: 30px!important;border: 2px solid #FFC300;background-color: #001d3d;">

                <div class="d-flex justify-content-between">
                    <h5 class="modal-title mb-5 text-white">Nuevo Tanque</h5>
                     <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close" style="background: transparent url({{asset('assets/img/icons/cancel.png') }}) center/1.5em auto no-repeat;">
                     </button>
                </div>

                <form class="row">
                    
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
