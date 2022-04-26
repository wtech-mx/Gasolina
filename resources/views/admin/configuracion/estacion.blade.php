<div class="row text-white">
    <form method="POST" action="{{ route('update_estacion.configuracion') }}" enctype="multipart/form-data" role="form">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="row">
            <div class="form-group col-4 mt-4">
                <h3 class="cuadrado-2" for="">Tanque 1</h3><br><br>
                <select class="form-select" name="tanque1" id="tanque1">
                    <option value="{{$config->tanque1}}">{{$config->tanque1}}</option>
                    <option value="magna">Magna</option>
                    <option value="premium">Premium</option>
                    <option value="disel">Disel</option>
                </select>
            </div>

            <div class="form-group col-4 mt-4">
                <h3 class="cuadrado-2" for="">Tanque 2</h3><br><br>
                <select class="form-select" name="tanque2" id="tanque2">
                    <option value="{{$config->tanque2}}">{{$config->tanque2}}</option>
                    <option value="magna">Magna</option>
                    <option value="premium">Premium</option>
                    <option value="disel">Disel</option>
                </select>
            </div>

            <div class="form-group col-4 mt-4">
                <h3 class="cuadrado-2" for="">Tanque 3</h3><br><br>
                <select class="form-select" name="tanque3" id="tanque3">
                    <option value="{{$config->tanque3}}">{{$config->tanque3}}</option>
                    <option value="magna">Magna</option>
                    <option value="premium">Premium</option>
                    <option value="disel">Disel</option>
                </select>
            </div>
        </div>
        <div class="row">
            @php
                $count = 0;
            @endphp
            @foreach ($dispensario as $item)
            @php
                $count ++;
            @endphp
                <div class="form-group col-6 mt-4">
                    @if ($item->estatus == 1)
                        <input class="form-check-input" type="checkbox" value="1" id="estatus" name="estatus" checked>
                    @else
                        <input class="form-check-input" type="checkbox" value="0" id="estatus" name="estatus">
                    @endif
                    <label for="">Dispensador {{$count}}</label>
                    <label for="">Pistola 1</label>
                    <select class="form-select" name="pistola1" id="pistola1">
                        <option value="{{$item->pistola1}}">{{$item->pistola1}}</option>
                        <option value="magna">Magna</option>
                        <option value="premium">Premium</option>
                        <option value="disel">Disel</option>
                    </select>
                    <label for="">Pistola 2</label>
                    <select class="form-select" name="pistola2" id="pistola2">
                        <option value="{{$item->pistola2}}">{{$item->pistola2}}</option>
                        <option value="magna">Magna</option>
                        <option value="premium">Premium</option>
                        <option value="disel">Disel</option>
                    </select>
                    <label for="">Pistola 3</label>
                    <select class="form-select" name="pistola3" id="pistola3">
                        <option value="{{$item->pistola3}}">{{$item->pistola3}}</option>
                        <option value="magna">Magna</option>
                        <option value="premium">Premium</option>
                        <option value="disel">Disel</option>
                    </select>
                </div>
            @endforeach
        </div>

        <div class="form-group mt-5">
            <input type="button" class="proveedor3" id="proveedor3" value="Agregar Dispensario" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
        </div>
        <div class="row" id="nuevo-form3"></div>


        <div class="row">
            <div class="col-12 text-center">
                  <button class="mt-5 btn-sinestilo" type="submit">
                      <div class="button">
                          <div class="icon">
                              <i class="fa fa-floppy-o"></i>
                          </div>
                      </div>
                  </button>
            </div>
        </div>
    </form>
</div>
