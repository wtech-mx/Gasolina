<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Documento Pdf</title>
    <link rel="stylesheet" href="{{ public_path('assets/bootstrap/css/bootstrapv3.3.6.min.css') }}" type="text/css">
  </head>

  <body style="background-color:#003566!important">
    <style>

        .container-fluid{
            background-color: #F2F4F4;
        }

        .tittle_header{
            font-size: 12px;
            padding: 15px;;
        }

        .bg-yellow{
            background-color: #FFC300;
            border: #FFC300 2px solid!important;
        }

        .col-4{
            border: #ccc 2px solid;
        }

        .col-12{
            border: #ccc 2px solid;
        }

        .col-8{
            border: #ccc 2px solid;
        }

        .col-6{
            border: #ccc 2px solid;
        }

    </style>

<div class="container-fluid mt-5" style="max-width: 80%;border-radius:30px">

	<div class="row">

		<div class="col-4">
            <img class="img-card-menu mt-5" src="assets\img\pdf\2.png">
		</div>

		<div class="col-4">
            <p class="text-center tittle_header">
                SISTEMA DE ADMINISTRACIÓN DE
                SEGURIDAD INDUSTRIAL, SEGURIDAD
                OPERATIVA Y PROTECCIÓN AL MEDIO
                AMBIENTE (SASISOPA) y SISTEMA DE
                GESTIÓN DE LAS MEDICIONES (SGM)
            </p>
		</div>

		<div class="col-4">
            <p class="text-center mt-5">
                SAC XIB CHAAC, S.A. DE C.V.
            </p>
		</div>

		<div class="col-12 text-center">
            <p class="font-weight-bold">
             Nº CRE: PL/20543/EXP/ES/2017 <br>
             POLÍTICA DOCUMENTADA
            </p>
		</div>

		<div class="col-4 font-weight-bold text-center bg-yellow">
            CODIGO: I-01-01
		</div>

		<div class="col-4 font-weight-bold text-center bg-yellow">
            N° REV.:00
		</div>

		<div class="col-4 font-weight-bold text-center bg-yellow">
            FECHA DE APROBACIÓN: 20/09/2019
		</div>

		<div class="col-12 text-center">
            <h5 class="p-3">CONTROL DE CAMBIOS</h5>

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th >ESTADO DE REVISIÓN</th>
                    <th >DESCRIPCIÓN DE LOS CAMBIOS</th>
                    <th >FECHA</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th >1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                  </tr>
                  <tr>
                    <th >2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>

                  </tr>
                  <tr>
                    <th >3</th>
                    <td>Larry</td>
                    <td>the Bird</td>

                  </tr>
                </tbody>
              </table>

              <h5 class="p-5">SECCIÓN DE FIRMAS DE AUTORIZACIÓN</h5>

		</div>

        <div class="col-8 text-center mt-5">
            ELABORÓ
            <div class="row">
                <div class="col-6">
                    <img src="{{asset('firmas/'.$config->firma1)}}" alt="">
                </div>

                <div class="col-6">
                    <img src="{{asset('firmas/'.$config->firma2)}}" alt="">
                </div>

                <div class="col-6 bg-yellow">
                    <p>
                        {{$config->name1}}
                        Responsable SASISOPA
                    </p>
                </div>

                <div class="col-6 bg-yellow">
                    <p>
                        {{$config->name2}}
                        Responsable SGM
                    </p>

                </div>
            </div>
        </div>

        <div class="col-4 text-center mt-5">
            APROBÓ
            <div class="row">
                <div class="col-12">
                    <img src="{{asset('firmas/'.$config->firma3)}}" alt="">
                </div>

                <div class="col-12 bg-yellow">
                    <p>
                        {{$config->name3}}
                        Empresario Gasolinero
                    </p>
                 </div>
            </div>
        </div>

        <!-- segunda hoja -->
{{--        si se descomenta es parte del codigo no se porque se tarda mucho en cargar--}}
        <div class="row mt-5">

{{--            <div class="col-4">--}}
{{--                <img class="img-card-menu mt-5" src="{{ asset('assets/img/pfd/2.png') }}">--}}
{{--            </div>--}}

{{--            <div class="col-4">--}}
{{--                <p class="text-center tittle_header">--}}
{{--                    SISTEMA DE ADMINISTRACIÓN DE--}}
{{--                    SEGURIDAD INDUSTRIAL, SEGURIDAD--}}
{{--                    OPERATIVA Y PROTECCIÓN AL MEDIO--}}
{{--                    AMBIENTE (SASISOPA) y SISTEMA DE--}}
{{--                    GESTIÓN DE LAS MEDICIONES (SGM)--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <div class="col-4">--}}
{{--                <p class="text-center mt-5">--}}
{{--                    SAC XIB CHAAC, S.A. DE C.V.--}}
{{--                </p>--}}
{{--            </div>--}}


