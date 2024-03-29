<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoAtivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_ativos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data');
            $table->decimal('valor_fechamento', 20, 2);
            $table->decimal('variacao', 20, 2);
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
        Schema::dropIfExists('historico_ativos');
    }
}
