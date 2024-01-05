

<link href="{{ asset('css/general.css') }}" rel="stylesheet">



@extends('layouts.dashboard-header')

@section('content')

<style>
   .titulo-buenaso{
        width: 100%;
        margin: 0px auto;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 20px;
        
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
       
        
        <?php
        $date = new \Carbon\Carbon();

        $intereses = 0;
        $año = 0;
        $final_enero = 0;
        $final_febrero = 0;
        $final_marzo = 0;
        $final_abril = 0;
        $final_mayo = 0;
        $final_junio = 0;
        $final_julio = 0;
        $final_agosto = 0;
        $final_septiembre = 0;
        $final_octubre = 0;
        $final_noviembre = 0;
        $final_diciembre = 0;

        foreach ($capital as $intere) {

            $intereses_date = $intere->created_at;
            $intereses += $intere->pago;

            if ($date->format('y') == $intereses_date->format('y')) {
                $año += $intere->pago;
            }


            if ($date->format('m') == $intereses_date->format('m') && $date->format('m') == '01' && $intereses_date->format('m') == '01') {
                $final_enero += $intere->pago;
            }
            if ($date->format('m') == $intereses_date->format('m') && $date->format('m') == '02' && $intereses_date->format('m') == '02') {
                $final_febrero += $intere->pago;
            }
            if ($date->format('m') == $intereses_date->format('m') && $date->format('m') == '03' && $intereses_date->format('m') == '03') {
                $final_marzo += $intere->pago;
            }
            if ($date->format('m') == $intereses_date->format('m') && $date->format('m') == '04' && $intereses_date->format('m') == '04') {
                $final_abril += $intere->pago;
            }
            if ($date->format('m') == $intereses_date->format('m') && $date->format('m') == '05' && $intereses_date->format('m') == '05') {
                $final_mayo += $intere->pago;
            }
            if ($date->format('m') == $intereses_date->format('m') && $date->format('m') == '06' && $intereses_date->format('m') == '06') {
                $final_junio += $intere->pago;
            }
            if ($date->format('m') == $intereses_date->format('m') && $date->format('m') == '07' && $intereses_date->format('m') == '07') {
                $final_julio += $intere->pago;
            }
            if ($date->format('m') == $intereses_date->format('m') && $date->format('m') == '08' && $intereses_date->format('m') == '08') {
                $final_agosto += $intere->pago;
            }
            if ($date->format('m') == $intereses_date->format('m') && $date->format('m') == '09' && $intereses_date->format('m') == '09') {
                $final_septiembre += $intere->pago;
            }
            if ($date->format('m') == $intereses_date->format('m') && $date->format('m') == '10' && $intereses_date->format('m') == '10') {
                $final_octubre += $intere->pago;
            }
            if ($date->format('m') == $intereses_date->format('m') && $date->format('m') == '11' && $intereses_date->format('m') == '11') {
                $final_noviembre += $intere->pago;
            }
            if ($date->format('m') == $intereses_date->format('m') && $date->format('m') == '12' && $intereses_date->format('m') == '12') {
                $final_diciembre += $intere->pago;
            }
        }
        ?>
        @include('includes.message')
            <style>
                .meses-buenos .iconos{
                    display:block;
                    float:left;

                    width: 50%;

                }
            </style>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


        <div class="row">
         
    
            
            
            <div style='margin-bottom: 50px; margin-top: 30px;' class="col-12">
                <div class="card mb-12">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Detalle del Capital pagado
                    </div>
                    <div class="card-body">
                               <div>
                            <canvas id="myChart"></canvas>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            
        </div>


        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Capital
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
                            <th>Pago</th>
                            <th>Cliente</th>
                            <th>Fecha</th>
                            
                            <th>Eliminar</th>

                        </tr>
                    </thead>
                  

                    <tbody>

                        @foreach($capital as $capi)
                        <tr>
                            <td>{{$capi->id}}</td>
                            <td>{{$capi->pago}}</td>                            
                            <td>{{$capi->Cliente->surname.' '.$capi->Cliente->name}}</td>
                            <td>{{$capi->created_at->format('d-m-Y')}}</td>
                           

                            <td class="iconos-tabla">

                                <a href="{{ route('capital.delete',['id' => $capi->id])}}">
                                    <img src="{{ asset('assets/img/Project/eliminar.png') }}" alt="Eliminar el capital"/><!-- eliminar -->
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

      
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
          label: 'Total pagos de todos los clientes: ' + {{$intereses}}+'           Total pagos de los clientes este año: '+ {{$año}},
          data: [{{$final_enero}}, 
              {{$final_febrero}}, 
              {{$final_marzo}}, 
              {{$final_abril}}, 
              {{$final_mayo}}, 
              {{$final_junio}},
              {{$final_julio}},
              {{$final_agosto}},
              {{$final_septiembre}},
              {{$final_octubre}},
              {{$final_noviembre}},
              {{$final_diciembre}}],

        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)',
            'rgba(255, 0, 0, 0.2)',
            'rgba(0, 255, 0, 0.2)',
            'rgba(0, 0, 255, 0.2)',
            'rgba(255, 255, 0, 0.2)',
            'rgba(255, 0, 255, 0.2)'
        ],
        borderColor: [
          'rgb(255, 99, 132)',
          'rgb(255, 159, 64)',
          'rgb(255, 205, 86)',
          'rgb(75, 192, 192)',
          'rgb(54, 162, 235)',
          'rgb(153, 102, 255)',
          'rgb(201, 203, 207)',
          'rgb(255, 0, 0)',
          'rgb(0, 255, 0)',
          'rgb(0, 0, 255)',
          'rgb(255, 255, 0)',
          'rgb(255, 0, 255)'
        ],

          borderWidth: 1
        }]
      },

      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });



</script>



</main>




@endsection














