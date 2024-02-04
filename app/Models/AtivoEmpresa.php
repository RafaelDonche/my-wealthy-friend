<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtivoEmpresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'pais', 'estado', 'cidade', 'endereco', 'cep', 'website', 'sumario', 'id_ativo'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'ativo_empresas';

    public function ativo() {
        return $this->hasOne(Ativo::class, 'id', 'id_ativo');
    }
}
