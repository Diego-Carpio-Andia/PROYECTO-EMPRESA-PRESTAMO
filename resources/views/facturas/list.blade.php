
@extends('layouts.dashboard-header')

@section('content')

 <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: start;
            margin: 20px auto;
            width: 100%;
            max-width: 1200px; /* Establecer un ancho máximo para evitar que las cards se extiendan demasiado */
        }

        .card {
            flex: 0 0 calc(33.33% - 20px); /* 3 cards por ancho de pantalla con margen de 20px entre ellas */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            margin: 10px; /* Agregar margen para espaciar las cards */
            overflow: hidden;
        }

        .card-img {
            height: 80%;
            background-color: #f8f8f8; /* Color de fondo de la imagen */
            /* Puedes añadir una imagen de fondo en lugar del color de fondo */
        }

        .card-content {
            padding: 10px;
            text-align: center;
        }

        h2 {
            margin-top: 10px;
        }

        p {
            margin-top: 5px;
            font-size: 14px;
        }
        
        
         .card-img img{
             width: 100%;
             max-width: 500px;
             max-height: 350px;
         }
         
         h1, h2, h3, h4, h5, h6 {
            font-family: "Times New Roman", Times, serif;
            text-transform: uppercase;
          }

          h1{
            font-size: 40px; 
            line-height: 1.6;  
            font-style: normal; 
            font-weight: bold; 
            letter-spacing: 2px; 
            text-align: center;
            color: midnightblue;
            text-shadow: 1px 1px 2px black;
          }

          .centrar-texto{         
               width: 100%;
          }
          
          .boton-list-facturas{
              width: 100%;
          }
    </style>
    
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   


<div class="container">
    
    <!--assset() => naturalmente accede solo a la carpeta public para 
        poder acceder a la carpeta storage se necesita agregar el comando php artisan storage:link
    -->
    
    <div class="centrar-texto">
         <h1>LISTA DE PAGOS DEL CLIENTE</h1>
    </div>
    
    <div class="boton-list-facturas d-flex justify-content-end mt-3 mb-3">
    <!-- Agrega el formulario de búsqueda aquí -->
        <form action="{{ route('facturas.search',['id' => $cliente->id]) }}" method="GET" class="mt-3 mb-3">
            @csrf
            <div class="input-group">
                <input size="35" type="text" name="query" class="form-control" placeholder="Buscar por importe o titular de cuenta destino">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary btn-lg">Buscar</button>
                </div>
            </div>
        </form>
    </div>
    
   

    @foreach($facturas as $factura)
    <div class="card">
        <div class="card-img">
           <a href="#" data-toggle="modal" data-target="#myModal{{$factura->id}}">
                     <img src="{{ route('facturas.getImage', ['filename' => $factura->imagen]) }}"/>
            </a>
        
        </div>  
        <div class="card-content">
            <h5>Importe del cliente: <strong>{{$factura->ImporteTransferencia}}</strong></h5>
          <p>Pago del cliente <strong>{{$cliente->name.' '.$cliente->surname}}</strong> a nombre de <strong>{{$factura->TitularCuentaDestino}}</strong> </p>
        </div>
    </div> 
    
    
       <!-- Modal -->
        <div class="modal fade" id="myModal{{$factura->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-md"> <!-- Add 'modal-lg' class here -->
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="{{ route('facturas.getImage', ['filename' => $factura->imagen]) }}" class="img-fluid w-100" /> <!-- Add 'w-100' class here -->
                    </div>
                </div>
            </div>
        </div>
    
    
    @endforeach
    
    
</div>
    
    
    
    


@endsection