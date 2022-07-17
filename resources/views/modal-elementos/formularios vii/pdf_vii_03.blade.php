@extends('layouts.pdf.layout_pdf')

@section('template_title')
    VII
@endsection

@section('content_pdf')
            <div class="col-12 ">
                <p class="p-5">
                <strong>1.- OBJETIVO</strong><br><br>
                1.1.- Atender oportunamente las solicitudes de información interna y externa, quejas y sugerencias del
                Sistema de Administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM), dando
                respuesta oportuna y el seguimiento para el cierre de dicha solicitud.<br><br>
                <strong>2.- ALCANCE</strong><br><br>
                2.1.- Este procedimiento, aplica a todos los trabajadores, proveedores, contratistas y subcontratistas
                que presten servicios a la Estación de Servicio.<br><br>
                <strong>3.- RESPONSABILIDADES Y DESARROLLO</strong><br><br>
                3.1.- Solicitud de información, queja o sugerencia.<br>
                En la consola de operación, en el botón de solicitud de queja o sugerencia, todos los trabajadores,
                contratistas y proveedores, pueden levantar una solicitud de información interna y externa, queja o
                sugerencia, ante el responsable de este procedimiento.<br><br>
                Todos los reportes, se registran automáticamente en la matriz de control, seguimiento y cierre de
                quejas con el responsable de este procedimiento.<br><br>
                <strong>3.1.1.- Ejecución de notificación de queja o sugerencia.</strong><br><br>
                - Para la solicitud de información queja o sugerencia, deberás de ingresar al siguiente botón que
                se encuentra dentro de la consola de operación del Sistema de Administración (SASISOPA) y
                del Sistema de Gestión de las Mediciones (SGM).<br>
                - Una vez que hayas ingresado al botón anterior, deberás de llenar los campos siguientes:<br>
                - Después de llenar los datos de los campos anteriores, deberás de dar clic en confirmar:<br><br>
                    <br><br><br><br>
                </p>
            </div>

               @include('layouts.pdf.pdf_header')
            <div class="col-12 ">
                <p class="p-5">
                <strong>3.2.- Seguimiento y cierre de solicitud de procedimiento de solicitud queja o sugerencia.</strong><br><br>
                El responsable de este procedimiento, tendrá la obligación de analizar dicha solicitud, quejas o
                sugerencias,
                considerando si la solicitud es viable, capturando el objetivo de la solicitud y las acciones a realizar o
                sugerencias y cargando el soporte documental que sustente la actividad para dar cierre.<br><br>
                <strong>3.2.1.- Ejecución de la matriz de control, seguimiento y cierre de quejas y sugerencias.</strong><br><br>
                - Deberás de dar clic en el elemento VII Comunicación, participación y consulta:<br>
                - Darás clic en el formato de registro:<br>
                - Te situarás en el día y, como podrás observar, el seguimiento tiene el estatus de color azul:
                - Después de dar clic en seguimiento, localizarás la solicitud o solicitudes levantadas y deberás<br>
                de dar clic al siguiente botón modificar, de cada una de las solicitudes levantadas, para iniciar
                con el seguimiento:<br>
                En el seguimiento, aparecerá un campo de responsable de seguimiento , este campo, se llena
                en automático, hasta que se da clic en confirmar.<br>
                - Después de haber terminado con el llenado de los datos de la ventana anterior, darás clic en el
                botón confirmar:<br><br>
                <strong>4.- REGISTROS</strong><br><br>
                4.1.- Solicitud de información, quejas o sugerencias. <br>
                4.2.- Matriz de control, seguimiento y cierre de quejas. <br>
                </p>
            </div>
@endsection


