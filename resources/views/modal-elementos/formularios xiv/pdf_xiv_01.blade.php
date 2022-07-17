@extends('layouts.pdf.layout_pdf')

@section('template_title')
    XIV-01
@endsection

@section('content_pdf')
            <div class="col-12 ">
                <p class="p-5">
                <strong>1.- OBJETIVO</strong><br><br>
                1.1.- Definir los lineamientos para el control y seguimiento de las solicitudes de no conformidades,
                acciones preventivas y oportunidades de mejora respecto a la ejecución de procesos u operaciones y
                la funcionalidad del Sistema de Administración (SASISOPA) y del Sistema de Gestión de las
                Mediciones (SGM) de la Estación de Servicio.<br><br>
                <strong>2.- ALCANCE</strong><br><br>
                2.1.- Este procedimiento, tiene como alcance dar seguimiento y llevar un control de todas las
                solicitudes de no conformidades, acciones preventivas, correctivas y oportunidades de mejora
                referente a la funcionalidad del Sistema de Administración (SASISOPA) y del Sistema de Gestión de
                las Mediciones (SGM), así como de sus procedimientos y de las actividades que se derivan.<br><br>
                <strong>3.- RESPONSABILIDADES y DESARROLLO</strong><br><br>
                Es necesario conocer y detectar todos aquellos problemas o fallas del Sistema de Administración
                (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM), que pueden causar un efecto
                negativo a los procesos, actividades y sistema de administración (SASISOPA) y del Sistema de
                Gestión de las Mediciones (SGM) de la Estación de Servicio.<br><br>
                3.1.- Hallazgos del Sistema de Administración.<br><br>
                El Sistema de Administración está conformado por elementos que son la estructura del Sistema de
                Administración (SASISOPA) y del Sistema de Gestión de las Mediciones (SGM); cada elemento está
                compuesto por procedimientos generales, procedimientos específicos, actividades y formatos de
                registro.<br><br>
                En cada regla del Sistema de Administración (SASISOPA) y del Sistema de Gestión de las Mediciones
                (SGM), se pueden presentar hallazgos de no conformidad y/o potenciales; estos hallazgos, podrán ser
                reportados mediante el levantamiento de una solicitud de acción preventiva y correctiva que se
                encuentra referida en cada regla del sistema y que son mencionados dentro del desarrollo de cada
                procedimiento general o especifico.<br><br>
                3.2.- Solicitud de acción preventiva y/o correctiva.<br><br>
                Los responsables de cada elemento o procedimientos o actividades, podrán levantar una solicitud de
                acción preventiva y correctiva referente al procedimiento o formato de registro del que son
                responsables, para el levantamiento de acciones se realizarán los siguientes pasos
                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                Ingresar a la herramienta gasafe con su usuario y contraseña <br><br>
                - Dirigirse al elemento del que es responsable y se pretende levantar una acción correctivabr <br> <br>
                - Dar clic al formato de registro donde es aplicable la acción correctivabr <br> <br>
                - Al dar clic en la el formato de regsitro te ridirigira al calendario y visualizaras la pestaña de
                acción correctiva como se muestra un ejemplo a continuaciónbr <br> <br>
                Darás clic en acción correctiva y mostrará la siguiente ventana, donde llenaras el campo
                descripción, este es un campo de texto libre donde explicaras detalladamente la solicitud de
                acción correctiva o preventiva. <br> <br>
                - El único campo que se llenará será el campo descripción , el sistema configurá los datos de
                la estación de servicio, fecha, formato de registro de donde se levanto, nombre y puesto de
                quien solicita.<br> <br>
                - Al momento en que la solicitud de acción preventiva y correctiva es generada, esta, será
                registrada en la matriz de alta y seguimiento de acción preventiva o correctiva donde el
                responsable del elemento XIV le dará seguimiento a cada solicitud de acción preventiva y/o
                correctiva. <br> <br>
                - El único campo que se llenará será el campo descripción , el sistema configurá los datos de
                la estación de servicio, fecha, formato de registro de donde se levanto, nombre y puesto de
                quien solicita. <br> <br>
                - Al momento en que la solicitud de acción preventiva y correctiva es generada, esta, será
                registrada en la matriz de alta y seguimiento de acción preventiva o correctiva donde el
                responsable del elemento XIV le dará seguimiento a cada solicitud de acción preventiva y/o
                correctiva. <br> <br>
                - El único campo que se llenará será el campo descripción , el sistema configurá los datos de
                la estación de servicio, fecha, formato de registro de donde se levanto, nombre y puesto de
                quien solicita. <br> <br>
                - Al momento en que la solicitud de acción preventiva y correctiva es generada, esta, será
                registrada en la matriz de alta y seguimiento de acción preventiva o correctiva donde el
                responsable del elemento XIV le dará seguimiento a cada solicitud de acción preventiva y/o
                correctiva. <br> <br>
                -Dentro de esta pestaña determinaras si el seguimiento procede o no procede la solicitud. <br><br>
                - Si procede, se habilitará el siguinet botón análisis de causa y elaboración de plan de
                acción <br>
                - Donde daras darás seguimiento a la ventana siguiente <br>
                </p>
            </div>

            @include('layouts.pdf.pdf_header')

            <div class="col-12 ">
                <p class="p-5">
                - Darás seguimiento al análisis de causa y elaboración de plan de acción, se habilitará el
                siguiente botón atención de actividades y carga de evidencia. <br> <br>
                - Una vez de haber ejecutado las actividades levantadas en el plan de acción se continuará
                con el seguimiento en la pestaña análisis de causa, se colocará la actividad que se realizó y
                se cargará una evidencia docuemntal en el siguiente botón. <br> <br>
                - Posterior a colocar las actividades ejecutadas y cargar evidencia documental, se habilitará el
                siguiente botón <br> <br>
                - Posterior a colocar las actividades ejecutadas y cargar evidencia documental, se habilitará el
                siguiente botón <br><br>
                3.3.1.- Todas las no conformidades que se documenten, tendrán un plazo máximo de 60 (sesenta)
                días naturales para su cierre. En caso de existir algún plan de acción o actividad cuyo tiempo de
                ejecución exceda el límite de tiempo fijado, esta, deberá estar debidamente soportada con toda la
                documentación necesaria a fin de poder comprobar la razón por las que excede dicho límite de tiempo.
                    <br><br>
                3.3.2.- El seguimiento a las acciones preventivas y/o correctivas es responsabilidad en conjunto de:
                    <br><br>
                3.3.3.- Los responsables de ejecutar las actividades descritas en el formato: Solicitud de acción
                preventiva o correctiva.<br><br>
                3.3.4.- Los responsables de las actividades y/o procedimientos donde se detectó el hallazgo, que
                deben estar enterados del estado que guardan estas acciones.<br><br>
                3.3.5.- Del responsable de este procedimiento, que verifica que dichas actividades/acciones, se han
                implementado en el plazo determinado. <br><br>

                <strong>4.- REGISTROS</strong> <br><br>
                4.1.- Solicitud de Acción correctiva <br>
                4.2.- Matriz de alta y seguimiento de acción preventiva o correctiva <br>
                </p>
            </div>

@endsection


