<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAtivo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome', 'sigla', 'nomeIngles'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'tipo_ativos';
}
