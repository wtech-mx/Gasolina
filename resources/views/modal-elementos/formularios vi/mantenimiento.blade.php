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

                                    <h1 class="text-white">Evaluacion Oficial de Mantenimiento.</h1>

                                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                                    <h5></h5>

                                </div>
                            </div>
                            <div class="col-12 p-4">
                                <form method="POST" action="{{ route('update_mantenimiento.evaluacion', $vi->id) }}" enctype="multipart/form-data" role="form">
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
                                                <th scope="col">F. actualizaci??n</th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-white">
                                                <tr>
                                                    <td>19</td>
                                                    <td>Aspectos e Impactos Ambientales.</td>
                                                    <td>El personal evaluado identifica y conoce los aspectos e impactos ambientales relacionados con las actividades que desarrolla cada trabajador de la Estaci??n de Servicio.</td>
                                                    <td>
                                                        Curso dirigido a todo el personal que labora en la Estaci??n de Servicio, contratistas y/o prestadores de servicio.
                                                    </td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta1" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta1" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta1" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha1}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Autorizaci??n para trabajos de alto riesgo.</td>
                                                    <td>El personal evaluado conoce las medidas de seguridad con las que deber?? cumplir, al realizar trabajos de mantenimiento en las instalaciones de la Estaci??n de Servicio y que sean considerados trabajos de alto riesgo.</td>
                                                    <td>El presente curso, va dirigido a todo el personal interno y externo que realice trabajos de mantenimiento considerados como trabajos peligrosos en la Estaci??n de Servicio.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta6" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta6" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta6" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha6}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Combate contra incendios.</td>
                                                    <td>El personal evaluado identifica y conoce los tipos de fuego, tipo de extintores y su uso as?? como la manera de combatir un incendio dentro de la Estaci??n de Servicio.</td>
                                                    <td>El presente curso, va dirigido a todo personal de la Estaci??n de Servicio, contratistas y/o proveedores de servicio.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta8" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta8" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta8" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha8}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Condiciones de seguridad en la Estaci??n de Servicio.</td>
                                                    <td>El personal evaluado identifica y conoce las condiciones de seguridad en las que se debe de trabajar dentro de la Estaci??n de Servicio.</td>
                                                    <td>
                                                        El presente curso, va dirigido a todo el personal de la Estaci??n de Servicio, contratistas y/o prestadores de servicio.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta23" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta23" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta23" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha23}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Condiciones de seguridad en maquinaria y equipo.</td>
                                                    <td>El personal evaluado identifica las condiciones de seguridad, sistemas de protecci??n y dispositivos de seguridad, para prevenir y proteger al personal contra riesgos de trabajo de la operaci??n y mantenimiento de la maquinaria y equipo de la Estaci??n de Servicio.</td>
                                                    <td> El presente curso, va dirigido al personal relacionado con las actividades de mantenimiento, supervisores de piso, despachadores y auxiliares generales.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta24" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta24" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta24" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha24}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Electricidad est??tica.</td>
                                                    <td>El personal evaluado conoce las condiciones de seguridad en los centros de trabajo para prevenir riesgos por electricidad est??tica de acuerdo a lo establecido en la NOM-022-STPS-2015.</td>
                                                    <td>El presente curso, va dirigido al supervisor, despachadores, auxiliares y contratistas para que conozcan las condiciones de seguridad para prevenir los riesgos por electricidad est??tica.
                                                    </td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta25" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta25" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta25" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha25}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Equipo de protecci??n personal.</td>
                                                    <td>El personal evaluado conoce e identifica el equipo de protecci??n personal que debe de usar al realizar sus actividades.</td>
                                                    <td>El presente curso, va dirigido al supervisor de piso, despachadores, auxiliares generales y contratistas y/o prestadores de servicio.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta11" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta11" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta11" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha11}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Etiquetado, bloqueo y candadeo de l??neas de producto.</td>
                                                    <td>El personal evaluado conoce las condiciones de seguridad para realizar el etiquetado, bloqueo y candadeo en l??neas de producto, derivados de los mantenimientos de la maquinaria y equipo en la Estaci??n de Servicio.</td>
                                                    <td>El presente curso, est?? dirigido a despachadores, supervisores y auxiliares de la Estaci??n de Servicio que realicen actividades de mantenimiento donde involucre actividades de bloqueo y candadeo de l??neas de producto, con la finalidad de prevenir riesgos de trabajo generados durante el mantenimiento de maquinaria y equipo.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta12" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta12" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta12" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha12}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Mantenimiento a instalaciones el??ctricas.</td>
                                                    <td>El personal evaluado es capaz de identificar las condiciones de seguridad para realizar actividades de mantenimiento a instalaciones el??ctricas de la Estaci??n de Servicio, as?? como de identificaci??n de los riesgos impl??citos en estas actividades.</td>
                                                    <td>El presente curso, est?? dirigido a contratistas y/o prestadores de servicio, despachadores, supervisores y auxiliares que laboren en la Estaci??n de Servicio y realicen actividades de mantenimiento a instalaciones el??ctricas.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta13" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta13" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta13" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha13}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Peligros y riesgos en la Estaci??n de Servicio.</td>
                                                    <td>El personal evaluado identifica y conoce los riesgos y peligros asociados a sus actividades diarias y conocer las medidas de seguridad aplicables a cada riesgo identificado.</td>
                                                    <td>El presente curso, va dirigido a todo el personal de la Estaci??n de Servicio, contratistas y/o prestadores de servicios.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta3" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta3" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta3" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha3}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Pol??tica.</td>
                                                    <td>El personal evaluado conoce la pol??tica establecida en la Estaci??n de Servicio y sus alcances en materia de Seguridad Industrial, Seguridad Operativa y Protecci??n al Medio Ambiente.</td>
                                                    <td>Curso dirigido a todo personal interno, contratista, proveedores y clientes de la Estaci??n de Servicio.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta4" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta4" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta4" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha4}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Residuos Peligrosos.</td>
                                                    <td>El personal evaluado es capaz de identificar, manejar, y almacenar correctamente, los residuos peligrosos generados, minimizando su generaci??n dentro de la Estaci??n de Servicio.</td>
                                                    <td>El presente curso, est?? dirigido a gerentes, supervisores, despachadores, auxiliares administrativos y generales, contratistas y prestadores de servicio que generen residuos peligrosos durante sus actividades dentro de la Estaci??n de Servicio.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta16" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta16" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta16" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha16}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Se??alizaci??n de Seguridad en el Centro de Trabajo.</td>
                                                    <td>El personal evaluado conoce e interpreta correctamente la se??alizaci??n de seguridad ubicada dentro de la Estaci??n de Servicio.</td>
                                                    <td>Curso dirigido al personal interno que labora en la Estaci??n de Servicio as?? como contratistas y proveedores, para la correcta interpretaci??n de la se??alizaci??n aplicable en su ??rea de trabajo de acuerdo a la NOM-005-ASEA-2016 y a la NOM-026-STPS-2008.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta17" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta17" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta17" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha17}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Simulacro</td>
                                                    <td>Que todo el personal que labora en la estaci??n de servicios, visitantes y brigadistas, tenga una reacci??n adecuada ante una emergencia real, siguiendo los protocolos de respuesta a emergencia representados en los simulacros.</td>
                                                    <td>Las representaciones de los simulacros ser??n lo m??s real posible a los riesgos identificados tanto internos como externos.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta18" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta18" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta18" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha18}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Sustancias qu??micas peligrosas.</td>
                                                    <td>El personal evaluado conoce las condiciones de seguridad para el manejo y almacenamiento de las sustancias qu??micas peligrosas dentro de la Estaci??n de Servicio.</td>
                                                    <td>El presente curso, va dirigido al supervisor de piso, despachadores y auxiliares generales.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta19" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta19" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta19" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha19}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Trabajos de soldadura y corte.</td>
                                                    <td>El personal evaluado conoce los riesgos y condiciones de seguridad antes, durante y despu??s de los trabajos de soldadura y corte.</td>
                                                    <td>El presente curso, est?? dirigido a contratistas, subcontratistas, supervisores y auxiliares generales de la Estaci??n de Servicio, que realicen trabajos donde se generen fuentes de ignici??n de acuerdo al procedimiento para trabajos que generen fuente.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta20" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta20" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta20" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha20}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Trabajos en alturas.</td>
                                                    <td>El personal evaluado conoce las condiciones de seguridad antes, durante y despu??s, de realizar trabajos en alturas.</td>
                                                    <td>El presente curso, va dirigido al supervisor de piso, despachadores, auxiliares generales, contratistas y/o prestadores de servicio.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta21" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta21" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta21" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha21}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Trabajos en Espacios Confinados.</td>
                                                    <td>El personal evaluado es capaz de identificar los riesgos y condiciones de seguridad impl??citas al realizar trabajos en espacios confinados, dentro de la Estaci??n de Servicio.</td>
                                                    <td>El presente curso, est?? dirigido a supervisores, auxiliares, contratistas y prestadores de servicio que realicen trabajos en espacios confinados dentro de la Estaci??n de Servicio, de acuerdo a la NOM-033-STPS-2015.</td>
                                                    <td>
                                                        Si <input class="form-check-input" type="radio" name="pregunta22" id="flexRadioDefault1" value="Si"><br>
                                                        No <input class="form-check-input" type="radio" name="pregunta22" id="flexRadioDefault2" value="No"><br>
                                                        N/A <input class="form-check-input" type="radio" name="pregunta22" id="flexRadioDefault3" value="N/A"><br>
                                                    </td>
                                                    <td>
                                                        {{$vi->fecha22}}
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
