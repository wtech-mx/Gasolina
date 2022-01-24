<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellido')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('puesto')->nullable();
            $table->bigInteger('empresa')->nullable();
            $table->bigInteger('id_empresa')->nullable();
            $table->bigInteger('sucursal')->nullable();
            $table->string('cp')->nullable();
            $table->string('rfc')->nullable();
            $table->string('calle')->nullable();
            $table->string('entidad')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
