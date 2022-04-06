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

                <h1 class="text-white">Elemento X-02-01</h1>

            {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                <h5></h5>

            </div>
        </div>
        <div class="col-12 p-4">
            <form method="POST" action="{{ route('xelemento.store_preguntas') }}" enctype="multipart/form-data" role="form">
                @csrf

                <input type="hidden" class="form-control" id="cliente" name="cliente" value="324 - PL/20543/EXP/ES/2017 - SAC XIB CHAAC, S.A. DE C.V.">
                <input type="hidden" class="form-control" id="elemento" name="elemento" value="x-02-01">
                <input type="hidden" class="form-control" id="estado" name="estado" value="1">

                <div class="row">

                    <div class="form-group col-3 mt-3">
                        <label style="color: #ffff;" for="recibido">Fecha</label>
                        <input name="recibido" type="date" class="form-control" id="recibido" placeholder="Recibido">@error('recibido') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-3 mt-3">
                        <label style="color: #ffff;" for="salida">Hora de entrega</label>
                        <input name="salida" type="time" class="form-control" id="salida" placeholder="Salida">@error('salida') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>


                    <div class="form-group col-3 mt-3">
                        <label style="color: #ffff;" for="producto">Seleccionar Producto</label>
                        @error('producto') <span class="error text-danger">{{ $message }}</span> @enderror
                        <select name="producto" class="form-select" aria-label="Default select example" id="producto">
                            <option selected>Seleccionar Producto</option>
                            <option value="1">Disel</option>
                            <option value="2">Magna</option>
                        </select>
                    </div>

                    <div class="form-group col-3 mt-3">
                        <label style="color: #ffff;" for="producto">Usuario</label>
                        @error('producto') <span class="error text-danger">{{ $message }}</span> @enderror
                        <select class="form-select" aria-label="Default select example" id="id_evaluacion" name="id_evaluacion" >
                            <option selected>Quien se le realizó la evaluación</option>
                            @foreach ($users as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button class="btn btn-primary mt-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Despachador de la estación de servicio.
                    </button>

                    <div class="collapse show" id="collapseExample">
                        <div class="row">
                            <div class="form-group col-10 mt-5">
                                <label style="color: #ffff;" for="recibido">Se verifico que el motor del vehículo, esté apagado antes de despachar combustible.</label>
                            </div>
                            <div class="form-group col-2 mt-5">
                                <select name="pregunta1" class="form-select" aria-label="Default select example" id="pregunta1">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">Se derramo combustible durante el despacho.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta2" name="pregunta2">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">Se efectuaron o se permitieron reparaciones en el área de despacho.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta3" name="pregunta3">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">Se suministro combustible a vehículos del transporte público con pasajeros a bordo.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta4" name="pregunta4">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">Se suministro combustible a conductor o acompañantes que estén realizando llamadas de teléfono celular.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta5" name="pregunta5">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">Se suministro combustible a conductor o acompañantes, que se encuentren fumando en el interior del vehículo.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta6" name="pregunta6">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">Se suministro combustible a personas que se encuentren en estado de intoxicación por enervantes o bebidas alcohólicas.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta7" name="pregunta7">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">Se suministro combustible a vehículos que no tengan el tapón del tanque de combustible.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta8" name="pregunta8">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">El despachador ofrece servicios de: revisión de niveles de agua, aceite y lubricantes o aditivos.
                                     Revisión de la presión de las llantas. Limpieza del parabrisas. "</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta9" name="pregunta9">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">En caso de que el cliente requiera que al vehículo le verifiquen sus niveles de agua,
                                    aceite y lubricantes, aditivos o que le suministren aceite, aire y/o agua o algún aditivo</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta10" name="pregunta10">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">El personal, al levantar el cofre del vehículo, se aseguró que estuviera fijo antes de inclinarse sobre el motor.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta11" name="pregunta11">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">El personal se aseguró que el motor estuviera apagado para proporcionar el servicio.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta12" name="pregunta12">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">El personal se aseguró que el cofre quedara bien cerrado.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta13" name="pregunta13">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                        El despachador le comunica a los clientes lo siguiente:
                    </button>

                    <div class="collapse show" id="collapseExample1">
                        <div class="row">
                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">Ubicar el vehículo en la posición de carga que le corresponda de acuerdo a las características del mismo y no entorpecer el flujo vehicular.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta14" name="pregunta14">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">Atender los señalamientos y las indicaciones del despachador para controlar el sentido de la circulación dentro de la Estación de Servicio.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta15" name="pregunta15">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">No tener activado el teléfono celular para recibir o realizar llamadas dentro de la Estación de Servicio.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta16" name="pregunta16">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">No fumar ni encender fuego.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta17" name="pregunta17">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">No encender el motor del vehículo hasta que haya sido colocado
                                    nuevamente el tapón del tanque del vehículo por el despachador.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta18" name="pregunta18">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">No permanecer más tiempo del necesario en el área de despacho.</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta19" name="pregunta19">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>

                            <div class="form-group col-10 mt-3">
                                <label style="color: #ffff;" for="recibido">Respetar el límite máximo de velocidad de 10 km/h</label>
                            </div>
                            <div class="form-group col-2 mt-3">
                                <select class="form-select" aria-label="Default select example" id="pregunta20" name="pregunta20">
                                    <option value="no" selected>No</option>
                                    <option value="si">Si</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="d-flex justify-content-around mt-5">
                    <button class="btn" type="submit" style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
    @endsection
