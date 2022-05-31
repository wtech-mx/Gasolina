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
                  CODIGO: V-01-03
              </td>
              <td class="text-center title-header">N° REV.:00</td>

               <td class="text-center title-header">
                 FECHA DE APROBACIÓN: 29/09/2019
              </td>
            </tr>
          </tbody>
        </table>
    </div>


		<div class="col-12">
            <h5 class="p-3 text-center">ASIGNACIÓN DEL TÉCNICO RESPONSABLE</h5>
            <p >
                <br>
                <strong>{{$config->name2}}</strong>
                representante legal de SAC XIB CHAAC, S.A. DE C.V. del proyecto y CURR. <br>
                <strong>Nombro Responsable técnico a: </strong> <br>
                <strong>{{$config->name2}}</strong> <br>
                que desempeña el siguiente dentro de la estación de servicio con los siguientes datos generales:<br>
                Teléfono de oficina: <strong>9994426694</strong><br>
                Correo electrónico: <strong>sasisopa@labsergas.com.mx</strong><br>
                Domicilio para oír y recibir notificaciones: <strong>PARCELA 16-Z-1 P1/1 CARRETERA ESTATAL HOMUNCUZAMA EJIDO NOHCHAKAN, CUZAMA</strong><br>
            </p>
            <p >
                <br>
                <strong>Funciones y responsabilidades como RT DEL SASISOPA:</strong><br>
                <ul>
                    <li type="disc">Fungir como representante técnico de la estación ante ASEA.</li>
                    <li type="disc">Asegurar que el Sistema de Administración es conforme con los requisitos establecidos en los lineamientos de ASEA y demás normativa aplicable.</li>
                    <li type="disc">Informar a la Alta Dirección del Regulado acerca del desempeño del Sistema de Administración.</li>
                    <li type="disc">Proponer la adopción de medidas para aplicar las mejores prácticas con código IX.</li>
                    <li type="disc"> Dar aviso a la Agencia de cualquier riesgo o riesgo crítico que pueda comprometer la Seguridad Industrial, la Seguridad Operativa o el Medio Ambiente.</li>
                    <li type="disc">Coordinar y apoyar al resto de las áreas en la definición e implementación de las acciones necesarias para subsanar los incumplimientos de los requisitos del SA.</li>
                    <li type="disc"> Coordinar los trabajos internos para subsanar las irregularidades o incumplimientos de la normatividad externa e interna aplicable, establecida en la matriz de requisitos legales.</li>
                </ul>
            </p>
            <p >
                <br><br>
                <strong>Funciones y responsabilidades como RT DEL SGM:</strong><br>
                <ul>
                    <li type="disc">Asegurar que las actividades del SGM se apeguen a los procedimientos correspondientes.</li>
                    <li type="disc">Elaborar los reportes e información sobre el SGM requerida por la Comisión o por la Empresa especializada que los solicite como parte de una visita de verificación.</li>
                    <li type="disc">Conservar la documentación relativa al SGM para su consulta por la Comisión cuando ésta lo requiera o para consulta de otros Permisionarios, o usuarios del sistema de almacenamiento permisionado por un periodo mínimo de 10 años</li>
                    <li type="disc">Generar, organizar, implementar cambios, difundir, almacenar y dar trazabilidad a toda la información derivada de la operación del SGS.</li>
                </ul>
            </p>


		</div>

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
                      CODIGO: V-01-03
                  </td>
                  <td class="text-center title-header">N° REV.:00</td>

                   <td class="text-center title-header">
                     FECHA DE APROBACIÓN: 29/09/2019
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
        <h5 class="p-5 text-center">SECCIÓN DE FIRMAS DE AUTORIZACIÓN</h5>

        <table class="table bg-yellow" style="margin-bottom: 9rem">
          <thead>
            <tr>
              <th class="text-center" scope="col">Recibe</th>
              <th class="text-center" scope="col">Recibe</th>
              <th class="text-center" scope="col">Notifica</th>
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
                  <img src="{{asset('firmas/'.$config->firma1)}}" class="img-card-menu"> <br>
                    {{$config->name1}} <br>
                    Responsable SGM <br>
              </td>

               <td class="text-center title-header">
                   <img src="{{asset('firmas/'.$config->firma2)}}" class="img-card-menu"> <br>
                   {{$config->name2}} <br>
                   Empresario Gasolinero <br>
              </td>
            </tr>
          </tbody>
        </table>

  </body>
</html>
