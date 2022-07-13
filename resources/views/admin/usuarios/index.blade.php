@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h1 class="text-white">Usuario</h1>

                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                    <a class="btn btn-back" href="  {{ route('create.usuario') }}">
                        <i class="fa fa-plus btn-icon-back"></i>
                    </a>

                </div>
            </div>

            <div class="col-12 p-4">
                <table class="table display" id="table_id" >
                    <thead class="text-white">
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">telefono</th>
                        <th scope="col">puesto</th>
                        <th scope="col">alta</th>
                        <th scope="col">email</th>
                      </tr>
                    </thead>
                    <tbody class="text-white">
                        @foreach ($users as $item)
                         <tr>
                            <td><a style="text-decoration: none;"
                                href="{{ route('edit.usuario', $item->id) }}">{{$item->name}}</a>
                            </td>
                            <td>{{$item->telefono}}</td>
                            <td>{{$item->puesto}}</td>
                            <td>{{$item->alta}}</td>
                            <td>{{$item->email}}</td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
</div>

@endsection
