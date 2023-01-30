<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Interes;

use App\Models\Cliente;


use Carbon\Carbon;



class InteresController extends Controller
{
      public function __construct() {

        $this->middleware('auth');
    }
    
    
     public function index(){
        $user = \Auth::user();
        $interes = Interes::All();
        
        
        
        return view('interes',[
            'interes' => $interes
        ]);
    }
    
    
    
    
    
    
    public function add($id) {
        $user = \Auth::user();
        $cliente = Cliente::find($id);


        if ($user && $cliente && $cliente->user_id == $user->id ) {


            return view('interes.add', [
                'cliente' => $cliente
            ]);
        } else {
            $message = array('message' => 'el cliente no se puede editar');
        }

        return redirect()->route('dashboard')->with($message);
    }
    
    public function save(Request $request){
        
        
        
        
        $cliente_id = $request->input('cliente_id');
        $interes = $request->input('interes');
        $estado = $request->input('estado');
      
        
        $veces_interes = Interes::where('cliente_id',$cliente_id)
                                ->where('estado','Incompleto')
                                ->count();
        
        
        
        $Interes = new Interes();
        
        
        
        
        $Interes->cliente_id = (int) $cliente_id;
        $Interes->interes = (float) $interes;
        $Interes->estado = $estado;
        
      
                   
        $Interes->save();
        
        
        
        
        
        
        //conseguir el objeto imagen
        $cliente = Cliente::find($cliente_id);
        $suma=0;
        
        
        
        
       
            foreach($cliente->Interes as $inte){
                 if( $inte->estado == 'Incompleto'){
                      $suma += $Interes->interes;       
            
                 }
                 
                 
            }
            
            
         $cliente->deuda_total_intereses = $suma;
            
       
      
        if($veces_interes >= 3){
            
            $cliente->estado = 'Deudor';
            
        }
        
        
       
        
        
        
        
        
        
        
        
       
        
        
      
        
        $cliente->update();
        
        
        
        
        
        
        
      
        
        return redirect()->route('dashboard')->with([
                    'message' => 'El Usuario ha sido subido correctamente'
        ]);
    
        
    }
    
    
    public function delete($id){
        
       
        $user = \Auth::user();
        
        $interes = Interes::find($id);

        $cliente = Cliente::find($interes->cliente_id);
        
        
        $deuda = 0;
        
        if ($interes && ($cliente->id == $interes->cliente_id)) {
           
            if($interes->estado == 'Incompleto'){
                $deuda = $interes->interes;
            
                 $deuda_total = $cliente->deuda_total_intereses - $deuda;
            
                $cliente->deuda_total_intereses = $deuda_total;
            
                 $cliente->update();
            }
            
            
            
            
            
            $interes->delete();
            
            
             
             
             
             return redirect()->route('interes')->with([
                    'message' => 'El interes ha sido eliminado correctamente'
            ]);
             
             
           
            
            
        } else{
            
             return redirect()->route('interes')->with([
                    'message' => 'El interes no ha sido eliminado correctamente'
                 ]);
             
             
             
        }
            
            
       
        
        }
        
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

