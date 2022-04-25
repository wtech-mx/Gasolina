<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configuracion')->insert([
            'color_diaria' => '#2ECC71',
            'color_mensual' => '#2980B9',
            'color_semestral' => '#8E44AD',
            'color_no_realizada' => '#FF0000',
            'color_elemento' => '#549227',
        ]);
    }
}
