<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//MODELOS A UTILIZAR
use App\Models\Interes;
use App\Models\Capital;
use App\Models\Historial;
use App\Models\Cliente;
use App\Models\Factura;


//SUBIR ARCHIVO
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;






// FUENTE => https://packagist.org/packages/thiagoalessio/tesseract_ocr
// use thiagoalessio\TesseractOCR\TesseractOCR;



class FacturasController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }
    
    
    
    public function index(){         
        
        $clientes = Cliente::All();       
        $facturas = Factura::All();         


        
        return view('facturas',[
            'clientes' => $clientes,
            'facturas' => $facturas
        ]);
    }
    
     public function add($id) {
        $user = \Auth::user();
        $cliente = Cliente::find($id);

        if ($user && $cliente && $cliente->user_id == $user->id) {


            return view('facturas.add', [
                'cliente' => $cliente
            ]);
        } else {
            $message = array('message' => 'hubo un error');
        }

        return redirect()->route('dashboard')->with($message);
    }
    
    
    
    public function save(Request $request)
    {    
           
        $Factura = new Factura();    
        
         
        $cliente_id = $request->input('cliente_id');
        
        $CuentaOrigen = $request->input('CuentaOrigen');
        $CuentaDestino = $request->input('CuentaDestino');
        $TitularDestino = $request->input('TitularDestino');
        $NOperacion = $request->input('NOperacion');
        $Descripcion = $request->input('Descripcion');
        $TipoBanco = $request->input('TipoBanco');
        $Fecha = $request->input('Fecha');
        $Importe = $request->input('Importe');
        
      
        $image_path = $request->file('image');

        
        //subir fichero 
        if ($image_path) {
            $image_path_name = time() .' - '. $image_path->getClientOriginalName();
            //File::get($imagen_path) lo mueve y guarda dentro de la carpeta images
            Storage::disk('facturas')->put($image_path_name, File::get($image_path));

            $Factura->imagen = $image_path_name;
        }

        $Factura->cliente_id = (int) $cliente_id;     
        
        $Factura->CuentaOrigen =  $CuentaOrigen;
        $Factura->CuentaDestino =  $CuentaDestino;
        $Factura->TitularCuentaDestino =  $TitularDestino;
        $Factura->ImporteTransferencia =  $Importe;
        $Factura->NOperacion =  $NOperacion;
        $Factura->Descripcion =  $Descripcion;
        $Factura->Banco =  $TipoBanco;
        $Factura->created_at =  $Fecha;
        
        $Factura->save();  
        
        return redirect()->route('dashboard')->with([
                    'message' => 'La factura ha sido subida correctamente'
        ]);
        
       
    }
    
    
    public function list($id)
    {
        $cliente = Cliente::find($id);
        $facturas = $cliente->Factura; // Esto devolvería una colección de todas las facturas asociadas con el cliente.
        
        return view('facturas.list', [
            'facturas' => $facturas,
            'cliente' => $cliente
        ]);
    }
    
    
    public function search(Request $request,$id)
    {
        $query = $request->input('query');
        // Filtrar las facturas por el importe de transferencia o el titular de la cuenta destino que contenga el texto de búsqueda
        $facturas = Factura::where('ImporteTransferencia', 'LIKE', "%$query%")
            ->orWhere('TitularCuentaDestino', 'LIKE', "%$query%")
            ->get();

        $cliente = Cliente::find($id);
        
        return view('facturas.list', [
            'facturas' => $facturas,
            'cliente' => $cliente
                
        ]);
    }
    
    
    
     public function getImage($filename) {
        //sacamos el nombre del imagen para compararlo con la db y
        //sacamos la imagen que vendra por la url y 
        // tambien obtenemos la imagen mediante ->get de nuestra carpeta
        //de archivos images , luego retornamos un codigo 200 de que todo salio bien
        $file = Storage::disk('facturas')->get($filename);
        return new Response($file, 200);
    }
    
    
    public function delete($id){ 
        $factura = Factura::find($id);
        
        
        $rutaImagen = 'facturas/' . $factura->imagen;
       
        
        if ($factura) {
            
            
            if (Storage::exists($rutaImagen)) {
                Storage::delete($rutaImagen);
            } 
                
                
            
            $factura->delete();            
            return redirect()->route('facturas')->with([
                'message' => 'La factura ha sido eliminada correctamente'
            ]);
            
        } else{
            
            return redirect()->route('facturas')->with([
                'message' => 'El factura no se ha podido eliminar'
            ]);
            
        }         
             
    }
    

    
   
    
    
    
    
}
