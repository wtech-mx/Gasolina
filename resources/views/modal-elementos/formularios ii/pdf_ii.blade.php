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
    </div>
		<div class="col-12 text-center">
            <p class="font-weight-bold">
             Nº CRE: PL/20543/EXP/ES/2017 <br>
             POLÍTICA DOCUMENTADA
            </p>
		</div>

        <div class="col-12 text-center">
            <p class="font-weight-bold">
                PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
            </p>
		</div>

		<div class="col-4 font-weight-bold text-center bg-yellow">
            CODIGO: II-01
		</div>

		<div class="col-4 font-weight-bold text-center bg-yellow">
            N° REV.:00
		</div>

		<div class="col-4 font-weight-bold text-center bg-yellow">
            FECHA DE APROBACIÓN: 03/07/2019
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
                    <th></th>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th></th>
                    <td></td>
                    <td></td>
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
                    <label>
                        {{$config->name1}}
                    </label><br>
                    <label for="">Responsable SASISOPA</label>
                </div>

                <div class="col-6 bg-yellow">
                    <label>
                        {{$config->name2}}
                    </label><br>
                    <label for="">Responsable SGM</label>
                </div>
            </div>
        </div>

        <div class="col-4 text-center mt-5">
            APROBÓ
            <div class="row">
                <div class="col-6">
                    <img src="{{asset('firmas/'.$config->firma3)}}" alt="">
                </div>

                <div class="col-6 bg-yellow">
                    <p>
                        {{$config->name3}}
                        Empresario Gasolinero
                    </p>
                 </div>
            </div>
        </div>

        <!-- segunda hoja -->
        {{-- si se descomenta es parte del codigo no se porque se tarda mucho en cargar --}}
        <div class="row mt-5">

            <div class="col-4">
                <img class="img-card-menu mt-5" src="{{ asset('assets/img/pfd/2.png') }}">
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

            <div class="col-12 text-center">
                <p class="font-weight-bold">
                    PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
                </p>
            </div>

            <div class="col-4 font-weight-bold text-center bg-yellow">
                CODIGO: II-01
            </div>

            <div class="col-4 font-weight-bold text-center bg-yellow">
                N° REV.:00
            </div>

            <div class="col-4 font-weight-bold text-center bg-yellow">
                FECHA DE APROBACIÓN: 03/07/2019
            </div>

            <div class="col-12 ">

                <p class="p-5">
                    1.- OBJETIVO <br> <br>

                    <ul>

                        <li>
                            1.1.- Establecer los lineamientos y metodología para la identificación de peligros y la evaluación de los
                            riesgos para determinar los controles operacionales requeridos para que estos peligros sean
                            evaluados, priorizados y controlados hasta un nivel de riesgo aceptable y que permitan promover la
                            seguridad, salud e integridad física del personal y de las instalaciones, en los sitios de trabajo.
                        </li>

                        <li>
                            2.- ALCANCE
                        </li>

                        <li>
                            2.1.- Este procedimiento, involucra a todas las áreas de trabajo de la Estación de Servicio, así como a
                            los colaboradores, contratistas, subcontratistas y visitantes que se encuentren dentro de las
                            instalaciones de dicha estación como tiendas de conveniencia o algún otro servicio que se encuentre
                            dentro de la estación.
                            Este procedimiento, involucra todas las actividades y procesos que se desprenden del Sistema de
                            Administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM) que se realizan dentro
                            de la Estación de Servicio en las diferentes etapas del proyecto, implicando a los colaboradores,
                            contratistas, subcontratistas y visitantes.
                        </li>

                        <li>
                            3.- RESPONSABILIDADES Y DESARROLLO
                        </li>

                        <li>
                            3.1.- La metodología para la identificación de peligros, evaluación de riesgos y determinación de
                            controles operacionales, es la base fundamental para tener un mejor control de los peligros a los que
                            se expone todo el personal al momento de realizar sus actividades. Es por ello que, antes de iniciar
                            con las actividades, deberá de llevarse a cabo la correspondiente identificación de peligros, valoración
                            de riesgos y determinación de controles para que estos peligros, sean evaluados, priorizados y
                            controlados hasta un nivel de riesgo aceptable.
                            Para esta identificación se toma en cuenta:<br>

                             Las actividades rutinarias y no rutinarias, anormales y situaciones de emergencia.<br>
                             Las actividades de todo el personal que tiene acceso al centro de trabajo (incluyendo contratistas y
                            visitantes).<br>
                             Grado de conciencia del personal y sus habilidades. <br>
                             Identificación de peligros originados, fuera del trabajo, capaces de afectar adversamente a la
                            propiedad, la seguridad y salud del personal y bajo el control de la organización dentro del centro
                            de trabajo.<br>
                             Peligros creados en las inmediaciones del centro de trabajo por actividades del trabajo
                            relacionadas bajo el control de la organización.<br>
                             Infraestructura, equipo y materiales en el centro de trabajo, que pueden ser o no, proporcionados
                            por la organización u otros.<br>
                             Cambios o propuestas de cambios en la organización, en sus actividades o materiales. <br>
                             Modificaciones al Sistema de Administración, incluyendo cambios temporales y sus impactos en las
                            operaciones, procedimientos y actividades.<br>
                             Cualquier actividad legal aplicable, relacionada con la evaluación de riesgos e implementación de
                            controles necesarios.<br>
                             El diseño de áreas de trabajo, procesos, instalaciones, maquinaria-equipo, procedimientos de
                            operación y organización de trabajo, incluyendo su adaptación a las capacidades humanas.<br>
                             Todas aquellas actividades o procesos para la gestión de medición y para la conformación
                            metrológica.<br>

                            La identificación permite establecer los controles operacionales necesarios para estas actividades.
                            De manera general, los peligros identificados por la organización, se van a catalogar de la siguiente
                            forma:<br>
                             Eléctrico.<br>
                             Mecánico.<br>
                             Químico.<br>
                             Físicos (referentes a la salud y bienestar de la persona).<br>
                             Biológicos.<br>
                             Ergonómicos.<br>
                             Operacionales.<br>
                             Fenómenos naturales.<br>
                             Sociales.<br>
                        </li>

                        <li>
                            3.2.- Cada uno de los peligros mencionados, pueden tener diversas fuentes de origen, así como
                            generar algunos daños o consecuencias en las personas (riesgo). En la siguiente tabla, se muestra la
                            asociación entre los peligros detectados en la organización y sus posibles fuentes de origen:
                        </li>

                    </ul>


                        <br>


                </p>

                <p class="text-center">
                    C. VICTOR MANUEL PEREZ CARRILLO
                </p>

            </div>

        </div>



</div>

  </body>
</html>
