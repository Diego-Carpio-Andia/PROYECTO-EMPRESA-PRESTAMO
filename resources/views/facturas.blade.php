    @extends('layouts.dashboard-header')

    @section('content')
    <style>
        /* Estilos para el popup */
        .popup-btn {
            background-color: #007BFF;
            color: #fff;
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
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
            z-index: 100;
        }

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
      margin-top: 10px;
      z-index: 1;
      color: #4f5b66;
    }

    .container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
        outline:none;
        background: #ffffff;
      }

      /* propiedad para expandir de acuerdo con los registros de una tabla "style="white-space: nowrap;"  "*/

        /* Estilo para la fila seleccionada */
          .fila-seleccionada td{
              background-color: #a0e5ff; /* Puedes cambiar el color de fondo que desees */
              cursor: pointer; /* Cambiar el cursor a una "manito" */
          }

          /* Estilo para la fila seleccionada al pasar el mouse */     
           .fila-hover td{
              background-color: #a0e5ff; /* Puedes cambiar el color de fondo que desees */
              cursor: pointer; /* Cambiar el cursor a una "manito" */
          }




    </style>
    
  
    
      <!-- Tabla de facturas  -->
            <div class="card m-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Facturas
                </div>
                <div class="card-body">

                <table id="datos">
                        <thead>
                            <tr>
                                <th>Cuenta Origen</th>
                                <th>Cuenta Destino</th>
                                <th>Titular Cuenta</th>
                                <th>Importe Transferencia</th>
                                <th>N° Operacion</th>
                                <th>Descripcion</th>
                                <th>Fecha</th>
                                <th>Imagen</th>                                
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                       
                    
                        
                        <tbody>

                            @foreach($facturas as $factura)
                            <tr>
                                <td>{{$factura->CuentaOrigen}}</td>
                                <td>{{$factura->CuentaDestino}}</td>
                                <td>{{$factura->TitularCuentaDestino}}</td>
                                <td>{{$factura->ImporteTransferencia}}</td>
                                <td>{{$factura->NOperacion}}</td>
                                <td>{{$factura->Descripcion}}</td>
                                <td>{{$factura->created_at}}</td>
                                <td>{{$factura->imagen}}</td>
                           
                                <td class="iconos-tabla">
                                    <a href="{{ route('facturas.delete',['id' => $factura->id])}}">
                                        <img src="{{ asset('assets/img/Project/eliminar.png') }}" alt="Eliminar facturas"/><!-- eliminar -->
                                    </a>
                                </td>
                            
                            </tr>
                            
                            @endforeach
                      
            
                        </tbody>
                    </table>   
                    </div>
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

    @endsection
