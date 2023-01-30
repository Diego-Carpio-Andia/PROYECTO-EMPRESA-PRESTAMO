
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




<link href="{{ asset('css/general.css') }}" rel="stylesheet">


@extends('layouts.dashboard-header')

@section('content')

<style>
    .titulo-buenaso{
        width: 100%;
        margin: 0px auto;
        background-color: #223981;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 20px;

    }
    .titulaso-pingaso h1{
        color: white;
        display: block;
        text-align: center;

    }
</style>    









<style>
    .titulo-buenaso{
        width: 100%;
        margin: 0px auto;
        background-color: #223981;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0px 0px 0px 5px #cccccc;


    }
    .titulaso-pingaso h5{
        color: white;
        display: block;
        text-align: center;


    }




    .tablaaa{
        float: left;
        width: 45%;
        padding-left: 5%;

    }


    .contenido-cliente p{
        font-size: 20px;
        font-weight: bold;
    }

    .mitadsito2{
        width: 85%;
        margin-left: 5%;
        

    }
    
    .titulo-paraps{
        font-size: 20px;
        font-weight: bold;
    }
    
   

</style>

<main>
    <div class="container-fluid px-4 titulaso-pingaso titulopartido">

        <h5 class="mt-4 mitadsito2">
            <div class="titulo-buenaso">
                RESUMEN DE TODOS LOS PAGOS Y LAS DEUDAS DEL CLIENTE
            </div>
        </h5>

        <div class="tablaaa">
            <h5 class="mt-4 mitadsito">
                <div class="titulo-buenaso">
                    DATOS DEL CLIENTE
                </div>
            </h5>

            <div class="contenido-cliente">
                <p>
                    Nombre: {{$cliente->name.' '.$cliente->surname.'    con DNI: '.$cliente->dni}}

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

            <h5 class="mt-4 mitadsito">
                <div class="titulo-buenaso">
                    HISTORIAL DE LOS PRESTAMOS DEL CLIENTE
                </div>
            </h5>

            @if($cliente->historial->count() >= 1)

            <table class="table table-hover table-bordered ">
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


            <h5 class="mt-4 mitadsito">
                <div class="titulo-buenaso">
                    HISTORIAL DE INTERESES REALIZADOS POR EL CLIENTE
                </div>
            </h5>

            
         @if($cliente->Interes->count() >= 1)

            <table class="table table-hover table-bordered">
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


            <h5 class="mt-4 mitadsito">
                <div class="titulo-buenaso">
                    HISTORIAL DE PAGOS DEL CAPITAL REALIZADOS POR EL CLIENTE
                </div>
            </h5>


             @if($cliente->Capital->count() >= 1)

             

            <table class="table table-hover table-bordered">
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
        


        <div class="clearfix"></div>

        <style>
            .meterpadding{
                margin-bottom: 50px;
                margin-right: 10%;
                margin-top: 100px;

            }
        </style>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end meterpadding">
            <button type="button" class="btn btn-primary btn-lg">
                <a class="style-links" href="{{route('cliente.download_pdf',['id' => $cliente->id])}}">GENERAR PDF</a>
            </button>


        </div>



    </div>
</main>




@endsection





















<!--

<a href="{{route('cliente.download_pdf',['id' => $cliente->id])}}">
    click en tu culito bb
</a>
 
-->
















