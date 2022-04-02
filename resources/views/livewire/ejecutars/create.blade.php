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

              <ul class="nav nav-pills d-flex justify-content-center mb-3" id="pills-tab" role="tablist">

                <li class="nav-item p-2" role="presentation">
                  <a class="nav-link a-perso active show" id="users-registers" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                       <i class="fa fa-user icon-style-2 p-1 "></i>Tanque
                  </a>
                </li>

                <li class="nav-item p-2" role="presentation">
                  <a class="nav-link a-perso" id="register-passwords" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                      <i class="fa fa-lock icon-style-2 p-1 "></i> Medición
                  </a>
                </li>

              </ul>

            <div class="tab-content" id="pills-tabContent">


                    <div class="tab-pane fade show active p-3 row" id="pills-home" role="tabpanel" aria-labelledby="users-registers">
                        <form>
                         <input wire:model="id_user" type="hidden" class="form-control" id="id_user" value="{{auth()->user()->id}}">
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
                            <label style="color: #FFC300;" for="producto">Seleccionar Producto</label>
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
                    </div>

                    <div class="tab-pane fade p-3 row" id="pills-profile" role="tabpanel" aria-labelledby="register-passwords">

                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="producto_tanqute">Producto que indica la trillada o comprobante del sistema de medicion</label>
                             @error('producto_tanqute') <span class="error text-danger">{{ $message }}</span> @enderror
                            <select wire:model="producto_tanqute" class="form-select" aria-label="Default select example" id="producto_tanqute">
                                <option selected>Seleccionar Gasolina</option>
                                <option value="Gasolina Magna">Gasolina Magna</option>
                                <option value="Gasolina Premium">Gasolina Premium</option>
                                <option value="Magna Diesel">Magna Diesel</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="energia">Cortó el suministro de energía eléctrica de la bomba sumergible del tanque de almacenamiento en el que se efectuará la descarga de producto *</label>
                            <input class="form-check-input" type="checkbox"  id="energia" checked>
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="suspender">Suspendió el despacho al público de las islas adyacentes al área de descarga *</label>
                            <input class="form-check-input" type="checkbox"  id="suspender" checked>
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="cantidad_antes">Existencia de acuerdo a lo que indica la tirilla o comprobante del sistema de medición antes de la descarga  *</label>
                            <input wire:model="cantidad_antes" type="number" class="form-control" id="cantidad_antes" placeholder="cantidad_antes">@error('cantidad_antes') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="cantidad_despues">Existencia de acuerdo a lo que indica la tirilla o comprobante del sistema de medición después de la descarga</label>
                            <input wire:model="cantidad_despues" type="number" class="form-control" id="cantidad_despues" placeholder="cantidad_despues">@error('cantidad_despues') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="d-flex justify-content-around mt-5">
                            <button class="btn" wire:click.prevent="store()"  style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Guardar
                            </button>

                            <button class="btn"  data-bs-dismiss="modal"  style="background-color:#001d3d;color:  grey!important; border: 2px solid grey!important;">
                                <i class="fa fa-trash" aria-hidden="true"></i> Cancelar
                            </button>
                        </div>
                    </form>
                    </div>


            </div>


            </div>

        </div>
    </div>

</div>
