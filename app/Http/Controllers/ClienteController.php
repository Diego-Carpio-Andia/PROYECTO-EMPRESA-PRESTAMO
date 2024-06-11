<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Interes;

use App\Models\Capital;

use App\Models\Historial;

use App\Models\Factura;


//leer pdf 
use thiagoalessio\TesseractOCR\TesseractOCR;



//SUBIR ARCHIVO
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;


class ClienteController extends Controller
{
      public function __construct() {

        $this->middleware('auth');
    }
    
    
    public function vista_pdf($id){        
     
        
        $cliente = Cliente::find($id);
        
        $historial = Historial::All();
        
         return view('cliente.vista-pdf',[
            'cliente' => $cliente,
            'historial' => $historial,
        ]);
        
    }
    
     public function download_pdf($id){
        
         $cliente = Cliente::find($id);
         $historial = Historial::All();
        
      
        $pdf = Pdf::loadView('cliente.download-pdf',[
            'cliente' => $cliente,
            'historial' => $historial                
        ]);
        
        
        $fechaHora = date('d/m/Y H:i');
        $nombreArchivo = 'Datos del cliente '. $cliente->name .' '. $fechaHora . '.pdf'; // Concatena la fecha y hora al nombre del archivo
        $pdfGenerado = $pdf->setPaper('a4', 'portrait')->download($nombreArchivo); // Descarga el archivo con el nuevo nombre
        return  $pdfGenerado;
        
    }
    
     public function get($filename) {
        // Verificar si el archivo existe en el disco 'clientes'
        if (Storage::disk('clientes')->exists($filename)) {
            // Obtener el archivo del disco 'clientes'
            $file = Storage::disk('clientes')->get($filename);
            // Devolver el archivo con un código de respuesta 200
            return new Response($file, 200);
        } else {
            // Devolver una respuesta con un código de error 404 y un mensaje
            return response()->json(['error' => 'File not found'], 404);
        }
    }
    
    
    
    public function list()
    {
        $clientes = Cliente::All();        
        return view('cliente.list-pagos', [
            'clientes' => $clientes
                
        ]);
    }
    
    
    
    
    public function index(){
        $user = \Auth::user();
        $clientes = Cliente::where('user_id',$user->id)->orderBy('surname','asc')->paginate(100);
        
        
        
        return view('dashboard',[
            'clientes' => $clientes
        ]);
    }
    
    
    public function add(){
        return view('cliente.add');
    }
    
    
    public function save(Request $request){
        
        //nombres que te llegan desde el formulario
        $user = \Auth::user();
        
        $nombre = $request->input('name');
        $apellido = $request->input('surname');
        $dni = $request->input('dni');
        $capital = $request->input('capital');
        $interes = $request->input('interes');
        $clave = $request->input('clave');
        $sueldo = $request->input('sueldo');
        $estado = $request->input('estado');
        $descripcion = $request->input('descripcion');
        $fecha = $request->input('created_at');
        
        
        $cliente = new Cliente();
        $historial = new Historial();
        
        
       
        
        $cliente->name = $nombre;
        $cliente->surname = $apellido;
        $cliente->dni = $dni;
        $cliente->capital = (int) $capital;
        $cliente->interes = (float) ($interes/100)*$capital;
        $cliente->clave = (int) $clave;
        $cliente->sueldo = (int) $sueldo;
        $cliente->estado = $estado;
        $cliente->descripcion =  $descripcion;
        $cliente->user_id = $user->id;
        $cliente->created_at = $fecha;
        
          $image_path = $request->file('image');

         //subir fichero 
        if ($image_path) {
            $image_path_name = time() .' - '. $image_path->getClientOriginalName();
            //File::get($imagen_path) lo mueve y guarda dentro de la carpeta images
            Storage::disk('clientes')->put($image_path_name, File::get($image_path));

            $cliente->imagen = $image_path_name;
        }
        
       
        
        
        $cliente->save();
        
        
        $historial->cliente_id = $cliente->id;
        $historial->name = $nombre;
        $historial->surname = $apellido;
        $historial->dni = $dni;
        $historial->capital = (int) $capital;
        $historial->created_at = $fecha;
         
         
         
         
         
        $historial->save();
      
        
        return redirect()->route('dashboard')->with([
                    'message' => 'El Usuario ha sido subido correctamente'
        ]);
    

        


        
    }
    
    
    public function delete($id){
        
       
        $user = \Auth::user();

        $cliente = Cliente::find($id);
        
        
        $interes = Interes::where('cliente_id',$cliente->id)->get();
        
        $capital = Capital::where('cliente_id',$cliente->id)->get();
       
        
        $historial = Historial::where('cliente_id',$cliente->id)->get();
        
         $factura = Factura::where('cliente_id',$cliente->id)->get();
        
        
        if ($user && ($cliente->user_id == $user->id)) {
            
            if($interes && count($interes) >= 1){
                foreach($interes as $inte){
                    $inte->delete();
                }
                
            }
            
            if($capital && count($capital) >= 1){
                foreach($capital as $capi){
                    $capi->delete();
                }
            }
            
            
             if($factura && count($factura) >= 1){
                foreach($factura as $factu){
                    $factu->delete();
                }
            }
            
            
            
             if($historial){
                
                foreach($historial as $histo){
                    $histo->delete();
                }
                
                
                
             }
            
             
              
            
               
                
            $cliente->delete();
             
             
             
             return redirect()->route('dashboard')->with([
                    'message' => 'El Cliente ha sido eliminado correctamente'
            ]);
             
             
           
            
            
        } else{
            
             return redirect()->route('dashboard')->with([
                    'message' => 'El Cliente no ha sido eliminado correctamente'
        ]);
             
             
             
        }
            
            
       
        
        }
    
    
    
    
    
