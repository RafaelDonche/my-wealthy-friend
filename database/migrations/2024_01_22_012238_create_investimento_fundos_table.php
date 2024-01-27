<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestimentoFundosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investimento_fundos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data_compra');
            $table->integer('quantidade');
            $table->decimal('valor_unitario', 20, 2);
            $table->string('corretora')->nullable();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('id_ativo')->unsigned();
            $table->foreign('id_ativo')->references('id')->on('ativos');
            $table->boolean('vendido')->default(false);
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
        Schema::dropIfExists('investimento_fundos');
    }
}
