




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
            DETALLE DE LOS CLIENTES
        </div>
        </h1>
        @include('includes.message')
        
        
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">CLIENTES PUNTUALES</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('cliente.puntual')}}">VER DETALLES</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            
            
            
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">CLIENTES CON MULTIRED</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('cliente.multired')}}">VER DETALLES</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">CLIENTES CON DEUDA ALTA</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('cliente.deuda_alta')}}">VER DETALLES</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">CLIENTES MOROSOS</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('cliente.moroso')}}">VER DETALLES</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Detalles de todos los clientes
                                              
                        <?php
                            $clientes_num = 0;
                            $capital_total = 0;
                            $usuarios_clave = 0;
                            $pendiente = 0;
                            $deudor = 0;
                            $cancelado = 0;
                            
                            foreach($clientes as $cliente){
                                if($cliente->estado == 'Deudor' || $cliente->estado == 'Pendiente'){
                                    $clientes_num++;
                                    $capital_total += $cliente->capital;
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
                        
                    </div>
                    <div class="card-body">
                        
                        <div class="detalles-cliente">
                            <h5>
                                <i class="fa-solid fa-user"></i>
                                Numero Total de Clientes: <?= $clientes_num ?> 
                            </h5>
                            
                            <hr>
                            
                            <h5>
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                                Capital Total: <?= $capital_total ?> 
                            </h5>
                            
                            
                        
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
          
             <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Detalles de todos los clientes
                    </div>
                    <div class="card-body">
                        <h5>
                                <i class="fa-solid fa-user"></i>
                                Numero de Clientes Pendientes: <?= $pendiente ?> 
                        </h5>
                        <hr>
                        <h5>
                                <i class="fa-solid fa-user"></i>
                                Numero de Clientes Morosos: <?= $deudor ?> 
                        </h5>                        
                    </div>
                </div>
            </div>
            
        </div>
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
                        <tr>
                            <th>{{$cliente->id}}</th>
                            <th>{{$cliente->surname.' '.$cliente->name}}</th>
                            <th>{{$cliente->dni}}</th>
                           
                            
                            <th>{{$cliente->capital}}</th>
                            <th>{{$cliente->interes}}</th>
                            @if($cliente->clave == 0)
                            <th>No tiene</th>
                            @else
                            <th>{{$cliente->clave}}</th>
                            @endif
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
                                        <i class="fa-regular fa-clipboard"></i></i><!-- generar pdf -->
                                    </a>
                                 
                            

                            </th>
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
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end meterpadding">
            <button type="button" class="btn btn-primary btn-md">
                <a class="style-links" href="{{route('cliente.add')}}">Agregar Cliente</a>
            </button>


        </div>


    </div>
</main>




@endsection














