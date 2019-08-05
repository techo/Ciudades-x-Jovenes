<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('mail');
            $table->integer('telefono');
            $table->integer('participantes');
            $table->string('mujeres');
            $table->string('hombres');
            $table->string('otrxs');


            $table->string('propuesta_ciudad');
            $table->string('propuesta_titulo');
            $table->string('propuesta_problema');
            $table->string('propuesta_solucion');

            $table->string('compromiso_jovenes');
            $table->string('compromiso_nosotros');
            $table->string('compromiso_donde');
            $table->string('compromiso_fecha');

            $table->string('reflexion');


            $table->string('foto_grupo');
            $table->string('foto_mapa');
            $table->string('foto_anexo');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesas');
    }
}
