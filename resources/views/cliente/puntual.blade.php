




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
              

<main>
    <div class="container-fluid px-4 titulaso-pingaso">
        <h1 class="mt-4">
            <div class="titulo-buenaso">
            CLIENTES PUNTUALES CON LOS INTERESES
        </div>
        </h1>
        
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Clientes
            </div>
            <div class="card-body">
                  
                 <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
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
                    <tfoot>
                        <tr>
                        
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Capital</th>
                            <th>Interes</th>
                            <th>Clave</th>
                            <th>Sueldo</th>
                            <th>Estado</th>
                            <th>Deuda Total Intereses</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                            <th>Utilidades</th>
                        </tr>
                    </tfoot>
                    
                    <tbody>

                        @foreach($clientes as $cliente)
                        
                        @if($cliente->deuda_total_intereses == 0)
                        
                        <tr>
                            <th>{{$cliente->id}}</th>
                            <th>{{$cliente->surname.' '.$cliente->name}}</th>
                            <th>{{$cliente->dni}}</th>
                           
                            
                            <th>{{$cliente->capital}}</th>
                            <th>{{$cliente->interes}}</th>
                            <th>{{$cliente->clave}}</th>
                            <th>{{$cliente->sueldo}}</th>
                            <th>{{$cliente->estado}}</th>
                            @if($cliente->deuda_total_intereses == 0)
                            <th>El cliente no presenta deuda</th>
                            @else
                            <th>{{$cliente->deuda_total_intereses}}</th>
                            @endif
                            <th>{{$cliente->descripcion}}</th>
                            <th>{{$cliente->created_at->format('d-m-Y')}}</th>
                            <th>
                                
                                    <a href="{{route('cliente.delete',['id' => $cliente->id])}}">
                                        <i class="fa-solid fa-trash"></i><!-- eliminar -->
                                    </a>
                                    
                                    <a href="{{route('cliente.edit',['id' => $cliente->id])}}">
                                         <i class="fa-regular fa-pen-to-square"></i><!-- editar -->
                                    </a>
                                    
                                    <a href="{{route('interes.add',['id' => $cliente->id])}}">
                                        <i class="fa-solid fa-percent"></i><!-- interes -->
                                    </a>
                                    
                                    <a href="{{route('capital.add',['id' => $cliente->id])}}">
                                        <i class="fa-solid fa-sack-dollar"></i><!-- Capital -->
                                    </a>
                                    <a href="{{route('cliente.vista_pdf',['id' => $cliente->id])}}">
                                        <i class="fa-regular fa-clipboard"></i><!-- generar pdf -->
                                    </a>
                                 
                            

                            </th>
                        </tr>
                        
                        @endif
                        @endforeach
                    </tbody>
                </table>



            </div>









        </div>




    </div>
</main>




@endsection














