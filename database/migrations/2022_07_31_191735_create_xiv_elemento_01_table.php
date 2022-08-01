<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXivElemento01Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xiv_elemento', function (Blueprint $table) {
            $table->id();
            $table->string('subcomponente')->nullable();
            $table->date('fecha_solicitud')->nullable();
            $table->date('vigencia')->nullable();
            $table->string('estatus')->nullable();
            $table->string('nombre_unidad')->nullable();
            $table->string('numero_autorizacion')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('error_max')->nullable();
            $table->string('valor_patron')->nullable();
            $table->string('incertidumbre')->nullable();
            $table->string('resolucion_instrumento')->nullable();
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
        Schema::dropIfExists('xiv_elemento_01');
    }
}
