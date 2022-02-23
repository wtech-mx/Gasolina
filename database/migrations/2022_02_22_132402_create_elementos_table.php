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

            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->inDelete('set null');

            $table->integer('elemntos');
            $table->tinyInteger('consultar')->nullable();
            $table->tinyInteger('seguimiento')->nullable();
            $table->tinyInteger('difundir')->nullable();
            $table->tinyInteger('correctiva')->nullable();
            $table->tinyInteger('ejecutar')->nullable();
            $table->tinyInteger('entrada')->nullable();
            $table->tinyInteger('salida')->nullable();
            $table->tinyInteger('extraordinaria')->nullable();
            $table->tinyInteger('programado')->nullable();
            $table->tinyInteger('actualizar')->nullable();
            $table->tinyInteger('alta')->nullable();
            $table->tinyInteger('evaluar')->nullable();
            $table->tinyInteger('generar')->nullable();

            $table->string('image');
            $table->string('title');
            $table->string('color');
            $table->string('url')->nullable();
            $table->integer('estatus');
            $table->date('start');
            $table->date('end');

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
