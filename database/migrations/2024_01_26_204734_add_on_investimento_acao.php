<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOnInvestimentoAcao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investimento_acaos', function (Blueprint $table) {
            $table->decimal('valor_venda', 20, 2)->after('data_venda');
        });
        Schema::table('investimento_fundos', function (Blueprint $table) {
            $table->decimal('valor_venda', 20, 2)->after('data_venda');
        });
        Schema::table('investimento_criptos', function (Blueprint $table) {
            $table->decimal('valor_venda', 20, 2)->after('data_venda');
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
