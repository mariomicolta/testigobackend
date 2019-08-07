<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('numero');
            $table->unsignedBigInteger('puesto');
            $table->unsignedBigInteger('testigo')->nullable(true);
            $table->unsignedBigInteger('votos')->nullable(true);
            $table->timestamp('fecha_registro_voto')->nullable(true);
            $table->double('lat', 20, 2);
            $table->double('lng', 20, 2);
            $table->timestamps();

            $table->foreign('puesto')->references('id')->on('puesto');
            $table->foreign('testigo')->references('id')->on('perfil');

            $table->unique(['numero', 'puesto']);

//numero puesto uniq

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesa');
    }
}
