<form method="POST" action="{{ route('update.usuario', $usuario->id) }}" enctype="multipart/form-data" role="form">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$usuario->name}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" value="{{$usuario->apellido}}">
      </div>
    <div class="mb-3">
      <label class="form-label">Correo</label>
      <input type="email" class="form-control" id="email" name="email" value="{{$usuario->email}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input type="number" class="form-control" id="telefono" name="telefono" value="{{$usuario->telefono}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Puesto</label>
        <input type="text" class="form-control" id="puesto" name="puesto" value="{{$usuario->puesto}}">
      </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" value="{{$usuario->password}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Empresa</label>
        <select class="form-select" aria-label="Default select example" id="id_empresa" name="id_empresa">
            <option value="{{$usuario->id_empresa}}">Seleccionar en caso de cambiar</option>
            @foreach ($empresa as $item)
                <option value="{{$item->id}}">{{$item->id}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Sucursal</label>
        <select class="form-select" aria-label="Default select example" id="id_sucursal" name="id_sucursal">
            <option value="{{$usuario->id_sucursal}}">Seleccionar en caso de cambiar</option>
            @foreach ($sucursal as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
