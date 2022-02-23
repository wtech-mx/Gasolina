<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrectivaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correctiva', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_elemento');
            $table->foreign('id_elemento')
                ->references('id')->on('elementos')
                ->inDelete('set null');

            $table->date('fecha');
            $table->text('descripcion');

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
        Schema::dropIfExists('correctiva');
    }
}
