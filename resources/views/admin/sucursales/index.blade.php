<a class="btn" href="{{ route('create.sucursal') }}">
    <h5>
        Agregar
    </h5>
</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($sucursal_admin as $item)
         <tr>
            <td><a style="text-decoration: none;"
                href="{{ route('edit.sucursal', $item->id) }}">{{$item->name}}</a>
            </td>
            <td>{{$item->email}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
