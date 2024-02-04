<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMeta extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'tipo_metas';
}
