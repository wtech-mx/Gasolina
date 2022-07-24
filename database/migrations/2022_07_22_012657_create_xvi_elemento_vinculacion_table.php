<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXviElementoVinculacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xvi_elemento_vinculacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_xvi')->nullable();
            $table->foreign('id_xvi')
                ->references('id')->on('xvi_elemento')
                ->inDelete('set null');

            $table->string('tipo_vinculacion')->nullable();
            $table->string('nombre')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xvi_elemento_vinculacion');
    }
}
