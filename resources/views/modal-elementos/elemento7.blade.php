@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/modal-elements.css') }}">
@endsection

<!-- Modal -->
<div class="modal fade" id="elemento7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="elemento7" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title text-center" style="font-size: 16px;">
                    Comunicación, participación y consulta
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-12 ">

                        <div class="accordion accordion-flush" id="accordionExample77">

                            {{-------Descarga---------}}
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#element7_one" aria-expanded="true"
                                        aria-controls="element7_one">
                                        Documentos de consulta
                                    </button>

                                </h2>
                                <div id="element7_one" class="accordion-collapse collapse show"
                                    aria-labelledby="element7_1" data-bs-parent="#accordionExample77">
                                    <div class="accordion-body">

                                        <form action="index.php" method="post">
                                            <select id="status" name="status" class="form-select"
                                                onChange="mostrar7(this.value);">
                                                <option value="">Documento*</option>
                                                <option value="vii">VII - Comunicación participación y consulta</option>
                                                <option value="vii-01">VII-01 Procedimiento de comunicación interna y
                                                    externa</option>
                                                <option value="vii-03">VII-03 Procedimiento de solicitud de información,
                                                    quejas o sugerencias.</option>
                                            </select>
                                        </form>

                                        <div id="vii" class="text-center" style="display: none;">
                                            <a href="{{route('pdf_vii.view')}}" target="_blank"><i
                                                    class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{route('pdf_vii.print')}}"><i class="icon_config fa fa-download"
                                                    aria-hidden="true"></i></a>
                                        </div>

                                        <div id="vii-01" class="text-center" style="display: none;">
                                            <a href="{{route('pdf_vii_01.view')}}" target="_blank"><i
                                                    class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{route('pdf_vii_01.print')}}"><i
                                                    class="icon_config fa fa-download" aria-hidden="true"></i></a>
                                        </div>

                                        <div id="vii-03" class="text-center" style="display: none;">
                                            <a href="{{route('pdf_vii_03.view')}}" target="_blank"><i
                                                    class="icon_config fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{route('pdf_vii_03.print')}}"><i
                                                    class="icon_config fa fa-download" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-------Formulario---------}}
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="element1">
                                    <button class="accordion-button btn-grid" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#element7_tree" aria-expanded="true"
                                        aria-controls="element7_tree">
                                        Formatos del elemento
                                    </button>
                                </h2>
                                <div id="element7_tree" class="accordion-collapse collapse "
                                    aria-labelledby="element7_2" data-bs-parent="#accordionExample77">

                                    <div class="accordion-body">

                                        {{--nav tittle ejecutar/calendario--}}
                                        {{-- <div class="d-flex justify-content-center">
                                            <ul class="nav nav-pills mb-3 d-flex " id="tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="ejecutar-tab"
                                                        data-bs-toggle="pill" data-bs-target="#ejecutar" type="button"
                                                        role="tab" aria-controls="ejecutar" aria-selected="true">
                                                        Actividades
                                                    </button>
                                                </li>

                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="calendario-tab" data-bs-toggle="pill"
                                                        data-bs-target="#calendario" type="button" role="tab"
                                                        aria-controls="calendario" aria-selected="false">
                                                        Calendarizar
                                                    </button>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        {{--nav tittle ejecutar/calendario--}}

                                        {{--nav content ejecutar/calendario --}}
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="ejecutar" role="tabpanel"
                                                aria-labelledby="ejecutar-tab">
                                                <form action="index.php" method="post">
                                                    <select id="status" name="status" class="form-select"
                                                        onChange="mostrars7(this.value);">
                                                        <option value="">Seleccione Elemento</option>
                                                        <option value="VII-01-01">VII-01-01 Matriz de registro y seguimiento de comunicación interna y externa.</option>
                                                        <option value="VII-02-02">VII-02-02 Matriz de registro y seguimiento de actos o condiciones inseguras.</option>
                                                        <option value="VII-03-02">VII-03-02 Matriz de control, seguimiento y cierre de quejas y sugerencias.</option>
                                                    </select>
                                                </form>

                                                <div id="VII-01-01" style="display: none;">
                                                    <a class="btn" href="{{route('difundir_vii_01_01.index')}}"
                                                        style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                        Ejecutar
                                                    </a>

                                                    <a class="btn text-dark"
                                                        href="{{route('difundir_vii_01_01.index')}}"
                                                        style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                        Difundir
                                                    </a>

                                                    <a class="btn  " href="{{route('preventiva_vii_01_01.index')}}"
                                                        style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                                        Accion Correctiva
                                                    </a>
                                                </div>

                                                <div id="VII-02-02" style="display: none;">

                                                    <a class="btn" href="{{route('index.vii_02_02')}}"
                                                        style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                        Ejecutar
                                                    </a>

                                                    <a class="btn text-dark" href="{{route('difundir_vii_02_02.index')}}"
                                                        style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                        Difundir
                                                    </a>

                                                    <a class="btn  " href="{{route('preventiva_vii_02_02.index')}}"
                                                        style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                                        Accion Correctiva
                                                    </a>

                                                </div>
                                                <div id="VII-03-02" style="display: none;">
                                                    <a class="btn" href="{{route('index.vii_03_02')}}"
                                                        style="background-color:#001d3d;color:  #41CC2E!important; border: 2px solid #41CC2E!important;">
                                                        Ejecutar
                                                    </a>

                                                    <a class="btn text-dark" href="{{route('difundir_vii_03_02.index')}}"
                                                        style="background-color:#001d3d;color:  yellow!important; border: 2px solid yellow!important;">
                                                        Difundir
                                                    </a>

                                                    <a class="btn  " href="{{route('preventiva_vii_03_02.index')}}"
                                                        style="background-color:#001d3d;color:  red!important; border: 2px solid red!important;">
                                                        Accion Correctiva
                                                    </a>
                                                </div>
                                            </div>

                                            {{-- <div class="tab-pane fade" id="calendario" role="tabpanel"
                                                aria-labelledby="calendario-tab">
                                                <h5 class="text-center" style="font-size: 15px">Matriz de aspectos e
                                                    impactos ambientales.</h5>

                                                <div class="d-flex justify-content-center">
                                                    <ul class="nav nav-pills mb-3 d-flex " id="pills-tab"
                                                        role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="pills-home-tab"
                                                                data-bs-toggle="pill" data-bs-target="#pills-home"
                                                                type="button" role="tab" aria-controls="pills-home"
                                                                aria-selected="true">
                                                                Opcion 1
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-profile-tab"
                                                                data-bs-toggle="pill" data-bs-target="#pills-profile"
                                                                type="button" role="tab" aria-controls="pills-profile"
                                                                aria-selected="false">
                                                                Opcion 2
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-tres-tab"
                                                                data-bs-toggle="pill" data-bs-target="#pills-tres"
                                                                type="button" role="tab" aria-controls="pills-tres"
                                                                aria-selected="false">
                                                                Opcion 3
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>


                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-home"
                                                        role="tabpanel" aria-labelledby="pills-home-tab">
                                                        <form method="POST" action="{{ route('tareas.store') }}"
                                                            enctype="multipart/form-data" role="form">
                                                            @csrf

                                                            <input type="hidden" name="elementos" id="elementos"
                                                                value="1">
                                                            <input type="hidden" name="consultar" id="consultar"
                                                                value="0">
                                                            <input type="hidden" name="generar" id="generar" value="0">
                                                            <input type="hidden" name="actualizar" id="actualizar"
                                                                value="0">
                                                            <input type="hidden" name="difundir" id="difundir"
                                                                value="0">
                                                            <input type="hidden" name="correctiva" id="correctiva"
                                                                value="0">

                                                            <input type="hidden" name="image" id="image"
                                                                value="{{ asset('assets/img/icons/checked.png') }}">
                                                            <input type="hidden" name="title" id="title"
                                                                value="V-01-01">
                                                            <input type="hidden" name="color" id="color"
                                                                value="#2367D9">
                                                            <input type="hidden" name="url" id="url"
                                                                value="#exampleModal">

                                                            @include('modal-elementos.formulario1')
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                        aria-labelledby="pills-profile-tab">
                                                        <form method="POST" action="{{ route('tareas.store') }}"
                                                            enctype="multipart/form-data" role="form">
                                                            @csrf

                                                            <input type="hidden" name="elementos" id="elementos"
                                                                value="1">
                                                            <input type="hidden" name="consultar" id="consultar"
                                                                value="0">
                                                            <input type="hidden" name="generar" id="generar" value="0">
                                                            <input type="hidden" name="actualizar" id="actualizar"
                                                                value="0">
                                                            <input type="hidden" name="difundir" id="difundir"
                                                                value="0">
                                                            <input type="hidden" name="correctiva" id="correctiva"
                                                                value="0">


                                                            <input type="hidden" name="image" id="image"
                                                                value="{{ asset('assets/img/icons/checked.png') }}">
                                                            <input type="hidden" name="title" id="title"
                                                                value="V-01-01">
                                                            <input type="hidden" name="url" id="url"
                                                                value="#exampleModal">

                                                            @include('modal-elementos.formulario2')
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-tres" role="tabpanel"
                                                        aria-labelledby="pills-tres-tab">
                                                        <form method="POST" action="{{ route('tareas.formulario_3') }}"
                                                            enctype="multipart/form-data" role="form">
                                                            @csrf

                                                            <input type="hidden" name="elementos" id="elementos"
                                                                value="1">
                                                            <input type="hidden" name="consultar" id="consultar"
                                                                value="0">
                                                            <input type="hidden" name="generar" id="generar" value="0">
                                                            <input type="hidden" name="actualizar" id="actualizar"
                                                                value="0">
                                                            <input type="hidden" name="difundir" id="difundir"
                                                                value="0">
                                                            <input type="hidden" name="correctiva" id="correctiva"
                                                                value="0">


                                                            <input type="hidden" name="image" id="image"
                                                                value="{{ asset('assets/img/icons/checked.png') }}">
                                                            <input type="hidden" name="title" id="title"
                                                                value="V-01-01">
                                                            <input type="hidden" name="url" id="url"
                                                                value="#exampleModal">

                                                            @include('modal-elementos.formulario3')
                                                        </form>
                                                    </div>
                                                </div>

                                            </div> --}}
                                        </div>
                                        {{--nav content ejecutar/calendario --}}

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            {{-- <div class="modal-footer">--}}
                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
                {{-- <button type="button" class="btn btn-primary">Understood</button>--}}
                {{-- </div>--}}
            @include('modal-elementos.formularios vii.script')
        </div>
    </div>
</div>
