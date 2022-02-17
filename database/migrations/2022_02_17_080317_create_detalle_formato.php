<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFormato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_formato', function (Blueprint $table) {
            $table->id();
            $table->string('elemento');
            $table->string('sub');

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
            ->references('id')->on('users')
            ->inDelete('set null');

            $table->string('color');
            $table->date('start');
            $table->date('correctiva');
            $table->date('actualizar');
            $table->date('consultar');
            $table->date('difundir');
            $table->date('generar');
            $table->date('title');
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
        Schema::dropIfExists('detalle_formato');
    }
}
