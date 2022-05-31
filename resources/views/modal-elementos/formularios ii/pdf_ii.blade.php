<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Documento Pdf II</title>
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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CÓDIGO: II-01
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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CODIGO: I-01-01
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 20/09/2019
              </td>
            </tr>
          </tbody>
        </table>
    </div>
            <div class="col-12 ">
                <p class="p-5">
                    <strong>1.- OBJETIVO</strong> <br><br>
                    1.1.- Establecer los lineamientos y metodología para la identificación de peligros y la evaluación de los
                    riesgos para determinar los controles operacionales requeridos para que estos peligros sean
                    evaluados, priorizados y controlados hasta un nivel de riesgo aceptable y que permitan promover la
                    seguridad, salud e integridad física del personal y de las instalaciones, en los sitios de trabajo.<br><br><br>
                    <strong>2.- ALCANCE</strong><br><br>
                    2.1.- Este procedimiento, involucra a todas las áreas de trabajo de la Estación de Servicio, así como a
                    los colaboradores, contratistas, subcontratistas y visitantes que se encuentren dentro de las
                    instalaciones de dicha estación como tiendas de conveniencia o algún otro servicio que se encuentre
                    dentro de la estación. <br>
                    Este procedimiento, involucra todas las actividades y procesos que se desprenden del Sistema de
                    Administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM) que se realizan dentro
                    de la Estación de Servicio en las diferentes etapas del proyecto, implicando a los colaboradores,
                    contratistas, subcontratistas y visitantes.<br><br><br>
                    <strong>3.- RESPONSABILIDADES Y DESARROLLO</strong><br><br>
                    3.1.- La metodología para la identificación de peligros, evaluación de riesgos y determinación de
                    controles operacionales, es la base fundamental para tener un mejor control de los peligros a los que
                    se expone todo el personal al momento de realizar sus actividades. Es por ello que, antes de iniciar
                    con las actividades, deberá de llevarse a cabo la correspondiente identificación de peligros, valoración
                    de riesgos y determinación de controles para que estos peligros, sean evaluados, priorizados y
                    controlados hasta un nivel de riesgo aceptable.<br><br>
                    Para esta identificación se toma en cuenta:<br><br>
                    - Las actividades rutinarias y no rutinarias, anormales y situaciones de emergencia. <br><br><br>
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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CODIGO: I-01-01
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 20/09/2019
              </td>
            </tr>
          </tbody>
        </table>
    </div>

            <div class="col-12 ">
                <p class="p-5">
                    <br><br><br>
            - Las actividades de todo el personal que tiene acceso al centro de trabajo (incluyendo contratistas y
            visitantes).<br><br>
            - Grado de conciencia del personal y sus habilidades.<br><br>
            - Identificación de peligros originados, fuera del trabajo, capaces de afectar adversamente a la
            propiedad, la seguridad y salud del personal y bajo el control de la organización dentro del centro
            de trabajo.<br><br>
            - Peligros creados en las inmediaciones del centro de trabajo por actividades del trabajo
            relacionadas bajo el control de la organización.<br><br>
            - Infraestructura, equipo y materiales en el centro de trabajo, que pueden ser o no, proporcionados
            por la organización u otros.<br><br>
            - Cambios o propuestas de cambios en la organización, en sus actividades o materiales.
            - Modificaciones al Sistema de Administración, incluyendo cambios temporales y sus impactos en las
            operaciones, procedimientos y actividades.<br><br>
            - Cualquier actividad legal aplicable, relacionada con la evaluación de riesgos e implementación de
            controles necesarios.<br><br>
            - El diseño de áreas de trabajo, procesos, instalaciones, maquinaria-equipo, procedimientos de
            operación y organización de trabajo, incluyendo su adaptación a las capacidades humanas.
            - Todas aquellas actividades o procesos para la gestión de medición y para la conformación
            metrológica.<br><br>
            La identificación permite establecer los controles operacionales necesarios para estas actividades.
            De manera general, los peligros identificados por la organización, se van a catalogar de la siguiente
            forma:<br><br>
            - Eléctrico.<br>
            - Mecánico.<br>
            - Químico.<br>
            - Físicos (referentes a la salud y bienestar de la persona).<br>
            - Biológicos.<br>
                    <br><br><br>
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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CODIGO: I-01-01
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 20/09/2019
              </td>
            </tr>
          </tbody>
        </table>
    </div>

            <div class="col-12 ">
                <p class="p-5"><br><br><br>
                    - Ergonómicos. <br>
                    - Operacionales. <br>
                    - Fenómenos naturales. <br>
                    - Sociales. <br><br>
                    3.2.- Cada uno de los peligros mencionados, pueden tener diversas fuentes de origen, así como
                    generar algunos daños o consecuencias en las personas (riesgo). En la siguiente tabla, se muestra la
                    asociación entre los peligros detectados en la organización y sus posibles fuentes de origen:<br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CODIGO: I-01-01
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 20/09/2019
              </td>
            </tr>
          </tbody>
        </table>
