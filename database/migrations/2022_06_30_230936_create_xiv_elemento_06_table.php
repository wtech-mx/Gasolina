<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXivElemento06Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xiv_elemento_06', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->datatime('fecha')->nullable();
            $table->string('incidencia')->nullable();
            $table->string('dependencia')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('pdf', 900)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xiv_elemento_06');
    }
}
