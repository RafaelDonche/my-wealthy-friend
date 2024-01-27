<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Add2OnInvestimento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investimento_acaos', function (Blueprint $table) {
            $table->integer('quantidade_venda')->after('valor_venda');
        });
        Schema::table('investimento_fundos', function (Blueprint $table) {
            $table->integer('quantidade_venda')->after('valor_venda');
        });
        Schema::table('investimento_criptos', function (Blueprint $table) {
            $table->decimal('quantidade_venda', 15, 5)->after('valor_venda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investimento_acaos', function (Blueprint $table) {
            //
        });
    }
}
