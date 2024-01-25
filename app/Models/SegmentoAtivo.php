<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SegmentoAtivo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome','nomeIngles'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'segmento_ativos';
}
