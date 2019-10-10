<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //Usando a $fillable você diz quais são os campos o que o usuário poderá preencher.
    protected $fillable = [
        'cpf',
        'nome',
        'email'
    ];
}
