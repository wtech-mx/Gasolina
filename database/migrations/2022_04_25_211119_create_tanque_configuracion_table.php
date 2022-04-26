<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanqueConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanque_configuracion', function (Blueprint $table) {
            $table->id();
            $table->integer('estatus')->nullable();
            $table->string('pistola1')->nullable();
            $table->string('pistola2')->nullable();
            $table->string('pistola3')->nullable();
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
        Schema::dropIfExists('tanque_configuracion');
    }
}