</div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col" class="text-center">Tipo de  Peligro</th>
              <th scope="col" class="text-center">Peligro</th>
              <th scope="col" class="text-center">Riesgo (Daño o consecuencia)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
               <td class="text-center">
                 Eléctrico
              </td>

              <td class="text-center">
                  Conexiones, cables, contactos, tableros o
                    equipos eléctricos.<br>
                    Falta de etiquetado, bloqueo y candadeo de
                    líneas eléctricas previo a actividades de
                    mantenimiento.
              </td>

               <td class="text-center">
                 Shock eléctrico, quemaduras,
                incendio (contaminación), muerte.
              </td>
            </tr>

            <tr>
              <td class="text-center">
                 Mecánico
              </td>
              <td class="text-center">
                Equipos, maquinaria, herramientas, objetos o
                superficies.<br>
                Falta de etiquetado, bloqueo y candadeo de
                líneas de producto.
              </td>
               <td class="text-center">
                Machucón, golpe, sujeción (quedar
                atrapado por o entre…), laceraciones
                o cortes por algún objeto punzo
                cortante.
              </td>
            </tr>

            <tr>
               <td class="text-center">
                 Químico
              </td>
              <td class="text-center">
                Fugas, derrames, incendios, explosiones, polvos, vapores. <br>
                Falta de etiquetado, bloqueo y candadeo de
                líneas de producto.<br>
                Espacios confinados (trabajos en tanques de
                almacenamiento).
              </td>
               <td class="text-center">
                Quemaduras, lesiones, afectación a vías respiratorias,
                Contacto con sustancias químicas
                peligrosas (intoxicación), explosión y
                contaminación.
              </td>
            </tr>

            <tr>
               <td class="text-center">
                 Físicos
              </td>
              <td class="text-center">
                Iluminación inadecuada.
                Temperaturas extremas frío- caliente (trabajos
                en caliente).
                Excavaciones, espacios confinados (trabajos
                en tanques de almacenamiento).
                Trabajos en alturas.
                Choque de vehículos en accesos y salidas.
                Atropellamiento.
                Asalto.
                Condiciones inseguras.
                Exposición al ruido
              </td>
               <td class="text-center">
                Disminución de la agudeza visual.
                Afectaciones de los músculos de los
                tendones, huesos, etc.
                Quemaduras, shock, trauma,
                contusiones, fracturas o muerte.
                Caídas, resbalones, tropiezos.
                Fatiga auditiva, sordera temporal o
                permanente, impotencia y estrés.
                 Explosión.
              </td>
            </tr>

            <tr>
               <td class="text-center">
                 Biológicos
              </td>
              <td class="text-center">
                Virus, hongos, bacterias, parásitos, epidemias.
              </td>
               <td class="text-center">
                Enfermedades infecciosas o
                parasitarias, lesiones de piel,
                mucosas y ojos, envenenamiento e
                irritaciones.
              </td>
            </tr>

            <tr>
               <td class="text-center">
                 Ergonómicos
              </td>
              <td class="text-center">
                Postura de trabajo.
                Manejo de cargas.
              </td>
               <td class="text-center">
                Cervicalgia, lumbalgia, síndrome de túnel carpiano, contracturas.
                musculares, cuello u hombro tenso,
              </td>
            </tr>

          </tbody>
        </table>

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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CODIGO: I-01-01
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 20/09/2019
              </td>
            </tr>
          </tbody>
        </table>
