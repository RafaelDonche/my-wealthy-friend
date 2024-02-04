<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome', 'descricao', 'valor', 'data_fim', 'id_user', 'ativo'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'metas';

    public function user() {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function tipos() {
        return $this->hasMany(ConexaoTipoMeta::class, 'id_meta', 'id')->where('ativo', 1);
    }

    public function tipo_acao_ativo() {
        foreach ($this->tipos as $t) {
            if ($t->id_tipo == 1) {
                return true;
            }
        }

        return false;
    }

    public function tipo_fii_ativo() {
        foreach ($this->tipos as $t) {
            if ($t->id_tipo == 2) {
                return true;
            }
        }

        return false;
    }

    public function tipo_cripto_ativo() {
        foreach ($this->tipos as $t) {
            if ($t->id_tipo == 3) {
                return true;
            }
        }

        return false;
    }

    public function porcentagemAtual() {
        $tipos = $this->tipos;

        $acoes = null;
        $fiis = null;
        $criptos = null;
        foreach ($tipos as $t) {
            if ($t->id_tipo == 1) {
                $acoes = InvestimentoAcao::where('ativo', 1)->where('id_user', $this->id_user)->get();
            }
            if ($t->id_tipo == 2) {
                $fiis = InvestimentoFundo::where('ativo', 1)->where('id_user', $this->id_user)->get();
            }
            if ($t->id_tipo == 3) {
                $criptos = InvestimentoCripto::where('ativo', 1)->where('id_user', $this->id_user)->get();
            }
        }

        $soma_acoes = 0;
        if ($acoes != null) {
            foreach ($acoes as $a) {
                $soma_acoes = $soma_acoes + $a->valorAtual();
            }
        }

        $soma_fiis = 0;
        if ($fiis != null) {
            foreach ($fiis as $f) {
                $soma_fiis = $soma_fiis + $f->valorAtual();
            }
        }

        $soma_criptos = 0;
        if ($criptos != null) {
            foreach ($criptos as $c) {
                $soma_criptos = $soma_criptos + $c->valorAtual();
            }
        }

        $soma_total = $soma_acoes + $soma_fiis + $soma_criptos;

        $porcentagem = min(100, ($soma_total / $this->valor) * 100);

        return $porcentagem;
    }
}
