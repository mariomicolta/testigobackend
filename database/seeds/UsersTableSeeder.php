<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'primer_nombre' => 'john',
            'segundo_nombre' => 'mario',
            'primer_apellido' => 'micolta',
            'segundo_apellido' => 'garzón',
            'cedula' => 1111799530,
            'password' => bcrypt('micolta799530'),
            'telefono' => '3173301901',
            'email' => 'mariomicolta@hotmail.com',
            'estado' => 'activo',
            'direccion' => 'cll 2da sur #9-20',
            'barrio' => 'muro yusty',
            'comuna' => '4',
        ]);
    }
}
