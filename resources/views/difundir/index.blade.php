@extends('layouts.app')

    @section('content')
        <div class="box">
            <div class="row">

                <div class="col-12 mt-3">
                    <div class="d-flex justify-content-between p-3">

                        <a href="javascript:history.back()" class="btn btn-back">
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
                    <div class="col-12 p-4">
                        <div class="table-responsive" style="overflow: hidden;">

                            <table class="table display" id="table_id" >
                                <thead class="text-white">
                                    <tr>
                                        <td>#</td>
                                    <th>Solicita</th>
                                    <th>Elemento</th>
                                    <th>Fecha</th>
                                    <th>Descripcion</th>
                                    <th>Tipo</th>
                                    <th>Inicial</th>
                                    <th>Final</th>
                                    <th></th>
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
                                    <td>{{ $row->tipo }}</td>
                                    <td>{{ $row->inicial }}</td>
                                    <td>{{ $row->final }}</td>

                                        <td >
                                            <a  data-bs-toggle="modal" data-bs-target="#updateModal{{$row->id}}" style="color: #ffffff;font-size: 16px;padding: 5px;">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>

                                            <a onclick="confirm('Confirm Delete Difusion id {{$row->id}}? \nDeleted Difusions cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})" style="color: #ffffff;font-size: 16px;padding: 5px;">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @include('difundir.update')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

            </div>
        </div>
    @endsection
