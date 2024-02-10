<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function empresa() {
        return $this->hasOne(AtivoEmpresa::class, 'id_ativo', 'id');
    }

    public function proventos() {
        return $this->hasMany(AtivoProvento::class, 'id_ativo', 'id')->orderByDesc('data_pagamento');
    }

    public function proximos_proventos() {
        $hoje = Carbon::today()->isoFormat("YYYY-MM-DD");
        return $this->hasMany(AtivoProvento::class, 'id_ativo', 'id')->where('data_pagamento', '>=', $hoje)->orderBy('data_pagamento');
    }

    public function ultimo_dia_historico() {
        $ultimo = HistoricoAtivo::where('id_ativo', $this->id)->orderBy('data', 'desc')->first();
        return $ultimo;
    }

    public function tipo() {
        return $this->hasOne(TipoAtivo::class, 'id', 'id_tipo');
    }

    public function segmento() {
        return $this->hasOne(SegmentoAtivo::class, 'id', 'id_segmento');
    }

    public function color_btn() {
        $variacao = $this->ultimo_dia_historico()->variacao;

        if (strval($variacao) > 0) {
            return 'green';
        }

        if (strval($variacao) == 0) {
            return 'black';
        }

        if (strval($variacao) < 0) {
            return 'red';
        }
    }
}
