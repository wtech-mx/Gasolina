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

                    <h1 class="text-white">-</h1>

                </div>
            </div>

            <div class="col-12 p-4">
                <form method="POST" action="{{ route('update.empresa', $empresa->id) }}" enctype="multipart/form-data" role="form">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-user icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Nombre</label>
                                <input type="text" class="form-control input-style" id="name" name="name" value="{{$empresa->name}}">
                            </div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-font icon-style-2"></i>
                                <label class="form-label label-custom-yellow">RFC</label>
                                <input type="text" class="form-control input-style" id="rfc" name="rfc" value="{{$empresa->rfc}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" style="position: relative">
                                <i class="fa fa-envelope icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Correo</label>
                                <input class="form-control input-style"  id="email" name="email" type="text" value="{{$empresa->email}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" style="position: relative">
                                <i class="fa fa-street-view icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Calle</label>
                                <input type="text" class="form-control input-style" id="calle" name="calle" value="{{$empresa->calle}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-user icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Entidad</label>
                                <input type="text" class="form-control input-style" id="entidad" name="entidad" value="{{$empresa->entidad}}">
                            </div>
                        </div>

                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-font icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Ciudad</label>
                                <input type="text" class="form-control input-style" id="ciudad" name="ciudad" value="{{$empresa->ciudad}}">
                            </div>
                        </div>

                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-font icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Codigo Postal</label>
                                <input type="text" class="form-control input-style" id="cp" name="cp" value="{{$empresa->cp}}">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" >
                                <i class="fa fa-lock icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Contraseña</label>
                                <input type="password" class="form-control input-style" id="password" name="password" value="{{$empresa->password}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button class="btn-saved" type="submit">
                                 <i class="fa fa-save"></i>Guardar
                            </button>
                        </div>
                    </div>

                </form>
            </div>
</div>

@endsection
