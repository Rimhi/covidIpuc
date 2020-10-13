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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email',100)->nullable();
            $table->string('number_phone',10)->nullable();
            $table->integer('number_id')->unique()->nullable();
            $table->string('tipo_documento')->nullable();
            $table->integer('edad')->nullable();
            $table->string('direccion')->nullable();
            $table->string('cargo')->nullable();
            $table->string('arl')->nullable();
            $table->string('eps')->nullable();
            $table->string('nombre_contacto')->nullable();
            $table->string('numero_contacto')->nullable();
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
        Schema::dropIfExists('personas');
    }
}
