<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $fillable = ['pagamento_id', 'valor'];
    
    protected $table = 'pagamentos';
}
