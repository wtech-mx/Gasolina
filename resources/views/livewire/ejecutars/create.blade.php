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

                         <input wire:model="id_user" type="hidden" class="form-control" id="id_user" value="{{auth()->user()->id}}">@error('id_user') <span class="error hidden-danger">{{ $message }}</span> @enderror
                         <input wire:model="cliente" type="hidden" class="form-control" id="cliente" value="324 - PL/20543/EXP/ES/2017 - SAC XIB CHAAC, S.A. DE C.V." disabled>@error('cliente') <span class="error text-danger">{{ $message }}</span> @enderror

                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="tanque">Tanque</label>
                            @error('tanque') <span class="error text-danger">{{ $message }}</span> @enderror
                            <select wire:model="tanque" class="form-select" aria-label="Default select example" id="tanque">
                                <option selected>Seleccionar Tanque</option>
                                <option value="1">TAS011-TAS001-Tanque de almacenamiento subterráneo. - MAGNA 1</option>
                                <option value="2">TAS012-TAS001-Tanque de almacenamiento subterráneo. - MAGNA 2</option>
                                <option value="3">TAS013-TAS001-Tanque de almacenamiento subterráneo. - DIESEL</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="recibido">Recibido</label>
                            <input wire:model="recibido" type="datetime-local" class="form-control" id="recibido" placeholder="Recibido">@error('recibido') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="salida">Salida</label>
                            <input wire:model="salida" type="time" class="form-control" id="salida" placeholder="Salida">@error('salida') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="operador">Operador</label>
                            <input wire:model="operador" type="text" class="form-control" id="operador" placeholder="Operador">@error('operador') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="identificacion">Identificacion</label>
                            <input wire:model="identificacion" type="text" class="form-control" id="identificacion" placeholder="Identificacion">@error('identificacion') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>


                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="producto"></label>
                            @error('producto') <span class="error text-danger">{{ $message }}</span> @enderror
                            <select wire:model="producto" class="form-select" aria-label="Default select example" id="producto">
                                <option selected>Seleccionar Producto</option>
                                <option value="1">TAS011</option>
                                <option value="2">TAS012</option>
                                <option value="3">TAS013</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="nota">Nota</label>
                            <input wire:model="nota" type="text" class="form-control" id="nota" placeholder="nota">@error('nota') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="cantidad">Cantidad</label>
                            <input wire:model="cantidad" type="text" class="form-control" id="cantidad" placeholder="cantidad">@error('cantidad') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="remision">Remision</label>
                            <input wire:model="remision" type="file" class="form-control" id="remision" placeholder="Remision">@error('remision') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="factura">Factura</label>
                            <input wire:model="factura" type="file" class="form-control" id="factura" placeholder="Factura">@error('factura') <span class="error text-danger">{{ $message }}</span> @enderror
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

{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>--}}
{{--                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar</button>--}}
{{--            </div>--}}

        </div>
    </div>
</div>