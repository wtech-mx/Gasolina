<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViiiElemento05Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viii_elemento_05', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 200)->nullable();
            $table->unsignedBigInteger('id_responsable')->nullable();
            $table->foreign('id_responsable')
                ->references('id')->on('users')
                ->inDelete('set null');
            $table->date('fecha_notificacion')->nullable();
            $table->date('fecha_aprovacion')->nullable();
            $table->string('reglas')->nullable();
            $table->string('pdf', 900)->nullable();
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
        Schema::dropIfExists('viii_elemento_05');
    }
}
