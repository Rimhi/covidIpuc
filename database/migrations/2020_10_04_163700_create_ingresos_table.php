<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('persona_id');
            $table->string('temperatura_ingreso');
            $table->string('respuesta_1');
            $table->string('respuesta_2');
            $table->string('respuesta_3');
            $table->string('respuesta_4');
            $table->string('respuesta_5');
            $table->string('respuesta_6');
            $table->string('respuesta_7');
            $table->string('respuesta_8');
            $table->string('respuesta_9');
            $table->string('respuesta_10');
            $table->string('respuesta_11');
            $table->string('respuesta_12');
            $table->integer('user_id');
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
        Schema::dropIfExists('ingresos');
    }
}
