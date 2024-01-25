<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestimentoAcao extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_compra', 'data_venda', 'quantidade', 'valor_unitario', 'corretora', 'id_user', 'id_ativo', 'ativo'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'investimento_acaos';

    public function user() {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function ativo_info() {
        return $this->hasOne(Ativo::class, 'id', 'id_ativo');
    }
}
