<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXiiElementoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xii_elemento_usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuarios')->nullable();
            $table->foreign('id_usuarios')
                ->references('id')->on('users')
                ->inDelete('set null');

            $table->unsignedBigInteger('id_xii')->nullable();
                $table->foreign('id_xii')
                    ->references('id')->on('xii_elemento')
                    ->inDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xii_elemento_usuarios');
    }
}
