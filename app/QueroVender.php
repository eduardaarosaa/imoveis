<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QueroVender extends Model
{
    protected $table = 'quero_vender';

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'tipo',
        'regiao',
        'valor',
        'assunto'
    ];
}
