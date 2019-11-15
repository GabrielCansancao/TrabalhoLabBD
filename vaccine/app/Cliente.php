<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['cliente_id', 'email', 'telefone'];
    
    protected $table = 'clientes';
    
    public function pessoas()
    {
        return $this->morphMany('App\Pessoa', 'pessoable');
    }
    
}
