<div class="row">
      <div class="col-sm-6 col-12 text-left">
        <label class="" for="inlineFormInputGroup">Selecciona el dia</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-calendar-plus-o" style="font-size: 150%;}"></i>
            </div>
          </div>
          <input type="number" class="form-control" name="start" id="start" value="{{$fecha}}">
        </div>
      </div>
      <input type="hidden" class="form-control" name="end" id="end" value="{{$fecha}}">
</div>

<div class="row">
    <div class="col-sm-6 col-6 text-left">
        <label class="" for="inlineFormInputGroup">Elije a partir de que mes</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-calendar-plus-o" style="font-size: 150%;}"></i>
            </div>
          </div>
            <select class="form-select" aria-label="Default select example" name="mes" id="mes">
                <option selected>Selecciona mes</option>
                <option value="01">Enero</option>
                <option value="02">Febrero</option>
                <option value="03">Marzo</option>
                <option value="04">Abril</option>
                <option value="05">Mayo</option>
                <option value="06">Junio</option>
                <option value="07">Julio</option>
                <option value="08">Agosto</option>
                <option value="09">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select>
        </div>
      </div>

    <div class="col-sm-6 col-6 text-left">
      <label class="" for="inlineFormInputGroup">No Meses para repetir la actividad</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">
              <i class="fa fa-calendar-check-o" style="font-size: 150%;"></i>
          </div>
        </div>
        <input type="number" class="form-control" name="num_veces" id="num_veces" value="">
      </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-12 text-left">
      <label class="" for="inlineFormInputGroup">Descripcion</label>
      <div class="input-group mb-2">
          <textarea name="descripcion" id="descripcion" cols="100" rows="5"></textarea>
      </div>
    </div>
</div>
<div class="d-flex justify-content-center">
  <button class="mt-2 btn-sinestilo" type="submit">
      <div class="button_n">
          <div class="icon_n">
              <i class="fa fa-floppy-o"></i>
          </div>
      </div>
  </button>
</div>
