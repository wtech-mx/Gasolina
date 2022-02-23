<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tareas');
            $table->foreign('id_tareas')
                ->references('id')->on('tareas')
                ->inDelete('set null');

            $table->tinyInteger('consultar')->nullable();
            $table->tinyInteger('seguimiento')->nullable();
            $table->tinyInteger('difundir')->nullable();
            $table->tinyInteger('correctiva')->nullable();
            $table->tinyInteger('ejecutar')->nullable();
            $table->tinyInteger('entrada')->nullable();
            $table->tinyInteger('salida')->nullable();
            $table->tinyInteger('ordinaria')->nullable();
            $table->tinyInteger('extraordinaria')->nullable();
            $table->tinyInteger('programado')->nullable();
            $table->tinyInteger('actualizar')->nullable();
            $table->tinyInteger('alta')->nullable();
            $table->tinyInteger('evaluar')->nullable();
            $table->tinyInteger('generar')->nullable();

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
        Schema::dropIfExists('elementos');
    }
}
