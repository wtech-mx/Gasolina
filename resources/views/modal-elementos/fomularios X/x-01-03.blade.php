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
                       <i class="fa fa-user icon-style-2 p-1 "></i>Información general
                  </a>
                </li>

                <li class="nav-item p-2" role="presentation">
                  <a class="nav-link a-perso" id="register-passwords" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                      <i class="fa fa-lock icon-style-2 p-1 "></i> Evaluación
                  </a>
                </li>

              </ul>

            <div class="tab-content" id="pills-tabContent">


                    <div class="tab-pane fade show active p-3 row" id="pills-home" role="tabpanel" aria-labelledby="users-registers">
                        <form>
                         <input wire:model="id_user" type="hidden" class="form-control" id="id_user" value="{{auth()->user()->id}}">@error('id_user') <span class="error hidden-danger">{{ $message }}</span> @enderror
                         <input wire:model="cliente" type="hidden" class="form-control" id="cliente" value="324 - PL/20543/EXP/ES/2017 - SAC XIB CHAAC, S.A. DE C.V." disabled>@error('cliente') <span class="error text-danger">{{ $message }}</span> @enderror

                         <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="energia">Fecha y hora entrega*</label>
                            <input class="form-check-input" type="datatime"  id="energia" checked>
                        </div>


                         <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="tanque">Producto</label>
                            @error('tanque') <span class="error text-danger">{{ $message }}</span> @enderror
                            <select wire:model="tanque" class="form-select" aria-label="Default select example" id="tanque">
                                <option selected>Seleccionar producto</option>
                                <option value="1">Gasolina Magna</option>
                                <option value="2">Gasolina Diesel</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="tanque">Nombre a quien se le realizó la evaluación</label>
                            @error('tanque') <span class="error text-danger">{{ $message }}</span> @enderror
                            <select wire:model="tanque" class="form-select" aria-label="Default select example" id="tanque">
                                <option selected>Seleccionar producto</option>
                                <option value="1">Usuario 1</option>
                                <option value="2">Usuario 2</option>
                                <option value="3">Usuario 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="tab-pane fade p-3 row" id="pills-profile" role="tabpanel" aria-labelledby="register-passwords">

                        <table class="table" id="table_id3" >
                            <thead class="text-white">
                            <tr>
                                <th scope="col">Tanque</th>
                                <th scope="col">Recibido</th>
                                <th scope="col">Salida</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody class="text-white">
                                @foreach ($ejecutar as $item)
                                <tr>
                                    <td>
                                        @switch($item)
                                            @case($item->tanque == '1')
                                                TAS011-TAS001-Tanque de almacenamiento...
                                            @break;

                                            @case($item->tanque == '2')
                                                TAS012-TAS001-Tanque de almacenamiento...
                                            @break;

                                            @case($item->tanque == '3')
                                                TAS013-TAS001-Tanque de almacenamiento...
                                            @break;

                                        @endswitch
                                    </td>

                                    <td>{{$item->recibido}}</td>
                                    <td>{{$item->salida}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="" style="color: #ffffff;font-size: 16px;padding: 5px;">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>

                                            <a href="{{route('print.ejecutar', $item->id)}}" style="color: #ffffff;font-size: 16px;padding: 5px">
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

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
