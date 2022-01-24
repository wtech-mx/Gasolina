<form method="POST" action="{{ route('store.sucursal') }}" enctype="multipart/form-data" role="form">
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
        <label class="form-label">Empresa</label>
        <select class="form-select" aria-label="Default select example">
            @foreach ($empresa as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