</div>
            <div class="col-12 ">
                <p class="p-5"><br><br><br>
                    <strong>3.3.- Identificación de peligros y evaluación de riesgos.</strong><br><br>
                    El Responsable Técnico junto con los responsables de las áreas de trabajo realizarán la identificación
                    de las actividades rutinarias y no rutinarias, anormales y situaciones de emergencia hasta un nivel que
                    permita identificar con precisión los peligros a los que están expuestas las personas (empleados,
                    proveedores, visitantes, etc.), dentro de cada área de trabajo con la finalidad de determinar los
                    controles operacionales que sean necesarios para eliminar, reducir o controlar los riesgos de
                    incidentes al momento de efectuar dichas actividades, La metodología utilizada para la identificación de
                    peligros es un <strong>HAZOP modificado</strong>, esta metodología está desarrollada conforme a los principios de un
                    Hazop que es <strong>Análisis Funcional de Operatividad de procesos de todas las operaciones y/o
                    actividades que se desarrollan dentro de la estación de servicio</strong>, esta metodología, sufre cambios
                    derivado de lo solicitado en las disposiciones administrativas de carácter general publicadas el 16 de
                    junio del 2017, en base al anexo II elemento II. Identificación de Peligros y Análisis de Riesgos <br><br>

                    <strong>3.3.1.- Modificaciones de metodología HAZOP añadiendo los siguientes campos</strong><br><br>
                    <strong>- Tipo de Actividad</strong> . - Rutinaria o No rutinaria<br>
                    <strong>- Componente o Subcomponente.</strong> - En caso que el proceso o actividad específica intervenga un
                    equipo e instalación de la estación de servicio<br>
                    <strong>- Ámbito de aplicación.</strong> - Medio Ambiente, Seguridad, Salud y seguridad ocupacional<br>
                    <strong>- Nivel de Riesgo.</strong> - La herramienta Gasafe ya arroja un nivel de riesgo basado en la evaluación
                    que el Responsable Técnico allá realizado al sistema de administración. basado en lo establecido
                    en el punto 3.5. La jerarquización del impacto del riesgo y 3.6 Control operacional la fórmula
                    utilizada para la evaluación es la siguiente:<br><br>
                    <strong class="text-center">Frecuencia + Severidad= Nivel de Riesgo</strong>
                    Este HAZOP modificado es llamado dentro del Sistema de Administración como <strong>Matriz de
                    Identificación y Evaluación de Peligros.</strong><br><br>
                      El propósito general de los procesos de evaluación de riesgos es reconocer y entender los peligros que
                    pudieran surgir durante el desarrollo de las actividades, servicio y operaciones de la Estación de
                    Servicio y asegurar que los riesgos para el personal presente y los procesos e infraestructura, son
                    evaluados, priorizados y controlados a un nivel de riesgo aceptable en aquellos que están bajo el
                    control de dicha estación (bajo), para los que no están en control de mitigar los daños de la misma.<br><br>
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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CODIGO: I-01-01
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 20/09/2019
              </td>
            </tr>
          </tbody>
        </table>
