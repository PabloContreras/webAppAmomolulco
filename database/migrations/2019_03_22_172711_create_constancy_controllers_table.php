<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstancyControllersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->String('ap_p');
            $table->String('ap_m');
            $table->String('domicilio');
            $table->String('tiempo_habitado');
            $table->String('clave_ine');
            $table->String('correo_electronico');
            $table->String('telefono');
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
        Schema::dropIfExists('constancies');
    }
}
