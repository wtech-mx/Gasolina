<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('users')->insert([
        //     'name' => 'SuperAdmin',
        //     'email' => 'superadmin@gmail.com',
        //     'password' => Hash::make('123456789'),
        // ]);

        $this->call(RequisitosSeeder::class);
        $this->call(viiElemento01Seeder::class);
        $this->call(viiiElemento02Seeder::class);
        $this->call(viiiElemento03Seeder::class);
        $this->call(viiiElemento04Seeder::class);

    }
}
