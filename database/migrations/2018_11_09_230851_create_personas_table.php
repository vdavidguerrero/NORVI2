<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('ciudad_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion')->nullable($value = true)	;
            $table->time('fecha_Nacimiento')->nullable($value = true);
            $table->unsignedInteger('cedula');
            $table->string('telefono_casa')->nullable($value = true);
            $table->string('telefono_celular');
            $table->string('whatsApp');
            $table->string('correo_electronico')->nullable($value = true);
//            $table->foreign('ciudad_id')->references('id')->on('cuidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
