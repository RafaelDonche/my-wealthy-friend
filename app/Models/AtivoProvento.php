<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtivoProvento extends Model
{
    use HasFactory;
    protected $fillable = [
        'valor', 'data_pagamento', 'data_com', 'label', 'id_ativo'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'ativo_proventos';

    public function ativo() {
        return $this->hasOne(Ativo::class, 'id', 'id_ativo');
    }
}
