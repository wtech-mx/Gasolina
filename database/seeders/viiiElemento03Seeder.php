<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class viiiElemento03Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Pago de aprovechamientos por supervisión anual del permiso',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'CRE',
            'periodicidad' => '1 año',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Dictamen técnico de Operación y Mantenimiento NOM-005-ASEA-2016',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => '1 año',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Cédula de Operación Anual (COA)',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => '1 año',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Informes de laboratorio primer semestre NOM-016-CRE-2016',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'LABORATORIO ACREDITADO ANTE LA NORMA',
            'periodicidad' => '1 año',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Informes de laboratorio segundo semestre semestre NOM-016-CRE-2016',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => '1 año',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Dictamen cumplimiento NOM-016-CRE-2016',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'Tercero autorizado',
            'periodicidad' => '1 año',
        ]);


        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Dictamen Estructural avalado por un DRO',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'DRO registrado y acreditado en el territorio de la',
            'periodicidad' => '1 año',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Póliza de Seguro con cobertura para RC y RA',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA, CRE ',
            'periodicidad' => '1 año',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Acuse de ingreso de Póliza de Seguro con cobertura para RC y RA',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => '1 año',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Permiso de descarga de aguas residuales a alcantarillado municipal',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'Municipio ',
            'periodicidad' => '1 año',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Visto bueno de protección civil',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'Protección civil Estatal',
            'periodicidad' => '1 año',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Estudios de emisiones de planta de emergencia',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'STPS',
            'periodicidad' => '1 año',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Reporte de emisiones del sistema de recuperacion de vapores',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => '1 año',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Permiso de descarga de agua residuales a cuerpo de agua o bienes nacionales',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'CONAGUA',
            'periodicidad' => '10 años',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Permiso de la Comisión Reguladora de Energía',
            'condicionante' => 'Ninguno',
            'etapa' => 'Diseño.',
            'autoridad' => 'CRE',
            'periodicidad' => '30 años',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Análisis de Riesgos',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => '5 años',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Dictamen emitido por una Unidad de Verificación de Instalaciones Eléctricas (UVIE)',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => '(UVIE) acreditada y aprobada en términos de la LFM',
            'periodicidad' => '5 años',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Dictamen equipos sujetos a presión ( compresor) NOM-20-STPS-2011',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => '(UVIE) acreditada y aprobada por la STPS',
            'periodicidad' => '5 años',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Acuse de ingreso de Protocolo de Respuesta a Emergencia',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => '5 años',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Autorización en materia de impacto y riesgo ambiental o informe preventivo',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Estudio de impacto social.',
            'condicionante' => 'Ninguno',
            'etapa' => 'Diseño.',
            'autoridad' => 'SENER.',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Estudio de vientos dominantes',
            'condicionante' => 'Ninguno',
            'etapa' => 'Diseño.',
            'autoridad' => 'CRE, ASEA',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Dictamen técnico de diseño NOM-005-ASEA-2016',
            'condicionante' => 'Ninguno',
            'etapa' => 'Diseño.',
            'autoridad' => 'ASEA',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Dictamen técnico de construcción NOM-005-ASEA-2016',
            'condicionante' => 'Ninguno',
            'etapa' => 'Construcción.',
            'autoridad' => 'ASEA',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Licencia ambiental única o licencia de funcionamiento.',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Registro como Empresa Generadora de Residuos de Manejo Especial',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'Persona Moral con reconocimiento nacional/intl',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Registro como empresa generadora de residuos peligrosos.',
            'condicionante' => 'Ninguno',
            'etapa' => 'Construcción.',
            'autoridad' => 'ASEA',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Registro de sistema de administración (SASISOPA)',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Autorización de sistema de administración (SASISOPA)',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Registro de regulado (CURR)',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Dictamen conformación e implementacion de SASISOPA',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'Tercero acreditado por ASEA',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Constancia de registro Covid-19 SARS',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'IMSS',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => '1er. Informe Semestral de Cumplimiento del Programa de lmplementacion.',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'ASEA',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Actualización del permiso CRE',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'CRE',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Resolución de cesión del permiso CRE',
            'condicionante' => 'Ninguno',
            'etapa' => 'Operación y mantenimiento.',
            'autoridad' => 'CRE',
            'periodicidad' => 'Única ocasión',
        ]);

        DB::table('viii_elemento_03')->insert([
            'autorizacion' => 'Cumplimiento al segundo resolutivo de la resolución del permiso CRE',
            'condicionante' => 'Ninguno',
            'etapa' => 'Construcción',
            'autoridad' => 'CRE',
            'periodicidad' => 'Única ocasión',
        ]);
    }
}
