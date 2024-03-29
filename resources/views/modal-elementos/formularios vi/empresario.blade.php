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

                                    <h1 class="text-white">Evaluacion empresario gasolinero</h1>

                                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                                    <h5></h5>

                                </div>
                            </div>
                            <div class="col-12 p-4">
                                <form method="POST" action="{{ route('update_empresario.evaluacion', $vi->id) }}" enctype="multipart/form-data" role="form">
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
                                                    <td>4</td>
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
                                                    <td>4</td>
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
                                                    <td>4</td>
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
                                                    <td>4</td>
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
