<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion', function (Blueprint $table) {
            $table->id();
            $table->string('tanque1')->nullable();
            $table->string('tanque2')->nullable();
            $table->string('tanque3')->nullable();

            $table->string('name1')->nullable();
            $table->string('firma1', 900)->nullable();
            $table->string('name2')->nullable();
            $table->string('firma2', 900)->nullable();
            $table->string('name3')->nullable();
            $table->string('firma3', 900)->nullable();

            $table->string('color_diaria')->nullable();
            $table->string('color_mensual')->nullable();
            $table->string('color_semestral')->nullable();
            $table->string('color_no_realizada')->nullable();
            $table->string('color_elemento')->nullable();

            $table->string('color_temporalidad')->nullable();
            $table->string('color_año')->nullable();

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
        Schema::dropIfExists('configuracion');
    }
}
