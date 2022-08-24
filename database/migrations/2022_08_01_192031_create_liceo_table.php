<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liceo', function (Blueprint $table) {
            $table->bigIncrements('id_liceo');
            $table->string('codigoplantel');
            $table->string('nombre');
            $table->text('direccion');
            $table->string('telefono');
            $table->string('municipio');
            $table->string('distritofederal');
            $table->string('zonaeducativa');
            $table->string('director');
            $table->string('ceduladirector');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liceo');
    }
};
