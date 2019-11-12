<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['id', 'datanasc', 'cpf'];
    
    protected $table = 'pacients';
}
