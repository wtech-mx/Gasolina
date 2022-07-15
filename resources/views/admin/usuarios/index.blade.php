@extends('layouts.app')
@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/custom_table.css') }}">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container-fluid">
                <style>
                    div.dataTables_wrapper div.dataTables_length label{
                        color: #fff;
                    }
                    div.dataTables_wrapper div.dataTables_info{
                        color: #fff;
                    }
                    div.dataTables_wrapper div.dataTables_filter label{
                        color: #fff;
                    }
                </style>
                <div class="box">

                        <div class="row">

                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-between p-3">

                                    <a href="{{ route('home') }}" class="btn btn-back">
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
                                        <th scope="col">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        @foreach ($users as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->telefono}}</td>
                                            <td>{{$item->puesto}}</td>
                                            <td>{{$item->alta}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>
                                                <a href="{{ route('edit.usuario', $item->id) }}" style="color: #ffffff;font-size: 16px;padding: 5px;">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
