<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequisitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('iii_elemento')->insert([
            'leyes' => 'RES/811/2015',
            'marco' => '4. Obligaciones del Permisionario',
            'descripcion' => '4.5. El Permisionario debe elaborar los documentos que describan el SGM que incluyan el diseño, implementación, operación, desempeño y evaluación. Estos documentos deben contener: I. Un manual donde se describa la organización del SGM y las generalidades de su operación.',
            'ambito' => 'SGM',
            'mecanismo_cumplimiento' => 'I Política.',
            'mecanismo_especifico' => 'Manual del Sistema de Gestión de Medición',
            'periodicidad' => '1 año',
            'obligatorio' => '0',
            'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-009-STPS-2011',
            'marco' => '5. Obligaciones del patrón:',
            'descripcion' => '5.1.- Contar con un análisis de las condiciones prevalecientes en las áreas en las que se llevarán a cabo los trabajos en alturas, en forma previa a su realización, a fin de identificar los factores de riesgo existentes.',
            'ambito' => 'Seguridad',
            'mecanismo_cumplimiento' => 'II Identificación de peligros y aspectos ambientales, análisis de riesgos y evaluación de impactos ambientales.',
            'mecanismo_especifico' => '1.- Procedimiento para la identificación de peligros y evaluación de los riesgos. 2.- Matriz para la identificación de peligros y análisis de riesgos.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'RES/811/2015',
            'marco' => 'Apartado 2. Sistema de Gestión de Mediciones Sección A. Obligaciones del Permisionario 4. Obligaciones del Permisionario.',
            'descripcion' => '4.3. El SGM deberá contener la organización y administración del Sistema de medición en términos de su estructura, funciones, responsabilidades, competencias de cada uno de sus elementos y sus interrelaciones.',
            'ambito' => 'SGM',
            'mecanismo_cumplimiento' => 'V Funciones, responsabilidades y autoridad.',
            'mecanismo_especifico' => 'E05-P01. Procedimiento de funciones y responsabilidades',
            'periodicidad' => '1 año',
            'obligatorio' => '0',
            'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'RES/811/2015',
            'marco' => 'Sección A. Obligaciones del Permisionario 4. Obligaciones del Permisionario',
            'descripcion' => '4.5. El Permisionario debe elaborar los documentos que describan el SGM que incluyan el diseño, implementación, operación, desempeño y evaluación. Estos documentos deben contener: II. Los procedimientos que detallen las actividades del SGM en relación a los sistemas de medición que incluyan: b) La descripción, evaluación y actualización de las competencias del personal que opera los sistemas de medición;',
            'ambito' => 'SGM',
            'mecanismo_cumplimiento' => 'VI-01 Procedimiento de competencia, capacitación y entrenamiento interna y externa.',
            'mecanismo_especifico' => 'Matriz para la identificación de competencia del personal.',
            'periodicidad' => '1 año',
            'obligatorio' => '0',
            'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-002-STPS-2010.',
            'marco' => '5. Obligaciones del patrón:',
            'descripcion' => '5.8.- Elaborar un programa de capacitación anual teórico-práctico en materia de prevención de incendios y atención de emergencias, conforme a lo previsto en el Capítulo 11 de esta Norma, así como capacitar a los trabajadores y a los integrantes de las brigadas contra incendio, con base en dicho programa.',
            'ambito' => 'Seguridad',
            'mecanismo_cumplimiento' => 'VI-01-02 Plan general de capacitación interno.',
            'mecanismo_especifico' => 'Plan general de capacitación interno.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'NOM-052-SEMARNAT-2005',
            'marco' => '6. Procedimiento para determinar si un residuo es peligroso. 6.1 El procedimiento para determinar si en un residuo es peligroso, se presenta en la figura 1.',
            'descripcion' => 'Características Código de Peligrosidad de los Residuos (CPR). Corrosividad C Reactividad R Explosividad E Toxicidad T Ambiental Te Aguda Th Crónica Tt Inflamabilidad I',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VI-01-02 Plan general de capacitación interno.',
            'mecanismo_especifico' => 'Plan general de capacitación interno.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'NOM-001-STPS-2008',
            'marco' => '5. Obligaciones del patrón.',
            'descripcion' => '5.6.- Proporcionar información a todos los trabajadores para el uso y conservación de las áreas donde realicen sus actividades en el centro de trabajo, incluidas las destinadas para el servicio de los trabajadores.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'VI-01-02-Plan general de capacitación interno.',
            'mecanismo_especifico' => 'Plan general de capacitación.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'NOM-017-STPS-2008',
            'marco' => '5. Obligaciones del patrón.',
            'descripcion' => '5.6.-Proporcionar a los trabajadores la capacitación y adiestramiento para el uso, revisión, reposición, limpieza, limitaciones, mantenimiento, resguardo y disposición final del equipo de protección personal, con base en las indicaciones, instrucciones o procedimientos que elabore el fabricante de tal equipo de protección personal.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'VI-01-02-Plan general de capacitación interno.',
            'mecanismo_especifico' => 'Plan general de capacitación interno.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'NOM-018-STPS-2015.',
            'marco' => '5. Obligaciones del patrón:',
            'descripcion' => '5.5.- Capacitar y adiestrar en el sistema de identificación y comunicación de peligros y riesgos cumpliendo con: a) Proporcionar, por lo menos una vez al año, capacitación a todos los trabajadores que manejen sustancias químicas peligrosas y, cada vez que se emplee una nueva sustancia química peligrosa en el centro de trabajo, o se modifique el proceso. b) Mantener el registro de la última capacitación dada a cada trabajador. c) Entregar las respectivas constancias de capacitación a los trabajadores que así lo soliciten.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'VI-01-02-Plan general de capacitación interno.',
            'mecanismo_especifico' => 'Plan general de capacitación interna.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-019-STPS-2011.',
            'marco' => '5. Obligaciones del patrón:',
            'descripcion' => '5.13.- Proporcionar a los integrantes de la comisión, al menos una vez por año, capacitación para la adecuada realización de sus funciones, con base en el programa que para tal efecto se elabore, de acuerdo con lo señalado en el Capítulo 10 de la presente Norma.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'VI-01-02-Plan general de capacitación interno.',
            'mecanismo_especifico' => 'Plan general de capacitación interna.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-026-STPS-2008',
            'marco' => '5. Obligaciones del patrón',
            'descripcion' => '5.2.- Proporcionar capacitación a los trabajadores sobre la correcta interpretación de los elementos de señalización del centro de trabajo.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'VI-01-02-Plan general de capacitación interno.',
            'mecanismo_especifico' => 'Plan general de capacitación interno.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-009-STPS-2011',
            'marco' => '5. Obligaciones del patrón',
            'descripcion' => '5.13.- Proporcionar capacitación, adiestramiento e información a los trabajadores que estarán involucrados en la realización de los trabajos en alturas, con base en lo dispuesto en el Capítulo 16 de la presente Norma, así como en lo relativo a la aplicación del plan de atención a emergencias, a que se refiere el Capítulo 15 de la misma.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'VI-Competencia del personal, capacitación y entrenamiento.',
            'mecanismo_especifico' => '1.- Programa de capacitación interno. 2.- Programa de capacitación externo.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-029-STPS-2011',
            'marco' => '5. Obligaciones del patrón',
            'descripcion' => '5.17.- Proporcionar capacitación y adiestramiento a los trabajadores que realicen actividades de mantenimiento de las instalaciones eléctricas del centro de trabajo, con base en los procedimientos de seguridad que para tal efecto se elaboren, conforme a lo dispuesto en el Capítulo 14 de esta Norma.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'VI-Competencia del personal, capacitación y entrenamiento.',
            'mecanismo_especifico' => '1.-Plan general de capacitación interno. 2.- Plan general de capacitación externo.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-002-STPS-2010.',
            'marco' => '5. Obligaciones del patrón',
            'descripcion' => '5.3.- Contar con las instrucciones de Seguridad, aplicables en cada área del centro de trabajo y difundirlas entre los trabajadores, contratistas y visitantes, según corresponda (véase la Guía de Referencia I, Instrucciones de Seguridad para la Prevención y Protección contra Incendios).',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'VII-01 Procedimiento de comunicación interna y externa.',
            'mecanismo_especifico' => 'Procedimiento de comunicación interna y externa.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'NOM-018-STPS-2015.',
            'marco' => '5. Obligaciones del patrón',
            'descripcion' => '5.3.- Comunicar los peligros y riesgos a todos los trabajadores del centro de trabajo y al personal de los contratistas que estén expuestos a sustancias químicas peligrosas.',
            'ambito' => 'Salud y seguridad ocupacional.',
            'mecanismo_cumplimiento' => 'VII-01-02-Formato de difusión.',
            'mecanismo_especifico' => 'Formato de difusión.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-009-STPS-2011',
            'marco' => '5. Obligaciones del patrón',
            'descripcion' => '5.6.- Evitar o interrumpir las actividades en alturas cuando se detecten condiciones inseguras en los sistemas o equipos utilizados para estos trabajos, o cuando existan condiciones climáticas que pongan en riesgo a los trabajadores.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'VII-Comunicación, participación y consulta.',
            'mecanismo_especifico' => '1.- Procedimiento de reporte de actos y condiciones inseguras. 2.- Formato de registro de actos y condiciones inseguras. 3.- Bitácora de registro de actos y condiciones inseguras.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'RES/811/2015',
            'marco' => 'Sección A. Obligaciones del Permisionario 4. Obligaciones del Permisionario',
            'descripcion' => '4.5. El Permisionario debe elaborar los documentos que describan el SGM que incluyan el diseño, implementación, operación, desempeño y evaluación. Estos documentos deben contener: III. Los procedimientos que detallen las actividades del SGM en cuanto a su desempeño para la gestión, que incluyan: a) La elaboración, aprobación, modificación, cancelación y conservación de los documentos del SGM; b) La generación, codificación, preservación de los registros del desempeño de los sistemas de medida y del SGM',
            'ambito' => 'SGM',
            'mecanismo_cumplimiento' => 'VIII Control de documentos y registros',
            'mecanismo_especifico' => 'E08-P01. Procedimiento para el control de documentos',
            'periodicidad' => '1 año',
            'obligatorio' => '0',
            'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'RES/811/2015',
            'marco' => 'Sección A. Obligaciones del Permisionario 4. Obligaciones del Permisionario',
            'descripcion' => 'IV. Los registros producidos por el SGM que den evidencia de la realización de las actividades que el SGM establezca.',
            'ambito' => 'SGM',
            'mecanismo_cumplimiento' => 'VIII-01 Procedimiento de control de documentos.',
            'mecanismo_especifico' => 'Listado de formatos, registros y bitácoras',
            'periodicidad' => '1 año',
            'obligatorio' => '0',
            'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Ley ASEA',
            'marco' => 'Título Segundo Atribuciones de la Agencia y Bases de Coordinación. Capítulo I.- Atribuciones de la Agencia. Artículo 7.- Los actos administrativos a que se refiere la fracción XVIII del artículo 5, serán los siguientes:',
            'descripcion' => 'VII.- Establecer los lineamientos para la conformación y operación de los Sistemas de Administración con que deberán contar los Regulados.',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-01-Listado de documentación del Sistema de Administración.',
            'mecanismo_especifico' => 'Dictamen de la conformación del Sistema de Administración por un Tercero Autorizado.',
            'periodicidad' => 'Única ocasión',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-001-SEMARNAT-1996',
            'marco' => '1. Objetivo y campo de aplicación.',
            'descripcion' => 'Esta Norma Oficial Mexicana, establece los límites máximos permisibles de contaminantes en las descargas de aguas residuales en aguas y bienes nacionales, con el objeto de proteger su calidad y posibilitar sus usos y, es de observancia obligatoria para los responsables de dichas descargas. Esta Norma Oficial Mexicana, no se aplica a las descargas de aguas provenientes de drenajes separados de aguas pluviales.',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-02 Listado de formatos, registros y bitácoras.',
            'mecanismo_especifico' => 'Análisis de aguas residuales (laboratorio acreditado por la EMA).',
            'periodicidad' => '1 año',
            'obligatorio' => '0',
            'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-002-SEMARNAT-1996',
            'marco' => '1. Objetivo y campo de aplicación.',
            'descripcion' => 'Esta Norma Oficial Mexicana establece los límites máximos permisibles de contaminantes en las descargas de aguas residuales a los sistemas de alcantarillado urbano o municipal con el fin de prevenir y controlar la contaminación de las aguas y bienes nacionales, así como proteger la infraestructura de dichos sistemas y es de observancia obligatoria para los responsables de dichas descargas. Esta Norma no se aplica a la descarga de las aguas residuales domésticas, pluviales, ni a las generadas por la industria, que sean distintas a las aguas residuales de proceso y conducidas por drenaje separado.',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Análisis de aguas residuales (por un laboratorio acreditado por la EMA).',
            'periodicidad' => '1 año',
            'obligatorio' => '0',
            'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Ley H.',
            'marco' => 'Título Tercero.- De las demás actividades de la Industria de Hidrocarburos. Capítulo I.- De los permisos.',
            'descripcion' => 'II. Para el transporte, almacenamiento, distribución, compresión, licuefacción, descompresión, regasificación, comercialización y, expendio al público de Hidrocarburos, Petrolíferos o Petroquímicos, según corresponda, así como la gestión de Sistemas Integrados, que serán expedidos por la Comisión Reguladora de Energía.',
            'ambito' => 'Seguridad y Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Permiso de la Comisión Reguladora de Energía.',
            'periodicidad' => 'Única ocasión',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Ley H.',
            'marco' => 'Título Cuarto Disposiciones aplicables a la Industria de Hidrocarburos Capítulo V.- Del Impacto Social.',
            'descripcion' => 'Artículo 118.- Los proyectos de infraestructura de los sectores público y privado en la industria de Hidrocarburos, atenderán los principios de sostenibilidad y respeto de los derechos humanos de las comunidades y pueblos de las regiones en los que se pretendan desarrollar.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Dictamen de Impacto Social.',
            'periodicidad' => 'Única ocasión',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'LGEEPA',
            'marco' => 'Capítulo III Prevención y Control de la Contaminación del Agua y de los Ecosistemas Acuáticos. Artículo 119 BIS.',
            'descripcion' => 'IV.- Llevar y actualizar el registro de las descargas a los sistemas de drenaje y alcantarillado que administren, el que será integrado al registro nacional de descargas a cargo de la Secretaría.',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => '1.- Permiso para la descarga de aguas residuales al alcantarillado municipal. 2.- Título de concesión para la descarga de aguas residuales a un bien nacional.',
            'periodicidad' => '1 año',
            'obligatorio' => '0',
            'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Ley ASEA',
            'marco' => '
            Título Segundo. Atribuciones de la Agencia y Bases de Coordinación. Capítulo I.- Atribuciones de la Agencia. Artículo 7.- Los actos administrativos a que se refiere la fracción XVIII del artículo 5, serán los siguientes:',
            'descripcion' => 'I. Autorizaciones en materia de impacto y riesgo ambiental del Sector Hidrocarburos, de carbono ductos, instalaciones de tratamiento, confinamiento o eliminación de residuos peligrosos; aprovechamientos forestales en selvas tropicales y especies de difícil regeneración. Así como obras y actividades en humedales, manglares, lagunas, ríos, lagos y esteros conectados con el mar, litorales o las zonas federales de las áreas antes mencionadas, en términos del artículo 28 de la Ley General del Equilibrio Ecológico y la Protección al Ambiente y del Reglamento de la materia.',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => '1.- Dictamen de Impacto Ambiental. 2.- Liberación de Dictamen de Impacto Ambiental.',
            'periodicidad' => 'Única ocasión',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Ley ASEA',
            'marco' => 'Título Segundo Atribuciones de la Agencia y Bases de Coordinación. Capítulo I.- Atribuciones de la Agencia. Artículo 7.- Los actos administrativos a que se refiere la fracción XVIII del artículo 5, serán los siguientes:',
            'descripcion' => 'II. Autorización para emitir olores, gases o partículas sólidas o líquidas a la atmósfera por las instalaciones del Sector de Hidrocarburos, en términos del artículo 111 Bis de la Ley General del Equilibrio Ecológico y la Protección al Ambiente y del Reglamento de la Materia.',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Licencia Ambiental Única.',
            'periodicidad' => 'Única ocasión',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-005-ASEA-2016',
            'marco' => '9. Dictámenes técnicos. 9.3. Dictamen técnico de operación y mantenimiento.',
            'descripcion' => 'El Regulado debe contar con un dictamen técnico de operación y mantenimiento, en el que se haya verificado el cumplimiento de la totalidad de los requisitos y especificaciones establecidas en la Norma, relativos a la operación y el mantenimiento y debe exhibir a la Agencia dicho dictamen cuando ésta, lo requiera. La evaluación del cumplimiento de la operación y mantenimiento de la Estación de Servicio, se debe llevar a cabo una vez al año (considerándose el periodo entre el 1 de enero al 31 de diciembre de cada año) y/o conforme al Programa de Evaluación que emita la Agencia.',
            'ambito' => 'Seguridad y Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Dictamen técnico de operación y mantenimiento.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'NOM-004-ASEA-2018',
            'marco' => '5. Prueba del Prototipo de SRV (Sistema de Recuperación de Vapores).',
            'descripcion' => 'El resultado de la prueba de prototipo de SRV realizada por el laboratorio de pruebas, debe constar en un informe de resultados cuya vigencia será de 3 años.',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Dictamen de prototipo del SRV',
            'periodicidad' => '3 años',
            'obligatorio' => '0',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'NOM-004-ASEA-2018',
            'marco' => '6. Instalación del Sistema de Recuperación de Vapores (SRV)',
            'descripcion' => 'a Los Regulados deberán instalar un SRV cuyo prototipo haya obtenido un informe de resultados por un laboratorio de pruebas que demuestre el cumplimiento de lo establecido en el presente proyecto de Norma, que se acreditará con copia simple de dicho informe de resultados. b Los SRV deben ser instalados de acuerdo al proyecto ejecutivo. c. Los SRV deben ser instalados por personal competente. d. Se debe contar con puertos de muestreo para dispositivos de medición en las líneas de recuperación de vapores dentro del contenedor de cada dispensario y las tuberías de venteo. e. Cualquier modificación en la instalación de SRV, requiere de su correspondiente actualización en el proyecto ejecutivo del SRV',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Proyecto ejecutivo de instalación del SRV',
            'periodicidad' => 'Única ocasión',
            'obligatorio' => '0',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'NOM-004-ASEA-2018',
            'marco' => '7. Prueba inicial del SRV',
            'descripcion' => '7.1. Estas pruebas deben efectuarse a los SRV instalados, dentro de los siguientes 90 días naturales a su puesta en operación.',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Pruebas iniciales del SRV',
            'periodicidad' => '3 meses',
            'obligatorio' => '0',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'NOM-004-ASEA-2018',
            'marco' => '10. Pruebas periódicas del SRV',
            'descripcion' => 'a. Deben ser realizadas en la secuencia señalada, con resultados aprobatorios en cada una de ellas. b. Deben efectuarse en un horario diurno. c. Deben efectuarse con una muestra mínima de 10 vehículos diferentes con un suministro mínimo de 15 l d. Para que la prueba periódica sea aprobatoria, la eficiencia del SRV debe ser como mínimo del 85%',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Dictamen de pruebas periódicas del SRV',
            'periodicidad' => '1 año',
            'obligatorio' => '0',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Lineamientos para la conformación, implementación y autorización de los sistemas de administración',
            'marco' => 'Disposiciones administrativas de carácter general que establecen los Lineamientos para la conformación, implementación y autorización de los Sistemas de Administración de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente aplicables a las actividades de Expendio al Público de Gas Natural, Distribución y Expendio al Público de Gas Licuado de Petróleo y de Petrolíferos.',
            'descripcion' => 'Artículo 1. Los presentes Lineamientos tienen por objeto establecer los requisitos mínimos para la conformación, autorización e implementación de los Sistemas de Administración de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente de los Regulados, a los que se refiere el Capítulo III de la Ley de la Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos.',
            'ambito' => 'Seguridad y Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => '1.- Registro del Sistema Sistema de Administración. 2.- Autorización del programa de implementación',
            'periodicidad' => '-',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Lineamientos para la gestión integral de los Residuos de Manejo Especial',
            'marco' => 'Artículo 1 y Artículo 2',
            'descripcion' => 'Artículo 1.- Las presentes disposiciones tienen por objeto establecer los lineamientos que deberán cumplir los Regulados y Prestadores de Servicios involucrados en la gestión integral de los Residuos de Manejo Especial del Sector Hidrocarburos. Artículo 2.- Los presentes lineamientos son aplicables a todos los Regulados que realizan las actividades del Sector Hidrocarburos en los términos del Artículo 3o., fracción XI, de la Ley de la Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos, así como a los Prestadores de Servicios involucrados directamente en su manejo integral.',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Registro como Empresa Generadora de Residuos de Manejo Especial',
            'periodicidad' => 'Única ocasión',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'DACG PARA SEGUROS',
            'marco' => 'CAMPO DE APLICACIÓN Compresión, Licuefacción, Descompresión y Regasificación, así como el Transporte, Almacenamiento, Distribución y Expendio al Público de Gas Natural; II. El transporte, almacenamiento, distribución y expendio al público de petrolíferos, y III. Transporte por ducto y el Almacenamiento, que se encuentre vinculado a ductos de Petroquímicos producto del procesamiento del Gas Natu',
            'descripcion' => 'Deberán contratar las Pólizas de Seguro requeridas en estas Disposiciones con una Institución de Seguros autorizada por la Secretaría de Hacienda y Crédito Público o la Comisión Nacional de Seguros y Fianzas para operar en los Estados Unidos Mexicanos, según sea el caso. Deberán contar con un seguro vigente y registrado ante la Agencia, el cual deberá incluir las coberturas de RC y RA de estas actividades La Póliza de Seguro deberá cubrir la RC Y RA, en conjunto por un limite de Responsabilidad de $275,000.00 USD (Doscientos setenta y cinco mil dólares de los Estados Unidos de América) por evento. La vigencia mínima de las pólizas debe ser de un año.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'PÓLIZA DE SEGURO',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'NMX-CC-10012-IMNC-2004',
            'marco' => 'OBJETO Y CAMPO DE APLICACIÓN',
            'descripcion' => 'ESTA NORMA MEXICANA ESPECIFICA REQUISITOS GENÉRICOS Y PROPORCIONA ORIENTACIÓN PARA LA CONFIRMACIÓN METROLÓGICA DEL EQUIPO DE MEDICIÓN UTILIZADO PARA Y DEMOSTRAR EL CUMPLIMIENTO DE REQUISITOS METROLÓGICA.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'VIII-01-03 Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Certificado de Cumplimiento del SGM.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-005-ASEA-2016',
            'marco' => '7. Operación. 7.2. Disposiciones de Seguridad. 7.2.2. Análisis de Riesgos.',
            'descripcion' => 'La Estación de Servicio debe contar con un Análisis de Riesgos elaborado por una persona moral con reconocimiento nacional o internacional, para las etapas en las que se solicita en la Norma, de conformidad con la regulación que emita la Agencia.',
            'ambito' => 'Seguridad y Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03-Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Análisis de Riesgos.',
            'periodicidad' => 'Única ocasión',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Ley ASEA',
            'marco' => 'Título Segundo Atribuciones de la Agencia y Bases de Coordinación. Capítulo I.- Atribuciones de la Agencia. Artículo 7.- Los actos administrativos a que se refiere la fracción XVIII del artículo 5, serán los siguientes:',
            'descripcion' => 'III. Autorizaciones en materia de residuos peligrosos en el Sector de Hidrocarburos, previstas en el artículo 50, fracciones I a XI, de la Ley General para la Prevención y Gestión Integral de los Residuos y de los Reglamentos en la Materia.',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03-Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Registro como Empresa Generadora de Residuos Peligrosos.',
            'periodicidad' => 'Única ocasión',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Ley ASEA',
            'marco' => 'Título Segundo Atribuciones de la Agencia y Bases de Coordinación. Capítulo I.- Atribuciones de la Agencia. Artículo 7.- Los actos administrativos a que se refiere la fracción XVIII del artículo 5 serán los siguientes:',
            'descripcion' => 'V.- Autorizaciones en materia de residuos de manejo especial, en términos de la Ley General para la Prevención y Gestión Integral de los Residuos y de los Reglamentos en la Materia.',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03-Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Registro como empresa generadora de residuos de manejo especial.',
            'periodicidad' => '-',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Ley ASEA',
            'marco' => 'Capítulo III.- Sistema de Administración de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente.',
            'descripcion' => 'Artículo 12.- La Agencia establecerá las normas de carácter general para que los Regulados, implementen Sistemas de Administración en las actividades que lleven a cabo. Los Sistemas de Administración a los que alude el párrafo anterior, deberán prever los estándares, funciones, responsabilidades y encargados de la Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente. Artículo 13.- Los Sistemas de Administración deben considerar todo el ciclo de vida de las instalaciones, incluyendo su abandono y desmantelamiento, de conformidad con lo que prevean las reglas de carácter general correspondientes.',
            'ambito' => 'Medio Ambiente.',
            'mecanismo_cumplimiento' => 'VIII-01-03-Lista de control de autorizaciones y permisos.',
            'mecanismo_especifico' => 'Registro del Sistema de Administración.',
            'periodicidad' => 'Única ocasión',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-009-STPS-2011',
            'marco' => '5. Obligaciones del patrón',
            'descripcion' => '5.2.- Disponer de los instructivos, manuales o procedimientos para la instalación, operación y mantenimiento de los sistemas o equipos utilizados en los trabajos en alturas, redactados en idioma español. Dichos instructivos, manuales o procedimientos, deberán estar elaborados con base en las instrucciones del fabricante.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'X Control de actividades y procesos.',
            'mecanismo_especifico' => '1.- Procedimiento para realizar trabajos en alturas. 2.- Manual para la instalación y mantenimiento de equipos para trabajos en alturas.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'NOM-017-STPS-2008',
            'marco' => '5. Obligaciones del patrón:',
            'descripcion' => '5.2.- Identificar y analizar los riesgos de trabajo a los que están expuestos los trabajadores por cada puesto de trabajo y área del centro laboral. Esta información debe registrarse y conservarse actualizada mientras no se modifiquen los implementos y procesos de trabajo, con al menos los siguientes datos: tipo de actividad que desarrolla el trabajador, tipo de riesgo de trabajo identificado, región anatómica por proteger, puesto de trabajo y equipo de protección personal requerido. 5.3.- Determinar el equipo de protección personal, que deben utilizar los trabajadores en función de los riesgos de trabajo a los que puedan estar expuestos por las actividades que desarrollan o por las áreas en donde se encuentran. En caso de que en el análisis de riesgo, establezca la necesidad de utilizar ropa de trabajo con características de protección, ésta, será considerada equipo de protección personal. El patrón puede hacer uso de las tablas contenidas en la guía de referencia de la presente Norma para determinar el equipo de protección personal para los trabajadores y para los visitantes que ingresen a las áreas donde existan señales de uso obligatorio del equipo de protección personal específico.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'X Control de actividades y procesos.',
            'mecanismo_especifico' => 'Autorizaciones para realizar trabajos que impliquen actividades de alto riesgo.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'RES/811/2015',
            'marco' => '"Apartado 2. Sistema de Gestión de Mediciones Sección A. Obligaciones del Permisionario 4. Obligaciones del Permisionario"',
            'descripcion' => '4.2. El Permisionario deberá implementar un SGM con el objetivo de que los resultados de medición sean conformes con las Especificaciones metrológicas. El modelo del SGM puede ser equivalente al contenido de la 10012-IMNC-2004, o las que las sustituyan.',
            'ambito' => 'SGM',
            'mecanismo_cumplimiento' => 'X Control de actividades y procesos.',
            'mecanismo_especifico' => 'Manual del sistema de Gestión de Medición y los procedimientos aplicables al sistema de gestión de medición.',
            'periodicidad' => '1 año',
            'obligatorio' => '0',
            'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-005-ASEA-2016',
            'marco' => '7. Operación. - 7.1 Disposiciones Operativas',
            'descripcion' => 'a. Procedimiento para la recepción de autotanque y descarga de productos inflamables y combustibles a tanque de almacenamiento.',
            'ambito' => 'Seguridad y Medio Ambiente.',
            'mecanismo_cumplimiento' => 'X-01 Procedimiento para la recepción de autotanque y descarga de productos inflamables y combustibles a tanque de almacenamiento.',
            'mecanismo_especifico' => 'Procedimiento para la recepción del autotanque y descarga de productos inflamables y combustibles a tanque de almacenamiento.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-005-ASEA-2016',
            'marco' => '7. Operación. 7.1 Disposiciones Operativas.',
            'descripcion' => 'b. Procedimiento de suministro de productos inflamables y combustibles a vehículos.',
            'ambito' => 'Seguridad y Medio Ambiente.',
            'mecanismo_cumplimiento' => 'X-02 Procedimiento de despacho de productos inflamables y combustibles a vehículos.',
            'mecanismo_especifico' => 'Procedimiento de despacho de productos inflamables y combustibles a vehículos.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-019-STPS-2011.',
            'marco' => '5. Obligaciones del patrón',
            'descripcion' => '5.5.- Contar con el programa anual de los recorridos de verificación de la comisión, de conformidad con lo previsto en los numerales 9.3 a 9.5 de la presente Norma.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'X-04 Procedimiento de verificación a instalaciones.',
            'mecanismo_especifico' => '1.- Programa de recorridos. 2.- Bitácora de verificación a instalaciones.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-019-STPS-2011.',
            'marco' => '5. Obligaciones del patrón',
            'descripcion' => '5.1.- Constituir e integrar al menos una comisión en el centro de trabajo, de conformidad con lo dispuesto en el Capítulo 7 de la presente Norma. 5.2.- Designar a sus representantes para participar en la comisión que se integre en el centro de trabajo. Dicha designación, deberá realizarse en base con las funciones por desempeñar. 5.4.- Contar con el acta de constitución de la comisión del centro de trabajo y de sus actualizaciones, cuando se modifique su integración, de conformidad con lo previsto en el numeral 7.4 de esta Norma.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'X-04-01 Acta de integración de la Comisión de Seguridad e Higiene.',
            'mecanismo_especifico' => 'Acta de la Comisión de Seguridad e Higiene.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-019-STPS-2011.',
            'marco' => '5. Obligaciones del patrón',
            'descripcion' => '5.5.- Contar con el programa anual de los recorridos de verificación de la comisión, de conformidad con lo previsto en los numerales 9.3 a 9.5 de la presente Norma.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'X-04-04 Acta de verificación trimestral a instalaciones de la CSH',
            'mecanismo_especifico' => 'Acta de verificación de la Comisión de Seguridad e Higiene.',
            'periodicidad' => '-',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'NOM-001-STPS-2008',
            'marco' => '5. Obligaciones del patrón',
            'descripcion' => '5.4.- Contar con sanitarios (retretes, mingitorios, lavabos, entre otros) limpios y seguros para el servicio de los trabajadores y, en su caso, con lugares reservados para el consumo de alimentos.',
            'ambito' => 'Salud y seguridad ocupacional.',
            'mecanismo_cumplimiento' => 'X-05-01-Programa de limpieza diaria.',
            'mecanismo_especifico' => 'Programa de limpieza.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-029-STPS-2011',
            'marco' => '5. Obligaciones del patrón:',
            'descripcion' => '5.2.- Contar con el plan de trabajo para los trabajadores que realizan actividades de mantenimiento de las instalaciones eléctricas, de conformidad con lo dispuesto en el Capítulo 7 de la presente Norma. 5.4.- Contar con los procedimientos de seguridad para las actividades de mantenimiento de las instalaciones eléctricas, la selección y uso del equipo de trabajo, maquinaria, herramientas e implementos de protección aislante y la colocación del sistema de puesta a tierra temporal, de acuerdo con lo establecido en el Capítulo 8 de esta Norma. 5.8.- Contar con procedimientos de revisión, conservación, almacenamiento y reemplazo del equipo de trabajo, maquinaria, herramientas e implementos de protección aislante, para realizar las actividades de mantenimiento de las instalaciones eléctricas. 5.9.- Proporcionar a los trabajadores que realizan actividades de mantenimiento de las instalaciones eléctricas, el equipo de protección personal, conforme a lo dispuesto por la NOM-017-STPS-2008, o las que la sustituyan. 5.14.- Informar a los trabajadores que realicen actividades de mantenimiento de las instalaciones eléctricas, sobre los riesgos a los que están expuestos y de las medidas de seguridad que deberán adoptar para la actividad a desarrollar en la zona de trabajo.',
            'ambito' => 'Seguridad.',
            'mecanismo_cumplimiento' => 'X-06 Procedimiento de mantenimiento de instalaciones y equipos.',
            'mecanismo_especifico' => '1.- Procedimiento para el etiquetado, bloqueo y candadeo de líneas eléctricas. 3.- Autorización para realizar el etiquetado, bloqueo y candadeo de líneas eléctricas.',
            'periodicidad' => '-',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
            'leyes' => 'Nom-005-ASEA-2016',
            'marco' => '8. Mantenimiento. 8.1. Aplicación del programa de mantenimiento.',
            'descripcion' => 'El programa de mantenimiento debe aplicarse a todos los elementos y sistemas de la Estación de Servicio indicados en esta Norma.',
            'ambito' => 'Seguridad y Medio Ambiente.',
            'mecanismo_cumplimiento' => 'X-06 Procedimiento de mantenimiento de instalaciones y equipos.',
            'mecanismo_especifico' => 'Programa de mantenimiento de instalaciones y equipo.',
            'periodicidad' => '1 año',
            'obligatorio' => '1',
            'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'NOM-004-ASEA-2018',
                'marco' => '1.- Objetivo 2.- Alcance',
                'descripcion' => 'Establecer la obligación de instalar Sistemas de Recuperación de Vapores de Gasolinas; para evitar la emisión de Compuestos Orgánicos Volátiles a la atmósfera, así como establecer los métodos de prueba para determinar la eficiencia, la evaluación del prototipo, la instalación, la prueba inicial, los parámetros para la operación del SRV, el mantenimiento, las pruebas periódicas y los procedimientos de evaluación de desempeño de dicho sistema, a los Regulados que cuenten con Estaciones de Servicio para expendio al público de gasolinas.',
                'ambito' => 'Medio Ambiente.',
                'mecanismo_cumplimiento' => 'X-06 Procedimiento de mantenimiento de instalaciones y equipos.',
                'mecanismo_especifico' => 'Mantenimiento al Sistema de Recuperación de Vapores.',
                'periodicidad' => '1 año',
                'obligatorio' => '0',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'RES/811/2015',
                'marco' => 'Sección A. Obligaciones del Permisionario 4. Obligaciones del Permisionario',
                'descripcion' => '4.5. El Permisionario debe elaborar los documentos que describan el SGM que incluyan el diseño, implementación, operación, desempeño y evaluación. Estos documentos deben contener: II. Los procedimientos que detallen las actividades del SGM en relación a los sistemas de medición que incluyan: a) La selección, diseño, instalación, pruebas, manejo, operación, calibración y ajuste, vigilancia, mantenimiento correctivo, preventivo y predictivo, y actualización o sustitución de los sistemas de medición;',
                'ambito' => 'SGM',
                'mecanismo_cumplimiento' => 'X-06 Procedimiento de mantenimiento de instalaciones y equipos.',
                'mecanismo_especifico' => '1.- Programa de Mantenimiento. 2.- Plan y programa de verificación de equipos.',
                'periodicidad' => '1 año',
                'obligatorio' => '0',
                'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'RES/811/2015',
                'marco' => 'Sección A. Obligaciones del Permisionario 4. Obligaciones del Permisionario',
                'descripcion' => '4.5. El Permisionario debe elaborar los documentos que describan el SGM que incluyan el diseño, implementación, operación, desempeño y evaluación. Estos documentos deben contener: II. Los procedimientos que detallen las actividades del SGM en relación a los sistemas de medición que incluyan: a) La selección, diseño, instalación, pruebas, manejo, operación, calibración y ajuste, vigilancia, mantenimiento correctivo, preventivo y predictivo, y actualización o sustitución de los sistemas de medición',
                'ambito' => 'SGM',
                'mecanismo_cumplimiento' => 'X-06 Procedimiento de mantenimiento de instalaciones y equipos.',
                'mecanismo_especifico' => '1.- Programa de Mantenimiento. 2.- Plan y programa de verificación de equipos.',
                'periodicidad' => '1 año',
                'obligatorio' => '0',
                'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-009-STPS-2011',
                'marco' => '5. Obligaciones del patrón',
                'descripcion' => '5.7.- Establecer y aplicar un programa de revisión y mantenimiento a los sistemas o equipos utilizados para la realización de trabajos en alturas, de acuerdo con lo señalado en el numeral 7.14 de la presente Norma y de conformidad con las indicaciones del fabricante.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-06-01 Programa de mantenimiento de instalaciones y equipos',
                'mecanismo_especifico' => 'Equipos utilizados para la realización de trabajos en alturas.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'NOM-025-STPS-2008',
                'marco' => '5. Obligaciones del patrón',
                'descripcion' => '5.10.- Elaborar y ejecutar un programa de mantenimiento para las luminarias del centro de trabajo, incluyendo los sistemas de iluminación de emergencia.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-06-01 Programa de mantenimiento de instalaciones y equipos.',
                'mecanismo_especifico' => '1.- Programa de mantenimiento de instalaciones y equipos, 2.- Bitácora de mantenimiento preventivo de luminarias.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-029-STPS-2011',
                'marco' => '5. Obligaciones del patrón',
                'descripcion' => '5.19.- Contar con registros de los resultados del mantenimiento llevado a cabo a las instalaciones eléctricas, que al menos, consideren el nombre del responsable de realizar el trabajo, las actividades desarrolladas y sus resultados, así como las fechas en que se realizaron dichos trabajos.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-06-01 Programa de mantenimiento de instalaciones y equipos.',
                'mecanismo_especifico' => '1.- Bitácoras de mantenimiento preventivo 2.- Permisos de trabajo para actividades riesgos solo en caso de que aplique',
                'periodicidad' => '-',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'NOM-004-ASEA-2018',
                'marco' => '9. Mantenimiento del SRV',
                'descripcion' => '9.1. El Regulado debe desarrollar un programa de mantenimiento del SRV. 9.2. La frecuencia de las actividades de mantenimiento del SRV deben ser como mínimo cada 3 meses. 9.3. Las actividades de mantenimiento deben ser realizadas por personal competente en la actividad. 9.4. Se debe registrar en el libro de bitácoras las actividades de mantenimiento que afecten y/o inhabiliten la operación del SRV',
                'ambito' => 'Medio Ambiente.',
                'mecanismo_cumplimiento' => 'X-06-01 Programa de mantenimiento preventivo de instalaciones y equipos.',
                'mecanismo_especifico' => '1.- Programa de mantenimiento. 2.- Bitácora del registro del mantenimiento.',
                'periodicidad' => '1 año',
                'obligatorio' => '0',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '8. Mantenimiento. 8.3. Bitácora.',
                'descripcion' => 'Para efectos de control y verificación de las actividades de mantenimiento la Estación de Servicio, debe contar con uno o varios libros de bitácoras foliadas, para el registro de lo siguiente: mantenimiento preventivo y correctivo de edificaciones, elementos constructivos, equipos, sistemas e instalaciones de la Estación de Servicio, pruebas de hermeticidad, incidentes e inspecciones de mantenimiento, entre otros.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-06-01-Programa de mantenimiento de instalaciones y equipos.',
                'mecanismo_especifico' => 'Bitácoras de registro del mantenimiento preventivo y correctivo.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-026-STPS-2008',
                'marco' => '5. Obligaciones del patrón',
                'descripcion' => '5.4.- Ubicar las señales de seguridad e higiene, de tal manera, que puedan ser observadas e interpretadas por los trabajadores a los que están destinadas, evitando que sean obstruidas o que la eficacia de éstas, sea disminuida por la saturación de avisos diferentes a la prevención de riesgos de trabajo.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-06-01-Programa de mantenimiento de instalaciones y equipos.',
                'mecanismo_especifico' => 'Programa de mantenimiento de instalaciones y equipos.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-002-STPS-2010.',
                'marco' => '7. Condiciones de prevención y protección contra incendios.',
                'descripcion' => '7.2 Elaborar un programa anual de revisión mensual de los extintores.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-06-01-Programa de mantenimiento de instalaciones y equipos.',
                'mecanismo_especifico' => 'Bitácora de revisión de extintores.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '8. Mantenimiento. 8.1. Aplicación del programa de mantenimiento.',
                'descripcion' => 'El programa de mantenimiento, debe aplicarse a todos los elementos y sistemas de la Estación de Servicio indicados en esta Norma.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-07 Procedimiento de mantenimiento eléctrico.',
                'mecanismo_especifico' => 'Programa de mantenimiento eléctrico.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '8. Mantenimiento. 8.3. Bitácora.',
                'descripcion' => 'Para efectos de control y verificación de las actividades de mantenimiento la Estación de Servicio debe contar con uno o varios libros de bitácoras foliadas, para el registro de lo siguiente: mantenimiento preventivo y correctivo de edificaciones, elementos constructivos, equipos, sistemas e instalaciones de la Estación de Servicio, pruebas de hermeticidad, incidentes e inspecciones de mantenimiento, entre otros.',
                'ambito' => 'Salud y seguridad ocupacional.',
                'mecanismo_cumplimiento' => 'X-07-01-Programa de mantenimiento eléctrico.',
                'mecanismo_especifico' => 'Bitácoras de registro del mantenimiento preventivo y correctivo.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '7. Operación. 7.2. Disposiciones de Seguridad. 7.2.4. Procedimientos.',
                'descripcion' => 'f. Trabajos en alturas con escaleras o plataformas superiores a 1.5 m',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-08 Procedimiento de trabajos en alturas.',
                'mecanismo_especifico' => 'Procedimiento para realizar trabajos en alturas.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-009-STPS-2011',
                'marco' => '5. Obligaciones del patrón',
                'descripcion' => '5.9.- Proveer a los trabajadores que desarrollen trabajos en alturas, al menos de un sistema de protección personal para interrumpir caídas de altura, de conformidad con lo establecido en el numeral 8.4 de esta Norma, así como del equipo de protección personal a que se refieren los capítulos del 7 al 13 de la misma, o del que se requiera con base en los factores de riesgo identificados en el análisis de las condiciones prevalecientes del área, de acuerdo con lo dispuesto por la NOM-017-STPS-2008, o las que la sustituyan.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-08-01 Autorización para trabajos en alturas.',
                'mecanismo_especifico' => 'La autorización cuenta con una lista de verificación de equipo de protección personal.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-009-STPS-2011',
                'marco' => '5. Obligaciones del patrón',
                'descripcion' => '5.14.- Supervisar que los contratistas cumplan con lo establecido en esta Norma, cuando el patrón convenga los servicios de terceros para realizar trabajos en alturas.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-08-01-Autorización para trabajos en alturas.',
                'mecanismo_especifico' => 'Este tipo de trabajo, requiere supervisión física durante la ejecución de las actividades.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-009-STPS-2011',
                'marco' => '5. Obligaciones del patrón:',
                'descripcion' => '5.3.- Proporcionar autorización por escrito a los trabajadores que realicen trabajos en alturas, mediante andamios tipo torre o estructura, andamios suspendidos y plataformas de elevación, conforme se determina en el numeral 7.2 de esta Norma, la que será otorgada una vez que se compruebe que se han aplicado las medidas de seguridad requeridas.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-08-01-Autorización para trabajos en alturas.',
                'mecanismo_especifico' => 'Autorización para realizar trabajos en alturas.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-009-STPS-2011',
                'marco' => '5. Obligaciones del patrón:',
                'descripcion' => '5.1.- Contar con un análisis de las condiciones prevalecientes en las áreas en las que se llevarán a cabo los trabajos en alturas, en forma previa a su realización, a fin de identificar los factores de riesgo existentes.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-08-01-Autorización para trabajos en alturas.',
                'mecanismo_especifico' => 'Autorización para realizar trabajos en alturas.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '8. Mantenimiento. 8.4. Previsiones para realizar el mantenimiento a equipo e instalaciones. 8.4.1.Preparativos para realizar actividades de mantenimiento.',
                'descripcion' => 'Todos los trabajos peligrosos efectuados por los trabajadores de la Estación de Servicio o contratados con externos deben ser autorizados por escrito por el responsable de la Estación de Servicio y se registrarán en la(s) bitácora(s), anotando la fecha y horas de inicio y terminación programadas, así como el equipo y materiales de seguridad que serán utilizados. Los trabajadores de la Estación de Servicio y el personal externo contarán con el equipo de seguridad y protección; así como con herramientas y equipos adecuados de acuerdo al lugar y las actividades que vayan a realizar.',
                'ambito' => 'Seguridad y Medio Ambiente.',
                'mecanismo_cumplimiento' => 'X-08-01-Autorización para trabajos en alturas.',
                'mecanismo_especifico' => 'Autorización para realizar trabajos en alturas.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '7. Operación. 7.2. Disposiciones de Seguridad. 7.2.4. Procedimientos.',
                'descripcion' => 'g. Trabajos en áreas confinadas.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-09 Procedimiento de trabajos en espacios confinados.',
                'mecanismo_especifico' => 'Procedimiento para realizar trabajos en espacios confinados.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-033-STPS-2015',
                'marco' => '5. Obligación del patrón:',
                'descripcion' => '5.4.- Disponer de un plan de trabajo específico para realizar trabajos en espacios confinados.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-09 Procedimiento de trabajos en espacios confinados.',
                'mecanismo_especifico' => 'Procedimiento de trabajo en espacios confinados.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '8. Mantenimiento. 8.4. Previsiones para realizar el mantenimiento a equipo e instalaciones. 8.4.1. Preparativos para realizar actividades de mantenimiento.',
                'descripcion' => 'Todos los trabajos peligrosos efectuados por los trabajadores de la Estación de Servicio o contratados con externos, deben ser autorizados por escrito por el responsable de la Estación de Servicio y se registrarán en la(s) bitácora(s), anotando la fecha, horas de inicio y terminación programadas, así como el equipo y materiales de seguridad que serán utilizados. Los trabajadores de la Estación de Servicio y el personal externo, contarán con el equipo de seguridad y protección; así como con herramientas y equipos adecuados de acuerdo al lugar y las actividades que vayan a realizar.',
                'ambito' => 'Salud y seguridad ocupacional.',
                'mecanismo_cumplimiento' => 'X-09-01 Autorización para trabajos en espacios confinados.',
                'mecanismo_especifico' => 'Autorización para realizar trabajos en espacios confinados.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-029-STPS-2011',
                'marco' => '5. Obligaciones del patrón:',
                'descripcion' => '5.5.- Expedir autorizaciones por escrito a los trabajadores, para la realización de trabajos en espacios confinados, conforme a lo que determina el numeral 8.6 de esta Norma.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-09-01-Autorización para trabajos en espacios confinados.',
                'mecanismo_especifico' => 'Autorización para trabajos en espacios confinados.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-033-STPS-2015',
                'marco' => '5. Obligaciones del patrón:',
                'descripcion' => '5.7.- Designar a un responsable de los trabajos en espacios confinados y, al menos, un vigía, que cumplan con lo que señalan los numerales 9.5 y 9.6 respectivamente, de la presente Norma.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-09-02 Hoja de control y monitoreo en espacios confinados.',
                'mecanismo_especifico' => 'Hoja de control y monitoreo en espacios confinados.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '7. Operación. 7.2. Disposiciones de Seguridad. 7.2.4. Procedimientos.',
                'descripcion' => 'e. Trabajos peligrosos con fuentes que generen ignición (soldaduras, chispas y/o flama abierta).',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-10 Procedimiento para realizar trabajos que generen fuente de ignición (soldadura, corte, chispa y o flama abierta).',
                'mecanismo_especifico' => 'Procedimiento para realizar trabajos peligrosos con fuentes que generen ignición (soldaduras, chispas y/o flama abierta).',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-027-STPS-2008',
                'marco' => '5. Obligaciones del patrón:',
                'descripcion' => '5.2.- Contar con el análisis de riesgos potenciales para las actividades de soldadura y corte que se desarrollen en el centro de trabajo, de acuerdo a lo establecido en el Capítulo 7 y adoptar las condiciones de seguridad e higiene correspondientes, de conformidad con lo que establece el Capítulo 8. 5.8.- Autorizar por escrito a los trabajadores que realicen actividades de soldadura y corte en áreas de riesgo como: áreas controladas con presencia de sustancias inflamables o explosivas, espacios confinados, alturas, sótanos, subterráneos y, esas no designadas específicamente para estas actividades.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-10-01-Autorización para trabajos que generen fuente de ignición.',
                'mecanismo_especifico' => 'Autorización para trabajos que generen fuente de ignición (dentro de la autorización, hay un apartado de análisis de riesgos).',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '8. Mantenimiento. 8.4. Previsiones para realizar el mantenimiento a equipo e instalaciones. 8.4.1. Preparativos para realizar actividades de mantenimiento.',
                'descripcion' => 'Todos los trabajos peligrosos efectuados por los trabajadores de la Estación de Servicio o contratados con externos deben ser autorizados por escrito por el responsable de la Estación de Servicio y se registrarán en la(s) bitácora(s), anotando la fecha y horas de inicio y terminación programadas, así como el equipo y materiales de seguridad que serán utilizados. Los trabajadores de la Estación de Servicio y el personal externo contarán con el equipo de seguridad y protección; así como con herramientas y equipos adecuados de acuerdo al lugar y las actividades que vayan a realizar.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-10-01-Autorización para trabajos que generen fuente de ignición.',
                'mecanismo_especifico' => 'Autorización para realizar trabajos que generen fuente de ignición.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '7. Operación. 7.1. Disposiciones Operativas. 7.2. Disposiciones de Seguridad. 7.2.4. Procedimientos.',
                'descripcion' => 'c. Etiquetado, bloqueo y candadeo para interrupción de líneas eléctricas.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-11 Procedimiento de etiquetado, bloqueo y candadeo para interrupción de líneas eléctricas.',
                'mecanismo_especifico' => 'Procedimiento de etiquetado, bloqueo y candadeo para interrupción de líneas eléctricas.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '7. Operación. 7.2. Disposiciones de Seguridad. 7.2.4. Procedimientos.',
                'descripcion' => 'd. Etiquetado, bloqueo y candadeo para interrupción de líneas con productos.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-12 Procedimiento de etiquetado, bloqueo y candadeo para interrupción de líneas con producto.',
                'mecanismo_especifico' => 'Procedimiento para el etiquetado, bloqueo y candadeo para interrupción de líneas con productos.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '8. Mantenimiento. 8.4. Previsiones para realizar el mantenimiento a equipo e instalaciones. 8.4.1. Preparativos para realizar actividades de mantenimiento.',
                'descripcion' => 'Todos los trabajos peligrosos efectuados por los trabajadores de la Estación de Servicio o contratados con externos deben ser autorizados por escrito por el responsable de la Estación de Servicio y se registrarán en la(s) bitácora(s), anotando la fecha y horas de inicio y terminación programadas, así como el equipo y materiales de seguridad que serán utilizados. Los trabajadores de la Estación de Servicio y el personal externo contarán con el equipo de seguridad y protección; así como con herramientas y equipos adecuados de acuerdo al lugar y las actividades que vayan a realizar.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-12-01 Autorización para el bloqueo y candadeo de líneas de producto',
                'mecanismo_especifico' => 'Autorización para bloqueo y candadeo de líneas de producto.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '8. Mantenimiento. 8.4. Previsiones para realizar el mantenimiento a equipo e instalaciones. 8.4.1. Preparativos para realizar actividades de mantenimiento.',
                'descripcion' => 'Todos los trabajos peligrosos efectuados por los trabajadores de la Estación de Servicio o contratados con externos deben ser autorizados por escrito por el responsable de la Estación de Servicio y se registrarán en la(s) bitácora(s), anotando la fecha y horas de inicio y terminación programadas, así como el equipo y materiales de seguridad que serán utilizados. Los trabajadores de la Estación de Servicio y el personal externo contarán con el equipo de seguridad y protección; así como con herramientas y equipos adecuados de acuerdo al lugar y a las actividades que vayan a realizar.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-12-01 Autorización para el bloqueo y candadeo de líneas de producto',
                'mecanismo_especifico' => 'Autorización para bloqueo y candadeo de líneas de producto.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '8. Mantenimiento. 8.4. Previsiones para realizar el mantenimiento a equipo e instalaciones. 8.4.1. Preparativos para realizar actividades de mantenimiento.',
                'descripcion' => 'Todos los trabajos peligrosos efectuados por los trabajadores de la Estación de Servicio o contratados con externos deben ser autorizados por escrito por el responsable de la Estación de Servicio y se registrarán en la(s) bitácora(s), anotando la fecha y horas de inicio y terminación programadas, así como el equipo y materiales de seguridad que serán utilizados. Los trabajadores de la Estación de Servicio y el personal externo contarán con el equipo de seguridad y protección; así como con herramientas y equipos adecuados de acuerdo al lugar y las actividades que vayan a realizar.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-13-01-Autorización para el manejo de sustancias químicas peligrosas.',
                'mecanismo_especifico' => 'Autorización para el manejo de sustancias químicas peligrosas.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'NOM-018-STPS-2015.',
                'marco' => '5. Obligaciones de patrón',
                'descripcion' => '5.4.- Conocer el grado de peligrosidad y los riesgos de las sustancias químicas peligrosas que se utilizan en el centro de trabajo, por lo que se debe cumplir con lo siguiente: a) Contar con las HDS para todas las sustancias químicas peligrosas que se utilicen en el centro de trabajo, de acuerdo a lo establecido en el Apéndice C.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-13-02-Catálogo de sustancias químicas peligrosas.',
                'mecanismo_especifico' => 'Dentro del catálogo, se encuentran las hojas de seguridad de las sustancias químicas manejadas en la Estación de Servicio.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'RES/811/2015',
                'marco' => '"Apartado 1. Disposiciones Generales 1. Alcance, Objeto y Ámbito de aplicación"',
                'descripcion' => '1.3. Estas DACG deberán ser implementadas por los Permisionarios que hayan obtenido o soliciten un permiso de almacenamiento, distribución, transporte por medio de ductos o expendio al público de petróleo, petrolíferos y petroquímicos, según corresponda, emitido por la Comisión y requieran instalar un Sistema de medición, y de forma subsidiaria por terceras personas que a nombre de un Permisionario opere',
                'ambito' => 'SGM',
                'mecanismo_cumplimiento' => 'X-18 Manual del Sistema de Gestión de Medición',
                'mecanismo_especifico' => 'Manual del sistema de Gestión de Medición y los procedimientos aplicables al sistema de gestión de medición.',
                'periodicidad' => '1 año',
                'obligatorio' => '0',
                'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'RES/811/2015',
                'marco' => 'Sección A. Obligaciones del Permisionario 4. Obligaciones del Permisionario',
                'descripcion' => '4.5. El Permisionario debe elaborar los documentos que describan el SGM que incluyan el diseño, implementación, operación, desempeño y evaluación. Estos documentos deben contener: II. Los procedimientos que detallen las actividades del SGM en relación a los sistemas de medición que incluyan: c) El registro de indicaciones de los sistemas de medición, el procesamiento de dicha información, la expresión de sus resultados, la estimación de las incertidumbres de medida, y d) Los mecanismos que validen y aseguren la confiabilidad de los resultados de medición de manera cotidiana y aquellos que demuestren la competencia técnica en materia de mediciones del Permisionario.',
                'ambito' => 'SGM',
                'mecanismo_cumplimiento' => 'X-19 Procedimiento de confirmación metrológica',
                'mecanismo_especifico' => 'Bitácora de confirmación Metrológica',
                'periodicidad' => '1 año',
                'obligatorio' => '0',
                'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'NOM-001-STPS-2008',
                'marco' => '5. Obligaciones del patrón:',
                'descripcion' => '5.1.- Conservar en condiciones seguras las instalaciones de los centros de trabajo, para que no representen riesgos.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-Control de actividades y procesos.',
                'mecanismo_especifico' => '1.- Programa de Mantenimiento. 2.- Programas de limpieza. 3.- Procedimiento de verificación a instalaciones.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'NOM-001-STPS-2008',
                'marco' => '5. Obligaciones del patrón',
                'descripcion' => '5.2.- Realizar verificaciones oculares cada doce meses al centro de trabajo, pudiendo hacerse por áreas, para identificar condiciones inseguras y reparar los daños encontrados. Los resultados de las verificaciones deben registrarse a través de bitácoras, medios magnéticos o en las actas de verificación de la Comisión de Seguridad e Higiene, mismos que deben conservarse por un año y contener al menos las fechas en que se realizaron las verificaciones, el nombre del área del centro de trabajo que fue revisada y, en su caso, el tipo de condición insegura encontrada, así como el tipo de reparación realizada.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'X-Control de actividades y procesos.',
                'mecanismo_especifico' => '1.- Acta de verificación trimestral a instalaciones de la Comisión de Seguridad. 2.- Bitácora de verificaciones a instalaciones.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-033-STPS-2015',
                'marco' => '5. Obligaciones del patrón',
                'descripcion' => '5.12.- Comprobar que los contratistas cumplan con lo señalado en la presente Norma, cuando el patrón convenga los servicios de terceros para realizar trabajos en espacios confinados.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'XII Seguridad de contratistas.',
                'mecanismo_especifico' => '1.- Cédula de evaluación para alta de proveedor o contratista. 2.- Cédula de evaluación continua a proveedor o contratista.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-029-STPS-2011',
                'marco' => '5. Obligaciones del patrón',
                'descripcion' => '5.18.- Supervisar que los contratistas cumplan con lo establecido en la presente Norma, cuando el patrón convenga servicios con ellos para realizar trabajos de mantenimiento de las instalaciones eléctricas.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'XII-01-03-Cédula de evaluación continua a proveedor o contratista.',
                'mecanismo_especifico' => '1.- Cédula de evaluación para alta de proveedor o contratista. 2.- Cédula de evaluación continua a proveedor o contratista.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-002-STPS-2010.',
                'marco' => '5. Obligaciones del patrón',
                'descripcion' => '5.7.- Desarrollar simulacros de emergencia de incendio una vez al año, en el caso de centros de trabajo clasificados con riesgo de incendio ordinario y, al menos, dos veces al año para aquellos con riesgo de incendio alto, conforme a lo señalado en el Capítulo 10 de esta Norma (véase la "Guía de Referencia II, Brigadas de Emergencia y Consideraciones Generales sobre la Planeación de los Simulacros de Incendio").',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'XIII Preparación y respuestas a emergencias.',
                'mecanismo_especifico' => '1.- Procedimiento para realizar simulacros. 2.- Programa de simulacros. 3.- Cédula de registro y evaluación de emergencia.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-002-STPS-2010.',
                'marco' => '5. Obligaciones del patrón:',
                'descripcion' => '5.2.- Contar con un croquis, plano o mapa general del centro de trabajo, o por áreas que lo integran, actualizado y colocado en los principales lugares de entrada, tránsito, reunión o puntos comunes de estancia o servicios para los trabajadores, que contenga lo siguiente, según aplique: a) El nombre, denominación o razón social del centro de trabajo y su domicilio. b) La identificación de los predios colindantes. c) La identificación de las principales áreas o zonas del centro de trabajo con riesgo de incendio, debido a la presencia de material inflamable, combustible, pirofórico o explosivo, entre otros. d) La ubicación de los medios de detección de incendio, así como de los equipos y sistemas contra incendio. f) La ubicación del equipo de protección personal para los integrantes de las brigadas contra incendio. g) La ubicación de materiales y equipo para prestar los primeros auxilios.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'XIII-09-01 Croquis de seguridad.',
                'mecanismo_especifico' => 'Croquis de Seguridad.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'NOM-001-STPS-2008',
                'marco' => '5. Obligaciones del patrón',
                'descripcion' => '5.3 .-Efectuar verificaciones oculares posteriores a la ocurrencia de un evento que pudiera generarle daños al centro de trabajo y, en su caso, realizar las adecuaciones, modificaciones o reparaciones que garanticen la Seguridad de sus ocupantes. De tales acciones, registrar los resultados en bitácoras o medios magnéticos. Los registros deben conservarse por un año y contener al menos la fecha de la verificación, el tipo de evento, los resultados de las verificaciones y las acciones correctivas realizadas.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'XIII-Preparación y respuestas a emergencias.',
                'mecanismo_especifico' => '1.- Procedimiento de fin de emergencia y resguardo de instalaciones. 2.- Bitácora de fin de emergencia y resguardo de instalaciones.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-002-STPS-2010.',
                'marco' => '5. Obligaciones del patrón:',
                'descripcion' => '5.6.- Contar con brigadas contra incendio en los centros de trabajo clasificados con riesgo de incendio alto.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'XIII-Preparación y respuestas a emergencias.',
                'mecanismo_especifico' => '1.- Procedimiento de creación de brigada. 2.- Acta de conformación de brigada.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '7. Operación. 7.2. Disposiciones de Seguridad. 7.2.4. Procedimientos.',
                'descripcion' => 'El Regulado debe desarrollar su(s) procedimiento(s) internos de seguridad y debe incluir al menos los siguientes: a. Preparación y respuesta para las emergencias (fuga, derrame, incendio, explosión).',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'XIII-Preparación y respuestas a emergencias.',
                'mecanismo_especifico' => '1.- Procedimiento de emergencia en caso de incendios. 2.- Procedimiento de emergencia en caso de explosión. 3.- Procedimiento de emergencia en caso de derrames.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'NMX-CC-17025-IMNC-2006',
                'marco' => 'Objetivo y campo de aplicación',
                'descripcion' => 'Esta norma mexicana establece los requisitos generales para la competencia en la realización de ensayos o de calibraciones, incluido el muestreo. Cubre los ensayos y las calibraciones que se realizan utilizando métodos normalizados. métodos no normalizados y métodos desarrollados por el propio laboratorio.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'XIV Monitoreo, verificación y evaluación.',
                'mecanismo_especifico' => 'Certificado de cumplimiento SGM',
                'periodicidad' => '1 año',
                'obligatorio' => '0',
                'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-019-STPS-2011.',
                'marco' => '5. Obligaciones del patrón',
                'descripcion' => '5.11.- Atender y dar seguimiento a las medidas propuestas por la comisión para prevenir los riesgos de trabajo, de acuerdo con los resultados de las actas de los recorridos de verificación y con base en lo dispuesto por el reglamento y las Normas que resulten aplicables, de conformidad con lo dispuesto en el numeral 9.11 de esta Norma.',
                'ambito' => 'Seguridad.',
                'mecanismo_cumplimiento' => 'XIV-01-02-Formato para el levantamiento de una acción preventiva o correctiva XIV.',
                'mecanismo_especifico' => 'Todo acto o condición insegura quedará asentado en el acta y se levantará una acción correctiva preventiva.',
                'periodicidad' => '1 año',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'RES/811/2015',
                'marco' => 'Sección A. Obligaciones del Permisionario 4. Obligaciones del Permisionario',
                'descripcion' => '4.5. El Permisionario debe elaborar los documentos que describan el SGM que incluyan el diseño, implementación, operación, desempeño y evaluación. Estos documentos deben contener: III. Los procedimientos que detallen las actividades del SGM en cuanto a su desempeño para la gestión, que incluyan: c) La detección de desvíos del Sistemas de medición y del SGM, en su caso, de su comportamiento esperado, las acciones correctivas y preventivas consecuentes',
                'ambito' => 'SGM',
                'mecanismo_cumplimiento' => 'XIV-02 Procedimiento para el manejo de no conformidades, acciones preventivas y correctivas del Sistema de Administración.',
                'mecanismo_especifico' => '1.- Solicitud de acciones correctivas o preventivas. 2.- Matriz para el seguimiento de acciones correctivas o preventivas.',
                'periodicidad' => '1 año',
                'obligatorio' => '0',
                'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'RES/811/2015',
                'marco' => '1.- Solicitud de acciones correctivas o preventivas. 2.- Matriz para el seguimiento de acciones correctivas o preventivas.',
                'descripcion' => '4.5. El Permisionario debe elaborar los documentos que describan el SGM que incluyan el diseño, implementación, operación, desempeño y evaluación. Estos documentos deben contener: III. Los procedimientos que detallen las actividades del SGM en cuanto a su desempeño para la gestión, que incluyan: Los procesos de Evaluación del cumplimiento, de auditorías internas y externas, así como el procesamiento de los resultados de las mediciones, y e) La revisión periódica, al menos anual, del SGM.',
                'ambito' => 'SGM',
                'mecanismo_cumplimiento' => 'XV Auditorías.',
                'mecanismo_especifico' => '1.- Procedimiento para las Auditorias Internas 2.- Plan y programa de auditoria Interna',
                'periodicidad' => '1 año',
                'obligatorio' => '0',
                'aplica' => '(Ninguno)',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Lineamientos para Auditorías',
                'marco' => 'Disposiciones administrativas de carácter general que establecen los Lineamientos para llevar a cabo las Auditorías Externas a la operación y el desempeño de los Sistemas de Administración de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente aplicables a las actividades del Sector Hidrocarburos.',
                'descripcion' => 'Artículo 1. Las presentes Disposiciones tienen por objeto establecer los lineamientos que se deberán observar para llevar a cabo las Auditorias Externas a la operación y el desempeño de los Sistemas de Administración de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente de los Regulados.',
                'ambito' => 'Seguridad y Medio Ambiente.',
                'mecanismo_cumplimiento' => 'XV-02 Procedimiento de auditoría externa.',
                'mecanismo_especifico' => 'Plan y Programa de Auditoria externa',
                'periodicidad' => '-',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Lineamientos para el informe de accidentes e incidentes',
                'marco' => 'Disposiciones administrativas de carácter general que establecen los Lineamientos para Informar la ocurrencia de incidentes y accidentes a la Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos.',
                'descripcion' => 'Los presentes lineamientos tienen por objeto definir y establecer los mecanismos mediante los cuales los Regulados deberán informar a la Agencia la ocurrencia de incidentes y accidentes vinculados con las actividades del Sector Hidrocarburos.',
                'ambito' => 'Seguridad y Medio Ambiente.',
                'mecanismo_cumplimiento' => 'XVI-01 Procedimiento de registro e investigación de accidentes.',
                'mecanismo_especifico' => 'Matriz para la investigación de accidentes e incidentes',
                'periodicidad' => '-',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Lineamientos para llevar a cabo la ICR',
                'marco' => 'DISPOSICIONES administrativas de carácter general que establecen los lineamientos para que los Regulados lleven a cabo las Investigaciones Causa Raíz de Incidentes y Accidentes ocurridos en sus Instalaciones.',
                'descripcion' => 'Los presentes lineamientos son de observancia general, y tienen por objeto establecer las bases para llevar a cabo las Investigaciones Causa Raíz, después de haber ocurrido un incidente o accidente, vinculado con las actividades del Sector Hidrocarburos que desarrollan los Regulados.',
                'ambito' => 'Seguridad y Medio Ambiente.',
                'mecanismo_cumplimiento' => 'XVI-01 Procedimiento de registro e investigación de accidentes.',
                'mecanismo_especifico' => 'Matriz para la investigación de accidentes e incidentes',
                'periodicidad' => '-',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

            DB::table('iii_elemento')->insert([
                'leyes' => 'Nom-005-ASEA-2016',
                'marco' => '7. Operación. 7.2. Disposiciones de Seguridad. 7.2.3. Incidentes y/o Accidentes.',
                'descripcion' => 'El Regulado debe informar a la Agencia de incidentes y/o accidentes que impliquen un daño a las personas, a los equipos, a los materiales y/o al Medio Ambiente, de conformidad con las Disposiciones Administrativas de Carácter General que emita la Agencia.',
                'ambito' => 'Salud y seguridad ocupacional.',
                'mecanismo_cumplimiento' => 'XVI-Investigación de incidentes y accidentes.',
                'mecanismo_especifico' => 'Informes de incidentes y accidentes.',
                'periodicidad' => '30 días',
                'obligatorio' => '1',
                'aplica' => 'Si',
            ]);

    }
}
