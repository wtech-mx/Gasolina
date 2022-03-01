@php
   $fecha = date("Y-m-d");
@endphp
                <div class="row">
                    <div class="col-6">
                        <h2 class="text-left" style="color: #FFC300!important">Elementos</h2>
                    </div>

                    <div class="col-6">
                        <div class="d-flex justify-content-end">
                             <a class="btn text-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Más <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-12">
                            <div class="card card-menu">
                                <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento1">
                                    <div class="card-body">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/1.png') }}">
                                        <h4 class="card-title card-menu-title-element">Funciones Responsabilidades <br> y autoridades</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="card card-menu">
                               <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento2">
                                    <div class="card-body">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/2.png') }}">
                                        <h4 class="card-title card-menu-title-element">Control de documentos y registros
                                    </div>
                                </a>
                            </div>
                            <div class="card card-menu">
                                <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento3">
                                    <div class="card-body">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/3.png') }}">
                                        <h4 class="card-title card-menu-title-element">Politica <br>-<br>-</h4>
                                    </div>
                                </a>
                            </div>

                    </div>
                </div>

                <div class="collapse" id="collapseExample">
                    <div class="card card-body d-inline-block" style="background: none;">

                            <div class="card card-menu">
                                <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento4">
                                <div class="card-body">
                                    <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/4.png') }}">
                                    <h4 class="card-title card-menu-title-element">Objetivos,Metas e indicadores <br>-<br></h4>
                                </div>
                                </a>
                            </div>
                            <div class="card card-menu">
                                <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento5">
                                <div class="card-body">
                                    <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/5.png') }}">
                                    <h4 class="card-title card-menu-title-element">Rquisitos legales <br>-<br>-</h4>
                                </div>
                                </a>
                            </div>
                            <div class="card card-menu">
                                <div class="card-body">
                                    <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento6">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/6.png') }}">
                                        <h4 class="card-title card-menu-title-element">Control de actividades y procesos </h4>
                                    </a>
                                </div>
                            </div>
                            <div class="card card-menu mt-3">
                                <div class="card-body">
                                    <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento7">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/7.png') }}">
                                        <h4 class="card-title card-menu-title-element">Identificacion de peligros y aspectos ambientales</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="card card-menu mt-3">
                                <div class="card-body">
                                    <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento8">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/8.png') }}">
                                        <h4 class="card-title card-menu-title-element">Comunicacion , participacion y consulta<br>-<br></h4>
                                    </a>
                                </div>
                            </div>

                            <div class="card card-menu mt-3">
                                <div class="card-body">
                                   <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento9">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/9.png') }}">
                                        <h4 class="card-title card-menu-title-element">Seguridad de contratistas  <br>-<br></h4>
                                    </a>
                                </div>
                            </div>
                            <div class="card card-menu mt-3">
                                <div class="card-body">
                                    <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento10">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/10.png') }}">
                                        <h4 class="card-title card-menu-title-element">Preparacion y respues a emergencias</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="card card-menu mt-3">
                                <div class="card-body">
                                    <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento11">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/11.png') }}">
                                        <h4 class="card-title card-menu-title-element">Monitoreo, verificacion y evaluacion</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="card card-menu mt-3">
                                <div class="card-body">
                                    <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento12">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/12.png') }}">
                                        <h4 class="card-title card-menu-title-element">Mejores practicas y estandares </h4>
                                    </a>
                                </div>
                            </div>
                            <div class="card card-menu mt-3">
                                <div class="card-body">
                                    <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento13">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/13.png') }}">
                                        <h4 class="card-title card-menu-title-element">Competencia del personal <br>-<br>-</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="card card-menu mt-3">
                                <div class="card-body">
                                    <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento14">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/14.png') }}">
                                        <h4 class="card-title card-menu-title-element">Integridad mecanica y aseguramiento de la calidad</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="card card-menu mt-3">
                                <div class="card-body">
                                    <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento15">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/15.png') }}">
                                        <h4 class="card-title card-menu-title-element">Investigacion de inscidentes y accidentes <br>-<br></h4>
                                    </a>
                                </div>
                            </div>


                            <div class="card card-menu mt-3">
                                <div class="card-body">
                                    <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento16">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/16.png') }}">
                                        <h4 class="card-title card-menu-title-element">Auditorias <br>-<br></h4>
                                    </a>
                                </div>
                            </div>

                            <div class="card card-menu mt-3">
                                <div class="card-body">
                                    <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento17">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/17.png') }}">
                                        <h4 class="card-title card-menu-title-element">Revision de resultados</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="card card-menu mt-3">
                                <div class="card-body">
                                    <a style="text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#elemento18">
                                        <img class="img-card-menu-element" src=" {{ asset('assets/img/elementos/18.png') }}">
                                        <h4 class="card-title card-menu-title-element">Informes de Desempeños</h4>
                                    </a>
                                </div>
                            </div>

                    </div>
                </div>

@include('modal-elementos.elemento1')
@include('modal-elementos.elemento2')
@include('modal-elementos.elemento3')
@include('modal-elementos.elemento4')
@include('modal-elementos.elemento5')
@include('modal-elementos.elemento6')
@include('modal-elementos.elemento7')
@include('modal-elementos.elemento8')
@include('modal-elementos.elemento9')
@include('modal-elementos.elemento10')
@include('modal-elementos.elemento11')
@include('modal-elementos.elemento12')
@include('modal-elementos.elemento13')
@include('modal-elementos.elemento14')
@include('modal-elementos.elemento15')
@include('modal-elementos.elemento16')
@include('modal-elementos.elemento17')
@include('modal-elementos.elemento18')
