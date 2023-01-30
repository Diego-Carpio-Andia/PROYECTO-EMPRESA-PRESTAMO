<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    
    //primero indicamos que tabla estara modificando en la base de datos
    protected $table = 'capital';
    
  
    use HasFactory;
    
        
    
    public function Cliente(){
        return $this->belongsTo('App\Models\Cliente', 'cliente_id');
    }
    
    
}
