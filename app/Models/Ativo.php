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
}
