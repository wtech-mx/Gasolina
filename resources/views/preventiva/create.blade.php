@php
    $url = $_SERVER['REQUEST_URI'];
    if ($url == '/preventiva/i-01-01') {
        $rest = substr($url, -7);
    }elseif ($url == '/preventiva/ii-01-01') {
        $rest = substr($url, -9);
    }elseif ($url == '/preventiva/iii-01-01') {
        $rest = substr($url, -9);
    }elseif ($url == '/preventiva/iv-01-01') {
        $rest = substr($url, -9);
    }elseif ($url == '/preventiva/v-01-01') {
        $rest = substr($url, -9);
    }else {
        $rest = substr($url, -7);
    }
@endphp
<!-- Modal -->
<div class="modal fade" id="exampleModalDifundir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 30px;">

           <div class="modal-body" style="border-radius: 30px!important;border: 2px solid #FFC300;background-color: #001d3d;">

               <div class="d-flex justify-content-between">
                   <h5 class="modal-title mb-5 text-white">Accion Correctiva {{$rest}}</h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close" style="background: transparent url({{asset('assets/img/icons/cancel.png') }}) center/1.5em auto no-repeat;">
                    </button>
               </div>
            <form method="POST" action="{{ route('preventiva.store') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="form-group">
                    <input type="hidden" class="form-control" id="elemento" name="elemento" value="{{$rest}}">
                </div>

                <div class="form-group text-white">
                    <label for="cliente">Cliente</label>
                    <p>324 - PL/20543/EXP/ES/2017 - SAC XIB CHAAC, S.A. DE C.V.</p>
                </div>
                <div class="form-group text-white">
                    <label for="tipo">Tipo de accion</label>
                    <p>Correctiva</p>
                </div>
                <div class="form-group text-white">
                    <label for="tipo">Fuente de hallazgo / oportunidad de mejora</label>
                    <p>Formato de registro.</p>
                </div>
                <div class="form-group text-white">
                    <label for="tipo">Especifique</label>
                    <p>X-01-01 Cédula para identificar el producto que será descargado.</p>
                </div>

                <div class="form-group text-white">
                    <label for="descripcion">Descripcion</label>
                    <input name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion">
                </div>

                <div class="form-group text-white">
                    <label for="estatus">Estatus</label>
                    <input type="text" class="form-control" id="estatus" name="estatus">
                </div>
                <div class="form-group text-white">
                    <h4 for="solicitud">Solicitante</h4>
                </div>

                <div class="form-group text-white">
                    <label for="nombre">Nombre</label>
                    <select name="id_user" class="form-control" id="id_user">
                            <option value="">Nombre usuario</option>
                            @foreach ($users as $item)
                                <option value="{{$item->id}}">{{$item->name}}{{ $item->apellido}}</option>
                            @endforeach
                        </select>
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

