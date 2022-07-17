@extends('layouts.app')

@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/custom_table.css') }}">
@endsection

@section('content')

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

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="box">
                        <div class="row">

                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-between p-3">

                                    <a href="javascript:history.back()" class="btn btn-back">
                                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                                    </a >

                                    <h1 class="text-white">Sucursal</h1>

                                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                                    <a class="btn btn-back" href="  {{ route('create.sucursal') }}">
                                        <i class="fa fa-plus btn-icon-back"></i>
                                    </a>

                                </div>
                            </div>

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
                </div>
            </div>
        </div>
    </div>

@endsection
