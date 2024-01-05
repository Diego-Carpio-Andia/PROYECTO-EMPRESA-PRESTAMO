<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            
            
            $table->string('CuentaOrigen',200)->nullable($value = true);
            $table->string('CuentaDestino',200)->nullable($value = true);            
            $table->string('TitularCuentaDestino',200)->nullable($value = true);
            $table->string('ImporteTransferencia',200)->nullable($value = true);
            $table->string('NOperacion',200)->nullable($value = true);
            $table->string('Descripcion',200)->nullable($value = true);                       
            $table->string('Banco',200)->nullable($value = true);                       
            $table->string('imagen',200)->nullable($value = true);
            
            
             
            
            
            
            
       
      
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
};