</div>

            <div class="col-12">
                    <p>
                    Durante el proceso de identificación, se deberán de considerar las siguientes fuentes de información:<br><br>

                    Estudio de riesgos e Impacto Ambiental elaborado por un tercero.<br><br>
                    - Informes de auditorías previas e inspecciones, evaluaciones y revisiones por las autoridades.<br<br>
                    - Revisión de procesos y actividades de mejora en los lugares de trabajo.<br>
                    - Diagramas de tuberías, de instalaciones (planos) y Visto Bueno y/o dictamen por las autoridades.<br>
                    - Lista de ejemplos de peligros y riesgos de la <strong>tabla 1</strong>.<br>
                    - Registro, investigación y análisis de incidentes y accidentes, conforme al procedimiento de
                    registro e investigación de accidentes e incidentes.<br>
                    - Riesgos ocurridos en instalaciones similares (Estaciones de Servicio) como es el caso de
                    derrames en la zona de despacho por consecuencias de descuido de cliente y arranque del auto
                    con la pistola en la boca toma del tanque, derrames en zona de tanques por falta de monitoreo
                    (pruebas de hermeticidad), daño de tuberías de producto, y entre otros que se describen dentro
                    de la matriz de peligros y análisis de riesgos.<br><br>

                   <strong>3.3.1.-</strong> Los procesos de identificación de peligros deberán de aplicarse a actividades rutinarias y no
                    rutinarias, anormales y en situaciones de emergencia para cada caso deberán considerarse las que se
                    desprenden de las actividades para la gestión de los procesos de medición y para la confirmación
                    metrológica.

                    <strong>- Actividades periódicas (rutinarias):</strong><br><br>
                    Actividades programadas que se realizan todos los días de manera cotidiana.<br>
                    <strong>- Actividades ocasionales (no rutinarias):</strong><br><br>
                    Trabajo específico realizado por el personal de la Estación de Servicio que no se estima, recurra
                    frecuentemente, no se encuentre incorporado en los programas y no posea frecuencia determinada.<br>
                    <strong>- Actividades anormales:</strong><br><br>
                    Corresponde a las actividades que se apartan de las condiciones de régimen esperado (arranque,
                    paros de emergencia).<br>
                    <strong>- Actividades de emergencia:</strong><br>
                    Hechos que ocurren de manera imprevista interrumpiendo el normal funcionamiento del sistema y que
                    exige una rápida atención (condiciones de alerta como incendios, derrames, explosión, fugas y
                    fenómenos naturales, entre otros).<br>
                    Esta identificación y evaluación de riesgos debe ser actualizada de manera general y/o cuando se
                    introduzcan y/o modifiquen nuevas actividades de modo tal que se puedan determinar las medidas de
                    control necesarias. Posterior a esto y de forma adicional, se revisará y actualizará anualmente (cada
                    año) de acuerdo a lo establecido en el punto <strong>3.7 </strong>del presente documento.

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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CODIGO: I-01-01
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 20/09/2019
              </td>
            </tr>
          </tbody>
        </table>
</div>

            <div class="col-12">
                    <p>
                    <strong>- Actividades de la Gestión de Medición (SGM)</strong><br><br>
                    Todas aquellas que se desprendan de las actividades necesarias para la Gestión de los Procesos de
                    medición y para la confirmación metrológica.<br>
                   <strong> 3.4.- Cálculo y determinación del “Número de Prioridad de Riesgo” (NPR).</strong><br><br>
                    La evaluación de los riesgos se realizará mediante la matriz de Identificación de Peligros y Evaluación
                    de Riesgo y Control Operacional considerando los siguientes factores:<br>
                    <strong>3.4.1.- Severidad.</strong><br><br>
                    Para estimar el grado de severidad, se debe de tomar en cuenta la dimensión del daño que pueda
                    ocasionar el peligro y su fuente, con su categoría y denominación, misma que se obtiene al considerar
                    las definiciones de los daños establecidos en la tabla 2.<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CODIGO: I-01-01
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 20/09/2019
              </td>
            </tr>
          </tbody>
        </table>
