<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Documento Pdf II-01</title>
    <link rel="stylesheet" href="{{ public_path('assets/bootstrap/css/bootstrapv3.3.6.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ public_path('css/pdfs.css') }}" type="text/css">
  </head>

  <body style="background-color:#ffffff!important">

    <div class="con_header">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td class="text-center">
                   <img class="img-card-menu mt-5" src="{{asset('logo/'.$config->logo)}}">
               </td>
               <td class="text-center title-header">
                         SISTEMA DE ADMINISTRACIÓN DE
                         SEGURIDAD INDUSTRIAL, SEGURIDAD
                         OPERATIVA Y PROTECCIÓN AL MEDIO
                         AMBIENTE (SASISOPA) y SISTEMA DE
                         GESTIÓN DE LAS MEDICIONES (SGM)
               </td>
                <td class="text-center title-header">
                     {{$config->sac}}
               </td>
             </tr>
          </tbody>
        </table>


		<div class="col-12 text-center">
            <p class="font-weight-bold">
             N° CRE: PL/20543/EXP/ES/2017<br>
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN, DETERMINACIÓN Y EVALUACIÓN DEL CUMPLIMIENTO LEGAL
            </p>
		</div>

        <table class="table bg-yellow">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
               <td class="text-center">
                  CÓDIGO: II
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                FECHA DE APROBACIÓN: 03/07/2019
              </td>
            </tr>
          </tbody>
        </table>
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

        <table class="table bg-yellow" style="margin-bottom: 9rem">
          <thead>
            <tr>
              <th class="text-center" scope="col">ELABORÓ</th>
              <th class="text-center" scope="col">ELABORÓ</th>
              <th class="text-center" scope="col">APROBÓ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
               <td class="text-center">
                  <img src="{{asset('firmas/'.$config->firma1)}}" class="img-card-menu"> <br>
                    {{$config->name1}} <br>
                    Responsable SASISOPA <br>
              </td>


              <td class="text-center title-header">
                  <img src="{{asset('firmas/'.$config->firma2)}}" class="img-card-menu"> <br>
                    {{$config->name2}} <br>
                    Responsable SGM <br>
              </td>

               <td class="text-center title-header">
                   <img src="{{asset('firmas/'.$config->firma3)}}" class="img-card-menu"> <br>
                   {{$config->name3}} <br>
                   Empresario Gasolinero <br>
              </td>
            </tr>
          </tbody>
        </table>

        <!-- segunda hoja -->
        {{-- si se descomenta es parte del codigo no se porque se tarda mucho en cargar --}}
        <div class="con_header">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td class="text-center">
                   <img class="img-card-menu mt-5" src="{{asset('logo/'.$config->logo)}}">
               </td>
               <td class="text-center title-header">
                         SISTEMA DE ADMINISTRACIÓN DE
                         SEGURIDAD INDUSTRIAL, SEGURIDAD
                         OPERATIVA Y PROTECCIÓN AL MEDIO
                         AMBIENTE (SASISOPA) y SISTEMA DE
                         GESTIÓN DE LAS MEDICIONES (SGM)
               </td>
                <td class="text-center title-header">
                     {{$config->sac}}
               </td>
             </tr>
          </tbody>
        </table>


		<div class="col-12 text-center">
            <p class="font-weight-bold">
             N° CRE: PL/20543/EXP/ES/2017<br>
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN, DETERMINACIÓN Y EVALUACIÓN DEL CUMPLIMIENTO LEGAL
            </p>
		</div>

        <table class="table bg-yellow">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
               <td class="text-center">
                  CÓDIGO: II
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                FECHA DE APROBACIÓN: 03/07/2019
              </td>
            </tr>
          </tbody>
        </table>
    </div>

            <div class="col-12 ">
                <p class="p-5">
               <strong> 1.- OBJETIVO</strong><br><br>
                1.1.- Establecer los procedimientos que permitan la identificación de peligros y aspectos ambientales y
                evaluación de riesgos e impactos ambientales asociados a los procedimientos, actividades, equipos y
                registros de la Estación de Servicio<br><br>
                <strong>2.- ALCANCE</strong><br><br>
                2.1.- Este procedimiento, involucra a todas las áreas de trabajo de la Estación de Servicio, así como a
                los colaboradores, contratistas, subcontratistas y visitantes que se encuentren dentro de las
                instalaciones de dicha estación.<br><br>
                <strong>3.- RESPONSABILIDADES Y DESARROLLO</strong><br><br>
                La identificación de peligros y aspectos ambientales y evaluación de riesgos e impactos ambientales,
                será por medio de los siguientes procedimientos:
                <strong>3.1.- Identificación de requisitos legales aplicables.</strong><br><br>
                Este procedimiento, establece los lineamientos y metodología para la identificación de peligros y la
                evaluación de los riesgos para determinar los controles operacionales requeridos, para que estos
                peligros sean evaluados, priorizados y controlados hasta un nivel de riesgo aceptable, que permitan
                promover la seguridad, salud e integridad física del personal y de las instalaciones, en los sitios de
                trabajo. El formato de registro de este procedimiento es el siguiente:<br><br>

                3.1.1.- Matriz de identificación de peligros y evaluación de riesgo y control operacional.<br><br>
                <strong>3.2.- Procedimiento para la identificación de aspectos e impactos ambientales.</strong><br><br>
                Este procedimiento, establece la metodología que permite identificar los aspectos ambientales y
                determinar su significancia para poder determinar los controles operacionales que están asociados a
                los procedimientos, actividades y registros de la Estación de Servicio. El Formato de registro de este
                procedimiento es el siguiente:<br><br>
                </p>
            </div>

