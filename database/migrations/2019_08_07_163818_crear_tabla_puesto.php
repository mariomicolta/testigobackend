<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPuesto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puesto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 100)->unique();
            $table->unsignedBigInteger('coordinador')->nullable(true)->unique();
            $table->string('direccion')->nullable(true);
            $table->string('barrio')->nullable(true);
            $table->string('comuna')->nullable(true);
            $table->unsignedBigInteger('censo_mujeres')->nullable(true);
            $table->unsignedBigInteger('censo_hombres')->nullable(true);
            $table->unsignedBigInteger('potencial')->nullable(true);
            $table->unsignedBigInteger('mesas')->nullable(true);
            $table->timestamps();

            $table->foreign('coordinador')->references('id')->on('perfil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puesto');
    }
}
