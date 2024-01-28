<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestimentoAcaoCompra extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_compra', 'quantidade', 'valor_unitario', 'corretora', 'id_investimento', 'ativo'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'investimento_acao_compras';

    public function investimento() {
        return $this->hasOne(InvestimentoAcao::class, 'id', 'id_investimento');
    }

    public function saldo() {
        return $this->valor_unitario * $this->quantidade;
    }
}
