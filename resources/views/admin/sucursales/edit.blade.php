<form method="POST" action="{{ route('update.sucursal', $sucursal->id) }}" enctype="multipart/form-data" role="form">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$sucursal->name}}">
      </div>
    <div class="mb-3">
      <label class="form-label">Correo</label>
      <input type="email" class="form-control" id="email" name="email" value="{{$sucursal->email}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" value="{{$sucursal->password}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Empresa</label>
        <select class="form-select" aria-label="Default select example">
            <option value="{{$sucursal->id_empresa}}">Seleccionar en caso de cambiar</option>
            @foreach ($empresas as $item)
                <option value="{{$sucursal->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
