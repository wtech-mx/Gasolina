<a class="btn" href="{{ route('create.usuario') }}">
    <h5>
        Agregar
    </h5>
</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Empresa</th>
        <th scope="col">Sucursal</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
         <tr>
            <td><a style="text-decoration: none;"
                href="{{ route('edit.usuario', $item->id) }}">{{$item->name}}</a>
            </td>
            <td>{{$item->UserEmpresa->name}}</td>
            <td>{{$item->UserSucursal->name}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