</div>

       <div class="col-12 text-center">
         <table class="table bg-white">
                 <thead>
                      <tr>
                        <th class="text-center" colspan="2">Severidad</th>
                        <th class="text-center" colspan="0"></th>
                        <th class="text-center" colspan="2">Definición</th>
                      </tr>

                      <tr>
                        <th colspan="1">Categoría</th>
                        <th colspan="1">Denominación</th>
                      </tr>
                 </thead>
          <tbody>
            <tr>
               <td class="text-center">
                 1
              </td>
              <td class="text-center title-header">
                  Menor
              </td>
               <td class="text-left title-header">
                   <strong> Seguridad.-</strong> Incidente sin lesiones o consecuencia y sin pérdida de tiempo. <br>
                    <strong>Salud ocupacional. -</strong> Sin alteraciones a la salud, no se requiere incapacidad, ni primeros auxilios. <br>
                    <strong>Medio Ambiente.-</strong> Daño reversible en un periodo corto (evento que
                    puede contenerse dentro de las instalaciones de la estación sin afectar
                    el suelo natural y/o cuerpos de agua o drenajes municipales,
                    activaciones en válvulas de alivio esporádicas)
              </td>
            </tr>

            <tr>
               <td class="text-center">
                 2
              </td>
              <td class="text-center title-header">
                  Moderada
              </td>
               <td class="text-left title-header">
                   <strong> Seguridad.-</strong> Incidente con lesiones y consecuencias moderadas, con
pérdida de tiempo (incapacidad del trabajador por uno o varios días
hasta un máximo de 2 semanas), por ejemplo: machucones, torcedura,
luxaciones, caídas. <br>
                    <strong>Salud ocupacional. -</strong>Alteraciones a la salud reversibles, se requiere
incapacidad por uno o varios días, hasta un máximo de 2 semanas, se
precisan primeros auxilios y tratamientos médicos.. <br>
                    <strong>Medio Ambiente.-</strong> Daño reversible a largo plazo (contaminación del
suelo o agua por una cantidad de hasta 1m3 de hidrocarburos
derramados con emanación de COV´s, incendio incipiente).
              </td>
            </tr>

            <tr>
               <td class="text-center">
                 3
              </td>
              <td class="text-center title-header">
                  Fatal
              </td>
               <td class="text-left title-header">
                   <strong> Seguridad.-</strong> - Incidente con lesiones graves o mortales (invalidez  total/muerte). <br>
                    <strong>Salud ocupacional. -</strong>- Enfermedad profesional irreversible, se requiere
atención médica y tratamientos especializados o muerte.  <br>
                    <strong>Medio Ambiente.-</strong>  Daño extremo, intensivo e irreversible (derrame
mayor a 1m3 de hidrocarburos en suelo o agua, derrame con riesgo de
alberca de fuego, dardo de fuego, nube explosiva y/o explosión de
autotanque).
              </td>
            </tr>

          </tbody>
        </table>
       </div>

            <div class="col-12">
                    <p>
                    <strong>Tabla 2.- Escala de valores para la severidad.</strong> <br><br>
                    <strong>3.4.2.- Frecuencia.</strong><br>
                    La categoría de la frecuencia de los riesgos acontecidos, se obtiene considerando la posibilidad de que
                    estos ocurran, asociados a las actividades de la Estación de Servicio, como se muestra en la tabla 3.<br>
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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CODIGO: I-01-01
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 20/09/2019
              </td>
            </tr>
          </tbody>
        </table>
