@extends('layouts.app')

@section('content')

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

@endsection
