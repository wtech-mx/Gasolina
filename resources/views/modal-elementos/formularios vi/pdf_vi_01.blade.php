<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Documento Pdf VI 01</title>
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
                 CÓDIGO: VI-01
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
                 CÓDIGO: VI-01
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
                    <br>
                    <strong>1.- OBJETIVO</strong> <br><br>
                    1.1.- Establecer el procedimiento para llevar a cabo la detección de necesidades de capacitación y
                    entrenamiento, así como los métodos de seguimiento y evaluación de todo el personal de la Estación
                    de Servicio.<br><br>
                    <strong>2.- ALCANCE</strong><br><br>
                    2.1.- Este procedimiento, es aplicable para todo el personal interno de la Estación de Servicio y la
                    capacitación de contratistas, subcontratistas, prestadores de servicio y proveedores que se establece
                    dentro del procedimiento de disposiciones para la seguridad del contratista.<br><br>
                    <strong>3.- RESPONSABILIDADES Y DESARROLLO</strong><br><br>
                   <strong> 3.1.- Identificación de necesidades de capacitación.</strong><br><br>
                    Las necesidades de capacitación se detectan de acuerdo con el formato matriz de competencia y
                    formación, a fin de asegurar la competencia del personal con base al perfil de puesto, actividades y sus
                    necesidades de conocimiento, capacitación y experiencia necesaria, los requisitos resultantes de la
                    evaluación de la competencia serán anuales.<br><br>
                    Los criterios de competencia consideran las necesidades de capacitación, tomando en cuenta los
                    aspectos ambientales, peligros identificados para sus actividades, requisitos legales y otros aplicables.
                    La evaluación de la competencia debe realizarse cuando:<br><br>
                    - Ingrese nuevo personal y, una vez contratado, se le proporciona una instrucción al puesto, que
                    incluye aspectos administrativos y un entrenamiento al Sistema de Administración (Seguridad
                    Industrial, Seguridad Operativa y Protección al Medio Ambiente) y del Sistema de Gestión de las
                    Mediciones (SGM), que incluye la difusión de la política y los objetivos el que tendrá disponible en
                    la consola central de operación para poder capacitarse y presentar la evaluación correspondiente
                    con lo que acreditará el conocimiento adquirido.<br>
                    - Exista una promoción de puesto del personal o cambio de área o función.<br>
                    - Una vez cada año o antes, si se requiere.<br>
                    Dentro de la evaluación de la competencia, el responsable determinará si la necesidad de capacitación
                    detectada, será enviada a un programa general de capacitación interno o externo.
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
                 CÓDIGO: VI-01
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
                En caso de que el responsable Técnico, del SASISOPA y del SGM sea la misma persona, deberá de
                fungir y ejecutar las siguientes funciones: <br><br>
                - Representar al Regulado ante la Agencia y la CRE<br>
                - Garantizar una eficaz implementación del Sistema de Administración (SASISOPA) y del
                Sistema de Gestión de las Mediciones (SGM).<br>
                - Proponer la adopción de las mejores prácticas en materia de Seguridad Industrial.<br>
                - Ser capaz de detectar situaciones críticas por las cuales deba informar a la Agencia.<br>
                - Entre otras; establecidas dentro de V-01, procedimiento para asegurar la disponibilidad de
                recursos y establecer las funciones, responsabilidad y autoridad del representante técnico.<br><br>
                En caso de que el responsable del SASISOPA Y del SGM no sea el o la misma persona es importante
                mencionar que las funciones se encontrarán dentro del procedimiento V-01, procedimiento para
                asegurar la disponibilidad de recursos y establecer las funciones, responsabilidad y autoridad del
                representante técnico.<br><br>
                <strong>3.2.- Plan general de capacitación interna.</strong>
                El plan general de capacitación interno contiene los siguientes campos: <br><br>
                - Fecha de alta.<br>
                - Responsable del plan general de capacitación interno.<br>
                - Curso.<br>
                - Conocimiento.<br>
                - Alcance.<br>
                - Los integrantes detectados por curso.<br>
                Con base en lo determinado en el plan general de capacitación interno, el personal de la Estación de
                Servicio podrá tomar los cursos y presentar su evaluación a través de la Herramienta Digital Gasafe.<br><br>
                <strong>3.3.- Cursos</strong><br><br>
                En la consola central de operación, en el botón de evaluación interna, el usuario podrá consultar todos
                los cursos que hayan sido detectados en su evaluación de la competencia donde podrá tomar el curso
                y presentar el examen correspondiente. Una vez presentada la evaluación, el sistema le dará una
                calificación aprobatoria o no aprobatoria, en caso de ser no aprobatoria, el sistema le configurará de
                nuevo el curso y volverá a presentar la evaluación correspondiente; de esta manera, el usuario podrá
                adquirir el conocimiento necesario para poder dar cumplimiento al plan general de capacitación interno

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
                 CÓDIGO: VI-01
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
                <strong>3.4.- Plan general de capacitación externo.</strong>
                El plan general de capacitación externo contiene los siguientes campos:<br><br>
                1. Fecha de alta. <br>
                2. Nombre del curso. <br>
                3. Objetivo. <br>
                4. Alcance. <br>
                5. Duración. <br>
                6. Instructor. <br>
                7. Fecha programada. <br>
                8. Fecha de realización. <br>
                9. Evidencia del curso. <br>
                10. Integrantes detectados por curso. <br> <br>
                Campos 1, 2, 10, son campos que el sistema registra automáticamente. <br> <br>
                Campos 3, 4, 5, 6, 7, son campos que deberá de cargar el responsable y los tendrá que obtener del
                agente capacitador. <br> <br>
                Campos 8, 9, son campos que el responsable tendrá que cargar al plan general de capacitación
                externa. <br> <br>
                En caso de que la capacitación sea impartida externamente o en alguna institución, el personal que
                asista, debe solicitar constancia, diploma o certificado, según corresponda y debe entregar una copia
                de dicha constancia al responsable para su registro en el campo 8 del plan general de capacitación
                externa. <br><br>
                En caso de realizar la capacitación para administrar riesgos regulados por la STPS y respuesta a
                tención a emergencias se debe de contar con la evidencia de que fue capacitado por un agente
                capacitador registrado ante la STPS o Protección Civil<br><br>
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
                 CÓDIGO: VI-01
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
                    <strong>3.5.- Registros de competencia.</strong> <br><br>
                    Los registros de competencia tales como la inducción, capacitación entrenamientos se resguardan
                    dentro del elemento 6 de la herramienta Gasafe, todos los usuarios de la herramienta Gasafe se le
                    asigna un curso de inducción, este curso cuenta con la política, Aspectos e Impactos Ambientales,
                    Objetivos y metas del Sistema de Administración (SASISOPA) y del Sistema de Gestión de las
                    Mediciones (SGM), Actividades Riesgosas y permisos de trabajo, Equipo de Protección personal,
                    Señalización entre otros, <br><br>
                    Los registros y evaluaciones de las capacitaciones internas de cada trabajador, así como el histórico de
                    las evaluaciones. Las evidencias de las capacitaciones y entrenamientos externos, como son
                    constancias de capacitación y la evidencia de ejecución de los cursos por un agente capacitador
                    externo.<br><br>
                    <strong>4.- REGISTROS</strong><br><br>
                    4.1.- Matriz de competencia y formación.<br>
                    4.2.- Plan general de capacitación interno.<br>
                    4.3.- Plan General de capacitación externo.<br>
                </p>
            </div>

  </body>
</html>
