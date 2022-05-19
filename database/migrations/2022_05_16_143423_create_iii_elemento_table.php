<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIiiElementoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iii_elemento', function (Blueprint $table) {
            $table->id();
            $table->string('leyes', 100);
            $table->string('marco');
            $table->string('descripcion');
            $table->string('ambito', 50);
            $table->string('mecanismo_cumplimiento');
            $table->string('mecanismo_especifico');
            $table->string('periodicidad', 50);
            $table->string('obligatorio')->nullable();
            $table->string('aplica', 50);
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
        Schema::dropIfExists('iii_elemento');
    }
}
