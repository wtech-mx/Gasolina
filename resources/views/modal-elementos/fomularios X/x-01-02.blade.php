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

                <h1 class="text-white">Elemento X-01-02</h1>

            {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                <h5></h5>

            </div>
        </div>
        <div class="col-12 p-4">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item p-2">
                    <a class="nav-link  active show" id="users-seccion1" data-bs-toggle="pill" data-bs-target="#pills-seccion1" type="button" role="tab" aria-controls="pills-seccion1" aria-selected="true">
                        <i class="fa fa-filter icon-style-2 p-1 "></i>Seccion 1
                    </a>
                </li>

                <li class="nav-item p-2">
                    <a class="nav-link " id="register-passwords" data-bs-toggle="pill" data-bs-target="#pills-seccion2" type="button" role="tab" aria-controls="pills-seccion2" aria-selected="false">
                        <i class="fa fa-tachometer icon-style-2 p-1 "></i>Seccion 2
                    </a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active p-3 row" id="pills-seccion1" role="tabpanel" aria-labelledby="users-seccion1">
                    <form method="POST" action="{{ route('xelemento.store_preguntas') }}" enctype="multipart/form-data" role="form">
                        @csrf

                        <input type="hidden" class="form-control" id="cliente" name="cliente" value="324 - PL/20543/EXP/ES/2017 - SAC XIB CHAAC, S.A. DE C.V.">
                        <input type="hidden" class="form-control" id="elemento" name="elemento" value="x-01-02">
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
                                            <option selected>Quien se le realiz?? la evaluaci??n</option>
                                            @foreach ($users as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button class="btn btn-primary mt-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Aspectos de seguridad, salud y protecci??n ambiental. Equipo de protecci??n personal (epp) para quien participa en la descarga del producto.
                                    </button>

                                    <div class="collapse show" id="collapseExample">
                                        <div class="row">
                                            <div class="form-group col-10 mt-5">
                                                <label style="color: #ffff;" for="recibido">El chofer repartidor y cobrador/ Ayudante de chofer, viste ropa de algod??n ajustada en cuello, pu??os y cintura; calzado industrial; guantes; lentes de seguridad y casco con barbiquejo.</label>
                                            </div>
                                            <div class="form-group col-2 mt-5">
                                                <select name="pregunta1" class="form-select" aria-label="Default select example" id="pregunta1">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">El encargado de la Estaci??n de Servicio, viste ropa de algod??n ajustada en cuello, pu??os y cintura; y calzado industrial como m??nimo.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select name="pregunta2" class="form-select" aria-label="Default select example" id="pregunta2">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary mt-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                                        Equipo y herramientas requeridos para la descarga del autotanque.
                                    </button>

                                    <div class="collapse show" id="collapseExample1">
                                        <div class="row">
                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Juego de dos calzas (topes-tranca) de goma (hule de alta resistencia) para ruedas de autotanque con estr??as
                                                    superiores para un mejor agarre (a la llanta), piso estriado antiderrapante con argolla para f??cil manejo en forma de pir??mide truncada con base rectangular
                                                    con un m??nimo eN su base inferior de 15 x 20 cm y en su base superior de 5 x 20 cm, o en forma de escuadra con resbaladilla con un anch</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select name="pregunta3" class="form-select" aria-label="Default select example" id="pregunta3">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">El chofer repartidor y cobrador/ ayudante de chofer, viste ropa de algod??n ajustada en cuello, pu??os y cintura;
                                                    calzado industrial, guantes; lentes de seguridad y casco con barbiquejo.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select name="pregunta4" class="form-select" aria-label="Default select example" id="pregunta4">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">El encargado de la Estaci??n de Servicio, viste ropa de algod??n ajustada en cuello, pu??os
                                                    y cintura y calzado industrial como m??nimo.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select name="pregunta5" class="form-select" aria-label="Default select example" id="pregunta5">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Manguera para descarga de producto de 4??? de di??metro con longitud adecuada para la operaci??n segura de descarga,
                                                    manguera para recuperaci??n de vapores (donde aplique),
                                                    codo de descarga de conexi??n herm??tica, reducci??n de 6??? a 4??? y empaques.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select name="pregunta6" class="form-select" aria-label="Default select example" id="pregunta6">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">4 Biombos con el texto: ???PELIGRO DESCARGANDO COMBUSTIBLE" protegiendo,
                                                    como m??nimo, el ??rea de descarga y el auto-tanque.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta7" name="pregunta7">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">2 extintores como m??nimo de 20 lb (9 Kg), de capacidad de polvo
                                                    qu??mico seco tipo ABC, con carga vigente.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta8" name="pregunta8">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary mt-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                        Condiciones de seguridad requeridas para prevenir accidentes e incidentes. Lineamientos a observar por el chofer repartidor y cobrador y/o ayudante de chofer.
                                    </button>

                                    <div class="collapse show" id="collapseExample2">
                                        <div class="row">
                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Cumpli?? con los se??alamientos, l??mites de velocidad y medidas de
                                                    seguridad establecidos en el interior de la Estaci??n de Servicio.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta9" name="pregunta9">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Fum?? o utiliz?? tel??fonos celulares durante su estancia en la Estaci??n de Servicio.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta10" name="pregunta10">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Permaneci?? fuera de la cabina del autotanque, a una distancia m??xima de dos metros de la caja de v??lvulas.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta11" name="pregunta11">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Verific?? durante la descarga del producto, la conexi??n del autotanque con la tierra f??sica,
                                                    que no hubiera fugas, que los extintores y biombos estuvieran colocados y en el ??rea de descarga y que no se hallara personal ajeno a
                                                    esta actividad.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta12" name="pregunta12">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary mt-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                                        Lineamientos a observar por el encargado de la estaci??n de servicio.
                                    </button>

                                    <div class="collapse show" id="collapseExample3">
                                        <div class="row">
                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Verific?? que hubiera orden, limpieza e iluminaci??n adecuada en el ??rea de descarga.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta13" name="pregunta13">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Estaban se??alizados mediante letreros y con colores de identificaci??n de los productos,
                                                    las bocatomas de los tanques de almacenamiento de la Estaci??n de Servicio.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta14" name="pregunta14">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Fum?? o emple?? tel??fonos celulares.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta15" name="pregunta15">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Permaneci?? a una distancia m??xima de 2 metros de la
                                                    bocatoma del tanque de almacenamiento.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta16" name="pregunta16">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Verific?? durante la descarga de producto, la conexi??n
                                                    del autotanque con la tierra f??sica, que no existieran fugas, la colocaci??n de los extintores y
                                                    biombos en el ??rea de descarga y no hubiera personal ajeno a esta actividad.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta17" name="pregunta17">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary mt-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
                                        Salud ocupacional aplicable al chofer, ayudante de chofer y encargado de la estaci??n de servicio.
                                    </button>

                                    <div class="collapse show" id="collapseExample4">
                                        <div class="row">
                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Se evit?? realizar sobreesfuerzos f??sicos, utilizando
                                                    las posturas adecuadas al efectuar las actividades de ascenso y descenso de cabina o de
                                                    escalera del auto-tanque.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta18" name="pregunta18">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Conoc??a y entend??a las hojas de datos de seguridad de
                                                    los productos Pemex Magna, Pemex Premium, Pemex Di??sel y Di??sel Marino.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta19" name="pregunta19">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="tab-pane fade p-3 row" id="pills-seccion2" role="tabpanel" aria-labelledby="register-passwords">

                                <button class="btn btn-primary mt-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
                                    Protecci??n ambiental.
                                </button>

                                <div class="collapse show" id="collapseExample5">
                                    <div class="row">
                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Se presentaron fugas o derrames.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta20" name="pregunta20">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Se suspendieron las actividades y se procedi?? a realizar la
                                                contenci??n y limpieza del producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta21" name="pregunta21">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Se confinaron los materiales impregnados de hidrocarburos en el
                                                sitio establecido por la Estaci??n de Servicio (guantes, ropa contaminada, musgo absorbente, etc.)</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta22" name="pregunta22">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Al efectuar las operaciones de desconexi??n de mangueras, se evit?? derrame del producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta23" name="pregunta23">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Durante el proceso de recepci??n de productos cargados
                                                en terminal de almacenamiento y reparto con SIMCOT, se abri?? la tapa del domo.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta24" name="pregunta24">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Se inform?? a la Agencia del derrame o fuga de producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta25" name="pregunta25">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary mt-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample6">
                                    Actividades del encargado de la estaci??n de servicio.
                                </button>

                                <div class="collapse show" id="collapseExample6">
                                    <div class="row">
                                        <div class="form-group col-10 mt-5">
                                            <label style="color: #ffff;" for="recibido">Atendi?? al ch??fer repartidor y cobrador durante los primeros diez minutos posteriores al arribo del autotanque.</label>
                                        </div>
                                        <div class="form-group col-2 mt-5">
                                            <select class="form-select" aria-label="Default select example" id="pregunta26" name="pregunta26">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Control?? la circulaci??n interna de los veh??culos para garantizar la preferencia
                                                 vial al autotanque en el interior de la Estaci??n de Servicio.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta27" name="pregunta27">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Indic?? al chofer repartidor y cobrador el sitio en que ten??a que estacionar
                                                 el autotanque y la bocatoma del tanque. de almacenamiento donde se llev?? a cabo la descarga de producto, asegur??ndose
                                                 que el auto-tanque, quedara direccionado hacia una ruta de salida franca y libre de obst??culos.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta28" name="pregunta28">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">En su caso, notific?? al chofer repartidor y cobrador que no proced??a la descarga del producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta29" name="pregunta29">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Coloc?? 4 biombos con el texto: "PELIGRO DESCARGANDO COMBUSTIBLE", protegiendo,
                                                 como m??nimo, el ??rea de descarga y el autotanque.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta30" name="pregunta30">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Proporcion?? la manguera y codo para la recuperaci??n de vapores, as??
                                                como la manguera y codo para la descarga del producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta31" name="pregunta31">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Si es que aplicaba, conect?? al tanque de almacenamiento, la manguera
                                                 de recuperaci??n de vapores.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta32" name="pregunta32">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Conect?? la manguera de descarga del producto a la boquilla del tanque
                                                 de almacenamiento donde se descarg?? el producto, incluyendo el codo de descarga con mirilla.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta33" name="pregunta33">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Si es que aplicaba, se conect?? al autotanque, la manguera de recuperaci??n de vapores.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta34" name="pregunta34">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Se conect?? la manguera de descarga de producto a la v??lvula de descarga del autotanque.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta35" name="pregunta35">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Se inici?? la descarga de producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta36" name="pregunta36">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Se permaneci?? en el ??rea de descarga, supervisando el rango de presi??n del
                                                candado tipo oblea. y se verific?? el paso del producto a trav??s de la mirilla del codo de descarga y de la mirilla anular
                                                 del auto-tanque, ubicada detr??s de la v??lvula de descarga y/o de la mirilla ubicada a un costado de la v??lvula de descarga.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta37" name="pregunta37">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <button class="btn btn-primary mt-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample7">
                                    Comprobaci??n de entrega total del producto, desconexi??n y retiro del autotanque. Actividades del encargado de la estaci??n de servicio.
                                </button>

                                <div class="collapse show" id="collapseExample7">
                                    <div class="row">

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Una vez terminada la descarga del producto, se desconect??,
                                                conjuntamente con el chofer repartidor y cobrador, el extremo conectado a la v??lvula de descarga del
                                                auto-tanque, levantando la manguera para drenar el producto remanente hacia la bocatoma del tanque de
                                                almacenamiento, evitando derramar producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta38" name="pregunta38">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Desconect?? el extremo de la manguera de descarga conectado
                                                al tanque de almacenamiento, incluyendo el codo de mirilla; cerr?? la boquilla de llenado del tanque de
                                                almacenamiento y coloc?? la tapa en el registro correspondiente, evitando derramar producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta39" name="pregunta39">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Donde aplicaba, desconect?? el extremo de la manguera de
                                                recuperaci??n de vapores del retorno de vapores del tanque de almacenamiento.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta40" name="pregunta40">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Retir?? el equipo y accesorios utilizados para la descarga
                                                en la Estaci??n de Servicio (extintores, biombos, mangueras, conexiones, calzas).</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta41" name="pregunta41">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
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
    </div>
</div>
    @endsection
