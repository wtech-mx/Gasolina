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

                    <h1 class="text-white">Crear Empresa</h1>

                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                    <a class="btn btn-back" href="#">
                        <i class="fa fa-pencil btn-icon-back"></i>
                    </a>

                </div>
            </div>

            <div class="col-12 p-4">
                <form method="POST" action="{{ route('store.empresa') }}" enctype="multipart/form-data" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-user icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Nombre</label>
                                <input type="text" class="form-control input-style" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-font icon-style-2"></i>
                                <label class="form-label label-custom-yellow">RFC</label>
                                <input type="text" class="form-control input-style" id="rfc" name="rfc" placeholder="RFC" value="{{ old('rfc') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" style="position: relative">
                                <i class="fa fa-envelope icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Correo</label>
                                <input class="form-control input-style"  id="email" name="email" type="text" placeholder="Correo Electronico" value="{{ old('email') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" style="position: relative">
                                <i class="fa fa-street-view icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Calle</label>
                                <input type="text" class="form-control input-style" id="calle" name="calle" placeholder="Direcion" value="{{ old('calle') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-user icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Entidad</label>
                                <input type="text" class="form-control input-style" id="entidad" name="entidad" placeholder="Entidad" value="{{ old('entidad') }}">
                            </div>
                        </div>

                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-font icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Ciudad</label>
                                <input type="text" class="form-control input-style" id="ciudad" name="ciudad" placeholder="ciudad" value="{{ old('ciudad') }}">
                            </div>
                        </div>

                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-font icon-style-2"></i>
                                <label class="form-label label-custom-yellow">CP</label>
                                <input type="text" class="form-control input-style" id="cp" name="cp" value="{{ old('cp') }}">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-lock icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Contraseña</label>
                                <input type="password" class="form-control input-style" id="password" name="password" placeholder="Contraseña">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                              <button class="mt-5 btn-sinestilo" type="submit">
                                  <div class="button" >
                                      <div class="icon">
                                          <i class="fa fa-floppy-o"></i>
                                      </div>
                                  </div>
                              </button>
                        </div>
                    </div>

                </form>
            </div>
</div>

@endsection