    public function edit($id) {
        $user = \Auth::user();
        $cliente = Cliente::find($id);


        if ($user && $cliente && $cliente->user_id == $user->id ) {


            return view('cliente.edit', [
                'cliente' => $cliente
            ]);
        } else {
            $message = array('message' => 'el cliente no se puede editar');
        }

        return redirect()->route('dashboard')->with($message);
    }
    
    
    
    
    public function update(Request $request) {
       
        //nombres que te llegan desde el formulario
        $user = \Auth::user();
        
        $cliente_id = $request->input('cliente_id');
        $nombre = $request->input('name');
        $apellido = $request->input('surname');
        $dni = $request->input('dni');
        $capital = $request->input('capital');
        $interes = $capital * 0.1;
        $clave = $request->input('clave');
        $sueldo = $request->input('sueldo');
        $estado = $request->input('estado');
        $descripcion = $request->input('descripcion');
        
        
        //conseguir el objeto imagen
        $cliente = Cliente::find($cliente_id);
        
        
        $cliente->name = $nombre;
        $cliente->surname = $apellido;
        $cliente->dni = $dni;
        $cliente->capital = (int) $capital;
        $cliente->interes = (float) $interes;
        $cliente->clave = (int) $clave;
        $cliente->sueldo = (int) $sueldo;
        $cliente->estado = $estado;
        $cliente->descripcion =  $descripcion;
        $cliente->user_id = $user->id;
        
        
        
        
        $cliente->update();
        
      
        
        return redirect()->route('dashboard')->with([
                    'message' => 'El Usuario ha sido editado correctamente'
        ]);
      
        
        
       
  
        
    }
    
    
    public function puntual(){
        $clientes = Cliente::All();
        $interes = Interes::where('estado', 'Completo')->get();
      
       return view('cliente.puntual',[
            'clientes' => $clientes,
            'interes' => $interes
        ]);
        
        
        
    }
    public function multired(){
        
        $clientes = Cliente::All();
        return view('cliente.multired',[
            'clientes' => $clientes
        ]);
        
    }
    public function deuda_alta(){
        $clientes = Cliente::All();
        return view('cliente.deuda_alta',[
            'clientes' => $clientes
        ]);
    }
    public function moroso(){
        
         $clientes = Cliente::All();
         $interes = Interes::where('estado', 'Incompleto')->get();
         
        
        
         return view('cliente.moroso',[
            'clientes' => $clientes,
            'interes' => $interes,
           
                 
        ]);
        
        
    }
    
    
    
    public function search(Request $request)
    {
    $query = $request->input('query');
    $capital = (float)$request->input('capital');
    $fecha = $request->input('fecha');

        // Filtrar los clientes por nombre o apellido que contenga el texto de búsqueda
        $clientes = Cliente::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'LIKE', "%$query%")
                ->orWhere('surname', 'LIKE', "%$query%");
        });

        // Filtrar por capital si se proporciona un valor
        if (!empty($capital)) {
            $clientes = $clientes->where('capital', '=', $capital);
        }

        // Filtrar por fecha si se proporciona una fecha válida
        if (!empty($fecha)) {
            try {
                $fecha = \Carbon\Carbon::createFromFormat('Y-m-d', $fecha);
                $clientes = $clientes->whereDate('created_at', '=', $fecha);
            } catch (\Exception $e) {
                // Si la fecha no se puede parsear, se ignora este filtro
            }
        }

        // Obtener los resultados finales
        $clientes = $clientes->get();

        return view('cliente.list-pagos', [
            'clientes' => $clientes
        ]);
    }

    
    
    
    
    
    
    
        
        
}