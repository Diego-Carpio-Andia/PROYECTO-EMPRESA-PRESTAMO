@extends('layouts.dashboard-header')

@section('content')

<style>
    
.card {
  border: none;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
  margin-top: 25px;
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
                <div class="card-header"> Constancia de Transferencia </div>

                <div class="card-body">
                    <!-- Permitir  meter images con enctype="multipart/form-data" -->
                    <form method="POST"  enctype="multipart/form-data" action="{{ route('facturas.save')}}">
                        @csrf

                           <!-- Enviar el dato del hidden a la funcion update
                        que recoje valores por Request -->
                        <input type="hidden" name="cliente_id" value="{{$cliente->id}}"/>

                        
                        <div class="row mb-3">
                            <label for="CuentaOrigen" class="col-md-4 col-form-label text-md-end">{{ __('Cuenta Origen') }}</label>

                            <div class="col-md-6">
                                <input id="CuentaOrigen" type="text" class="form-control" name="CuentaOrigen" required autofocus>


                                @error('CuentaOrigen')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        
                        
                        
                         <div class="row mb-3">
                            <label for="CuentaDestino" class="col-md-4 col-form-label text-md-end">{{ __('Cuenta Destino') }}</label>

                            <div class="col-md-6">
                                <input id="CuentaDestino" type="text" class="form-control" name="CuentaDestino" required autofocus>


                                @error('CuentaDestino')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        
                        
                        
                        
                        
                         <div class="row mb-3">
                            <label for="TitularDestino" class="col-md-4 col-form-label text-md-end">{{ __('Titular Destino') }}</label>

                            <div class="col-md-6">
                                <input id="TitularDestino" type="text" class="form-control" name="TitularDestino" required autofocus>


                                @error('TitularDestino')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        
                        
                        
                         <div class="row mb-3">
                            <label for="Importe" class="col-md-4 col-form-label text-md-end">{{ __('Importe') }}</label>

                            <div class="col-md-6">
                                <input id="Importe" type="text" class="form-control" name="Importe" required autofocus>


                                @error('Importe')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        
                        
                        
                         <div class="row mb-3">
                            <label for="NOperacion" class="col-md-4 col-form-label text-md-end">{{ __('Numero Operacion') }}</label>

                            <div class="col-md-6">
                                <input id="NOperacion" type="text" class="form-control" name="NOperacion" required autofocus>


                                @error('NOperacion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        
                        
                        
                         <div class="row mb-3">
                            <label for="Descripcion" class="col-md-4 col-form-label text-md-end">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <input id="Descripcion" type="text" class="form-control" name="Descripcion" required autofocus>


                                @error('Descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        
                        
                        
                         <div class="row mb-3">
                            <label for="TipoBanco" class="col-md-4 col-form-label text-md-end">{{ __('Banco') }}</label>

                           


                                <div class="col-md-6">
                                    <select name="TipoBanco" class="form-control" id="TipoBanco">
                                        <option>BCP</option>
                                        <option>Banco de la nacion</option>
                                        <option>BBVA</option>
                                        <option>Scotiabank</option>
                                        <option>Interbank</option>
                                </select>

                                </div>
                                @error('TipoBanco')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                        </div>
                        
                        
                        <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Imagen') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control" name="image">                                
                                </div>
                               

                            </div>
                        
                        
                        
                        
                         <div class="row mb-3">
                            <label for="Fecha" class="col-md-4 col-form-label text-md-end">{{ __('Fecha') }}</label>

                            <div class="col-md-6">
                                <input id="Fecha" type="date" class="form-control" name="Fecha" required autofocus>


                                @error('Fecha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        
                        
                        
                        

                        
                        
                         <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 text-md-end">
                                <button type="submit" class="btn btn-primary">
                                    Agregar Transferencia
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




