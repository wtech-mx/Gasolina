<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXvElementoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xv_elemento', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('color')->nullable();
            $table->string('estatus')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->date('fecha_elaboracion')->nullable();
            $table->string('proveedor')->nullable();
            $table->string('pdf', 900)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xv_elemento');
    }
}
