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
        return $this->hasMany(InvestimentoFundoCompra::class, 'id_investimento', 'id')->where('ativo', 1);
    }

    public function vendas() {
        return $this->hasMany(InvestimentoFundoVenda::class, 'id_investimento', 'id')->where('ativo', 1);
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

    public function valorAtual() {
        $compras = $this->compras;
        $vendas = $this->vendas;

        $somaCompras = 0;
        foreach ($compras as $c) {
            $somaCompras = $somaCompras + $c->saldo();
        }

        $somaVendas = 0;
        foreach ($vendas as $v) {
            $somaVendas = $somaVendas + $v->saldo();
        }

        return $somaCompras - $somaVendas;
    }
}
