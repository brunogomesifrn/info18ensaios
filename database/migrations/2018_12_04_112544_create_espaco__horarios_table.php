<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspacoHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espaco__horarios', function (Blueprint $table) {

            $table->integer('espaco_id')->unsigned();
            $table->foreign('espaco_id')->references('id')->on('espacos');

            $table->integer('horario_id')->unsigned();
            $table->foreign('horario_id')->references('id')->on('horarios');

            $table->primary(['espaco_id', 'horario_id']);

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
        Schema::dropIfExists('espaco__horarios');
    }
}
