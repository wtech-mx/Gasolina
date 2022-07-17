@extends('layouts.pdf.layout_pdf')

@section('template_title')
    XIV-01
@endsection

@section('content_pdf')
            <div class="col-12 ">
                <p class="p-5">
                <strong>1.- OBJETIVO</strong><br><br>
                1.1.- Establecer la secuencia de las actividades que se deben seguir en la verificación y calibración de
                los equipos de la estación de servicio Y cómo serán administrados los servicios de calibración de los
                equipos de la Estación de Servicio y en su caso establecer los lineamientos para realizar una
                calibración de un tanque de almacenamiento con proveedores externos o de ejecución interna. <br><br>
                <strong>2.- ALCANCE</strong><br><br>
                2.1.- Este procedimiento, es aplicable a todos los equipos de la Estación de Servicio y es de alcance
                para el Responsable Técnico y/o personal asignado como responsable del SGM. <br><br>
                <strong>3.- RESPONSABILIDADES Y DESCRIPCION DE ACTIVIDADES</strong><br><br>
                3.1.- Elaboración del programa de verificación y calibración.
                La Herramienta Informática generará el programa de verificación y calibración en base a la carga de
                los dispensarios durante la implementación del Sistema de Administración Administración (SASISOPA)
                y del Sistema de Gestión de las Mediciones (SGM) en el punto de registro de instalaciones; la
                Herramienta Tecnológica, programará en base a la periodicidad establecida en la NOM-005-SCFI2011, la cual contempla dos periodos de verificación en el primer Semestre en los meses de enero a
                mayo y en el segundo semestre de julio a septiembre para las verificaciones ordinarias. <br><br>
                3.2.- Ejecución de verificaciones y calibraciones <br><br>
                Los responsables establecidos dentro Matriz de responsabilidades podrán ejecutar las verificaciones
                ordinarias y extraordinarias programadas entrando al formato de registro Plan de calibración y
                monitoreo de equipos que los llevara al calendario de ejecución donde podrá seleccionar las
                verificaciones ordinarias o extraordinarias que tenga programadas en color azul para poder ejecutar la
                actividad deberá entrar al botón que se encuentre programado en color azul el cual lo dirigirá la
                pantalla de seguimiento donde aparecerán todos los dispensarios de la estación de servicio, se deberá
                de seleccionar uno por uno y entra al botón de modificar donde deberá de capturar los campos de la
                unidad de verificación y el número de autorización de la unidad que ejecuto la verificación y calibración
                de equipos. <br><br>
                Una vez capturados estos datos deberá oprimir el botón de confirmar para terminar las capturas junto
                al botón de modificar se encuentra un botón de evidencia y finalizar el seguimiento donde tendrá que
                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                subir el soporte documental que entregue al prestador de servicio para que el sistema de Gestión de
                las Mediciones (SGM) de por concluida la actividad. <br><br>
                <strong>3.3.- Consulta de verificación y calibración de equipos.</strong> <br><br>
                Los responsables establecidos dentro Matriz de responsabilidades podrán consultar las verificaciones
                ordinarias y extraordinarias ejecutadas, entrando al formato de registro Plan de calibración y monitoreo
                de equipos que los llevará al calendario de ejecución donde deberá seleccionar el botón de consulta el
                cual lo dirigirá la pantalla de Equipo con Calibración donde aparecerán todos los dispensarios de la
                estación de servicio y se podrá consultar cada uno de los dispensarios entrando al botón de consulta el
                cual mostrara el histórico de las verificaciones ordinarias y extraordinarias hechas al dispensario y
                podrá consultar todas las evidencias subidas durante las verificaciones del dispensario.<br><br>
               <strong> 3.4.- Calibración de los equipos e instrumentos.</strong> <br><br>
                Los equipos e instrumentos pertenecientes al SGM deberán ser calibrados inmediatamente después
                de la adquisición de estos y antes de la puesta en marcha de los mismos, por lo que estará prohibido el
                uso de los equipos e instrumentos sin que estos hayan sido calibrados previamente.
                Para el caso de equipos e instrumentos ya instalados previamente a la ejecución de este
                procedimiento, deberán ser calibrados a la brevedad máxima posible para el cumplimiento de este
                documento con los proveedores de servicio de calibración autorizados de acuerdo al SGM.
                Cuando los resultados de la calibración no cumplan con errores máximos tolerados (EMT) deberá
                aplicar el procedimiento de código X-06 Procedimiento de mantenimiento de instalaciones y equipos,
                de tal manera que las acciones a realizar deberán incluir una calibración complementaria como parte
                de la confirmación metrológica deberán ser documentadas en los históricos del equipo o instrumentos
                incluyendo la sustitución del equipo. <br><br>
                <strong>3.5.- Servicios de calibración interno.</strong> <br><br>
                Cuando no exista un proveedor de servicios acreditado o que no cumpla con los lineamientos del
                procedimiento de seguridad de contratistas XII-01 o bien cuando no exista disponibilidad de un
                proveedor de servicio por razones ajenas a la Estación de Servicio, la estación podrá realizar sus
                calibraciones siempre y cuando muestre capacidad técnica, disposición de equipo e instrumentos de
                medición calibrados y con trazabilidad además de un procedimiento de estimación de incertidumbre y
                que deberá estar inscrito en este documento o en algún otro documento dentro del SGM.

                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                <strong>3.6.- Servicio de calibración externo.</strong><br><br>
                Cuando la Estación de Servicio no disponga de un servicio de calibración interna o requiera de
                servicios de calibración de un laboratorio externo y requiera realizar dichos servicios en las
                instalaciones del proveedor de servicios, deberá cumplir con el procedimiento XII-01 para el alta del
                proveedor o contratista y deberá establecer una logística para la disposición de los equipos e
                instrumentos de acuerdo a los tiempos acordados con el proveedor previamente.<br><br>
                <strong>3.7.- Resultados de los servicios de calibración.</strong> <br><br>
                El proveedor de servicio de calibración deberá entregar el informe o certificado de calibración en un
                tiempo máximo de 5 días, así como cualquier otro reporte relacionado con el SGM además de los
                documentos complementarios como son carta de acreditación del proveedor, carta de trazabilidad, y en
                su caso copia de los patrones de medición empleados y registro de mediciones, toma de lecturas o
                cualquier documento que registre las mediciones resultantes de las calibraciones efectuadas. Todos
                estos documentos podrán ser recibidos en papel y/o en formato electrónico, estos deberán mantener
                su integridad e históricos de acuerdo a lo establecido en el procedimiento VIII-01. <br><br>
                <strong>3.8.- Periodos o frecuencia de calibración de los equipos e instrumentos.</strong> <br><br>
                La primera re-calibración será realizada a los 6 meses de haberse instalado un sistema nuevo, equipo
                o instrumento, de cumplirse los errores máximos tolerados (EMT) o confirmación metrológica la
                siguiente calibración podrá realizarse a los 12 meses, esto de acuerdo a las recomendaciones de la
                DACG: RESOLUCIÓN por la que la Comisión Reguladora de Energía expide las disposiciones
                administrativas de carácter general en materia de medición aplicables a la actividad de
                almacenamiento de petróleo, petrolíferos y petroquímicos. Cada equipo o instrumento deberá registrar
                su propio periodo de calibración, estos periodos podrán ser modificados en cualquier momento que sea
                requerido debido a las siguientes causas: <br><br>
                • Dudas en los resultados de medición.
                • Por mantenimientos preventivos y/o correctivos.
                • Cualquier otro motivo por el que responsable técnico (RT) considere necesario adelantar la  calibración
                 <br><br>

                <strong>3.9.- Estimación de incertidumbre para la calibración de un tanque de almacenamiento de la
                estación de servicio.</strong> <br><br>
                El RT del SGM será el encargado de dar seguimiento a la solicitud de servicio de calibración del
                tanque de almacenamiento de la Estación de Servicio con el proveedor, además supervisará la
                ejecución del servicio hasta la conclusión del mismo, así como recibir la documentación relacionada
                con la calibración, siendo la información más importante al término de la ejecución del servicio el
                registro de las mediciones obtenidas por el proveedor,
                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                mismas que el proveedor deberá registrar en el
                formato XIV-03-01 del SGM de la estación de servicio; además de los registros que el proveedor
                genera con documentación propia y que deberá proporcionar (copia) a la Estación de Servicio. <br><br>
                La repetibilidad mínima que el proveedor deberá reportar en los formatos indicados deberá ser al
                menos cinco (5) veces por punto de medición y deberá asegurarse de mantener una medición con
                equipos calibrados, presentar copia de la calibración de instrumento utilizado, así como de los equipos
                o instrumentos auxiliares.<br><br>
                El RT estimará la incertidumbre de la calibración del tanque de almacenamiento con la información que
                proporcionará el proveedor externo de forma paralela y/o complementaria bajo el método de medida
                seca manual de la regla graduada para el cumplimiento de las disposiciones de la DACG
                RESOLUCIÓN por la que la Comisión Reguladora de Energía expide las disposiciones administrativas
                de carácter general en materia de medición aplicables a la actividad de almacenamiento de petróleo,
                petrolíferos y petroquímicos. Publicada el 11-01-2016, y que deberá establecer el presupuesto
                correspondiente en este procedimiento. <br><br>
               <strong> 3.9.1- Fuentes de incertidumbre y evaluación individual estándar.</strong><br><br>
                Modelo matemático para la calibración del tanque o inclinación <br><br>
                </p>
                <p class="text-center">
                    <img  src="{{ asset('./assets/img/pdf/xiv_fm.png') }}" alt="">
                </p>
                <p>
                    Donde F es la distancia desde el tubo de la sonda al centro
                    Donde E es resultado de dividir C entre D y donde C es la repetibilidad de mediciones de la
                    altura reportada en regla 1 menos la repetibilidad de mediciones de la regla complementaria y
                    D la distancia entre las reglas. <br><br>
                </p>
                <p class="text-center">
                    <img  src="{{ asset('./assets/img/pdf/xiv2_fm.png') }}" alt="">
                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                    Modelo matemático para estimar incertidumbre combinada y evaluación de la incertidumbre
                    estándar <br><br>
                </p>
                <p class="text-center">
                    <img  src="{{ asset('./assets/img/pdf/xiv3_fm.png') }}" alt="">
                </p>
                <p class="p-5">
                    Donde U se refiere a la incertidumbre <br>
                    tq a la abreviatura para la palabra “tanque” <br>
                    r es el acrónimo de “regla” <br>
                    Coeficientes de sensibilidad de acuerdo al modelo matemático inicial <br><br>
                </p>
                <p class="text-center">
                    <img  src="{{ asset('./assets/img/pdf/xiv4_fm.png') }}" alt="">
                </p>
                <p class="p-5">
                    Incertidumbre combinada: <br>
                </p>
                <p class="text-center">
                    <img  src="{{ asset('./assets/img/pdf/xiv5_fm.png') }}" alt="">
                </p>
                <p class="p-5">
                El factor de cobertura K a ser utilizado será de un valor de 2. <br>
                Incertidumbre expandida: <br>
                </p>
                <p class="text-center">
                    <img  src="{{ asset('./assets/img/pdf/xiv6_fm.png') }}" alt="">
                </p>
                <p class="p-5">
                Conversión de los resultados de incertidumbre expandida a unidades de porcentaje<br>
                </p>
                <p class="text-center">
                    <img  src="{{ asset('./assets/img/pdf/xiv7_fm.png') }}" alt="">
                </p>
                <p class="p-5">
                Combinación de dos o más incertidumbres expandidas<br>
                </p>
                <p class="text-center">
                    <img  src="{{ asset('./assets/img/pdf/xiv8_fm.png') }}" alt="">
                </p>
                <br><br><br>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                    <strong>4- REGISTROS</strong> <br><br>
                    4.1.- Plan de calibración y monitoreo de equipos con código E14-P01-F01. <br>
                    4.2.- Formato de toma de lecturas de calibración de tanque. <br> <br>
                    <strong>Deberá incluir al menos la siguiente información:</strong> <br><br>
                    - Datos de la estación de servicio <br>
                    - Datos del proveedor externo <br>
                    - Fecha de la ejecución de la calibración <br> <br>
                </p>
                <p class="text-center">
                    <img  src="{{ asset('./assets/img/pdf/xiv9_fm.png') }}" alt="">
                </p>
                <p class="">
                - Número de tanque <br>
                - Persona que ejecuto y registro la calibración <br>
                - Persona o personas que supervisaron la calibración, de la estación de servicio y/o  supervisor contratista.
                </p>
            </div>
@endsection


