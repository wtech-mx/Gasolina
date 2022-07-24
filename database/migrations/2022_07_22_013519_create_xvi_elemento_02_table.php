<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXviElemento02Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xvi_elemento_02', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuarios')->nullable();
            $table->foreign('id_usuarios')
                ->references('id')->on('users')
                ->inDelete('set null');

            $table->string('situacion_observada')->nullable();
            $table->date('fecha')->nullable();
            $table->string('tipo')->nullable();
            $table->string('lugar')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('usuario')->nullable();
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
        Schema::dropIfExists('xvi_elemento_02');
    }
}
