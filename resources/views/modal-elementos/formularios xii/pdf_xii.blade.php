@extends('layouts.pdf.layout_pdf')

@section('template_title')
    XII
@endsection

@section('content_pdf')
            <div class="col-12 ">
                <p class="p-5">
                <strong>1.- OBJETIVO</strong><br><br>
                1.1.- Asegurar que los contratistas, subcontratistas o proveedores de servicio, operen bajo los
                lineamientos de Seguridad y protección al Medio Ambiente, establecidos en el Sistema de
                Administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM), realizando una
                evaluación continua de las actividades que desarrollan dentro de la estación de servicio.<br><br>
                <strong>2.- ALCANCE</strong><br><br>
                2.1.- Aplica para todos los contratistas/subcontratistas y prestadores de servicios, proveedores que
                realicen actividades dentro de la estación de servicio cuyos riesgos sean potenciales de generar un
                impacto o daño al personal y/o daño al Medio Ambiente.<br><br>
                <strong>3.- RESPONSABILIDADES Y DESARROLLO</strong><br><br>
                Se desarrollará un procedimiento específico para los contratistas, que tenga como alcance los
                siguientes puntos:<br><br>
                <strong>3.1.- Cédula de alta de proveedores.</strong><br><br>
                Una vez cargados estos campos se realiza la evaluación inicial a los proveedores la cual se lleva a
                cabo por uno o por varios de los siguientes métodos:<br><br>
                a) Desempeño y datos históricos. - Sólo aplicable a proveedores anteriores a la entrada en vigor
                de este procedimiento. El responsable recopila información acerca de los posibles problemas
                ocasionados por el proveedor en los últimos servicios o suministros ocurridos dentro de la
                Estación de Servicio. El criterio a seguir para aprobar a un proveedor por este método, es que el
                proveedor demuestre o declare que sus sistemas y controles de actividades han permitido no
                incurrir en incidentes, accidentes o impactos ambientales negativos.<br>
                b) Certificación. - Quedan aprobados automáticamente aquellos proveedores que demuestren que
                su organización cuenta con un Sistema de Gestión Integral certificado ISO 14001 y OHSAS
                18001. El responsable solicita en este caso, una copia vigente del certificado.<br>
                c) Suministros o servicios de prueba. – Se le solicita al proveedor un suministro/s o servicio/s de
                prueba y el responsable de este procedimiento, realiza una valoración del mismo, después del
                periodo de prueba,<br>
                d) Cuestionario de evaluación. - Consiste en el envío al proveedor de un cuestionario de
                evaluación en el que se le pregunta sobre aspectos de su funcionamiento y sobre su capacidad,
                por ejemplo, controles, métodos de inspección, Sistema de Gestión de la Calidad implantado,
                etc. Posteriormente se realiza una valoración por parte del Responsable.
                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                <strong>3.2.- Listado de proveedores.</strong><br><br>
                Se tendrá un listado de proveedores, este será actualizado por el responsable y tendrá la estructura
                que se defina en el procedimiento XII-01.<br><br>
                <strong>3.3.- Reporte de incidencias de proveedores o contratistas.</strong><br><br>
                Se tendrá un reporte de incidentes de cada contratista, para tener un parámetro a la hora de realizar la
                evaluación continua y así determinar la eficiencia y eficacia de cada uno de los contratistas, la
                estructura de este reporte se definirá en el procedimiento XII-01.
                También se definirá la metodología a utilizar para identificar la causa raíz del o las incidencias
                reportadas.<br>
               <strong> 3.4. Evaluación continua de los proveedores o contratistas</strong><br><br>
                Se tendrá una evaluación continua de los proveedores y contratistas, Los resultados de la evaluación
                continua, se reflejan en la ficha de evaluación de proveedor <br><br>
                <strong>3.5.- Capacitación inicial y continua de contratistas</strong><br><br>
                Una vez generado el alta en el sistema, es enviado a su consola de operación en el botón de
                evaluación el curso de inducción cuyo objetivo es proporcionar la información necesaria de la Estación
                de Servicio, relacionada con la Seguridad Industrial, Seguridad Operativa y Protección al Medio
                Ambiente con los siguientes temas:<br>
                a. Política en Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente <br>
                b. Objetivos del SASISOPA y del Sistema de Gestión de las Mediciones (SGM) <br>
                c. Aspectos e impactos ambientales <br>
                d. Peligros en la estación de servicio <br>
                e. Uso de equipo de protección personal <br>
                f. Autorización para realizar trabajos peligrosos <br>
                g. ¿Qué debo hacer si soy testigo de un incidente o accidente? <br>
                h. ¿Qué debo hacer si soy testigo de un acto o condición insegura? <br>
                i. ¿Qué debo hacer si requiero hacer una queja o sugerencia referente al sistema de
                administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM)? <br>
                j. ¿Qué debo hacer si soy testigo de una emergencia? <br> <br>
                <strong>3.7.- Responsabilidad de la Estación de Servicio por parte de los terceros o contratistas.</strong><br>
                La Estación de Servicio es responsable de las actividades que desarrollan los contratistas,
                subcontratistas, proveedores y prestadores de servicio dentro de la Estación de Servicio en cualquiera
                de las etapas del proyecto por lo cual se han implementado los siguientes controles:
                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
               <strong> 3.7.1.- Etapa de Diseño</strong><br><br>
                El proveedor o contratista se apegará a las especificaciones requeridas por la NOM-005-ASEA-2016
                en Etapa 1. Proyecto arquitectónico y Etapa 2 Proyecto básico establecidas en la matriz de diseño, el
                responsable establecido en la matriz de responsabilidades evaluara que el contratista cumpla con
                dichas especificaciones establecidas para garantizar el cumplimiento de la normativa.<br>
                <strong>3.7.2. Etapa de Construcción</strong><br><br>
                El proveedor o contratista deberá de descargar la carta de controles operaciones requeridos para la
                etapa de construcción que consiste en lo siguiente:<br>
                Desarrollar y llevar a cabo un programa de seguridad industrial y operativa que incluya controles y
                medidas de los siguientes procedimientos:<br>
                a. excavación <br>
                b. terracerías <br>
                c. montaje <br>
                d. colados <br>
                e. capacitación <br>
                f. trabajos en alturas <br>
                g. trabajos de corte y soldadura <br>
                h. permisos de trabajo <br>
                i. manejo de SQP <br>
                j. uso de maquinaria y equipo <br>
                además de contar con un programa de protección ambiental y medidas de mitigación de las siguientes
                actividades y/o procedimientos <br>
                a. Manejo y disposición de residuos de manejo especial. <br>
                b. Manejo y disposición de residuos peligrosos. <br>
                c. Protección de cuerpos de agua. <br>
                d. Protección de flora y fauna. <br>
                e. Protección de suelo. <br>
                f. Descarga de aguas residuales. <br>
                g. Emisiones de gases a la atmósfera. <br>
                h. Cumplir con las recomendaciones establecidas en la manifestación o informe preventivo de
                impacto ambiental. <br>
                i. Capacitación ambiental a sus empleados para garantizar el cumplimiento de las normas y
                requisitos gubernamentales.<br>
                j. Evitar generar daños a los vecinos de la zona por la realización de sus operaciones
                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                Derivado de lo anterior, la empresa o contratista que desarrollará las actividades de construcción, se
                compromete a cumplir con el desarrollo e implementación de los procedimientos (criterios
                operacionales) antes descritos, así como de llevar a cabo los registros de las evidencias de la
                ejecución de los procedimientos (controles operacionales), por lo que se firmará con la empresa o
                contratistas una carta compromiso. <br>
                <strong>3.7.3. Etapa de Operación y mantenimiento</strong><br><br>
                Para garantizar que los proveedores o contratistas realicen las actividades dentro de la Estación de
                Servicio conforme a los criterios y controles operacionales establecidos se les dará un usuario y
                contraseña para que las actividades que desarrollen sean monitoreadas y controladas a través del
                sistema, mediante las bitácoras de registro, permisos de trabajo y hojas de seguridad que se derivan
                de los programas de mantenimiento.<br>
               <strong> 3.7.4. Etapa de desmantelamiento y Abandono de instalaciones</strong><br><br>
                El proveedor o contratista deberá de descargar la carta de controles operaciones requeridos para la
                etapa de desmantelamiento y abandono de instalaciones que consiste en desarrollar y llevar a cabo un
                programa de seguridad industrial y operativa que incluya controles y medidas de los siguientes
                procedimientos:<br>
                a. excavación <br>
                b. capacitación <br>
                c. trabajos en alturas <br>
                d. trabajos en espacios confinados <br>
                e. trabajos de corte y soldadura <br>
                f. permisos de trabajo <br>
                g. manejo de SQP <br>
                h. uso de maquinaria y equipo <br>
                Además de contar con un programa de protección ambiental y medidas de mitigación de las siguientes
                actividades y/o procedimientos: <br>
                a. Manejo y disposición de residuos de manejo especial. <br>
                b. Manejo y disposición de residuos peligrosos. <br>
                c. Protección de cuerpos de agua. <br>
                d. Protección de flora y fauna. <br>
                e. Protección de suelo. <br>
                f. Descarga de aguas residuales. <br>
                g. Emisiones de gases a la atmósfera. <br>
                h. Cumplir con las recomendaciones establecidas en la manifestación o informe preventivo de
                impacto ambiental. <br>
                i. Capacitación ambiental a sus empleados para garantizar el cumplimiento de las normas y
                requisitos gubernamentales. <br>
                j. Evitar generar daños a los vecinos de la zona por la realización de sus operaciones
                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                Derivado de lo anterior, la empresa o contratista que desarrollará las actividades de desmantelamiento
                y abandono de instalaciones, se compromete a cumplir con el desarrollo e implementación de los
                procedimientos (criterios operacionales) antes descritos, así como de llevar a cabo los registros de las
                evidencias de la ejecución de los procedimientos (controles operacionales), por lo que se firmará con la
                empresa o contratistas una carta compromiso.<br><br>
                <strong>3.8.- Difusión.</strong><br><br>
                La difusión de las actividades asignadas será mediante su correo interno a través de Notificación de
                Trabajo de diseño, Construcción y/o operación o mantenimiento y al correo externo del distribuidor o
                contratista haya dado en su cedula de alta.<br><br>
               <strong> 3.9.- Solicitud de acción correctiva y preventiva.</strong><br><br>
                Toda solicitud de acción preventiva y correctiva referente a este procedimiento, se llenará de acuerdo
                al instructivo llenado del formato de solicitud de acción preventiva y correctiva.
                El formato de solicitud de acción preventiva y correctiva, se atenderá de acuerdo a lo establecido
                dentro del procedimiento para el manejo de no conformidades, acciones preventivas y correctivas del
                Sistema de Administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM) con
                código.<br><br>
                <strong>4.- REGISTROS</strong><br><br>
                Los registros generados serán especificados dentro del procedimiento XII-01.
                </p>
            </div>
@endsection


