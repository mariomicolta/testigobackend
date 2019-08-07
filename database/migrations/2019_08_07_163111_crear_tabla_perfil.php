<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPerfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuario');
            $table->unsignedBigInteger('rol');	
            $table->string('estado', 60)->nullable(true);
            $table->timestamps();

            $table->foreign('usuario')->references('id')->on('users');
            $table->foreign('rol')->references('id')->on('rol');

            $table->unique(['usuario', 'rol']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil');
    }
}
