@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <button class="btn btn-back" type="button">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </button>

                    <h1 class="text-white">Pagina</h1>

                    <a class="btn btn-back" href="{{ route('create.sucursal') }}">
                        <i class="fa fa-plus btn-icon-back"></i>
                    </a>

                </div>
            </div>

            <div class="col-12 p-4">
                <table class="table" id="table_id" >
                    <thead class="text-white">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                    </tr>
                    </thead>
                    <tbody class="text-white">
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
            </div>
        </div>

@endsection