</div>

            <div class="col-12">
                    <p>
                    <strong>Tabla 2.- Escala de valores para la severidad.</strong> <br><br>
                    <strong>3.4.2.- Frecuencia.</strong><br>
                    La categoría de la frecuencia de los riesgos acontecidos, se obtiene considerando la posibilidad de que
                    estos ocurran, asociados a las actividades de la Estación de Servicio, como se muestra en la tabla 3.<br>
                </p>
            </div>

         <table class="table bg-white">
                 <thead>
                      <tr>
                        <th class="text-center" colspan="2">Frecuencia</th>
                        <th class="text-center" colspan="2"></th>
                        <th class="text-center" colspan="2">Definición</th>
                      </tr>

                      <tr>
                        <th colspan="1">Categoría</th>
                        <th colspan="1">Denominación</th>
                      </tr>
                 </thead>
          <tbody>
            <tr>
               <td class="text-center">
                 1
              </td>
              <td class="text-center title-header">
                  Remota
              </td>
               <td class="text-left title-header">
                   No ha ocurrido y podría acontecer
              </td>
            </tr>

            <tr>
               <td class="text-center">
                 2
              </td>
              <td class="text-center title-header">
                  Ocasional
              </td>
               <td class="text-left title-header">
                   Ha ocurrido y se ha repetido más de 5 veces en el último año
              </td>
            </tr>

            <tr>
               <td class="text-center">
                 3
              </td>
              <td class="text-center title-header">
                  Frecuente
              </td>
               <td class="text-left title-header">
                   Ocurre de manera regular una o dos veces por mes.
              </td>
            </tr>

          </tbody>
        </table>

            <div class="col-12">
                    <p>
                    <strong>Tabla 3.- Escala de valores para la ocurrencia</strong> <br><br>
                    <strong>3.5.- La jerarquización del impacto del riesgo.</strong><br>
                    Se obtiene sumando la frecuencia de la ocurrencia del riesgo con la severidad del daño que pueda
                    ocasionar, de acuerdo con lo establecido en la tabla 4.<br>
                    El NPR se clasifica de la siguiente forma:
                </p>
            </div>
            <div class="col-12">
                <img src="{{asset('assets/img/table_custom.jpg')}}" alt="">
                <br><br><br><br><br><br><br>
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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CODIGO: I-01-01
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 20/09/2019
              </td>
            </tr>
          </tbody>
        </table>
</div>

            <div class="col-12">
                 <p>
                <strong>Tabla 4.- Jerarquización del impacto del riesgo.</strong> <br><br>
                <strong>3.6.- Control operacional.</strong><br>
                En función del nivel de cada riesgo, se deben de establecer las medidas de seguridad necesarias, los
                requisitos legales o contractuales y el control operacional a implementarse para llevar los peligros de
                las actividades a niveles de riesgo bajo.<br>.<br>
                Para lo anterior, se considerarán como <strong>“Riesgos No Aceptables” (RNA),</strong> todos aquellos cuyo valor de
                evaluación sea Alto (5 y 6); en los que se deberán de establecer controles operacionales inmediatos de
                protección y prevención.<br>.<br>
                Los controles operacionales se deberán de establecer de manera preventiva a partir de un valor de
                evaluación Medio (4) con la finalidad de evitar que se salgan de control o aumente el nivel de severidad
                o frecuencia. .<br>
                Sin embargo, habrá casos donde el nivel de severidad sea Fatal (3) y la frecuencia de ocurrencia
                remota (1) lo que nos daría una evaluación de riesgo Medio (4); para estos casos, se tendrán que
                establecer controles operacionales enfocados a prevenir que ese accidente/incidente remoto se
                presente en un periodo de 3 meses..<br>
                Se considerarán como riesgos aceptables aquellos cuyos valores de evaluación sea riesgo Bajo (3 y
                2).<br>.<br>
                Las medidas y controles operacionales estarán a cargo del o los responsables de las áreas
                establecidas dentro de la matriz de responsabilidades <br><br>
                La necesidad de tomar alguna medida de control de riesgos, está dada en función a las siguientes
                pautas:<br><br>
                <strong>3.6.1.- Riesgo Bajo: (2,3). -</strong> No es necesario tomar acción de control de riesgo, sin embargo, se
                deberá de informar al personal acerca del uso del equipo de protección personal requerido (cuando
                sea el caso) y aplicar las medidas de seguridad establecidas por legislación, registrado dentro del
                procedimiento para la identificación, determinación y evaluación del cumplimiento de los requisitos
                legales.<br><br>
                <strong>3.6.2.- Riesgo Medio: (4). -</strong> Para la reducción de este riesgo se toman en cuenta las obligaciones
                legales, contractuales y la propia política de la organización, donde se establecen los requisitos a
                cumplir en cuanto a seguridad, salud ocupacional y la protección al ambiente. Los controles que se
                utilicen para la reducción del nivel del peligro deben de estar vigentes/actualizados y ser aplicados en
                un tiempo no mayor a tres meses y colocar las acciones recomendadas dentro de la matriz de riesgos.
                <strong>3.6.3.- Riesgo Alto: (5,6). -</strong> Estos riesgos se deberán de atender de manera inmediata a fin de
                modificar las condiciones de seguridad; las instrucciones de seguridad; el equipo de protección
                personal, la capacitación o incluso la misma actividad. Será necesario reducir el riesgo a nivel medio o
                bajo antes de comenzar o continuar con las actividades o bien hasta que se hayan cumplido los
                requerimientos establecidos y colocar las acciones recomendadas dentro de la matriz de riesgos. <br>
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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CODIGO: I-01-01
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 20/09/2019
              </td>
            </tr>
          </tbody>
        </table>
