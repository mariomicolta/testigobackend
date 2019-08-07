<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('primer_nombre', 100);
            $table->string('segundo_nombre', 100)->nullable(true);
            $table->string('primer_apellido', 100);
            $table->string('segundo_apellido', 100)->nullable(true);
            $table->unsignedBigInteger('cedula')->unique();
            $table->string('password');
            $table->string('telefono', 100)->unique()->nullable(true);
            $table->string('email')->unique()->nullable(true);
            $table->string('estado')->default('activo');
            $table->string('direccion')->nullable(true);
            $table->string('barrio')->nullable(true);
            $table->string('comuna')->nullable(true);
            $table->timestamp('email_verified_at')->nullable();    
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
