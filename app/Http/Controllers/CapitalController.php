<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capital;
use App\Models\Cliente;

class CapitalController extends Controller {

    public function __construct() {

        $this->middleware('auth');
    }
    
     public function index(){
        $user = \Auth::user();
        $capital = Capital::All();
        
        
        
        return view('capital',[
            'capital' => $capital
        ]);
    }
    
    
    
    
    

    public function add($id) {
        $user = \Auth::user();
        $cliente = Cliente::find($id);

        if ($user && $cliente && $cliente->user_id == $user->id) {


            return view('capital.add', [
                'cliente' => $cliente
            ]);
        } else {
            $message = array('message' => 'el cliente no se puede editar');
        }

        return redirect()->route('dashboard')->with($message);
    }

    public function save(Request $request) {


        $cliente_id = $request->input('cliente_id');
        $pago = $request->input('pago');

        $cliente = Cliente::find($cliente_id);
        $capital = new Capital();

        $resultado = (int) $cliente->capital - (int) $pago;
        $interes = $resultado * 0.1;

        if ($resultado > 0) {

            $capital->cliente_id = (int) $cliente_id;
            $capital->pago = (int) $pago;

            $cliente->capital = $resultado;
            $cliente->interes = (float) $interes;

            $cliente->update();

            $capital->save();

            return redirect()->route('dashboard')->with([
                        'message' => 'El Capital fue subido correctamente'
            ]);
        } else {
            return redirect()->route('dashboard')->with([
                        'message' => 'El Capital no pudo ser subido correctamente'
            ]);
        }
    }
    
    
    public function delete($id){
        
       
        $user = \Auth::user();
        
        $capital = Capital::find($id);

        $cliente = Cliente::find($capital->cliente_id);
        
        
        $pago = 0;
        
        if ($capital && ($cliente->id == $capital->cliente_id)) {
           
            $pago = $capital->pago;
            
            $pago_total = $cliente->capital + $pago;
            
            $cliente->capital = $pago_total;
            
            $cliente->update();
            
            
            
            $capital->delete();
            
            
             
             
             
             return redirect()->route('capital')->with([
                    'message' => 'El capital ha sido eliminado correctamente'
            ]);
             
             
           
            
            
        } else{
            
             return redirect()->route('capital')->with([
                    'message' => 'El capital no ha sido eliminado correctamente'
                 ]);
             
             
             
        }
            
            
       
        
        }
        
        
        
        
        

}
