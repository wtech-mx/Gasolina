<!-- Modal -->
<div wire:ignore.self class="modal fade" id="showDataModal-{{$row->id}}" tabindex="-1" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 30px;">

           <div class="modal-body" style="border-radius: 30px!important;border: 2px solid #FFC300;background-color: #001d3d;">

                <div class="d-flex justify-content-between">
                    <h5 class="modal-title mb-5 text-white">Información General</h5>

                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close" style="background: transparent url({{asset('assets/img/icons/cancel.png') }}) center/1.5em auto no-repeat;">
                    </button>
                </div>

                    <div class="row">

                        <div class="form-group mt-3">
                            <label style="color: #FFC300;" for="recibido">Regla y procedimiento</label>
                            <p class="text-white">{{$row->regla}}</p>
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Nombre del cliente</label>
                            <p class="text-white">SAC XIB CHAAC, S.A. DE C.V.</p>
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Tipo</label>
                            <p class="text-white">{{$row->tipo}}</p>
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Revision</label>
                            <p class="text-white">{{$row->revision}}</p>
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Fecha aprobación</label>
                            <p class="text-white">{{$row->aprobacion}}</p>
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Puestos</label>
                            <p class="text-white">Auxiliar administrativo. Gerente.</p>
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Responsables</label>
                            <p class="text-white">LIGIA ARELI KU CARDEÑA; YENSI KARINA AYIL GARRIDO</p>
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Servicio</label>
                            <p class="text-white">{{$row->servicio}}</p>
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Fecha</label>
                            <p class="text-white">{{$row->fecha}}</p>
                        </div>

                    </div>

                <div class="d-flex justify-content-around mt-5">

                    <button class="btn"  data-bs-dismiss="modal"  style="background-color:#001d3d;color:  grey!important; border: 2px solid grey!important;">
                        <i class="fa fa-trash" aria-hidden="true"></i> Cerrar
                    </button>

                </div>

            </div>


        </div>
    </div>
</div>
