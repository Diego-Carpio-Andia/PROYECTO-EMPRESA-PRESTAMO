




<link href="{{ asset('css/general.css') }}" rel="stylesheet">


@extends('layouts.dashboard-header')

@section('content')

<style>
    
    
 body {
  font-family: "Times New Roman", Times, serif;
  text-transform: uppercase;
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

p, span, a {
  font-family: "Times New Roman", Times, serif;
  text-transform: uppercase;
}



        
    
    
    

  
    
    
    
    table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ccc;
    }
  
    th, td {
      padding: 8px;
      text-align: left;
      border: 1px solid #ccc;
      font-weight:normal;
       text-align: center;
    }

    th {
      background-color: #007bff;
      color: #fff;
      border: 1px solid #ccc;
      font-weight:normal;
      text-align: center;
    }

   
    tbody td{
      background-color: #e8f3ff; /* Color azul claro o celeste */
      color: black;
      border: 1px solid white;
    }
    
    .iconos-tabla a{
        text-align: center;
        text-decoration: none;
    }
    .iconos-tabla{
        margin: 0px auto;
        text-align: center;
    }


    
   .dashboard-container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 35px;
}

.dashboard {
  width: 50%;
  background-color: white;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  padding: 20px;
  border-radius: 5px;
  box-sizing: border-box;
  text-align: center;
  margin: 20px;
   
}



.dashboard h2 {
  font-size: 18px;
  margin: 0;
  padding: 0;
}

.dashboard p {
  margin-top: 10px;
}

.card {
  border: none;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
}

.card-header {
  border-radius: 5px 5px 0 0;
}

.card-body {
  padding: 20px;
}

.container-1{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}


.container-1 input#searchTerm{
  width: 100%;
  height: 40px;
  background: #e8f3ff;
  
  border: none;
  font-size: 10pt;
  float: left;
  color: black;
  font-size: 15px;
  padding: 0px;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  outline: none;
  border: 2px solid #007bff;
  margin-bottom: 20px;
  
}


.container-1 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 13px;
  z-index: 1;
  color: #4f5b66;
}

