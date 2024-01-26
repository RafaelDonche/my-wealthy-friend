<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoAtivo extends Model
{
    use HasFactory;
    protected $fillable = [
        'data', 'valor_fechamento', 'variacao', 'id_ativo'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'historico_ativos';

    public function ativo() {
        return $this->hasOne(Ativo::class, 'id', 'id_ativo');
    }
}
