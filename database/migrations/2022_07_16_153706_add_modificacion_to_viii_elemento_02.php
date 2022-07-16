<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddModificacionToViiiElemento02 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('viii_elemento_02', function (Blueprint $table) {
            $table->string('fecha')->nullable()->after('pdf');
            $table->string('modificacion')->nullable()->after('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('viii_elemento_02', function (Blueprint $table) {
            //
        });
    }
}
