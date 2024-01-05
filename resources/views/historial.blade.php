

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
      border: 1px solid white;
      font-weight:normal;
      background-color: #e8f3ff;
      text-align: center;
    }

    th {
      background-color: #007bff;
      color: #fff;
      border: 1px solid white;
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
            HISTORIAL DE TODOS LOS CLIENTES
        </div>
        </h1>
       @include('includes.message')
     
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Historial
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
                            <th>Fecha</th>
                            <th>
                                Eliminar
                            </th>
                            
                           
                        </tr>
                    </thead>
                  
                    
                    <tbody>

                        @foreach($historial as $histo)
                        <tr>
                            <td>{{$histo->id}}</td>
                            <td>{{$histo->surname.' '.$histo->name}}</td>
                            <td>{{$histo->dni}}</td>                            
                            <td>{{$histo->capital}}</td>                            
                            <td>{{$histo->created_at->format('d-m-Y')}}</td>
                            
                            <td class="iconos-tabla">
                                 <a href="{{ route('historial.delete',['id' => $histo->id])}}">
                                     <img src="{{ asset('assets/img/Project/eliminar.png') }}" alt="Eliminar historial"/><!-- eliminar -->
                                </a>
                            </td>
                            
                    
                    
                      
                           
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>


            </div>









        </div>


         <!-- Agrega esto al final de la vista -->
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










