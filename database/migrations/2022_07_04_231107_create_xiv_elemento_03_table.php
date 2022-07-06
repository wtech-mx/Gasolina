<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXivElemento03Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xiv_elemento_03', function (Blueprint $table) {
            $table->id();
            $table->string('num_informe')->nullable();
            $table->string('laboratorio')->nullable();
            $table->string('tipo')->nullable();
            $table->string('num_autorizacion')->nullable();
            $table->date('fecha_solicitud')->nullable();
            $table->date('fecha_seguimiento')->nullable();
            $table->string('estatus')->nullable();
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
        Schema::dropIfExists('xiv_elemento_03');
    }
}
