<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class viiiElemento02Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('viii_elemento_02')->insert([
            'nombre' => 'I-01-01 Política documentada.',
            'estatus' => '1',
        ]);
    }
}
