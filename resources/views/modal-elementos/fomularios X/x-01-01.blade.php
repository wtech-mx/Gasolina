<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item p-2">
        <a class="nav-link  active show" id="users-registers" data-bs-toggle="pill" data-bs-target="#pills-tanque" type="button" role="tab" aria-controls="pills-tanque" aria-selected="true">
            <i class="fa fa-filter icon-style-2 p-1 "></i>Tanque
        </a>
    </li>

    <li class="nav-item p-2">
        <a class="nav-link " id="register-passwords" data-bs-toggle="pill" data-bs-target="#pills-medicion" type="button" role="tab" aria-controls="pills-medicion" aria-selected="false">
            <i class="fa fa-tachometer icon-style-2 p-1 "></i> Medición
        </a>
    </li>
</ul>

<div class="tab-content" id="pills-tabContent">

    <div class="tab-pane fade show active p-3 row" id="pills-tanque" role="tabpanel" aria-labelledby="users-registers">
            <form method="POST" action="{{ route('xelemento.store') }}" enctype="multipart/form-data" role="form">
                @csrf

                <input type="hidden" class="form-control" id="cliente" name="cliente" value="324 - PL/20543/EXP/ES/2017 - SAC XIB CHAAC, S.A. DE C.V.">
                <input type="hidden" class="form-control" id="elemento" name="elemento" value="x-01-01">
                <input type="hidden" class="form-control" id="estado" name="estado" value="1">

                        <div class="row">
                            <div class="form-group mt-3">
                                <label style="color: #ffff;" for="tanque">Tanque</label>
                                @error('tanque') <span class="error text-danger">{{ $message }}</span> @enderror
                                <select name="tanque" class="form-select" aria-label="Default select example" id="tanque">
                                    <option selected>Seleccionar Tanque</option>
                                    <option value="1">TAS011-TAS001-Tanque de almacenamiento subterráneo. - MAGNA 1</option>
                                    <option value="2">TAS012-TAS001-Tanque de almacenamiento subterráneo. - MAGNA 2</option>
                                    <option value="3">TAS013-TAS001-Tanque de almacenamiento subterráneo. - DIESEL</option>
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label style="color: #ffff;" for="recibido">Recibido</label>
                                <input name="recibido" type="datetime-local" class="form-control" id="recibido" placeholder="Recibido">@error('recibido') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label style="color: #ffff;" for="salida">Salida</label>
                                <input name="salida" type="time" class="form-control" id="salida" placeholder="Salida">@error('salida') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group mt-3 col-6">
                                <label style="color: #ffff;" for="operador">Operador</label>
                                <input name="operador" type="text" class="form-control" id="operador" placeholder="Operador">@error('operador') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group mt-3 col-6">
                                <label style="color: #ffff;" for="identificacion">Identificacion</label>
                                <input name="identificacion" type="text" class="form-control" id="identificacion" placeholder="Identificacion">@error('identificacion') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label style="color: #ffff;" for="producto">Seleccionar Producto</label>
                                @error('producto') <span class="error text-danger">{{ $message }}</span> @enderror
                                <select name="producto" class="form-select" aria-label="Default select example" id="producto">
                                    <option selected>Seleccionar Producto</option>
                                    <option value="1">TAS011</option>
                                    <option value="2">TAS012</option>
                                    <option value="3">TAS013</option>
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label style="color: #ffff;" for="nota">Nota</label>
                                <input name="nota" type="text" class="form-control" id="nota" placeholder="nota">@error('nota') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label style="color: #ffff;" for="cantidad">Cantidad</label>
                                <input name="cantidad" type="text" class="form-control" id="cantidad" placeholder="cantidad">@error('cantidad') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group mt-3 col-6">
                                <label style="color: #ffff;" for="remision">Remision</label>
                                <input name="remision" type="file" class="form-control" id="remision" placeholder="Remision">@error('remision') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group mt-3 col-6">
                                <label style="color: #ffff;" for="factura">Factura</label>
                                <input name="factura" type="file" class="form-control" id="factura" placeholder="Factura">@error('factura') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade p-3 row" id="pills-medicion" role="tabpanel" aria-labelledby="register-passwords">
                        <div class="form-group mt-3">
                            <label style="color: #ffff;" for="producto_tanqute">Producto que indica la trillada o comprobante del sistema de medicion</label>
                            @error('producto_tanqute') <span class="error text-danger">{{ $message }}</span> @enderror
                            <select name="producto_tanqute" class="form-select" aria-label="Default select example" id="producto_tanqute">
                                <option selected>Seleccionar Gasolina</option>
                                <option value="Gasolina Magna">Gasolina Magna</option>
                                <option value="Gasolina Premium">Gasolina Premium</option>
                                <option value="Magna Diesel">Magna Diesel</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: #ffff;" for="energia">Cortó el suministro de energía eléctrica de la bomba sumergible del tanque de almacenamiento en el que se efectuará la descarga de producto *</label>
                            <input class="form-check-input" type="checkbox"  id="energia" name="energia" value="1" checked>
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: #ffff;" for="suspender">Suspendió el despacho al público de las islas adyacentes al área de descarga *</label>
                            <input class="form-check-input" type="checkbox"  id="suspender" name="suspender" value="1" checked>
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: #ffff;" for="cantidad_antes">Existencia de acuerdo a lo que indica la tirilla o comprobante del sistema de medición antes de la descarga  *</label>
                            <input name="cantidad_antes" type="number" class="form-control" id="cantidad_antes" placeholder="cantidad_antes">@error('cantidad_antes') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: #ffff;" for="cantidad_despues">Existencia de acuerdo a lo que indica la tirilla o comprobante del sistema de medición después de la descarga</label>
                            <input name="cantidad_despues" type="number" class="form-control" id="cantidad_despues" placeholder="cantidad_despues">@error('cantidad_despues') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="d-flex justify-content-around mt-5">
                            <button class="btn" type="submit" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Guardar
                            </button>
                        </div>
            </form>
        </div>
</div>

