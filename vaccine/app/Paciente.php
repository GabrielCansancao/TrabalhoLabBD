<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['pacient_id', 'datanasc'];
    
    protected $table = 'pacients';
    public function pessoas()
    {
        return $this->morphMany('App\Pessoa', 'pessoable');
    }
}
