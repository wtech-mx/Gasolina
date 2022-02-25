<div class="row">
    <div class="col-sm-12 col-12 text-left">
      <label class="" for="inlineFormInputGroup">Fecha</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">
              <i class="fa fa-calendar" style="font-size: 150%;}"></i>
          </div>
        </div>
        <input type="date" class="form-control" name="start" id="start" value="{{$fecha}}">
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
