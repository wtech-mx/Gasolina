<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPersonalToViiiElemento05 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('viii_elemento_05', function (Blueprint $table) {
            $table->string('personal_objetivo')->nullable()->after('pdf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('viii_elemento_05', function (Blueprint $table) {
            //
        });
    }
}
