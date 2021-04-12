<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pecas extends Model
{
    protected $fillable = [
        'nome',
        'valor',
        'descricao',
        'quantidade',
        'codigo'
    ];
    
}
