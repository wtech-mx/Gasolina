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
                    <div class="row">

                        <div class="col-12 mt-3">
                            <div class="d-flex justify-content-between p-3">

                                <a href="{{ route('home') }}" class="btn btn-back">
                                    <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                                </a >

                                <h1 class="text-white">Difundir</h1>

                                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                                <a type="button" class="btn btn-back" data-bs-toggle="modal" data-bs-target="#exampleModalDifundir">
                                    <i class="fa fa-plus btn-icon-back"></i>
                                </a>

                            </div>
                        </div>
                        @include('difundir.create')
                        <style>
                            .dropdown-item:focus, .dropdown-item:hover{
                                background: transparent;
                            }
                        </style>

                            <div class="col-12">
                                <div class="table-responsive" style="overflow: hidden;">

                                    <table class="table display" id="table_id" >
                                        <thead class="text-white">
                                            <tr>
                                            <td>#</td>
                                            <th>Solicita</th>
                                            <th>Elemento</th>
                                            <th>Fecha</th>
                                            <th>Descripcion</th>
                                            <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-white">
                                            @foreach($difundirs as $row)
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->user->name }}</td>
                                            <td>{{ $row->id_elemento }}</td>
                                            <td>{{ $row->fecha }}</td>
                                            <td>{{ $row->descripcion }}</td>

                                                <td >
                                                    <a  data-bs-toggle="modal" data-bs-target="#updateModal{{$row->id}}" style="color: #ffffff;font-size: 16px;padding: 5px;">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>

                                                    <a class="btn" target="_blank" href="{{route('formato_difusion.view', $row->id)}}">
                                                        <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: #ffffff;font-size: 16px;padding: 5px;"></i>
                                                    </a>

                                                    <a type="button" class="text-white" data-bs-toggle="modal" data-bs-target="#modaleliminar{{ $row->id }}">
                                                        <i class="fa fa-trash" style="color: #ffffff;font-size: 16px;padding: 5px;"></i>
                                                    </a>

                                                </td>
                                            </tr>
                                            @include('difundir.update')
                                            @include('difundir.eliminar')
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
