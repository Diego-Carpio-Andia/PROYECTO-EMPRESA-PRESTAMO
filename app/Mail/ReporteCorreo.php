<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

//MODELOS A UTILIZAR
use App\Models\Interes;
use App\Models\Capital;
use App\Models\Historial;
use App\Models\Cliente;

class ReporteCorreo extends Mailable {

    use Queueable,
        SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope() {
        return new Envelope(
                subject: 'Reporte Mensual Wasicash',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content() {  
        
     
        // Obtener la fecha actual del mes
        $fechaActual = Carbon::now()->format('Y-m');

        // Obtener los intereses del mes actual y que estén en estado "Completo"
        $intereses = Interes::where('estado', 'Completo')
                            ->whereRaw("DATE_FORMAT(created_at, '%Y-%m') = '{$fechaActual}'")
                            ->get();
                            
        // Calcular la suma de los intereses
        $sumaIntereses = $intereses->sum('interes');
        

        
        // Obtener los pagos del mes actual
        $pagos = Capital::whereRaw("DATE_FORMAT(created_at, '%Y-%m') = '{$fechaActual}'")
                        ->get();

        // Calcular la suma de los pagos
        $sumaPagos = $pagos->sum('pago');
        
        
         // Obtener el número de clientes creados este mes
        $clientesEsteMes = Cliente::whereRaw("DATE_FORMAT(created_at, '%Y-%m') = '{$fechaActual}'")
                              ->count();
    
        // Obtener el número de clientes con estado "Deudor" este mes
        $clientesDeudoresEsteMes = Cliente::where('estado', 'Deudor')
                                      ->whereRaw("DATE_FORMAT(created_at, '%Y-%m') = '{$fechaActual}'")
                                      ->count();    
    
        // Obtener la suma de la columna deuda_total_intereses de los clientes deudores
        $perdidaInteresesTotal = Cliente::where('estado', 'Deudor')
                                      ->whereNotNull('deuda_total_intereses')
                                      ->where('deuda_total_intereses', '!=', 0)
                                      ->whereRaw("DATE_FORMAT(created_at, '%Y-%m') = '{$fechaActual}'")
                                      ->sum('deuda_total_intereses');                              

                                      
        // Obtener los clientes con estado "Deudor" este mes
        $clientesEstadoDeudoresEsteMes = Cliente::where('estado', 'Deudor')
                                      ->whereRaw("DATE_FORMAT(created_at, '%Y-%m') = '{$fechaActual}'")
                                      ->get();

        // Obtener los clientes con estado "Pendiente" este mes
        $clientesEstadoPendientesEsteMes = Cliente::where('estado', 'Pendiente')
                                        ->whereRaw("DATE_FORMAT(created_at, '%Y-%m') = '{$fechaActual}'")
                                        ->get();

                                        
        // Supongamos que tienes una variable llamada $data con información que deseas pasar a la vista.
        $data = [         
            'SumaInteres' => $sumaIntereses,
            'SumPagos' => $sumaPagos,
            'clientesEsteMes' => $clientesEsteMes,
            'clientesDeudoresEsteMes' => $clientesDeudoresEsteMes,
            'perdidaInteresesTotal' => $perdidaInteresesTotal,
            'ClientesDeudores' => $clientesEstadoDeudoresEsteMes,
            'ClientesPendientes' => $clientesEstadoPendientesEsteMes
            
        ];

        // Utiliza el método 'view' para pasar la variable $data a la vista.
        return (new Content('mails.reporte'))
            ->with(['data' => $data]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments() {
        return [];
    }
}
