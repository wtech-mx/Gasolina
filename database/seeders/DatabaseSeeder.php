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

        $this->call(viiiElemento03Seeder::class);

    }
}
