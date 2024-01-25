<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ativos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sigla');
            $table->string('logo');
            $table->integer('id_tipo')->unsigned()->nullable();
            $table->foreign('id_tipo')->references('id')->on('tipo_ativos');
            $table->integer('id_segmento')->unsigned()->nullable();
            $table->foreign('id_segmento')->references('id')->on('segmento_ativos');
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
        Schema::dropIfExists('ativos');
    }
}
