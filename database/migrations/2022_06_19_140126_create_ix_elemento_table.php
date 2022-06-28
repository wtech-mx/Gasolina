<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIxElementoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ix_elemento', function (Blueprint $table) {
            $table->id();
            $table->string('mejores_practicas')->nullable();
            $table->string('marco_normativo')->nullable();
            $table->string('dependencia')->nullable();
            $table->date('fecha')->nullable();
            $table->string('tipo')->nullable();
            $table->string('reglas')->nullable();
            $table->string('mecanismos')->nullable();
            $table->string('configuracion')->nullable();
            $table->string('pdf', 900)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ix_elemento');
    }
}
