
<link href="{{ asset('css/general.css') }}" rel="stylesheet">

   
@extends('layouts.dashboard-header')

@section('content')
     

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"> Editar Informacion del cliente </div>

                <div class="card-body">
                    <!-- Permitir  meter images con enctype="multipart/form-data" -->
                    <form method="POST" action="{{route('cliente.update')}}">
                        @csrf
                        
                          <!-- Enviar el dato del hidden a la funcion update
                        que recoje valores por Request -->
                        <input type="hidden" name="cliente_id" value="{{$cliente->id}}"/>

                        
                        

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" value="{{$cliente->name}}" name="name" required autofocus>


                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" value="{{$cliente->surname}}" name="surname" required >


                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="dni" class="col-md-4 col-form-label text-md-end">{{ __('DNI') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" value="{{$cliente->dni}}" name="dni" required >


                                @error('dni')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="capital" class="col-md-4 col-form-label text-md-end">{{ __('Capital') }}</label>

                            <div class="col-md-6">
                                <input id="capital" type="number" class="form-control" value="{{$cliente->capital}}" name="capital" required >



                                @error('capital')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="clave" class="col-md-4 col-form-label text-md-end">{{ __('Clave') }}</label>

                            <div class="col-md-6">
                                <input id="clave" type="number" class="form-control" value="{{$cliente->clave}}" name="clave" required >



                                @error('clave')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror


                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="sueldo" class="col-md-4 col-form-label text-md-end">{{ __('Sueldo') }}</label>

                            <div class="col-md-6">
                                <input id="sueldo" type="number" class="form-control" value="{{$cliente->sueldo}}" name="sueldo" required >




                                @error('sueldo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror


                            </div>
                        </div>
                        
                        
                         

                        
                        
                        


                        <div class="row mb-3">
                            <label for="estado" class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>




                            <div class="col-md-6">
                                <select name="estado" class="form-control" value="{{$cliente->estado}}" id="estado">
                                    <option>Pendiente</option>
                                    <option>Deudor</option>
                                    <option>Cancelado</option>

                                </select>

                            </div>
                            @error('estado')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror





                        </div>


                        <div class="row mb-3">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control" value="{{$cliente->descripcion}}" name="descripcion" required >



                                @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror


                            </div>
                        </div>
                        
                        
                        <div class="row mb-2">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">                                    
                                         Editar Cliente                                    
                                </button>
                            </div>
                        </div>
                        
                        
                        



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection














