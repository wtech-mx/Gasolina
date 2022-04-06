<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXElementoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_elemento', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->inDelete('set null');

            $table->unsignedBigInteger('id_evaluacion')->nullable();
            $table->foreign('id_evaluacion')
                ->references('id')->on('users')
                ->inDelete('set null');

            $table->unsignedBigInteger('id_tarea')->nullable();
            $table->foreign('id_tarea')
                ->references('id')->on('tareas')
                ->inDelete('set null');

            $table->string('estado')->nullable();
            $table->string('elemento')->nullable();
            $table->string('cliente')->nullable();
            $table->string('tanque')->nullable();
            $table->datetime('recibido')->nullable();
            $table->time('salida')->nullable();
            $table->string('operador')->nullable();
            $table->string('identificacion')->nullable();
            $table->string('producto')->nullable();
            $table->string('nota')->nullable();
            $table->string('cantidad')->nullable();
            $table->string('cantidad_antes')->nullable();
            $table->string('cantidad_despues')->nullable();
            $table->string('producto_tanqute')->nullable();
            $table->string('energia')->nullable();
            $table->string('suspender')->nullable();
            $table->text('remision')->nullable();
            $table->text('factura')->nullable();

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
        Schema::dropIfExists('x_elemento');
    }
}
