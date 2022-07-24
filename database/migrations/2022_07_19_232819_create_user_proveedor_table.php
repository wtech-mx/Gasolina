<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_proveedor', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('correo')->nullable();
            $table->string('puesto')->nullable();
            $table->string('telefono')->nullable();
            $table->string('cargo')->nullable();
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
        Schema::dropIfExists('user_proveedor');
    }
}
