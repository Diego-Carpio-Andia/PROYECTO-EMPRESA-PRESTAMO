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
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',200)->nullable($value = true);
            $table->string('surname',200)->nullable($value = true);
            $table->string('dni',200)->nullable($value = true);
            $table->integer('capital')->nullable($value = true);
            $table->float('interes')->nullable($value = true);
            $table->integer('clave')->nullable($value = true);
            $table->integer('sueldo')->nullable($value = true);
            $table->string('estado',200)->nullable($value = true);
            $table->float('deuda_total_intereses')->nullable($value = true);
            $table->mediumText('descripcion')->nullable($value = true);
            $table->string('imagen',200)->nullable($value = true);            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('clientes');
    }
};
