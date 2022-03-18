<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTanqueToEjecutar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ejecutars', function (Blueprint $table) {
            $table->string('producto_tanqute')->nullable()->after('factura');
            $table->integer('cantidad_antes')->after('producto_tanqute');
            $table->integer('cantidad_despues')->after('cantidad_antes');
            $table->string('energia')->nullable()->after('cantidad_despues');
            $table->string('suspender')->nullable()->after('energia');
            $table->string('trillada_antes', 900)->nullable()->after('suspender');
            $table->string('trillada_despues', 900)->nullable()->after('trillada_antes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ejecutar', function (Blueprint $table) {
            //
        });
    }
}
