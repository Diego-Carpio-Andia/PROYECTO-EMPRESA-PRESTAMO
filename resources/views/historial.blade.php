

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
            HISTORIAL DE TODOS LOS CLIENTES
        </div>
        </h1>
       @include('includes.message')
     
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Intereses
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                             <th>ID</th>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Capital</th>
                            <th>Fecha</th>
                            <th>
                                Eliminar
                            </th>
                            
                           
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        
                             <th>ID</th>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Capital</th>
                            <th>Fecha</th>
                            
                             <th>
                                Eliminar
                            </th>
                            
                            
                            
                            
                        </tr>
                    </tfoot>
                    
                    <tbody>

                        @foreach($historial as $histo)
                        <tr>
                            <th>{{$histo->id}}</th>
                            <th>{{$histo->surname.' '.$histo->name}}</th>
                            <th>{{$histo->dni}}</th>                            
                            <th>{{$histo->capital}}</th>                            
                            <th>{{$histo->created_at->format('d-m-Y')}}</th>
                            
                            <th>
                                 <a href="{{ route('historial.delete',['id' => $histo->id])}}">
                                    <i class="fa-solid fa-trash"></i><!-- eliminar -->
                                </a>
                            </th>
                            
                    
                    
                    
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>









        </div>




    </div>
</main>




@endsection














