@extends('layouts.app')

@section('content')


<div class="box">
    <div class="row">

            @extends('layouts.bradgrum')
            @section('title', 'Crear Sucursal')
            @section('ruta')
            #
            @endsection
            @section('icon', 'fa-pencil')

        <div class="col-12 p-4">
            <form method="POST" action="{{ route('store.sucursal') }}" enctype="multipart/form-data" role="form">
                @csrf
                <div class="row">
                    <div class="col-sm-6 col-6">
                        <div class="form-group mb-3 position-relative">
                            <i class="fa fa-user icon-style-2"></i>
                            <label class="form-label label-custom-yellow">Nombre</label>
                            <input type="text" class="form-control input-style" id="name" name="name" placeholder="Nombre">
                        </div>
                    </div>

                    <div class="col-sm-6 col-6">
                        <div class="form-group mb-3 position-relative">
                            <i class="fa fa-font icon-style-2"></i>
                            <label class="form-label">Correo</label>
                            <input type="email" class="form-control input-style" id="email" name="email" placeholder="Correo">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-6">
                        <div class="form-group mb-3 position-relative">
                            <i class="fa fa-lock icon-style-2"></i>
                            <label class="form-label label-custom-yellow">Contraseña</label>
                            <input type="password" class="form-control input-style" id="password" name="password" placeholder="Contraseña">
                        </div>
                    </div>


                    <div class="col-sm-6 col-6">
                        <div class="form-group mb-3 position-relative">
                            <i class="fa fa-lock icon-style-2"></i>
                            <label class="form-label">Empresa</label>
                            <select class="form-select input-style" aria-label="Default select example" id="id_empresa" name="id_empresa">
                                @foreach ($empresa as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
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
</div>
@endsection
