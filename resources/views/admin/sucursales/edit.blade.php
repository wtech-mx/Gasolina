@extends('layouts.app')

@section('content')


<div class="box">
    <div class="row">

            @extends('layouts.bradgrum')
            @section('title', 'Editar Sucursal')
            @section('ruta')
            #
            @endsection
            @section('icon', 'fa-pencil')

            <ul class="nav nav-pills d-flex justify-content-center mb-3 mt-5" id="pills-tab" role="tablist">

              <li class="nav-item p-2" role="presentation">
                <a class="nav-link a-perso active show" id="users-registers" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                     <i class="fa fa-user icon-style-2 p-1 "></i>Datos de usuarios
                </a>
              </li>

              <li class="nav-item p-2" role="presentation">
                <a class="nav-link a-perso" id="register-passwords" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <i class="fa fa-lock icon-style-2 p-1 "></i> Contraseña
                </a>
              </li>

            </ul>

            <div class="tab-content" id="pills-tabContent">

                  <div class="tab-pane fade show active p-3" id="pills-home" role="tabpanel" aria-labelledby="users-registers">

                    <form method="POST" action="{{ route('update.sucursal', $sucursal->id) }}" enctype="multipart/form-data" role="form">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-user icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Nombre</label>
                                <input type="text" class="form-control input-style" id="name" name="name" value="{{$sucursal->name}}">
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-font icon-style-2"></i>
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control input-style" id="email" name="email" value="{{$sucursal->email}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-lock icon-style-2"></i>
                                <label class="form-label">Empresa</label>
                                <select class="form-select input-style" aria-label="Default select example" id="id_empresa" name="id_empresa">
                                    <option value="{{$sucursal->id_empresa}}">Seleccionar en caso de cambiar</option>
                                    @foreach ($empresas as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <a class="mt-5" type="submit">
                                <div class="button">
                                    <div class="icon">
                                        <i class="fa fa-floppy-o"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </form>

                  </div>

                  <div class="tab-pane fade p-3" id="pills-profile" role="tabpanel" aria-labelledby="register-passwords">

                    <form method="POST" action="{{ route('update.sucursal', $sucursal->id) }}" enctype="multipart/form-data" role="form">
                    @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="col-sm-6 col-6">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-lock icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Contraseña</label>
                                <input type="password" class="form-control input-style" id="password" name="password" placeholder="Contraseña"value="{{$sucursal->password}}">
                            </div>
                        </div>
                    </form>

                  </div>

            </div>

    </div>
</div>
@endsection
