<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestimentoCriptoVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investimento_cripto_vendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data_venda');
            $table->decimal('quantidade', 15, 5);
            $table->decimal('valor_unitario', 20, 2);
            $table->string('corretora')->nullable();
            $table->bigInteger('id_investimento')->unsigned();
            $table->foreign('id_investimento')->references('id')->on('investimento_criptos');
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
        Schema::dropIfExists('investimento_cripto_vendas');
    }
}
