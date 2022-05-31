<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Documento Pdf IV</title>
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
                  CÓDIGO: IV
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
                  CÓDIGO: IV
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
                1.1.- Establecer un proceso para determinar los objetivos, metas e indicadores y el monitoreo
                constante para asegurar que sean consistentes con la política en materia de Seguridad Industrial,
                Seguridad Operativa y Protección al Medio Ambiente y en materia de gestión de los procesos de
                medición y para la confirmación metrológica.<br><br>
                <strong>2.- ALCANCE</strong><br><br>
                <strong>2.1.-</strong>Es de alcance para todo el personal, tanto interno como externo, englobando los procedimientos
                y responsables del Sistema de Administración para administrar, ejecutar y actuar para el cumplimiento
                de los objetivos que se establezcan.<br><br>
                <strong>3.- RESPONSABILIDADES y DESARROLLO</strong><br><br>
                <strong>3.1.- Identificación de objetivos y metas.</strong><br><br>
                Dentro de la Herramienta Gasafe, ya se tienen definidos cinco objetivos, estos objetivos, han sido
                establecidos y basados en la política y en los de los puntos más importantes y sobresalientes de los
                elementos que complementan el Sistema de Administración de Seguridad Industrial, Seguridad
                Operativa y Protección al Medio Ambiente (SASISOPA) y del Sistema de Gestión de las Mediciones
                (SGM).<br><br>
                Los seis objetivos son los siguientes:<br><br>
                - Asegurar que las capacitaciones internas programadas, sean eficientes para el trabajador,
                obteniendo resultados satisfactorios durante las evaluaciones. Cumplir con el programa de
                capacitación externa.<br>
                - Asegurar que las capacitaciones externas programadas, sean impartidas en tiempo y forma.<br>
                - Asegurar la ejecución de los mantenimientos preventivos programados en tiempo y forma.<br>
                - Asegurar el seguimiento y cierre de las acciones correctivas y preventivas levantadas dentro del
                sistema de administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM).<br>
                - Asegurar la investigación y cierre de cada incidente o accidente notificado dentro del Sistema
                de Administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM).<br><br>

                Es importante mencionar que el Sistema de Administración (SASISOPA) y el Sistema de Gestión de
                las Mediciones (SGM), dentro de la política establece, es el compromiso de la mejora continua, misma
                que engloba continuamente, a tomar una meta ascendente para el cumplimiento del 100% de los
                objetivos
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
                  CÓDIGO: IV
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
                    <strong>3.2.- Establecimiento de la meta de los objetivos.</strong><br><br>
                    El establecimiento de esta meta, es una de las actividades que tendrá que ejecutar el responsable
                    técnico en la fecha que se establezca, deberá ingresar en actualización y, deberá de colocar la meta
                    que se pretende llegar, es importante mencionar que la meta, puede ser un punto de partida para que
                    la misma, pueda ser mejorada.<br><br><br>
                    Ejecución de Actualización de objetivos (establecimientos de meta): <br><br>

                    - Deberás de ingresar al elemento IV Objetivos, metas e indicadores : <br><br>

                    <img src="{{asset('assets/img/sasisopa-iv_1.png')}}" class="img-card-sis"><br><br>

                    - Deberás de seleccionar la matriz de objetivos:<br><br>

                    <img src="{{asset('assets/img/sasisopa-iv_2.png')}}" class="img-card-sis"><br><br>

                    - Deberás dar clic en Actualizar:<br><br>

                    <img src="{{asset('assets/img/sasisopa-iv_3.png')}}" class="img-card-sis"><br><br>

                    - Una vez después de haber dado clic en el botón modificar:<br><br>

                    <img src="{{asset('assets/img/sasisopa-iv_4.png')}}" class="img-card-sis"><br><br>

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
                  CÓDIGO: IV
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

                    - Dentro de la ventana siguiente, deberás de colocar a la meta que se pretende llegar del objetivo  planteado y deberás dar clic <strong>en confirmar</strong><br><br>

                    <img src="{{asset('assets/img/sasisopa-iv_5.png')}}" class="img-card-sis"><br><br>

                    Esta actividad deberá de realizarse para cada uno de los seis objetivos planteados.<br><br>

                    - <strong>3.3.- Monitoreo y seguimiento del cumplimiento de los objetivos.</strong><br><br>

                    Dentro del botón de consultar, se puede consultar la cédula del objetivo y el cumplimiento y monitoreo
                    de los mismos. En este cumplimiento y monitoreo se puede realizar de manera anual y mensual. Es
                    importante mencionar que la Herramienta Gasafe, identifica los indicadores de los objetivos y plasma
                    de manera gráfica, para que este, pueda ser visual y sea de fácil entendimiento del personal en todos
                    los niveles de la Estación de Servicios.<br>
                    Ejecución del monitoreo dentro de la Herramienta Gasafe.<br>

                    - Deberás de ingresar al elemento <strong>IV Objetivos, metas e indicadores</strong> .<br><br>

                    <img src="{{asset('assets/img/sasisopa-iv_6.png')}}" class="img-card-sis"><br><br>

                    - Deberás de seleccionar la matriz de objetivos:<br>

                    <img src="{{asset('assets/img/sasisopa-iv_7.png')}}" width="200px"><br><br>

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
                  CÓDIGO: IV
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

                    - Deberás de dar clic en el botón consultar:<br><br>

                    <img src="{{asset('assets/img/sasisopa-iv_8.png')}}" class="img-card-sis"><br><br>

                    - Deberás de dar clic en el botón consulta en el objetivo que se pretende monitorear:<br><br>

                    <img src="{{asset('assets/img/sasisopa-iv_9.png')}}" class="img-card-sis"><br><br>

                    - Después de haber dado clic en el botón anterior, te aparecerá la siguiente ventana, donde
                    deberás de seleccionar el tipo de gráfica y dependiendo la sección, deberás de ingresar los
                    datos solicitados, estos, pueden ser año y mes y deberás de dar clic en confirmar, como se
                    muestra en la siguiente ventana:<br><br>

                    <img src="{{asset('assets/img/sasisopa-iv_10.png')}}" class="img-card-sis"><br><br>

                    - Después de haber dado clic, te mostrará el comportamiento del objetivo como se muestra en la
                    siguiente imagen. - La barra verde son las capacitaciones programadas y la barra amarilla son
                    las capacitaciones aprobadas, el punto azul es el porcentaje de la meta establecida por el
                    responsable técnico del Sistema de Administración y el punto gris es el porcentaje de las
                    capacitaciones programadas:<br><br>

                    <img src="{{asset('assets/img/sasisopa-iv_11.png')}}" width="200px"> <br><br>

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
                  CÓDIGO: IV
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

                    - En general así es como se monitorea el cumplimiento de los objetivos, mediante la Herramienta
                    Gasafe. <br><br>
                    - Es importante mencionar que esta herramienta, se encuentra completamente configurada para
                    poder determinar los valores de los indicadores.<br><br>
                    <strong>3.4.- Difusión.</strong><br><br>
                    Toda solicitud de difusión interna y externa referente a este procedimiento, se llevará a cabo por medio
                    del formato de difusión que se encuentra en el calendario de ejecución de la actividad correspondiente
                    al que se le tendrá que poner una descripción de lo que se desea difundir, señalar el tipo de difusión
                    interna o externa, el periodo de publicación, así como el medio por el que se requiera llevar a cabo la
                    difusión.<br><br>
                    El formato de difusión, se atenderá de acuerdo a lo establecido dentro del procedimiento de
                    comunicación interna y externa y se dará seguimiento y cierre dentro de la matriz de registro y
                    seguimiento de comunicación interna y externa.<br><br>
                    <strong>3.5- Solicitud de acción correctiva y preventiva.</strong><br><br>
                    Toda solicitud de acción preventiva y correctiva referente a este procedimiento, se llevará a cabo por
                    medio del formato de acción correctiva que se encuentra en el calendario de ejecución de la actividad
                    correspondiente al que se le tendrá que poner una descripción del hallazgo u oportunidad de mejora
                    que se detecte.<br><br>
                    El formato de solicitud de acción preventiva y correctiva, se atenderá de acuerdo a lo establecido
                    dentro del procedimiento para el manejo de no conformidades, acciones preventivas y correctivas del
                    Sistema de Administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM), donde se
                    le dará seguimiento y cierre con la matriz de alta y seguimiento de acción preventiva o correctiva.<br><br>
                    <strong>4.- REGISTROS</strong><br><br>
                    <strong>4.1.- </strong>Matriz de objetivos, metas e indicadores

                </p>
            </div>

  </body>
</html>
