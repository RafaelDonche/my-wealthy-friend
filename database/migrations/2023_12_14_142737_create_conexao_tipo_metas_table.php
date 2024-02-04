<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConexaoTipoMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conexao_tipo_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_meta')->unsigned();
            $table->foreign('id_meta')->references('id')->on('metas');
            $table->integer('id_tipo')->unsigned();
            $table->foreign('id_tipo')->references('id')->on('tipo_metas');
            $table->boolean('ativo');
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
        Schema::dropIfExists('conexao_tipo_metas');
    }
}
