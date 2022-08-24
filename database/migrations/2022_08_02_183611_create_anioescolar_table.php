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
        Schema::create('anioescolar', function (Blueprint $table) {
            $table->bigIncrements('id_anioescolar');
            $table->string('nombreanioescolar');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->foreign('liceo_id')
            ->references('id_liceo')->on('liceo')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anioescolar');
    }
};
