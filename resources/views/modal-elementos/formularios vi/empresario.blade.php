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
                                    Si <input class="form-check-input" type="radio" name="pregunta1" id="flexRadioDefault1" value="Si"><br>
                                    No <input class="form-check-input" type="radio" name="pregunta1" id="flexRadioDefault2" value="No"><br>
                                    N/A <input class="form-check-input" type="radio" name="pregunta1" id="flexRadioDefault3" value="N/A"><br>
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
                                    Si <input class="form-check-input" type="radio" name="pregunta2" id="flexRadioDefault1" value="Si"><br>
                                    No <input class="form-check-input" type="radio" name="pregunta2" id="flexRadioDefault2" value="No"><br>
                                    N/A <input class="form-check-input" type="radio" name="pregunta2" id="flexRadioDefault3" value="N/A"><br>
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
                                    Si <input class="form-check-input" type="radio" name="pregunta3" id="flexRadioDefault1" value="Si"><br>
                                    No <input class="form-check-input" type="radio" name="pregunta3" id="flexRadioDefault2" value="No"><br>
                                    N/A <input class="form-check-input" type="radio" name="pregunta3" id="flexRadioDefault3" value="N/A"><br>
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
                                    Si <input class="form-check-input" type="radio" name="pregunta4" id="flexRadioDefault1" value="Si"><br>
                                    No <input class="form-check-input" type="radio" name="pregunta4" id="flexRadioDefault2" value="No"><br>
                                    N/A <input class="form-check-input" type="radio" name="pregunta4" id="flexRadioDefault3" value="N/A"><br>
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
    @endsection
