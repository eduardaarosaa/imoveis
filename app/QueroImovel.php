<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QueroImovel extends Model
{
    protected $table = 'quero_imovel';
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
