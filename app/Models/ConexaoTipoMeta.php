<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConexaoTipoMeta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_meta', 'id_tipo', 'ativo'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'conexao_tipo_metas';

    public function meta() {
        return $this->hasOne(Meta::class, 'id', 'id_meta');
    }

    public function tipo() {
        return $this->hasOne(TipoMeta::class, 'id', 'id_tipo');
    }
}
