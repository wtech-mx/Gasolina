<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultar', function (Blueprint $table) {
            $table->id();
            $table->text('tipo');
            $table->text('regla');
            $table->date('fecha');
            $table->date('aprobacion');
            $table->text('revision');
            $table->text('servicio');
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
        Schema::dropIfExists('consultar');
    }
}
