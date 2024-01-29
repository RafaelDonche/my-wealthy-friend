<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestimentoFundo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user', 'id_ativo', 'ativo'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'investimento_fundos';

    public function user() {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function ativo_info() {
        return $this->hasOne(Ativo::class, 'id', 'id_ativo');
    }

    public function compras() {
        return $this->hasMany(InvestimentoFundoCompra::class, 'id_investimento', 'id')->where('ativo', 1)->orderBy('data_compra');
    }

    public function vendas() {
        return $this->hasMany(InvestimentoFundoVenda::class, 'id_investimento', 'id')->where('ativo', 1)->orderBy('data_venda');
    }

    public function quantidadeComprada() {
        $compras = $this->compras;

        $soma = 0;
        foreach ($compras as $c) {
            $soma = $soma + $c->quantidade;
        }

        return $soma;
    }

    public function quantidadeVendida() {
        $vendas = $this->vendas;

        $soma = 0;
        foreach ($vendas as $v) {
            $soma = $soma + $v->quantidade;
        }

        return $soma;
    }

    public function quantidadeAtual() {
        return $this->quantidadeComprada() - $this->quantidadeVendida();
    }

    // valor total de compras
    public function saldoCompras() {
        $compras = $this->compras;

        $somaCompras = 0;
        foreach ($compras as $c) {
            $somaCompras = $somaCompras + $c->saldo();
        }

        return $somaCompras;
    }

    // valor total de vendas
    public function saldoVendas() {
        $vendas = $this->vendas;

        $somaVendas = 0;
        foreach ($vendas as $v) {
            $somaVendas = $somaVendas + $v->saldo();
        }

        return $somaVendas;
    }

    public function saldoAtivo() {
        return $this->saldoCompras() - $this->saldoVendas();
    }

    // quantiade atual * ultimo valor de fechamento do ativo
    public function valorAtual() {
        $valor_ativo = $this->ativo_info->ultimo_dia_historico()->valor_fechamento;
        return $valor_ativo * $this->quantidadeAtual();
    }
}
