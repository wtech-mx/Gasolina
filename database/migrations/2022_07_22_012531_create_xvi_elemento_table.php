<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXviElementoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xvi_elemento', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('hora')->nullable();
            $table->string('area')->nullable();
            $table->string('daño_accidente')->nullable();
            $table->string('tipo_personal')->nullable();
            $table->string('usuario')->nullable();
            $table->string('descripcion')->nullable();
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
        Schema::dropIfExists('xvi_elemento');
    }
}
