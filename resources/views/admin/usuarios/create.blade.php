<form method="POST" action="{{ route('store.usuario') }}" enctype="multipart/form-data" role="form">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="mb-3">
        <label class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido">
      </div>
    <div class="mb-3">
      <label class="form-label">Correo</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input type="number" class="form-control" id="telefono" name="telefono">
      </div>
      <div class="mb-3">
        <label class="form-label">Puesto</label>
        <input type="text" class="form-control" id="puesto" name="puesto">
      </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label class="form-label">Empresa</label>
        <select class="form-select" aria-label="Default select example" id="id_empresa" name="id_empresa">
            @foreach ($empresa as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Sucursal</label>
        <select class="form-select" aria-label="Default select example" id="id_sucursal" name="id_sucursal">
            @foreach ($sucursal as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
