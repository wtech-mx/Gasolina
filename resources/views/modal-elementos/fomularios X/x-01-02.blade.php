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
                                            <option selected>Quien se le realizó la evaluación</option>
                                            @foreach ($users as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button class="btn btn-primary mt-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Aspectos de seguridad, salud y protección ambiental. Equipo de protección personal (epp) para quien participa en la descarga del producto.
                                    </button>

                                    <div class="collapse show" id="collapseExample">
                                        <div class="row">
                                            <div class="form-group col-10 mt-5">
                                                <label style="color: #ffff;" for="recibido">El chofer repartidor y cobrador/ Ayudante de chofer, viste ropa de algodón ajustada en cuello, puños y cintura; calzado industrial; guantes; lentes de seguridad y casco con barbiquejo.</label>
                                            </div>
                                            <div class="form-group col-2 mt-5">
                                                <select name="pregunta1" class="form-select" aria-label="Default select example" id="pregunta1">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">El encargado de la Estación de Servicio, viste ropa de algodón ajustada en cuello, puños y cintura; y calzado industrial como mínimo.</label>
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
                                                <label style="color: #ffff;" for="recibido">Juego de dos calzas (topes-tranca) de goma (hule de alta resistencia) para ruedas de autotanque con estrías
                                                    superiores para un mejor agarre (a la llanta), piso estriado antiderrapante con argolla para fácil manejo en forma de pirámide truncada con base rectangular
                                                    con un mínimo eN su base inferior de 15 x 20 cm y en su base superior de 5 x 20 cm, o en forma de escuadra con resbaladilla con un anch</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select name="pregunta3" class="form-select" aria-label="Default select example" id="pregunta3">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">El chofer repartidor y cobrador/ ayudante de chofer, viste ropa de algodón ajustada en cuello, puños y cintura;
                                                    calzado industrial, guantes; lentes de seguridad y casco con barbiquejo.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select name="pregunta4" class="form-select" aria-label="Default select example" id="pregunta4">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">El encargado de la Estación de Servicio, viste ropa de algodón ajustada en cuello, puños
                                                    y cintura y calzado industrial como mínimo.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select name="pregunta5" class="form-select" aria-label="Default select example" id="pregunta5">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Manguera para descarga de producto de 4” de diámetro con longitud adecuada para la operación segura de descarga,
                                                    manguera para recuperación de vapores (donde aplique),
                                                    codo de descarga de conexión hermética, reducción de 6” a 4” y empaques.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select name="pregunta6" class="form-select" aria-label="Default select example" id="pregunta6">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">4 Biombos con el texto: “PELIGRO DESCARGANDO COMBUSTIBLE" protegiendo,
                                                    como mínimo, el área de descarga y el auto-tanque.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta7" name="pregunta7">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">2 extintores como mínimo de 20 lb (9 Kg), de capacidad de polvo
                                                    químico seco tipo ABC, con carga vigente.</label>
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
                                                <label style="color: #ffff;" for="recibido">Cumplió con los señalamientos, límites de velocidad y medidas de
                                                    seguridad establecidos en el interior de la Estación de Servicio.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta9" name="pregunta9">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Fumó o utilizó teléfonos celulares durante su estancia en la Estación de Servicio.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta10" name="pregunta10">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Permaneció fuera de la cabina del autotanque, a una distancia máxima de dos metros de la caja de válvulas.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta11" name="pregunta11">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Verificó durante la descarga del producto, la conexión del autotanque con la tierra física,
                                                    que no hubiera fugas, que los extintores y biombos estuvieran colocados y en el área de descarga y que no se hallara personal ajeno a
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
                                        Lineamientos a observar por el encargado de la estación de servicio.
                                    </button>

                                    <div class="collapse show" id="collapseExample3">
                                        <div class="row">
                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Verificó que hubiera orden, limpieza e iluminación adecuada en el área de descarga.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta13" name="pregunta13">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Estaban señalizados mediante letreros y con colores de identificación de los productos,
                                                    las bocatomas de los tanques de almacenamiento de la Estación de Servicio.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta14" name="pregunta14">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Fumó o empleó teléfonos celulares.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta15" name="pregunta15">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Permaneció a una distancia máxima de 2 metros de la
                                                    bocatoma del tanque de almacenamiento.</label>
                                            </div>
                                            <div class="form-group col-2 mt-3">
                                                <select class="form-select" aria-label="Default select example" id="pregunta16" name="pregunta16">
                                                    <option value="no" selected>No</option>
                                                    <option value="si">Si</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Verificó durante la descarga de producto, la conexión
                                                    del autotanque con la tierra física, que no existieran fugas, la colocación de los extintores y
                                                    biombos en el área de descarga y no hubiera personal ajeno a esta actividad.</label>
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
                                        Salud ocupacional aplicable al chofer, ayudante de chofer y encargado de la estación de servicio.
                                    </button>

                                    <div class="collapse show" id="collapseExample4">
                                        <div class="row">
                                            <div class="form-group col-10 mt-3">
                                                <label style="color: #ffff;" for="recibido">Se evitó realizar sobreesfuerzos físicos, utilizando
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
                                                <label style="color: #ffff;" for="recibido">Conocía y entendía las hojas de datos de seguridad de
                                                    los productos Pemex Magna, Pemex Premium, Pemex Diésel y Diésel Marino.</label>
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
                                    Protección ambiental.
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
                                            <label style="color: #ffff;" for="recibido">Se suspendieron las actividades y se procedió a realizar la
                                                contención y limpieza del producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta21" name="pregunta21">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Se confinaron los materiales impregnados de hidrocarburos en el
                                                sitio establecido por la Estación de Servicio (guantes, ropa contaminada, musgo absorbente, etc.)</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta22" name="pregunta22">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Al efectuar las operaciones de desconexión de mangueras, se evitó derrame del producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta23" name="pregunta23">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Durante el proceso de recepción de productos cargados
                                                en terminal de almacenamiento y reparto con SIMCOT, se abrió la tapa del domo.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta24" name="pregunta24">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Se informó a la Agencia del derrame o fuga de producto.</label>
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
                                    Actividades del encargado de la estación de servicio.
                                </button>

                                <div class="collapse show" id="collapseExample6">
                                    <div class="row">
                                        <div class="form-group col-10 mt-5">
                                            <label style="color: #ffff;" for="recibido">Atendió al chófer repartidor y cobrador durante los primeros diez minutos posteriores al arribo del autotanque.</label>
                                        </div>
                                        <div class="form-group col-2 mt-5">
                                            <select class="form-select" aria-label="Default select example" id="pregunta26" name="pregunta26">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Controló la circulación interna de los vehículos para garantizar la preferencia
                                                 vial al autotanque en el interior de la Estación de Servicio.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta27" name="pregunta27">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Indicó al chofer repartidor y cobrador el sitio en que tenía que estacionar
                                                 el autotanque y la bocatoma del tanque. de almacenamiento donde se llevó a cabo la descarga de producto, asegurándose
                                                 que el auto-tanque, quedara direccionado hacia una ruta de salida franca y libre de obstáculos.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta28" name="pregunta28">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">En su caso, notificó al chofer repartidor y cobrador que no procedía la descarga del producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta29" name="pregunta29">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Colocó 4 biombos con el texto: "PELIGRO DESCARGANDO COMBUSTIBLE", protegiendo,
                                                 como mínimo, el área de descarga y el autotanque.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta30" name="pregunta30">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Proporcionó la manguera y codo para la recuperación de vapores, así
                                                como la manguera y codo para la descarga del producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta31" name="pregunta31">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Si es que aplicaba, conectó al tanque de almacenamiento, la manguera
                                                 de recuperación de vapores.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta32" name="pregunta32">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Conectó la manguera de descarga del producto a la boquilla del tanque
                                                 de almacenamiento donde se descargó el producto, incluyendo el codo de descarga con mirilla.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta33" name="pregunta33">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Si es que aplicaba, se conectó al autotanque, la manguera de recuperación de vapores.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta34" name="pregunta34">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Se conectó la manguera de descarga de producto a la válvula de descarga del autotanque.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta35" name="pregunta35">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Se inició la descarga de producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta36" name="pregunta36">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Se permaneció en el área de descarga, supervisando el rango de presión del
                                                candado tipo oblea. y se verificó el paso del producto a través de la mirilla del codo de descarga y de la mirilla anular
                                                 del auto-tanque, ubicada detrás de la válvula de descarga y/o de la mirilla ubicada a un costado de la válvula de descarga.</label>
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
                                    Comprobación de entrega total del producto, desconexión y retiro del autotanque. Actividades del encargado de la estación de servicio.
                                </button>

                                <div class="collapse show" id="collapseExample7">
                                    <div class="row">

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Una vez terminada la descarga del producto, se desconectó,
                                                conjuntamente con el chofer repartidor y cobrador, el extremo conectado a la válvula de descarga del
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
                                            <label style="color: #ffff;" for="recibido">Desconectó el extremo de la manguera de descarga conectado
                                                al tanque de almacenamiento, incluyendo el codo de mirilla; cerró la boquilla de llenado del tanque de
                                                almacenamiento y colocó la tapa en el registro correspondiente, evitando derramar producto.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta39" name="pregunta39">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Donde aplicaba, desconectó el extremo de la manguera de
                                                recuperación de vapores del retorno de vapores del tanque de almacenamiento.</label>
                                        </div>
                                        <div class="form-group col-2 mt-3">
                                            <select class="form-select" aria-label="Default select example" id="pregunta40" name="pregunta40">
                                                <option value="no" selected>No</option>
                                                <option value="si">Si</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-10 mt-3">
                                            <label style="color: #ffff;" for="recibido">Retiró el equipo y accesorios utilizados para la descarga
                                                en la Estación de Servicio (extintores, biombos, mangueras, conexiones, calzas).</label>
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
