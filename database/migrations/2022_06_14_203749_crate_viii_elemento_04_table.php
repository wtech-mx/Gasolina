<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateViiiElemento04Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viii_elemento_04', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('area', 100)->nullable();
            $table->string('descripcion', 500)->nullable();
            $table->string('revision', 20)->nullable();
            $table->date('fecha')->nullable();

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
        //
    }
}
