<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXiiElementoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xii_elemento', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_alta')->nullable();
            $table->string('nombre')->nullable();
            $table->string('tipo')->nullable();
            $table->string('estatus')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('pdf', 900)->nullable();

            $table->unsignedBigInteger('id_responsable')->nullable();
            $table->foreign('id_responsable')
                ->references('id')->on('users')
                ->inDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xii_elemento');
    }
}
