<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Historial;

use App\Models\Cliente;

class HistorialController extends Controller
{
      public function __construct() {

        $this->middleware('auth');
    }
    
    
    public function index(){
        $user = \Auth::user();
        $Historial = Historial::All();
        
        
        
        return view('historial',[
            'historial' => $Historial
        ]);
    }
    
    
    public function delete($id){
        
       
        $user = \Auth::user();
        
        
        $historial = Historial::find($id);
        
       
        if ($historial) {
           
            
            
            $historial->delete();
            
            
             
             
             
             return redirect()->route('historial')->with([
                    'message' => 'El historial del cliente ha sido eliminado correctamente'
            ]);
             
             
           
            
            
        } else{
            
             return redirect()->route('historial')->with([
                    'message' => 'El historial no se ha podido eliminar'
                 ]);
             
             
             
        }
            
            
       
        
    }
    

        
        
        
        
}
