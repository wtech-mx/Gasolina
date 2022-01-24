<a class="btn" href="{{ route('create.empresa') }}">
    <h5>
        Agregar
    </h5>
</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Entidad</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($empresa as $item)
         <tr>
            <td><a style="text-decoration: none;"
                href="{{ route('edit.empresa', $item->id) }}">{{$item->name}}</a>
            </td>
            <td>{{$item->email}}</td>
            <td>{{$item->entidad}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
