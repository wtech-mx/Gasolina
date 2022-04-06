<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPreguntasToXElemento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('x_elemento', function (Blueprint $table) {

            for($i=1; $i<=49; $i++){
                $table->string('pregunta'.$i)->nullable()->after('factura');
            }

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('x_elemento', function (Blueprint $table) {
            //
        });
    }
}
