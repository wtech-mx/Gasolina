@extends('layouts.app')
@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/forms.css') }}">
@endsection
@section('content')
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <style>
                        div.dataTables_wrapper div.dataTables_length label{
                            color: #fff;
                        }
                        div.dataTables_wrapper div.dataTables_info{
                            color: #fff;
                        }
                        div.dataTables_wrapper div.dataTables_filter label{
                            color: #fff;
                        }
                    </style>
                    <div class="box">

                            <div class="row">

                                <div class="col-12 mt-3">
                                    <div class="d-flex justify-content-between p-3">

                                        <a href="{{ route('consulta.puesto') }}" class="btn btn-back">
                                            <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                                        </a >

                                        <h1 class="text-white">Editar Puesto</h1>

                                    {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                                        <a class="btn btn-back" href="#">
                                            <i class="fa fa-pencil btn-icon-back"></i>
                                        </a>

                                    </div>
                                </div>

                                <ul class="nav nav-pills d-flex justify-content-center mb-3 mt-5" id="pills-tab" role="tablist">

                                <li class="nav-item p-2" role="presentation">
                                    <a class="nav-link a-perso active show" id="users-registers" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        <i class="fa fa-user icon-style-2 p-1 "></i>Información general
                                    </a>
                                </li>

                                <li class="nav-item p-2" role="presentation">
                                    <a class="nav-link a-perso" id="register-passwords" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        <i class="fa fa-lock icon-style-2 p-1 "></i> Funciones
                                    </a>
                                </li>

                                <li class="nav-item p-2" role="presentation">
                                    <a class="nav-link a-perso" id="register-responsabilidades" data-bs-toggle="pill" data-bs-target="#pills-responsabilidades" type="button" role="tab" aria-controls="pills-responsabilidades" aria-selected="false">
                                        <i class="fa fa-lock icon-style-2 p-1 "></i> Responsabilidades
                                    </a>
                                </li>

                                <li class="nav-item p-2" role="presentation">
                                    <a class="nav-link a-perso" id="register-conocimiento" data-bs-toggle="pill" data-bs-target="#pills-conocimiento" type="button" role="tab" aria-controls="pills-conocimiento" aria-selected="false">
                                        <i class="fa fa-lock icon-style-2 p-1 "></i> Conocimiento
                                    </a>
                                </li>

                                <li class="nav-item p-2" role="presentation">
                                    <a class="nav-link a-perso" id="register-competencia" data-bs-toggle="pill" data-bs-target="#pills-competencia" type="button" role="tab" aria-controls="pills-competencia" aria-selected="false">
                                        <i class="fa fa-lock icon-style-2 p-1 "></i> Competencia
                                    </a>
                                </li>

                                </ul>

                                <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active p-3" id="pills-home" role="tabpanel" aria-labelledby="users-registers">

                                    <form method="POST" action="" enctype="multipart/form-data" role="form">
                                        @csrf
                                        <input type="hidden" name="_method" value="PATCH">

                                            <div class="row">
                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                        <label class="form-label label-custom-yellow">¿Reporta Matrices?</label>
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                        <label class="form-label label-custom-yellow">¿Supervisa?</label>
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                        <label class="form-label label-custom-yellow">¿Relación Interna?</label>
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                        <label class="form-label label-custom-yellow">¿Relación Externa?</label>
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-5">
                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                        <label class="form-label label-custom-yellow">Tipo*</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                        <label class="form-label label-custom-yellow">¿CORP?</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                        <label class="form-label label-custom-yellow">¿Cliente?</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                        <label class="form-label label-custom-yellow">¿Mostrar?</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                        <p style="color: #fff">Cliente</p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-3">
                                                    <div class="form-group mb-3 position-relative">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 col-6">
                                                    <div class="form-group mb-3 position-relative">
                                                        <label class="form-label label-custom-yellow">Estatus del puesto</label>
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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

                                <div class="tab-pane fade p-3" id="pills-profile" role="tabpanel" aria-labelledby="register-passwords">

                                    <table class="table" id="table_id">
                                        <thead class="text-white">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Función</th>
                                            <th scope="col">Descripción</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-white">
                                            <tr>
                                                <td>1</td>
                                                <td>Asistir al Gerente en el control de inventarios de los combustibles y productos de acuerdo a los niveles e inventarios</td>
                                                <td>Asistir al Gerente en el control de inventarios de los combustibles y productos de acuerdo a los niveles e inventarios determinados. • Efectuar la verificación de inventarios al inicio de su turno. • Recibir las entregas programadas de abasto de combustibles de acuerdo al procedimiento de recepción y descarga de producto. • Efectuar el cierre de cuentas individuales de los despachadores, tomar lectura de los contadores de litros de los dispensarios al entregar su turno, así como verificar físicamente al recibir su turno. • Distribuir a los despachadores para atender el punto de venta y apoyar el despacho en “horas pico”. • Elaborar el recuento de las existencias y liquidación de aceites y demás productos, tanto en el almacén como en los exhibidores. • Supervisar el trabajo de los despachadores, así como la atención y calidad en el servicio que se ofrece a los clientes. • Supervisar que el despachador ofrezca al cliente, el comprobante de venta ticket del consumo y/o factura. • Aplicar y ejecutar las actividades de las cuales es responsable dentro del Sistema de Administración en Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="tab-pane fade p-3" id="pills-responsabilidades" role="tabpanel" aria-labelledby="register-responsabilidades">

                                    <table class="table" id="table_id">
                                        <thead class="text-white">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Función</th>
                                            <th scope="col">Descripción</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-white">
                                            <tr>
                                                <td>1</td>
                                                <td>Aplicar y ejecutar las actividades de las cuales es responsable dentro del Sistema de Administración</td>
                                                <td>Aplicar y ejecutar las actividades de las cuales es responsable dentro del Sistema de Administración
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="tab-pane fade p-3" id="pills-conocimiento" role="tabpanel" aria-labelledby="register-conocimiento">

                                    <table class="table" id="table_id">
                                        <thead class="text-white">
                                        <tr>
                                            <th scope="col">Curso</th>
                                            <th scope="col">Conocimiento</th>
                                            <th scope="col">Alcance</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-white">
                                            <tr>
                                                <td>Curso de Inducción</td>
                                                <td>Proporcionar la información necesaria de la Estación de Servicio, relacionada con la Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente.</td>
                                                <td> El presente curso, está dirigido a todo trabajador y/o contratista de nuevo ingreso.</td>
                                            </tr>
                                            <tr>
                                                <td>Política.</td>
                                                <td>El personal evaluado conoce la política establecida en la Estación de Servicio y sus alcances en materia de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente.</td>
                                                <td>Curso dirigido a todo personal interno, contratista, proveedores y clientes de la Estación de Servicio.</td>
                                            </tr>
                                            <tr>
                                                <td>Aspectos e Impactos Ambientales.</td>
                                                <td>El personal evaluado identifica y conoce los aspectos e impactos ambientales relacionados con las actividades que desarrolla cada trabajador de la Estación de Servicio.</td>
                                                <td>Curso dirigido a todo el personal que labora en la Estación de Servicio, contratistas y/o prestadores de servicio.</td>
                                            </tr>
                                            <tr>
                                                <td>Condiciones de seguridad en la Estación de Servicio.</td>
                                                <td>El personal evaluado identifica y conoce las condiciones de seguridad en las que se debe de trabajar dentro de la Estación de Servicio.</td>
                                                <td>El presente curso, va dirigido a todo el personal de la Estación de Servicio, contratistas y/o prestadores de servicio.</td>
                                            </tr>
                                            <tr>
                                                <td>Señalización de Seguridad en el Centro de Trabajo.</td>
                                                <td>El personal evaluado conoce e interpreta correctamente la señalización de seguridad ubicada dentro de la Estación de Servicio.</td>
                                                <td>Curso dirigido al personal interno que labora en la Estación de Servicio así como contratistas y proveedores, para la correcta interpretación de la señalización aplicable en su área de trabajo de acuerdo a la NOM-005-ASEA-2016 y a la NOM-026-STPS-2008.</td>
                                            </tr>
                                            <tr>
                                                <td>Combate contra incendio y derrames</td>
                                                <td>Formar brigadistas capaces de identificar los posibles riesgos y peligros que pudieran generar un fuego incipiente en las instalaciones y realizar la prevención, en caso de presentarse el fuego identificar el tipo, atender y controlar con los recursos inmediatos</td>
                                                <td>Conocimientos básicos para atender fuegos incipientes con el uso adecuado de los recursos materiales así como de los recursos humanos que se cuenten, identificar cuando la emergencia supera los medios y solicitar apoyo a organizaciones externas.                            </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="tab-pane fade p-3" id="pills-competencia" role="tabpanel" aria-labelledby="register-competencia">

                                    <table class="table" id="table_id">
                                        <thead class="text-white">
                                        <tr>
                                            <th scope="col">Competencia</th>
                                            <th scope="col">Categoria</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-white">
                                            <tr>
                                                <td>Aspectos e Impactos Ambientales.</td>
                                                <td>SASISOPA</td>
                                            </tr>
                                            <tr>
                                                <td>Combate contra incendio y derrames</td>
                                                <td>SASISOPA</td>
                                            </tr>
                                            <tr>
                                                <td>Condiciones de seguridad en la Estación de Servicio.</td>
                                                <td>SASISOPA</td>
                                            </tr>
                                            <tr>
                                                <td>Evacuación y comunicación</td>
                                                <td>SASISOPA</td>
                                            </tr>
                                            <tr>
                                                <td>Señalización de Seguridad en el Centro de Trabajo.</td>
                                                <td>SASISOPA</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
