<div class="row text-white">
    <form method="POST" action="{{ route('update_firmas.configuracion') }}" enctype="multipart/form-data" role="form">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="row">
            <div class="form-group cuadrado-2 col-4 mt-4">
                <h3 for="">Tanque 1</h3><br><br>
                <select class="form-select" name="tanque1" id="tanque1">
                    <option value="magna">Magna</option>
                    <option value="premium">Premium</option>
                    <option value="disel">Disel</option>
                </select>
            </div>

            <div class="form-group cuadrado-2 col-4 mt-4">
                <h3 for="">Tanque 2</h3><br><br>
                <select class="form-select" name="tanque1" id="tanque1">
                    <option value="magna">Magna</option>
                    <option value="premium">Premium</option>
                    <option value="disel">Disel</option>
                </select>
            </div>

            <div class="form-group cuadrado-2 col-4 mt-4">
                <h3 for="">Tanque 3</h3><br><br>
                <select class="form-select" name="tanque1" id="tanque1">
                    <option value="magna">Magna</option>
                    <option value="premium">Premium</option>
                    <option value="disel">Disel</option>
                </select>
            </div>
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
