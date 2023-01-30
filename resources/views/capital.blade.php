

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
                DETALLE DEL CAPITAL
            </div>
        
        </h1>
        
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

        <div class="row">
            <style>
                .meses-buenos .iconos{
                    display:block;
                    float:left;

                    width: 50%;

                }
            </style>

            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Detalle del Capital pagado
                    </div>
                    <div class="card-body">
                        <h5>     
                            <i class="fa-solid fa-user"></i>
                            Total pagos del capital de todos los clientes: <?= $intereses ?> 
                        </h5><!-- comment -->

                        <hr>
                        <h5>   
                            <div class="meses-buenos">
                                <div class="iconos">
                                    <i class="fa-solid fa-user"></i>
                                    Total Enero: <?= $final_enero ?> 
                                </div>



                                <div class="iconos">

                                    <i class="fa-solid fa-user"></i>

                                    Total Febrero: <?= $final_febrero ?> 

                                </div>



                            </div> 

                            <div class="clearfix"></div>


                        </h5>

                        <hr>

                        <h5>
                            <div class="meses-buenos">
                                <div class="iconos">
                                    <i class="fa-solid fa-user"></i>
                                    Total Marzo: <?= $final_marzo ?> 
                                </div>
                                <div class="iconos">


                                    <i class="fa-solid fa-user"></i>
                                    Total Abril: <?= $final_abril ?> 


                                </div>
                            </div>
                        </h5>


                        <div class="clearfix"></div>
                        <hr>

                        <h5>   
                            <div class="meses-buenos">
                                <div class="iconos">
                                    <i class="fa-solid fa-user"></i>
                                    Total Mayo: <?= $final_mayo ?> 
                                </div>

                                <div class="iconos">
                                    <i class="fa-solid fa-user"></i>
                                    Total Junio: <?= $final_junio ?>
                                </div>
                            </div>
                        </h5>



                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Detalle del Capital pagado
                    </div>
                    <div class="card-body">




                        <h5> 
                            <i class="fa-solid fa-user"></i>
                            Total pagos del capital de los clientes este año: <?= $año ?> 
                        </h5>
                        <hr>

                        <div class="clearfix"></div>
                        <h5>
                            <div class="meses-buenos">
                                <div class="iconos">
                                    <i class="fa-solid fa-user"></i>
                                    Total Julio: <?= $final_julio ?> 
                                </div>
                                <div class="iconos">
                                    <i class="fa-solid fa-user"></i>
                                    Total Agosto: <?= $final_agosto ?> 
                                </div>
                            </div>
                        </h5>

                        <div class="clearfix"></div>
                        <hr>

                        <h5>   
                            <div class="meses-buenos">
                                <div class="iconos">
                                    <i class="fa-solid fa-user"></i>
                                    Total Septiembre: <?= $final_septiembre ?> 
                                </div>
                                <div class="iconos">
                                    <i class="fa-solid fa-user"></i>
                                    Total Octubre: <?= $final_octubre ?> 
                                </div>
                            </div>
                        </h5>


                        <div class="clearfix"></div>
                        <hr>

                        <h5>   
                            <div class="meses-buenos">
                                <div class="iconos">
                                    <i class="fa-solid fa-user"></i>
                                    Total Noviembre: <?= $final_noviembre ?> 
                                </div>
                                <div class="iconos">
                                    <i class="fa-solid fa-user"></i>
                                    Total Diciembre: <?= $final_diciembre ?> 
                                </div>
                            </div>
                        </h5>



                        <div class="clearfix"></div>







                    </div>
                </div>
            </div>
        </div>


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
                            <th>Pago</th>
                            <th>Cliente</th>
                            <th>Fecha</th>
                            
                            <th>Eliminar</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                            <th>ID</th>
                            <th>Pago</th>
                            <th>Cliente</th>
                            <th>Fecha</th>
                           
                            <th>Eliminar</th>
                        </tr>
                    </tfoot>

                    <tbody>

                        @foreach($capital as $capi)
                        <tr>
                            <th>{{$capi->id}}</th>
                            <th>{{$capi->pago}}</th>                            
                            <th>{{$capi->Cliente->surname.' '.$capi->Cliente->name}}</th>
                            <th>{{$capi->created_at->format('d-m-Y')}}</th>
                           

                            <th>

                                <a href="{{ route('capital.delete',['id' => $capi->id])}}">
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














