@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <button class="btn btn-back" type="button">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </button>

                    <h1 class="text-white">Usuario  Edit</h1>

                    <h1 class="text-white">-</h1>

                </div>
            </div>

            <div class="col-12 p-4">
                <form method="POST" action="{{ route('update.usuario', $usuario->id) }}" enctype="multipart/form-data" role="form">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-user icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Nombre</label>
                                <input type="text" class="form-control input-style" id="name" name="name" value="{{$usuario->name}}">
                            </div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-font icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Apellido</label>
                                <input type="text" class="form-control input-style" id="apellido" name="apellido" value="{{$usuario->apellido}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" style="position: relative">
                                <i class="fa fa-envelope icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Correo</label>
                                <input class="form-control input-style"  id="email" name="email" type="text" value="{{$usuario->email}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" style="position: relative">
                                <i class="fa fa-phone icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Telefono</label>
                                <input class="form-control input-style" type="tel" id="telefono" name="telefono"  value="{{$usuario->telefono}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" style="position: relative">
                                <i class="fa fa-street-view icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Puesto</label>
                                <input type="text" class="form-control input-style" id="puesto" name="puesto" value="{{$usuario->puesto}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" placeholder="Contraseña">
                                <i class="fa fa-lock icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Contraseña</label>
                                <input type="password" class="form-control input-style" id="password" name="password" value="{{$usuario->password}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-user icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Empresa</label>
                                    <select class="form-select" aria-label="Default select example" id="id_empresa" name="id_empresa">
                                        @foreach ($empresa as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-font icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Sucursal</label>
                                    <select class="form-select" aria-label="Default select example" id="id_sucursal" name="id_sucursal">
                                            <option value="{{$usuario->id_sucursal}}">Seleccionar en caso de cambiar</option>
                                        @foreach ($sucursal as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button class="btn-saved" type="submit">
                                 <i class="fa fa-save"></i>Actualizar
                            </button>
                        </div>
                    </div>

                </form>
            </div>
</div>


@endsection

