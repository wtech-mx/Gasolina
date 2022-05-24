<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Documento Pdf</title>
    <link rel="stylesheet" href="{{ public_path('assets/bootstrap/css/bootstrapv3.3.6.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ public_path('css/pdfs.css') }}" type="text/css">
  </head>

  <body style="background-color:#ffffff!important">
    <style>
        .bg-yellow{
            background-color: #FFC300;
            border: #FFC300 2px solid!important;
        }
    </style>

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
             PROCEDIMIENTO DE ELABORACIÓN Y COMUNICACIÓN DE LA POLÍTICA.
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

        <table class="table bg-yellow">
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
             PROCEDIMIENTO DE ELABORACIÓN Y COMUNICACIÓN DE LA POLÍTICA.
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
                    <strong>1.- OBJETIVO</strong> <br>
                    1.1.- Describir la forma de establecer, aprobar, revisar y actualizar la política y el modo de difusión a
                    todo el personal interno y a otros grupos de interés (clientes, contratistas, subcontratistas, proveedores
                    y prestadores de servicios). <br><br><br>
                    <strong>2.- ALCANCE</strong> <br>
                    2.1.- Este procedimiento, es de alcance para todo el personal de la Estación de Servicio, tanto interno
                    como externo ya que es la base para el cumplimiento del Sistema de Administración (SASISOPA) y
                    Sistema de Gestión de las Mediciones (SGM). <br><br><br>
                    <strong>3.- RESPONSABILIDADES</strong> <br>
                    3.1.- Establecimiento de la política.
                    La política de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente (SASISOPA)
                    y del Sistema de Gestión de las Mediciones (SGM), se instituye para proporcionar un marco de
                    referencia para establecer y revisar el compromiso para la identificación de peligros, la jerarquización y
                    control de riesgos, la prevención y cuantificación de los impactos ambientales, la gestión de los
                    procesos de medición y para la confirmación metrológica del equipo de medición utilizado para apoyar
                    y demostrar el cumplimiento de requisitos metrológicos, el cumplimiento normativo por parte de la
                    Estación de Servicio, de sus contratistas, subcontratistas, proveedores y prestadores de servicios, a las
                    instalaciones o impactos al Medio Ambiente y la mejora continua, e incluir, la participación del personal
                    y su logro ya que puede tener un impacto positivo sobre la calidad del servicio, la eficacia y en
                    consecuencia, sobre la satisfacción y la confianza de las partes interesadas.<br><br>
                    Es autorizada por el Empresario Gasolinero de la Estación de Servicio.<br><br>
                    Apropiada para los propósitos de la organización, para la naturaleza de los riesgos y para la atención
                    de las áreas de oportunidad derivada de sus actividades.<br><br><br>
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
             PROCEDIMIENTO DE ELABORACIÓN Y COMUNICACIÓN DE LA POLÍTICA.
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
                    Proporcionar un marco para establecer los objetivos del Sistema de Administración.<br><br>
                    <strong>3.2.- Difusión de la política.</strong><br><br>
                    La política en Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente (SASISOPA)
                    y del Sistema de Gestión de las Mediciones (SGM) de la Estación de Servicio, se difunde a sus grupos
                    de interés para aumentar la toma de conciencia, motivación y la participación de los mismos, haciendo
                    uso de diferentes mecanismos para asegurar su alcance. La Estación de Servicio, asume la
                    responsabilidad de promover la política, así como de dar a conocer a todos los grupos de interés y de
                    llevar a la práctica las acciones relacionadas con los mismos. Define, por tanto, los cauces a utilizar,
                    entre los que pueden estar los que se indican en la tabla siguiente
                    <br><br><br>
                </p>
            </div>

        <table class="table bg-white">
          <thead>
            <tr>
              <th scope="col" class="text-center">QUIÉNES</th>
              <th scope="col" class="text-center">CÓMO</th>
              <th scope="col" class="text-center">CUÁNDO</th>
            </tr>
          </thead>
          <tbody>
            <tr>
               <td class="text-center">
                 Empleados
              </td>
              <td class="text-center title-header">
                  Capacitación anual y correo interno
              </td>

               <td class="text-center title-header">
                Implementación y operación del Sistema de Administración
              </td>
            </tr>

            <tr>
               <td class="text-center">
                 Clientes
              </td>
              <td class="text-center title-header">
                  Carteleras
              </td>

               <td class="text-center title-header">
                Después de haber sido  publicada la política
              </td>
            </tr>

            <tr>
               <td class="text-center">
                 Proveedores y/o Contratistas
              </td>
              <td class="text-center title-header">
                 Capacitación anual y correo interno
              </td>

               <td class="text-center title-header">
                    Implementación y operación  del Sistema de  Administración
               </td>
            </tr>
          </tbody>
        </table>

            <div class="col-12 ">
                <p class="p-5"><br><br><br>
                    Toda solicitud de difusión interna y externa referente a este procedimiento, se llevará a cabo por medio
                    del formato de difusión que se encuentra en el calendario de ejecución de la actividad correspondiente
                    al que se le tendrá que poner una descripción de lo que se desea difundir, señalar el tipo de difusión
                    interna o externa, el periodo de publicación, así como el medio por el que se requiera llevar a cabo la
                    difusión.<br><br>

                    El formato de difusión, se atenderá de acuerdo a lo establecido dentro del procedimiento de
                    comunicación interna y externa.
                    3.3.- Revisión, seguimiento y mejora.
                    La Alta Dirección con el apoyo del RT y demás personal que esta considere pertinente, podrá revisar la
                    política del SA y SGM para asegurar que se mantiene adecuada a las características del proyecto del
                    Regulado.<br><br>
                    La Alta Dirección del Regulado, realizará estas revisiones, sobre todo, cuando se presenten cambios
                    significativos en el proyecto, o en circunstancias que afecten al mismo, por ejemplo, cambios en los
                    requisitos aplicables y será mediante el procedimiento de revisión de resultados<br><br><br>

                    <strong>4.- REGISTROS</strong>
                    <br><br>
                    4.1.- Política documentada.
                </p>
            </div>

  </body>
</html>
