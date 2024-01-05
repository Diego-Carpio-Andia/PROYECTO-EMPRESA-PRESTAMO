




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

p, span, a {
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
    
    
    table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ccc;
    }
  
    th, td {
    padding: 8px;
      text-align: left;
      background-color: #e8f3ff; 
      border: 1px solid white;
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

   
    tbody th{
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
  



</style>   

<main>
    <div class="container-fluid px-4 titulaso-pingaso">
        <h1 class="mt-4">
            <div class="titulo-buenaso">
            CLIENTES CON MULTIRED
        </div>
        </h1>
        
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
                <table  id="datos">
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
                            @if($cliente->clave != 0)
                            <td>{{$cliente->id}}</td>
                            <td>{{$cliente->surname.' '.$cliente->name}}</td>
                            <td>{{$cliente->dni}}</td>                    
                            <td>{{$cliente->capital}}</td>
                            <td>{{$cliente->interes}}</td>
                            <td>{{$cliente->clave}}</td>
                            <td>{{$cliente->sueldo}}</td>
                            <td>{{$cliente->estado}}</td>
                            @if($cliente->deuda_total_intereses == 0)
                            <td>El cliente no presenta deuda</td>
                            @else
                            <td>{{$cliente->deuda_total_intereses}}</td>
                            @endif
                            <td>{{$cliente->descripcion}}</td>
                            <td>{{$cliente->created_at->toDateString()}}</td>
                            <td class="iconos-tabla">
                                <div class="iconos-buenos">
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
                                            <img src="{{ asset('assets/img/Project/capital.png') }}" alt="Generar capital del cliente"/><!-- Capital -->
                                        </a>
                                        <a href="{{route('cliente.vista_pdf',['id' => $cliente->id])}}">
                                            <img src="{{ asset('assets/img/Project/pdf.png') }}" alt="Generar pdf"/><!-- generar pdf -->
                                        </a>
                                    
                                    
                                </div>

                            </td>
                            
                            @endif
                        </tr>
                        @endforeach
                        
                       
                         
                    </tbody>
                </table>


            </div>









        </div>


<script>
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














