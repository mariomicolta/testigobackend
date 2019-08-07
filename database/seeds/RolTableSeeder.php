<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'nombre' => 'administrador',
            'estado' => 'activo',
        ]);

        DB::table('rol')->insert([
            'nombre' => 'coordinador puesto',
            'estado' => 'activo',
        ]);

        DB::table('rol')->insert([
            'nombre' => 'testigo',
            'estado' => 'activo',
        ]);

        DB::table('rol')->insert([
            'nombre' => 'candidato',
            'estado' => 'activo',
        ]);
    }
}