</div>

            <div class="col-12">
                 <p>
                <strong>Tabla 4.- Jerarquización del impacto del riesgo.</strong> <br><br>
                <strong>3.6.- Control operacional.</strong><br>
                En función del nivel de cada riesgo, se deben de establecer las medidas de seguridad necesarias, los
                requisitos legales o contractuales y el control operacional a implementarse para llevar los peligros de
                las actividades a niveles de riesgo bajo.<br>.<br>
                Para lo anterior, se considerarán como <strong>“Riesgos No Aceptables” (RNA),</strong> todos aquellos cuyo valor de
                evaluación sea Alto (5 y 6); en los que se deberán de establecer controles operacionales inmediatos de
                protección y prevención.<br>
                Los controles operacionales se deberán de establecer de manera preventiva a partir de un valor de
                evaluación Medio (4) con la finalidad de evitar que se salgan de control o aumente el nivel de severidad
                o frecuencia. .<br>
                Sin embargo, habrá casos donde el nivel de severidad sea Fatal (3) y la frecuencia de ocurrencia
                remota (1) lo que nos daría una evaluación de riesgo Medio (4); para estos casos, se tendrán que
                establecer controles operacionales enfocados a prevenir que ese accidente/incidente remoto se
                presente en un periodo de 3 meses..<br>
                Se considerarán como riesgos aceptables aquellos cuyos valores de evaluación sea riesgo Bajo (3 y
                2).<br>
                Las medidas y controles operacionales estarán a cargo del o los responsables de las áreas
                establecidas dentro de la matriz de responsabilidades <br>
                La necesidad de tomar alguna medida de control de riesgos, está dada en función a las siguientes
                pautas:<br><br>
                <strong>3.6.1.- Riesgo Bajo: (2,3). -</strong> No es necesario tomar acción de control de riesgo, sin embargo, se
                deberá de informar al personal acerca del uso del equipo de protección personal requerido (cuando
                sea el caso) y aplicar las medidas de seguridad establecidas por legislación, registrado dentro del
                procedimiento para la identificación, determinación y evaluación del cumplimiento de los requisitos
                legales.<br><br>
                <strong>3.6.2.- Riesgo Medio: (4). -</strong> Para la reducción de este riesgo se toman en cuenta las obligaciones
                legales, contractuales y la propia política de la organización, donde se establecen los requisitos a
                cumplir en cuanto a seguridad, salud ocupacional y la protección al ambiente. Los controles que se
                utilicen para la reducción del nivel del peligro deben de estar vigentes/actualizados y ser aplicados en
                un tiempo no mayor a tres meses y colocar las acciones recomendadas dentro de la matriz de riesgos.<br><br>
                <strong>3.6.3.- Riesgo Alto: (5,6). -</strong> Estos riesgos se deberán de atender de manera inmediata a fin de
                modificar las condiciones de seguridad; las instrucciones de seguridad; el equipo de protección
                personal, la capacitación o incluso la misma actividad. Será necesario reducir el riesgo a nivel medio o
                bajo antes de comenzar o continuar con las actividades o bien hasta que se hayan cumplido los
                requerimientos establecidos y colocar las acciones recomendadas dentro de la matriz de riesgos. <br>
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
             PROCEDIMIENTO PARA LA IDENTIFICACIÓN DE PELIGROS Y EVALUACIÓN DE RIESGOS
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
                  CODIGO: I-01-01
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 20/09/2019
              </td>
            </tr>
          </tbody>
        </table>