<div class="con_header">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td class="text-center">
                   <img class="img-card-menu mt-5" src="{{asset('logo/'.$config->logo)}}">
               </td>
               <td class="text-center title-header">
                         SISTEMA DE ADMINISTRACIÓN DE
                         SEGURIDAD INDUSTRIAL, SEGURIDAD
                         OPERATIVA Y PROTECCIÓN AL MEDIO
                         AMBIENTE (SASISOPA) y SISTEMA DE
                         GESTIÓN DE LAS MEDICIONES (SGM)
               </td>
                <td class="text-center title-header">
                     {{$config->sac}}
               </td>
             </tr>
          </tbody>
        </table>


		<div class="col-12 text-center">
            <p class="font-weight-bold">
             N° CRE: PL/20543/EXP/ES/2017<br>
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN, DETERMINACIÓN Y EVALUACIÓN DEL CUMPLIMIENTO LEGAL
            </p>
		</div>

        <table class="table bg-yellow">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
               <td class="text-center">
                  CÓDIGO: II
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                FECHA DE APROBACIÓN: 03/07/2019
              </td>
            </tr>
          </tbody>
        </table>
    </div>

            <div class="col-12 ">
                <p class="p-5">
                   <strong> 3.2.1.-</strong> Matriz de identificación de aspectos e impactos ambientales. <br><br>
                    <strong>3.3.- Difusión.</strong><br><br>
                    La comunicación de los peligros y de aspectos ambientales a las actividades del personal de la
                    Estación de Servicio, los cambios y las actualizaciones referentes a este procedimiento, deberán de
                    ser comunicados a la brevedad a la Alta Dirección mediante el formato de difusión que se encuentra en
                    el calendario de ejecución de la actividad correspondiente al que se le tendrá que poner una
                    descripción de lo que se desea difundir, señalar el tipo de difusión interna o externa, el periodo de
                    publicación así como el medio por el que se requiera llevar a cabo la difusión.<br><br>
                    El formato de difusión, se atenderá de acuerdo a lo establecido dentro del procedimiento de
                    comunicación interna y externa y se dará seguimiento y cierre dentro de la matriz de registro y
                    seguimiento de comunicación interna y externa.<br><br>
                    <strong>3.4.- Solicitud de acción correctiva y preventiva.</strong><br><br>
                    Toda solicitud de acción preventiva y correctiva referente a este procedimiento, se llevará a cabo por
                    medio del formato de acción correctiva que se encuentra en el calendario de ejecución de la actividad
                    correspondiente el cual se tendrá que poner una descripción del hallazgo u oportunidad de mejora que
                    se detecte.<br><br>
                    El formato de solicitud de acción preventiva y correctiva, se atenderá de acuerdo a lo establecido
                    dentro del procedimiento para el manejo de no conformidades, acciones preventivas y correctivas del
                    Sistema de Administración y se dará seguimiento y cierre dentro de la matriz de alta y seguimiento de
                    acción preventiva o correctiva.<br><br>
                   <strong> 4.- REGISTROS</strong><br><br>
                    <strong>4.1.-</strong> Procedimiento para la identificación de peligros y evaluación de riesgos.<br>
                    <strong>4.2.-</strong> Matriz de identificación de peligros y evaluación de riesgo y control operacional.<br>
                    <strong>4.3.-</strong> Procedimiento para la identificación de aspectos e impactos ambientales.<br>
                    <strong>4.4.-</strong> Matriz de identificación de aspectos e impactos ambientales.<br>
                </p>
            </div>

  </body>
</html>
