<form method="POST" action="{{ route('update.empresa', $empresa->id) }}" enctype="multipart/form-data" role="form">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$empresa->name}}">
      </div>
    <div class="mb-3">
      <label class="form-label">Correo</label>
      <input type="email" class="form-control" id="email" name="email" value="{{$empresa->email}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" value="{{$empresa->password}}">
    </div>
    <div class="mb-3">
        <label class="form-label">RFC</label>
        <input type="text" class="form-control" id="rfc" name="rfc" value="{{$empresa->rfc}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Entidad</label>
        <input type="text" class="form-control" id="entidad" name="entidad" value="{{$empresa->entidad}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Calle</label>
        <input type="text" class="form-control" id="calle" name="calle" value="{{$empresa->calle}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Codigo postal</label>
        <input type="text" class="form-control" id="cp" name="cp" value="{{$empresa->cp}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{$empresa->ciudad}}">
      </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
