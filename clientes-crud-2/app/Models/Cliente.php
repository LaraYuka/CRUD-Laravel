<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nome',
        'data_nascimento',
        'cpf',
    ];

    protected $casts = [
        'data_nascimento' => 'date',
    ];
}
