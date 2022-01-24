<form method="POST" action="{{ route('store.empresa') }}" enctype="multipart/form-data" role="form">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
    <div class="mb-3">
      <label class="form-label">Correo</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label class="form-label">RFC</label>
        <input type="text" class="form-control" id="rfc" name="rfc">
      </div>
      <div class="mb-3">
        <label class="form-label">Entidad</label>
        <input type="text" class="form-control" id="entidad" name="entidad">
      </div>
      <div class="mb-3">
        <label class="form-label">Calle</label>
        <input type="text" class="form-control" id="calle" name="calle">
      </div>
      <div class="mb-3">
        <label class="form-label">Codigo postal</label>
        <input type="text" class="form-control" id="cp" name="cp">
      </div>
      <div class="mb-3">
        <label class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="ciudad" name="ciudad">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
