<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Documento Pdf V</title>
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
                  CÓDIGO: V
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
                  CÓDIGO: V
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
                <strong>1.- OBJETIVO</strong> <br><br>
                <strong>1.1.-</strong> Precisar las funciones y responsabilidades encomendadas a la Estación de Servicio, derivadas de
                la implementación y operación del Sistema de Administración (SASISOPA) y del Sistema de Gestión
                de las Mediciones (SGM) para evitar duplicidad, detectar omisiones y deslindar responsabilidades.<br><br>
                <strong>2.- ALCANCE</strong><br><br>
                <strong>2.1.-</strong> Aplica a todo el personal que se encuentra laborando dentro de la Estación de Servicio, así como
                las actividades deslindadas de la implementación y operación del Sistema de Administración
                (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM).<br><br>
                <strong>3. RESPONSABILIDADES Y DESARROLLO</strong><br><br>
               <strong> 3.1 Designar recursos humanos y financieros</strong><br><br>
                El Empresario Gasolinero asegurará la disponibilidad de recursos esenciales para establecer,
                implementar, mantener y mejorar el Sistema de Administración (SASISOPA) y del Sistema de Gestión
                de las Mediciones (SGM). Éstos, incluyen los recursos humanos dentro de la matriz de
                responsabilidades del Sistema de Administración (SASISOPA) y del Sistema de Gestión de las
                Mediciones (SGM). Para los recursos como la infraestructura de la organización y los recursos
                financieros y tecnológicos, se guardará la evidencia de las facturas que la herramienta GASAFE envíe
                mes a mes.<br><br>
                <strong>3.2 Designación del Representante Técnico del Regulado (RT)</strong><br><br>
                La Alta Dirección representada por el Empresario Gasolinero, asignará al responsable técnico en su
                cédula de cliente regulado:<br><br>
                El Responsable Técnico del Sistema de Administración (SASISOPA) y del Sistema de Gestión de las
                Mediciones (SGM), será asignado y notificado por medio del Documento de asignación de
                Responsable técnico, de acuerdo con lo que establecen las DACG SASISOPA Expendio al Público,
                mismo, que quedará disponible dentro de la herramienta Gasafe para consulta y descarga.<br><br>
               <strong> 3.2.1 Otorgamiento de responsabilidades y funciones del RT SASISOPA</strong><br><br>
                El RT tendrá las siguientes funciones y responsabilidades:
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
                  CÓDIGO: V
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
                    - Fungir como representante técnico de la estación ante la ASEA. <br>
                    - Asegurar que el Sistema de Administración es conforme con los requisitos establecidos en los
                    lineamientos de la ASEA y demás normativa aplicable.<br>
                    - Informar a la Alta Dirección del Regulado acerca del desempeño del Sistema de Administración.<br>
                    - Proponer la adopción de medidas para aplicar las mejores prácticas.<br>
                    - Dar aviso a la Agencia de cualquier riesgo o riesgo crítico, que pueda comprometer la Seguridad
                    Industrial, la Seguridad Operativa o el Medio Ambiente.<br>
                    - Coordinar y apoyar al resto de las áreas en la definición e implementación de las acciones
                    necesarias para subsanar los incumplimientos de los requisitos del SA.<br>
                    - Coordinar los trabajos internos para subsanar las irregularidades o incumplimientos de la
                    normatividad externa e interna aplicable, establecida en la matriz de requisitos legales.<br><br>
                   <strong> 3.2.2 Otorgamiento de responsabilidades y funciones del RT SGM</strong> <br><br>
                    - Asegurar que las actividades del SGM se apeguen a los procedimientos correspondientes.<br>
                    - Elaborar los reportes e información sobre el SGM requerida por la Comisión o por la Empresa
                    especializada que los solicite como parte de una visita de verificación.<br>
                    - Conservar la documentación relativa al SGM para su consulta por la Comisión cuando ésta lo
                    requiera o para consulta de otros Permisionarios, o usuarios del sistema de almacenamiento
                    permisionado por un periodo mínimo de 10 años.<br>
                    - Generar, organizar, implementar cambios, difundir, almacenar y dar trazabilidad a toda la
                    información derivada de la operación del SGS.<br><br>
                    <strong>3.3 Funciones y responsabilidades del personal</strong> <br><br>
                    El responsable Técnico del Sistema de Administración (SASISOPA) y del Sistema de Gestión de las
                    Mediciones (SGM), será el responsable de:<br>
                    - Generar el alta de los usuarios y asignación de los puestos que les corresponden dentro de la
                    Estación de Servicio.
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
                  CÓDIGO: V
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
                - Asignar responsables de los elementos que conforman el Sistema de Administración
                (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM) para lo que tendrá que
                conocer el procedimiento del elemento, asignar el o los puestos responsables y a los usuarios
                que corresponden a esos puestos. Cada responsable asignado tendrá que ser notificado y
                quedará documentado mediante el formato de otorgamiento de autoridad al personal interno,
                para facilitar una gestión de Seguridad Industrial, Seguridad Operativa y Protección al Medio
                Ambiente y gestión de los procesos de medición el que será enviado al correo interno de cada
                usuario. <br><br>
                - Asignar responsables de cada uno de los procedimientos que integran cada uno de los
                elementos que conforman el SASISOPA y el SGM para lo cual, tendrá que conocer el
                procedimiento del elemento, asignar el o los puestos responsables y a los usuarios que
                corresponden a esos puestos.<br><br>
                - Cada responsable asignado tendrá que ser notificado y quedará documentado mediante el
                formato de otorgamiento de autoridad al personal interno, para facilitar una gestión de
                Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente y gestión de los
                procesos de medición el que será enviado al correo interno de cada usuario.<br><br>
                - Generar las fechas de ejecución de las actividades que integran los registros de cada
                procedimiento asignado de acuerdo al programa de implementación presentado.<br><br>
                - Dentro de la matriz de responsabilidades, se establecen: responsabilidades, autoridad y ámbito
                de competencia para la implementación, operación, evaluación y mejora del Sistema de
                Administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM).<br><br>
                <strong>3.5.- Difusión</strong> <br><br>
                Toda solicitud de difusión interna y externa referente a este procedimiento, se llevará a cabo por medio
                del formato de difusión, que se encuentra en el calendario de ejecución de la actividad correspondiente
                al que se le tendrá que poner una descripción de lo que se desea difundir, señalar el tipo de difusión
                interna o externa, el periodo de publicación, así como el medio por el cual, se requiera llevar a cabo la
                difusión.<br><br>
                El formato de difusión, se atenderá de acuerdo a lo establecido dentro del procedimiento de
                comunicación interna y externa. <br><br>
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
                  CÓDIGO: V
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
                     <strong>3.6- Solicitud de acción correctiva y preventiva</strong> <br><br>
                    Toda solicitud de acción preventiva y correctiva referente a este procedimiento, se llevará a cabo por
                    medio del formato de acción correctiva que se encuentra en el calendario de ejecución de la actividad
                    correspondiente, al que se le tendrá que poner una descripción del hallazgo u oportunidad de mejora
                    que se detecte. <br><br>
                    El formato de solicitud de acción preventiva y correctiva, se atenderá de acuerdo a lo establecido
                    dentro del procedimiento para el manejo de no conformidades, acciones preventivas y correctivas del
                    Sistema de Administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM).<br><br>
                    <strong>4.- REGISTROS</strong> <br><br>
                    4.1.- Matriz de responsabilidades. <br>
                    4.2- Formato de otorgamiento de autoridad al personal interno. <br>
                    4.3.- Documento de asignación de Responsable técnico del Sistema de Administración <br>
                </p>
            </div>

  </body>
</html>