{{--            <div class="col-12 text-center">--}}
{{--                <p class="font-weight-bold">--}}
{{--                 Nº CRE: PL/20543/EXP/ES/2017 <br>--}}
{{--                 POLÍTICA DOCUMENTADA--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <div class="col-4 font-weight-bold text-center bg-yellow">--}}
{{--                CODIGO: I-01-01--}}
{{--            </div>--}}

{{--            <div class="col-4 font-weight-bold text-center bg-yellow">--}}
{{--                N° REV.:00--}}
{{--            </div>--}}

{{--            <div class="col-4 font-weight-bold text-center bg-yellow">--}}
{{--                FECHA DE APROBACIÓN: 04/07/2019--}}
{{--            </div>--}}

{{--            <div class="col-12 ">--}}

{{--                <p class="p-5">--}}
{{--                    La Estación de Servicio está consciente de la importancia de la protección al Medio Ambiente, Seguridad Operativa y Seguridad--}}
{{--                    Industrial, la correcta Gestión de las Mediciones y del estricto cumplimiento de las leyes, reglamentos y normas que le aplican que--}}
{{--                    son aspectos esenciales y parte integral del Sistema de Administración (SASISOPA) y del Sistema de Gestión de Medición que--}}
{{--                    asegura un liderazgo sustentable en el tiempo así mismo nos dará orientación para la gestión de las actividades y procesos de--}}
{{--                    medición y para la confirmación metrológica del equipo de medición utilizado para apoyar y demostrar el cumplimiento de los--}}
{{--                    requisitos metrológicos. En este marco, la Estación de Servicio se compromete a: <br> <br>--}}

{{--                    <ul>--}}

{{--                        <li>--}}
{{--                            Trabajar de manera segura, saludable y responsable con las personas y el ambiente, cumpliendo con los requisitos legales--}}
{{--                            normativos y otros requisitos legales aplicables a nuestros contratistas, subcontratistas y/o proveedores, que interactúen--}}
{{--                            con del Sistema de Administración.--}}
{{--                        </li>--}}

{{--                        <li>--}}

{{--                            Motivar y capacitar a nuestros colaboradores para que efectúen sus labores cumpliendo con las disposiciones de protección--}}
{{--                            al Medio Ambiente, Seguridad Operativa y Seguridad Industrial de la organización.--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            Identificar y evaluar los peligros, riesgos y aspectos ambientales inherentes a nuestros procesos que puedan afectar la--}}
{{--                            eficiencia del Sistema de Administración, esto, con la finalidad de prevenir y controlar incidentes, accidentes, enfermedades,--}}
{{--                            daños a la salud e impactos negativos al entorno relacionados con el trabajo de nuestros colaboradores, contratistas y--}}
{{--                            visitantes.--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            Realizar inspecciones periódicas a fin de evaluar la eficiencia y desempeño del Sistema de Administración para identificar--}}
{{--                            oportunidades de mejora y adaptar métodos de prevención que nos lleven a una mejora continua del sistema.--}}
{{--                            Cumplir con los objetivos establecidos en el Sistema de Administración en Protección al Medio Ambiente, Seguridad--}}
{{--                            Operativa y Seguridad Industrial.--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            Esto refleja el compromiso de la Estación de Servicio a mantener la mejora continua del desempeño en materia de--}}
{{--                            Seguridad Industrial, Seguridad Operativa y protección al medio ambiente en un sistema integrado de administración que--}}
{{--                            está orientado a la búsqueda permanente de oportunidades y nuevos desafíos.--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            En relación a nuestra Política del Sistema de Gestión de las mediciones la Alta Dirección se compromete a lo siguiente:--}}
{{--                             La buena práctica profesional y con calidad de todas las actividades y procesos desprendidos del SGM.--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            Todo el personal relacionado con las actividades y procesos de medición descritas en el SGM deberá conocer y--}}
{{--                            familiarizarse con la documentación y los procedimientos aplicables en su área de trabajo.--}}
{{--                            Asegurar la mejora continua para el SGM.--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                    En relación a nuestra Política del Sistema de Gestión de las mediciones la Alta Dirección se compromete a lo siguiente:<br> <br>--}}

{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            La buena práctica profesional y con calidad de todas las actividades y procesos desprendidos del SGM.--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            Todo el personal relacionado con las actividades y procesos de medición descritas en el SGM deberá conocer y--}}
{{--                            familiarizarse con la documentación y los procedimientos aplicables en su área de trabajo.--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            Asegurar la mejora continua para el SGM.--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                        <br>--}}


{{--                </p>--}}

{{--                <p class="text-center">--}}
{{--                    C. VICTOR MANUEL PEREZ CARRILLO--}}
{{--                </p>--}}

{{--            </div>--}}

        </div>

</div>

</div>

  </body>
</html>
