<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = ['servico_id', 'nome'];
    
    protected $table = 'servicos';
}
