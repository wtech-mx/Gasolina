<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediosDifundirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medios_difundir', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_difundir')->nullable();
            $table->foreign('id_difundir')
                ->references('id')->on('difundirs')
                ->inDelete('set null');

            $table->string('comunicacion');
            $table->string('descripcion');

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
        Schema::dropIfExists('medios_difundir');
    }
}
