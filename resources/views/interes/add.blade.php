
<link href="{{ asset('css/general.css') }}" rel="stylesheet">

   
@extends('layouts.dashboard-header')

@section('content')

     
<style>
    
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
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"> Agregar interes del cliente </div>

                <div class="card-body">
                    <!-- Permitir  meter images con enctype="multipart/form-data" -->
                    <form method="POST"  enctype="multipart/form-data" action="{{ route('interes.save')}}">
                        @csrf

                           <!-- Enviar el dato del hidden a la funcion update
                        que recoje valores por Request -->
                        <input type="hidden" name="cliente_id" value="{{$cliente->id}}"/>

                        
                        <div class="row mb-3">
                            <label for="interes" class="col-md-4 col-form-label text-md-end">{{ __('Intereses') }}</label>

                            <div class="col-md-6">
                                <input id="interes" type="number" class="form-control" value="{{$cliente->interes}}" name="interes" required autofocus>


                                @error('interes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>

                       
                        <div class="row mb-3">
                            <label for="estado" class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>




                            <div class="col-md-6">
                                <select name="estado" class="form-control" id="estado">
                                    <option>Completo</option>
                                    <option>Incompleto</option>

                                </select>

                            </div>
                            @error('estado')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror





                        </div>
                        
                        

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Imagen') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image">


                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        
                        
                         <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    SUBIR INTERES
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














