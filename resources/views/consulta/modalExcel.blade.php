<!-- Modal -->
<div wire:ignore.self class="modal fade" id="excelDataModal" tabindex="-1" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 30px;">

           <div class="modal-body" style="border-radius: 30px!important;border: 2px solid #FFC300;background-color: #001d3d;">

                <div class="d-flex justify-content-between">
                    <h5 class="modal-title mb-5 text-white">Descarga de Excel</h5>

                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close" style="background: transparent url({{asset('assets/img/icons/cancel.png') }}) center/1.5em auto no-repeat;">
                    </button>
                </div>
                    <div class="row">

                        {{-- <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Servicio</label><br>
                            <a class="text-white">002-SASISOPA</a>
                        </div> --}}

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Servicio</label><br>
                            <a href="{{ route('consulta.export') }}" class="text-white">003-SGM</a>
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Servicio</label><br>
                            <a href="{{ route('consulta.exportpre') }}" class="text-white">004-PRE</a>
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Servicio</label><br>
                            <a href="{{ route('consulta.exportdiseño') }}" class="text-white">006-Diseño</a>
                        </div>

                        <div class="form-group mt-3 col-6">
                            <label style="color: #FFC300;" for="recibido">Servicio</label><br>
                            <a href="{{ route('consulta.exportnom') }}" class="text-white">007-NOM 05</a>
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
