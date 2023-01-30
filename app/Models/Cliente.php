<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    //primero indicamos que tabla estara modificando en la base de datos
    protected $table = 'clientes';
   
    
    use HasFactory;

    public function User(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    
    
    
    public function Interes() {
        return $this->hasMany('App\Models\Interes');
    }
    
    public function Capital() {
        return $this->hasMany('App\Models\Capital');
    }
    
    public function Historial() {
        return $this->hasMany('App\Models\Historial');
    }
    
    
    
  
    
    
    
    
}
