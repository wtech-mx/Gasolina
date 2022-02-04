@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            @extends('layouts.bradgrum')
            @section('title', 'Usuario')
            @section('ruta')
            {{ route('create.usuario') }}
            @endsection
            @section('icon', 'fa-plus')

            <div class="col-12 p-4">
                <table class="table display" id="table_id" >
                    <thead class="text-white">
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Sucursal</th>
                      </tr>
                    </thead>
                    <tbody class="text-white">
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
            </div>
</div>

@endsection
