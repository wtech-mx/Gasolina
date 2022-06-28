<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class viiiElemento04Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('viii_elemento_04')->insert([
            'nombre' => 'DACG PARA LA ELABORACIÓN DE PRE',
            'area' => 'Seguridad y Ambiental',
            'descripcion' => 'DISPOSICIONES Administrativas de carácter general que establecen los Lineamientos para la elaboración de los protocolos de respuesta a emergencias en las actividades del Sector Hidrocarburos.',
            'revision' => '00',
            'fecha' => '2019-04-03',
        ]);

        DB::table('viii_elemento_04')->insert([
            'nombre' => 'DACG PARA SEGUROS',
            'area' => 'SEGURIDAD',
            'descripcion' => 'DISPOSICIONES ADMINISTRATIVAS DE CARÁCTER GENERAL QUE ESTABLECEN LOS LINEAMIENTOS PARA EL REQUERIMIENTO MÍNIMO DE LOS SEGUROS QUE DEBERÁN CONTRATAR LOS REGULADOS QUE REALICEN LAS ACTIVIDADES DE TRANSPORTE, ALMACENAMIENTO, DISTRIBUCIÓN, COMPRESIÓN, DESCOMPRESIÓN, LICUEFACCIÓN, REGASIFICACIÓN O EXPENDIO AL PÚBLICO DE HIDROCARBUROS O PETROLÍFEROS.',
            'revision' => '00',
            'fecha' => '2018-12-18',
        ]);

        DB::table('viii_elemento_04')->insert([
            'nombre' => 'DACG que establecen los lineamientos para la gestión integral de los Residuos de Manejo Especial del Sector Hidrocarburos.',
            'area' => 'Medio Ambiente',
            'descripcion' => 'DISPOSICIONES administrativas de carácter general que establecen los lineamientos para la gestión integral de los Residuos de Manejo Especial del Sector Hidrocarburos.',
            'revision' => '00',
            'fecha' => '2018-07-23',
        ]);

        DB::table('viii_elemento_04')->insert([
            'nombre' => 'Ley ASEA',
            'area' => 'Medio Ambiente y Seguridad',
            'descripcion' => 'Ley de la Agencia de Seguridad, Energía y Ambiente',
            'revision' => '00',
            'fecha' => '2017-10-26',
        ]);

        DB::table('viii_elemento_04')->insert([
            'nombre' => 'Ley FRA',
            'area' => 'Medio Ambiente',
            'descripcion' => 'Ley Federal de Responsabilidad Ambiental',
            'revision' => '00',
            'fecha' => '2018-02-14',
        ]);

        DB::table('viii_elemento_04')->insert([
            'nombre' => 'Ley H.',
            'area' => 'Medio ambiente y Seguridad',
            'descripcion' => 'Ley de Hidrocarburos',
            'revision' => '00',
            'fecha' => '2018-02-14',
        ]);

        DB::table('viii_elemento_04')->insert([
            'nombre' => 'LGEEPA',
            'area' => 'Medio Ambiente',
            'descripcion' => 'Ley General del Equilibrio Ecológico y Protección al Ambiente',
            'revision' => '00',
            'fecha' => '2018-02-14',
        ]);

        DB::table('viii_elemento_04')->insert([
            'nombre' => 'Lineamientos para Auditorías',
            'area' => 'Medio Ambiente y Seguridad',
            'descripcion' => 'Lineamientos para llevar a cabo las Auditorías Externas a la operación y el desempeño de los Sistemas de Administración de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente aplicables a las actividades del Sector Hidrocarburos.',
            'revision' => '00',
            'fecha' => '2018-02-14',
        ]);

        DB::table('viii_elemento_04')->insert([
            'nombre' => 'Lineamientos para el informe de accidentes e incidentes',
            'area' => 'Medio Ambiente y Seguridad',
            'descripcion' => 'Lineamientos para informar la ocurrencia de incidentes y accidentes a la Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos.',
            'revision' => '00',
            'fecha' => '2018-02-14',
        ]);

        DB::table('viii_elemento_04')->insert([
            'nombre' => 'Lineamientos para la conformación, implementación y autorización de los sistemas de administración',
            'area' => 'Medio Ambiente y Seguridad',
            'descripcion' => 'Lineamientos para la conformación, implementación y autorización de los Sistemas de Administración de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente aplicables a las actividades de Expendio al Público de Gas Natural, Distribución y Expendio al Público de Gas Licuado de Petróleo y de Petrolíferos.',
            'revision' => '00',
            'fecha' => '2014-02-14',
        ]);
    }
}
