<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViiiElemento03 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viii_elemento_03', function (Blueprint $table) {
            $table->id();
            $table->string('autorizacion')->nullable();
            $table->string('condicionante')->nullable();
            $table->string('etapa')->nullable();
            $table->string('autoridad')->nullable();
            $table->date('obtencion')->nullable();
            $table->string('renovacion')->nullable();
            $table->string('cumplimiento')->nullable();
            $table->string('periodicidad')->nullable();
            $table->string('pdf', 900)->nullable();

            $table->string('titulo')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->string('color')->nullable();
            $table->integer('check')->nullable();

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
        //
    }
}
