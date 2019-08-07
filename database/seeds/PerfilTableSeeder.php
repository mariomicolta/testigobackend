<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PerfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfil')->insert([
            'usuario' => 1,
            'rol' => 1,
            'estado' => 'activo',
        ]);
    }
}
