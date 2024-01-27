<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestimentoFundo extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_compra', 'data_venda', 'quantidade', 'valor_unitario', 'corretora', 'id_user', 'id_ativo', 'ativo'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'investimento_fundos';

    public function user() {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function ativo_info() {
        return $this->hasOne(Ativo::class, 'id', 'id_ativo');
    }

    public function vendas() {
        return $this->hasMany(InvestimentoFundoVenda::class, 'id_investimento', 'id')->where('ativo', 1);
    }
}
