<div class="row text-white">
    <form method="POST" action="{{ route('update_firmas.configuracion') }}" enctype="multipart/form-data" role="form">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group col-12 mt-4">
            <h3 for="">Encargado de la estación</h3><br><br>
            <label for="">Nombre</label>
            <input type="text" class="form-control" value="{{$config->name1}}" name="name1" id="name1"><br>
            <label for="">Firma</label>
            <input type="file" id="firma1" class="form-control" name="firma1">
            <img src="{{asset('firmas/'.$config->firma1)}}" alt="">
        </div>

        <div class="form-group col-12 mt-4">
            <h3 for="">Encargado Tecnico</h3><br><br>
            <label for="">Nombre</label>
            <input type="text" class="form-control" value="{{$config->name2}}" name="name2" id="name2"><br>
            <label for="">Firma</label>
            <input type="file" id="firma2" class="form-control" name="firma2">
            <img src="{{asset('firmas/'.$config->firma2)}}" alt="">
        </div>

        <div class="form-group col-12 mt-4">
            <h3 for="">Representante legal</h3><br><br>
            <label for="">Nombre</label>
            <input type="text" class="form-control" value="{{$config->name3}}" name="name3" id="name3"><br>
            <label for="">Firma</label>
            <input type="file" id="firma3" class="form-control" name="firma3">
            <img src="{{asset('firmas/'.$config->firma3)}}" alt="">
        </div>

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
