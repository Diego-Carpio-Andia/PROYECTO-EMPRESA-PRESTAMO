
<style>
    body {
        margin: 0px auto;
        padding: 0px auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        margin: 12px;
        text-align: center;
        border-bottom: 1px solid #ccc;
    }

    th {
        background-color: #3366FF;
        color:white;
        
    }

    h1 {
        margin-bottom: 20px;
    }





    .reporte-total {
        display: flex;
        justify-content: start;
        align-items: center;
        flex-direction: column;
        padding-left: 0px;
        margin-left: 0px;

    }

    .reporte-total h4{
        width: 100%;
        text-align: start;
        color: black;
    }


    body {
        font-family: "Times New Roman", Times, serif;
        text-transform: uppercase;
    }

    h1, h2, h3, h4, h5, h6 {
        font-family: "Times New Roman", Times, serif;
        text-transform: uppercase;
    }

    p, span, a {
        font-family: "Times New Roman", Times, serif;
        text-transform: uppercase;
    }


    .table-container {
        display: flex;
        justify-content: center;
    }
    
  
        

.imagen-logo {
    display: flex;
    justify-content: center;
}

.imagen-logo img{
    width: 50%;
}






</style>




<div class="cuerpoEmail">

  
    <!--IMAGEN EN LINEA FACIL-->  

    <div class="imagen-logo">
            <img src="{{ $message->embed(asset('assets/wasicash.png')) }}">
    </div>
  
    <h1>Reporte del mes de junio 2023</h1>
    <div class="reporte-total">
        <h4>✔Interes generado este mes  S/. {{$data['SumaInteres']}}</h4>
        <h4>✔Capital generado este mes S/. {{$data['SumPagos']}}</h4>
        <h4>✔Clientes nuevos este mes {{$data['clientesEsteMes']}}</h4>
        <h4>✔Deuda atrasada este mes S/. {{$data['perdidaInteresesTotal']}}</h4>
        <h4>✔️Clientes morosos  {{$data['clientesDeudoresEsteMes']}}</h4>
    </div>        
</div>


<hr>


<h3>CLIENTES MOROSOS</h3>

<div class="table-container">
    <table>
        <tr>
            <th>NOMBRE</th>          
            <th>CAPITAL</th>
            <th>INTERES</th>         
            <th>ESTADO</th>
            <th>DEUDA</th>            
            <th>FECHA</th>

        </tr>
        <tr>
            @foreach ($data['ClientesDeudores'] as $cliente)
                    <tr>
                         
                         <td>{{$cliente->name.' '.$cliente->surname}}</td>


                         @if($cliente->descripcion == "Pago en soles")                                                              
                                <td>{{'S/. '.$cliente->capital}}</td>
                                <td>{{'S/. '.$cliente->interes}}</td>                                
                                @elseif($cliente->descripcion == "Pago en dolares")
                                <td>{{'$ '.$cliente->capital}}</td>
                                <td>{{'$ '.$cliente->interes}}</td>
                                @else
                                <td>{{$cliente->capital}}</td>
                                <td>{{$cliente->interes}}</td>
                                @endif
                                
                                <td>{{$cliente->estado}}</td>

                                
                                @if($cliente->deuda_total_intereses == 0)
                                <td>No tiene deuda</td>
                                @else
                                <td>{{$cliente->deuda_total_intereses}}</td>
                                @endif                                
                                
                               
                                <td>{{$cliente->created_at->format('d-m-Y')}}</td>
                    </tr>
            @endforeach
        </tr>
    </table>
</div>





<h3>CLIENTES PAGADORES</h3>

<div class="table-container">
    <table>
        <tr>
            <th>NOMBRE</th>          
            <th>CAPITAL</th>
            <th>INTERES</th>         
            <th>ESTADO</th>
            <th>DEUDA</th>            
            <th>FECHA</th>

        </tr>
        <tr>
            @foreach ($data['ClientesPendientes'] as $cliente)
                    <tr>
                         
                         <td>{{$cliente->name.' '.$cliente->surname}}</td>


                         @if($cliente->descripcion == "Pago en soles")                                                              
                                <td>{{'S/. '.$cliente->capital}}</td>
                                <td>{{'S/. '.$cliente->interes}}</td>                                
                                @elseif($cliente->descripcion == "Pago en dolares")
                                <td>{{'$ '.$cliente->capital}}</td>
                                <td>{{'$ '.$cliente->interes}}</td>
                                @else
                                <td>{{$cliente->capital}}</td>
                                <td>{{$cliente->interes}}</td>
                                @endif
                                
                                <td>{{$cliente->estado}}</td>

                                
                                @if($cliente->deuda_total_intereses == 0)
                                <td>No tiene deuda</td>
                                @else
                                <td>{{$cliente->deuda_total_intereses}}</td>
                                @endif                                
                                
                               
                                <td>{{$cliente->created_at->format('d-m-Y')}}</td>
                    </tr>
            @endforeach
        </tr>
    </table>
</div>








</div>