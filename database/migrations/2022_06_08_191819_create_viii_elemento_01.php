<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViiiElemento01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viii_elemento_01', function (Blueprint $table) {
            $table->id();
            $table->string('tipo')->nullable();
            $table->string('reglas')->nullable();
            $table->date('fecha')->nullable();
            $table->date('aprobacion')->nullable();
            $table->date('notificacion')->nullable();
            $table->date('pdf')->nullable();
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
        Schema::dropIfExists('viii_elemento_01');
    }
}
