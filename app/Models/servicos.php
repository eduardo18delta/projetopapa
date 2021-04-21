<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicos extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo_geral',
        'image',
        'titulo_item',
        'conteudo',
    ];

}