</div>

           <div class="col-12">
                 <p>
                    Para la selección de las medidas de control, o cambios a las medidas de control, es recomendable que
                    el responsable tenga en cuenta la siguiente prioridad de los mecanismos a analizar:<br><br>
                    - Eliminación (ejemplo: “bajar” una válvula para evitar peligro de caída).<br>
                    - Sustitución (ejemplo: cambiar un equipo ruidoso por otro silencioso).<br>
                    - Controles de ingeniería (ejemplo: colocar guardias de seguridad en los equipos motrices).<br>
                    - Señalización/advertencias y/o controles administrativos (ejemplo: procedimientos del Sistema de
                    Administración y procedimientos generales de seguridad, procedimiento operativo, instrucciones
                    de trabajo y normas).<br>
                    - Equipo de protección personal (ejemplo: casco, lentes, guantes, tapones auditivos, zapatos de
                    seguridad y equipo de protección).<br><br>

                    Para aquellos riesgos que resulten clasificados como no aceptables y que puedan descontrolarse y
                    generar situaciones de emergencia, adicional al control operacional establecido, se deberá de evaluar
                    la necesidad de estar preparados como lo establecen los procedimientos de Atención y Respuesta a
                    Emergencias, según corresponda.<br>
                    Cuando el control operacional establecido, aplique a los contratistas, subcontratistas, clientes,
                    proveedores o cualquier otra parte interesada, se les tendrá que informar para que estén enterados y
                    que cumplan con dichos controles operacionales establecidos por parte de la Estación de Servicio
                    usando el formato de difusión del Sistema de Administración.<br><br>
                   <strong> 3.7.- Revisión y Actualización de la Identificación y Evaluación de Riesgos.</strong><br><br>
                    El estudio de riesgo y la matriz de “Identificación de Peligros y Evaluación de Riesgo y Control
                    Operacional de Riesgos”, deberán revisarse y/o actualizarse cuando por cualquier situación, sea
                    requerido o cuando existan cambios o modificaciones en su alcance, entendiéndose como cambios:<br><br>
                    - Accidentes o incidentes según aplique.<br>
                    - Modificaciones que impliquen cambios en los equipos, instalaciones, almacenamiento de
                    productos o procesos originalmente aprobados en el permiso otorgado.<br>
                    - La incorporación de nuevas actividades o servicios en la Estación de Servicio.<br><br>
                    La primera evaluación que se realizará de la <strong>Matriz de Identificación y Evaluación de Peligros</strong> se
                    contempla dentro del <strong>programa de Implementación</strong> .<br><br>
                    <strong>3.8.- Evaluación de Riesgos.</strong><br><br>
                    Los riesgos establecidos en la matriz para la identificación de peligros y análisis de riesgos deberán de
                    ser evaluados dentro del calendario de ejecución del formato de registro en el botón de evaluar, una
                    vez que el sistema nos dirige a la matriz, cada actividad dada de alta tendrá un botón de modificar en el
                    que debemos de ingresar y establecer la severidad y la frecuencia de acuerdo con los criterios
                    descritos en el presente procedimiento y así, el sistema configurará automáticamente el nivel de riesgo
                    y nos permite guardar un histórico de la evaluaciones realizadas con los siguientes campos:<br><br>
                    - Tipo de severidad.<br>
                    - Frecuencia.<br>
                    - Nivel de riesgo.<br>
                    - Fecha y hora en la que ha sido evaluada.<br><br>
                    <strong>4.- REGISTROS</strong><br><br>
                    4.1.- Matriz de identificación de peligros y evaluación de riesgo y control operacional.
                 </p>
            </div>

  </body>
</html>
