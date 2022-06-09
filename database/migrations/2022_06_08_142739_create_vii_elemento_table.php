<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViiElementoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vii_elemento', function (Blueprint $table) {
            $table->id();
            $table->date('fecha', 100)->nullable();
            $table->string('lugar', 100)->nullable();
            $table->string('observada', 200)->nullable();
            $table->string('tipo', 100)->nullable();
            $table->string('descripcion', 200)->nullable();
            $table->unsignedBigInteger('id_empleado')->nullable();
            $table->foreign('id_empleado')
                ->references('id')->on('users')
                ->inDelete('set null');
            $table->string('contratista', 100)->nullable();
            $table->string('visitante', 100)->nullable();
            $table->string('reportado', 100)->nullable();
            $table->string('observacion', 200)->nullable();
            $table->string('responsable', 100)->nullable();
            $table->string('estatus', 100)->nullable();
            $table->string('seguimiento', 100)->nullable();
            $table->string('pdf', 500)->nullable();
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
        Schema::dropIfExists('vii_elemento');
    }
}
