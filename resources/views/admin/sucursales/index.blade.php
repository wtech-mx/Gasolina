@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            @extends('layouts.bradgrum')
            @section('title', 'Sucursal')
            @section('ruta')
            {{ route('create.sucursal') }}
            @endsection
            @section('icon', 'fa-plus')

            <div class="col-12 p-4">
                <table class="table" id="table_id" >
                    <thead class="text-white">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Empresa</th>
                    </tr>
                    </thead>
                    <tbody class="text-white">
                        @foreach ($sucursal_admin as $item)
                        <tr>
                            <td><a style="text-decoration: none;"
                                href="{{ route('edit.sucursal', $item->id) }}">{{$item->name}}</a>
                            </td>
                            <td>{{$item->UserEmpresa->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection
