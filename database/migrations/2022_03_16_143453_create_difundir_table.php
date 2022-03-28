<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDifundirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('difundirs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->inDelete('set null');

            $table->unsignedBigInteger('id_elemento')->nullable();
            $table->foreign('id_elemento')
                ->references('id')->on('tareas')
                ->inDelete('set null');

            $table->date('fecha');

            $table->string('descripcion');
            $table->boolean('tipo');
            $table->date('inicial');
            $table->date('final');

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
        Schema::dropIfExists('difundir');
    }
}
