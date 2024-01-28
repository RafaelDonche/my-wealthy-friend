<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestimentoFundoVenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_venda', 'quantidade', 'valor_unitario', 'corretora', 'id_investimento', 'ativo'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'investimento_fundo_vendas';

    public function investimento() {
        return $this->hasOne(InvestimentoFundo::class, 'id', 'id_investimento');
    }

    public function saldo() {
        return $this->valor_unitario * $this->quantidade;
    }
}
