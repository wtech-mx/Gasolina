<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViiElemento03 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vii_elemento_03', function (Blueprint $table) {
            $table->id();
            $table->date('fecha', 100)->nullable();
            $table->string('servicio', 100)->nullable();
            $table->string('tipo', 200)->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->string('solicitante', 200)->nullable();
            $table->unsignedBigInteger('id_reportado')->nullable();
            $table->foreign('id_reportado')
                ->references('id')->on('users')
                ->inDelete('set null');
            $table->string('solicitud', 100)->nullable();
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
        //
    }
}
