<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestimentoCriptoVenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_venda', 'quantidade', 'valor_unitario', 'id_investimento', 'ativo'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'investimento_cripto_vendas';

    public function investimento() {
        return $this->hasOne(InvestimentoCripto::class, 'id', 'id_investimento');
    }
}
