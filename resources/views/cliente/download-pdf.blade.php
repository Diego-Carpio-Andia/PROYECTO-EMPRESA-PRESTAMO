



<style>
    .report {
  margin: 20px auto;
  width: 600px;
  margin-top: 20px;
  font-family: Arial, sans-serif;
}

h2, h3 {
  text-align: center;
}

.client-info p {
  margin: 5px 0;
}

.table {
  margin-top: 20px;
  border: 1px solid white;
}

table {
  width: 100%;
  border-collapse: collapse;
}



.table thead tr th{
  background-color: #007bff;
  color: white;
  border: 1px solid white;
}



.cuerpo-tabla{
  background-color: #f2f2f2;
  border: 1px solid white;
}


.client-info{
    margin-top: 40px;
    margin-bottom: 40px;
}

.client-info strong{
    color: #007bff;
}


.imagen-logo {
    display: flex;
    justify-content: center;
}


.imagen-logo img{
    width: 40%;
    margin-bottom: 20px;
}

th{
    text-align: center;
}

td{
    text-align: center;
}


</style>


<!--IMAGEN EN LINEA FACIL-->
   


        <div class="report">
            
             <div style="display:flex; justify-content: center;" class="imagen-logo">
       <img src="{{ asset('assets/wasicash.png') }}">
    </div>
            
            
            <h2><strong>REPORTE DE CLIENTE</strong></h2>
            <div class="client-info">
                <p><strong>Nombre:</strong> [{{$cliente->name.' '.$cliente->surname}}]</p>
                <p><strong>DNI:</strong> [{{$cliente->dni}}]</p>
                <p><strong>Estado del préstamo:</strong> [{{$cliente->estado}}]</p>
            </div>




            @if($cliente->Interes->count() >= 1)
            <h3><strong>INTERESES REGISTRADOS</strong></h3>

            <table class="table">   
                <thead>
                    <tr>
                        <th>Intereses</th>
                        <th>Estado</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                    </tr>
                </thead>

                <tbody class="cuerpo-tabla">
                    @foreach($cliente->Interes as $intere)
                    <tr>
                        <td>{{$intere->interes}}</td>                            
                        <td>{{$intere->estado}}</td>                            
                        <td>{{$intere->Cliente->surname.' '.$intere->Cliente->name}}</td>
                        <td>{{$intere->created_at->format('d-m-Y')}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>        

            @else                
            <p>EL CLIENTE NO PRESENTA PAGOS EN EL INTERESES</p>            
            @endif



            @if($cliente->Capital->count() >= 1)
             <h3 style="margin-top: 60px;"><strong>CAPITAL REGISTRADO</strong></h3>     


            <table class="table">
                <thead style="background-color: #007bff; color: white;">
                    <th style=" border: 1px solid white; ">Capital</th>
                    <th style=" border: 1px solid white; ">Cliente</th>
                    <th style=" border: 1px solid white; ">Fecha</th>               
                </thead>                
                <tbody class="cuerpo-tabla">
                    @foreach($cliente->Capital as $capi)
                    <tr>                        
                        <td>{{$capi->pago}}</td>                            
                        <td>{{$capi->Cliente->surname.' '.$capi->Cliente->name}}</td>
                        <td>{{$capi->created_at->format('d-m-Y')}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>  
             
                <?php 
    
        $total = 0;
      foreach($cliente->Capital as $capi){
          $total += $capi->pago;
      }
      
      
    ?>
    
    <h5>SUMA TOTAL DEL CAPITAL: <strong>{{$total}}</strong> </h5>
    


             
             
            @else               
            <p>EL CLIENTE NO PRESENTA PAGOS EN EL CAPITAL</p>            
            @endif  
            
            
            
            <p style="margin-top: 50px; "><strong>&copy; wasicash 2023</strong></p>







        </div>

























<!--

<a href="{{route('cliente.download_pdf',['id' => $cliente->id])}}">
    click en tu culito bb
</a>
 
-->
















