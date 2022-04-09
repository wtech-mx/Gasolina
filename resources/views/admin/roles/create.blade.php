@extends('layouts.app')

@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/forms.css') }}">
@endsection

@section('content')


<div class="box">
    <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h1 class="text-white">Crear nuevo rol</h1>
                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}
                    <a class="btn btn-back" href="#">
                       -
                    </a>

                </div>

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                 @endif
            </div>

                <div class="col-12 ">

                    <div class="row">
                        {!! Form::open(array('route' => 'roles.store','method'=>'POST','style'=>'display: contents;')) !!}
                        @csrf
                            <div class="col-6 p-3">
                                <div class="form-group mb-3">
                                    <i class="fa fa-user icon-style-2"></i>
                                    <label class="form-label label-custom-yellow">Nombre</label>
                                     {!! Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-6 p-3">
                                    <div class="form-group mb-3 text-white">
                                        <i class="fa fa-user icon-style-2"></i> <br>
                                         <label class="form-label label-custom-yellow">Permisos</label> <br>
                                        @foreach($permission as $value)
                                                {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                            {{ $value->name }}
                                        <br/>
                                        @endforeach
                                    </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>

    </div>
</div>
@endsection
