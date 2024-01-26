<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ativo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome', 'sigla', 'logo', 'id_tipo', 'id_segmento'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'ativos';

    public function historico() {
        return $this->hasMany(HistoricoAtivo::class, 'id_ativo', 'id')->orderBy('id', 'desc');
    }

    public function ultimo_dia_historico() {
        $ultimo = HistoricoAtivo::where('id_ativo', $this->id)->orderBy('id', 'asc')->first();
        return $ultimo;
    }

    public function tipo() {
        return $this->hasOne(TipoAtivo::class, 'id', 'id_tipo');
    }

    public function segmento() {
        return $this->hasOne(SegmentoAtivo::class, 'id', 'id_segmento');
    }
}
