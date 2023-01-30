



<style>

    .meterpadding{
        margin-bottom: 50px;
        margin-right: 10%;
        margin-top: 100px;

    }


    .titulo-buenaso{
        width: 100%;
        margin: 0px auto;
        background-color: #223981;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 20px;

    }
    .titulaso-pingaso h2{
        color: white;
        display: block;
        text-align: center;

    }


    .titulo-buenaso{
        width: 100%;
        margin: 0px auto;
        background-color: #223981;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0px 0px 0px 5px #cccccc;


    }
    .titulaso-pingaso h3{
        color: white;
        display: block;
        text-align: center;


    }




    .tablaaa{
        float: left;
        width: 45%;
        padding-left: 4%;
       

    }


    .contenido-cliente p{
        font-size: 15px;
        font-weight: bold;
    }

    .mitadsito2{
        width: 100%;

    }
    
    .clearfix{
        content: "";
        clear: both;
        display: table;
    }
    
    .table{
        border-collapse: collapse;
        border-spacing: 120px;
        width: 100%;
        text-align: center;
         margin-left: 10px;
            
        
    }
    
    footer{
        margin-top: 160px;
        margin-left: 5%;
    }
    
    .titulo-buenaso2{
        width: 95%;
        margin-top: -35px;
        margin-left: 35px;
    }
    

</style>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />



        <title>Dashboard</title>

      


    </head>

    <body>






        <div class="container-fluid px-4 titulaso-pingaso titulopartido">

            <h2 class="mt-4 mitadsito2">
                <div class="titulo-buenaso titulo-buenaso2">
                    WASICASH GESTION
                </div>
            </h2>

            <div class="tablaaa">
                <h3 class="mt-4 mitadsito">
                    <div class="titulo-buenaso">
                        DATOS DEL CLIENTE
                    </div>
                </h3>
                
                
                

                <div class="contenido-cliente">
                    <p>
                        Nombre: {{$cliente->name.' '.$cliente->surname.'  con DNI: '.$cliente->dni}}

                    </p>

                    <hr><!-- comment -->



                    <p>
                        Capital del cliente: {{$cliente->capital}}

                    </p>

                    <hr>

                    <p>
                        Estado del prestamo: {{$cliente->estado}}

                    </p>
                    <hr>

                </div>


            </div>

            <div class="tablaaa">

                <h3 class="mt-4 mitadsito">
                    <div class="titulo-buenaso">
                        HISTORIAL DEL CLIENTE
                    </div>
                </h3>

                @if($cliente->historial->count() >= 1)

                <table border="1" class="table table-hover table-bordered ">
                    <thead class="thead-dark">
                        <tr>

                            <th scope="col">Nombre</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Capital</th>
                            <th scope="col">Fecha</th>

                        </tr>
                    </thead>
                    <tbody>


                        @foreach($historial as $histo)

                        @if($histo->dni == $cliente->dni)

                        <tr>

                            <th>{{$histo->surname.' '.$histo->name}}</th>
                            <th>{{$histo->dni}}</th>                            
                            <th>{{$histo->capital}}</th>                            
                            <th>{{$histo->created_at->format('d-m-Y')}}</th>







                        </tr>


                        @endif


                        @endforeach

                    </tbody>
                </table>

                @else

                <p class="mt-4 titulo-paraps">EL CLIENTE NO PRESENTA HISTORIAL DE DEUDAS</p>

                @endif



            </div>


            <div class="clearfix"></div>







            <div class="tablaaa">


                <h3 class="mt-4 mitadsito">
                    <div class="titulo-buenaso">
                        HISTORIAL DE INTERESES
                    </div>
                </h3>


                @if($cliente->Interes->count() >= 1)

                <table border="1" class="table table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>

                            <th scope="col">Intereses</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Fecha</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cliente->Interes as $intere)
                        <tr>

                            <th>{{$intere->interes}}</th>                            
                            <th>{{$intere->estado}}</th>                            
                            <th>{{$intere->Cliente->surname.' '.$intere->Cliente->name}}</th>
                            <th>{{$intere->created_at->format('d-m-Y')}}</th>



                        </tr>
                        @endforeach
                    </tbody>
                </table>


                @else

                <p class="mt-4 titulo-paraps">EL CLIENTE NO PRESENTA PAGOS EN EL INTERESES</p>

                @endif


            </div>





            <div class="tablaaa">


                <h3 class="mt-4 mitadsito">
                    <div class="titulo-buenaso">
                        HISTORIAL DE PAGOS
                    </div>
                </h3>


                @if($cliente->Capital->count() >= 1)



                <table border="1" class="table table-hover table-bordered">
                    <thead class="thead-dark">

                    <th scope="col">Pago</th>
                    <th scope="col">Cliente</th>
                    <th scope="col" >Fecha</th>


                    </thead>




                    <tbody>
                        @foreach($cliente->Capital as $capi)
                        <tr>
                            
                            <th>{{$capi->pago}}</th>                            
                            <th>{{$capi->Cliente->surname.' '.$capi->Cliente->name}}</th>
                            <th>{{$capi->created_at->format('d-m-Y')}}</th>




                        </tr>
                        @endforeach
                    </tbody>
                </table>


                @else

                <p class="mt-4 titulo-paraps">EL CLIENTE NO PRESENTA PAGOS EN EL CAPITAL</p>

                @endif


            </div>









        </div>


          <div class="clearfix"></div>




    </body>

    <footer>
        &copy; wasicash 2023
    </footer>



</html>




















<!--

<a href="{{route('cliente.download_pdf',['id' => $cliente->id])}}">
    click en tu culito bb
</a>
 
-->
















