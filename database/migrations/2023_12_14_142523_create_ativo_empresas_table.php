<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtivoEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ativo_empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pais')->nullable();
            $table->string('estado')->nullable();
            $table->string('cidade')->nullable();
            $table->string('endereco')->nullable();
            $table->string('cep')->nullable();
            $table->string('website')->nullable();
            $table->text('sumario')->nullable();
            $table->integer('id_ativo')->unsigned();
            $table->foreign('id_ativo')->references('id')->on('ativos');
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
        Schema::dropIfExists('ativo_empresas');
    }
}
