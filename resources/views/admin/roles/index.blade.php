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

                                    <h1 class="text-white">Roles</h1>

                                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}
                                    @can('role-create')

                                    <a class="btn btn-back" href="{{ route('roles.create') }}">
                                        <i class="fa fa-plus btn-icon-back"></i>
                                    </a>
                                    @endif

                                </div>
                            </div>

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <div class="col-12 p-4">
                                <table class="table" id="table_id" >
                                    <thead class="text-white">
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Empresa</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        @foreach ($roles as $key => $role)
                                        <tr>
                                            <td>{{$role->id}}</td>

                                            <td>{{$role->name}}</td>

                                            <td>
                                                @can('role-edit')
                                                <a style="text-decoration: none;"href="{{ route('roles.edit',$role->id) }}">
                                                    <i class="fa fa-pencil-square-o text-white" aria-hidden="true"></i>
                                                </a>
                                                @endcan
                                                @can('role-delete')
                                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                @endcan
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
</div>

@endsection
