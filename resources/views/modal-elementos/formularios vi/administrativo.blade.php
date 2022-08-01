@extends('layouts.app')
@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/custom_table.css') }}">
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

                                    <a href="{{ route('index.evaluacion') }}" class="btn btn-back">
                                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                                    </a >

                                    <h1 class="text-white">Evaluacion Auxiliar administrativo.</h1>

                                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                                    <h5></h5>

                                </div>
                            </div>
                            <div class="col-12 p-4">
                                <form method="POST" action="{{ route('update_gasolinero.evaluacion', $vi->id) }}" enctype="multipart/form-data" role="form">
                                    @csrf
                                    <input type="hidden" name="_method" value="PATCH">
                                    <input type="hidden" class="form-control" id="elemento" name="elemento" value="VI-01-01">

                                    <div class="row">

                                        <table class="table" id="table_id">
                                            <thead class="text-white">
                                            <tr>
                                                <th scope="col">Por Evaluar</th>
                                                <th scope="col">Curso</th>
                                                <th scope="col">Conocimiento</th>
                                                <th scope="col">Almacen</th>
                                                <th scope="col">Tiene conocimiento</th>
                                                <th scope="col">F. actualización</th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-white">
                                                <tr>
                                                    <td>19</td>
                                                    <td>Aspectos e Impactos Ambientales.</td>
                                                    <td>El personal evaluado identifica y conoce los aspectos e impactos ambientales relacionados con las actividades que desarrolla cada trabajador de la Estación de Servicio.</td>
                                                    <td>
                                                        Curso dirigido a todo el personal que labora en la Estación de Servicio, contratistas y/o prestadores de servicio.
                                                    </td>
                                                    <td>
                                                        @if($vi->pregunta1 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta1" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta1" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta1 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta1" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta1" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta1 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta1" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta1" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha1}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Autorización para trabajos de alto riesgo.</td>
                                                    <td>El personal evaluado conoce las medidas de seguridad con las que deberá cumplir, al realizar trabajos de mantenimiento en las instalaciones de la Estación de Servicio y que sean considerados trabajos de alto riesgo.</td>
                                                    <td>El presente curso, va dirigido a todo el personal interno y externo que realice trabajos de mantenimiento considerados como trabajos peligrosos en la Estación de Servicio.</td>
                                                    <td>
                                                        @if($vi->pregunta6 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta6" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta6" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta6 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta6" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta6" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta6 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta6" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta6" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha6}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Combate contra incendio y derrames</td>
                                                    <td>Formar brigadistas capaces de identificar los posibles riesgos y peligros que pudieran generar un fuego incipiente en las instalaciones y realizar la prevención, en caso de presentarse el fuego identificar el tipo, atender y controlar con los recursos inmediatos/td>
                                                    <td>Conocimientos básicos para atender fuegos incipientes con el uso adecuado de los recursos materiales así como de los recursos humanos que se cuenten, identificar cuando la emergencia supera los medios y solicitar apoyo a organizaciones externas.</td>
                                                    <td>
                                                        @if($vi->pregunta7 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta7" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta7" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta7 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta7" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta7" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta7 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta7" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta7" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha7}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Combate contra incendios.</td>
                                                    <td>El personal evaluado identifica y conoce los tipos de fuego, tipo de extintores y su uso así como la manera de combatir un incendio dentro de la Estación de Servicio.</td>
                                                    <td>El presente curso, va dirigido a todo personal de la Estación de Servicio, contratistas y/o proveedores de servicio.</td>
                                                    <td>
                                                        @if($vi->pregunta8 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta8" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta8" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta8 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta8" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta8" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta8 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta8" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta8" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha8}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Comisión de Seguridad e Higiene.</td>
                                                    <td>El integrante de la Comisión de Seguridad e Higiene, conoce cómo se realiza la constitución, integración, organización y funcionamiento de la Comisión de Seguridad e Higiene de acuerdo a lo establecido en la NOM-019-STPS-2011.</td>
                                                    <td>
                                                        Este curso, está dirigido a todos los integrantes de la Comisión de Seguridad e Higiene para dar a conocer los requerimientos para la constitución, integración, organización y funcionamiento de la Comisión de Seguridad e Higiene.</td>
                                                    <td>
                                                        @if($vi->pregunta9 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta9" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta9" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta9 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta9" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta9" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta9 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta9" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta9" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha9}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Condiciones de seguridad en la Estación de Servicio.</td>
                                                    <td>El personal evaluado identifica y conoce las condiciones de seguridad en las que se debe de trabajar dentro de la Estación de Servicio.</td>
                                                    <td>
                                                        El presente curso, va dirigido a todo el personal de la Estación de Servicio, contratistas y/o prestadores de servicio.</td>
                                                    <td>
                                                        @if($vi->pregunta23 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta23" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta23" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta23 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta23" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta23" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta23 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta23" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta23" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha23}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Curso de Inducción.</td>
                                                    <td>Proporcionar la información necesaria de la Estación de Servicio, relacionada con la Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente.</td>
                                                    <td>
                                                        El presente curso, está dirigido a todo trabajador y/o contratista de nuevo ingreso.
                                                    </td>
                                                    <td>
                                                        @if($vi->pregunta2 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta2" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta2" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta2 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta2" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta2" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta2 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta2" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta2" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha2}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Equipo de protección personal.</td>
                                                    <td>El personal evaluado conoce e identifica el equipo de protección personal que debe de usar al realizar sus actividades.</td>
                                                    <td>El presente curso, va dirigido al supervisor de piso, despachadores, auxiliares generales y contratistas y/o prestadores de servicio.</td>
                                                    <td>
                                                        @if($vi->pregunta11 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta11" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta11" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta11 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta11" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta11" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta11 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta11" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta11" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha11}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Peligros y riesgos en la Estación de Servicio.</td>
                                                    <td>El personal evaluado identifica y conoce los riesgos y peligros asociados a sus actividades diarias y conocer las medidas de seguridad aplicables a cada riesgo identificado.</td>
                                                    <td>El presente curso, va dirigido a todo el personal de la Estación de Servicio, contratistas y/o prestadores de servicios.</td>
                                                    <td>
                                                        @if($vi->pregunta3 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta3" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta3" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta3 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta3" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta3" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta3 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta3" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta3" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha3}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Política.</td>
                                                    <td>El personal evaluado conoce la política establecida en la Estación de Servicio y sus alcances en materia de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente.</td>
                                                    <td>Curso dirigido a todo personal interno, contratista, proveedores y clientes de la Estación de Servicio.</td>
                                                    <td>
                                                        @if($vi->pregunta4 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta4" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta4" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta4 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta4" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta4" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta4 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta4" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta4" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha4}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Residuos Peligrosos.</td>
                                                    <td>El personal evaluado es capaz de identificar, manejar, y almacenar correctamente, los residuos peligrosos generados, minimizando su generación dentro de la Estación de Servicio.</td>
                                                    <td>El presente curso, está dirigido a gerentes, supervisores, despachadores, auxiliares administrativos y generales, contratistas y prestadores de servicio que generen residuos peligrosos durante sus actividades dentro de la Estación de Servicio.</td>
                                                    <td>
                                                        @if($vi->pregunta16 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta16" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta16" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta16 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta16" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta16" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta16 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta16" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta16" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha16}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Señalización de Seguridad en el Centro de Trabajo.</td>
                                                    <td>El personal evaluado conoce e interpreta correctamente la señalización de seguridad ubicada dentro de la Estación de Servicio.</td>
                                                    <td>Curso dirigido al personal interno que labora en la Estación de Servicio así como contratistas y proveedores, para la correcta interpretación de la señalización aplicable en su área de trabajo de acuerdo a la NOM-005-ASEA-2016 y a la NOM-026-STPS-2008.</td>
                                                    <td>
                                                        @if($vi->pregunta17 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta17" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta17" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta17 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta17" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta17" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta17 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta17" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta17" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha17}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Simulacro</td>
                                                    <td>Que todo el personal que labora en la estación de servicios, visitantes y brigadistas, tenga una reacción adecuada ante una emergencia real, siguiendo los protocolos de respuesta a emergencia representados en los simulacros.</td>
                                                    <td>Las representaciones de los simulacros serán lo más real posible a los riesgos identificados tanto internos como externos.</td>
                                                    <td>
                                                        @if($vi->pregunta18 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta18" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta18" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta18 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta18" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta18" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta18 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta18" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta18" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha18}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Trabajos en alturas.</td>
                                                    <td>El personal evaluado conoce las condiciones de seguridad antes, durante y después, de realizar trabajos en alturas.</td>
                                                    <td>El presente curso, va dirigido al supervisor de piso, despachadores, auxiliares generales, contratistas y/o prestadores de servicio.</td>
                                                    <td>
                                                        @if($vi->pregunta21 == 'Si')
                                                        Si <input class="form-check-input" type="radio" name="pregunta21" id="flexRadioDefault1" value="Si" checked><br>
                                                        @else
                                                        Si <input class="form-check-input" type="radio" name="pregunta21" id="flexRadioDefault1" value="Si"><br>
                                                        @endif
                                                        @if($vi->pregunta21 == 'No')
                                                        No <input class="form-check-input" type="radio" name="pregunta21" id="flexRadioDefault2" value="No" checked><br>
                                                        @else
                                                        No <input class="form-check-input" type="radio" name="pregunta21" id="flexRadioDefault2" value="No"><br>
                                                        @endif
                                                        @if($vi->pregunta21 == 'N/A')
                                                        N/A <input class="form-check-input" type="radio" name="pregunta21" id="flexRadioDefault3" value="N/A" checked><br>
                                                        @else
                                                        N/A <input class="form-check-input" type="radio" name="pregunta21" id="flexRadioDefault3" value="N/A"><br>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha21}}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

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
        </div>
@endsection
