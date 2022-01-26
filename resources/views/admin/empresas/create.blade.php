@extends('layouts.app')

@section('content')


<div class="box">
        <div class="row">

            @extends('layouts.bradgrum')
            @section('title', 'Crear Empresa')
            @section('ruta')
            #
            @endsection
            @section('icon', 'fa-pencil')

            <div class="col-12 p-4">
                <form method="POST" action="{{ route('store.empresa') }}" enctype="multipart/form-data" role="form">
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
                                <label class="form-label label-custom-yellow">RFC</label>
                                <input type="text" class="form-control input-style" id="rfc" name="rfc" placeholder="RFC">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" style="position: relative">
                                <i class="fa fa-envelope icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Correo</label>
                                <input class="form-control input-style"  id="email" name="email" type="text" placeholder="Correo Electronico">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3 position-relative" style="position: relative">
                                <i class="fa fa-street-view icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Calle</label>
                                <input type="text" class="form-control input-style" id="calle" name="calle" placeholder="Direcion">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-user icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Entidad</label>
                                <input type="text" class="form-control input-style" id="entidad" name="entidad" placeholder="Entidad">
                            </div>
                        </div>

                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-font icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Ciudad</label>
                                <input type="text" class="form-control input-style" id="ciudad" name="ciudad" placeholder="ciudad">
                            </div>
                        </div>

                        <div class="col-sm-4 col-4">
                            <div class="form-group mb-3 position-relative">
                                <i class="fa fa-font icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Codigo Postal</label>
                                <input type="text" class="form-control input-style" id="cp" name="cp">
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
