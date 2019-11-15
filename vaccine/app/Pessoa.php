<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['pessoa_id', 'nome','cpf'];
    
    protected $table = 'pessoas';
    
    public function pessoable()
    {
        return $this->morphTo();
    }
}
