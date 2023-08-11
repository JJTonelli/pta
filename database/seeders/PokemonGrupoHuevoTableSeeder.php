<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PokemonGrupoHuevoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('PokemonGrupoHuevo')->delete();
        
        \DB::table('PokemonGrupoHuevo')->insert(array (
            0 => 
            array (
                'PokemonGrupoHuevoID' => 1,
                'PokemonID' => 1,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            1 => 
            array (
                'PokemonGrupoHuevoID' => 2,
                'PokemonID' => 1,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            2 => 
            array (
                'PokemonGrupoHuevoID' => 3,
                'PokemonID' => 2,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            3 => 
            array (
                'PokemonGrupoHuevoID' => 4,
                'PokemonID' => 2,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            4 => 
            array (
                'PokemonGrupoHuevoID' => 5,
                'PokemonID' => 3,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            5 => 
            array (
                'PokemonGrupoHuevoID' => 6,
                'PokemonID' => 3,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            6 => 
            array (
                'PokemonGrupoHuevoID' => 7,
                'PokemonID' => 4,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            7 => 
            array (
                'PokemonGrupoHuevoID' => 8,
                'PokemonID' => 4,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            8 => 
            array (
                'PokemonGrupoHuevoID' => 9,
                'PokemonID' => 5,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            9 => 
            array (
                'PokemonGrupoHuevoID' => 10,
                'PokemonID' => 5,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            10 => 
            array (
                'PokemonGrupoHuevoID' => 11,
                'PokemonID' => 6,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            11 => 
            array (
                'PokemonGrupoHuevoID' => 12,
                'PokemonID' => 6,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            12 => 
            array (
                'PokemonGrupoHuevoID' => 13,
                'PokemonID' => 7,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            13 => 
            array (
                'PokemonGrupoHuevoID' => 14,
                'PokemonID' => 7,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            14 => 
            array (
                'PokemonGrupoHuevoID' => 15,
                'PokemonID' => 8,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            15 => 
            array (
                'PokemonGrupoHuevoID' => 16,
                'PokemonID' => 8,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            16 => 
            array (
                'PokemonGrupoHuevoID' => 17,
                'PokemonID' => 9,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            17 => 
            array (
                'PokemonGrupoHuevoID' => 18,
                'PokemonID' => 9,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            18 => 
            array (
                'PokemonGrupoHuevoID' => 19,
                'PokemonID' => 10,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            19 => 
            array (
                'PokemonGrupoHuevoID' => 20,
                'PokemonID' => 10,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            20 => 
            array (
                'PokemonGrupoHuevoID' => 21,
                'PokemonID' => 11,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            21 => 
            array (
                'PokemonGrupoHuevoID' => 22,
                'PokemonID' => 11,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            22 => 
            array (
                'PokemonGrupoHuevoID' => 23,
                'PokemonID' => 12,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            23 => 
            array (
                'PokemonGrupoHuevoID' => 24,
                'PokemonID' => 12,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            24 => 
            array (
                'PokemonGrupoHuevoID' => 25,
                'PokemonID' => 13,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            25 => 
            array (
                'PokemonGrupoHuevoID' => 26,
                'PokemonID' => 13,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            26 => 
            array (
                'PokemonGrupoHuevoID' => 27,
                'PokemonID' => 14,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            27 => 
            array (
                'PokemonGrupoHuevoID' => 28,
                'PokemonID' => 14,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            28 => 
            array (
                'PokemonGrupoHuevoID' => 29,
                'PokemonID' => 15,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            29 => 
            array (
                'PokemonGrupoHuevoID' => 30,
                'PokemonID' => 15,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            30 => 
            array (
                'PokemonGrupoHuevoID' => 31,
                'PokemonID' => 16,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            31 => 
            array (
                'PokemonGrupoHuevoID' => 32,
                'PokemonID' => 16,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            32 => 
            array (
                'PokemonGrupoHuevoID' => 33,
                'PokemonID' => 17,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            33 => 
            array (
                'PokemonGrupoHuevoID' => 34,
                'PokemonID' => 17,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            34 => 
            array (
                'PokemonGrupoHuevoID' => 35,
                'PokemonID' => 18,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            35 => 
            array (
                'PokemonGrupoHuevoID' => 36,
                'PokemonID' => 18,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            36 => 
            array (
                'PokemonGrupoHuevoID' => 37,
                'PokemonID' => 19,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            37 => 
            array (
                'PokemonGrupoHuevoID' => 38,
                'PokemonID' => 20,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            38 => 
            array (
                'PokemonGrupoHuevoID' => 39,
                'PokemonID' => 21,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            39 => 
            array (
                'PokemonGrupoHuevoID' => 40,
                'PokemonID' => 24,
                'GrupoHuevoID' => 7,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            40 => 
            array (
                'PokemonGrupoHuevoID' => 41,
                'PokemonID' => 26,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            41 => 
            array (
                'PokemonGrupoHuevoID' => 42,
                'PokemonID' => 26,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            42 => 
            array (
                'PokemonGrupoHuevoID' => 43,
                'PokemonID' => 27,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            43 => 
            array (
                'PokemonGrupoHuevoID' => 44,
                'PokemonID' => 27,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            44 => 
            array (
                'PokemonGrupoHuevoID' => 45,
                'PokemonID' => 28,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            45 => 
            array (
                'PokemonGrupoHuevoID' => 46,
                'PokemonID' => 28,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            46 => 
            array (
                'PokemonGrupoHuevoID' => 47,
                'PokemonID' => 29,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            47 => 
            array (
                'PokemonGrupoHuevoID' => 48,
                'PokemonID' => 29,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            48 => 
            array (
                'PokemonGrupoHuevoID' => 49,
                'PokemonID' => 30,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            49 => 
            array (
                'PokemonGrupoHuevoID' => 50,
                'PokemonID' => 30,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            50 => 
            array (
                'PokemonGrupoHuevoID' => 51,
                'PokemonID' => 31,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            51 => 
            array (
                'PokemonGrupoHuevoID' => 52,
                'PokemonID' => 31,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            52 => 
            array (
                'PokemonGrupoHuevoID' => 53,
                'PokemonID' => 32,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            53 => 
            array (
                'PokemonGrupoHuevoID' => 54,
                'PokemonID' => 32,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            54 => 
            array (
                'PokemonGrupoHuevoID' => 55,
                'PokemonID' => 33,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            55 => 
            array (
                'PokemonGrupoHuevoID' => 56,
                'PokemonID' => 33,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            56 => 
            array (
                'PokemonGrupoHuevoID' => 57,
                'PokemonID' => 34,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            57 => 
            array (
                'PokemonGrupoHuevoID' => 58,
                'PokemonID' => 34,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            58 => 
            array (
                'PokemonGrupoHuevoID' => 59,
                'PokemonID' => 35,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            59 => 
            array (
                'PokemonGrupoHuevoID' => 60,
                'PokemonID' => 35,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            60 => 
            array (
                'PokemonGrupoHuevoID' => 61,
                'PokemonID' => 36,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            61 => 
            array (
                'PokemonGrupoHuevoID' => 62,
                'PokemonID' => 36,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            62 => 
            array (
                'PokemonGrupoHuevoID' => 63,
                'PokemonID' => 37,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            63 => 
            array (
                'PokemonGrupoHuevoID' => 64,
                'PokemonID' => 37,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            64 => 
            array (
                'PokemonGrupoHuevoID' => 65,
                'PokemonID' => 38,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            65 => 
            array (
                'PokemonGrupoHuevoID' => 66,
                'PokemonID' => 38,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            66 => 
            array (
                'PokemonGrupoHuevoID' => 67,
                'PokemonID' => 39,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            67 => 
            array (
                'PokemonGrupoHuevoID' => 68,
                'PokemonID' => 39,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            68 => 
            array (
                'PokemonGrupoHuevoID' => 69,
                'PokemonID' => 40,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            69 => 
            array (
                'PokemonGrupoHuevoID' => 70,
                'PokemonID' => 41,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            70 => 
            array (
                'PokemonGrupoHuevoID' => 71,
                'PokemonID' => 42,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            71 => 
            array (
                'PokemonGrupoHuevoID' => 72,
                'PokemonID' => 43,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            72 => 
            array (
                'PokemonGrupoHuevoID' => 73,
                'PokemonID' => 44,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            73 => 
            array (
                'PokemonGrupoHuevoID' => 74,
                'PokemonID' => 45,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            74 => 
            array (
                'PokemonGrupoHuevoID' => 75,
                'PokemonID' => 46,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            75 => 
            array (
                'PokemonGrupoHuevoID' => 76,
                'PokemonID' => 47,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            76 => 
            array (
                'PokemonGrupoHuevoID' => 77,
                'PokemonID' => 48,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            77 => 
            array (
                'PokemonGrupoHuevoID' => 78,
                'PokemonID' => 49,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            78 => 
            array (
                'PokemonGrupoHuevoID' => 79,
                'PokemonID' => 50,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            79 => 
            array (
                'PokemonGrupoHuevoID' => 80,
                'PokemonID' => 51,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            80 => 
            array (
                'PokemonGrupoHuevoID' => 81,
                'PokemonID' => 52,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            81 => 
            array (
                'PokemonGrupoHuevoID' => 82,
                'PokemonID' => 53,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            82 => 
            array (
                'PokemonGrupoHuevoID' => 83,
                'PokemonID' => 54,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            83 => 
            array (
                'PokemonGrupoHuevoID' => 84,
                'PokemonID' => 55,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            84 => 
            array (
                'PokemonGrupoHuevoID' => 85,
                'PokemonID' => 56,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            85 => 
            array (
                'PokemonGrupoHuevoID' => 86,
                'PokemonID' => 57,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            86 => 
            array (
                'PokemonGrupoHuevoID' => 87,
                'PokemonID' => 58,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            87 => 
            array (
                'PokemonGrupoHuevoID' => 88,
                'PokemonID' => 59,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            88 => 
            array (
                'PokemonGrupoHuevoID' => 89,
                'PokemonID' => 60,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            89 => 
            array (
                'PokemonGrupoHuevoID' => 90,
                'PokemonID' => 60,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            90 => 
            array (
                'PokemonGrupoHuevoID' => 91,
                'PokemonID' => 61,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            91 => 
            array (
                'PokemonGrupoHuevoID' => 92,
                'PokemonID' => 61,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            92 => 
            array (
                'PokemonGrupoHuevoID' => 93,
                'PokemonID' => 62,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            93 => 
            array (
                'PokemonGrupoHuevoID' => 94,
                'PokemonID' => 62,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            94 => 
            array (
                'PokemonGrupoHuevoID' => 95,
                'PokemonID' => 63,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            95 => 
            array (
                'PokemonGrupoHuevoID' => 96,
                'PokemonID' => 63,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            96 => 
            array (
                'PokemonGrupoHuevoID' => 97,
                'PokemonID' => 64,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            97 => 
            array (
                'PokemonGrupoHuevoID' => 98,
                'PokemonID' => 64,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            98 => 
            array (
                'PokemonGrupoHuevoID' => 99,
                'PokemonID' => 65,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            99 => 
            array (
                'PokemonGrupoHuevoID' => 100,
                'PokemonID' => 65,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            100 => 
            array (
                'PokemonGrupoHuevoID' => 101,
                'PokemonID' => 66,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            101 => 
            array (
                'PokemonGrupoHuevoID' => 102,
                'PokemonID' => 66,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            102 => 
            array (
                'PokemonGrupoHuevoID' => 103,
                'PokemonID' => 67,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            103 => 
            array (
                'PokemonGrupoHuevoID' => 104,
                'PokemonID' => 67,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            104 => 
            array (
                'PokemonGrupoHuevoID' => 105,
                'PokemonID' => 68,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            105 => 
            array (
                'PokemonGrupoHuevoID' => 106,
                'PokemonID' => 68,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            106 => 
            array (
                'PokemonGrupoHuevoID' => 107,
                'PokemonID' => 69,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            107 => 
            array (
                'PokemonGrupoHuevoID' => 108,
                'PokemonID' => 69,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            108 => 
            array (
                'PokemonGrupoHuevoID' => 109,
                'PokemonID' => 70,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            109 => 
            array (
                'PokemonGrupoHuevoID' => 110,
                'PokemonID' => 70,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            110 => 
            array (
                'PokemonGrupoHuevoID' => 111,
                'PokemonID' => 71,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            111 => 
            array (
                'PokemonGrupoHuevoID' => 112,
                'PokemonID' => 71,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            112 => 
            array (
                'PokemonGrupoHuevoID' => 113,
                'PokemonID' => 72,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            113 => 
            array (
                'PokemonGrupoHuevoID' => 114,
                'PokemonID' => 72,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            114 => 
            array (
                'PokemonGrupoHuevoID' => 115,
                'PokemonID' => 73,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            115 => 
            array (
                'PokemonGrupoHuevoID' => 116,
                'PokemonID' => 73,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            116 => 
            array (
                'PokemonGrupoHuevoID' => 117,
                'PokemonID' => 74,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            117 => 
            array (
                'PokemonGrupoHuevoID' => 118,
                'PokemonID' => 74,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            118 => 
            array (
                'PokemonGrupoHuevoID' => 119,
                'PokemonID' => 75,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            119 => 
            array (
                'PokemonGrupoHuevoID' => 120,
                'PokemonID' => 76,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            120 => 
            array (
                'PokemonGrupoHuevoID' => 121,
                'PokemonID' => 77,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            121 => 
            array (
                'PokemonGrupoHuevoID' => 122,
                'PokemonID' => 78,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            122 => 
            array (
                'PokemonGrupoHuevoID' => 123,
                'PokemonID' => 78,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            123 => 
            array (
                'PokemonGrupoHuevoID' => 124,
                'PokemonID' => 79,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            124 => 
            array (
                'PokemonGrupoHuevoID' => 125,
                'PokemonID' => 80,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            125 => 
            array (
                'PokemonGrupoHuevoID' => 126,
                'PokemonID' => 81,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            126 => 
            array (
                'PokemonGrupoHuevoID' => 127,
                'PokemonID' => 82,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            127 => 
            array (
                'PokemonGrupoHuevoID' => 128,
                'PokemonID' => 83,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            128 => 
            array (
                'PokemonGrupoHuevoID' => 129,
                'PokemonID' => 83,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            129 => 
            array (
                'PokemonGrupoHuevoID' => 130,
                'PokemonID' => 84,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            130 => 
            array (
                'PokemonGrupoHuevoID' => 131,
                'PokemonID' => 84,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            131 => 
            array (
                'PokemonGrupoHuevoID' => 132,
                'PokemonID' => 85,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            132 => 
            array (
                'PokemonGrupoHuevoID' => 133,
                'PokemonID' => 85,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            133 => 
            array (
                'PokemonGrupoHuevoID' => 134,
                'PokemonID' => 86,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            134 => 
            array (
                'PokemonGrupoHuevoID' => 135,
                'PokemonID' => 86,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            135 => 
            array (
                'PokemonGrupoHuevoID' => 136,
                'PokemonID' => 87,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            136 => 
            array (
                'PokemonGrupoHuevoID' => 137,
                'PokemonID' => 87,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            137 => 
            array (
                'PokemonGrupoHuevoID' => 138,
                'PokemonID' => 88,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            138 => 
            array (
                'PokemonGrupoHuevoID' => 139,
                'PokemonID' => 88,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            139 => 
            array (
                'PokemonGrupoHuevoID' => 140,
                'PokemonID' => 89,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            140 => 
            array (
                'PokemonGrupoHuevoID' => 141,
                'PokemonID' => 89,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            141 => 
            array (
                'PokemonGrupoHuevoID' => 142,
                'PokemonID' => 90,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            142 => 
            array (
                'PokemonGrupoHuevoID' => 143,
                'PokemonID' => 90,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            143 => 
            array (
                'PokemonGrupoHuevoID' => 144,
                'PokemonID' => 91,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            144 => 
            array (
                'PokemonGrupoHuevoID' => 145,
                'PokemonID' => 91,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            145 => 
            array (
                'PokemonGrupoHuevoID' => 146,
                'PokemonID' => 92,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            146 => 
            array (
                'PokemonGrupoHuevoID' => 147,
                'PokemonID' => 92,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            147 => 
            array (
                'PokemonGrupoHuevoID' => 148,
                'PokemonID' => 93,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            148 => 
            array (
                'PokemonGrupoHuevoID' => 149,
                'PokemonID' => 93,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            149 => 
            array (
                'PokemonGrupoHuevoID' => 150,
                'PokemonID' => 94,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            150 => 
            array (
                'PokemonGrupoHuevoID' => 151,
                'PokemonID' => 94,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            151 => 
            array (
                'PokemonGrupoHuevoID' => 152,
                'PokemonID' => 95,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            152 => 
            array (
                'PokemonGrupoHuevoID' => 153,
                'PokemonID' => 96,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            153 => 
            array (
                'PokemonGrupoHuevoID' => 154,
                'PokemonID' => 97,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            154 => 
            array (
                'PokemonGrupoHuevoID' => 155,
                'PokemonID' => 98,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            155 => 
            array (
                'PokemonGrupoHuevoID' => 156,
                'PokemonID' => 99,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            156 => 
            array (
                'PokemonGrupoHuevoID' => 157,
                'PokemonID' => 100,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            157 => 
            array (
                'PokemonGrupoHuevoID' => 158,
                'PokemonID' => 101,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            158 => 
            array (
                'PokemonGrupoHuevoID' => 159,
                'PokemonID' => 102,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            159 => 
            array (
                'PokemonGrupoHuevoID' => 160,
                'PokemonID' => 103,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            160 => 
            array (
                'PokemonGrupoHuevoID' => 161,
                'PokemonID' => 104,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            161 => 
            array (
                'PokemonGrupoHuevoID' => 162,
                'PokemonID' => 105,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            162 => 
            array (
                'PokemonGrupoHuevoID' => 163,
                'PokemonID' => 106,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            163 => 
            array (
                'PokemonGrupoHuevoID' => 164,
                'PokemonID' => 107,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            164 => 
            array (
                'PokemonGrupoHuevoID' => 165,
                'PokemonID' => 108,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            165 => 
            array (
                'PokemonGrupoHuevoID' => 166,
                'PokemonID' => 109,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            166 => 
            array (
                'PokemonGrupoHuevoID' => 167,
                'PokemonID' => 110,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            167 => 
            array (
                'PokemonGrupoHuevoID' => 168,
                'PokemonID' => 111,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            168 => 
            array (
                'PokemonGrupoHuevoID' => 169,
                'PokemonID' => 112,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            169 => 
            array (
                'PokemonGrupoHuevoID' => 170,
                'PokemonID' => 113,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            170 => 
            array (
                'PokemonGrupoHuevoID' => 171,
                'PokemonID' => 114,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            171 => 
            array (
                'PokemonGrupoHuevoID' => 172,
                'PokemonID' => 115,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            172 => 
            array (
                'PokemonGrupoHuevoID' => 173,
                'PokemonID' => 116,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            173 => 
            array (
                'PokemonGrupoHuevoID' => 174,
                'PokemonID' => 117,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            174 => 
            array (
                'PokemonGrupoHuevoID' => 175,
                'PokemonID' => 118,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            175 => 
            array (
                'PokemonGrupoHuevoID' => 176,
                'PokemonID' => 119,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            176 => 
            array (
                'PokemonGrupoHuevoID' => 177,
                'PokemonID' => 120,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            177 => 
            array (
                'PokemonGrupoHuevoID' => 178,
                'PokemonID' => 121,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            178 => 
            array (
                'PokemonGrupoHuevoID' => 179,
                'PokemonID' => 122,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            179 => 
            array (
                'PokemonGrupoHuevoID' => 180,
                'PokemonID' => 123,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            180 => 
            array (
                'PokemonGrupoHuevoID' => 181,
                'PokemonID' => 124,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            181 => 
            array (
                'PokemonGrupoHuevoID' => 182,
                'PokemonID' => 125,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            182 => 
            array (
                'PokemonGrupoHuevoID' => 183,
                'PokemonID' => 126,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            183 => 
            array (
                'PokemonGrupoHuevoID' => 184,
                'PokemonID' => 127,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            184 => 
            array (
                'PokemonGrupoHuevoID' => 185,
                'PokemonID' => 128,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            185 => 
            array (
                'PokemonGrupoHuevoID' => 186,
                'PokemonID' => 129,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            186 => 
            array (
                'PokemonGrupoHuevoID' => 187,
                'PokemonID' => 130,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            187 => 
            array (
                'PokemonGrupoHuevoID' => 188,
                'PokemonID' => 131,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            188 => 
            array (
                'PokemonGrupoHuevoID' => 189,
                'PokemonID' => 132,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            189 => 
            array (
                'PokemonGrupoHuevoID' => 190,
                'PokemonID' => 133,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            190 => 
            array (
                'PokemonGrupoHuevoID' => 191,
                'PokemonID' => 134,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            191 => 
            array (
                'PokemonGrupoHuevoID' => 192,
                'PokemonID' => 135,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            192 => 
            array (
                'PokemonGrupoHuevoID' => 193,
                'PokemonID' => 136,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            193 => 
            array (
                'PokemonGrupoHuevoID' => 194,
                'PokemonID' => 136,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            194 => 
            array (
                'PokemonGrupoHuevoID' => 195,
                'PokemonID' => 137,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            195 => 
            array (
                'PokemonGrupoHuevoID' => 196,
                'PokemonID' => 137,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            196 => 
            array (
                'PokemonGrupoHuevoID' => 197,
                'PokemonID' => 138,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            197 => 
            array (
                'PokemonGrupoHuevoID' => 198,
                'PokemonID' => 138,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            198 => 
            array (
                'PokemonGrupoHuevoID' => 199,
                'PokemonID' => 139,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            199 => 
            array (
                'PokemonGrupoHuevoID' => 200,
                'PokemonID' => 139,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            200 => 
            array (
                'PokemonGrupoHuevoID' => 201,
                'PokemonID' => 140,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            201 => 
            array (
                'PokemonGrupoHuevoID' => 202,
                'PokemonID' => 141,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            202 => 
            array (
                'PokemonGrupoHuevoID' => 203,
                'PokemonID' => 142,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            203 => 
            array (
                'PokemonGrupoHuevoID' => 204,
                'PokemonID' => 143,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            204 => 
            array (
                'PokemonGrupoHuevoID' => 205,
                'PokemonID' => 144,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            205 => 
            array (
                'PokemonGrupoHuevoID' => 206,
                'PokemonID' => 145,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            206 => 
            array (
                'PokemonGrupoHuevoID' => 207,
                'PokemonID' => 146,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            207 => 
            array (
                'PokemonGrupoHuevoID' => 208,
                'PokemonID' => 147,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            208 => 
            array (
                'PokemonGrupoHuevoID' => 209,
                'PokemonID' => 148,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            209 => 
            array (
                'PokemonGrupoHuevoID' => 210,
                'PokemonID' => 149,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            210 => 
            array (
                'PokemonGrupoHuevoID' => 211,
                'PokemonID' => 150,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            211 => 
            array (
                'PokemonGrupoHuevoID' => 212,
                'PokemonID' => 150,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            212 => 
            array (
                'PokemonGrupoHuevoID' => 213,
                'PokemonID' => 151,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            213 => 
            array (
                'PokemonGrupoHuevoID' => 214,
                'PokemonID' => 151,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            214 => 
            array (
                'PokemonGrupoHuevoID' => 215,
                'PokemonID' => 152,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            215 => 
            array (
                'PokemonGrupoHuevoID' => 216,
                'PokemonID' => 153,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            216 => 
            array (
                'PokemonGrupoHuevoID' => 217,
                'PokemonID' => 154,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            217 => 
            array (
                'PokemonGrupoHuevoID' => 218,
                'PokemonID' => 155,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            218 => 
            array (
                'PokemonGrupoHuevoID' => 219,
                'PokemonID' => 156,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            219 => 
            array (
                'PokemonGrupoHuevoID' => 220,
                'PokemonID' => 157,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            220 => 
            array (
                'PokemonGrupoHuevoID' => 221,
                'PokemonID' => 158,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            221 => 
            array (
                'PokemonGrupoHuevoID' => 222,
                'PokemonID' => 159,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            222 => 
            array (
                'PokemonGrupoHuevoID' => 223,
                'PokemonID' => 160,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            223 => 
            array (
                'PokemonGrupoHuevoID' => 224,
                'PokemonID' => 161,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            224 => 
            array (
                'PokemonGrupoHuevoID' => 225,
                'PokemonID' => 162,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            225 => 
            array (
                'PokemonGrupoHuevoID' => 226,
                'PokemonID' => 162,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            226 => 
            array (
                'PokemonGrupoHuevoID' => 227,
                'PokemonID' => 163,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            227 => 
            array (
                'PokemonGrupoHuevoID' => 228,
                'PokemonID' => 163,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            228 => 
            array (
                'PokemonGrupoHuevoID' => 229,
                'PokemonID' => 164,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            229 => 
            array (
                'PokemonGrupoHuevoID' => 230,
                'PokemonID' => 165,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            230 => 
            array (
                'PokemonGrupoHuevoID' => 231,
                'PokemonID' => 166,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            231 => 
            array (
                'PokemonGrupoHuevoID' => 232,
                'PokemonID' => 166,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            232 => 
            array (
                'PokemonGrupoHuevoID' => 233,
                'PokemonID' => 167,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            233 => 
            array (
                'PokemonGrupoHuevoID' => 234,
                'PokemonID' => 167,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            234 => 
            array (
                'PokemonGrupoHuevoID' => 235,
                'PokemonID' => 168,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            235 => 
            array (
                'PokemonGrupoHuevoID' => 236,
                'PokemonID' => 169,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            236 => 
            array (
                'PokemonGrupoHuevoID' => 237,
                'PokemonID' => 170,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            237 => 
            array (
                'PokemonGrupoHuevoID' => 238,
                'PokemonID' => 171,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            238 => 
            array (
                'PokemonGrupoHuevoID' => 239,
                'PokemonID' => 172,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            239 => 
            array (
                'PokemonGrupoHuevoID' => 240,
                'PokemonID' => 173,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            240 => 
            array (
                'PokemonGrupoHuevoID' => 241,
                'PokemonID' => 174,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            241 => 
            array (
                'PokemonGrupoHuevoID' => 242,
                'PokemonID' => 175,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            242 => 
            array (
                'PokemonGrupoHuevoID' => 243,
                'PokemonID' => 176,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            243 => 
            array (
                'PokemonGrupoHuevoID' => 244,
                'PokemonID' => 177,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            244 => 
            array (
                'PokemonGrupoHuevoID' => 245,
                'PokemonID' => 178,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            245 => 
            array (
                'PokemonGrupoHuevoID' => 246,
                'PokemonID' => 179,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            246 => 
            array (
                'PokemonGrupoHuevoID' => 247,
                'PokemonID' => 180,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            247 => 
            array (
                'PokemonGrupoHuevoID' => 248,
                'PokemonID' => 181,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            248 => 
            array (
                'PokemonGrupoHuevoID' => 249,
                'PokemonID' => 182,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            249 => 
            array (
                'PokemonGrupoHuevoID' => 250,
                'PokemonID' => 183,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            250 => 
            array (
                'PokemonGrupoHuevoID' => 251,
                'PokemonID' => 184,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            251 => 
            array (
                'PokemonGrupoHuevoID' => 252,
                'PokemonID' => 185,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            252 => 
            array (
                'PokemonGrupoHuevoID' => 253,
                'PokemonID' => 186,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            253 => 
            array (
                'PokemonGrupoHuevoID' => 254,
                'PokemonID' => 187,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            254 => 
            array (
                'PokemonGrupoHuevoID' => 255,
                'PokemonID' => 188,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            255 => 
            array (
                'PokemonGrupoHuevoID' => 256,
                'PokemonID' => 189,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            256 => 
            array (
                'PokemonGrupoHuevoID' => 257,
                'PokemonID' => 190,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            257 => 
            array (
                'PokemonGrupoHuevoID' => 258,
                'PokemonID' => 191,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            258 => 
            array (
                'PokemonGrupoHuevoID' => 259,
                'PokemonID' => 192,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            259 => 
            array (
                'PokemonGrupoHuevoID' => 260,
                'PokemonID' => 193,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            260 => 
            array (
                'PokemonGrupoHuevoID' => 261,
                'PokemonID' => 194,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            261 => 
            array (
                'PokemonGrupoHuevoID' => 262,
                'PokemonID' => 195,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            262 => 
            array (
                'PokemonGrupoHuevoID' => 263,
                'PokemonID' => 196,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            263 => 
            array (
                'PokemonGrupoHuevoID' => 264,
                'PokemonID' => 197,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            264 => 
            array (
                'PokemonGrupoHuevoID' => 265,
                'PokemonID' => 198,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            265 => 
            array (
                'PokemonGrupoHuevoID' => 266,
                'PokemonID' => 199,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            266 => 
            array (
                'PokemonGrupoHuevoID' => 267,
                'PokemonID' => 199,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            267 => 
            array (
                'PokemonGrupoHuevoID' => 268,
                'PokemonID' => 200,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            268 => 
            array (
                'PokemonGrupoHuevoID' => 269,
                'PokemonID' => 200,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            269 => 
            array (
                'PokemonGrupoHuevoID' => 270,
                'PokemonID' => 201,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            270 => 
            array (
                'PokemonGrupoHuevoID' => 271,
                'PokemonID' => 202,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            271 => 
            array (
                'PokemonGrupoHuevoID' => 272,
                'PokemonID' => 205,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            272 => 
            array (
                'PokemonGrupoHuevoID' => 273,
                'PokemonID' => 206,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            273 => 
            array (
                'PokemonGrupoHuevoID' => 274,
                'PokemonID' => 209,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            274 => 
            array (
                'PokemonGrupoHuevoID' => 275,
                'PokemonID' => 210,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            275 => 
            array (
                'PokemonGrupoHuevoID' => 276,
                'PokemonID' => 211,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            276 => 
            array (
                'PokemonGrupoHuevoID' => 277,
                'PokemonID' => 212,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            277 => 
            array (
                'PokemonGrupoHuevoID' => 278,
                'PokemonID' => 213,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            278 => 
            array (
                'PokemonGrupoHuevoID' => 279,
                'PokemonID' => 214,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            279 => 
            array (
                'PokemonGrupoHuevoID' => 280,
                'PokemonID' => 215,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            280 => 
            array (
                'PokemonGrupoHuevoID' => 281,
                'PokemonID' => 215,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            281 => 
            array (
                'PokemonGrupoHuevoID' => 282,
                'PokemonID' => 216,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            282 => 
            array (
                'PokemonGrupoHuevoID' => 283,
                'PokemonID' => 216,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            283 => 
            array (
                'PokemonGrupoHuevoID' => 284,
                'PokemonID' => 217,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            284 => 
            array (
                'PokemonGrupoHuevoID' => 285,
                'PokemonID' => 218,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            285 => 
            array (
                'PokemonGrupoHuevoID' => 286,
                'PokemonID' => 219,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            286 => 
            array (
                'PokemonGrupoHuevoID' => 287,
                'PokemonID' => 220,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            287 => 
            array (
                'PokemonGrupoHuevoID' => 288,
                'PokemonID' => 223,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            288 => 
            array (
                'PokemonGrupoHuevoID' => 289,
                'PokemonID' => 224,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            289 => 
            array (
                'PokemonGrupoHuevoID' => 290,
                'PokemonID' => 225,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            290 => 
            array (
                'PokemonGrupoHuevoID' => 291,
                'PokemonID' => 226,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            291 => 
            array (
                'PokemonGrupoHuevoID' => 292,
                'PokemonID' => 227,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            292 => 
            array (
                'PokemonGrupoHuevoID' => 293,
                'PokemonID' => 228,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            293 => 
            array (
                'PokemonGrupoHuevoID' => 294,
                'PokemonID' => 231,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            294 => 
            array (
                'PokemonGrupoHuevoID' => 295,
                'PokemonID' => 231,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            295 => 
            array (
                'PokemonGrupoHuevoID' => 296,
                'PokemonID' => 232,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            296 => 
            array (
                'PokemonGrupoHuevoID' => 297,
                'PokemonID' => 232,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            297 => 
            array (
                'PokemonGrupoHuevoID' => 298,
                'PokemonID' => 233,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            298 => 
            array (
                'PokemonGrupoHuevoID' => 299,
                'PokemonID' => 233,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            299 => 
            array (
                'PokemonGrupoHuevoID' => 300,
                'PokemonID' => 234,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            300 => 
            array (
                'PokemonGrupoHuevoID' => 301,
                'PokemonID' => 235,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            301 => 
            array (
                'PokemonGrupoHuevoID' => 302,
                'PokemonID' => 236,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            302 => 
            array (
                'PokemonGrupoHuevoID' => 303,
                'PokemonID' => 237,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            303 => 
            array (
                'PokemonGrupoHuevoID' => 304,
                'PokemonID' => 238,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            304 => 
            array (
                'PokemonGrupoHuevoID' => 305,
                'PokemonID' => 238,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            305 => 
            array (
                'PokemonGrupoHuevoID' => 306,
                'PokemonID' => 239,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            306 => 
            array (
                'PokemonGrupoHuevoID' => 307,
                'PokemonID' => 239,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            307 => 
            array (
                'PokemonGrupoHuevoID' => 308,
                'PokemonID' => 240,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            308 => 
            array (
                'PokemonGrupoHuevoID' => 309,
                'PokemonID' => 240,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            309 => 
            array (
                'PokemonGrupoHuevoID' => 310,
                'PokemonID' => 241,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            310 => 
            array (
                'PokemonGrupoHuevoID' => 311,
                'PokemonID' => 241,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            311 => 
            array (
                'PokemonGrupoHuevoID' => 312,
                'PokemonID' => 242,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            312 => 
            array (
                'PokemonGrupoHuevoID' => 313,
                'PokemonID' => 242,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            313 => 
            array (
                'PokemonGrupoHuevoID' => 314,
                'PokemonID' => 243,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            314 => 
            array (
                'PokemonGrupoHuevoID' => 315,
                'PokemonID' => 243,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            315 => 
            array (
                'PokemonGrupoHuevoID' => 316,
                'PokemonID' => 244,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            316 => 
            array (
                'PokemonGrupoHuevoID' => 317,
                'PokemonID' => 244,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            317 => 
            array (
                'PokemonGrupoHuevoID' => 318,
                'PokemonID' => 245,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            318 => 
            array (
                'PokemonGrupoHuevoID' => 319,
                'PokemonID' => 245,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            319 => 
            array (
                'PokemonGrupoHuevoID' => 320,
                'PokemonID' => 246,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            320 => 
            array (
                'PokemonGrupoHuevoID' => 321,
                'PokemonID' => 246,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            321 => 
            array (
                'PokemonGrupoHuevoID' => 322,
                'PokemonID' => 247,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            322 => 
            array (
                'PokemonGrupoHuevoID' => 323,
                'PokemonID' => 247,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            323 => 
            array (
                'PokemonGrupoHuevoID' => 324,
                'PokemonID' => 248,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            324 => 
            array (
                'PokemonGrupoHuevoID' => 325,
                'PokemonID' => 249,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            325 => 
            array (
                'PokemonGrupoHuevoID' => 326,
                'PokemonID' => 250,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            326 => 
            array (
                'PokemonGrupoHuevoID' => 327,
                'PokemonID' => 251,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            327 => 
            array (
                'PokemonGrupoHuevoID' => 328,
                'PokemonID' => 252,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            328 => 
            array (
                'PokemonGrupoHuevoID' => 329,
                'PokemonID' => 253,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            329 => 
            array (
                'PokemonGrupoHuevoID' => 330,
                'PokemonID' => 254,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            330 => 
            array (
                'PokemonGrupoHuevoID' => 331,
                'PokemonID' => 255,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            331 => 
            array (
                'PokemonGrupoHuevoID' => 332,
                'PokemonID' => 256,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            332 => 
            array (
                'PokemonGrupoHuevoID' => 333,
                'PokemonID' => 257,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            333 => 
            array (
                'PokemonGrupoHuevoID' => 334,
                'PokemonID' => 258,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            334 => 
            array (
                'PokemonGrupoHuevoID' => 335,
                'PokemonID' => 259,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            335 => 
            array (
                'PokemonGrupoHuevoID' => 336,
                'PokemonID' => 259,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            336 => 
            array (
                'PokemonGrupoHuevoID' => 337,
                'PokemonID' => 263,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            337 => 
            array (
                'PokemonGrupoHuevoID' => 338,
                'PokemonID' => 264,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            338 => 
            array (
                'PokemonGrupoHuevoID' => 339,
                'PokemonID' => 265,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            339 => 
            array (
                'PokemonGrupoHuevoID' => 340,
                'PokemonID' => 266,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            340 => 
            array (
                'PokemonGrupoHuevoID' => 341,
                'PokemonID' => 266,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            341 => 
            array (
                'PokemonGrupoHuevoID' => 342,
                'PokemonID' => 267,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            342 => 
            array (
                'PokemonGrupoHuevoID' => 343,
                'PokemonID' => 267,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            343 => 
            array (
                'PokemonGrupoHuevoID' => 344,
                'PokemonID' => 268,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            344 => 
            array (
                'PokemonGrupoHuevoID' => 345,
                'PokemonID' => 268,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            345 => 
            array (
                'PokemonGrupoHuevoID' => 346,
                'PokemonID' => 269,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            346 => 
            array (
                'PokemonGrupoHuevoID' => 347,
                'PokemonID' => 269,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            347 => 
            array (
                'PokemonGrupoHuevoID' => 348,
                'PokemonID' => 270,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            348 => 
            array (
                'PokemonGrupoHuevoID' => 349,
                'PokemonID' => 271,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            349 => 
            array (
                'PokemonGrupoHuevoID' => 350,
                'PokemonID' => 272,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            350 => 
            array (
                'PokemonGrupoHuevoID' => 351,
                'PokemonID' => 273,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            351 => 
            array (
                'PokemonGrupoHuevoID' => 352,
                'PokemonID' => 274,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            352 => 
            array (
                'PokemonGrupoHuevoID' => 353,
                'PokemonID' => 275,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            353 => 
            array (
                'PokemonGrupoHuevoID' => 354,
                'PokemonID' => 276,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            354 => 
            array (
                'PokemonGrupoHuevoID' => 355,
                'PokemonID' => 277,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            355 => 
            array (
                'PokemonGrupoHuevoID' => 356,
                'PokemonID' => 278,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            356 => 
            array (
                'PokemonGrupoHuevoID' => 357,
                'PokemonID' => 279,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            357 => 
            array (
                'PokemonGrupoHuevoID' => 358,
                'PokemonID' => 280,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            358 => 
            array (
                'PokemonGrupoHuevoID' => 359,
                'PokemonID' => 281,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            359 => 
            array (
                'PokemonGrupoHuevoID' => 360,
                'PokemonID' => 281,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            360 => 
            array (
                'PokemonGrupoHuevoID' => 361,
                'PokemonID' => 282,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            361 => 
            array (
                'PokemonGrupoHuevoID' => 362,
                'PokemonID' => 282,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            362 => 
            array (
                'PokemonGrupoHuevoID' => 363,
                'PokemonID' => 286,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            363 => 
            array (
                'PokemonGrupoHuevoID' => 364,
                'PokemonID' => 287,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            364 => 
            array (
                'PokemonGrupoHuevoID' => 365,
                'PokemonID' => 288,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            365 => 
            array (
                'PokemonGrupoHuevoID' => 366,
                'PokemonID' => 289,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            366 => 
            array (
                'PokemonGrupoHuevoID' => 367,
                'PokemonID' => 290,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            367 => 
            array (
                'PokemonGrupoHuevoID' => 368,
                'PokemonID' => 291,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            368 => 
            array (
                'PokemonGrupoHuevoID' => 369,
                'PokemonID' => 294,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            369 => 
            array (
                'PokemonGrupoHuevoID' => 370,
                'PokemonID' => 294,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            370 => 
            array (
                'PokemonGrupoHuevoID' => 371,
                'PokemonID' => 295,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            371 => 
            array (
                'PokemonGrupoHuevoID' => 372,
                'PokemonID' => 296,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            372 => 
            array (
                'PokemonGrupoHuevoID' => 373,
                'PokemonID' => 296,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            373 => 
            array (
                'PokemonGrupoHuevoID' => 374,
                'PokemonID' => 297,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            374 => 
            array (
                'PokemonGrupoHuevoID' => 375,
                'PokemonID' => 297,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            375 => 
            array (
                'PokemonGrupoHuevoID' => 376,
                'PokemonID' => 298,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            376 => 
            array (
                'PokemonGrupoHuevoID' => 377,
                'PokemonID' => 298,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            377 => 
            array (
                'PokemonGrupoHuevoID' => 378,
                'PokemonID' => 299,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            378 => 
            array (
                'PokemonGrupoHuevoID' => 379,
                'PokemonID' => 299,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            379 => 
            array (
                'PokemonGrupoHuevoID' => 380,
                'PokemonID' => 300,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            380 => 
            array (
                'PokemonGrupoHuevoID' => 381,
                'PokemonID' => 301,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            381 => 
            array (
                'PokemonGrupoHuevoID' => 382,
                'PokemonID' => 302,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            382 => 
            array (
                'PokemonGrupoHuevoID' => 383,
                'PokemonID' => 303,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            383 => 
            array (
                'PokemonGrupoHuevoID' => 384,
                'PokemonID' => 304,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            384 => 
            array (
                'PokemonGrupoHuevoID' => 385,
                'PokemonID' => 304,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            385 => 
            array (
                'PokemonGrupoHuevoID' => 386,
                'PokemonID' => 305,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            386 => 
            array (
                'PokemonGrupoHuevoID' => 387,
                'PokemonID' => 306,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            387 => 
            array (
                'PokemonGrupoHuevoID' => 388,
                'PokemonID' => 307,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            388 => 
            array (
                'PokemonGrupoHuevoID' => 389,
                'PokemonID' => 308,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            389 => 
            array (
                'PokemonGrupoHuevoID' => 390,
                'PokemonID' => 309,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            390 => 
            array (
                'PokemonGrupoHuevoID' => 391,
                'PokemonID' => 310,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            391 => 
            array (
                'PokemonGrupoHuevoID' => 392,
                'PokemonID' => 311,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            392 => 
            array (
                'PokemonGrupoHuevoID' => 393,
                'PokemonID' => 312,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            393 => 
            array (
                'PokemonGrupoHuevoID' => 394,
                'PokemonID' => 313,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            394 => 
            array (
                'PokemonGrupoHuevoID' => 395,
                'PokemonID' => 314,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            395 => 
            array (
                'PokemonGrupoHuevoID' => 396,
                'PokemonID' => 314,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            396 => 
            array (
                'PokemonGrupoHuevoID' => 397,
                'PokemonID' => 315,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            397 => 
            array (
                'PokemonGrupoHuevoID' => 398,
                'PokemonID' => 315,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            398 => 
            array (
                'PokemonGrupoHuevoID' => 399,
                'PokemonID' => 316,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            399 => 
            array (
                'PokemonGrupoHuevoID' => 400,
                'PokemonID' => 316,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            400 => 
            array (
                'PokemonGrupoHuevoID' => 401,
                'PokemonID' => 317,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            401 => 
            array (
                'PokemonGrupoHuevoID' => 402,
                'PokemonID' => 317,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            402 => 
            array (
                'PokemonGrupoHuevoID' => 403,
                'PokemonID' => 318,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            403 => 
            array (
                'PokemonGrupoHuevoID' => 404,
                'PokemonID' => 318,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            404 => 
            array (
                'PokemonGrupoHuevoID' => 405,
                'PokemonID' => 319,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            405 => 
            array (
                'PokemonGrupoHuevoID' => 406,
                'PokemonID' => 320,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            406 => 
            array (
                'PokemonGrupoHuevoID' => 407,
                'PokemonID' => 321,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            407 => 
            array (
                'PokemonGrupoHuevoID' => 408,
                'PokemonID' => 322,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            408 => 
            array (
                'PokemonGrupoHuevoID' => 409,
                'PokemonID' => 323,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            409 => 
            array (
                'PokemonGrupoHuevoID' => 410,
                'PokemonID' => 323,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            410 => 
            array (
                'PokemonGrupoHuevoID' => 411,
                'PokemonID' => 331,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            411 => 
            array (
                'PokemonGrupoHuevoID' => 412,
                'PokemonID' => 332,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            412 => 
            array (
                'PokemonGrupoHuevoID' => 413,
                'PokemonID' => 333,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            413 => 
            array (
                'PokemonGrupoHuevoID' => 414,
                'PokemonID' => 334,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            414 => 
            array (
                'PokemonGrupoHuevoID' => 415,
                'PokemonID' => 335,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            415 => 
            array (
                'PokemonGrupoHuevoID' => 416,
                'PokemonID' => 336,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            416 => 
            array (
                'PokemonGrupoHuevoID' => 417,
                'PokemonID' => 339,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            417 => 
            array (
                'PokemonGrupoHuevoID' => 418,
                'PokemonID' => 340,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            418 => 
            array (
                'PokemonGrupoHuevoID' => 419,
                'PokemonID' => 344,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            419 => 
            array (
                'PokemonGrupoHuevoID' => 420,
                'PokemonID' => 345,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            420 => 
            array (
                'PokemonGrupoHuevoID' => 421,
                'PokemonID' => 346,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            421 => 
            array (
                'PokemonGrupoHuevoID' => 422,
                'PokemonID' => 347,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            422 => 
            array (
                'PokemonGrupoHuevoID' => 423,
                'PokemonID' => 348,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            423 => 
            array (
                'PokemonGrupoHuevoID' => 424,
                'PokemonID' => 349,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            424 => 
            array (
                'PokemonGrupoHuevoID' => 425,
                'PokemonID' => 350,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:26',
                'updated_at' => '2023-07-16 13:17:26',
            ),
            425 => 
            array (
                'PokemonGrupoHuevoID' => 426,
                'PokemonID' => 355,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            426 => 
            array (
                'PokemonGrupoHuevoID' => 427,
                'PokemonID' => 355,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            427 => 
            array (
                'PokemonGrupoHuevoID' => 428,
                'PokemonID' => 357,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            428 => 
            array (
                'PokemonGrupoHuevoID' => 429,
                'PokemonID' => 366,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            429 => 
            array (
                'PokemonGrupoHuevoID' => 430,
                'PokemonID' => 367,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            430 => 
            array (
                'PokemonGrupoHuevoID' => 431,
                'PokemonID' => 368,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            431 => 
            array (
                'PokemonGrupoHuevoID' => 432,
                'PokemonID' => 369,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            432 => 
            array (
                'PokemonGrupoHuevoID' => 433,
                'PokemonID' => 370,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            433 => 
            array (
                'PokemonGrupoHuevoID' => 434,
                'PokemonID' => 371,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            434 => 
            array (
                'PokemonGrupoHuevoID' => 435,
                'PokemonID' => 372,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            435 => 
            array (
                'PokemonGrupoHuevoID' => 436,
                'PokemonID' => 373,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            436 => 
            array (
                'PokemonGrupoHuevoID' => 437,
                'PokemonID' => 374,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            437 => 
            array (
                'PokemonGrupoHuevoID' => 438,
                'PokemonID' => 375,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            438 => 
            array (
                'PokemonGrupoHuevoID' => 439,
                'PokemonID' => 376,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            439 => 
            array (
                'PokemonGrupoHuevoID' => 440,
                'PokemonID' => 377,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            440 => 
            array (
                'PokemonGrupoHuevoID' => 441,
                'PokemonID' => 378,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            441 => 
            array (
                'PokemonGrupoHuevoID' => 442,
                'PokemonID' => 379,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            442 => 
            array (
                'PokemonGrupoHuevoID' => 443,
                'PokemonID' => 380,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            443 => 
            array (
                'PokemonGrupoHuevoID' => 444,
                'PokemonID' => 381,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            444 => 
            array (
                'PokemonGrupoHuevoID' => 445,
                'PokemonID' => 382,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            445 => 
            array (
                'PokemonGrupoHuevoID' => 446,
                'PokemonID' => 383,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            446 => 
            array (
                'PokemonGrupoHuevoID' => 447,
                'PokemonID' => 384,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            447 => 
            array (
                'PokemonGrupoHuevoID' => 448,
                'PokemonID' => 385,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            448 => 
            array (
                'PokemonGrupoHuevoID' => 449,
                'PokemonID' => 386,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            449 => 
            array (
                'PokemonGrupoHuevoID' => 450,
                'PokemonID' => 387,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            450 => 
            array (
                'PokemonGrupoHuevoID' => 451,
                'PokemonID' => 388,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            451 => 
            array (
                'PokemonGrupoHuevoID' => 452,
                'PokemonID' => 389,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            452 => 
            array (
                'PokemonGrupoHuevoID' => 453,
                'PokemonID' => 390,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            453 => 
            array (
                'PokemonGrupoHuevoID' => 454,
                'PokemonID' => 391,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            454 => 
            array (
                'PokemonGrupoHuevoID' => 455,
                'PokemonID' => 391,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            455 => 
            array (
                'PokemonGrupoHuevoID' => 456,
                'PokemonID' => 396,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            456 => 
            array (
                'PokemonGrupoHuevoID' => 457,
                'PokemonID' => 397,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            457 => 
            array (
                'PokemonGrupoHuevoID' => 458,
                'PokemonID' => 398,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            458 => 
            array (
                'PokemonGrupoHuevoID' => 459,
                'PokemonID' => 403,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            459 => 
            array (
                'PokemonGrupoHuevoID' => 460,
                'PokemonID' => 404,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            460 => 
            array (
                'PokemonGrupoHuevoID' => 461,
                'PokemonID' => 405,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            461 => 
            array (
                'PokemonGrupoHuevoID' => 462,
                'PokemonID' => 406,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            462 => 
            array (
                'PokemonGrupoHuevoID' => 463,
                'PokemonID' => 407,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            463 => 
            array (
                'PokemonGrupoHuevoID' => 464,
                'PokemonID' => 408,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            464 => 
            array (
                'PokemonGrupoHuevoID' => 465,
                'PokemonID' => 409,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            465 => 
            array (
                'PokemonGrupoHuevoID' => 466,
                'PokemonID' => 410,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            466 => 
            array (
                'PokemonGrupoHuevoID' => 467,
                'PokemonID' => 411,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            467 => 
            array (
                'PokemonGrupoHuevoID' => 468,
                'PokemonID' => 412,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            468 => 
            array (
                'PokemonGrupoHuevoID' => 469,
                'PokemonID' => 413,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            469 => 
            array (
                'PokemonGrupoHuevoID' => 470,
                'PokemonID' => 414,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            470 => 
            array (
                'PokemonGrupoHuevoID' => 471,
                'PokemonID' => 414,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            471 => 
            array (
                'PokemonGrupoHuevoID' => 472,
                'PokemonID' => 415,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            472 => 
            array (
                'PokemonGrupoHuevoID' => 473,
                'PokemonID' => 415,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            473 => 
            array (
                'PokemonGrupoHuevoID' => 474,
                'PokemonID' => 416,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            474 => 
            array (
                'PokemonGrupoHuevoID' => 475,
                'PokemonID' => 417,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            475 => 
            array (
                'PokemonGrupoHuevoID' => 476,
                'PokemonID' => 418,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            476 => 
            array (
                'PokemonGrupoHuevoID' => 477,
                'PokemonID' => 419,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            477 => 
            array (
                'PokemonGrupoHuevoID' => 478,
                'PokemonID' => 420,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            478 => 
            array (
                'PokemonGrupoHuevoID' => 479,
                'PokemonID' => 420,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            479 => 
            array (
                'PokemonGrupoHuevoID' => 480,
                'PokemonID' => 421,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            480 => 
            array (
                'PokemonGrupoHuevoID' => 481,
                'PokemonID' => 421,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            481 => 
            array (
                'PokemonGrupoHuevoID' => 482,
                'PokemonID' => 422,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            482 => 
            array (
                'PokemonGrupoHuevoID' => 483,
                'PokemonID' => 423,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            483 => 
            array (
                'PokemonGrupoHuevoID' => 484,
                'PokemonID' => 424,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            484 => 
            array (
                'PokemonGrupoHuevoID' => 485,
                'PokemonID' => 425,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            485 => 
            array (
                'PokemonGrupoHuevoID' => 486,
                'PokemonID' => 426,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            486 => 
            array (
                'PokemonGrupoHuevoID' => 487,
                'PokemonID' => 427,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            487 => 
            array (
                'PokemonGrupoHuevoID' => 488,
                'PokemonID' => 428,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            488 => 
            array (
                'PokemonGrupoHuevoID' => 489,
                'PokemonID' => 429,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            489 => 
            array (
                'PokemonGrupoHuevoID' => 490,
                'PokemonID' => 430,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            490 => 
            array (
                'PokemonGrupoHuevoID' => 491,
                'PokemonID' => 431,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            491 => 
            array (
                'PokemonGrupoHuevoID' => 492,
                'PokemonID' => 432,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            492 => 
            array (
                'PokemonGrupoHuevoID' => 493,
                'PokemonID' => 433,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            493 => 
            array (
                'PokemonGrupoHuevoID' => 494,
                'PokemonID' => 433,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            494 => 
            array (
                'PokemonGrupoHuevoID' => 495,
                'PokemonID' => 434,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            495 => 
            array (
                'PokemonGrupoHuevoID' => 496,
                'PokemonID' => 434,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            496 => 
            array (
                'PokemonGrupoHuevoID' => 497,
                'PokemonID' => 435,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            497 => 
            array (
                'PokemonGrupoHuevoID' => 498,
                'PokemonID' => 435,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            498 => 
            array (
                'PokemonGrupoHuevoID' => 499,
                'PokemonID' => 436,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            499 => 
            array (
                'PokemonGrupoHuevoID' => 500,
                'PokemonID' => 436,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
        ));
        \DB::table('PokemonGrupoHuevo')->insert(array (
            0 => 
            array (
                'PokemonGrupoHuevoID' => 501,
                'PokemonID' => 437,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            1 => 
            array (
                'PokemonGrupoHuevoID' => 502,
                'PokemonID' => 438,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            2 => 
            array (
                'PokemonGrupoHuevoID' => 503,
                'PokemonID' => 439,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            3 => 
            array (
                'PokemonGrupoHuevoID' => 504,
                'PokemonID' => 440,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            4 => 
            array (
                'PokemonGrupoHuevoID' => 505,
                'PokemonID' => 441,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            5 => 
            array (
                'PokemonGrupoHuevoID' => 506,
                'PokemonID' => 442,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            6 => 
            array (
                'PokemonGrupoHuevoID' => 507,
                'PokemonID' => 443,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            7 => 
            array (
                'PokemonGrupoHuevoID' => 508,
                'PokemonID' => 444,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            8 => 
            array (
                'PokemonGrupoHuevoID' => 509,
                'PokemonID' => 445,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            9 => 
            array (
                'PokemonGrupoHuevoID' => 510,
                'PokemonID' => 446,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            10 => 
            array (
                'PokemonGrupoHuevoID' => 511,
                'PokemonID' => 446,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            11 => 
            array (
                'PokemonGrupoHuevoID' => 512,
                'PokemonID' => 447,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            12 => 
            array (
                'PokemonGrupoHuevoID' => 513,
                'PokemonID' => 447,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            13 => 
            array (
                'PokemonGrupoHuevoID' => 514,
                'PokemonID' => 448,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            14 => 
            array (
                'PokemonGrupoHuevoID' => 515,
                'PokemonID' => 448,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            15 => 
            array (
                'PokemonGrupoHuevoID' => 516,
                'PokemonID' => 449,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            16 => 
            array (
                'PokemonGrupoHuevoID' => 517,
                'PokemonID' => 449,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            17 => 
            array (
                'PokemonGrupoHuevoID' => 518,
                'PokemonID' => 450,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            18 => 
            array (
                'PokemonGrupoHuevoID' => 519,
                'PokemonID' => 450,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            19 => 
            array (
                'PokemonGrupoHuevoID' => 520,
                'PokemonID' => 451,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            20 => 
            array (
                'PokemonGrupoHuevoID' => 521,
                'PokemonID' => 451,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            21 => 
            array (
                'PokemonGrupoHuevoID' => 522,
                'PokemonID' => 452,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            22 => 
            array (
                'PokemonGrupoHuevoID' => 523,
                'PokemonID' => 452,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            23 => 
            array (
                'PokemonGrupoHuevoID' => 524,
                'PokemonID' => 453,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            24 => 
            array (
                'PokemonGrupoHuevoID' => 525,
                'PokemonID' => 453,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            25 => 
            array (
                'PokemonGrupoHuevoID' => 526,
                'PokemonID' => 454,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            26 => 
            array (
                'PokemonGrupoHuevoID' => 527,
                'PokemonID' => 454,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            27 => 
            array (
                'PokemonGrupoHuevoID' => 528,
                'PokemonID' => 455,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            28 => 
            array (
                'PokemonGrupoHuevoID' => 529,
                'PokemonID' => 456,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            29 => 
            array (
                'PokemonGrupoHuevoID' => 530,
                'PokemonID' => 457,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            30 => 
            array (
                'PokemonGrupoHuevoID' => 531,
                'PokemonID' => 458,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            31 => 
            array (
                'PokemonGrupoHuevoID' => 532,
                'PokemonID' => 459,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            32 => 
            array (
                'PokemonGrupoHuevoID' => 533,
                'PokemonID' => 460,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            33 => 
            array (
                'PokemonGrupoHuevoID' => 534,
                'PokemonID' => 461,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            34 => 
            array (
                'PokemonGrupoHuevoID' => 535,
                'PokemonID' => 461,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            35 => 
            array (
                'PokemonGrupoHuevoID' => 536,
                'PokemonID' => 462,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            36 => 
            array (
                'PokemonGrupoHuevoID' => 537,
                'PokemonID' => 462,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            37 => 
            array (
                'PokemonGrupoHuevoID' => 538,
                'PokemonID' => 463,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            38 => 
            array (
                'PokemonGrupoHuevoID' => 539,
                'PokemonID' => 463,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            39 => 
            array (
                'PokemonGrupoHuevoID' => 540,
                'PokemonID' => 464,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            40 => 
            array (
                'PokemonGrupoHuevoID' => 541,
                'PokemonID' => 464,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            41 => 
            array (
                'PokemonGrupoHuevoID' => 542,
                'PokemonID' => 465,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            42 => 
            array (
                'PokemonGrupoHuevoID' => 543,
                'PokemonID' => 465,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            43 => 
            array (
                'PokemonGrupoHuevoID' => 544,
                'PokemonID' => 466,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            44 => 
            array (
                'PokemonGrupoHuevoID' => 545,
                'PokemonID' => 466,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            45 => 
            array (
                'PokemonGrupoHuevoID' => 546,
                'PokemonID' => 467,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            46 => 
            array (
                'PokemonGrupoHuevoID' => 547,
                'PokemonID' => 468,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            47 => 
            array (
                'PokemonGrupoHuevoID' => 548,
                'PokemonID' => 469,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            48 => 
            array (
                'PokemonGrupoHuevoID' => 549,
                'PokemonID' => 470,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            49 => 
            array (
                'PokemonGrupoHuevoID' => 550,
                'PokemonID' => 471,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            50 => 
            array (
                'PokemonGrupoHuevoID' => 551,
                'PokemonID' => 472,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            51 => 
            array (
                'PokemonGrupoHuevoID' => 552,
                'PokemonID' => 473,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            52 => 
            array (
                'PokemonGrupoHuevoID' => 553,
                'PokemonID' => 474,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            53 => 
            array (
                'PokemonGrupoHuevoID' => 554,
                'PokemonID' => 475,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            54 => 
            array (
                'PokemonGrupoHuevoID' => 555,
                'PokemonID' => 476,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            55 => 
            array (
                'PokemonGrupoHuevoID' => 556,
                'PokemonID' => 477,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            56 => 
            array (
                'PokemonGrupoHuevoID' => 557,
                'PokemonID' => 478,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            57 => 
            array (
                'PokemonGrupoHuevoID' => 558,
                'PokemonID' => 479,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            58 => 
            array (
                'PokemonGrupoHuevoID' => 559,
                'PokemonID' => 479,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            59 => 
            array (
                'PokemonGrupoHuevoID' => 560,
                'PokemonID' => 480,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            60 => 
            array (
                'PokemonGrupoHuevoID' => 561,
                'PokemonID' => 480,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            61 => 
            array (
                'PokemonGrupoHuevoID' => 562,
                'PokemonID' => 481,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            62 => 
            array (
                'PokemonGrupoHuevoID' => 563,
                'PokemonID' => 481,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            63 => 
            array (
                'PokemonGrupoHuevoID' => 564,
                'PokemonID' => 482,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            64 => 
            array (
                'PokemonGrupoHuevoID' => 565,
                'PokemonID' => 483,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            65 => 
            array (
                'PokemonGrupoHuevoID' => 566,
                'PokemonID' => 484,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            66 => 
            array (
                'PokemonGrupoHuevoID' => 567,
                'PokemonID' => 484,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            67 => 
            array (
                'PokemonGrupoHuevoID' => 568,
                'PokemonID' => 485,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            68 => 
            array (
                'PokemonGrupoHuevoID' => 569,
                'PokemonID' => 485,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            69 => 
            array (
                'PokemonGrupoHuevoID' => 570,
                'PokemonID' => 486,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            70 => 
            array (
                'PokemonGrupoHuevoID' => 571,
                'PokemonID' => 486,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            71 => 
            array (
                'PokemonGrupoHuevoID' => 572,
                'PokemonID' => 487,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            72 => 
            array (
                'PokemonGrupoHuevoID' => 573,
                'PokemonID' => 488,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            73 => 
            array (
                'PokemonGrupoHuevoID' => 574,
                'PokemonID' => 489,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            74 => 
            array (
                'PokemonGrupoHuevoID' => 575,
                'PokemonID' => 490,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            75 => 
            array (
                'PokemonGrupoHuevoID' => 576,
                'PokemonID' => 491,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            76 => 
            array (
                'PokemonGrupoHuevoID' => 577,
                'PokemonID' => 491,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            77 => 
            array (
                'PokemonGrupoHuevoID' => 578,
                'PokemonID' => 492,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            78 => 
            array (
                'PokemonGrupoHuevoID' => 579,
                'PokemonID' => 492,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            79 => 
            array (
                'PokemonGrupoHuevoID' => 580,
                'PokemonID' => 493,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            80 => 
            array (
                'PokemonGrupoHuevoID' => 581,
                'PokemonID' => 493,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            81 => 
            array (
                'PokemonGrupoHuevoID' => 582,
                'PokemonID' => 494,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            82 => 
            array (
                'PokemonGrupoHuevoID' => 583,
                'PokemonID' => 494,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            83 => 
            array (
                'PokemonGrupoHuevoID' => 584,
                'PokemonID' => 495,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            84 => 
            array (
                'PokemonGrupoHuevoID' => 585,
                'PokemonID' => 495,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            85 => 
            array (
                'PokemonGrupoHuevoID' => 586,
                'PokemonID' => 496,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            86 => 
            array (
                'PokemonGrupoHuevoID' => 587,
                'PokemonID' => 497,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            87 => 
            array (
                'PokemonGrupoHuevoID' => 588,
                'PokemonID' => 498,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            88 => 
            array (
                'PokemonGrupoHuevoID' => 589,
                'PokemonID' => 499,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            89 => 
            array (
                'PokemonGrupoHuevoID' => 590,
                'PokemonID' => 500,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            90 => 
            array (
                'PokemonGrupoHuevoID' => 591,
                'PokemonID' => 501,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            91 => 
            array (
                'PokemonGrupoHuevoID' => 592,
                'PokemonID' => 501,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            92 => 
            array (
                'PokemonGrupoHuevoID' => 593,
                'PokemonID' => 502,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            93 => 
            array (
                'PokemonGrupoHuevoID' => 594,
                'PokemonID' => 502,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            94 => 
            array (
                'PokemonGrupoHuevoID' => 595,
                'PokemonID' => 503,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            95 => 
            array (
                'PokemonGrupoHuevoID' => 596,
                'PokemonID' => 503,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            96 => 
            array (
                'PokemonGrupoHuevoID' => 597,
                'PokemonID' => 504,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            97 => 
            array (
                'PokemonGrupoHuevoID' => 598,
                'PokemonID' => 504,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            98 => 
            array (
                'PokemonGrupoHuevoID' => 599,
                'PokemonID' => 505,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            99 => 
            array (
                'PokemonGrupoHuevoID' => 600,
                'PokemonID' => 506,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            100 => 
            array (
                'PokemonGrupoHuevoID' => 601,
                'PokemonID' => 507,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            101 => 
            array (
                'PokemonGrupoHuevoID' => 602,
                'PokemonID' => 508,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            102 => 
            array (
                'PokemonGrupoHuevoID' => 603,
                'PokemonID' => 509,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            103 => 
            array (
                'PokemonGrupoHuevoID' => 604,
                'PokemonID' => 510,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            104 => 
            array (
                'PokemonGrupoHuevoID' => 605,
                'PokemonID' => 513,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            105 => 
            array (
                'PokemonGrupoHuevoID' => 606,
                'PokemonID' => 514,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            106 => 
            array (
                'PokemonGrupoHuevoID' => 607,
                'PokemonID' => 515,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            107 => 
            array (
                'PokemonGrupoHuevoID' => 608,
                'PokemonID' => 516,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            108 => 
            array (
                'PokemonGrupoHuevoID' => 609,
                'PokemonID' => 517,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            109 => 
            array (
                'PokemonGrupoHuevoID' => 610,
                'PokemonID' => 518,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            110 => 
            array (
                'PokemonGrupoHuevoID' => 611,
                'PokemonID' => 519,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            111 => 
            array (
                'PokemonGrupoHuevoID' => 612,
                'PokemonID' => 520,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            112 => 
            array (
                'PokemonGrupoHuevoID' => 613,
                'PokemonID' => 521,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            113 => 
            array (
                'PokemonGrupoHuevoID' => 614,
                'PokemonID' => 522,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            114 => 
            array (
                'PokemonGrupoHuevoID' => 615,
                'PokemonID' => 523,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            115 => 
            array (
                'PokemonGrupoHuevoID' => 616,
                'PokemonID' => 524,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            116 => 
            array (
                'PokemonGrupoHuevoID' => 617,
                'PokemonID' => 525,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            117 => 
            array (
                'PokemonGrupoHuevoID' => 618,
                'PokemonID' => 526,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            118 => 
            array (
                'PokemonGrupoHuevoID' => 619,
                'PokemonID' => 527,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            119 => 
            array (
                'PokemonGrupoHuevoID' => 620,
                'PokemonID' => 528,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            120 => 
            array (
                'PokemonGrupoHuevoID' => 621,
                'PokemonID' => 529,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            121 => 
            array (
                'PokemonGrupoHuevoID' => 622,
                'PokemonID' => 530,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            122 => 
            array (
                'PokemonGrupoHuevoID' => 623,
                'PokemonID' => 531,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            123 => 
            array (
                'PokemonGrupoHuevoID' => 624,
                'PokemonID' => 531,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            124 => 
            array (
                'PokemonGrupoHuevoID' => 625,
                'PokemonID' => 532,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            125 => 
            array (
                'PokemonGrupoHuevoID' => 626,
                'PokemonID' => 532,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            126 => 
            array (
                'PokemonGrupoHuevoID' => 627,
                'PokemonID' => 533,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            127 => 
            array (
                'PokemonGrupoHuevoID' => 628,
                'PokemonID' => 533,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            128 => 
            array (
                'PokemonGrupoHuevoID' => 629,
                'PokemonID' => 534,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            129 => 
            array (
                'PokemonGrupoHuevoID' => 630,
                'PokemonID' => 534,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            130 => 
            array (
                'PokemonGrupoHuevoID' => 631,
                'PokemonID' => 535,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            131 => 
            array (
                'PokemonGrupoHuevoID' => 632,
                'PokemonID' => 535,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            132 => 
            array (
                'PokemonGrupoHuevoID' => 633,
                'PokemonID' => 536,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            133 => 
            array (
                'PokemonGrupoHuevoID' => 634,
                'PokemonID' => 537,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            134 => 
            array (
                'PokemonGrupoHuevoID' => 635,
                'PokemonID' => 538,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            135 => 
            array (
                'PokemonGrupoHuevoID' => 636,
                'PokemonID' => 539,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            136 => 
            array (
                'PokemonGrupoHuevoID' => 637,
                'PokemonID' => 539,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            137 => 
            array (
                'PokemonGrupoHuevoID' => 638,
                'PokemonID' => 540,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            138 => 
            array (
                'PokemonGrupoHuevoID' => 639,
                'PokemonID' => 540,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            139 => 
            array (
                'PokemonGrupoHuevoID' => 640,
                'PokemonID' => 541,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            140 => 
            array (
                'PokemonGrupoHuevoID' => 641,
                'PokemonID' => 541,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            141 => 
            array (
                'PokemonGrupoHuevoID' => 642,
                'PokemonID' => 542,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            142 => 
            array (
                'PokemonGrupoHuevoID' => 643,
                'PokemonID' => 542,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            143 => 
            array (
                'PokemonGrupoHuevoID' => 644,
                'PokemonID' => 543,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            144 => 
            array (
                'PokemonGrupoHuevoID' => 645,
                'PokemonID' => 543,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            145 => 
            array (
                'PokemonGrupoHuevoID' => 646,
                'PokemonID' => 544,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            146 => 
            array (
                'PokemonGrupoHuevoID' => 647,
                'PokemonID' => 545,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            147 => 
            array (
                'PokemonGrupoHuevoID' => 648,
                'PokemonID' => 546,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            148 => 
            array (
                'PokemonGrupoHuevoID' => 649,
                'PokemonID' => 547,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            149 => 
            array (
                'PokemonGrupoHuevoID' => 650,
                'PokemonID' => 548,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            150 => 
            array (
                'PokemonGrupoHuevoID' => 651,
                'PokemonID' => 549,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            151 => 
            array (
                'PokemonGrupoHuevoID' => 652,
                'PokemonID' => 550,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            152 => 
            array (
                'PokemonGrupoHuevoID' => 653,
                'PokemonID' => 551,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            153 => 
            array (
                'PokemonGrupoHuevoID' => 654,
                'PokemonID' => 552,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            154 => 
            array (
                'PokemonGrupoHuevoID' => 655,
                'PokemonID' => 553,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            155 => 
            array (
                'PokemonGrupoHuevoID' => 656,
                'PokemonID' => 554,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            156 => 
            array (
                'PokemonGrupoHuevoID' => 657,
                'PokemonID' => 555,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            157 => 
            array (
                'PokemonGrupoHuevoID' => 658,
                'PokemonID' => 556,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            158 => 
            array (
                'PokemonGrupoHuevoID' => 659,
                'PokemonID' => 557,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            159 => 
            array (
                'PokemonGrupoHuevoID' => 660,
                'PokemonID' => 558,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            160 => 
            array (
                'PokemonGrupoHuevoID' => 661,
                'PokemonID' => 559,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            161 => 
            array (
                'PokemonGrupoHuevoID' => 662,
                'PokemonID' => 562,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            162 => 
            array (
                'PokemonGrupoHuevoID' => 663,
                'PokemonID' => 563,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            163 => 
            array (
                'PokemonGrupoHuevoID' => 664,
                'PokemonID' => 564,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            164 => 
            array (
                'PokemonGrupoHuevoID' => 665,
                'PokemonID' => 565,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            165 => 
            array (
                'PokemonGrupoHuevoID' => 666,
                'PokemonID' => 566,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            166 => 
            array (
                'PokemonGrupoHuevoID' => 667,
                'PokemonID' => 566,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            167 => 
            array (
                'PokemonGrupoHuevoID' => 668,
                'PokemonID' => 567,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            168 => 
            array (
                'PokemonGrupoHuevoID' => 669,
                'PokemonID' => 567,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            169 => 
            array (
                'PokemonGrupoHuevoID' => 670,
                'PokemonID' => 568,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            170 => 
            array (
                'PokemonGrupoHuevoID' => 671,
                'PokemonID' => 568,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            171 => 
            array (
                'PokemonGrupoHuevoID' => 672,
                'PokemonID' => 569,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            172 => 
            array (
                'PokemonGrupoHuevoID' => 673,
                'PokemonID' => 569,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            173 => 
            array (
                'PokemonGrupoHuevoID' => 674,
                'PokemonID' => 570,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            174 => 
            array (
                'PokemonGrupoHuevoID' => 675,
                'PokemonID' => 571,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            175 => 
            array (
                'PokemonGrupoHuevoID' => 676,
                'PokemonID' => 571,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            176 => 
            array (
                'PokemonGrupoHuevoID' => 677,
                'PokemonID' => 572,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            177 => 
            array (
                'PokemonGrupoHuevoID' => 678,
                'PokemonID' => 572,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            178 => 
            array (
                'PokemonGrupoHuevoID' => 679,
                'PokemonID' => 573,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            179 => 
            array (
                'PokemonGrupoHuevoID' => 680,
                'PokemonID' => 573,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            180 => 
            array (
                'PokemonGrupoHuevoID' => 681,
                'PokemonID' => 574,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            181 => 
            array (
                'PokemonGrupoHuevoID' => 682,
                'PokemonID' => 575,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            182 => 
            array (
                'PokemonGrupoHuevoID' => 683,
                'PokemonID' => 576,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            183 => 
            array (
                'PokemonGrupoHuevoID' => 684,
                'PokemonID' => 577,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            184 => 
            array (
                'PokemonGrupoHuevoID' => 685,
                'PokemonID' => 578,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            185 => 
            array (
                'PokemonGrupoHuevoID' => 686,
                'PokemonID' => 579,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            186 => 
            array (
                'PokemonGrupoHuevoID' => 687,
                'PokemonID' => 580,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            187 => 
            array (
                'PokemonGrupoHuevoID' => 688,
                'PokemonID' => 581,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            188 => 
            array (
                'PokemonGrupoHuevoID' => 689,
                'PokemonID' => 582,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            189 => 
            array (
                'PokemonGrupoHuevoID' => 690,
                'PokemonID' => 593,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            190 => 
            array (
                'PokemonGrupoHuevoID' => 691,
                'PokemonID' => 594,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            191 => 
            array (
                'PokemonGrupoHuevoID' => 692,
                'PokemonID' => 595,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            192 => 
            array (
                'PokemonGrupoHuevoID' => 693,
                'PokemonID' => 596,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            193 => 
            array (
                'PokemonGrupoHuevoID' => 694,
                'PokemonID' => 597,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            194 => 
            array (
                'PokemonGrupoHuevoID' => 695,
                'PokemonID' => 598,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            195 => 
            array (
                'PokemonGrupoHuevoID' => 696,
                'PokemonID' => 602,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            196 => 
            array (
                'PokemonGrupoHuevoID' => 697,
                'PokemonID' => 602,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            197 => 
            array (
                'PokemonGrupoHuevoID' => 698,
                'PokemonID' => 603,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            198 => 
            array (
                'PokemonGrupoHuevoID' => 699,
                'PokemonID' => 603,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            199 => 
            array (
                'PokemonGrupoHuevoID' => 700,
                'PokemonID' => 604,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            200 => 
            array (
                'PokemonGrupoHuevoID' => 701,
                'PokemonID' => 604,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            201 => 
            array (
                'PokemonGrupoHuevoID' => 702,
                'PokemonID' => 605,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            202 => 
            array (
                'PokemonGrupoHuevoID' => 703,
                'PokemonID' => 606,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            203 => 
            array (
                'PokemonGrupoHuevoID' => 704,
                'PokemonID' => 607,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            204 => 
            array (
                'PokemonGrupoHuevoID' => 705,
                'PokemonID' => 607,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            205 => 
            array (
                'PokemonGrupoHuevoID' => 706,
                'PokemonID' => 608,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            206 => 
            array (
                'PokemonGrupoHuevoID' => 707,
                'PokemonID' => 608,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            207 => 
            array (
                'PokemonGrupoHuevoID' => 708,
                'PokemonID' => 609,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            208 => 
            array (
                'PokemonGrupoHuevoID' => 709,
                'PokemonID' => 610,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            209 => 
            array (
                'PokemonGrupoHuevoID' => 710,
                'PokemonID' => 611,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            210 => 
            array (
                'PokemonGrupoHuevoID' => 711,
                'PokemonID' => 612,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            211 => 
            array (
                'PokemonGrupoHuevoID' => 712,
                'PokemonID' => 613,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            212 => 
            array (
                'PokemonGrupoHuevoID' => 713,
                'PokemonID' => 614,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            213 => 
            array (
                'PokemonGrupoHuevoID' => 714,
                'PokemonID' => 615,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            214 => 
            array (
                'PokemonGrupoHuevoID' => 715,
                'PokemonID' => 618,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            215 => 
            array (
                'PokemonGrupoHuevoID' => 716,
                'PokemonID' => 619,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            216 => 
            array (
                'PokemonGrupoHuevoID' => 717,
                'PokemonID' => 622,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            217 => 
            array (
                'PokemonGrupoHuevoID' => 718,
                'PokemonID' => 623,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            218 => 
            array (
                'PokemonGrupoHuevoID' => 719,
                'PokemonID' => 624,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            219 => 
            array (
                'PokemonGrupoHuevoID' => 720,
                'PokemonID' => 625,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            220 => 
            array (
                'PokemonGrupoHuevoID' => 721,
                'PokemonID' => 626,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            221 => 
            array (
                'PokemonGrupoHuevoID' => 722,
                'PokemonID' => 627,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            222 => 
            array (
                'PokemonGrupoHuevoID' => 723,
                'PokemonID' => 628,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            223 => 
            array (
                'PokemonGrupoHuevoID' => 724,
                'PokemonID' => 629,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            224 => 
            array (
                'PokemonGrupoHuevoID' => 725,
                'PokemonID' => 630,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            225 => 
            array (
                'PokemonGrupoHuevoID' => 726,
                'PokemonID' => 631,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            226 => 
            array (
                'PokemonGrupoHuevoID' => 727,
                'PokemonID' => 632,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            227 => 
            array (
                'PokemonGrupoHuevoID' => 728,
                'PokemonID' => 633,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            228 => 
            array (
                'PokemonGrupoHuevoID' => 729,
                'PokemonID' => 634,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            229 => 
            array (
                'PokemonGrupoHuevoID' => 730,
                'PokemonID' => 635,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            230 => 
            array (
                'PokemonGrupoHuevoID' => 731,
                'PokemonID' => 639,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            231 => 
            array (
                'PokemonGrupoHuevoID' => 732,
                'PokemonID' => 640,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            232 => 
            array (
                'PokemonGrupoHuevoID' => 733,
                'PokemonID' => 641,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            233 => 
            array (
                'PokemonGrupoHuevoID' => 734,
                'PokemonID' => 641,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            234 => 
            array (
                'PokemonGrupoHuevoID' => 735,
                'PokemonID' => 642,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            235 => 
            array (
                'PokemonGrupoHuevoID' => 736,
                'PokemonID' => 642,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            236 => 
            array (
                'PokemonGrupoHuevoID' => 737,
                'PokemonID' => 643,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            237 => 
            array (
                'PokemonGrupoHuevoID' => 738,
                'PokemonID' => 644,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            238 => 
            array (
                'PokemonGrupoHuevoID' => 739,
                'PokemonID' => 647,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            239 => 
            array (
                'PokemonGrupoHuevoID' => 740,
                'PokemonID' => 648,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            240 => 
            array (
                'PokemonGrupoHuevoID' => 741,
                'PokemonID' => 651,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            241 => 
            array (
                'PokemonGrupoHuevoID' => 742,
                'PokemonID' => 652,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            242 => 
            array (
                'PokemonGrupoHuevoID' => 743,
                'PokemonID' => 653,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            243 => 
            array (
                'PokemonGrupoHuevoID' => 744,
                'PokemonID' => 654,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            244 => 
            array (
                'PokemonGrupoHuevoID' => 745,
                'PokemonID' => 655,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            245 => 
            array (
                'PokemonGrupoHuevoID' => 746,
                'PokemonID' => 656,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            246 => 
            array (
                'PokemonGrupoHuevoID' => 747,
                'PokemonID' => 657,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            247 => 
            array (
                'PokemonGrupoHuevoID' => 748,
                'PokemonID' => 658,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            248 => 
            array (
                'PokemonGrupoHuevoID' => 749,
                'PokemonID' => 659,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            249 => 
            array (
                'PokemonGrupoHuevoID' => 750,
                'PokemonID' => 660,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            250 => 
            array (
                'PokemonGrupoHuevoID' => 751,
                'PokemonID' => 661,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            251 => 
            array (
                'PokemonGrupoHuevoID' => 752,
                'PokemonID' => 662,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            252 => 
            array (
                'PokemonGrupoHuevoID' => 753,
                'PokemonID' => 663,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            253 => 
            array (
                'PokemonGrupoHuevoID' => 754,
                'PokemonID' => 663,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            254 => 
            array (
                'PokemonGrupoHuevoID' => 755,
                'PokemonID' => 664,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            255 => 
            array (
                'PokemonGrupoHuevoID' => 756,
                'PokemonID' => 664,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            256 => 
            array (
                'PokemonGrupoHuevoID' => 757,
                'PokemonID' => 665,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            257 => 
            array (
                'PokemonGrupoHuevoID' => 758,
                'PokemonID' => 665,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            258 => 
            array (
                'PokemonGrupoHuevoID' => 759,
                'PokemonID' => 666,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            259 => 
            array (
                'PokemonGrupoHuevoID' => 760,
                'PokemonID' => 666,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            260 => 
            array (
                'PokemonGrupoHuevoID' => 761,
                'PokemonID' => 667,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            261 => 
            array (
                'PokemonGrupoHuevoID' => 762,
                'PokemonID' => 667,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            262 => 
            array (
                'PokemonGrupoHuevoID' => 763,
                'PokemonID' => 669,
                'GrupoHuevoID' => 13,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            263 => 
            array (
                'PokemonGrupoHuevoID' => 764,
                'PokemonID' => 670,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            264 => 
            array (
                'PokemonGrupoHuevoID' => 765,
                'PokemonID' => 670,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            265 => 
            array (
                'PokemonGrupoHuevoID' => 766,
                'PokemonID' => 671,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            266 => 
            array (
                'PokemonGrupoHuevoID' => 767,
                'PokemonID' => 672,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            267 => 
            array (
                'PokemonGrupoHuevoID' => 768,
                'PokemonID' => 673,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            268 => 
            array (
                'PokemonGrupoHuevoID' => 769,
                'PokemonID' => 674,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            269 => 
            array (
                'PokemonGrupoHuevoID' => 770,
                'PokemonID' => 675,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            270 => 
            array (
                'PokemonGrupoHuevoID' => 771,
                'PokemonID' => 676,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            271 => 
            array (
                'PokemonGrupoHuevoID' => 772,
                'PokemonID' => 677,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            272 => 
            array (
                'PokemonGrupoHuevoID' => 773,
                'PokemonID' => 678,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            273 => 
            array (
                'PokemonGrupoHuevoID' => 774,
                'PokemonID' => 679,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            274 => 
            array (
                'PokemonGrupoHuevoID' => 775,
                'PokemonID' => 680,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            275 => 
            array (
                'PokemonGrupoHuevoID' => 776,
                'PokemonID' => 681,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            276 => 
            array (
                'PokemonGrupoHuevoID' => 777,
                'PokemonID' => 682,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            277 => 
            array (
                'PokemonGrupoHuevoID' => 778,
                'PokemonID' => 683,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            278 => 
            array (
                'PokemonGrupoHuevoID' => 779,
                'PokemonID' => 684,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            279 => 
            array (
                'PokemonGrupoHuevoID' => 780,
                'PokemonID' => 685,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            280 => 
            array (
                'PokemonGrupoHuevoID' => 781,
                'PokemonID' => 686,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            281 => 
            array (
                'PokemonGrupoHuevoID' => 782,
                'PokemonID' => 687,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            282 => 
            array (
                'PokemonGrupoHuevoID' => 783,
                'PokemonID' => 687,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            283 => 
            array (
                'PokemonGrupoHuevoID' => 784,
                'PokemonID' => 688,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            284 => 
            array (
                'PokemonGrupoHuevoID' => 785,
                'PokemonID' => 688,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            285 => 
            array (
                'PokemonGrupoHuevoID' => 786,
                'PokemonID' => 689,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            286 => 
            array (
                'PokemonGrupoHuevoID' => 787,
                'PokemonID' => 689,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            287 => 
            array (
                'PokemonGrupoHuevoID' => 788,
                'PokemonID' => 690,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            288 => 
            array (
                'PokemonGrupoHuevoID' => 789,
                'PokemonID' => 690,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            289 => 
            array (
                'PokemonGrupoHuevoID' => 790,
                'PokemonID' => 691,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            290 => 
            array (
                'PokemonGrupoHuevoID' => 791,
                'PokemonID' => 691,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            291 => 
            array (
                'PokemonGrupoHuevoID' => 792,
                'PokemonID' => 692,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            292 => 
            array (
                'PokemonGrupoHuevoID' => 793,
                'PokemonID' => 692,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            293 => 
            array (
                'PokemonGrupoHuevoID' => 794,
                'PokemonID' => 698,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            294 => 
            array (
                'PokemonGrupoHuevoID' => 795,
                'PokemonID' => 698,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            295 => 
            array (
                'PokemonGrupoHuevoID' => 796,
                'PokemonID' => 699,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            296 => 
            array (
                'PokemonGrupoHuevoID' => 797,
                'PokemonID' => 699,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            297 => 
            array (
                'PokemonGrupoHuevoID' => 798,
                'PokemonID' => 700,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            298 => 
            array (
                'PokemonGrupoHuevoID' => 799,
                'PokemonID' => 701,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            299 => 
            array (
                'PokemonGrupoHuevoID' => 800,
                'PokemonID' => 702,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            300 => 
            array (
                'PokemonGrupoHuevoID' => 801,
                'PokemonID' => 703,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            301 => 
            array (
                'PokemonGrupoHuevoID' => 802,
                'PokemonID' => 704,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            302 => 
            array (
                'PokemonGrupoHuevoID' => 803,
                'PokemonID' => 705,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            303 => 
            array (
                'PokemonGrupoHuevoID' => 804,
                'PokemonID' => 706,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            304 => 
            array (
                'PokemonGrupoHuevoID' => 805,
                'PokemonID' => 707,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            305 => 
            array (
                'PokemonGrupoHuevoID' => 806,
                'PokemonID' => 708,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            306 => 
            array (
                'PokemonGrupoHuevoID' => 807,
                'PokemonID' => 708,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            307 => 
            array (
                'PokemonGrupoHuevoID' => 808,
                'PokemonID' => 709,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            308 => 
            array (
                'PokemonGrupoHuevoID' => 809,
                'PokemonID' => 709,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            309 => 
            array (
                'PokemonGrupoHuevoID' => 810,
                'PokemonID' => 710,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            310 => 
            array (
                'PokemonGrupoHuevoID' => 811,
                'PokemonID' => 710,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            311 => 
            array (
                'PokemonGrupoHuevoID' => 812,
                'PokemonID' => 711,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            312 => 
            array (
                'PokemonGrupoHuevoID' => 813,
                'PokemonID' => 711,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            313 => 
            array (
                'PokemonGrupoHuevoID' => 814,
                'PokemonID' => 712,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            314 => 
            array (
                'PokemonGrupoHuevoID' => 815,
                'PokemonID' => 712,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            315 => 
            array (
                'PokemonGrupoHuevoID' => 816,
                'PokemonID' => 713,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            316 => 
            array (
                'PokemonGrupoHuevoID' => 817,
                'PokemonID' => 713,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            317 => 
            array (
                'PokemonGrupoHuevoID' => 818,
                'PokemonID' => 714,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            318 => 
            array (
                'PokemonGrupoHuevoID' => 819,
                'PokemonID' => 715,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            319 => 
            array (
                'PokemonGrupoHuevoID' => 820,
                'PokemonID' => 716,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            320 => 
            array (
                'PokemonGrupoHuevoID' => 821,
                'PokemonID' => 717,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            321 => 
            array (
                'PokemonGrupoHuevoID' => 822,
                'PokemonID' => 718,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            322 => 
            array (
                'PokemonGrupoHuevoID' => 823,
                'PokemonID' => 719,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            323 => 
            array (
                'PokemonGrupoHuevoID' => 824,
                'PokemonID' => 720,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            324 => 
            array (
                'PokemonGrupoHuevoID' => 825,
                'PokemonID' => 721,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            325 => 
            array (
                'PokemonGrupoHuevoID' => 826,
                'PokemonID' => 722,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            326 => 
            array (
                'PokemonGrupoHuevoID' => 827,
                'PokemonID' => 722,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            327 => 
            array (
                'PokemonGrupoHuevoID' => 828,
                'PokemonID' => 730,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            328 => 
            array (
                'PokemonGrupoHuevoID' => 829,
                'PokemonID' => 731,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            329 => 
            array (
                'PokemonGrupoHuevoID' => 830,
                'PokemonID' => 732,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            330 => 
            array (
                'PokemonGrupoHuevoID' => 831,
                'PokemonID' => 733,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            331 => 
            array (
                'PokemonGrupoHuevoID' => 832,
                'PokemonID' => 734,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            332 => 
            array (
                'PokemonGrupoHuevoID' => 833,
                'PokemonID' => 735,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            333 => 
            array (
                'PokemonGrupoHuevoID' => 834,
                'PokemonID' => 736,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            334 => 
            array (
                'PokemonGrupoHuevoID' => 835,
                'PokemonID' => 741,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            335 => 
            array (
                'PokemonGrupoHuevoID' => 836,
                'PokemonID' => 742,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            336 => 
            array (
                'PokemonGrupoHuevoID' => 837,
                'PokemonID' => 743,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            337 => 
            array (
                'PokemonGrupoHuevoID' => 838,
                'PokemonID' => 744,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            338 => 
            array (
                'PokemonGrupoHuevoID' => 839,
                'PokemonID' => 745,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            339 => 
            array (
                'PokemonGrupoHuevoID' => 840,
                'PokemonID' => 746,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            340 => 
            array (
                'PokemonGrupoHuevoID' => 841,
                'PokemonID' => 747,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            341 => 
            array (
                'PokemonGrupoHuevoID' => 842,
                'PokemonID' => 748,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            342 => 
            array (
                'PokemonGrupoHuevoID' => 843,
                'PokemonID' => 753,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            343 => 
            array (
                'PokemonGrupoHuevoID' => 844,
                'PokemonID' => 754,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            344 => 
            array (
                'PokemonGrupoHuevoID' => 845,
                'PokemonID' => 757,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            345 => 
            array (
                'PokemonGrupoHuevoID' => 846,
                'PokemonID' => 758,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            346 => 
            array (
                'PokemonGrupoHuevoID' => 847,
                'PokemonID' => 759,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            347 => 
            array (
                'PokemonGrupoHuevoID' => 848,
                'PokemonID' => 760,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            348 => 
            array (
                'PokemonGrupoHuevoID' => 849,
                'PokemonID' => 761,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            349 => 
            array (
                'PokemonGrupoHuevoID' => 850,
                'PokemonID' => 762,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            350 => 
            array (
                'PokemonGrupoHuevoID' => 851,
                'PokemonID' => 763,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            351 => 
            array (
                'PokemonGrupoHuevoID' => 852,
                'PokemonID' => 764,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            352 => 
            array (
                'PokemonGrupoHuevoID' => 853,
                'PokemonID' => 765,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            353 => 
            array (
                'PokemonGrupoHuevoID' => 854,
                'PokemonID' => 766,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            354 => 
            array (
                'PokemonGrupoHuevoID' => 855,
                'PokemonID' => 767,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            355 => 
            array (
                'PokemonGrupoHuevoID' => 856,
                'PokemonID' => 768,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            356 => 
            array (
                'PokemonGrupoHuevoID' => 857,
                'PokemonID' => 768,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            357 => 
            array (
                'PokemonGrupoHuevoID' => 858,
                'PokemonID' => 769,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            358 => 
            array (
                'PokemonGrupoHuevoID' => 859,
                'PokemonID' => 769,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            359 => 
            array (
                'PokemonGrupoHuevoID' => 860,
                'PokemonID' => 770,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            360 => 
            array (
                'PokemonGrupoHuevoID' => 861,
                'PokemonID' => 770,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            361 => 
            array (
                'PokemonGrupoHuevoID' => 862,
                'PokemonID' => 771,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            362 => 
            array (
                'PokemonGrupoHuevoID' => 863,
                'PokemonID' => 772,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            363 => 
            array (
                'PokemonGrupoHuevoID' => 864,
                'PokemonID' => 774,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            364 => 
            array (
                'PokemonGrupoHuevoID' => 865,
                'PokemonID' => 775,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            365 => 
            array (
                'PokemonGrupoHuevoID' => 866,
                'PokemonID' => 776,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            366 => 
            array (
                'PokemonGrupoHuevoID' => 867,
                'PokemonID' => 777,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            367 => 
            array (
                'PokemonGrupoHuevoID' => 868,
                'PokemonID' => 778,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            368 => 
            array (
                'PokemonGrupoHuevoID' => 869,
                'PokemonID' => 779,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            369 => 
            array (
                'PokemonGrupoHuevoID' => 870,
                'PokemonID' => 780,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            370 => 
            array (
                'PokemonGrupoHuevoID' => 871,
                'PokemonID' => 781,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            371 => 
            array (
                'PokemonGrupoHuevoID' => 872,
                'PokemonID' => 782,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            372 => 
            array (
                'PokemonGrupoHuevoID' => 873,
                'PokemonID' => 783,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            373 => 
            array (
                'PokemonGrupoHuevoID' => 874,
                'PokemonID' => 784,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            374 => 
            array (
                'PokemonGrupoHuevoID' => 875,
                'PokemonID' => 785,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            375 => 
            array (
                'PokemonGrupoHuevoID' => 876,
                'PokemonID' => 786,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            376 => 
            array (
                'PokemonGrupoHuevoID' => 877,
                'PokemonID' => 787,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            377 => 
            array (
                'PokemonGrupoHuevoID' => 878,
                'PokemonID' => 788,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            378 => 
            array (
                'PokemonGrupoHuevoID' => 879,
                'PokemonID' => 789,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            379 => 
            array (
                'PokemonGrupoHuevoID' => 880,
                'PokemonID' => 790,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            380 => 
            array (
                'PokemonGrupoHuevoID' => 881,
                'PokemonID' => 791,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            381 => 
            array (
                'PokemonGrupoHuevoID' => 882,
                'PokemonID' => 792,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            382 => 
            array (
                'PokemonGrupoHuevoID' => 883,
                'PokemonID' => 793,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            383 => 
            array (
                'PokemonGrupoHuevoID' => 884,
                'PokemonID' => 794,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            384 => 
            array (
                'PokemonGrupoHuevoID' => 885,
                'PokemonID' => 795,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            385 => 
            array (
                'PokemonGrupoHuevoID' => 886,
                'PokemonID' => 796,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            386 => 
            array (
                'PokemonGrupoHuevoID' => 887,
                'PokemonID' => 797,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            387 => 
            array (
                'PokemonGrupoHuevoID' => 888,
                'PokemonID' => 798,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            388 => 
            array (
                'PokemonGrupoHuevoID' => 889,
                'PokemonID' => 798,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            389 => 
            array (
                'PokemonGrupoHuevoID' => 890,
                'PokemonID' => 799,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            390 => 
            array (
                'PokemonGrupoHuevoID' => 891,
                'PokemonID' => 799,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            391 => 
            array (
                'PokemonGrupoHuevoID' => 892,
                'PokemonID' => 800,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            392 => 
            array (
                'PokemonGrupoHuevoID' => 893,
                'PokemonID' => 801,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            393 => 
            array (
                'PokemonGrupoHuevoID' => 894,
                'PokemonID' => 802,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            394 => 
            array (
                'PokemonGrupoHuevoID' => 895,
                'PokemonID' => 803,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            395 => 
            array (
                'PokemonGrupoHuevoID' => 896,
                'PokemonID' => 804,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            396 => 
            array (
                'PokemonGrupoHuevoID' => 897,
                'PokemonID' => 804,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            397 => 
            array (
                'PokemonGrupoHuevoID' => 898,
                'PokemonID' => 805,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            398 => 
            array (
                'PokemonGrupoHuevoID' => 899,
                'PokemonID' => 805,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            399 => 
            array (
                'PokemonGrupoHuevoID' => 900,
                'PokemonID' => 806,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            400 => 
            array (
                'PokemonGrupoHuevoID' => 901,
                'PokemonID' => 807,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            401 => 
            array (
                'PokemonGrupoHuevoID' => 902,
                'PokemonID' => 808,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            402 => 
            array (
                'PokemonGrupoHuevoID' => 903,
                'PokemonID' => 809,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            403 => 
            array (
                'PokemonGrupoHuevoID' => 904,
                'PokemonID' => 810,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            404 => 
            array (
                'PokemonGrupoHuevoID' => 905,
                'PokemonID' => 810,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            405 => 
            array (
                'PokemonGrupoHuevoID' => 906,
                'PokemonID' => 811,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            406 => 
            array (
                'PokemonGrupoHuevoID' => 907,
                'PokemonID' => 811,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            407 => 
            array (
                'PokemonGrupoHuevoID' => 908,
                'PokemonID' => 812,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            408 => 
            array (
                'PokemonGrupoHuevoID' => 909,
                'PokemonID' => 813,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            409 => 
            array (
                'PokemonGrupoHuevoID' => 910,
                'PokemonID' => 814,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            410 => 
            array (
                'PokemonGrupoHuevoID' => 911,
                'PokemonID' => 814,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            411 => 
            array (
                'PokemonGrupoHuevoID' => 912,
                'PokemonID' => 815,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            412 => 
            array (
                'PokemonGrupoHuevoID' => 913,
                'PokemonID' => 815,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            413 => 
            array (
                'PokemonGrupoHuevoID' => 914,
                'PokemonID' => 816,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            414 => 
            array (
                'PokemonGrupoHuevoID' => 915,
                'PokemonID' => 817,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            415 => 
            array (
                'PokemonGrupoHuevoID' => 916,
                'PokemonID' => 818,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            416 => 
            array (
                'PokemonGrupoHuevoID' => 917,
                'PokemonID' => 819,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            417 => 
            array (
                'PokemonGrupoHuevoID' => 918,
                'PokemonID' => 822,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            418 => 
            array (
                'PokemonGrupoHuevoID' => 919,
                'PokemonID' => 822,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            419 => 
            array (
                'PokemonGrupoHuevoID' => 920,
                'PokemonID' => 823,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            420 => 
            array (
                'PokemonGrupoHuevoID' => 921,
                'PokemonID' => 824,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            421 => 
            array (
                'PokemonGrupoHuevoID' => 922,
                'PokemonID' => 825,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            422 => 
            array (
                'PokemonGrupoHuevoID' => 923,
                'PokemonID' => 826,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            423 => 
            array (
                'PokemonGrupoHuevoID' => 924,
                'PokemonID' => 827,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            424 => 
            array (
                'PokemonGrupoHuevoID' => 925,
                'PokemonID' => 828,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            425 => 
            array (
                'PokemonGrupoHuevoID' => 926,
                'PokemonID' => 829,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            426 => 
            array (
                'PokemonGrupoHuevoID' => 927,
                'PokemonID' => 830,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            427 => 
            array (
                'PokemonGrupoHuevoID' => 928,
                'PokemonID' => 831,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            428 => 
            array (
                'PokemonGrupoHuevoID' => 929,
                'PokemonID' => 832,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            429 => 
            array (
                'PokemonGrupoHuevoID' => 930,
                'PokemonID' => 833,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            430 => 
            array (
                'PokemonGrupoHuevoID' => 931,
                'PokemonID' => 834,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            431 => 
            array (
                'PokemonGrupoHuevoID' => 932,
                'PokemonID' => 835,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            432 => 
            array (
                'PokemonGrupoHuevoID' => 933,
                'PokemonID' => 836,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            433 => 
            array (
                'PokemonGrupoHuevoID' => 934,
                'PokemonID' => 837,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            434 => 
            array (
                'PokemonGrupoHuevoID' => 935,
                'PokemonID' => 838,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            435 => 
            array (
                'PokemonGrupoHuevoID' => 936,
                'PokemonID' => 839,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            436 => 
            array (
                'PokemonGrupoHuevoID' => 937,
                'PokemonID' => 840,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            437 => 
            array (
                'PokemonGrupoHuevoID' => 938,
                'PokemonID' => 841,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            438 => 
            array (
                'PokemonGrupoHuevoID' => 939,
                'PokemonID' => 842,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            439 => 
            array (
                'PokemonGrupoHuevoID' => 940,
                'PokemonID' => 843,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            440 => 
            array (
                'PokemonGrupoHuevoID' => 941,
                'PokemonID' => 844,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            441 => 
            array (
                'PokemonGrupoHuevoID' => 942,
                'PokemonID' => 845,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            442 => 
            array (
                'PokemonGrupoHuevoID' => 943,
                'PokemonID' => 845,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            443 => 
            array (
                'PokemonGrupoHuevoID' => 944,
                'PokemonID' => 846,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            444 => 
            array (
                'PokemonGrupoHuevoID' => 945,
                'PokemonID' => 846,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            445 => 
            array (
                'PokemonGrupoHuevoID' => 946,
                'PokemonID' => 847,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            446 => 
            array (
                'PokemonGrupoHuevoID' => 947,
                'PokemonID' => 847,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            447 => 
            array (
                'PokemonGrupoHuevoID' => 948,
                'PokemonID' => 848,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            448 => 
            array (
                'PokemonGrupoHuevoID' => 949,
                'PokemonID' => 849,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            449 => 
            array (
                'PokemonGrupoHuevoID' => 950,
                'PokemonID' => 850,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            450 => 
            array (
                'PokemonGrupoHuevoID' => 951,
                'PokemonID' => 851,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            451 => 
            array (
                'PokemonGrupoHuevoID' => 952,
                'PokemonID' => 852,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            452 => 
            array (
                'PokemonGrupoHuevoID' => 953,
                'PokemonID' => 853,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            453 => 
            array (
                'PokemonGrupoHuevoID' => 954,
                'PokemonID' => 853,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            454 => 
            array (
                'PokemonGrupoHuevoID' => 955,
                'PokemonID' => 854,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            455 => 
            array (
                'PokemonGrupoHuevoID' => 956,
                'PokemonID' => 854,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            456 => 
            array (
                'PokemonGrupoHuevoID' => 957,
                'PokemonID' => 855,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            457 => 
            array (
                'PokemonGrupoHuevoID' => 958,
                'PokemonID' => 856,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            458 => 
            array (
                'PokemonGrupoHuevoID' => 959,
                'PokemonID' => 856,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            459 => 
            array (
                'PokemonGrupoHuevoID' => 960,
                'PokemonID' => 857,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            460 => 
            array (
                'PokemonGrupoHuevoID' => 961,
                'PokemonID' => 857,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            461 => 
            array (
                'PokemonGrupoHuevoID' => 962,
                'PokemonID' => 859,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            462 => 
            array (
                'PokemonGrupoHuevoID' => 963,
                'PokemonID' => 859,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            463 => 
            array (
                'PokemonGrupoHuevoID' => 964,
                'PokemonID' => 860,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            464 => 
            array (
                'PokemonGrupoHuevoID' => 965,
                'PokemonID' => 860,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            465 => 
            array (
                'PokemonGrupoHuevoID' => 966,
                'PokemonID' => 861,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            466 => 
            array (
                'PokemonGrupoHuevoID' => 967,
                'PokemonID' => 861,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            467 => 
            array (
                'PokemonGrupoHuevoID' => 968,
                'PokemonID' => 862,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            468 => 
            array (
                'PokemonGrupoHuevoID' => 969,
                'PokemonID' => 862,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            469 => 
            array (
                'PokemonGrupoHuevoID' => 970,
                'PokemonID' => 863,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            470 => 
            array (
                'PokemonGrupoHuevoID' => 971,
                'PokemonID' => 863,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            471 => 
            array (
                'PokemonGrupoHuevoID' => 972,
                'PokemonID' => 864,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            472 => 
            array (
                'PokemonGrupoHuevoID' => 973,
                'PokemonID' => 864,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            473 => 
            array (
                'PokemonGrupoHuevoID' => 974,
                'PokemonID' => 865,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            474 => 
            array (
                'PokemonGrupoHuevoID' => 975,
                'PokemonID' => 865,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            475 => 
            array (
                'PokemonGrupoHuevoID' => 976,
                'PokemonID' => 866,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            476 => 
            array (
                'PokemonGrupoHuevoID' => 977,
                'PokemonID' => 866,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            477 => 
            array (
                'PokemonGrupoHuevoID' => 978,
                'PokemonID' => 867,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            478 => 
            array (
                'PokemonGrupoHuevoID' => 979,
                'PokemonID' => 867,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            479 => 
            array (
                'PokemonGrupoHuevoID' => 980,
                'PokemonID' => 868,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            480 => 
            array (
                'PokemonGrupoHuevoID' => 981,
                'PokemonID' => 869,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            481 => 
            array (
                'PokemonGrupoHuevoID' => 982,
                'PokemonID' => 870,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            482 => 
            array (
                'PokemonGrupoHuevoID' => 983,
                'PokemonID' => 871,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            483 => 
            array (
                'PokemonGrupoHuevoID' => 984,
                'PokemonID' => 872,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            484 => 
            array (
                'PokemonGrupoHuevoID' => 985,
                'PokemonID' => 873,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            485 => 
            array (
                'PokemonGrupoHuevoID' => 986,
                'PokemonID' => 874,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            486 => 
            array (
                'PokemonGrupoHuevoID' => 987,
                'PokemonID' => 875,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            487 => 
            array (
                'PokemonGrupoHuevoID' => 988,
                'PokemonID' => 876,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            488 => 
            array (
                'PokemonGrupoHuevoID' => 989,
                'PokemonID' => 877,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            489 => 
            array (
                'PokemonGrupoHuevoID' => 990,
                'PokemonID' => 878,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            490 => 
            array (
                'PokemonGrupoHuevoID' => 991,
                'PokemonID' => 879,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            491 => 
            array (
                'PokemonGrupoHuevoID' => 992,
                'PokemonID' => 879,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            492 => 
            array (
                'PokemonGrupoHuevoID' => 993,
                'PokemonID' => 880,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            493 => 
            array (
                'PokemonGrupoHuevoID' => 994,
                'PokemonID' => 880,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            494 => 
            array (
                'PokemonGrupoHuevoID' => 995,
                'PokemonID' => 881,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            495 => 
            array (
                'PokemonGrupoHuevoID' => 996,
                'PokemonID' => 882,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            496 => 
            array (
                'PokemonGrupoHuevoID' => 997,
                'PokemonID' => 883,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            497 => 
            array (
                'PokemonGrupoHuevoID' => 998,
                'PokemonID' => 884,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            498 => 
            array (
                'PokemonGrupoHuevoID' => 999,
                'PokemonID' => 884,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            499 => 
            array (
                'PokemonGrupoHuevoID' => 1000,
                'PokemonID' => 885,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
        ));
        \DB::table('PokemonGrupoHuevo')->insert(array (
            0 => 
            array (
                'PokemonGrupoHuevoID' => 1001,
                'PokemonID' => 885,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            1 => 
            array (
                'PokemonGrupoHuevoID' => 1002,
                'PokemonID' => 886,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            2 => 
            array (
                'PokemonGrupoHuevoID' => 1003,
                'PokemonID' => 886,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            3 => 
            array (
                'PokemonGrupoHuevoID' => 1004,
                'PokemonID' => 887,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            4 => 
            array (
                'PokemonGrupoHuevoID' => 1005,
                'PokemonID' => 888,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            5 => 
            array (
                'PokemonGrupoHuevoID' => 1006,
                'PokemonID' => 889,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            6 => 
            array (
                'PokemonGrupoHuevoID' => 1007,
                'PokemonID' => 889,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            7 => 
            array (
                'PokemonGrupoHuevoID' => 1008,
                'PokemonID' => 890,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            8 => 
            array (
                'PokemonGrupoHuevoID' => 1009,
                'PokemonID' => 890,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            9 => 
            array (
                'PokemonGrupoHuevoID' => 1010,
                'PokemonID' => 891,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            10 => 
            array (
                'PokemonGrupoHuevoID' => 1011,
                'PokemonID' => 891,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            11 => 
            array (
                'PokemonGrupoHuevoID' => 1012,
                'PokemonID' => 892,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            12 => 
            array (
                'PokemonGrupoHuevoID' => 1013,
                'PokemonID' => 892,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            13 => 
            array (
                'PokemonGrupoHuevoID' => 1014,
                'PokemonID' => 893,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            14 => 
            array (
                'PokemonGrupoHuevoID' => 1015,
                'PokemonID' => 893,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            15 => 
            array (
                'PokemonGrupoHuevoID' => 1016,
                'PokemonID' => 894,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            16 => 
            array (
                'PokemonGrupoHuevoID' => 1017,
                'PokemonID' => 894,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            17 => 
            array (
                'PokemonGrupoHuevoID' => 1018,
                'PokemonID' => 895,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            18 => 
            array (
                'PokemonGrupoHuevoID' => 1019,
                'PokemonID' => 896,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            19 => 
            array (
                'PokemonGrupoHuevoID' => 1020,
                'PokemonID' => 897,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            20 => 
            array (
                'PokemonGrupoHuevoID' => 1021,
                'PokemonID' => 897,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            21 => 
            array (
                'PokemonGrupoHuevoID' => 1022,
                'PokemonID' => 898,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            22 => 
            array (
                'PokemonGrupoHuevoID' => 1023,
                'PokemonID' => 898,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            23 => 
            array (
                'PokemonGrupoHuevoID' => 1024,
                'PokemonID' => 899,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            24 => 
            array (
                'PokemonGrupoHuevoID' => 1025,
                'PokemonID' => 900,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            25 => 
            array (
                'PokemonGrupoHuevoID' => 1026,
                'PokemonID' => 901,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            26 => 
            array (
                'PokemonGrupoHuevoID' => 1027,
                'PokemonID' => 902,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            27 => 
            array (
                'PokemonGrupoHuevoID' => 1028,
                'PokemonID' => 903,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            28 => 
            array (
                'PokemonGrupoHuevoID' => 1029,
                'PokemonID' => 904,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            29 => 
            array (
                'PokemonGrupoHuevoID' => 1030,
                'PokemonID' => 905,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            30 => 
            array (
                'PokemonGrupoHuevoID' => 1031,
                'PokemonID' => 906,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            31 => 
            array (
                'PokemonGrupoHuevoID' => 1032,
                'PokemonID' => 907,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            32 => 
            array (
                'PokemonGrupoHuevoID' => 1033,
                'PokemonID' => 908,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            33 => 
            array (
                'PokemonGrupoHuevoID' => 1034,
                'PokemonID' => 908,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            34 => 
            array (
                'PokemonGrupoHuevoID' => 1035,
                'PokemonID' => 909,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            35 => 
            array (
                'PokemonGrupoHuevoID' => 1036,
                'PokemonID' => 909,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            36 => 
            array (
                'PokemonGrupoHuevoID' => 1037,
                'PokemonID' => 910,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            37 => 
            array (
                'PokemonGrupoHuevoID' => 1038,
                'PokemonID' => 910,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            38 => 
            array (
                'PokemonGrupoHuevoID' => 1039,
                'PokemonID' => 911,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            39 => 
            array (
                'PokemonGrupoHuevoID' => 1040,
                'PokemonID' => 912,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            40 => 
            array (
                'PokemonGrupoHuevoID' => 1041,
                'PokemonID' => 913,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            41 => 
            array (
                'PokemonGrupoHuevoID' => 1042,
                'PokemonID' => 914,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            42 => 
            array (
                'PokemonGrupoHuevoID' => 1043,
                'PokemonID' => 915,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            43 => 
            array (
                'PokemonGrupoHuevoID' => 1044,
                'PokemonID' => 915,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            44 => 
            array (
                'PokemonGrupoHuevoID' => 1045,
                'PokemonID' => 916,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            45 => 
            array (
                'PokemonGrupoHuevoID' => 1046,
                'PokemonID' => 916,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            46 => 
            array (
                'PokemonGrupoHuevoID' => 1047,
                'PokemonID' => 917,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            47 => 
            array (
                'PokemonGrupoHuevoID' => 1048,
                'PokemonID' => 917,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            48 => 
            array (
                'PokemonGrupoHuevoID' => 1049,
                'PokemonID' => 918,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            49 => 
            array (
                'PokemonGrupoHuevoID' => 1050,
                'PokemonID' => 918,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            50 => 
            array (
                'PokemonGrupoHuevoID' => 1051,
                'PokemonID' => 919,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            51 => 
            array (
                'PokemonGrupoHuevoID' => 1052,
                'PokemonID' => 919,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            52 => 
            array (
                'PokemonGrupoHuevoID' => 1053,
                'PokemonID' => 920,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            53 => 
            array (
                'PokemonGrupoHuevoID' => 1054,
                'PokemonID' => 920,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            54 => 
            array (
                'PokemonGrupoHuevoID' => 1055,
                'PokemonID' => 921,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            55 => 
            array (
                'PokemonGrupoHuevoID' => 1056,
                'PokemonID' => 922,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            56 => 
            array (
                'PokemonGrupoHuevoID' => 1057,
                'PokemonID' => 923,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            57 => 
            array (
                'PokemonGrupoHuevoID' => 1058,
                'PokemonID' => 923,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            58 => 
            array (
                'PokemonGrupoHuevoID' => 1059,
                'PokemonID' => 924,
                'GrupoHuevoID' => 1,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            59 => 
            array (
                'PokemonGrupoHuevoID' => 1060,
                'PokemonID' => 924,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            60 => 
            array (
                'PokemonGrupoHuevoID' => 1061,
                'PokemonID' => 925,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            61 => 
            array (
                'PokemonGrupoHuevoID' => 1062,
                'PokemonID' => 926,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            62 => 
            array (
                'PokemonGrupoHuevoID' => 1063,
                'PokemonID' => 927,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            63 => 
            array (
                'PokemonGrupoHuevoID' => 1064,
                'PokemonID' => 928,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            64 => 
            array (
                'PokemonGrupoHuevoID' => 1065,
                'PokemonID' => 929,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            65 => 
            array (
                'PokemonGrupoHuevoID' => 1066,
                'PokemonID' => 929,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            66 => 
            array (
                'PokemonGrupoHuevoID' => 1067,
                'PokemonID' => 930,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            67 => 
            array (
                'PokemonGrupoHuevoID' => 1068,
                'PokemonID' => 930,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            68 => 
            array (
                'PokemonGrupoHuevoID' => 1069,
                'PokemonID' => 931,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            69 => 
            array (
                'PokemonGrupoHuevoID' => 1070,
                'PokemonID' => 931,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            70 => 
            array (
                'PokemonGrupoHuevoID' => 1071,
                'PokemonID' => 932,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            71 => 
            array (
                'PokemonGrupoHuevoID' => 1072,
                'PokemonID' => 932,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            72 => 
            array (
                'PokemonGrupoHuevoID' => 1073,
                'PokemonID' => 933,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            73 => 
            array (
                'PokemonGrupoHuevoID' => 1074,
                'PokemonID' => 934,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            74 => 
            array (
                'PokemonGrupoHuevoID' => 1075,
                'PokemonID' => 935,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            75 => 
            array (
                'PokemonGrupoHuevoID' => 1076,
                'PokemonID' => 935,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            76 => 
            array (
                'PokemonGrupoHuevoID' => 1077,
                'PokemonID' => 936,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            77 => 
            array (
                'PokemonGrupoHuevoID' => 1078,
                'PokemonID' => 936,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            78 => 
            array (
                'PokemonGrupoHuevoID' => 1079,
                'PokemonID' => 937,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            79 => 
            array (
                'PokemonGrupoHuevoID' => 1080,
                'PokemonID' => 938,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            80 => 
            array (
                'PokemonGrupoHuevoID' => 1081,
                'PokemonID' => 939,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            81 => 
            array (
                'PokemonGrupoHuevoID' => 1082,
                'PokemonID' => 940,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            82 => 
            array (
                'PokemonGrupoHuevoID' => 1083,
                'PokemonID' => 940,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            83 => 
            array (
                'PokemonGrupoHuevoID' => 1084,
                'PokemonID' => 941,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            84 => 
            array (
                'PokemonGrupoHuevoID' => 1085,
                'PokemonID' => 941,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            85 => 
            array (
                'PokemonGrupoHuevoID' => 1086,
                'PokemonID' => 942,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            86 => 
            array (
                'PokemonGrupoHuevoID' => 1087,
                'PokemonID' => 942,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            87 => 
            array (
                'PokemonGrupoHuevoID' => 1088,
                'PokemonID' => 943,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            88 => 
            array (
                'PokemonGrupoHuevoID' => 1089,
                'PokemonID' => 943,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            89 => 
            array (
                'PokemonGrupoHuevoID' => 1090,
                'PokemonID' => 944,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            90 => 
            array (
                'PokemonGrupoHuevoID' => 1091,
                'PokemonID' => 944,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            91 => 
            array (
                'PokemonGrupoHuevoID' => 1092,
                'PokemonID' => 947,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            92 => 
            array (
                'PokemonGrupoHuevoID' => 1093,
                'PokemonID' => 948,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            93 => 
            array (
                'PokemonGrupoHuevoID' => 1094,
                'PokemonID' => 949,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            94 => 
            array (
                'PokemonGrupoHuevoID' => 1095,
                'PokemonID' => 950,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            95 => 
            array (
                'PokemonGrupoHuevoID' => 1096,
                'PokemonID' => 951,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            96 => 
            array (
                'PokemonGrupoHuevoID' => 1097,
                'PokemonID' => 952,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            97 => 
            array (
                'PokemonGrupoHuevoID' => 1098,
                'PokemonID' => 952,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            98 => 
            array (
                'PokemonGrupoHuevoID' => 1099,
                'PokemonID' => 953,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            99 => 
            array (
                'PokemonGrupoHuevoID' => 1100,
                'PokemonID' => 953,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            100 => 
            array (
                'PokemonGrupoHuevoID' => 1101,
                'PokemonID' => 954,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            101 => 
            array (
                'PokemonGrupoHuevoID' => 1102,
                'PokemonID' => 954,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            102 => 
            array (
                'PokemonGrupoHuevoID' => 1103,
                'PokemonID' => 955,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            103 => 
            array (
                'PokemonGrupoHuevoID' => 1104,
                'PokemonID' => 956,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            104 => 
            array (
                'PokemonGrupoHuevoID' => 1105,
                'PokemonID' => 957,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            105 => 
            array (
                'PokemonGrupoHuevoID' => 1106,
                'PokemonID' => 958,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            106 => 
            array (
                'PokemonGrupoHuevoID' => 1107,
                'PokemonID' => 959,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            107 => 
            array (
                'PokemonGrupoHuevoID' => 1108,
                'PokemonID' => 960,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            108 => 
            array (
                'PokemonGrupoHuevoID' => 1109,
                'PokemonID' => 960,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            109 => 
            array (
                'PokemonGrupoHuevoID' => 1110,
                'PokemonID' => 961,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            110 => 
            array (
                'PokemonGrupoHuevoID' => 1111,
                'PokemonID' => 962,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:17:27',
                'updated_at' => '2023-07-16 13:17:27',
            ),
            111 => 
            array (
                'PokemonGrupoHuevoID' => 1112,
                'PokemonID' => 1094,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            112 => 
            array (
                'PokemonGrupoHuevoID' => 1113,
                'PokemonID' => 1094,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            113 => 
            array (
                'PokemonGrupoHuevoID' => 1114,
                'PokemonID' => 1095,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            114 => 
            array (
                'PokemonGrupoHuevoID' => 1115,
                'PokemonID' => 1095,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            115 => 
            array (
                'PokemonGrupoHuevoID' => 1116,
                'PokemonID' => 1096,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            116 => 
            array (
                'PokemonGrupoHuevoID' => 1117,
                'PokemonID' => 1096,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            117 => 
            array (
                'PokemonGrupoHuevoID' => 1118,
                'PokemonID' => 1097,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            118 => 
            array (
                'PokemonGrupoHuevoID' => 1119,
                'PokemonID' => 1097,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            119 => 
            array (
                'PokemonGrupoHuevoID' => 1120,
                'PokemonID' => 1098,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            120 => 
            array (
                'PokemonGrupoHuevoID' => 1121,
                'PokemonID' => 1098,
                'GrupoHuevoID' => 9,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            121 => 
            array (
                'PokemonGrupoHuevoID' => 1122,
                'PokemonID' => 1099,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            122 => 
            array (
                'PokemonGrupoHuevoID' => 1123,
                'PokemonID' => 1099,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            123 => 
            array (
                'PokemonGrupoHuevoID' => 1124,
                'PokemonID' => 1100,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            124 => 
            array (
                'PokemonGrupoHuevoID' => 1125,
                'PokemonID' => 1100,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            125 => 
            array (
                'PokemonGrupoHuevoID' => 1126,
                'PokemonID' => 1101,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            126 => 
            array (
                'PokemonGrupoHuevoID' => 1127,
                'PokemonID' => 1101,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            127 => 
            array (
                'PokemonGrupoHuevoID' => 1128,
                'PokemonID' => 1102,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            128 => 
            array (
                'PokemonGrupoHuevoID' => 1129,
                'PokemonID' => 1103,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            129 => 
            array (
                'PokemonGrupoHuevoID' => 1130,
                'PokemonID' => 1104,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            130 => 
            array (
                'PokemonGrupoHuevoID' => 1131,
                'PokemonID' => 1105,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            131 => 
            array (
                'PokemonGrupoHuevoID' => 1132,
                'PokemonID' => 1106,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            132 => 
            array (
                'PokemonGrupoHuevoID' => 1133,
                'PokemonID' => 1107,
                'GrupoHuevoID' => 2,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            133 => 
            array (
                'PokemonGrupoHuevoID' => 1134,
                'PokemonID' => 1108,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            134 => 
            array (
                'PokemonGrupoHuevoID' => 1135,
                'PokemonID' => 1109,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            135 => 
            array (
                'PokemonGrupoHuevoID' => 1136,
                'PokemonID' => 1110,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            136 => 
            array (
                'PokemonGrupoHuevoID' => 1137,
                'PokemonID' => 1111,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            137 => 
            array (
                'PokemonGrupoHuevoID' => 1138,
                'PokemonID' => 1111,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            138 => 
            array (
                'PokemonGrupoHuevoID' => 1139,
                'PokemonID' => 1112,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            139 => 
            array (
                'PokemonGrupoHuevoID' => 1140,
                'PokemonID' => 1112,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            140 => 
            array (
                'PokemonGrupoHuevoID' => 1141,
                'PokemonID' => 1113,
                'GrupoHuevoID' => 3,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            141 => 
            array (
                'PokemonGrupoHuevoID' => 1142,
                'PokemonID' => 1113,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            142 => 
            array (
                'PokemonGrupoHuevoID' => 1143,
                'PokemonID' => 1114,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            143 => 
            array (
                'PokemonGrupoHuevoID' => 1144,
                'PokemonID' => 1115,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            144 => 
            array (
                'PokemonGrupoHuevoID' => 1145,
                'PokemonID' => 1116,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            145 => 
            array (
                'PokemonGrupoHuevoID' => 1146,
                'PokemonID' => 1117,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            146 => 
            array (
                'PokemonGrupoHuevoID' => 1147,
                'PokemonID' => 1117,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            147 => 
            array (
                'PokemonGrupoHuevoID' => 1148,
                'PokemonID' => 1118,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            148 => 
            array (
                'PokemonGrupoHuevoID' => 1149,
                'PokemonID' => 1118,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            149 => 
            array (
                'PokemonGrupoHuevoID' => 1150,
                'PokemonID' => 1119,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            150 => 
            array (
                'PokemonGrupoHuevoID' => 1151,
                'PokemonID' => 1119,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            151 => 
            array (
                'PokemonGrupoHuevoID' => 1152,
                'PokemonID' => 1120,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            152 => 
            array (
                'PokemonGrupoHuevoID' => 1153,
                'PokemonID' => 1121,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            153 => 
            array (
                'PokemonGrupoHuevoID' => 1154,
                'PokemonID' => 1122,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            154 => 
            array (
                'PokemonGrupoHuevoID' => 1155,
                'PokemonID' => 1122,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            155 => 
            array (
                'PokemonGrupoHuevoID' => 1156,
                'PokemonID' => 1123,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            156 => 
            array (
                'PokemonGrupoHuevoID' => 1157,
                'PokemonID' => 1123,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            157 => 
            array (
                'PokemonGrupoHuevoID' => 1158,
                'PokemonID' => 1124,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            158 => 
            array (
                'PokemonGrupoHuevoID' => 1159,
                'PokemonID' => 1125,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            159 => 
            array (
                'PokemonGrupoHuevoID' => 1160,
                'PokemonID' => 1126,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            160 => 
            array (
                'PokemonGrupoHuevoID' => 1161,
                'PokemonID' => 1127,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            161 => 
            array (
                'PokemonGrupoHuevoID' => 1162,
                'PokemonID' => 1127,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            162 => 
            array (
                'PokemonGrupoHuevoID' => 1163,
                'PokemonID' => 1128,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            163 => 
            array (
                'PokemonGrupoHuevoID' => 1164,
                'PokemonID' => 1128,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            164 => 
            array (
                'PokemonGrupoHuevoID' => 1165,
                'PokemonID' => 1129,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            165 => 
            array (
                'PokemonGrupoHuevoID' => 1166,
                'PokemonID' => 1130,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            166 => 
            array (
                'PokemonGrupoHuevoID' => 1167,
                'PokemonID' => 1131,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            167 => 
            array (
                'PokemonGrupoHuevoID' => 1168,
                'PokemonID' => 1132,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            168 => 
            array (
                'PokemonGrupoHuevoID' => 1169,
                'PokemonID' => 1133,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            169 => 
            array (
                'PokemonGrupoHuevoID' => 1170,
                'PokemonID' => 1134,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            170 => 
            array (
                'PokemonGrupoHuevoID' => 1171,
                'PokemonID' => 1135,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            171 => 
            array (
                'PokemonGrupoHuevoID' => 1172,
                'PokemonID' => 1136,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            172 => 
            array (
                'PokemonGrupoHuevoID' => 1173,
                'PokemonID' => 1137,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            173 => 
            array (
                'PokemonGrupoHuevoID' => 1174,
                'PokemonID' => 1138,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            174 => 
            array (
                'PokemonGrupoHuevoID' => 1175,
                'PokemonID' => 1139,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            175 => 
            array (
                'PokemonGrupoHuevoID' => 1176,
                'PokemonID' => 1140,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            176 => 
            array (
                'PokemonGrupoHuevoID' => 1177,
                'PokemonID' => 1140,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            177 => 
            array (
                'PokemonGrupoHuevoID' => 1178,
                'PokemonID' => 1141,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            178 => 
            array (
                'PokemonGrupoHuevoID' => 1179,
                'PokemonID' => 1141,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            179 => 
            array (
                'PokemonGrupoHuevoID' => 1180,
                'PokemonID' => 1142,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            180 => 
            array (
                'PokemonGrupoHuevoID' => 1181,
                'PokemonID' => 1142,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            181 => 
            array (
                'PokemonGrupoHuevoID' => 1182,
                'PokemonID' => 1143,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            182 => 
            array (
                'PokemonGrupoHuevoID' => 1183,
                'PokemonID' => 1144,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            183 => 
            array (
                'PokemonGrupoHuevoID' => 1184,
                'PokemonID' => 1145,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            184 => 
            array (
                'PokemonGrupoHuevoID' => 1185,
                'PokemonID' => 1146,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            185 => 
            array (
                'PokemonGrupoHuevoID' => 1186,
                'PokemonID' => 1147,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            186 => 
            array (
                'PokemonGrupoHuevoID' => 1187,
                'PokemonID' => 1148,
                'GrupoHuevoID' => 6,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            187 => 
            array (
                'PokemonGrupoHuevoID' => 1188,
                'PokemonID' => 1152,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            188 => 
            array (
                'PokemonGrupoHuevoID' => 1189,
                'PokemonID' => 1153,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            189 => 
            array (
                'PokemonGrupoHuevoID' => 1190,
                'PokemonID' => 1154,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            190 => 
            array (
                'PokemonGrupoHuevoID' => 1191,
                'PokemonID' => 1155,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            191 => 
            array (
                'PokemonGrupoHuevoID' => 1192,
                'PokemonID' => 1155,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            192 => 
            array (
                'PokemonGrupoHuevoID' => 1193,
                'PokemonID' => 1156,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            193 => 
            array (
                'PokemonGrupoHuevoID' => 1194,
                'PokemonID' => 1156,
                'GrupoHuevoID' => 4,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            194 => 
            array (
                'PokemonGrupoHuevoID' => 1195,
                'PokemonID' => 1157,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            195 => 
            array (
                'PokemonGrupoHuevoID' => 1196,
                'PokemonID' => 1158,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            196 => 
            array (
                'PokemonGrupoHuevoID' => 1197,
                'PokemonID' => 1159,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            197 => 
            array (
                'PokemonGrupoHuevoID' => 1198,
                'PokemonID' => 1160,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            198 => 
            array (
                'PokemonGrupoHuevoID' => 1199,
                'PokemonID' => 1161,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            199 => 
            array (
                'PokemonGrupoHuevoID' => 1200,
                'PokemonID' => 1162,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            200 => 
            array (
                'PokemonGrupoHuevoID' => 1201,
                'PokemonID' => 1163,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            201 => 
            array (
                'PokemonGrupoHuevoID' => 1202,
                'PokemonID' => 1164,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            202 => 
            array (
                'PokemonGrupoHuevoID' => 1203,
                'PokemonID' => 1164,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            203 => 
            array (
                'PokemonGrupoHuevoID' => 1204,
                'PokemonID' => 1165,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            204 => 
            array (
                'PokemonGrupoHuevoID' => 1205,
                'PokemonID' => 1165,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            205 => 
            array (
                'PokemonGrupoHuevoID' => 1206,
                'PokemonID' => 1166,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            206 => 
            array (
                'PokemonGrupoHuevoID' => 1207,
                'PokemonID' => 1167,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            207 => 
            array (
                'PokemonGrupoHuevoID' => 1208,
                'PokemonID' => 1168,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            208 => 
            array (
                'PokemonGrupoHuevoID' => 1209,
                'PokemonID' => 1169,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            209 => 
            array (
                'PokemonGrupoHuevoID' => 1210,
                'PokemonID' => 1170,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            210 => 
            array (
                'PokemonGrupoHuevoID' => 1211,
                'PokemonID' => 1171,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            211 => 
            array (
                'PokemonGrupoHuevoID' => 1212,
                'PokemonID' => 1172,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            212 => 
            array (
                'PokemonGrupoHuevoID' => 1213,
                'PokemonID' => 1173,
                'GrupoHuevoID' => 12,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            213 => 
            array (
                'PokemonGrupoHuevoID' => 1214,
                'PokemonID' => 1174,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            214 => 
            array (
                'PokemonGrupoHuevoID' => 1215,
                'PokemonID' => 1175,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            215 => 
            array (
                'PokemonGrupoHuevoID' => 1216,
                'PokemonID' => 1176,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            216 => 
            array (
                'PokemonGrupoHuevoID' => 1217,
                'PokemonID' => 1177,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            217 => 
            array (
                'PokemonGrupoHuevoID' => 1218,
                'PokemonID' => 1178,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            218 => 
            array (
                'PokemonGrupoHuevoID' => 1219,
                'PokemonID' => 1179,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            219 => 
            array (
                'PokemonGrupoHuevoID' => 1220,
                'PokemonID' => 1179,
                'GrupoHuevoID' => 8,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            220 => 
            array (
                'PokemonGrupoHuevoID' => 1221,
                'PokemonID' => 1180,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            221 => 
            array (
                'PokemonGrupoHuevoID' => 1222,
                'PokemonID' => 1180,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            222 => 
            array (
                'PokemonGrupoHuevoID' => 1223,
                'PokemonID' => 1181,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            223 => 
            array (
                'PokemonGrupoHuevoID' => 1224,
                'PokemonID' => 1181,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            224 => 
            array (
                'PokemonGrupoHuevoID' => 1225,
                'PokemonID' => 1182,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            225 => 
            array (
                'PokemonGrupoHuevoID' => 1226,
                'PokemonID' => 1182,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            226 => 
            array (
                'PokemonGrupoHuevoID' => 1227,
                'PokemonID' => 1183,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            227 => 
            array (
                'PokemonGrupoHuevoID' => 1228,
                'PokemonID' => 1183,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            228 => 
            array (
                'PokemonGrupoHuevoID' => 1229,
                'PokemonID' => 1184,
                'GrupoHuevoID' => 5,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            229 => 
            array (
                'PokemonGrupoHuevoID' => 1230,
                'PokemonID' => 1184,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            230 => 
            array (
                'PokemonGrupoHuevoID' => 1231,
                'PokemonID' => 1185,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            231 => 
            array (
                'PokemonGrupoHuevoID' => 1232,
                'PokemonID' => 1186,
                'GrupoHuevoID' => 10,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            232 => 
            array (
                'PokemonGrupoHuevoID' => 1233,
                'PokemonID' => 1186,
                'GrupoHuevoID' => 11,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            233 => 
            array (
                'PokemonGrupoHuevoID' => 1234,
                'PokemonID' => 22,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            234 => 
            array (
                'PokemonGrupoHuevoID' => 1235,
                'PokemonID' => 23,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            235 => 
            array (
                'PokemonGrupoHuevoID' => 1236,
                'PokemonID' => 24,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            236 => 
            array (
                'PokemonGrupoHuevoID' => 1237,
                'PokemonID' => 25,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:06',
                'updated_at' => '2023-08-08 18:33:06',
            ),
            237 => 
            array (
                'PokemonGrupoHuevoID' => 1238,
                'PokemonID' => 44,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            238 => 
            array (
                'PokemonGrupoHuevoID' => 1239,
                'PokemonID' => 45,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            239 => 
            array (
                'PokemonGrupoHuevoID' => 1240,
                'PokemonID' => 46,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            240 => 
            array (
                'PokemonGrupoHuevoID' => 1241,
                'PokemonID' => 56,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            241 => 
            array (
                'PokemonGrupoHuevoID' => 1242,
                'PokemonID' => 57,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            242 => 
            array (
                'PokemonGrupoHuevoID' => 1243,
                'PokemonID' => 58,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            243 => 
            array (
                'PokemonGrupoHuevoID' => 1244,
                'PokemonID' => 59,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            244 => 
            array (
                'PokemonGrupoHuevoID' => 1245,
                'PokemonID' => 184,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            245 => 
            array (
                'PokemonGrupoHuevoID' => 1246,
                'PokemonID' => 185,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            246 => 
            array (
                'PokemonGrupoHuevoID' => 1247,
                'PokemonID' => 189,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            247 => 
            array (
                'PokemonGrupoHuevoID' => 1248,
                'PokemonID' => 190,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            248 => 
            array (
                'PokemonGrupoHuevoID' => 1249,
                'PokemonID' => 191,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            249 => 
            array (
                'PokemonGrupoHuevoID' => 1250,
                'PokemonID' => 192,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            250 => 
            array (
                'PokemonGrupoHuevoID' => 1251,
                'PokemonID' => 203,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            251 => 
            array (
                'PokemonGrupoHuevoID' => 1252,
                'PokemonID' => 204,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            252 => 
            array (
                'PokemonGrupoHuevoID' => 1253,
                'PokemonID' => 207,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            253 => 
            array (
                'PokemonGrupoHuevoID' => 1254,
                'PokemonID' => 208,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            254 => 
            array (
                'PokemonGrupoHuevoID' => 1255,
                'PokemonID' => 221,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            255 => 
            array (
                'PokemonGrupoHuevoID' => 1256,
                'PokemonID' => 222,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            256 => 
            array (
                'PokemonGrupoHuevoID' => 1257,
                'PokemonID' => 229,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            257 => 
            array (
                'PokemonGrupoHuevoID' => 1258,
                'PokemonID' => 230,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            258 => 
            array (
                'PokemonGrupoHuevoID' => 1259,
                'PokemonID' => 250,
                'GrupoHuevoID' => 16,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            259 => 
            array (
                'PokemonGrupoHuevoID' => 1260,
                'PokemonID' => 252,
                'GrupoHuevoID' => 16,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            260 => 
            array (
                'PokemonGrupoHuevoID' => 1261,
                'PokemonID' => 256,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            261 => 
            array (
                'PokemonGrupoHuevoID' => 1262,
                'PokemonID' => 257,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            262 => 
            array (
                'PokemonGrupoHuevoID' => 1263,
                'PokemonID' => 258,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            263 => 
            array (
                'PokemonGrupoHuevoID' => 1264,
                'PokemonID' => 260,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            264 => 
            array (
                'PokemonGrupoHuevoID' => 1265,
                'PokemonID' => 261,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            265 => 
            array (
                'PokemonGrupoHuevoID' => 1266,
                'PokemonID' => 262,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:07',
                'updated_at' => '2023-08-08 18:33:07',
            ),
            266 => 
            array (
                'PokemonGrupoHuevoID' => 1267,
                'PokemonID' => 283,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            267 => 
            array (
                'PokemonGrupoHuevoID' => 1268,
                'PokemonID' => 284,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            268 => 
            array (
                'PokemonGrupoHuevoID' => 1269,
                'PokemonID' => 285,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            269 => 
            array (
                'PokemonGrupoHuevoID' => 1270,
                'PokemonID' => 324,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            270 => 
            array (
                'PokemonGrupoHuevoID' => 1271,
                'PokemonID' => 325,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            271 => 
            array (
                'PokemonGrupoHuevoID' => 1272,
                'PokemonID' => 326,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            272 => 
            array (
                'PokemonGrupoHuevoID' => 1273,
                'PokemonID' => 327,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            273 => 
            array (
                'PokemonGrupoHuevoID' => 1274,
                'PokemonID' => 328,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            274 => 
            array (
                'PokemonGrupoHuevoID' => 1275,
                'PokemonID' => 329,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            275 => 
            array (
                'PokemonGrupoHuevoID' => 1276,
                'PokemonID' => 330,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            276 => 
            array (
                'PokemonGrupoHuevoID' => 1277,
                'PokemonID' => 331,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            277 => 
            array (
                'PokemonGrupoHuevoID' => 1278,
                'PokemonID' => 332,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            278 => 
            array (
                'PokemonGrupoHuevoID' => 1279,
                'PokemonID' => 335,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            279 => 
            array (
                'PokemonGrupoHuevoID' => 1280,
                'PokemonID' => 336,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            280 => 
            array (
                'PokemonGrupoHuevoID' => 1281,
                'PokemonID' => 337,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            281 => 
            array (
                'PokemonGrupoHuevoID' => 1282,
                'PokemonID' => 338,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            282 => 
            array (
                'PokemonGrupoHuevoID' => 1283,
                'PokemonID' => 341,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            283 => 
            array (
                'PokemonGrupoHuevoID' => 1284,
                'PokemonID' => 342,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            284 => 
            array (
                'PokemonGrupoHuevoID' => 1285,
                'PokemonID' => 343,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            285 => 
            array (
                'PokemonGrupoHuevoID' => 1286,
                'PokemonID' => 344,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            286 => 
            array (
                'PokemonGrupoHuevoID' => 1287,
                'PokemonID' => 345,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            287 => 
            array (
                'PokemonGrupoHuevoID' => 1288,
                'PokemonID' => 346,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            288 => 
            array (
                'PokemonGrupoHuevoID' => 1289,
                'PokemonID' => 347,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            289 => 
            array (
                'PokemonGrupoHuevoID' => 1290,
                'PokemonID' => 348,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            290 => 
            array (
                'PokemonGrupoHuevoID' => 1291,
                'PokemonID' => 349,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            291 => 
            array (
                'PokemonGrupoHuevoID' => 1292,
                'PokemonID' => 350,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            292 => 
            array (
                'PokemonGrupoHuevoID' => 1293,
                'PokemonID' => 351,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            293 => 
            array (
                'PokemonGrupoHuevoID' => 1294,
                'PokemonID' => 352,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            294 => 
            array (
                'PokemonGrupoHuevoID' => 1295,
                'PokemonID' => 353,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            295 => 
            array (
                'PokemonGrupoHuevoID' => 1296,
                'PokemonID' => 354,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            296 => 
            array (
                'PokemonGrupoHuevoID' => 1297,
                'PokemonID' => 356,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            297 => 
            array (
                'PokemonGrupoHuevoID' => 1298,
                'PokemonID' => 358,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            298 => 
            array (
                'PokemonGrupoHuevoID' => 1299,
                'PokemonID' => 359,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            299 => 
            array (
                'PokemonGrupoHuevoID' => 1300,
                'PokemonID' => 360,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            300 => 
            array (
                'PokemonGrupoHuevoID' => 1301,
                'PokemonID' => 361,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            301 => 
            array (
                'PokemonGrupoHuevoID' => 1302,
                'PokemonID' => 362,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            302 => 
            array (
                'PokemonGrupoHuevoID' => 1303,
                'PokemonID' => 363,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            303 => 
            array (
                'PokemonGrupoHuevoID' => 1304,
                'PokemonID' => 364,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            304 => 
            array (
                'PokemonGrupoHuevoID' => 1305,
                'PokemonID' => 365,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            305 => 
            array (
                'PokemonGrupoHuevoID' => 1306,
                'PokemonID' => 392,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            306 => 
            array (
                'PokemonGrupoHuevoID' => 1307,
                'PokemonID' => 393,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            307 => 
            array (
                'PokemonGrupoHuevoID' => 1308,
                'PokemonID' => 394,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            308 => 
            array (
                'PokemonGrupoHuevoID' => 1309,
                'PokemonID' => 395,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            309 => 
            array (
                'PokemonGrupoHuevoID' => 1310,
                'PokemonID' => 396,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            310 => 
            array (
                'PokemonGrupoHuevoID' => 1311,
                'PokemonID' => 397,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            311 => 
            array (
                'PokemonGrupoHuevoID' => 1312,
                'PokemonID' => 398,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            312 => 
            array (
                'PokemonGrupoHuevoID' => 1313,
                'PokemonID' => 399,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            313 => 
            array (
                'PokemonGrupoHuevoID' => 1314,
                'PokemonID' => 400,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            314 => 
            array (
                'PokemonGrupoHuevoID' => 1315,
                'PokemonID' => 401,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            315 => 
            array (
                'PokemonGrupoHuevoID' => 1316,
                'PokemonID' => 402,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            316 => 
            array (
                'PokemonGrupoHuevoID' => 1317,
                'PokemonID' => 459,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            317 => 
            array (
                'PokemonGrupoHuevoID' => 1318,
                'PokemonID' => 460,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:08',
                'updated_at' => '2023-08-08 18:33:08',
            ),
            318 => 
            array (
                'PokemonGrupoHuevoID' => 1319,
                'PokemonID' => 560,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            319 => 
            array (
                'PokemonGrupoHuevoID' => 1320,
                'PokemonID' => 561,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            320 => 
            array (
                'PokemonGrupoHuevoID' => 1321,
                'PokemonID' => 583,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            321 => 
            array (
                'PokemonGrupoHuevoID' => 1322,
                'PokemonID' => 584,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            322 => 
            array (
                'PokemonGrupoHuevoID' => 1323,
                'PokemonID' => 585,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            323 => 
            array (
                'PokemonGrupoHuevoID' => 1324,
                'PokemonID' => 586,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            324 => 
            array (
                'PokemonGrupoHuevoID' => 1325,
                'PokemonID' => 587,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            325 => 
            array (
                'PokemonGrupoHuevoID' => 1326,
                'PokemonID' => 588,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            326 => 
            array (
                'PokemonGrupoHuevoID' => 1327,
                'PokemonID' => 589,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            327 => 
            array (
                'PokemonGrupoHuevoID' => 1328,
                'PokemonID' => 590,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            328 => 
            array (
                'PokemonGrupoHuevoID' => 1329,
                'PokemonID' => 591,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            329 => 
            array (
                'PokemonGrupoHuevoID' => 1330,
                'PokemonID' => 592,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            330 => 
            array (
                'PokemonGrupoHuevoID' => 1331,
                'PokemonID' => 599,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            331 => 
            array (
                'PokemonGrupoHuevoID' => 1332,
                'PokemonID' => 600,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            332 => 
            array (
                'PokemonGrupoHuevoID' => 1333,
                'PokemonID' => 601,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            333 => 
            array (
                'PokemonGrupoHuevoID' => 1334,
                'PokemonID' => 609,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            334 => 
            array (
                'PokemonGrupoHuevoID' => 1335,
                'PokemonID' => 610,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            335 => 
            array (
                'PokemonGrupoHuevoID' => 1336,
                'PokemonID' => 611,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            336 => 
            array (
                'PokemonGrupoHuevoID' => 1337,
                'PokemonID' => 616,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            337 => 
            array (
                'PokemonGrupoHuevoID' => 1338,
                'PokemonID' => 617,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            338 => 
            array (
                'PokemonGrupoHuevoID' => 1339,
                'PokemonID' => 620,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            339 => 
            array (
                'PokemonGrupoHuevoID' => 1340,
                'PokemonID' => 621,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            340 => 
            array (
                'PokemonGrupoHuevoID' => 1341,
                'PokemonID' => 636,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            341 => 
            array (
                'PokemonGrupoHuevoID' => 1342,
                'PokemonID' => 637,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            342 => 
            array (
                'PokemonGrupoHuevoID' => 1343,
                'PokemonID' => 638,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            343 => 
            array (
                'PokemonGrupoHuevoID' => 1344,
                'PokemonID' => 645,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            344 => 
            array (
                'PokemonGrupoHuevoID' => 1345,
                'PokemonID' => 646,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            345 => 
            array (
                'PokemonGrupoHuevoID' => 1346,
                'PokemonID' => 649,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            346 => 
            array (
                'PokemonGrupoHuevoID' => 1347,
                'PokemonID' => 650,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            347 => 
            array (
                'PokemonGrupoHuevoID' => 1348,
                'PokemonID' => 668,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            348 => 
            array (
                'PokemonGrupoHuevoID' => 1349,
                'PokemonID' => 672,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            349 => 
            array (
                'PokemonGrupoHuevoID' => 1350,
                'PokemonID' => 683,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            350 => 
            array (
                'PokemonGrupoHuevoID' => 1351,
                'PokemonID' => 693,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            351 => 
            array (
                'PokemonGrupoHuevoID' => 1352,
                'PokemonID' => 694,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            352 => 
            array (
                'PokemonGrupoHuevoID' => 1353,
                'PokemonID' => 695,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            353 => 
            array (
                'PokemonGrupoHuevoID' => 1354,
                'PokemonID' => 696,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            354 => 
            array (
                'PokemonGrupoHuevoID' => 1355,
                'PokemonID' => 697,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:09',
                'updated_at' => '2023-08-08 18:33:09',
            ),
            355 => 
            array (
                'PokemonGrupoHuevoID' => 1356,
                'PokemonID' => 723,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            356 => 
            array (
                'PokemonGrupoHuevoID' => 1357,
                'PokemonID' => 724,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            357 => 
            array (
                'PokemonGrupoHuevoID' => 1358,
                'PokemonID' => 725,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            358 => 
            array (
                'PokemonGrupoHuevoID' => 1359,
                'PokemonID' => 726,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            359 => 
            array (
                'PokemonGrupoHuevoID' => 1360,
                'PokemonID' => 727,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            360 => 
            array (
                'PokemonGrupoHuevoID' => 1361,
                'PokemonID' => 728,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            361 => 
            array (
                'PokemonGrupoHuevoID' => 1362,
                'PokemonID' => 729,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            362 => 
            array (
                'PokemonGrupoHuevoID' => 1363,
                'PokemonID' => 737,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            363 => 
            array (
                'PokemonGrupoHuevoID' => 1364,
                'PokemonID' => 738,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            364 => 
            array (
                'PokemonGrupoHuevoID' => 1365,
                'PokemonID' => 739,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            365 => 
            array (
                'PokemonGrupoHuevoID' => 1366,
                'PokemonID' => 740,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            366 => 
            array (
                'PokemonGrupoHuevoID' => 1367,
                'PokemonID' => 749,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            367 => 
            array (
                'PokemonGrupoHuevoID' => 1368,
                'PokemonID' => 750,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            368 => 
            array (
                'PokemonGrupoHuevoID' => 1369,
                'PokemonID' => 751,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            369 => 
            array (
                'PokemonGrupoHuevoID' => 1370,
                'PokemonID' => 752,
                'GrupoHuevoID' => 15,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            370 => 
            array (
                'PokemonGrupoHuevoID' => 1371,
                'PokemonID' => 755,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            371 => 
            array (
                'PokemonGrupoHuevoID' => 1372,
                'PokemonID' => 756,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            372 => 
            array (
                'PokemonGrupoHuevoID' => 1373,
                'PokemonID' => 761,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            373 => 
            array (
                'PokemonGrupoHuevoID' => 1374,
                'PokemonID' => 762,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            374 => 
            array (
                'PokemonGrupoHuevoID' => 1375,
                'PokemonID' => 773,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            375 => 
            array (
                'PokemonGrupoHuevoID' => 1376,
                'PokemonID' => 796,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            376 => 
            array (
                'PokemonGrupoHuevoID' => 1377,
                'PokemonID' => 797,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            377 => 
            array (
                'PokemonGrupoHuevoID' => 1378,
                'PokemonID' => 820,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            378 => 
            array (
                'PokemonGrupoHuevoID' => 1379,
                'PokemonID' => 821,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            379 => 
            array (
                'PokemonGrupoHuevoID' => 1380,
                'PokemonID' => 858,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            380 => 
            array (
                'PokemonGrupoHuevoID' => 1381,
                'PokemonID' => 895,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            381 => 
            array (
                'PokemonGrupoHuevoID' => 1382,
                'PokemonID' => 896,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            382 => 
            array (
                'PokemonGrupoHuevoID' => 1383,
                'PokemonID' => 933,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
            383 => 
            array (
                'PokemonGrupoHuevoID' => 1384,
                'PokemonID' => 934,
                'GrupoHuevoID' => 14,
                'Dias' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:33:10',
                'updated_at' => '2023-08-08 18:33:10',
            ),
        ));
        
        
    }
}