.container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
    outline:none;
    background: #ffffff;
  }
  
  
  
   /* Estilos para el popup */
        .popup-btn {
            padding: 10px 20px;
            border: none;
            width: 20%;
            margin: 0px auto;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 9999;
        }

        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding-top: 20px;
            padding-bottom: 72px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            width: 900px;
        }

        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
            z-index: 100;
        }
  
        
       
        
        .hacertransaprent{
              /* Establecer el color base */
            background-color: rgba(0, 123, 255, 0.7); /* RGB con transparencia del 70% */

            /* Crear el degradado */
            background-image: linear-gradient(90deg, rgba(0, 123, 255, 0.7), #a5d8ff); /* Desvanecimiento a un tono de azul más claro (#a5d8ff) */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }


</style>    

<main>
    <div class="container-fluid px-4 titulaso-pingaso">
        <h1 class="mt-4">
            <div class="titulo-buenaso">
            DETALLE DE LOS CLIENTES
        </div>
        </h1>
            @include('includes.message')
        
        
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card hacertransaprent text-white mb-4">
                    <div class="card-body">CLIENTES PUNTUALES</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('cliente.puntual')}}">VER DETALLES</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            
            
            
            <div class="col-xl-3 col-md-6">
                <div class="card  hacertransaprent text-white mb-4">
                    <div class="card-body">CLIENTES CON MULTIRED</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('cliente.multired')}}">VER DETALLES</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card hacertransaprent text-white mb-4">
                    <div class="card-body">CLIENTES CON DEUDA ALTA</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('cliente.deuda_alta')}}">VER DETALLES</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card hacertransaprent text-white mb-4">
                    <div class="card-body">CLIENTES MOROSOS</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('cliente.moroso')}}">VER DETALLES</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
            
            <?php
                            $clientes_num = 0;
                            $capital_total = 0;
                            $capital_total_soles = 0;
                            $capital_total_dolares = 0;
                            $usuarios_clave = 0;
                            $pendiente = 0;
                            $deudor = 0;
                            $cancelado = 0;
                            
                            foreach($clientes as $cliente){
                                if($cliente->estado == 'Deudor' || $cliente->estado == 'Pendiente'){
                                    $clientes_num++; 
                                    
                                    if($cliente->descripcion == 'Pago en soles'){
                                        $capital_total_soles += $cliente->capital;
                                    }
                                    
                                    if($cliente->descripcion =='Pago en dolares'){
                                        $capital_total_dolares += $cliente->capital;
                                    }
                                    
                                }
                                
                                if($cliente->clave){
                                    $usuarios_clave++;
                                }
                                if($cliente->estado == 'Pendiente'){
                                    $pendiente++;
                                }
                                if($cliente->estado == 'Deudor'){
                                    $deudor++;
                                }
                                if($cliente->estado == 'Cancelado'){
                                    $cancelado++;
                                }
                                
                            }
                        ?>
            
            
        <div class="row">
         
            
              <div class="dashboard-container">
                            <div class="dashboard">
                              <h2>Total de clientes</h2>
                              <p>{{$clientes_num}}</p>
                            </div>
                            <div class="dashboard">                                
                              <h2>Capital total de la empresa</h2>
                             
                              @if($capital_total_soles || $capital_total_dolares)
                              <p>{{'S/. ' . $capital_total_soles.' - '.'$ ' . $capital_total_dolares}}</p>                                
                              @else
                              <p>0</p>
                              @endif                              
                              
                              
                            
                              
                              
                            </div>
                            <div class="dashboard">
                              <h2>Clientes en estado pendiente</h2>
                              <p>{{$pendiente}}</p>
                            </div>
                            <div class="dashboard">
                              <h2>Clientes morosos</h2>
                              <p>{{$deudor}}</p>
                            </div>
                        </div>
            
            
           
            
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Clientes
            </div>
            <div class="card-body">


               
                <form>                    
                    <div class="box">
                        <div class="container-1">
                            <span class="icon"><i class="fa fa-search"></i></span>
                            <input id="searchTerm" type="text" onkeyup="doSearch()" />
                        </div>
                    </div> 
                    
                   
                </form>

                
                    <table id="datos">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>DNI</th>
                                <th>Capital</th>
                                <th>Interes</th>
                                <th>Clave</th>
                                <th>Sueldo</th>
                                <th>Estado</th>
                                <th>Deuda Total Intereses</th>
                                <th>descripcion</th>
                                <th>fecha</th>
                                <th>Utilidades</th>
                            </tr>
                        </thead>
                    
                        
                        <tbody>

                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->surname.' '.$cliente->name}}</td>
                                <td>{{$cliente->dni}}</td>


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
                                
                                @if($cliente->clave == 0)
                                <td>No tiene</td>
                                @else
                                <td>{{$cliente->clave}}</td>
                                @endif
                                <td>{{$cliente->sueldo}}</td>
                                <td>{{$cliente->estado}}</td>
                                @if($cliente->deuda_total_intereses == 0)
                                <td>El cliente no presenta deuda</td>
                                @else
                                <td>{{$cliente->deuda_total_intereses}}</td>
                                @endif
                                
                               
                                <td>{{$cliente->descripcion}}</td>
                              
                                
                                <td>{{$cliente->created_at->format('d-m-Y')}}
                                </td>
                                <td class="iconos-tabla">

                                    
                                          <a href="{{route('cliente.delete',['id' => $cliente->id])}}">
                                       
                                            <img src="{{ asset('assets/img/Project/eliminar.png') }}" alt="Eliminar el cliente"/><!-- eliminar -->
                                        </a>

                                        <a href="{{route('cliente.edit',['id' => $cliente->id])}}">
                                            <img src="{{ asset('assets/img/Project/editar.png') }}" alt="Editar al cliente"/><!-- editar -->
                                        </a>

                                        <a href="{{route('interes.add',['id' => $cliente->id])}}">
                                            <img src="{{ asset('assets/img/Project/tasa-de-interes-flotante.png') }}" alt="Generar interes del cliente"/><!-- interes -->
                                        </a>

                                        <a href="{{route('capital.add',['id' => $cliente->id])}}">
                                            <img  src="{{ asset('assets/img/Project/capital.png') }}" alt="Generar capital del cliente"/><!-- Capital -->
                                        </a>
                                        <a href="{{route('cliente.vista_pdf',['id' => $cliente->id])}}">
                                            <img src="{{ asset('assets/img/Project/pdf.png') }}" alt="Generar pdf"/><!-- generar pdf -->
                                        </a>
                                    
                                          <a href="{{route('facturas.add',['id' => $cliente->id])}}">
                                            <img src="{{ asset('assets/img/Project/factura.png') }}" alt="Generar factura"/><!-- generar factura -->
                                        </a>
                                 
                                 
                                        <a href="{{route('facturas.list',['id' => $cliente->id])}}">
                                            <img src="{{ asset('assets/img/Project/ojo.png') }}" alt="Ver facturas"/><!-- ver facturas -->
                                        </a>

                                </td>
                            </tr>
                            
                           
            
            
                            @endforeach
                      
            
                        </tbody>
                    </table>

            </div>

        </div>

        <style>
            .meterpadding{
                margin-bottom: 50px;
            }
        </style>
        
         
      
        <style>
            .flex-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        </style>
        
       <div class="flex-container">
           <form action="{{ route('reporte') }}" method="POST">
                @csrf
                <button class="btn btn-danger btn-md" type="submit">ENVIAR REPORTE</button>
            </form>         
           
            <button id="btnAbrirPopup" class="btn btn-primary btn-md">Agregar Cliente</button>
            
       </div>

        
        
   


        <div class="popup" id="popupAgregar"><div class="popup-content">
            <!-- Botón para cerrar el popup -->
            <span class="popup-close" id="popupCerrar"><img src="{{ asset('assets/img/Project/cerrar.png') }}"/></span>
            @include('cliente.add')</div>
        </div>
         
        
   
        
        
        
        
        
       <!-- Agrega esto al final de la vista -->
        <script>
           
                
                
                var btnAbrirPopup = document.getElementById('btnAbrirPopup');
               var popupAgregar = document.getElementById('popupAgregar');
               var popupCerrar = document.getElementById('popupCerrar');
               
               
              




               // Mostrar el popup cuando se haga clic en el botón
               btnAbrirPopup.addEventListener('click', function () {
                   popupAgregar.style.display = 'block';                  
               });               
              

               // Ocultar el popup cuando se haga clic en el botón de cerrar
               popupCerrar.addEventListener('click', function () {
                   popupAgregar.style.display = 'none';                
               });
              


            
    
        function doSearch(){

            const tableReg = document.getElementById('datos');
            const searchText = document.getElementById('searchTerm').value.toLowerCase();
            
     
            
            let total = 0;

 

            // Recorremos todas las filas con contenido de la tabla

            for (let i = 1; i < tableReg.rows.length; i++) {

                // Si el td tiene la clase "noSearch" no se busca en su cntenido

                if (tableReg.rows[i].classList.contains("noSearch")) {

                    continue;

                }

 

                let found = false;

                const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

                // Recorremos todas las celdas

                for (let j = 0; j < cellsOfRow.length && !found; j++) {

                    const compareWith = cellsOfRow[j].innerHTML.toLowerCase();

                    // Buscamos el texto en el contenido de la celda

                    if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {

                        found = true;

                        total++;

                    }

                }

                if (found) {

                    tableReg.rows[i].style.display = '';

                } else {

                    // si no ha encontrado ninguna coincidencia, esconde la

                    // fila de la tabla

                    tableReg.rows[i].style.display = 'none';

                }

            }

 

           

        }
        </script>

       
        
        
          
            


    </div>
</main>







@endsection














