<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBajaToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('alta')->nullable()->after('id_sucursal');
            $table->date('baja')->nullable()->after('alta');
            $table->string('enfermedad')->nullable()->after('baja');
            $table->string('alergias')->nullable()->after('enfermedad');
            $table->string('seguro_social')->nullable()->after('alergias');

            $table->string('estado_civil')->nullable()->after('seguro_social');
            $table->string('estudios')->nullable()->after('estado_civil');
            $table->string('contratacion')->nullable()->after('estudios');
            $table->string('personal')->nullable()->after('contratacion');
            $table->string('jornada')->nullable()->after('personal');
            $table->string('rotacion_turnos')->nullable()->after('jornada');
            $table->string('tiempo_puesto')->nullable()->after('rotacion_turnos');
            $table->string('experiencia')->nullable()->after('tiempo_puesto');
            $table->string('departamento')->nullable()->after('experiencia');
            $table->string('nombre_emergencia')->nullable()->after('departamento');
            $table->string('telefono_emergencia')->nullable()->after('nombre_emergencia');
            $table->string('foto', 900)->nullable()->after('telefono_emergencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
