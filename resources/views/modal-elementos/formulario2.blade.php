<div class="row">
    <div class="col-sm-6 col-6 text-left">
      <label class="" for="inlineFormInputGroup">Fecha Inicio</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">
              <i class="fa fa-calendar-plus-o" style="font-size: 150%;}"></i>
          </div>
        </div>
        <input type="date" class="form-control" name="start" id="start" value="{{$fecha}}">
      </div>
    </div>

    <div class="col-sm-6 col-6 text-left">
      <label class="" for="inlineFormInputGroup">Fecha Fin</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">
              <i class="fa fa-calendar-check-o" style="font-size: 150%;}"></i>
          </div>
        </div>
        <select class="form-select" aria-label="Default select example" name="end" id="end">
            <option selected>Selecciona fin</option>
            <option value="1">Mensual</option>
            <option value="2">Semestral</option>
            <option value="3">Anual</option>
        </select>
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
