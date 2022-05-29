<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Documento Pdf VI</title>
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
                  <img class="img-card-menu mt-5" src="assets\img\pdf\2.png">
              </td>
              <td class="text-center title-header">
                        SISTEMA DE ADMINISTRACIÓN DE
                        SEGURIDAD INDUSTRIAL, SEGURIDAD
                        OPERATIVA Y PROTECCIÓN AL MEDIO
                        AMBIENTE (SASISOPA) y SISTEMA DE
                        GESTIÓN DE LAS MEDICIONES (SGM)
              </td>
               <td class="text-center title-header">
                  SAC XIB CHAAC, S.A. DE C.V.
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
                  CÓDIGO: III-01
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
                  <img class="img-card-menu mt-5" src="assets\img\pdf\2.png">
              </td>
              <td class="text-center title-header">
                        SISTEMA DE ADMINISTRACIÓN DE
                        SEGURIDAD INDUSTRIAL, SEGURIDAD
                        OPERATIVA Y PROTECCIÓN AL MEDIO
                        AMBIENTE (SASISOPA) y SISTEMA DE
                        GESTIÓN DE LAS MEDICIONES (SGM)
              </td>
               <td class="text-center title-header">
                  SAC XIB CHAAC, S.A. DE C.V.
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
                  CÓDIGO: III-01
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
                1.1.- Establecer la metodología para identificar y evaluar el cumplimiento de los requisitos legales,
                normatividad y otros requisitos en materia de Seguridad Industrial, Seguridad Operativa y Protección al
                Medio Ambiente y para la Gestión de las Mediciones, aplicables a los procesos, servicios y actividades
                que se desarrollan dentro de la Estación de Servicio.<br>
                <strong>2.- ALCANCE</strong><br><br>
                2.1.- Determinar todos los requisitos legales involucrados en todas las áreas de trabajo, instalación y
                actividades que se desarrollan dentro de la Estación de Servicio.<br>
                <strong>3.- DEFINICIONES</strong><br><br>
                <strong>3.1.- Identificación de requisitos legales aplicables.</strong><br>
                La identificación y evaluación de los requisitos legales se realizará mediante la matriz de evaluación y
                cumplimiento de aspectos legales y la base de la matriz serán las actividades, servicios, procesos y
                procedimientos, que se desarrollan en la Estación de Servicio; otra fuente de información importante
                para este punto del Sistema de Administración (SASISOPA) y del Sistema de Gestión de las
                Mediciones (SGM) es la identificación y evaluación de aspectos e impactos ambientales y la
                evaluación de los peligros y riesgos.<br>
                Los requisitos legales que se involucran en este procedimiento son:<br><br>
                - Leyes.<br>
                - Reglamentos.<br>
                - Decretos y acuerdos publicados en el DOF.<br>
                - Normas.<br>
                - Especificaciones y estándares requeridos por la ASEA.<br>
                - Requisitos estatales en materia de Medio Ambiente y Seguridad.<br>
                - Autorizaciones, licencias y permisos que se originen en la entidad donde la Estación de Servicio<br>
                presta sus servicios.<br>
                - Disposiciones Administrativas de Carácter General<br><br><br><br>
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
                  <img class="img-card-menu mt-5" src="assets\img\pdf\2.png">
              </td>
              <td class="text-center title-header">
                        SISTEMA DE ADMINISTRACIÓN DE
                        SEGURIDAD INDUSTRIAL, SEGURIDAD
                        OPERATIVA Y PROTECCIÓN AL MEDIO
                        AMBIENTE (SASISOPA) y SISTEMA DE
                        GESTIÓN DE LAS MEDICIONES (SGM)
              </td>
               <td class="text-center title-header">
                  SAC XIB CHAAC, S.A. DE C.V.
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
                  CÓDIGO: III-01
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
                Los requisitos legales ambientales y de seguridad para la Estación de Servicio, provienen de los
                siguientes organismos:<br><br>
                <strong>- SEMARNAT (Secretaría de Medio Ambiente y Recursos Naturales).</strong><br>
                <strong>- ASEA (Agencia de Seguridad, Energía y Ambiente).</strong><br>
                <strong>- CONAGUA (Comisión Nacional del Agua).</strong><br>
                <strong>- CRE (Comisión Reguladora de Energía).</strong><br>
                <strong>- SENER (Secretaria de Energía).</strong><br><br>
                3.1.1.- En caso de STPS, se consideran ciertas normas aplicadas como mejores prácticas y parte de
                prevención de riesgos en la materia de:<br><br>
                <strong>1.</strong> Instalaciones seguras. <br>
                <strong>2.</strong> Iluminación. <br>
                <strong>3.</strong> Materiales peligrosos. <br>
                <strong>4.</strong> Equipo de protección personal. <br>
                <strong>5.</strong> Tierras físicas y pararrayos. <br>
                <strong>6.</strong> Tanques sujetos a presión. <br>
                <strong>7.</strong> Respuesta a emergencias. <br>
                <strong>8.</strong> Maquinaria y equipo. <br>
                <strong>9.</strong> Trabajos en alturas. <br>
                <strong>10.</strong> Espacios confinados. <br>
                <strong>11.</strong> Comisión de Seguridad. <br>
                <strong>12.</strong> Reporte de accidentes. <br>
                <strong>13.</strong> Colores y señales. <br>
                <strong>14.</strong> Actividades de soldadura. <br>
                <strong>15.</strong> Mantenimiento eléctrico. <br>
                <strong>16.</strong> Servicios preventivos. <br>
                <strong>17.</strong> Seguridad en construcción. <br> <br>
                3.1.2.- Para esta identificación, la Estación de Servicio podrá utilizar diferentes fuentes aplicables para
                el Sector de Hidrocarburos provenientes de:<br> <br>
                - Diario Oficial de la Federación-DOF (papel o electrónico). <br><br>
                - Gaceta del Estado (fuentes estatales).
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
                  <img class="img-card-menu mt-5" src="assets\img\pdf\2.png">
              </td>
              <td class="text-center title-header">
                        SISTEMA DE ADMINISTRACIÓN DE
                        SEGURIDAD INDUSTRIAL, SEGURIDAD
                        OPERATIVA Y PROTECCIÓN AL MEDIO
                        AMBIENTE (SASISOPA) y SISTEMA DE
                        GESTIÓN DE LAS MEDICIONES (SGM)
              </td>
               <td class="text-center title-header">
                  SAC XIB CHAAC, S.A. DE C.V.
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
                  CÓDIGO: III-01
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
                - Internet.<br>
                - Periódicos y revistas especializadas.<br>
                - Partes interesadas.<br>
                - Matriz de Identificación de Peligros y Evaluación de Riesgos.<br>
                - Matriz de Identificación y Evaluación de Aspectos Ambientales.<br>
                - Organizaciones gubernamentales.<br><br>
               <strong> 3.1.3.-</strong> Todos los requisitos legales que se hayan identificado, serán inscritos en el formato “Matriz de
                Requisitos Legales Aplicables”.<br><br>
                Este formato, se llenará en electrónico a través de la Herramienta Tecnológica Gasafe.<br><br>
                El llenado de la “Matriz de Requisitos Legales, inicia indicando los siguientes puntos:<br><br>
                - Ley, Reglamento, Norma o Fundamento Legal aplicable.<br>
                - Marco normativo y la descripción (capítulos, artículos o fracciones).<br>
                - Área de impacto (Medio Ambiente o Seguridad).<br>
                - Mecanismo de cumplimiento dentro del Sistema de Administración.<br>
                - Periodo de cumplimiento del aspecto legal.<br>
                - La regla del Sistema de Administración en la que el aspecto legal impacta.<br>
                - Se identificará cuál requisito legal es aplicable.<br>
                - El sistema evaluará de forma inicial el cumplimiento en base a la lista de control de permisos y
                autorizaciones.<br><br>
                <strong>3.2.- Cumplimiento de requisitos legales aplicables.</strong><br><br>
                Una vez identificados los requisitos legales aplicables, serán analizados por el responsable de esta
                actividad dentro del Sistema de Administración (SASISOPA) y del Sistema de Gestión de las
                Mediciones (SGM); esto, con la finalidad de establecer los puntos que aplican a la Estación de Servicio
                o sitio de trabajo en función de lo mencionado en el primer párrafo de este punto. El responsable,
                deberá de revisar el contenido del o de los requisitos aplicables, así como las implicaciones que estos
                conllevan. Posterior a esta actividad, establecerá las acciones y medios con los que se dará
                cumplimiento a dichos requisitos. Todos aquellos requisitos aplicables identificados cuyos documentos
                oficiales o formales, requieran ser adquiridos por la organización, como leyes, reglamentos y/o normas,
                son considerados como documentos externos y deberán ser controlados de acuerdo a lo establecid
                en el procedimiento “Control de Documentos y Registros” en el listado de documentación externa del
                sistema en su versión más actual.

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
                  <img class="img-card-menu mt-5" src="assets\img\pdf\2.png">
              </td>
              <td class="text-center title-header">
                        SISTEMA DE ADMINISTRACIÓN DE
                        SEGURIDAD INDUSTRIAL, SEGURIDAD
                        OPERATIVA Y PROTECCIÓN AL MEDIO
                        AMBIENTE (SASISOPA) y SISTEMA DE
                        GESTIÓN DE LAS MEDICIONES (SGM)
              </td>
               <td class="text-center title-header">
                  SAC XIB CHAAC, S.A. DE C.V.
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
                  CÓDIGO: III-01
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
                <strong>3.3.- Evaluación del cumplimiento de los requisitos legales aplicables.</strong> <br><br>
                Una vez que los requisitos legales aplicables han sido analizados y se han establecido los mecanismos
                y medios para su cumplimiento, de manera semestral, se deberá de evaluar el grado y nivel de
                cumplimiento de los mismos. Lo anterior, a través de auditorías (internas o externas) utilizando la
                matriz de requisitos legales. Si en esta evaluación se detecta el incumplimiento de alguno (s) de los
                requisitos legales aplicables identificados en la matriz, se considerará como una No Conformidad y se
                deberá de atender como tal en base a lo establecido en el procedimiento de No Conformidades,
                Acciones Preventivas y Correctivas. De igual manera, la evaluación del cumplimiento legal será una
                entrada a revisión de resultados del Sistema de Administración (SASISOPA) y del Sistema de Gestión
                de las mediciones (SGM).<br><br>
                Se deberá de mantener el registro correspondiente de la evaluación del cumplimiento de los requisitos
                legales aplicables cada 6 meses dentro del formato.<br><br>
                <strong>3.4.- Actualización de la Matriz de Requisitos Legales Aplicables.</strong><br><br>
                La Matriz de Requisitos Legales Aplicables se tiene que mantener actualizada en base a los cambios
                en la legislación, normatividad o ante nuevos requisitos legales aplicables o de otra índole a los que la
                organización se suscriba de manera voluntaria o por obligación. La revisión de los cambios en la
                normatividad se realizará de manera trimestral por el responsable de este procedimiento. Esta matriz,
                también podrá ser modificada en caso de que existan cambios o modificaciones en su alcance,
                entendiéndose como cambios:<br><br>
                - La incorporación de nuevas actividades, servicios, procesos o procedimientos de la Estación de
                Servicio. <br>
                - La ampliación o modificación de las instalaciones o sitios de trabajo. <br>
                - La identificación de nuevos peligros y su evaluación de riesgo. <br>
                - La identificación de nuevos aspectos ambientales y su impacto. Para la actualización de la matriz,
                se podrá disponer de las fuentes de información mencionadas en el punto 6.1 de este documento. <br><br>
                <strong>4.- REGISTROS</strong> <br><br>
                4.1.- Matriz de Requisitos Legales Aplicables.
                </p>
            </div>

  </body>
</html>
