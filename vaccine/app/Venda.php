<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = ['id', 'datavenda'];
    
    protected $table = 'vendas';
}