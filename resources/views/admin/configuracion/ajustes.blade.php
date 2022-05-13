<div class="text-white">
    <form method="POST" action="{{ route('update_ajustes.configuracion') }}" enctype="multipart/form-data" role="form">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="row">
            <div class="form-group col-6 col-xs-6 col-sm-6 col-md-2 mt-4">
                <label for="">Color Diaria</label>
                <input type="color" class="form-control" value="{{$config->color_diaria}}" name="color_diaria" id="color_diaria"><br>
            </div>

            <div class="form-group col-6 col-xs-6 col-sm-6 col-md-2 mt-4">
                <label for="">Color Mensual</label>
                <input type="color" class="form-control" value="{{$config->color_mensual}}" name="color_mensual" id="color_mensual"><br>
            </div>

            <div class="form-group col-6 col-xs-6 col-sm-6 col-md-2 mt-4">
                <label for="">Color Semestral</label>
                <input type="color" class="form-control" value="{{$config->color_semestral}}" name="color_semestral" id="color_semestral"><br>
            </div>

            <div class="form-group col-6 col-xs-6 col-sm-6 col-md-2 mt-4">
                <label for="">Color Anual</label>
                <input type="color" class="form-control" value="{{$config->color_año}}" name="color_año" id="color_año"><br>
            </div>

            <div class="form-group col-6 col-xs-6 col-sm-6 col-md-2 mt-4">
                <label for="">Color no realizada</label>
                <input type="color" class="form-control" value="{{$config->color_no_realizada}}" name="color_no_realizada" id="color_no_realizada"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                  <button class="mt-5 mb-5 btn-sinestilo" type="submit">
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
