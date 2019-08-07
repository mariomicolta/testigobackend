<?php

use Illuminate\Database\Seeder;

class PuestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puesto')->insert([
            'nombre' => 'aguaclara',
            'censo_mujeres' => 121,
            'censo_hombres' => 151,
            'potencial' => 272,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'alto potedo',
            'censo_mujeres' => 60,
            'censo_hombres' => 63,
            'potencial' => 123,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'bajo calima',
            'censo_mujeres' => 835,
            'censo_hombres' => 914,
            'potencial' => 1749,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'barcos',
            'censo_mujeres' => 193,
            'censo_hombres' => 173,
            'potencial' => 366,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'bocas de calima',
            'censo_mujeres' => 107,
            'censo_hombres' => 124,
            'potencial' => 231,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'bocas del san juan',
            'censo_mujeres' => 181,
            'censo_hombres' => 170,
            'potencial' => 351,
            'mesas' => 0,
        ]);
        
        DB::table('puesto')->insert([
            'nombre' => 'cabeceras del rio san juan',
            'censo_mujeres' => 219,
            'censo_hombres' => 256,
            'potencial' => 475,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'calle honda',
            'censo_mujeres' => 104,
            'censo_hombres' => 116,
            'potencial' => 220,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'caracoli (cacoli)',
            'censo_mujeres' => 31,
            'censo_hombres' => 38,
            'potencial' => 69,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'carcel',
            'censo_mujeres' => 36,
            'censo_hombres' => 72,
            'potencial' => 108,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'caseta comunal el oriente',
            'censo_mujeres' => 2640,
            'censo_hombres' => 2020,
            'potencial' => 4660,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'caseta comunal union de vivienda',
            'censo_mujeres' => 2663,
            'censo_hombres' => 1766,
            'potencial' => 4429,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'cisneros',
            'censo_mujeres' => 357,
            'censo_hombres' => 487,
            'potencial' => 844,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'colegio bartolome de las casas',
            'censo_mujeres' => 1941,
            'censo_hombres' => 1585,
            'potencial' => 3526,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'colegio antonio nariño',
            'censo_mujeres' => 2659,
            'censo_hombres' => 1951,
            'potencial' => 4610,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'colegio patricio simmems',
            'censo_mujeres' => 1876,
            'censo_hombres' => 1570,
            'potencial' => 3446,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'cordoba',
            'censo_mujeres' => 1013,
            'censo_hombres' => 1067,
            'potencial' => 2080,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'el carmen',
            'censo_mujeres' => 162,
            'censo_hombres' => 182,
            'potencial' => 344,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'el pastico',
            'censo_mujeres' => 332,
            'censo_hombres' => 336,
            'potencial' => 668,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'el pital',
            'censo_mujeres' => 246,
            'censo_hombres' => 221,
            'potencial' => 467,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'el tigre',
            'censo_mujeres' => 132,
            'censo_hombres' => 147,
            'potencial' => 279,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'fundacion educativa y social ana victoria',
            'censo_mujeres' => 5024,
            'censo_hombres' => 2881,
            'potencial' => 7905,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'guadalito',
            'censo_mujeres' => 279,
            'censo_hombres' => 267,
            'potencial' => 546,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e ana victoria',
            'censo_mujeres' => 1233,
            'censo_hombres' => 2605,
            'potencial' => 3838,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e policarpa salavarrieta',
            'censo_mujeres' => 4702,
            'censo_hombres' => 1320,
            'potencial' => 6022,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e emilio carvajal',
            'censo_mujeres' => 3845,
            'censo_hombres' => 2955,
            'potencial' => 6800,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e francisco jose de caldas',
            'censo_mujeres' => 5681,
            'censo_hombres' => 7195,
            'potencial' => 12876,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e jose maria cabal',
            'censo_mujeres' => 6368,
            'censo_hombres' => 4954,
            'potencial' => 11322,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e jose ramon bejarano',
            'censo_mujeres' => 1859,
            'censo_hombres' => 1444,
            'potencial' => 3303,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e juan jose rondon',
            'censo_mujeres' => 6866,
            'censo_hombres' => 5307,
            'potencial' => 12173,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e la anunciacion (ifa)',
            'censo_mujeres' => 4481,
            'censo_hombres' => 3566,
            'potencial' => 8047,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e la nueva esperanza',
            'censo_mujeres' => 934,
            'censo_hombres' => 764,
            'potencial' => 1698,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e las americas',
            'censo_mujeres' => 1638,
            'censo_hombres' => 1307,
            'potencial' => 2945,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e liceo del pacifico',
            'censo_mujeres' => 3360,
            'censo_hombres' => 2473,
            'potencial' => 5833,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e los granadinos',
            'censo_mujeres' => 4871,
            'censo_hombres' => 3861,
            'potencial' => 8732,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e pascual de andagoya',
            'censo_mujeres' => 4309,
            'censo_hombres' => 1429,
            'potencial' => 5738,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e republica de venezuela',
            'censo_mujeres' => 4164,
            'censo_hombres' => 2499,
            'potencial' => 6663,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e san martin de porras',
            'censo_mujeres' => 2133,
            'censo_hombres' => 1550,
            'potencial' => 3683,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e san rafael',
            'censo_mujeres' => 3808,
            'censo_hombres' => 4522,
            'potencial' => 8330,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e simon bolivar',
            'censo_mujeres' => 6482,
            'censo_hombres' => 4810,
            'potencial' => 11292,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e teofilo roberto potes',
            'censo_mujeres' => 7253,
            'censo_hombres' => 5949,
            'potencial' => 13202,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e termarit',
            'censo_mujeres' => 1891,
            'censo_hombres' => 1676,
            'potencial' => 3567,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.e urbano tenorio',
            'censo_mujeres' => 1607,
            'censo_hombres' => 1151,
            'potencial' => 2758,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'i.t.i gerardo valencia cano',
            'censo_mujeres' => 7030,
            'censo_hombres' => 7124,
            'potencial' => 14154,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'juntas (yurumangui)',
            'censo_mujeres' => 231,
            'censo_hombres' => 201,
            'potencial' => 432,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'la bocana',
            'censo_mujeres' => 442,
            'censo_hombres' => 511,
            'potencial' => 953,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'la concepcion',
            'censo_mujeres' => 320,
            'censo_hombres' => 303,
            'potencial' => 623,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'la plata',
            'censo_mujeres' => 166,
            'censo_hombres' => 225,
            'potencial' => 391,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'la trojita',
            'censo_mujeres' => 151,
            'censo_hombres' => 182,
            'potencial' => 333,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'ladrilleros',
            'censo_mujeres' => 76,
            'censo_hombres' => 91,
            'potencial' => 167,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'llanobajo',
            'censo_mujeres' => 175,
            'censo_hombres' => 183,
            'potencial' => 358,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'malaga',
            'censo_mujeres' => 330,
            'censo_hombres' => 350,
            'potencial' => 680,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'mayorquin',
            'censo_mujeres' => 189,
            'censo_hombres' => 223,
            'potencial' => 412,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'nicolas ramos hidalgo',
            'censo_mujeres' => 14,
            'censo_hombres' => 26,
            'potencial' => 40,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'papayal',
            'censo_mujeres' => 278,
            'censo_hombres' => 232,
            'potencial' => 510,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'parroquia cristo redentor',
            'censo_mujeres' => 4712,
            'censo_hombres' => 3591,
            'potencial' => 8303,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'puerto españa',
            'censo_mujeres' => 127,
            'censo_hombres' => 153,
            'potencial' => 280,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'puerto merizalde',
            'censo_mujeres' => 811,
            'censo_hombres' => 855,
            'potencial' => 1666,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'puerto naya',
            'censo_mujeres' => 22,
            'censo_hombres' => 37,
            'potencial' => 59,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'punta soldado',
            'censo_mujeres' => 299,
            'censo_hombres' => 346,
            'potencial' => 645,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'san antonio (yurumangui)',
            'censo_mujeres' => 202,
            'censo_hombres' => 264,
            'potencial' => 466,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'san francisco de naya',
            'censo_mujeres' => 350,
            'censo_hombres' => 365,
            'potencial' => 715,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'san francisco javier',
            'censo_mujeres' => 163,
            'censo_hombres' => 183,
            'potencial' => 346,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'san isidro',
            'censo_mujeres' => 194,
            'censo_hombres' => 209,
            'potencial' => 403,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'san jose (anchicaya)',
            'censo_mujeres' => 187,
            'censo_hombres' => 254,
            'potencial' => 441,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'san jose (yurumangui)',
            'censo_mujeres' => 123,
            'censo_hombres' => 126,
            'potencial' => 249,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'san lorenzo',
            'censo_mujeres' => 95,
            'censo_hombres' => 117,
            'potencial' => 212,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'san marcos',
            'censo_mujeres' => 220,
            'censo_hombres' => 220,
            'potencial' => 440,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'san pedro de naya',
            'censo_mujeres' => 245,
            'censo_hombres' => 259,
            'potencial' => 504,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'sede maria auxiliadora',
            'censo_mujeres' => 374,
            'censo_hombres' => 219,
            'potencial' => 593,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'silva',
            'censo_mujeres' => 327,
            'censo_hombres' => 359,
            'potencial' => 686,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'taparal',
            'censo_mujeres' => 198,
            'censo_hombres' => 159,
            'potencial' => 357,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'terminal de transporte',
            'censo_mujeres' => 925,
            'censo_hombres' => 6995,
            'potencial' => 7920,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'triana',
            'censo_mujeres' => 491,
            'censo_hombres' => 429,
            'potencial' => 920,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'veneral',
            'censo_mujeres' => 184,
            'censo_hombres' => 221,
            'potencial' => 405,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'zabaletas',
            'censo_mujeres' => 287,
            'censo_hombres' => 334,
            'potencial' => 621,
            'mesas' => 0,
        ]);

        DB::table('puesto')->insert([
            'nombre' => 'zacarias',
            'censo_mujeres' => 612,
            'censo_hombres' => 551,
            'potencial' => 1163,
            'mesas' => 0,
        ]);
    }
}
