@extends('layouts.pdf.layout_pdf')

@section('template_title')
    VII
@endsection

@section('content_pdf')
            <div class="col-12 ">
                <p class="p-5">
                    <strong>1.- OBJETIVO</strong><br>
                    1.1.- Establecer la sistemática para controlar la elaboración, revisión, aprobación, distribución, y
                    modificación de los documentos del Sistema de Administración de la Estación de Servicio, indicados
                    en el alcance, así como asegurar su disponibilidad en los lugares adecuados y en ediciones vigentes.<br><br>
                    <strong>2.- ALCANCE</strong><br><br>
                    2.1.- Este procedimiento, es de aplicación a los siguientes documentos del Sistema de Administración
                    (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM) de la Estación de Servicio: <br><br>
                    - Documentación interna <br>
                    - Documentación externa <br>
                    - Autorizaciones y permios <br><br>
                    Asimismo, es de aplicación a la documentación de origen externo o cualquier información adicional que
                    sea de interés para el desarrollo de las actividades como, por ejemplo, especificaciones o normas.<br><br>
                    <strong>3.- RESPONSABILIDADES Y DESARROLLO</strong><br><br>
                    <strong>3.1.- Elaboración de documentación.</strong><br><br>
                    3.1.1.- La estructura y contenido de los procedimientos, contiene como mínimo la siguiente
                    información:<br><br>
                    - Objetivo (propósito del procedimiento, instrucción o capítulo). <br>
                    - Alcance (ámbito de aplicación y posibles excepciones). <br>
                    - Referencias (documentación de referencia o aplicable). <br>
                    - Responsabilidades funciones (personas) que intervienen en la actividad, independientemente de
                    las personas que estén ocupando dichas funciones. <br>
                    - Desarrollo (forma de llevar a cabo la actividad, con mayor o menor detalle según el caso; la
                    descripción en procedimientos e instrucciones debe contestar a las preguntas: qué hacer, cómo
                    hacerlo, cuándo hacerlo y quién debe hacerlo). <br>
                    - Registro (al final del procedimiento o instrucción, se indicarán los registros de la actividad que
                    deben considerarse registros y guardarse como tales, señalándose su archivo, localización,
                    responsable del mismo y tiempo mínimo de conservación). <br>
                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                    La demás información que no se considere como procedimientos y sea parte del Sistema de
                    Administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM), tendrá como mínimo
                    la hoja de control de cambios o actualizaciones al inicio del documento, así como el cuadro de quién
                    elaboró, quién revisó y quién aprobó.<br> <br>
                    Cuando es necesario, se introducen anexos al final del procedimiento.<br><br>
                    <strong>3.2.- Revisión y aprobación de documentación.</strong><br><br>
                    Los documentos elaborados son revisados por el responsable técnico antes de su aprobación, para
                    comprobar que:<br><br>
                    • Contienen los apartados previstos o la información adecuada. <br>
                    • Reflejan correctamente la actividad regulada o su propósito. <br>
                    • No existen interferencias y contradicciones con otros documentos del sistema (SASISOPA) y del
                    Sistema de Gestión de las Mediciones (SGM). <br>
                    • Los capítulos del Sistema de Administración (SASISOPA) y del Sistema de Gestión de las Mediciones
                    (SGM) son aplicables a los requisitos de la Ley Norma Modelo. <br> <br>

                    Si las personas que tienen acceso al documento proponen cambios, se evalúa y se envía al proveedor
                    del Sistema de Administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM)
                    mediante un correo electrónico a la dirección de contacto@enersafe.com.mx, esta solicitud será
                    revisada y posterior, se realizarán las correcciones solicitadas. <br> <br>

                    Una vez editado el documento definitivo, el Empresario Gasolinero firma el documento para
                    considerarlo competente, el responsable del procedimiento, realiza la difusión y mediante la
                    Herramienta Informática, se realiza la distribución del documento y mantiene el historial de los cambios
                    de la documentación. <br><br>
                    <strong>3.3. Distribución de documentación.</strong> <br><br>
                    La distribución de la documentación es en base a la asignación de las funciones y responsabilidades
                    establecidas para cada usuario con la finalidad de que desarrollen correctamente sus tareas y
                    actividades. <br><br>
                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                    Los usuarios tendrán disponibilidad al sistema de administración de manera permanente teniendo
                    acceso a la información requerida para el desarrollo de sus funciones, la herramienta informática
                    tendrá el control de los accesos y consultas de información.<br><br>
                    <strong>3.4.- Listado de documentación interna</strong> <br><br>
                    Se cuenta con un listado de documentación interna con todos los procedimientos que integran el
                    sistema de administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM) que incluye
                    lo siguiente: <br>
                    - Nombre del documento <br>
                    - Identificación por código <br>
                    - Número de revisión <br>
                    - Fecha <br>
                    - Archivo digital que puede ser descargado por el usuario para su visualización y consulta <br>
                    La aplicación del documento o anexo se inicia normalmente el mismo día de su recepción o difusión, a
                    no ser que se indique lo contrario.<br> <br>
                    <strong>3.5- Listado de documentación externa</strong> <br><br>
                    La documentación externa recibida en la organización que sea de interés o que deba utilizarse como
                    referencia para la realización de actividades contempladas en el Sistema de Administración
                    (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM), es archivada dentro del listado de
                    documentación externa dicho listado estará disponible para visualización y consulta para cualquier
                    interesado y se encuentra ya cargada en el sistema en formato PDF con la identificación del marco
                    normativo aplicable a la estación de servicio. <br><br>
                    <strong>3.6 Listado de autorizaciones y permios</strong> <br><br>
                    El listado de control de permisos y autorizaciones contiene los siguientes campos:<br>
                    - Autorización y/o Permiso <br>
                    - Jurisdicción a la que pertenece <br>
                    - Etapa del Proyecto en la que se requiere <br>
                    - Autoridad encargada de emitirlo <br>
                    - Fecha Obtención <br>
                    - Periodicidad <br>
                    - Fecha de renovación <br><br>
                    El listado anterior, permitirá consultar el historial de los permisos y las autorizaciones
                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                    <strong>3.6.1 Actualización y disponibilidad de los documentos</strong><br><br>
                    El listado podrá ser actualizado ingresando en el icono de modificar en la autorización y/o
                    permisos que se desea actualizar agregando la fecha de obtención, la periodicidad y la fecha de
                    renovación de dicho permiso conforme a los términos en que se haya expedido.
                    Para poder concluir con la actualización correspondiente se deberá cargar el permiso de manera
                    electrónica ingresando en el icono de soporte documental de esta manera el sistema registrará el
                    cumplimiento de la autorización y/o permiso correspondiente.
                    Para la disponibilidad y un resguardo seguro de los documentos se utiliza la herramienta digital
                    GASAFE, dentro de esta herramienta se asigna un responsable específico para la modificación de la
                    documentación, esta herramienta realiza periódicamente un respaldo digital donde se asegura la
                    protección, disponibilidad, trazabilidad y uso de retención de los documentos y registros que se
                    generan durante la conformación, implementación y operación del Sistema de Administración
                    (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM) a través de la herramienta digital
                    GASAFE. <br><br>
                    <strong>3.6.2. Generar alta de Autorización y/o permiso</strong><br><br>
                    El sistema permitirá al usuario poder dar de alta un nuevo registro en el listado de autorizaciones y/o
                    permisos cargando los siguientes campos: <br>
                    - Nombre de la autorización y/ permiso <br>
                    - Jurisdicción a la que pertenece (federal, Estatal o Municipal) <br>
                    - Etapa del proyecto en la que se requiere <br>
                    - Autoridad encargada de emitirlo <br>
                    - Periodicidad <br>
                    - Días de alerta para el vencimiento <br> <br>

                    Es responsabilidad de la Estación de Servicio, mantener una carpeta con los permisos y autorizaciones
                    en original; esta carpeta, deberá de estar protegida contra pérdida o uso mal intencionado, así como
                    los registros de constancias de capacitación. <br><br>
                    <strong>3.7- Listado de formatos, registros y bitácoras.</strong> <br><br>
                    Todos los registros que se generen dentro de la Estación de Servicio como bitácoras, listas de
                    verificación, etc., se mantendrán de manera electrónica a través de la Herramienta Tecnológica
                    manteniéndolos disponibles, legibles e identificables los cuales se podrán descargar e imprimir si así
                    se requiere.<br><br>
                </p>
            </div>

            @include('layouts.pdf.pdf_header')
            <div class="col-12 ">
                <p class="p-5">
                    <strong>4.- REGISTROS</strong><br><br>
                    4.1.- Listado de documentación del Sistema de Administración. <br>
                    4.2.- Listado de documentación externa. <br>
                    4.3.- Listado de distribución de documentación. <br>
                    4.4.- Listado de formatos/registros/bitácoras. <br>
                    4.5.- Lista de control de permisos y autorizaciones. <br>
                </p>
            </div>
@endsection


