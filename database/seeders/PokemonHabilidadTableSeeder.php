<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PokemonHabilidadTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('PokemonHabilidad')->delete();
        
        \DB::table('PokemonHabilidad')->insert(array (
            0 => 
            array (
                'PokemonHabilidadID' => 1,
                'PokemonID' => 1,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            1 => 
            array (
                'PokemonHabilidadID' => 2,
                'PokemonID' => 1,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            2 => 
            array (
                'PokemonHabilidadID' => 3,
                'PokemonID' => 2,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            3 => 
            array (
                'PokemonHabilidadID' => 4,
                'PokemonID' => 2,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            4 => 
            array (
                'PokemonHabilidadID' => 5,
                'PokemonID' => 3,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            5 => 
            array (
                'PokemonHabilidadID' => 6,
                'PokemonID' => 3,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            6 => 
            array (
                'PokemonHabilidadID' => 7,
                'PokemonID' => 4,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            7 => 
            array (
                'PokemonHabilidadID' => 8,
                'PokemonID' => 4,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            8 => 
            array (
                'PokemonHabilidadID' => 9,
                'PokemonID' => 5,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            9 => 
            array (
                'PokemonHabilidadID' => 10,
                'PokemonID' => 5,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            10 => 
            array (
                'PokemonHabilidadID' => 11,
                'PokemonID' => 6,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            11 => 
            array (
                'PokemonHabilidadID' => 12,
                'PokemonID' => 6,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            12 => 
            array (
                'PokemonHabilidadID' => 13,
                'PokemonID' => 7,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            13 => 
            array (
                'PokemonHabilidadID' => 14,
                'PokemonID' => 7,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            14 => 
            array (
                'PokemonHabilidadID' => 15,
                'PokemonID' => 8,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            15 => 
            array (
                'PokemonHabilidadID' => 16,
                'PokemonID' => 8,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            16 => 
            array (
                'PokemonHabilidadID' => 17,
                'PokemonID' => 9,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            17 => 
            array (
                'PokemonHabilidadID' => 18,
                'PokemonID' => 9,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            18 => 
            array (
                'PokemonHabilidadID' => 19,
                'PokemonID' => 10,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            19 => 
            array (
                'PokemonHabilidadID' => 20,
                'PokemonID' => 10,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            20 => 
            array (
                'PokemonHabilidadID' => 21,
                'PokemonID' => 11,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            21 => 
            array (
                'PokemonHabilidadID' => 22,
                'PokemonID' => 11,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            22 => 
            array (
                'PokemonHabilidadID' => 23,
                'PokemonID' => 12,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            23 => 
            array (
                'PokemonHabilidadID' => 24,
                'PokemonID' => 12,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            24 => 
            array (
                'PokemonHabilidadID' => 25,
                'PokemonID' => 13,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            25 => 
            array (
                'PokemonHabilidadID' => 26,
                'PokemonID' => 14,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            26 => 
            array (
                'PokemonHabilidadID' => 27,
                'PokemonID' => 15,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            27 => 
            array (
                'PokemonHabilidadID' => 28,
                'PokemonID' => 15,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            28 => 
            array (
                'PokemonHabilidadID' => 29,
                'PokemonID' => 15,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            29 => 
            array (
                'PokemonHabilidadID' => 30,
                'PokemonID' => 16,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            30 => 
            array (
                'PokemonHabilidadID' => 31,
                'PokemonID' => 16,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            31 => 
            array (
                'PokemonHabilidadID' => 32,
                'PokemonID' => 16,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            32 => 
            array (
                'PokemonHabilidadID' => 33,
                'PokemonID' => 17,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            33 => 
            array (
                'PokemonHabilidadID' => 34,
                'PokemonID' => 17,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            34 => 
            array (
                'PokemonHabilidadID' => 35,
                'PokemonID' => 17,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            35 => 
            array (
                'PokemonHabilidadID' => 36,
                'PokemonID' => 17,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            36 => 
            array (
                'PokemonHabilidadID' => 37,
                'PokemonID' => 18,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            37 => 
            array (
                'PokemonHabilidadID' => 38,
                'PokemonID' => 18,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            38 => 
            array (
                'PokemonHabilidadID' => 39,
                'PokemonID' => 18,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            39 => 
            array (
                'PokemonHabilidadID' => 40,
                'PokemonID' => 18,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            40 => 
            array (
                'PokemonHabilidadID' => 41,
                'PokemonID' => 19,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            41 => 
            array (
                'PokemonHabilidadID' => 42,
                'PokemonID' => 19,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            42 => 
            array (
                'PokemonHabilidadID' => 43,
                'PokemonID' => 20,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            43 => 
            array (
                'PokemonHabilidadID' => 44,
                'PokemonID' => 20,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            44 => 
            array (
                'PokemonHabilidadID' => 45,
                'PokemonID' => 21,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            45 => 
            array (
                'PokemonHabilidadID' => 46,
                'PokemonID' => 21,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            46 => 
            array (
                'PokemonHabilidadID' => 47,
                'PokemonID' => 22,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            47 => 
            array (
                'PokemonHabilidadID' => 48,
                'PokemonID' => 22,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            48 => 
            array (
                'PokemonHabilidadID' => 49,
                'PokemonID' => 23,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            49 => 
            array (
                'PokemonHabilidadID' => 50,
                'PokemonID' => 23,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            50 => 
            array (
                'PokemonHabilidadID' => 51,
                'PokemonID' => 24,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            51 => 
            array (
                'PokemonHabilidadID' => 52,
                'PokemonID' => 24,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            52 => 
            array (
                'PokemonHabilidadID' => 53,
                'PokemonID' => 25,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            53 => 
            array (
                'PokemonHabilidadID' => 54,
                'PokemonID' => 25,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            54 => 
            array (
                'PokemonHabilidadID' => 55,
                'PokemonID' => 26,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            55 => 
            array (
                'PokemonHabilidadID' => 56,
                'PokemonID' => 27,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            56 => 
            array (
                'PokemonHabilidadID' => 57,
                'PokemonID' => 28,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            57 => 
            array (
                'PokemonHabilidadID' => 58,
                'PokemonID' => 28,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            58 => 
            array (
                'PokemonHabilidadID' => 59,
                'PokemonID' => 29,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            59 => 
            array (
                'PokemonHabilidadID' => 60,
                'PokemonID' => 29,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            60 => 
            array (
                'PokemonHabilidadID' => 61,
                'PokemonID' => 30,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            61 => 
            array (
                'PokemonHabilidadID' => 62,
                'PokemonID' => 30,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            62 => 
            array (
                'PokemonHabilidadID' => 63,
                'PokemonID' => 31,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            63 => 
            array (
                'PokemonHabilidadID' => 64,
                'PokemonID' => 31,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            64 => 
            array (
                'PokemonHabilidadID' => 65,
                'PokemonID' => 32,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            65 => 
            array (
                'PokemonHabilidadID' => 66,
                'PokemonID' => 32,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            66 => 
            array (
                'PokemonHabilidadID' => 67,
                'PokemonID' => 32,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            67 => 
            array (
                'PokemonHabilidadID' => 68,
                'PokemonID' => 33,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            68 => 
            array (
                'PokemonHabilidadID' => 69,
                'PokemonID' => 33,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            69 => 
            array (
                'PokemonHabilidadID' => 70,
                'PokemonID' => 33,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            70 => 
            array (
                'PokemonHabilidadID' => 71,
                'PokemonID' => 34,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            71 => 
            array (
                'PokemonHabilidadID' => 72,
                'PokemonID' => 34,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            72 => 
            array (
                'PokemonHabilidadID' => 73,
                'PokemonID' => 35,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            73 => 
            array (
                'PokemonHabilidadID' => 74,
                'PokemonID' => 35,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            74 => 
            array (
                'PokemonHabilidadID' => 75,
                'PokemonID' => 36,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            75 => 
            array (
                'PokemonHabilidadID' => 76,
                'PokemonID' => 36,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            76 => 
            array (
                'PokemonHabilidadID' => 77,
                'PokemonID' => 37,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            77 => 
            array (
                'PokemonHabilidadID' => 78,
                'PokemonID' => 37,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            78 => 
            array (
                'PokemonHabilidadID' => 79,
                'PokemonID' => 38,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            79 => 
            array (
                'PokemonHabilidadID' => 80,
                'PokemonID' => 38,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            80 => 
            array (
                'PokemonHabilidadID' => 81,
                'PokemonID' => 39,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            81 => 
            array (
                'PokemonHabilidadID' => 82,
                'PokemonID' => 39,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            82 => 
            array (
                'PokemonHabilidadID' => 83,
                'PokemonID' => 40,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            83 => 
            array (
                'PokemonHabilidadID' => 84,
                'PokemonID' => 41,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            84 => 
            array (
                'PokemonHabilidadID' => 85,
                'PokemonID' => 42,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            85 => 
            array (
                'PokemonHabilidadID' => 86,
                'PokemonID' => 43,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            86 => 
            array (
                'PokemonHabilidadID' => 87,
                'PokemonID' => 44,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            87 => 
            array (
                'PokemonHabilidadID' => 88,
                'PokemonID' => 44,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            88 => 
            array (
                'PokemonHabilidadID' => 89,
                'PokemonID' => 44,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            89 => 
            array (
                'PokemonHabilidadID' => 90,
                'PokemonID' => 45,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            90 => 
            array (
                'PokemonHabilidadID' => 91,
                'PokemonID' => 45,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            91 => 
            array (
                'PokemonHabilidadID' => 92,
                'PokemonID' => 45,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            92 => 
            array (
                'PokemonHabilidadID' => 93,
                'PokemonID' => 46,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            93 => 
            array (
                'PokemonHabilidadID' => 94,
                'PokemonID' => 46,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            94 => 
            array (
                'PokemonHabilidadID' => 95,
                'PokemonID' => 46,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            95 => 
            array (
                'PokemonHabilidadID' => 96,
                'PokemonID' => 47,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            96 => 
            array (
                'PokemonHabilidadID' => 97,
                'PokemonID' => 47,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            97 => 
            array (
                'PokemonHabilidadID' => 98,
                'PokemonID' => 48,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            98 => 
            array (
                'PokemonHabilidadID' => 99,
                'PokemonID' => 48,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            99 => 
            array (
                'PokemonHabilidadID' => 100,
                'PokemonID' => 48,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            100 => 
            array (
                'PokemonHabilidadID' => 101,
                'PokemonID' => 49,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            101 => 
            array (
                'PokemonHabilidadID' => 102,
                'PokemonID' => 49,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            102 => 
            array (
                'PokemonHabilidadID' => 103,
                'PokemonID' => 49,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            103 => 
            array (
                'PokemonHabilidadID' => 104,
                'PokemonID' => 49,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            104 => 
            array (
                'PokemonHabilidadID' => 105,
                'PokemonID' => 50,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            105 => 
            array (
                'PokemonHabilidadID' => 106,
                'PokemonID' => 51,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            106 => 
            array (
                'PokemonHabilidadID' => 107,
                'PokemonID' => 52,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            107 => 
            array (
                'PokemonHabilidadID' => 108,
                'PokemonID' => 52,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            108 => 
            array (
                'PokemonHabilidadID' => 109,
                'PokemonID' => 53,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            109 => 
            array (
                'PokemonHabilidadID' => 110,
                'PokemonID' => 54,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            110 => 
            array (
                'PokemonHabilidadID' => 111,
                'PokemonID' => 55,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            111 => 
            array (
                'PokemonHabilidadID' => 112,
                'PokemonID' => 56,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            112 => 
            array (
                'PokemonHabilidadID' => 113,
                'PokemonID' => 57,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            113 => 
            array (
                'PokemonHabilidadID' => 114,
                'PokemonID' => 58,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            114 => 
            array (
                'PokemonHabilidadID' => 115,
                'PokemonID' => 59,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            115 => 
            array (
                'PokemonHabilidadID' => 116,
                'PokemonID' => 60,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            116 => 
            array (
                'PokemonHabilidadID' => 117,
                'PokemonID' => 60,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            117 => 
            array (
                'PokemonHabilidadID' => 118,
                'PokemonID' => 61,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            118 => 
            array (
                'PokemonHabilidadID' => 119,
                'PokemonID' => 61,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            119 => 
            array (
                'PokemonHabilidadID' => 120,
                'PokemonID' => 62,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            120 => 
            array (
                'PokemonHabilidadID' => 121,
                'PokemonID' => 62,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            121 => 
            array (
                'PokemonHabilidadID' => 122,
                'PokemonID' => 63,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            122 => 
            array (
                'PokemonHabilidadID' => 123,
                'PokemonID' => 63,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            123 => 
            array (
                'PokemonHabilidadID' => 124,
                'PokemonID' => 64,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            124 => 
            array (
                'PokemonHabilidadID' => 125,
                'PokemonID' => 64,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            125 => 
            array (
                'PokemonHabilidadID' => 126,
                'PokemonID' => 65,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            126 => 
            array (
                'PokemonHabilidadID' => 127,
                'PokemonID' => 65,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            127 => 
            array (
                'PokemonHabilidadID' => 128,
                'PokemonID' => 66,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            128 => 
            array (
                'PokemonHabilidadID' => 129,
                'PokemonID' => 66,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            129 => 
            array (
                'PokemonHabilidadID' => 130,
                'PokemonID' => 67,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            130 => 
            array (
                'PokemonHabilidadID' => 131,
                'PokemonID' => 67,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            131 => 
            array (
                'PokemonHabilidadID' => 132,
                'PokemonID' => 68,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            132 => 
            array (
                'PokemonHabilidadID' => 133,
                'PokemonID' => 68,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            133 => 
            array (
                'PokemonHabilidadID' => 134,
                'PokemonID' => 68,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            134 => 
            array (
                'PokemonHabilidadID' => 135,
                'PokemonID' => 69,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            135 => 
            array (
                'PokemonHabilidadID' => 136,
                'PokemonID' => 69,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            136 => 
            array (
                'PokemonHabilidadID' => 137,
                'PokemonID' => 69,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            137 => 
            array (
                'PokemonHabilidadID' => 138,
                'PokemonID' => 69,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            138 => 
            array (
                'PokemonHabilidadID' => 139,
                'PokemonID' => 70,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            139 => 
            array (
                'PokemonHabilidadID' => 140,
                'PokemonID' => 70,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            140 => 
            array (
                'PokemonHabilidadID' => 141,
                'PokemonID' => 70,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            141 => 
            array (
                'PokemonHabilidadID' => 142,
                'PokemonID' => 70,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            142 => 
            array (
                'PokemonHabilidadID' => 143,
                'PokemonID' => 70,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            143 => 
            array (
                'PokemonHabilidadID' => 144,
                'PokemonID' => 71,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            144 => 
            array (
                'PokemonHabilidadID' => 145,
                'PokemonID' => 71,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            145 => 
            array (
                'PokemonHabilidadID' => 146,
                'PokemonID' => 71,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            146 => 
            array (
                'PokemonHabilidadID' => 147,
                'PokemonID' => 71,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            147 => 
            array (
                'PokemonHabilidadID' => 148,
                'PokemonID' => 72,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            148 => 
            array (
                'PokemonHabilidadID' => 149,
                'PokemonID' => 72,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            149 => 
            array (
                'PokemonHabilidadID' => 150,
                'PokemonID' => 73,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            150 => 
            array (
                'PokemonHabilidadID' => 151,
                'PokemonID' => 73,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            151 => 
            array (
                'PokemonHabilidadID' => 152,
                'PokemonID' => 74,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            152 => 
            array (
                'PokemonHabilidadID' => 153,
                'PokemonID' => 74,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            153 => 
            array (
                'PokemonHabilidadID' => 154,
                'PokemonID' => 75,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            154 => 
            array (
                'PokemonHabilidadID' => 155,
                'PokemonID' => 75,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            155 => 
            array (
                'PokemonHabilidadID' => 156,
                'PokemonID' => 76,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            156 => 
            array (
                'PokemonHabilidadID' => 157,
                'PokemonID' => 76,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            157 => 
            array (
                'PokemonHabilidadID' => 158,
                'PokemonID' => 77,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            158 => 
            array (
                'PokemonHabilidadID' => 159,
                'PokemonID' => 77,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            159 => 
            array (
                'PokemonHabilidadID' => 160,
                'PokemonID' => 78,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            160 => 
            array (
                'PokemonHabilidadID' => 161,
                'PokemonID' => 78,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            161 => 
            array (
                'PokemonHabilidadID' => 162,
                'PokemonID' => 79,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            162 => 
            array (
                'PokemonHabilidadID' => 163,
                'PokemonID' => 79,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            163 => 
            array (
                'PokemonHabilidadID' => 164,
                'PokemonID' => 79,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            164 => 
            array (
                'PokemonHabilidadID' => 165,
                'PokemonID' => 79,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            165 => 
            array (
                'PokemonHabilidadID' => 166,
                'PokemonID' => 80,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            166 => 
            array (
                'PokemonHabilidadID' => 167,
                'PokemonID' => 80,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            167 => 
            array (
                'PokemonHabilidadID' => 168,
                'PokemonID' => 80,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            168 => 
            array (
                'PokemonHabilidadID' => 169,
                'PokemonID' => 80,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            169 => 
            array (
                'PokemonHabilidadID' => 170,
                'PokemonID' => 81,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            170 => 
            array (
                'PokemonHabilidadID' => 171,
                'PokemonID' => 81,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            171 => 
            array (
                'PokemonHabilidadID' => 172,
                'PokemonID' => 81,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            172 => 
            array (
                'PokemonHabilidadID' => 173,
                'PokemonID' => 81,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            173 => 
            array (
                'PokemonHabilidadID' => 174,
                'PokemonID' => 81,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            174 => 
            array (
                'PokemonHabilidadID' => 175,
                'PokemonID' => 82,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            175 => 
            array (
                'PokemonHabilidadID' => 176,
                'PokemonID' => 82,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            176 => 
            array (
                'PokemonHabilidadID' => 177,
                'PokemonID' => 82,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            177 => 
            array (
                'PokemonHabilidadID' => 178,
                'PokemonID' => 83,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            178 => 
            array (
                'PokemonHabilidadID' => 179,
                'PokemonID' => 83,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            179 => 
            array (
                'PokemonHabilidadID' => 180,
                'PokemonID' => 84,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            180 => 
            array (
                'PokemonHabilidadID' => 181,
                'PokemonID' => 84,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            181 => 
            array (
                'PokemonHabilidadID' => 182,
                'PokemonID' => 85,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            182 => 
            array (
                'PokemonHabilidadID' => 183,
                'PokemonID' => 85,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            183 => 
            array (
                'PokemonHabilidadID' => 184,
                'PokemonID' => 86,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            184 => 
            array (
                'PokemonHabilidadID' => 185,
                'PokemonID' => 86,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            185 => 
            array (
                'PokemonHabilidadID' => 186,
                'PokemonID' => 86,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            186 => 
            array (
                'PokemonHabilidadID' => 187,
                'PokemonID' => 87,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            187 => 
            array (
                'PokemonHabilidadID' => 188,
                'PokemonID' => 87,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            188 => 
            array (
                'PokemonHabilidadID' => 189,
                'PokemonID' => 87,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            189 => 
            array (
                'PokemonHabilidadID' => 190,
                'PokemonID' => 87,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            190 => 
            array (
                'PokemonHabilidadID' => 191,
                'PokemonID' => 87,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            191 => 
            array (
                'PokemonHabilidadID' => 192,
                'PokemonID' => 88,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            192 => 
            array (
                'PokemonHabilidadID' => 193,
                'PokemonID' => 88,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            193 => 
            array (
                'PokemonHabilidadID' => 194,
                'PokemonID' => 88,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            194 => 
            array (
                'PokemonHabilidadID' => 195,
                'PokemonID' => 88,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            195 => 
            array (
                'PokemonHabilidadID' => 196,
                'PokemonID' => 88,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            196 => 
            array (
                'PokemonHabilidadID' => 197,
                'PokemonID' => 88,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            197 => 
            array (
                'PokemonHabilidadID' => 198,
                'PokemonID' => 89,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            198 => 
            array (
                'PokemonHabilidadID' => 199,
                'PokemonID' => 89,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            199 => 
            array (
                'PokemonHabilidadID' => 200,
                'PokemonID' => 89,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            200 => 
            array (
                'PokemonHabilidadID' => 201,
                'PokemonID' => 89,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            201 => 
            array (
                'PokemonHabilidadID' => 202,
                'PokemonID' => 89,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            202 => 
            array (
                'PokemonHabilidadID' => 203,
                'PokemonID' => 90,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            203 => 
            array (
                'PokemonHabilidadID' => 204,
                'PokemonID' => 91,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            204 => 
            array (
                'PokemonHabilidadID' => 205,
                'PokemonID' => 92,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            205 => 
            array (
                'PokemonHabilidadID' => 206,
                'PokemonID' => 93,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            206 => 
            array (
                'PokemonHabilidadID' => 207,
                'PokemonID' => 94,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            207 => 
            array (
                'PokemonHabilidadID' => 208,
                'PokemonID' => 94,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            208 => 
            array (
                'PokemonHabilidadID' => 209,
                'PokemonID' => 94,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            209 => 
            array (
                'PokemonHabilidadID' => 210,
                'PokemonID' => 95,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            210 => 
            array (
                'PokemonHabilidadID' => 211,
                'PokemonID' => 96,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            211 => 
            array (
                'PokemonHabilidadID' => 212,
                'PokemonID' => 97,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            212 => 
            array (
                'PokemonHabilidadID' => 213,
                'PokemonID' => 97,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            213 => 
            array (
                'PokemonHabilidadID' => 214,
                'PokemonID' => 97,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            214 => 
            array (
                'PokemonHabilidadID' => 215,
                'PokemonID' => 97,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            215 => 
            array (
                'PokemonHabilidadID' => 216,
                'PokemonID' => 97,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            216 => 
            array (
                'PokemonHabilidadID' => 217,
                'PokemonID' => 98,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            217 => 
            array (
                'PokemonHabilidadID' => 218,
                'PokemonID' => 98,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            218 => 
            array (
                'PokemonHabilidadID' => 219,
                'PokemonID' => 99,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            219 => 
            array (
                'PokemonHabilidadID' => 220,
                'PokemonID' => 99,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            220 => 
            array (
                'PokemonHabilidadID' => 221,
                'PokemonID' => 100,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            221 => 
            array (
                'PokemonHabilidadID' => 222,
                'PokemonID' => 100,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            222 => 
            array (
                'PokemonHabilidadID' => 223,
                'PokemonID' => 100,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            223 => 
            array (
                'PokemonHabilidadID' => 224,
                'PokemonID' => 101,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            224 => 
            array (
                'PokemonHabilidadID' => 225,
                'PokemonID' => 101,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            225 => 
            array (
                'PokemonHabilidadID' => 226,
                'PokemonID' => 101,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            226 => 
            array (
                'PokemonHabilidadID' => 227,
                'PokemonID' => 102,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            227 => 
            array (
                'PokemonHabilidadID' => 228,
                'PokemonID' => 102,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            228 => 
            array (
                'PokemonHabilidadID' => 229,
                'PokemonID' => 102,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            229 => 
            array (
                'PokemonHabilidadID' => 230,
                'PokemonID' => 103,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            230 => 
            array (
                'PokemonHabilidadID' => 231,
                'PokemonID' => 103,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            231 => 
            array (
                'PokemonHabilidadID' => 232,
                'PokemonID' => 104,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            232 => 
            array (
                'PokemonHabilidadID' => 233,
                'PokemonID' => 104,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            233 => 
            array (
                'PokemonHabilidadID' => 234,
                'PokemonID' => 106,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            234 => 
            array (
                'PokemonHabilidadID' => 235,
                'PokemonID' => 107,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            235 => 
            array (
                'PokemonHabilidadID' => 236,
                'PokemonID' => 107,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            236 => 
            array (
                'PokemonHabilidadID' => 237,
                'PokemonID' => 107,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            237 => 
            array (
                'PokemonHabilidadID' => 238,
                'PokemonID' => 108,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            238 => 
            array (
                'PokemonHabilidadID' => 239,
                'PokemonID' => 108,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            239 => 
            array (
                'PokemonHabilidadID' => 240,
                'PokemonID' => 108,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            240 => 
            array (
                'PokemonHabilidadID' => 241,
                'PokemonID' => 109,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            241 => 
            array (
                'PokemonHabilidadID' => 242,
                'PokemonID' => 109,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            242 => 
            array (
                'PokemonHabilidadID' => 243,
                'PokemonID' => 110,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            243 => 
            array (
                'PokemonHabilidadID' => 244,
                'PokemonID' => 111,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            244 => 
            array (
                'PokemonHabilidadID' => 245,
                'PokemonID' => 111,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            245 => 
            array (
                'PokemonHabilidadID' => 246,
                'PokemonID' => 112,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            246 => 
            array (
                'PokemonHabilidadID' => 247,
                'PokemonID' => 112,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            247 => 
            array (
                'PokemonHabilidadID' => 248,
                'PokemonID' => 113,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            248 => 
            array (
                'PokemonHabilidadID' => 249,
                'PokemonID' => 113,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            249 => 
            array (
                'PokemonHabilidadID' => 250,
                'PokemonID' => 114,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            250 => 
            array (
                'PokemonHabilidadID' => 251,
                'PokemonID' => 114,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            251 => 
            array (
                'PokemonHabilidadID' => 252,
                'PokemonID' => 114,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            252 => 
            array (
                'PokemonHabilidadID' => 253,
                'PokemonID' => 115,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            253 => 
            array (
                'PokemonHabilidadID' => 254,
                'PokemonID' => 115,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            254 => 
            array (
                'PokemonHabilidadID' => 255,
                'PokemonID' => 116,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            255 => 
            array (
                'PokemonHabilidadID' => 256,
                'PokemonID' => 117,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            256 => 
            array (
                'PokemonHabilidadID' => 257,
                'PokemonID' => 118,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            257 => 
            array (
                'PokemonHabilidadID' => 258,
                'PokemonID' => 118,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            258 => 
            array (
                'PokemonHabilidadID' => 259,
                'PokemonID' => 118,
                'HabilidadID' => 42,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            259 => 
            array (
                'PokemonHabilidadID' => 260,
                'PokemonID' => 119,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            260 => 
            array (
                'PokemonHabilidadID' => 261,
                'PokemonID' => 120,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            261 => 
            array (
                'PokemonHabilidadID' => 262,
                'PokemonID' => 121,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            262 => 
            array (
                'PokemonHabilidadID' => 263,
                'PokemonID' => 125,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            263 => 
            array (
                'PokemonHabilidadID' => 264,
                'PokemonID' => 126,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            264 => 
            array (
                'PokemonHabilidadID' => 265,
                'PokemonID' => 126,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            265 => 
            array (
                'PokemonHabilidadID' => 266,
                'PokemonID' => 127,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            266 => 
            array (
                'PokemonHabilidadID' => 267,
                'PokemonID' => 128,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            267 => 
            array (
                'PokemonHabilidadID' => 268,
                'PokemonID' => 129,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            268 => 
            array (
                'PokemonHabilidadID' => 269,
                'PokemonID' => 129,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            269 => 
            array (
                'PokemonHabilidadID' => 270,
                'PokemonID' => 130,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            270 => 
            array (
                'PokemonHabilidadID' => 271,
                'PokemonID' => 131,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            271 => 
            array (
                'PokemonHabilidadID' => 272,
                'PokemonID' => 132,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            272 => 
            array (
                'PokemonHabilidadID' => 273,
                'PokemonID' => 133,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            273 => 
            array (
                'PokemonHabilidadID' => 274,
                'PokemonID' => 134,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            274 => 
            array (
                'PokemonHabilidadID' => 275,
                'PokemonID' => 134,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            275 => 
            array (
                'PokemonHabilidadID' => 276,
                'PokemonID' => 135,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            276 => 
            array (
                'PokemonHabilidadID' => 277,
                'PokemonID' => 135,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            277 => 
            array (
                'PokemonHabilidadID' => 278,
                'PokemonID' => 136,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            278 => 
            array (
                'PokemonHabilidadID' => 279,
                'PokemonID' => 137,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            279 => 
            array (
                'PokemonHabilidadID' => 280,
                'PokemonID' => 140,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            280 => 
            array (
                'PokemonHabilidadID' => 281,
                'PokemonID' => 140,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            281 => 
            array (
                'PokemonHabilidadID' => 282,
                'PokemonID' => 140,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            282 => 
            array (
                'PokemonHabilidadID' => 283,
                'PokemonID' => 141,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            283 => 
            array (
                'PokemonHabilidadID' => 284,
                'PokemonID' => 141,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            284 => 
            array (
                'PokemonHabilidadID' => 285,
                'PokemonID' => 141,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            285 => 
            array (
                'PokemonHabilidadID' => 286,
                'PokemonID' => 145,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            286 => 
            array (
                'PokemonHabilidadID' => 287,
                'PokemonID' => 146,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            287 => 
            array (
                'PokemonHabilidadID' => 288,
                'PokemonID' => 146,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            288 => 
            array (
                'PokemonHabilidadID' => 289,
                'PokemonID' => 146,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            289 => 
            array (
                'PokemonHabilidadID' => 290,
                'PokemonID' => 147,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            290 => 
            array (
                'PokemonHabilidadID' => 291,
                'PokemonID' => 147,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            291 => 
            array (
                'PokemonHabilidadID' => 292,
                'PokemonID' => 147,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            292 => 
            array (
                'PokemonHabilidadID' => 293,
                'PokemonID' => 147,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            293 => 
            array (
                'PokemonHabilidadID' => 294,
                'PokemonID' => 148,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            294 => 
            array (
                'PokemonHabilidadID' => 295,
                'PokemonID' => 149,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            295 => 
            array (
                'PokemonHabilidadID' => 296,
                'PokemonID' => 152,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            296 => 
            array (
                'PokemonHabilidadID' => 297,
                'PokemonID' => 153,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            297 => 
            array (
                'PokemonHabilidadID' => 298,
                'PokemonID' => 154,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            298 => 
            array (
                'PokemonHabilidadID' => 299,
                'PokemonID' => 155,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            299 => 
            array (
                'PokemonHabilidadID' => 300,
                'PokemonID' => 155,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            300 => 
            array (
                'PokemonHabilidadID' => 301,
                'PokemonID' => 156,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            301 => 
            array (
                'PokemonHabilidadID' => 302,
                'PokemonID' => 157,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            302 => 
            array (
                'PokemonHabilidadID' => 303,
                'PokemonID' => 160,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            303 => 
            array (
                'PokemonHabilidadID' => 304,
                'PokemonID' => 160,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            304 => 
            array (
                'PokemonHabilidadID' => 305,
                'PokemonID' => 161,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            305 => 
            array (
                'PokemonHabilidadID' => 306,
                'PokemonID' => 161,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            306 => 
            array (
                'PokemonHabilidadID' => 307,
                'PokemonID' => 162,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            307 => 
            array (
                'PokemonHabilidadID' => 308,
                'PokemonID' => 162,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            308 => 
            array (
                'PokemonHabilidadID' => 309,
                'PokemonID' => 163,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            309 => 
            array (
                'PokemonHabilidadID' => 310,
                'PokemonID' => 163,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            310 => 
            array (
                'PokemonHabilidadID' => 311,
                'PokemonID' => 163,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            311 => 
            array (
                'PokemonHabilidadID' => 312,
                'PokemonID' => 164,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            312 => 
            array (
                'PokemonHabilidadID' => 313,
                'PokemonID' => 165,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            313 => 
            array (
                'PokemonHabilidadID' => 314,
                'PokemonID' => 165,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            314 => 
            array (
                'PokemonHabilidadID' => 315,
                'PokemonID' => 166,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            315 => 
            array (
                'PokemonHabilidadID' => 316,
                'PokemonID' => 166,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            316 => 
            array (
                'PokemonHabilidadID' => 317,
                'PokemonID' => 167,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            317 => 
            array (
                'PokemonHabilidadID' => 318,
                'PokemonID' => 167,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            318 => 
            array (
                'PokemonHabilidadID' => 319,
                'PokemonID' => 168,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            319 => 
            array (
                'PokemonHabilidadID' => 320,
                'PokemonID' => 169,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            320 => 
            array (
                'PokemonHabilidadID' => 321,
                'PokemonID' => 170,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            321 => 
            array (
                'PokemonHabilidadID' => 322,
                'PokemonID' => 171,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            322 => 
            array (
                'PokemonHabilidadID' => 323,
                'PokemonID' => 171,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            323 => 
            array (
                'PokemonHabilidadID' => 324,
                'PokemonID' => 172,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            324 => 
            array (
                'PokemonHabilidadID' => 325,
                'PokemonID' => 172,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            325 => 
            array (
                'PokemonHabilidadID' => 326,
                'PokemonID' => 173,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            326 => 
            array (
                'PokemonHabilidadID' => 327,
                'PokemonID' => 173,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            327 => 
            array (
                'PokemonHabilidadID' => 328,
                'PokemonID' => 174,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            328 => 
            array (
                'PokemonHabilidadID' => 329,
                'PokemonID' => 175,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            329 => 
            array (
                'PokemonHabilidadID' => 330,
                'PokemonID' => 176,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            330 => 
            array (
                'PokemonHabilidadID' => 331,
                'PokemonID' => 177,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            331 => 
            array (
                'PokemonHabilidadID' => 332,
                'PokemonID' => 178,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            332 => 
            array (
                'PokemonHabilidadID' => 333,
                'PokemonID' => 179,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            333 => 
            array (
                'PokemonHabilidadID' => 334,
                'PokemonID' => 180,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            334 => 
            array (
                'PokemonHabilidadID' => 335,
                'PokemonID' => 181,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            335 => 
            array (
                'PokemonHabilidadID' => 336,
                'PokemonID' => 184,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            336 => 
            array (
                'PokemonHabilidadID' => 337,
                'PokemonID' => 184,
                'HabilidadID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            337 => 
            array (
                'PokemonHabilidadID' => 338,
                'PokemonID' => 184,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            338 => 
            array (
                'PokemonHabilidadID' => 339,
                'PokemonID' => 185,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            339 => 
            array (
                'PokemonHabilidadID' => 340,
                'PokemonID' => 185,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            340 => 
            array (
                'PokemonHabilidadID' => 341,
                'PokemonID' => 185,
                'HabilidadID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            341 => 
            array (
                'PokemonHabilidadID' => 342,
                'PokemonID' => 185,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            342 => 
            array (
                'PokemonHabilidadID' => 343,
                'PokemonID' => 188,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            343 => 
            array (
                'PokemonHabilidadID' => 344,
                'PokemonID' => 191,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            344 => 
            array (
                'PokemonHabilidadID' => 345,
                'PokemonID' => 192,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            345 => 
            array (
                'PokemonHabilidadID' => 346,
                'PokemonID' => 193,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            346 => 
            array (
                'PokemonHabilidadID' => 347,
                'PokemonID' => 194,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            347 => 
            array (
                'PokemonHabilidadID' => 348,
                'PokemonID' => 195,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            348 => 
            array (
                'PokemonHabilidadID' => 349,
                'PokemonID' => 196,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            349 => 
            array (
                'PokemonHabilidadID' => 350,
                'PokemonID' => 197,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            350 => 
            array (
                'PokemonHabilidadID' => 351,
                'PokemonID' => 198,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            351 => 
            array (
                'PokemonHabilidadID' => 352,
                'PokemonID' => 199,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            352 => 
            array (
                'PokemonHabilidadID' => 353,
                'PokemonID' => 199,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            353 => 
            array (
                'PokemonHabilidadID' => 354,
                'PokemonID' => 199,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            354 => 
            array (
                'PokemonHabilidadID' => 355,
                'PokemonID' => 199,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            355 => 
            array (
                'PokemonHabilidadID' => 356,
                'PokemonID' => 199,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            356 => 
            array (
                'PokemonHabilidadID' => 357,
                'PokemonID' => 199,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            357 => 
            array (
                'PokemonHabilidadID' => 358,
                'PokemonID' => 200,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            358 => 
            array (
                'PokemonHabilidadID' => 359,
                'PokemonID' => 200,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            359 => 
            array (
                'PokemonHabilidadID' => 360,
                'PokemonID' => 200,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            360 => 
            array (
                'PokemonHabilidadID' => 361,
                'PokemonID' => 200,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            361 => 
            array (
                'PokemonHabilidadID' => 362,
                'PokemonID' => 200,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            362 => 
            array (
                'PokemonHabilidadID' => 363,
                'PokemonID' => 200,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            363 => 
            array (
                'PokemonHabilidadID' => 364,
                'PokemonID' => 200,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            364 => 
            array (
                'PokemonHabilidadID' => 365,
                'PokemonID' => 201,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            365 => 
            array (
                'PokemonHabilidadID' => 366,
                'PokemonID' => 202,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            366 => 
            array (
                'PokemonHabilidadID' => 367,
                'PokemonID' => 203,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            367 => 
            array (
                'PokemonHabilidadID' => 368,
                'PokemonID' => 204,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            368 => 
            array (
                'PokemonHabilidadID' => 369,
                'PokemonID' => 205,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            369 => 
            array (
                'PokemonHabilidadID' => 370,
                'PokemonID' => 206,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            370 => 
            array (
                'PokemonHabilidadID' => 371,
                'PokemonID' => 209,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            371 => 
            array (
                'PokemonHabilidadID' => 372,
                'PokemonID' => 210,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            372 => 
            array (
                'PokemonHabilidadID' => 373,
                'PokemonID' => 212,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            373 => 
            array (
                'PokemonHabilidadID' => 374,
                'PokemonID' => 213,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            374 => 
            array (
                'PokemonHabilidadID' => 375,
                'PokemonID' => 214,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            375 => 
            array (
                'PokemonHabilidadID' => 376,
                'PokemonID' => 214,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            376 => 
            array (
                'PokemonHabilidadID' => 377,
                'PokemonID' => 217,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            377 => 
            array (
                'PokemonHabilidadID' => 378,
                'PokemonID' => 217,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            378 => 
            array (
                'PokemonHabilidadID' => 379,
                'PokemonID' => 218,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            379 => 
            array (
                'PokemonHabilidadID' => 380,
                'PokemonID' => 218,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            380 => 
            array (
                'PokemonHabilidadID' => 381,
                'PokemonID' => 219,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            381 => 
            array (
                'PokemonHabilidadID' => 382,
                'PokemonID' => 219,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            382 => 
            array (
                'PokemonHabilidadID' => 383,
                'PokemonID' => 220,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            383 => 
            array (
                'PokemonHabilidadID' => 384,
                'PokemonID' => 220,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            384 => 
            array (
                'PokemonHabilidadID' => 385,
                'PokemonID' => 221,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            385 => 
            array (
                'PokemonHabilidadID' => 386,
                'PokemonID' => 222,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            386 => 
            array (
                'PokemonHabilidadID' => 387,
                'PokemonID' => 222,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            387 => 
            array (
                'PokemonHabilidadID' => 388,
                'PokemonID' => 223,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            388 => 
            array (
                'PokemonHabilidadID' => 389,
                'PokemonID' => 224,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            389 => 
            array (
                'PokemonHabilidadID' => 390,
                'PokemonID' => 225,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            390 => 
            array (
                'PokemonHabilidadID' => 391,
                'PokemonID' => 226,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            391 => 
            array (
                'PokemonHabilidadID' => 392,
                'PokemonID' => 228,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            392 => 
            array (
                'PokemonHabilidadID' => 393,
                'PokemonID' => 229,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            393 => 
            array (
                'PokemonHabilidadID' => 394,
                'PokemonID' => 230,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            394 => 
            array (
                'PokemonHabilidadID' => 395,
                'PokemonID' => 234,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            395 => 
            array (
                'PokemonHabilidadID' => 396,
                'PokemonID' => 235,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            396 => 
            array (
                'PokemonHabilidadID' => 397,
                'PokemonID' => 235,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            397 => 
            array (
                'PokemonHabilidadID' => 398,
                'PokemonID' => 236,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            398 => 
            array (
                'PokemonHabilidadID' => 399,
                'PokemonID' => 236,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            399 => 
            array (
                'PokemonHabilidadID' => 400,
                'PokemonID' => 237,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            400 => 
            array (
                'PokemonHabilidadID' => 401,
                'PokemonID' => 237,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            401 => 
            array (
                'PokemonHabilidadID' => 402,
                'PokemonID' => 238,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            402 => 
            array (
                'PokemonHabilidadID' => 403,
                'PokemonID' => 238,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            403 => 
            array (
                'PokemonHabilidadID' => 404,
                'PokemonID' => 239,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            404 => 
            array (
                'PokemonHabilidadID' => 405,
                'PokemonID' => 239,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            405 => 
            array (
                'PokemonHabilidadID' => 406,
                'PokemonID' => 240,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            406 => 
            array (
                'PokemonHabilidadID' => 407,
                'PokemonID' => 240,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            407 => 
            array (
                'PokemonHabilidadID' => 408,
                'PokemonID' => 241,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            408 => 
            array (
                'PokemonHabilidadID' => 409,
                'PokemonID' => 241,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            409 => 
            array (
                'PokemonHabilidadID' => 410,
                'PokemonID' => 242,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            410 => 
            array (
                'PokemonHabilidadID' => 411,
                'PokemonID' => 242,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            411 => 
            array (
                'PokemonHabilidadID' => 412,
                'PokemonID' => 243,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            412 => 
            array (
                'PokemonHabilidadID' => 413,
                'PokemonID' => 243,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            413 => 
            array (
                'PokemonHabilidadID' => 414,
                'PokemonID' => 243,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            414 => 
            array (
                'PokemonHabilidadID' => 415,
                'PokemonID' => 244,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            415 => 
            array (
                'PokemonHabilidadID' => 416,
                'PokemonID' => 244,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            416 => 
            array (
                'PokemonHabilidadID' => 417,
                'PokemonID' => 245,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            417 => 
            array (
                'PokemonHabilidadID' => 418,
                'PokemonID' => 245,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            418 => 
            array (
                'PokemonHabilidadID' => 419,
                'PokemonID' => 246,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            419 => 
            array (
                'PokemonHabilidadID' => 420,
                'PokemonID' => 246,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            420 => 
            array (
                'PokemonHabilidadID' => 421,
                'PokemonID' => 246,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            421 => 
            array (
                'PokemonHabilidadID' => 422,
                'PokemonID' => 247,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            422 => 
            array (
                'PokemonHabilidadID' => 423,
                'PokemonID' => 247,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            423 => 
            array (
                'PokemonHabilidadID' => 424,
                'PokemonID' => 247,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            424 => 
            array (
                'PokemonHabilidadID' => 425,
                'PokemonID' => 248,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            425 => 
            array (
                'PokemonHabilidadID' => 426,
                'PokemonID' => 248,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            426 => 
            array (
                'PokemonHabilidadID' => 427,
                'PokemonID' => 249,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            427 => 
            array (
                'PokemonHabilidadID' => 428,
                'PokemonID' => 249,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            428 => 
            array (
                'PokemonHabilidadID' => 429,
                'PokemonID' => 251,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            429 => 
            array (
                'PokemonHabilidadID' => 430,
                'PokemonID' => 251,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            430 => 
            array (
                'PokemonHabilidadID' => 431,
                'PokemonID' => 256,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            431 => 
            array (
                'PokemonHabilidadID' => 432,
                'PokemonID' => 257,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            432 => 
            array (
                'PokemonHabilidadID' => 433,
                'PokemonID' => 258,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            433 => 
            array (
                'PokemonHabilidadID' => 434,
                'PokemonID' => 259,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            434 => 
            array (
                'PokemonHabilidadID' => 435,
                'PokemonID' => 260,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            435 => 
            array (
                'PokemonHabilidadID' => 436,
                'PokemonID' => 261,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            436 => 
            array (
                'PokemonHabilidadID' => 437,
                'PokemonID' => 262,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            437 => 
            array (
                'PokemonHabilidadID' => 438,
                'PokemonID' => 263,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            438 => 
            array (
                'PokemonHabilidadID' => 439,
                'PokemonID' => 263,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            439 => 
            array (
                'PokemonHabilidadID' => 440,
                'PokemonID' => 263,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            440 => 
            array (
                'PokemonHabilidadID' => 441,
                'PokemonID' => 264,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            441 => 
            array (
                'PokemonHabilidadID' => 442,
                'PokemonID' => 264,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            442 => 
            array (
                'PokemonHabilidadID' => 443,
                'PokemonID' => 264,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            443 => 
            array (
                'PokemonHabilidadID' => 444,
                'PokemonID' => 265,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            444 => 
            array (
                'PokemonHabilidadID' => 445,
                'PokemonID' => 265,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            445 => 
            array (
                'PokemonHabilidadID' => 446,
                'PokemonID' => 265,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            446 => 
            array (
                'PokemonHabilidadID' => 447,
                'PokemonID' => 266,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            447 => 
            array (
                'PokemonHabilidadID' => 448,
                'PokemonID' => 267,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            448 => 
            array (
                'PokemonHabilidadID' => 449,
                'PokemonID' => 268,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            449 => 
            array (
                'PokemonHabilidadID' => 450,
                'PokemonID' => 269,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            450 => 
            array (
                'PokemonHabilidadID' => 451,
                'PokemonID' => 270,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            451 => 
            array (
                'PokemonHabilidadID' => 452,
                'PokemonID' => 271,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            452 => 
            array (
                'PokemonHabilidadID' => 453,
                'PokemonID' => 272,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            453 => 
            array (
                'PokemonHabilidadID' => 454,
                'PokemonID' => 272,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            454 => 
            array (
                'PokemonHabilidadID' => 455,
                'PokemonID' => 273,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            455 => 
            array (
                'PokemonHabilidadID' => 456,
                'PokemonID' => 273,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            456 => 
            array (
                'PokemonHabilidadID' => 457,
                'PokemonID' => 273,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            457 => 
            array (
                'PokemonHabilidadID' => 458,
                'PokemonID' => 273,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            458 => 
            array (
                'PokemonHabilidadID' => 459,
                'PokemonID' => 273,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            459 => 
            array (
                'PokemonHabilidadID' => 460,
                'PokemonID' => 274,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            460 => 
            array (
                'PokemonHabilidadID' => 461,
                'PokemonID' => 274,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            461 => 
            array (
                'PokemonHabilidadID' => 462,
                'PokemonID' => 274,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            462 => 
            array (
                'PokemonHabilidadID' => 463,
                'PokemonID' => 274,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            463 => 
            array (
                'PokemonHabilidadID' => 464,
                'PokemonID' => 274,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            464 => 
            array (
                'PokemonHabilidadID' => 465,
                'PokemonID' => 275,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            465 => 
            array (
                'PokemonHabilidadID' => 466,
                'PokemonID' => 275,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            466 => 
            array (
                'PokemonHabilidadID' => 467,
                'PokemonID' => 275,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            467 => 
            array (
                'PokemonHabilidadID' => 468,
                'PokemonID' => 275,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            468 => 
            array (
                'PokemonHabilidadID' => 469,
                'PokemonID' => 275,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            469 => 
            array (
                'PokemonHabilidadID' => 470,
                'PokemonID' => 276,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            470 => 
            array (
                'PokemonHabilidadID' => 471,
                'PokemonID' => 277,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            471 => 
            array (
                'PokemonHabilidadID' => 472,
                'PokemonID' => 278,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            472 => 
            array (
                'PokemonHabilidadID' => 473,
                'PokemonID' => 279,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            473 => 
            array (
                'PokemonHabilidadID' => 474,
                'PokemonID' => 280,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            474 => 
            array (
                'PokemonHabilidadID' => 475,
                'PokemonID' => 281,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            475 => 
            array (
                'PokemonHabilidadID' => 476,
                'PokemonID' => 282,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            476 => 
            array (
                'PokemonHabilidadID' => 477,
                'PokemonID' => 282,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            477 => 
            array (
                'PokemonHabilidadID' => 478,
                'PokemonID' => 283,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            478 => 
            array (
                'PokemonHabilidadID' => 479,
                'PokemonID' => 284,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            479 => 
            array (
                'PokemonHabilidadID' => 480,
                'PokemonID' => 285,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            480 => 
            array (
                'PokemonHabilidadID' => 481,
                'PokemonID' => 286,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            481 => 
            array (
                'PokemonHabilidadID' => 482,
                'PokemonID' => 287,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            482 => 
            array (
                'PokemonHabilidadID' => 483,
                'PokemonID' => 288,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            483 => 
            array (
                'PokemonHabilidadID' => 484,
                'PokemonID' => 289,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            484 => 
            array (
                'PokemonHabilidadID' => 485,
                'PokemonID' => 290,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            485 => 
            array (
                'PokemonHabilidadID' => 486,
                'PokemonID' => 290,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            486 => 
            array (
                'PokemonHabilidadID' => 487,
                'PokemonID' => 291,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            487 => 
            array (
                'PokemonHabilidadID' => 488,
                'PokemonID' => 291,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            488 => 
            array (
                'PokemonHabilidadID' => 489,
                'PokemonID' => 292,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            489 => 
            array (
                'PokemonHabilidadID' => 490,
                'PokemonID' => 292,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            490 => 
            array (
                'PokemonHabilidadID' => 491,
                'PokemonID' => 293,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            491 => 
            array (
                'PokemonHabilidadID' => 492,
                'PokemonID' => 294,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            492 => 
            array (
                'PokemonHabilidadID' => 493,
                'PokemonID' => 295,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            493 => 
            array (
                'PokemonHabilidadID' => 494,
                'PokemonID' => 295,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            494 => 
            array (
                'PokemonHabilidadID' => 495,
                'PokemonID' => 296,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            495 => 
            array (
                'PokemonHabilidadID' => 496,
                'PokemonID' => 297,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            496 => 
            array (
                'PokemonHabilidadID' => 497,
                'PokemonID' => 298,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            497 => 
            array (
                'PokemonHabilidadID' => 498,
                'PokemonID' => 298,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            498 => 
            array (
                'PokemonHabilidadID' => 499,
                'PokemonID' => 299,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            499 => 
            array (
                'PokemonHabilidadID' => 500,
                'PokemonID' => 299,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
        ));
        \DB::table('PokemonHabilidad')->insert(array (
            0 => 
            array (
                'PokemonHabilidadID' => 501,
                'PokemonID' => 300,
                'HabilidadID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            1 => 
            array (
                'PokemonHabilidadID' => 502,
                'PokemonID' => 300,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            2 => 
            array (
                'PokemonHabilidadID' => 503,
                'PokemonID' => 301,
                'HabilidadID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            3 => 
            array (
                'PokemonHabilidadID' => 504,
                'PokemonID' => 301,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            4 => 
            array (
                'PokemonHabilidadID' => 505,
                'PokemonID' => 302,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            5 => 
            array (
                'PokemonHabilidadID' => 506,
                'PokemonID' => 302,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            6 => 
            array (
                'PokemonHabilidadID' => 507,
                'PokemonID' => 302,
                'HabilidadID' => 43,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            7 => 
            array (
                'PokemonHabilidadID' => 508,
                'PokemonID' => 302,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            8 => 
            array (
                'PokemonHabilidadID' => 509,
                'PokemonID' => 303,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            9 => 
            array (
                'PokemonHabilidadID' => 510,
                'PokemonID' => 303,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            10 => 
            array (
                'PokemonHabilidadID' => 511,
                'PokemonID' => 303,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            11 => 
            array (
                'PokemonHabilidadID' => 512,
                'PokemonID' => 304,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            12 => 
            array (
                'PokemonHabilidadID' => 513,
                'PokemonID' => 306,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            13 => 
            array (
                'PokemonHabilidadID' => 514,
                'PokemonID' => 307,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            14 => 
            array (
                'PokemonHabilidadID' => 515,
                'PokemonID' => 308,
                'HabilidadID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            15 => 
            array (
                'PokemonHabilidadID' => 516,
                'PokemonID' => 308,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            16 => 
            array (
                'PokemonHabilidadID' => 517,
                'PokemonID' => 308,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            17 => 
            array (
                'PokemonHabilidadID' => 518,
                'PokemonID' => 309,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            18 => 
            array (
                'PokemonHabilidadID' => 519,
                'PokemonID' => 309,
                'HabilidadID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            19 => 
            array (
                'PokemonHabilidadID' => 520,
                'PokemonID' => 309,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            20 => 
            array (
                'PokemonHabilidadID' => 521,
                'PokemonID' => 309,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            21 => 
            array (
                'PokemonHabilidadID' => 522,
                'PokemonID' => 310,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            22 => 
            array (
                'PokemonHabilidadID' => 523,
                'PokemonID' => 310,
                'HabilidadID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            23 => 
            array (
                'PokemonHabilidadID' => 524,
                'PokemonID' => 310,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            24 => 
            array (
                'PokemonHabilidadID' => 525,
                'PokemonID' => 310,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            25 => 
            array (
                'PokemonHabilidadID' => 526,
                'PokemonID' => 312,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            26 => 
            array (
                'PokemonHabilidadID' => 527,
                'PokemonID' => 313,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            27 => 
            array (
                'PokemonHabilidadID' => 528,
                'PokemonID' => 314,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            28 => 
            array (
                'PokemonHabilidadID' => 529,
                'PokemonID' => 314,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            29 => 
            array (
                'PokemonHabilidadID' => 530,
                'PokemonID' => 315,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            30 => 
            array (
                'PokemonHabilidadID' => 531,
                'PokemonID' => 316,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            31 => 
            array (
                'PokemonHabilidadID' => 532,
                'PokemonID' => 317,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            32 => 
            array (
                'PokemonHabilidadID' => 533,
                'PokemonID' => 318,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            33 => 
            array (
                'PokemonHabilidadID' => 534,
                'PokemonID' => 319,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            34 => 
            array (
                'PokemonHabilidadID' => 535,
                'PokemonID' => 319,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            35 => 
            array (
                'PokemonHabilidadID' => 536,
                'PokemonID' => 320,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            36 => 
            array (
                'PokemonHabilidadID' => 537,
                'PokemonID' => 320,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            37 => 
            array (
                'PokemonHabilidadID' => 538,
                'PokemonID' => 321,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            38 => 
            array (
                'PokemonHabilidadID' => 539,
                'PokemonID' => 321,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            39 => 
            array (
                'PokemonHabilidadID' => 540,
                'PokemonID' => 322,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            40 => 
            array (
                'PokemonHabilidadID' => 541,
                'PokemonID' => 323,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            41 => 
            array (
                'PokemonHabilidadID' => 542,
                'PokemonID' => 325,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            42 => 
            array (
                'PokemonHabilidadID' => 543,
                'PokemonID' => 326,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            43 => 
            array (
                'PokemonHabilidadID' => 544,
                'PokemonID' => 327,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            44 => 
            array (
                'PokemonHabilidadID' => 545,
                'PokemonID' => 329,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            45 => 
            array (
                'PokemonHabilidadID' => 546,
                'PokemonID' => 330,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            46 => 
            array (
                'PokemonHabilidadID' => 547,
                'PokemonID' => 331,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            47 => 
            array (
                'PokemonHabilidadID' => 548,
                'PokemonID' => 331,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            48 => 
            array (
                'PokemonHabilidadID' => 549,
                'PokemonID' => 332,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            49 => 
            array (
                'PokemonHabilidadID' => 550,
                'PokemonID' => 332,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            50 => 
            array (
                'PokemonHabilidadID' => 551,
                'PokemonID' => 333,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            51 => 
            array (
                'PokemonHabilidadID' => 552,
                'PokemonID' => 334,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            52 => 
            array (
                'PokemonHabilidadID' => 553,
                'PokemonID' => 334,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            53 => 
            array (
                'PokemonHabilidadID' => 554,
                'PokemonID' => 338,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            54 => 
            array (
                'PokemonHabilidadID' => 555,
                'PokemonID' => 339,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            55 => 
            array (
                'PokemonHabilidadID' => 556,
                'PokemonID' => 340,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            56 => 
            array (
                'PokemonHabilidadID' => 557,
                'PokemonID' => 341,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            57 => 
            array (
                'PokemonHabilidadID' => 558,
                'PokemonID' => 342,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            58 => 
            array (
                'PokemonHabilidadID' => 559,
                'PokemonID' => 342,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            59 => 
            array (
                'PokemonHabilidadID' => 560,
                'PokemonID' => 343,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            60 => 
            array (
                'PokemonHabilidadID' => 561,
                'PokemonID' => 343,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            61 => 
            array (
                'PokemonHabilidadID' => 562,
                'PokemonID' => 347,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            62 => 
            array (
                'PokemonHabilidadID' => 563,
                'PokemonID' => 348,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            63 => 
            array (
                'PokemonHabilidadID' => 564,
                'PokemonID' => 349,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            64 => 
            array (
                'PokemonHabilidadID' => 565,
                'PokemonID' => 349,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            65 => 
            array (
                'PokemonHabilidadID' => 566,
                'PokemonID' => 350,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            66 => 
            array (
                'PokemonHabilidadID' => 567,
                'PokemonID' => 350,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            67 => 
            array (
                'PokemonHabilidadID' => 568,
                'PokemonID' => 352,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            68 => 
            array (
                'PokemonHabilidadID' => 569,
                'PokemonID' => 356,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            69 => 
            array (
                'PokemonHabilidadID' => 570,
                'PokemonID' => 357,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            70 => 
            array (
                'PokemonHabilidadID' => 571,
                'PokemonID' => 360,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            71 => 
            array (
                'PokemonHabilidadID' => 572,
                'PokemonID' => 361,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            72 => 
            array (
                'PokemonHabilidadID' => 573,
                'PokemonID' => 361,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            73 => 
            array (
                'PokemonHabilidadID' => 574,
                'PokemonID' => 362,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            74 => 
            array (
                'PokemonHabilidadID' => 575,
                'PokemonID' => 362,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            75 => 
            array (
                'PokemonHabilidadID' => 576,
                'PokemonID' => 362,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            76 => 
            array (
                'PokemonHabilidadID' => 577,
                'PokemonID' => 363,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            77 => 
            array (
                'PokemonHabilidadID' => 578,
                'PokemonID' => 363,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            78 => 
            array (
                'PokemonHabilidadID' => 579,
                'PokemonID' => 364,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            79 => 
            array (
                'PokemonHabilidadID' => 580,
                'PokemonID' => 364,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            80 => 
            array (
                'PokemonHabilidadID' => 581,
                'PokemonID' => 364,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            81 => 
            array (
                'PokemonHabilidadID' => 582,
                'PokemonID' => 365,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            82 => 
            array (
                'PokemonHabilidadID' => 583,
                'PokemonID' => 365,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            83 => 
            array (
                'PokemonHabilidadID' => 584,
                'PokemonID' => 365,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            84 => 
            array (
                'PokemonHabilidadID' => 585,
                'PokemonID' => 366,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            85 => 
            array (
                'PokemonHabilidadID' => 586,
                'PokemonID' => 366,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            86 => 
            array (
                'PokemonHabilidadID' => 587,
                'PokemonID' => 367,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            87 => 
            array (
                'PokemonHabilidadID' => 588,
                'PokemonID' => 367,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            88 => 
            array (
                'PokemonHabilidadID' => 589,
                'PokemonID' => 368,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            89 => 
            array (
                'PokemonHabilidadID' => 590,
                'PokemonID' => 368,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            90 => 
            array (
                'PokemonHabilidadID' => 591,
                'PokemonID' => 369,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            91 => 
            array (
                'PokemonHabilidadID' => 592,
                'PokemonID' => 369,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            92 => 
            array (
                'PokemonHabilidadID' => 593,
                'PokemonID' => 370,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            93 => 
            array (
                'PokemonHabilidadID' => 594,
                'PokemonID' => 370,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            94 => 
            array (
                'PokemonHabilidadID' => 595,
                'PokemonID' => 371,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            95 => 
            array (
                'PokemonHabilidadID' => 596,
                'PokemonID' => 371,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            96 => 
            array (
                'PokemonHabilidadID' => 597,
                'PokemonID' => 372,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            97 => 
            array (
                'PokemonHabilidadID' => 598,
                'PokemonID' => 372,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            98 => 
            array (
                'PokemonHabilidadID' => 599,
                'PokemonID' => 373,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            99 => 
            array (
                'PokemonHabilidadID' => 600,
                'PokemonID' => 374,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            100 => 
            array (
                'PokemonHabilidadID' => 601,
                'PokemonID' => 375,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            101 => 
            array (
                'PokemonHabilidadID' => 602,
                'PokemonID' => 375,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            102 => 
            array (
                'PokemonHabilidadID' => 603,
                'PokemonID' => 375,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            103 => 
            array (
                'PokemonHabilidadID' => 604,
                'PokemonID' => 376,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            104 => 
            array (
                'PokemonHabilidadID' => 605,
                'PokemonID' => 376,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            105 => 
            array (
                'PokemonHabilidadID' => 606,
                'PokemonID' => 376,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            106 => 
            array (
                'PokemonHabilidadID' => 607,
                'PokemonID' => 376,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            107 => 
            array (
                'PokemonHabilidadID' => 608,
                'PokemonID' => 377,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            108 => 
            array (
                'PokemonHabilidadID' => 609,
                'PokemonID' => 377,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            109 => 
            array (
                'PokemonHabilidadID' => 610,
                'PokemonID' => 377,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            110 => 
            array (
                'PokemonHabilidadID' => 611,
                'PokemonID' => 377,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            111 => 
            array (
                'PokemonHabilidadID' => 612,
                'PokemonID' => 378,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            112 => 
            array (
                'PokemonHabilidadID' => 613,
                'PokemonID' => 378,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            113 => 
            array (
                'PokemonHabilidadID' => 614,
                'PokemonID' => 379,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            114 => 
            array (
                'PokemonHabilidadID' => 615,
                'PokemonID' => 379,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            115 => 
            array (
                'PokemonHabilidadID' => 616,
                'PokemonID' => 380,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            116 => 
            array (
                'PokemonHabilidadID' => 617,
                'PokemonID' => 380,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            117 => 
            array (
                'PokemonHabilidadID' => 618,
                'PokemonID' => 380,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            118 => 
            array (
                'PokemonHabilidadID' => 619,
                'PokemonID' => 381,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            119 => 
            array (
                'PokemonHabilidadID' => 620,
                'PokemonID' => 381,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            120 => 
            array (
                'PokemonHabilidadID' => 621,
                'PokemonID' => 381,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            121 => 
            array (
                'PokemonHabilidadID' => 622,
                'PokemonID' => 382,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            122 => 
            array (
                'PokemonHabilidadID' => 623,
                'PokemonID' => 382,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            123 => 
            array (
                'PokemonHabilidadID' => 624,
                'PokemonID' => 383,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            124 => 
            array (
                'PokemonHabilidadID' => 625,
                'PokemonID' => 383,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            125 => 
            array (
                'PokemonHabilidadID' => 626,
                'PokemonID' => 384,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            126 => 
            array (
                'PokemonHabilidadID' => 627,
                'PokemonID' => 384,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            127 => 
            array (
                'PokemonHabilidadID' => 628,
                'PokemonID' => 385,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            128 => 
            array (
                'PokemonHabilidadID' => 629,
                'PokemonID' => 385,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            129 => 
            array (
                'PokemonHabilidadID' => 630,
                'PokemonID' => 385,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            130 => 
            array (
                'PokemonHabilidadID' => 631,
                'PokemonID' => 385,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            131 => 
            array (
                'PokemonHabilidadID' => 632,
                'PokemonID' => 386,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            132 => 
            array (
                'PokemonHabilidadID' => 633,
                'PokemonID' => 386,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            133 => 
            array (
                'PokemonHabilidadID' => 634,
                'PokemonID' => 386,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            134 => 
            array (
                'PokemonHabilidadID' => 635,
                'PokemonID' => 386,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            135 => 
            array (
                'PokemonHabilidadID' => 636,
                'PokemonID' => 386,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            136 => 
            array (
                'PokemonHabilidadID' => 637,
                'PokemonID' => 387,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            137 => 
            array (
                'PokemonHabilidadID' => 638,
                'PokemonID' => 388,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            138 => 
            array (
                'PokemonHabilidadID' => 639,
                'PokemonID' => 389,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            139 => 
            array (
                'PokemonHabilidadID' => 640,
                'PokemonID' => 389,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            140 => 
            array (
                'PokemonHabilidadID' => 641,
                'PokemonID' => 389,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            141 => 
            array (
                'PokemonHabilidadID' => 642,
                'PokemonID' => 390,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            142 => 
            array (
                'PokemonHabilidadID' => 643,
                'PokemonID' => 390,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            143 => 
            array (
                'PokemonHabilidadID' => 644,
                'PokemonID' => 390,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            144 => 
            array (
                'PokemonHabilidadID' => 645,
                'PokemonID' => 391,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            145 => 
            array (
                'PokemonHabilidadID' => 646,
                'PokemonID' => 391,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            146 => 
            array (
                'PokemonHabilidadID' => 647,
                'PokemonID' => 391,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            147 => 
            array (
                'PokemonHabilidadID' => 648,
                'PokemonID' => 392,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            148 => 
            array (
                'PokemonHabilidadID' => 649,
                'PokemonID' => 393,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            149 => 
            array (
                'PokemonHabilidadID' => 650,
                'PokemonID' => 394,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            150 => 
            array (
                'PokemonHabilidadID' => 651,
                'PokemonID' => 394,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            151 => 
            array (
                'PokemonHabilidadID' => 652,
                'PokemonID' => 395,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            152 => 
            array (
                'PokemonHabilidadID' => 653,
                'PokemonID' => 395,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            153 => 
            array (
                'PokemonHabilidadID' => 654,
                'PokemonID' => 396,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            154 => 
            array (
                'PokemonHabilidadID' => 655,
                'PokemonID' => 397,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            155 => 
            array (
                'PokemonHabilidadID' => 656,
                'PokemonID' => 397,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            156 => 
            array (
                'PokemonHabilidadID' => 657,
                'PokemonID' => 398,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            157 => 
            array (
                'PokemonHabilidadID' => 658,
                'PokemonID' => 398,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            158 => 
            array (
                'PokemonHabilidadID' => 659,
                'PokemonID' => 398,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            159 => 
            array (
                'PokemonHabilidadID' => 660,
                'PokemonID' => 399,
                'HabilidadID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            160 => 
            array (
                'PokemonHabilidadID' => 661,
                'PokemonID' => 399,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            161 => 
            array (
                'PokemonHabilidadID' => 662,
                'PokemonID' => 400,
                'HabilidadID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            162 => 
            array (
                'PokemonHabilidadID' => 663,
                'PokemonID' => 400,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            163 => 
            array (
                'PokemonHabilidadID' => 664,
                'PokemonID' => 401,
                'HabilidadID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            164 => 
            array (
                'PokemonHabilidadID' => 665,
                'PokemonID' => 401,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            165 => 
            array (
                'PokemonHabilidadID' => 666,
                'PokemonID' => 402,
                'HabilidadID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            166 => 
            array (
                'PokemonHabilidadID' => 667,
                'PokemonID' => 402,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            167 => 
            array (
                'PokemonHabilidadID' => 668,
                'PokemonID' => 403,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            168 => 
            array (
                'PokemonHabilidadID' => 669,
                'PokemonID' => 403,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            169 => 
            array (
                'PokemonHabilidadID' => 670,
                'PokemonID' => 403,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            170 => 
            array (
                'PokemonHabilidadID' => 671,
                'PokemonID' => 404,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            171 => 
            array (
                'PokemonHabilidadID' => 672,
                'PokemonID' => 404,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            172 => 
            array (
                'PokemonHabilidadID' => 673,
                'PokemonID' => 404,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            173 => 
            array (
                'PokemonHabilidadID' => 674,
                'PokemonID' => 405,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            174 => 
            array (
                'PokemonHabilidadID' => 675,
                'PokemonID' => 405,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            175 => 
            array (
                'PokemonHabilidadID' => 676,
                'PokemonID' => 405,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            176 => 
            array (
                'PokemonHabilidadID' => 677,
                'PokemonID' => 406,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            177 => 
            array (
                'PokemonHabilidadID' => 678,
                'PokemonID' => 406,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            178 => 
            array (
                'PokemonHabilidadID' => 679,
                'PokemonID' => 406,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            179 => 
            array (
                'PokemonHabilidadID' => 680,
                'PokemonID' => 407,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            180 => 
            array (
                'PokemonHabilidadID' => 681,
                'PokemonID' => 407,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            181 => 
            array (
                'PokemonHabilidadID' => 682,
                'PokemonID' => 407,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            182 => 
            array (
                'PokemonHabilidadID' => 683,
                'PokemonID' => 408,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            183 => 
            array (
                'PokemonHabilidadID' => 684,
                'PokemonID' => 408,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            184 => 
            array (
                'PokemonHabilidadID' => 685,
                'PokemonID' => 408,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            185 => 
            array (
                'PokemonHabilidadID' => 686,
                'PokemonID' => 409,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            186 => 
            array (
                'PokemonHabilidadID' => 687,
                'PokemonID' => 409,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            187 => 
            array (
                'PokemonHabilidadID' => 688,
                'PokemonID' => 409,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            188 => 
            array (
                'PokemonHabilidadID' => 689,
                'PokemonID' => 410,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            189 => 
            array (
                'PokemonHabilidadID' => 690,
                'PokemonID' => 410,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            190 => 
            array (
                'PokemonHabilidadID' => 691,
                'PokemonID' => 410,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            191 => 
            array (
                'PokemonHabilidadID' => 692,
                'PokemonID' => 411,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            192 => 
            array (
                'PokemonHabilidadID' => 693,
                'PokemonID' => 411,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            193 => 
            array (
                'PokemonHabilidadID' => 694,
                'PokemonID' => 411,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            194 => 
            array (
                'PokemonHabilidadID' => 695,
                'PokemonID' => 412,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            195 => 
            array (
                'PokemonHabilidadID' => 696,
                'PokemonID' => 412,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            196 => 
            array (
                'PokemonHabilidadID' => 697,
                'PokemonID' => 412,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            197 => 
            array (
                'PokemonHabilidadID' => 698,
                'PokemonID' => 413,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            198 => 
            array (
                'PokemonHabilidadID' => 699,
                'PokemonID' => 413,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            199 => 
            array (
                'PokemonHabilidadID' => 700,
                'PokemonID' => 413,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            200 => 
            array (
                'PokemonHabilidadID' => 701,
                'PokemonID' => 414,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            201 => 
            array (
                'PokemonHabilidadID' => 702,
                'PokemonID' => 414,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            202 => 
            array (
                'PokemonHabilidadID' => 703,
                'PokemonID' => 415,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            203 => 
            array (
                'PokemonHabilidadID' => 704,
                'PokemonID' => 415,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            204 => 
            array (
                'PokemonHabilidadID' => 705,
                'PokemonID' => 416,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            205 => 
            array (
                'PokemonHabilidadID' => 706,
                'PokemonID' => 416,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            206 => 
            array (
                'PokemonHabilidadID' => 707,
                'PokemonID' => 416,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            207 => 
            array (
                'PokemonHabilidadID' => 708,
                'PokemonID' => 416,
                'HabilidadID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            208 => 
            array (
                'PokemonHabilidadID' => 709,
                'PokemonID' => 417,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            209 => 
            array (
                'PokemonHabilidadID' => 710,
                'PokemonID' => 417,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            210 => 
            array (
                'PokemonHabilidadID' => 711,
                'PokemonID' => 417,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            211 => 
            array (
                'PokemonHabilidadID' => 712,
                'PokemonID' => 417,
                'HabilidadID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            212 => 
            array (
                'PokemonHabilidadID' => 713,
                'PokemonID' => 418,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            213 => 
            array (
                'PokemonHabilidadID' => 714,
                'PokemonID' => 418,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            214 => 
            array (
                'PokemonHabilidadID' => 715,
                'PokemonID' => 418,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            215 => 
            array (
                'PokemonHabilidadID' => 716,
                'PokemonID' => 419,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            216 => 
            array (
                'PokemonHabilidadID' => 717,
                'PokemonID' => 419,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            217 => 
            array (
                'PokemonHabilidadID' => 718,
                'PokemonID' => 419,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            218 => 
            array (
                'PokemonHabilidadID' => 719,
                'PokemonID' => 420,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            219 => 
            array (
                'PokemonHabilidadID' => 720,
                'PokemonID' => 420,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            220 => 
            array (
                'PokemonHabilidadID' => 721,
                'PokemonID' => 421,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            221 => 
            array (
                'PokemonHabilidadID' => 722,
                'PokemonID' => 422,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            222 => 
            array (
                'PokemonHabilidadID' => 723,
                'PokemonID' => 422,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            223 => 
            array (
                'PokemonHabilidadID' => 724,
                'PokemonID' => 422,
                'HabilidadID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            224 => 
            array (
                'PokemonHabilidadID' => 725,
                'PokemonID' => 422,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            225 => 
            array (
                'PokemonHabilidadID' => 726,
                'PokemonID' => 423,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            226 => 
            array (
                'PokemonHabilidadID' => 727,
                'PokemonID' => 423,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            227 => 
            array (
                'PokemonHabilidadID' => 728,
                'PokemonID' => 423,
                'HabilidadID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            228 => 
            array (
                'PokemonHabilidadID' => 729,
                'PokemonID' => 423,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            229 => 
            array (
                'PokemonHabilidadID' => 730,
                'PokemonID' => 424,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            230 => 
            array (
                'PokemonHabilidadID' => 731,
                'PokemonID' => 424,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            231 => 
            array (
                'PokemonHabilidadID' => 732,
                'PokemonID' => 424,
                'HabilidadID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            232 => 
            array (
                'PokemonHabilidadID' => 733,
                'PokemonID' => 424,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            233 => 
            array (
                'PokemonHabilidadID' => 734,
                'PokemonID' => 425,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            234 => 
            array (
                'PokemonHabilidadID' => 735,
                'PokemonID' => 425,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            235 => 
            array (
                'PokemonHabilidadID' => 736,
                'PokemonID' => 425,
                'HabilidadID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            236 => 
            array (
                'PokemonHabilidadID' => 737,
                'PokemonID' => 425,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            237 => 
            array (
                'PokemonHabilidadID' => 738,
                'PokemonID' => 426,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            238 => 
            array (
                'PokemonHabilidadID' => 739,
                'PokemonID' => 426,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            239 => 
            array (
                'PokemonHabilidadID' => 740,
                'PokemonID' => 426,
                'HabilidadID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            240 => 
            array (
                'PokemonHabilidadID' => 741,
                'PokemonID' => 426,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            241 => 
            array (
                'PokemonHabilidadID' => 742,
                'PokemonID' => 427,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            242 => 
            array (
                'PokemonHabilidadID' => 743,
                'PokemonID' => 427,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            243 => 
            array (
                'PokemonHabilidadID' => 744,
                'PokemonID' => 427,
                'HabilidadID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            244 => 
            array (
                'PokemonHabilidadID' => 745,
                'PokemonID' => 427,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            245 => 
            array (
                'PokemonHabilidadID' => 746,
                'PokemonID' => 428,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            246 => 
            array (
                'PokemonHabilidadID' => 747,
                'PokemonID' => 428,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            247 => 
            array (
                'PokemonHabilidadID' => 748,
                'PokemonID' => 428,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            248 => 
            array (
                'PokemonHabilidadID' => 749,
                'PokemonID' => 429,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            249 => 
            array (
                'PokemonHabilidadID' => 750,
                'PokemonID' => 429,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            250 => 
            array (
                'PokemonHabilidadID' => 751,
                'PokemonID' => 429,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            251 => 
            array (
                'PokemonHabilidadID' => 752,
                'PokemonID' => 430,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            252 => 
            array (
                'PokemonHabilidadID' => 753,
                'PokemonID' => 430,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            253 => 
            array (
                'PokemonHabilidadID' => 754,
                'PokemonID' => 430,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            254 => 
            array (
                'PokemonHabilidadID' => 755,
                'PokemonID' => 431,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            255 => 
            array (
                'PokemonHabilidadID' => 756,
                'PokemonID' => 431,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            256 => 
            array (
                'PokemonHabilidadID' => 757,
                'PokemonID' => 431,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            257 => 
            array (
                'PokemonHabilidadID' => 758,
                'PokemonID' => 431,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            258 => 
            array (
                'PokemonHabilidadID' => 759,
                'PokemonID' => 432,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            259 => 
            array (
                'PokemonHabilidadID' => 760,
                'PokemonID' => 432,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            260 => 
            array (
                'PokemonHabilidadID' => 761,
                'PokemonID' => 432,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            261 => 
            array (
                'PokemonHabilidadID' => 762,
                'PokemonID' => 432,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            262 => 
            array (
                'PokemonHabilidadID' => 763,
                'PokemonID' => 433,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            263 => 
            array (
                'PokemonHabilidadID' => 764,
                'PokemonID' => 434,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            264 => 
            array (
                'PokemonHabilidadID' => 765,
                'PokemonID' => 434,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            265 => 
            array (
                'PokemonHabilidadID' => 766,
                'PokemonID' => 435,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            266 => 
            array (
                'PokemonHabilidadID' => 767,
                'PokemonID' => 436,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            267 => 
            array (
                'PokemonHabilidadID' => 768,
                'PokemonID' => 437,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            268 => 
            array (
                'PokemonHabilidadID' => 769,
                'PokemonID' => 437,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            269 => 
            array (
                'PokemonHabilidadID' => 770,
                'PokemonID' => 437,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            270 => 
            array (
                'PokemonHabilidadID' => 771,
                'PokemonID' => 439,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            271 => 
            array (
                'PokemonHabilidadID' => 772,
                'PokemonID' => 440,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            272 => 
            array (
                'PokemonHabilidadID' => 773,
                'PokemonID' => 440,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            273 => 
            array (
                'PokemonHabilidadID' => 774,
                'PokemonID' => 441,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            274 => 
            array (
                'PokemonHabilidadID' => 775,
                'PokemonID' => 441,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            275 => 
            array (
                'PokemonHabilidadID' => 776,
                'PokemonID' => 442,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            276 => 
            array (
                'PokemonHabilidadID' => 777,
                'PokemonID' => 442,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            277 => 
            array (
                'PokemonHabilidadID' => 778,
                'PokemonID' => 442,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            278 => 
            array (
                'PokemonHabilidadID' => 779,
                'PokemonID' => 443,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            279 => 
            array (
                'PokemonHabilidadID' => 780,
                'PokemonID' => 444,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            280 => 
            array (
                'PokemonHabilidadID' => 781,
                'PokemonID' => 445,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            281 => 
            array (
                'PokemonHabilidadID' => 782,
                'PokemonID' => 446,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            282 => 
            array (
                'PokemonHabilidadID' => 783,
                'PokemonID' => 447,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            283 => 
            array (
                'PokemonHabilidadID' => 784,
                'PokemonID' => 447,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            284 => 
            array (
                'PokemonHabilidadID' => 785,
                'PokemonID' => 448,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            285 => 
            array (
                'PokemonHabilidadID' => 786,
                'PokemonID' => 448,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            286 => 
            array (
                'PokemonHabilidadID' => 787,
                'PokemonID' => 449,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            287 => 
            array (
                'PokemonHabilidadID' => 788,
                'PokemonID' => 449,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            288 => 
            array (
                'PokemonHabilidadID' => 789,
                'PokemonID' => 450,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            289 => 
            array (
                'PokemonHabilidadID' => 790,
                'PokemonID' => 450,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            290 => 
            array (
                'PokemonHabilidadID' => 791,
                'PokemonID' => 451,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            291 => 
            array (
                'PokemonHabilidadID' => 792,
                'PokemonID' => 451,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            292 => 
            array (
                'PokemonHabilidadID' => 793,
                'PokemonID' => 452,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            293 => 
            array (
                'PokemonHabilidadID' => 794,
                'PokemonID' => 453,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            294 => 
            array (
                'PokemonHabilidadID' => 795,
                'PokemonID' => 453,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            295 => 
            array (
                'PokemonHabilidadID' => 796,
                'PokemonID' => 454,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            296 => 
            array (
                'PokemonHabilidadID' => 797,
                'PokemonID' => 454,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            297 => 
            array (
                'PokemonHabilidadID' => 798,
                'PokemonID' => 454,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            298 => 
            array (
                'PokemonHabilidadID' => 799,
                'PokemonID' => 455,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            299 => 
            array (
                'PokemonHabilidadID' => 800,
                'PokemonID' => 456,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            300 => 
            array (
                'PokemonHabilidadID' => 801,
                'PokemonID' => 456,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            301 => 
            array (
                'PokemonHabilidadID' => 802,
                'PokemonID' => 457,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            302 => 
            array (
                'PokemonHabilidadID' => 803,
                'PokemonID' => 457,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            303 => 
            array (
                'PokemonHabilidadID' => 804,
                'PokemonID' => 457,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            304 => 
            array (
                'PokemonHabilidadID' => 805,
                'PokemonID' => 458,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            305 => 
            array (
                'PokemonHabilidadID' => 806,
                'PokemonID' => 458,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            306 => 
            array (
                'PokemonHabilidadID' => 807,
                'PokemonID' => 462,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            307 => 
            array (
                'PokemonHabilidadID' => 808,
                'PokemonID' => 463,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            308 => 
            array (
                'PokemonHabilidadID' => 809,
                'PokemonID' => 463,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            309 => 
            array (
                'PokemonHabilidadID' => 810,
                'PokemonID' => 464,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            310 => 
            array (
                'PokemonHabilidadID' => 811,
                'PokemonID' => 464,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            311 => 
            array (
                'PokemonHabilidadID' => 812,
                'PokemonID' => 464,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            312 => 
            array (
                'PokemonHabilidadID' => 813,
                'PokemonID' => 464,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            313 => 
            array (
                'PokemonHabilidadID' => 814,
                'PokemonID' => 464,
                'HabilidadID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            314 => 
            array (
                'PokemonHabilidadID' => 815,
                'PokemonID' => 464,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            315 => 
            array (
                'PokemonHabilidadID' => 816,
                'PokemonID' => 465,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            316 => 
            array (
                'PokemonHabilidadID' => 817,
                'PokemonID' => 465,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            317 => 
            array (
                'PokemonHabilidadID' => 818,
                'PokemonID' => 466,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            318 => 
            array (
                'PokemonHabilidadID' => 819,
                'PokemonID' => 466,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            319 => 
            array (
                'PokemonHabilidadID' => 820,
                'PokemonID' => 466,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            320 => 
            array (
                'PokemonHabilidadID' => 821,
                'PokemonID' => 467,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            321 => 
            array (
                'PokemonHabilidadID' => 822,
                'PokemonID' => 467,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            322 => 
            array (
                'PokemonHabilidadID' => 823,
                'PokemonID' => 468,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            323 => 
            array (
                'PokemonHabilidadID' => 824,
                'PokemonID' => 468,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            324 => 
            array (
                'PokemonHabilidadID' => 825,
                'PokemonID' => 469,
                'HabilidadID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            325 => 
            array (
                'PokemonHabilidadID' => 826,
                'PokemonID' => 470,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            326 => 
            array (
                'PokemonHabilidadID' => 827,
                'PokemonID' => 470,
                'HabilidadID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            327 => 
            array (
                'PokemonHabilidadID' => 828,
                'PokemonID' => 470,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            328 => 
            array (
                'PokemonHabilidadID' => 829,
                'PokemonID' => 471,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            329 => 
            array (
                'PokemonHabilidadID' => 830,
                'PokemonID' => 471,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            330 => 
            array (
                'PokemonHabilidadID' => 831,
                'PokemonID' => 472,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            331 => 
            array (
                'PokemonHabilidadID' => 832,
                'PokemonID' => 472,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            332 => 
            array (
                'PokemonHabilidadID' => 833,
                'PokemonID' => 472,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            333 => 
            array (
                'PokemonHabilidadID' => 834,
                'PokemonID' => 473,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            334 => 
            array (
                'PokemonHabilidadID' => 835,
                'PokemonID' => 474,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            335 => 
            array (
                'PokemonHabilidadID' => 836,
                'PokemonID' => 475,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            336 => 
            array (
                'PokemonHabilidadID' => 837,
                'PokemonID' => 475,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            337 => 
            array (
                'PokemonHabilidadID' => 838,
                'PokemonID' => 476,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            338 => 
            array (
                'PokemonHabilidadID' => 839,
                'PokemonID' => 476,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            339 => 
            array (
                'PokemonHabilidadID' => 840,
                'PokemonID' => 477,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            340 => 
            array (
                'PokemonHabilidadID' => 841,
                'PokemonID' => 478,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            341 => 
            array (
                'PokemonHabilidadID' => 842,
                'PokemonID' => 479,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            342 => 
            array (
                'PokemonHabilidadID' => 843,
                'PokemonID' => 479,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            343 => 
            array (
                'PokemonHabilidadID' => 844,
                'PokemonID' => 481,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            344 => 
            array (
                'PokemonHabilidadID' => 845,
                'PokemonID' => 482,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            345 => 
            array (
                'PokemonHabilidadID' => 846,
                'PokemonID' => 483,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            346 => 
            array (
                'PokemonHabilidadID' => 847,
                'PokemonID' => 483,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            347 => 
            array (
                'PokemonHabilidadID' => 848,
                'PokemonID' => 484,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            348 => 
            array (
                'PokemonHabilidadID' => 849,
                'PokemonID' => 485,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            349 => 
            array (
                'PokemonHabilidadID' => 850,
                'PokemonID' => 485,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            350 => 
            array (
                'PokemonHabilidadID' => 851,
                'PokemonID' => 486,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            351 => 
            array (
                'PokemonHabilidadID' => 852,
                'PokemonID' => 486,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            352 => 
            array (
                'PokemonHabilidadID' => 853,
                'PokemonID' => 487,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            353 => 
            array (
                'PokemonHabilidadID' => 854,
                'PokemonID' => 488,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            354 => 
            array (
                'PokemonHabilidadID' => 855,
                'PokemonID' => 489,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            355 => 
            array (
                'PokemonHabilidadID' => 856,
                'PokemonID' => 489,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            356 => 
            array (
                'PokemonHabilidadID' => 857,
                'PokemonID' => 490,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            357 => 
            array (
                'PokemonHabilidadID' => 858,
                'PokemonID' => 490,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            358 => 
            array (
                'PokemonHabilidadID' => 859,
                'PokemonID' => 492,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            359 => 
            array (
                'PokemonHabilidadID' => 860,
                'PokemonID' => 493,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            360 => 
            array (
                'PokemonHabilidadID' => 861,
                'PokemonID' => 494,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            361 => 
            array (
                'PokemonHabilidadID' => 862,
                'PokemonID' => 495,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            362 => 
            array (
                'PokemonHabilidadID' => 863,
                'PokemonID' => 497,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            363 => 
            array (
                'PokemonHabilidadID' => 864,
                'PokemonID' => 498,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            364 => 
            array (
                'PokemonHabilidadID' => 865,
                'PokemonID' => 498,
                'HabilidadID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            365 => 
            array (
                'PokemonHabilidadID' => 866,
                'PokemonID' => 499,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            366 => 
            array (
                'PokemonHabilidadID' => 867,
                'PokemonID' => 499,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            367 => 
            array (
                'PokemonHabilidadID' => 868,
                'PokemonID' => 499,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            368 => 
            array (
                'PokemonHabilidadID' => 869,
                'PokemonID' => 501,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            369 => 
            array (
                'PokemonHabilidadID' => 870,
                'PokemonID' => 502,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            370 => 
            array (
                'PokemonHabilidadID' => 871,
                'PokemonID' => 503,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            371 => 
            array (
                'PokemonHabilidadID' => 872,
                'PokemonID' => 504,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            372 => 
            array (
                'PokemonHabilidadID' => 873,
                'PokemonID' => 505,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            373 => 
            array (
                'PokemonHabilidadID' => 874,
                'PokemonID' => 506,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            374 => 
            array (
                'PokemonHabilidadID' => 875,
                'PokemonID' => 507,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            375 => 
            array (
                'PokemonHabilidadID' => 876,
                'PokemonID' => 507,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            376 => 
            array (
                'PokemonHabilidadID' => 877,
                'PokemonID' => 508,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            377 => 
            array (
                'PokemonHabilidadID' => 878,
                'PokemonID' => 508,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            378 => 
            array (
                'PokemonHabilidadID' => 879,
                'PokemonID' => 509,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            379 => 
            array (
                'PokemonHabilidadID' => 880,
                'PokemonID' => 509,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            380 => 
            array (
                'PokemonHabilidadID' => 881,
                'PokemonID' => 509,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            381 => 
            array (
                'PokemonHabilidadID' => 882,
                'PokemonID' => 510,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            382 => 
            array (
                'PokemonHabilidadID' => 883,
                'PokemonID' => 510,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            383 => 
            array (
                'PokemonHabilidadID' => 884,
                'PokemonID' => 510,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            384 => 
            array (
                'PokemonHabilidadID' => 885,
                'PokemonID' => 511,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            385 => 
            array (
                'PokemonHabilidadID' => 886,
                'PokemonID' => 511,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            386 => 
            array (
                'PokemonHabilidadID' => 887,
                'PokemonID' => 512,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            387 => 
            array (
                'PokemonHabilidadID' => 888,
                'PokemonID' => 512,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            388 => 
            array (
                'PokemonHabilidadID' => 889,
                'PokemonID' => 513,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            389 => 
            array (
                'PokemonHabilidadID' => 890,
                'PokemonID' => 513,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            390 => 
            array (
                'PokemonHabilidadID' => 891,
                'PokemonID' => 514,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            391 => 
            array (
                'PokemonHabilidadID' => 892,
                'PokemonID' => 514,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            392 => 
            array (
                'PokemonHabilidadID' => 893,
                'PokemonID' => 514,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            393 => 
            array (
                'PokemonHabilidadID' => 894,
                'PokemonID' => 515,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            394 => 
            array (
                'PokemonHabilidadID' => 895,
                'PokemonID' => 515,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            395 => 
            array (
                'PokemonHabilidadID' => 896,
                'PokemonID' => 516,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            396 => 
            array (
                'PokemonHabilidadID' => 897,
                'PokemonID' => 516,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            397 => 
            array (
                'PokemonHabilidadID' => 898,
                'PokemonID' => 516,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            398 => 
            array (
                'PokemonHabilidadID' => 899,
                'PokemonID' => 517,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            399 => 
            array (
                'PokemonHabilidadID' => 900,
                'PokemonID' => 518,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            400 => 
            array (
                'PokemonHabilidadID' => 901,
                'PokemonID' => 519,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            401 => 
            array (
                'PokemonHabilidadID' => 902,
                'PokemonID' => 520,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            402 => 
            array (
                'PokemonHabilidadID' => 903,
                'PokemonID' => 520,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            403 => 
            array (
                'PokemonHabilidadID' => 904,
                'PokemonID' => 521,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            404 => 
            array (
                'PokemonHabilidadID' => 905,
                'PokemonID' => 522,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            405 => 
            array (
                'PokemonHabilidadID' => 906,
                'PokemonID' => 522,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            406 => 
            array (
                'PokemonHabilidadID' => 907,
                'PokemonID' => 522,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            407 => 
            array (
                'PokemonHabilidadID' => 908,
                'PokemonID' => 523,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            408 => 
            array (
                'PokemonHabilidadID' => 909,
                'PokemonID' => 524,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            409 => 
            array (
                'PokemonHabilidadID' => 910,
                'PokemonID' => 524,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            410 => 
            array (
                'PokemonHabilidadID' => 911,
                'PokemonID' => 525,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            411 => 
            array (
                'PokemonHabilidadID' => 912,
                'PokemonID' => 526,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            412 => 
            array (
                'PokemonHabilidadID' => 913,
                'PokemonID' => 526,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            413 => 
            array (
                'PokemonHabilidadID' => 914,
                'PokemonID' => 528,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            414 => 
            array (
                'PokemonHabilidadID' => 915,
                'PokemonID' => 529,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            415 => 
            array (
                'PokemonHabilidadID' => 916,
                'PokemonID' => 530,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            416 => 
            array (
                'PokemonHabilidadID' => 917,
                'PokemonID' => 530,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            417 => 
            array (
                'PokemonHabilidadID' => 918,
                'PokemonID' => 531,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            418 => 
            array (
                'PokemonHabilidadID' => 919,
                'PokemonID' => 531,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            419 => 
            array (
                'PokemonHabilidadID' => 920,
                'PokemonID' => 532,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            420 => 
            array (
                'PokemonHabilidadID' => 921,
                'PokemonID' => 532,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            421 => 
            array (
                'PokemonHabilidadID' => 922,
                'PokemonID' => 533,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            422 => 
            array (
                'PokemonHabilidadID' => 923,
                'PokemonID' => 533,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            423 => 
            array (
                'PokemonHabilidadID' => 924,
                'PokemonID' => 534,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            424 => 
            array (
                'PokemonHabilidadID' => 925,
                'PokemonID' => 535,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            425 => 
            array (
                'PokemonHabilidadID' => 926,
                'PokemonID' => 535,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            426 => 
            array (
                'PokemonHabilidadID' => 927,
                'PokemonID' => 538,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            427 => 
            array (
                'PokemonHabilidadID' => 928,
                'PokemonID' => 539,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            428 => 
            array (
                'PokemonHabilidadID' => 929,
                'PokemonID' => 539,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            429 => 
            array (
                'PokemonHabilidadID' => 930,
                'PokemonID' => 539,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            430 => 
            array (
                'PokemonHabilidadID' => 931,
                'PokemonID' => 539,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            431 => 
            array (
                'PokemonHabilidadID' => 932,
                'PokemonID' => 540,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            432 => 
            array (
                'PokemonHabilidadID' => 933,
                'PokemonID' => 540,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            433 => 
            array (
                'PokemonHabilidadID' => 934,
                'PokemonID' => 540,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            434 => 
            array (
                'PokemonHabilidadID' => 935,
                'PokemonID' => 541,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            435 => 
            array (
                'PokemonHabilidadID' => 936,
                'PokemonID' => 541,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            436 => 
            array (
                'PokemonHabilidadID' => 937,
                'PokemonID' => 542,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            437 => 
            array (
                'PokemonHabilidadID' => 938,
                'PokemonID' => 542,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            438 => 
            array (
                'PokemonHabilidadID' => 939,
                'PokemonID' => 542,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            439 => 
            array (
                'PokemonHabilidadID' => 940,
                'PokemonID' => 543,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            440 => 
            array (
                'PokemonHabilidadID' => 941,
                'PokemonID' => 543,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            441 => 
            array (
                'PokemonHabilidadID' => 942,
                'PokemonID' => 543,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            442 => 
            array (
                'PokemonHabilidadID' => 943,
                'PokemonID' => 544,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            443 => 
            array (
                'PokemonHabilidadID' => 944,
                'PokemonID' => 544,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            444 => 
            array (
                'PokemonHabilidadID' => 945,
                'PokemonID' => 545,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            445 => 
            array (
                'PokemonHabilidadID' => 946,
                'PokemonID' => 545,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            446 => 
            array (
                'PokemonHabilidadID' => 947,
                'PokemonID' => 545,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            447 => 
            array (
                'PokemonHabilidadID' => 948,
                'PokemonID' => 545,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            448 => 
            array (
                'PokemonHabilidadID' => 949,
                'PokemonID' => 546,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            449 => 
            array (
                'PokemonHabilidadID' => 950,
                'PokemonID' => 546,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            450 => 
            array (
                'PokemonHabilidadID' => 951,
                'PokemonID' => 547,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            451 => 
            array (
                'PokemonHabilidadID' => 952,
                'PokemonID' => 547,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            452 => 
            array (
                'PokemonHabilidadID' => 953,
                'PokemonID' => 547,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            453 => 
            array (
                'PokemonHabilidadID' => 954,
                'PokemonID' => 548,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            454 => 
            array (
                'PokemonHabilidadID' => 955,
                'PokemonID' => 548,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            455 => 
            array (
                'PokemonHabilidadID' => 956,
                'PokemonID' => 548,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            456 => 
            array (
                'PokemonHabilidadID' => 957,
                'PokemonID' => 549,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            457 => 
            array (
                'PokemonHabilidadID' => 958,
                'PokemonID' => 549,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            458 => 
            array (
                'PokemonHabilidadID' => 959,
                'PokemonID' => 549,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            459 => 
            array (
                'PokemonHabilidadID' => 960,
                'PokemonID' => 550,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            460 => 
            array (
                'PokemonHabilidadID' => 961,
                'PokemonID' => 550,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            461 => 
            array (
                'PokemonHabilidadID' => 962,
                'PokemonID' => 550,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            462 => 
            array (
                'PokemonHabilidadID' => 963,
                'PokemonID' => 551,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            463 => 
            array (
                'PokemonHabilidadID' => 964,
                'PokemonID' => 551,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            464 => 
            array (
                'PokemonHabilidadID' => 965,
                'PokemonID' => 551,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            465 => 
            array (
                'PokemonHabilidadID' => 966,
                'PokemonID' => 552,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            466 => 
            array (
                'PokemonHabilidadID' => 967,
                'PokemonID' => 552,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            467 => 
            array (
                'PokemonHabilidadID' => 968,
                'PokemonID' => 552,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            468 => 
            array (
                'PokemonHabilidadID' => 969,
                'PokemonID' => 553,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            469 => 
            array (
                'PokemonHabilidadID' => 970,
                'PokemonID' => 553,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            470 => 
            array (
                'PokemonHabilidadID' => 971,
                'PokemonID' => 553,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            471 => 
            array (
                'PokemonHabilidadID' => 972,
                'PokemonID' => 554,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            472 => 
            array (
                'PokemonHabilidadID' => 973,
                'PokemonID' => 554,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            473 => 
            array (
                'PokemonHabilidadID' => 974,
                'PokemonID' => 554,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            474 => 
            array (
                'PokemonHabilidadID' => 975,
                'PokemonID' => 555,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            475 => 
            array (
                'PokemonHabilidadID' => 976,
                'PokemonID' => 555,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            476 => 
            array (
                'PokemonHabilidadID' => 977,
                'PokemonID' => 556,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            477 => 
            array (
                'PokemonHabilidadID' => 978,
                'PokemonID' => 556,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            478 => 
            array (
                'PokemonHabilidadID' => 979,
                'PokemonID' => 557,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            479 => 
            array (
                'PokemonHabilidadID' => 980,
                'PokemonID' => 557,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            480 => 
            array (
                'PokemonHabilidadID' => 981,
                'PokemonID' => 558,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            481 => 
            array (
                'PokemonHabilidadID' => 982,
                'PokemonID' => 558,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            482 => 
            array (
                'PokemonHabilidadID' => 983,
                'PokemonID' => 559,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            483 => 
            array (
                'PokemonHabilidadID' => 984,
                'PokemonID' => 559,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            484 => 
            array (
                'PokemonHabilidadID' => 985,
                'PokemonID' => 560,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            485 => 
            array (
                'PokemonHabilidadID' => 986,
                'PokemonID' => 561,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            486 => 
            array (
                'PokemonHabilidadID' => 987,
                'PokemonID' => 562,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            487 => 
            array (
                'PokemonHabilidadID' => 988,
                'PokemonID' => 563,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            488 => 
            array (
                'PokemonHabilidadID' => 989,
                'PokemonID' => 563,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            489 => 
            array (
                'PokemonHabilidadID' => 990,
                'PokemonID' => 563,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            490 => 
            array (
                'PokemonHabilidadID' => 991,
                'PokemonID' => 564,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            491 => 
            array (
                'PokemonHabilidadID' => 992,
                'PokemonID' => 565,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            492 => 
            array (
                'PokemonHabilidadID' => 993,
                'PokemonID' => 566,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            493 => 
            array (
                'PokemonHabilidadID' => 994,
                'PokemonID' => 566,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            494 => 
            array (
                'PokemonHabilidadID' => 995,
                'PokemonID' => 567,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            495 => 
            array (
                'PokemonHabilidadID' => 996,
                'PokemonID' => 567,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            496 => 
            array (
                'PokemonHabilidadID' => 997,
                'PokemonID' => 567,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            497 => 
            array (
                'PokemonHabilidadID' => 998,
                'PokemonID' => 568,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            498 => 
            array (
                'PokemonHabilidadID' => 999,
                'PokemonID' => 568,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            499 => 
            array (
                'PokemonHabilidadID' => 1000,
                'PokemonID' => 568,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
        ));
        \DB::table('PokemonHabilidad')->insert(array (
            0 => 
            array (
                'PokemonHabilidadID' => 1001,
                'PokemonID' => 569,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            1 => 
            array (
                'PokemonHabilidadID' => 1002,
                'PokemonID' => 569,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            2 => 
            array (
                'PokemonHabilidadID' => 1003,
                'PokemonID' => 569,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            3 => 
            array (
                'PokemonHabilidadID' => 1004,
                'PokemonID' => 570,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            4 => 
            array (
                'PokemonHabilidadID' => 1005,
                'PokemonID' => 570,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            5 => 
            array (
                'PokemonHabilidadID' => 1006,
                'PokemonID' => 570,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            6 => 
            array (
                'PokemonHabilidadID' => 1007,
                'PokemonID' => 571,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            7 => 
            array (
                'PokemonHabilidadID' => 1008,
                'PokemonID' => 571,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            8 => 
            array (
                'PokemonHabilidadID' => 1009,
                'PokemonID' => 572,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            9 => 
            array (
                'PokemonHabilidadID' => 1010,
                'PokemonID' => 572,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            10 => 
            array (
                'PokemonHabilidadID' => 1011,
                'PokemonID' => 572,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            11 => 
            array (
                'PokemonHabilidadID' => 1012,
                'PokemonID' => 573,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            12 => 
            array (
                'PokemonHabilidadID' => 1013,
                'PokemonID' => 573,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            13 => 
            array (
                'PokemonHabilidadID' => 1014,
                'PokemonID' => 573,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            14 => 
            array (
                'PokemonHabilidadID' => 1015,
                'PokemonID' => 577,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            15 => 
            array (
                'PokemonHabilidadID' => 1016,
                'PokemonID' => 577,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            16 => 
            array (
                'PokemonHabilidadID' => 1017,
                'PokemonID' => 578,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            17 => 
            array (
                'PokemonHabilidadID' => 1018,
                'PokemonID' => 579,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            18 => 
            array (
                'PokemonHabilidadID' => 1019,
                'PokemonID' => 580,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            19 => 
            array (
                'PokemonHabilidadID' => 1020,
                'PokemonID' => 581,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            20 => 
            array (
                'PokemonHabilidadID' => 1021,
                'PokemonID' => 582,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            21 => 
            array (
                'PokemonHabilidadID' => 1022,
                'PokemonID' => 583,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            22 => 
            array (
                'PokemonHabilidadID' => 1023,
                'PokemonID' => 583,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            23 => 
            array (
                'PokemonHabilidadID' => 1024,
                'PokemonID' => 584,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            24 => 
            array (
                'PokemonHabilidadID' => 1025,
                'PokemonID' => 584,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            25 => 
            array (
                'PokemonHabilidadID' => 1026,
                'PokemonID' => 585,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            26 => 
            array (
                'PokemonHabilidadID' => 1027,
                'PokemonID' => 585,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            27 => 
            array (
                'PokemonHabilidadID' => 1028,
                'PokemonID' => 586,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            28 => 
            array (
                'PokemonHabilidadID' => 1029,
                'PokemonID' => 586,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            29 => 
            array (
                'PokemonHabilidadID' => 1030,
                'PokemonID' => 587,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            30 => 
            array (
                'PokemonHabilidadID' => 1031,
                'PokemonID' => 587,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            31 => 
            array (
                'PokemonHabilidadID' => 1032,
                'PokemonID' => 588,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            32 => 
            array (
                'PokemonHabilidadID' => 1033,
                'PokemonID' => 588,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            33 => 
            array (
                'PokemonHabilidadID' => 1034,
                'PokemonID' => 589,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            34 => 
            array (
                'PokemonHabilidadID' => 1035,
                'PokemonID' => 589,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            35 => 
            array (
                'PokemonHabilidadID' => 1036,
                'PokemonID' => 590,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            36 => 
            array (
                'PokemonHabilidadID' => 1037,
                'PokemonID' => 591,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            37 => 
            array (
                'PokemonHabilidadID' => 1038,
                'PokemonID' => 592,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            38 => 
            array (
                'PokemonHabilidadID' => 1039,
                'PokemonID' => 593,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            39 => 
            array (
                'PokemonHabilidadID' => 1040,
                'PokemonID' => 593,
                'HabilidadID' => 43,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            40 => 
            array (
                'PokemonHabilidadID' => 1041,
                'PokemonID' => 594,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            41 => 
            array (
                'PokemonHabilidadID' => 1042,
                'PokemonID' => 594,
                'HabilidadID' => 43,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            42 => 
            array (
                'PokemonHabilidadID' => 1043,
                'PokemonID' => 595,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            43 => 
            array (
                'PokemonHabilidadID' => 1044,
                'PokemonID' => 595,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            44 => 
            array (
                'PokemonHabilidadID' => 1045,
                'PokemonID' => 595,
                'HabilidadID' => 43,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            45 => 
            array (
                'PokemonHabilidadID' => 1046,
                'PokemonID' => 598,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            46 => 
            array (
                'PokemonHabilidadID' => 1047,
                'PokemonID' => 599,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            47 => 
            array (
                'PokemonHabilidadID' => 1048,
                'PokemonID' => 599,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            48 => 
            array (
                'PokemonHabilidadID' => 1049,
                'PokemonID' => 600,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            49 => 
            array (
                'PokemonHabilidadID' => 1050,
                'PokemonID' => 600,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            50 => 
            array (
                'PokemonHabilidadID' => 1051,
                'PokemonID' => 601,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            51 => 
            array (
                'PokemonHabilidadID' => 1052,
                'PokemonID' => 601,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            52 => 
            array (
                'PokemonHabilidadID' => 1053,
                'PokemonID' => 605,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            53 => 
            array (
                'PokemonHabilidadID' => 1054,
                'PokemonID' => 606,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            54 => 
            array (
                'PokemonHabilidadID' => 1055,
                'PokemonID' => 607,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            55 => 
            array (
                'PokemonHabilidadID' => 1056,
                'PokemonID' => 608,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            56 => 
            array (
                'PokemonHabilidadID' => 1057,
                'PokemonID' => 608,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            57 => 
            array (
                'PokemonHabilidadID' => 1058,
                'PokemonID' => 612,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            58 => 
            array (
                'PokemonHabilidadID' => 1059,
                'PokemonID' => 613,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            59 => 
            array (
                'PokemonHabilidadID' => 1060,
                'PokemonID' => 614,
                'HabilidadID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            60 => 
            array (
                'PokemonHabilidadID' => 1061,
                'PokemonID' => 614,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            61 => 
            array (
                'PokemonHabilidadID' => 1062,
                'PokemonID' => 615,
                'HabilidadID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            62 => 
            array (
                'PokemonHabilidadID' => 1063,
                'PokemonID' => 615,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            63 => 
            array (
                'PokemonHabilidadID' => 1064,
                'PokemonID' => 618,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            64 => 
            array (
                'PokemonHabilidadID' => 1065,
                'PokemonID' => 619,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            65 => 
            array (
                'PokemonHabilidadID' => 1066,
                'PokemonID' => 620,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            66 => 
            array (
                'PokemonHabilidadID' => 1067,
                'PokemonID' => 621,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            67 => 
            array (
                'PokemonHabilidadID' => 1068,
                'PokemonID' => 621,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            68 => 
            array (
                'PokemonHabilidadID' => 1069,
                'PokemonID' => 622,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            69 => 
            array (
                'PokemonHabilidadID' => 1070,
                'PokemonID' => 623,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            70 => 
            array (
                'PokemonHabilidadID' => 1071,
                'PokemonID' => 623,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            71 => 
            array (
                'PokemonHabilidadID' => 1072,
                'PokemonID' => 624,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            72 => 
            array (
                'PokemonHabilidadID' => 1073,
                'PokemonID' => 625,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            73 => 
            array (
                'PokemonHabilidadID' => 1074,
                'PokemonID' => 626,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            74 => 
            array (
                'PokemonHabilidadID' => 1075,
                'PokemonID' => 632,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            75 => 
            array (
                'PokemonHabilidadID' => 1076,
                'PokemonID' => 633,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            76 => 
            array (
                'PokemonHabilidadID' => 1077,
                'PokemonID' => 633,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            77 => 
            array (
                'PokemonHabilidadID' => 1078,
                'PokemonID' => 634,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            78 => 
            array (
                'PokemonHabilidadID' => 1079,
                'PokemonID' => 635,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            79 => 
            array (
                'PokemonHabilidadID' => 1080,
                'PokemonID' => 635,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            80 => 
            array (
                'PokemonHabilidadID' => 1081,
                'PokemonID' => 636,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            81 => 
            array (
                'PokemonHabilidadID' => 1082,
                'PokemonID' => 637,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            82 => 
            array (
                'PokemonHabilidadID' => 1083,
                'PokemonID' => 637,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            83 => 
            array (
                'PokemonHabilidadID' => 1084,
                'PokemonID' => 638,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            84 => 
            array (
                'PokemonHabilidadID' => 1085,
                'PokemonID' => 638,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            85 => 
            array (
                'PokemonHabilidadID' => 1086,
                'PokemonID' => 643,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            86 => 
            array (
                'PokemonHabilidadID' => 1087,
                'PokemonID' => 644,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            87 => 
            array (
                'PokemonHabilidadID' => 1088,
                'PokemonID' => 645,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            88 => 
            array (
                'PokemonHabilidadID' => 1089,
                'PokemonID' => 646,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            89 => 
            array (
                'PokemonHabilidadID' => 1090,
                'PokemonID' => 648,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            90 => 
            array (
                'PokemonHabilidadID' => 1091,
                'PokemonID' => 649,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            91 => 
            array (
                'PokemonHabilidadID' => 1092,
                'PokemonID' => 650,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            92 => 
            array (
                'PokemonHabilidadID' => 1093,
                'PokemonID' => 652,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            93 => 
            array (
                'PokemonHabilidadID' => 1094,
                'PokemonID' => 653,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            94 => 
            array (
                'PokemonHabilidadID' => 1095,
                'PokemonID' => 653,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            95 => 
            array (
                'PokemonHabilidadID' => 1096,
                'PokemonID' => 656,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            96 => 
            array (
                'PokemonHabilidadID' => 1097,
                'PokemonID' => 657,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            97 => 
            array (
                'PokemonHabilidadID' => 1098,
                'PokemonID' => 658,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            98 => 
            array (
                'PokemonHabilidadID' => 1099,
                'PokemonID' => 659,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            99 => 
            array (
                'PokemonHabilidadID' => 1100,
                'PokemonID' => 659,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            100 => 
            array (
                'PokemonHabilidadID' => 1101,
                'PokemonID' => 663,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            101 => 
            array (
                'PokemonHabilidadID' => 1102,
                'PokemonID' => 663,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            102 => 
            array (
                'PokemonHabilidadID' => 1103,
                'PokemonID' => 664,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            103 => 
            array (
                'PokemonHabilidadID' => 1104,
                'PokemonID' => 664,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            104 => 
            array (
                'PokemonHabilidadID' => 1105,
                'PokemonID' => 665,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            105 => 
            array (
                'PokemonHabilidadID' => 1106,
                'PokemonID' => 665,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            106 => 
            array (
                'PokemonHabilidadID' => 1107,
                'PokemonID' => 666,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            107 => 
            array (
                'PokemonHabilidadID' => 1108,
                'PokemonID' => 666,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            108 => 
            array (
                'PokemonHabilidadID' => 1109,
                'PokemonID' => 667,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            109 => 
            array (
                'PokemonHabilidadID' => 1110,
                'PokemonID' => 667,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            110 => 
            array (
                'PokemonHabilidadID' => 1111,
                'PokemonID' => 668,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            111 => 
            array (
                'PokemonHabilidadID' => 1112,
                'PokemonID' => 669,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            112 => 
            array (
                'PokemonHabilidadID' => 1113,
                'PokemonID' => 669,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            113 => 
            array (
                'PokemonHabilidadID' => 1114,
                'PokemonID' => 669,
                'HabilidadID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            114 => 
            array (
                'PokemonHabilidadID' => 1115,
                'PokemonID' => 670,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            115 => 
            array (
                'PokemonHabilidadID' => 1116,
                'PokemonID' => 671,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            116 => 
            array (
                'PokemonHabilidadID' => 1117,
                'PokemonID' => 671,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            117 => 
            array (
                'PokemonHabilidadID' => 1118,
                'PokemonID' => 672,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            118 => 
            array (
                'PokemonHabilidadID' => 1119,
                'PokemonID' => 673,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            119 => 
            array (
                'PokemonHabilidadID' => 1120,
                'PokemonID' => 674,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            120 => 
            array (
                'PokemonHabilidadID' => 1121,
                'PokemonID' => 677,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            121 => 
            array (
                'PokemonHabilidadID' => 1122,
                'PokemonID' => 677,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            122 => 
            array (
                'PokemonHabilidadID' => 1123,
                'PokemonID' => 679,
                'HabilidadID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            123 => 
            array (
                'PokemonHabilidadID' => 1124,
                'PokemonID' => 680,
                'HabilidadID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            124 => 
            array (
                'PokemonHabilidadID' => 1125,
                'PokemonID' => 681,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            125 => 
            array (
                'PokemonHabilidadID' => 1126,
                'PokemonID' => 681,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            126 => 
            array (
                'PokemonHabilidadID' => 1127,
                'PokemonID' => 685,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            127 => 
            array (
                'PokemonHabilidadID' => 1128,
                'PokemonID' => 689,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            128 => 
            array (
                'PokemonHabilidadID' => 1129,
                'PokemonID' => 692,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            129 => 
            array (
                'PokemonHabilidadID' => 1130,
                'PokemonID' => 693,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            130 => 
            array (
                'PokemonHabilidadID' => 1131,
                'PokemonID' => 694,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            131 => 
            array (
                'PokemonHabilidadID' => 1132,
                'PokemonID' => 695,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            132 => 
            array (
                'PokemonHabilidadID' => 1133,
                'PokemonID' => 696,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            133 => 
            array (
                'PokemonHabilidadID' => 1134,
                'PokemonID' => 697,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            134 => 
            array (
                'PokemonHabilidadID' => 1135,
                'PokemonID' => 698,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            135 => 
            array (
                'PokemonHabilidadID' => 1136,
                'PokemonID' => 698,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            136 => 
            array (
                'PokemonHabilidadID' => 1137,
                'PokemonID' => 699,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            137 => 
            array (
                'PokemonHabilidadID' => 1138,
                'PokemonID' => 699,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            138 => 
            array (
                'PokemonHabilidadID' => 1139,
                'PokemonID' => 699,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            139 => 
            array (
                'PokemonHabilidadID' => 1140,
                'PokemonID' => 700,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            140 => 
            array (
                'PokemonHabilidadID' => 1141,
                'PokemonID' => 700,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            141 => 
            array (
                'PokemonHabilidadID' => 1142,
                'PokemonID' => 701,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            142 => 
            array (
                'PokemonHabilidadID' => 1143,
                'PokemonID' => 701,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            143 => 
            array (
                'PokemonHabilidadID' => 1144,
                'PokemonID' => 702,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            144 => 
            array (
                'PokemonHabilidadID' => 1145,
                'PokemonID' => 703,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            145 => 
            array (
                'PokemonHabilidadID' => 1146,
                'PokemonID' => 704,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            146 => 
            array (
                'PokemonHabilidadID' => 1147,
                'PokemonID' => 704,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            147 => 
            array (
                'PokemonHabilidadID' => 1148,
                'PokemonID' => 705,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            148 => 
            array (
                'PokemonHabilidadID' => 1149,
                'PokemonID' => 705,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            149 => 
            array (
                'PokemonHabilidadID' => 1150,
                'PokemonID' => 706,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            150 => 
            array (
                'PokemonHabilidadID' => 1151,
                'PokemonID' => 706,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            151 => 
            array (
                'PokemonHabilidadID' => 1152,
                'PokemonID' => 706,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            152 => 
            array (
                'PokemonHabilidadID' => 1153,
                'PokemonID' => 706,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            153 => 
            array (
                'PokemonHabilidadID' => 1154,
                'PokemonID' => 707,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            154 => 
            array (
                'PokemonHabilidadID' => 1155,
                'PokemonID' => 707,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            155 => 
            array (
                'PokemonHabilidadID' => 1156,
                'PokemonID' => 707,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            156 => 
            array (
                'PokemonHabilidadID' => 1157,
                'PokemonID' => 707,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            157 => 
            array (
                'PokemonHabilidadID' => 1158,
                'PokemonID' => 708,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            158 => 
            array (
                'PokemonHabilidadID' => 1159,
                'PokemonID' => 709,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            159 => 
            array (
                'PokemonHabilidadID' => 1160,
                'PokemonID' => 709,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            160 => 
            array (
                'PokemonHabilidadID' => 1161,
                'PokemonID' => 711,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            161 => 
            array (
                'PokemonHabilidadID' => 1162,
                'PokemonID' => 712,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            162 => 
            array (
                'PokemonHabilidadID' => 1163,
                'PokemonID' => 712,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            163 => 
            array (
                'PokemonHabilidadID' => 1164,
                'PokemonID' => 712,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            164 => 
            array (
                'PokemonHabilidadID' => 1165,
                'PokemonID' => 713,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            165 => 
            array (
                'PokemonHabilidadID' => 1166,
                'PokemonID' => 713,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            166 => 
            array (
                'PokemonHabilidadID' => 1167,
                'PokemonID' => 713,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            167 => 
            array (
                'PokemonHabilidadID' => 1168,
                'PokemonID' => 713,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            168 => 
            array (
                'PokemonHabilidadID' => 1169,
                'PokemonID' => 714,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            169 => 
            array (
                'PokemonHabilidadID' => 1170,
                'PokemonID' => 715,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            170 => 
            array (
                'PokemonHabilidadID' => 1171,
                'PokemonID' => 716,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            171 => 
            array (
                'PokemonHabilidadID' => 1172,
                'PokemonID' => 717,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            172 => 
            array (
                'PokemonHabilidadID' => 1173,
                'PokemonID' => 718,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            173 => 
            array (
                'PokemonHabilidadID' => 1174,
                'PokemonID' => 719,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            174 => 
            array (
                'PokemonHabilidadID' => 1175,
                'PokemonID' => 719,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            175 => 
            array (
                'PokemonHabilidadID' => 1176,
                'PokemonID' => 720,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            176 => 
            array (
                'PokemonHabilidadID' => 1177,
                'PokemonID' => 720,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            177 => 
            array (
                'PokemonHabilidadID' => 1178,
                'PokemonID' => 721,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            178 => 
            array (
                'PokemonHabilidadID' => 1179,
                'PokemonID' => 721,
                'HabilidadID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            179 => 
            array (
                'PokemonHabilidadID' => 1180,
                'PokemonID' => 722,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            180 => 
            array (
                'PokemonHabilidadID' => 1181,
                'PokemonID' => 722,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            181 => 
            array (
                'PokemonHabilidadID' => 1182,
                'PokemonID' => 722,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            182 => 
            array (
                'PokemonHabilidadID' => 1183,
                'PokemonID' => 723,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            183 => 
            array (
                'PokemonHabilidadID' => 1184,
                'PokemonID' => 723,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            184 => 
            array (
                'PokemonHabilidadID' => 1185,
                'PokemonID' => 723,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            185 => 
            array (
                'PokemonHabilidadID' => 1186,
                'PokemonID' => 724,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            186 => 
            array (
                'PokemonHabilidadID' => 1187,
                'PokemonID' => 724,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            187 => 
            array (
                'PokemonHabilidadID' => 1188,
                'PokemonID' => 725,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            188 => 
            array (
                'PokemonHabilidadID' => 1189,
                'PokemonID' => 725,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            189 => 
            array (
                'PokemonHabilidadID' => 1190,
                'PokemonID' => 725,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            190 => 
            array (
                'PokemonHabilidadID' => 1191,
                'PokemonID' => 726,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            191 => 
            array (
                'PokemonHabilidadID' => 1192,
                'PokemonID' => 726,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            192 => 
            array (
                'PokemonHabilidadID' => 1193,
                'PokemonID' => 726,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            193 => 
            array (
                'PokemonHabilidadID' => 1194,
                'PokemonID' => 727,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            194 => 
            array (
                'PokemonHabilidadID' => 1195,
                'PokemonID' => 728,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            195 => 
            array (
                'PokemonHabilidadID' => 1196,
                'PokemonID' => 729,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            196 => 
            array (
                'PokemonHabilidadID' => 1197,
                'PokemonID' => 730,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            197 => 
            array (
                'PokemonHabilidadID' => 1198,
                'PokemonID' => 731,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            198 => 
            array (
                'PokemonHabilidadID' => 1199,
                'PokemonID' => 732,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            199 => 
            array (
                'PokemonHabilidadID' => 1200,
                'PokemonID' => 733,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            200 => 
            array (
                'PokemonHabilidadID' => 1201,
                'PokemonID' => 734,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            201 => 
            array (
                'PokemonHabilidadID' => 1202,
                'PokemonID' => 734,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            202 => 
            array (
                'PokemonHabilidadID' => 1203,
                'PokemonID' => 735,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            203 => 
            array (
                'PokemonHabilidadID' => 1204,
                'PokemonID' => 735,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            204 => 
            array (
                'PokemonHabilidadID' => 1205,
                'PokemonID' => 736,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            205 => 
            array (
                'PokemonHabilidadID' => 1206,
                'PokemonID' => 736,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            206 => 
            array (
                'PokemonHabilidadID' => 1207,
                'PokemonID' => 737,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            207 => 
            array (
                'PokemonHabilidadID' => 1208,
                'PokemonID' => 738,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            208 => 
            array (
                'PokemonHabilidadID' => 1209,
                'PokemonID' => 739,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            209 => 
            array (
                'PokemonHabilidadID' => 1210,
                'PokemonID' => 739,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            210 => 
            array (
                'PokemonHabilidadID' => 1211,
                'PokemonID' => 740,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            211 => 
            array (
                'PokemonHabilidadID' => 1212,
                'PokemonID' => 740,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            212 => 
            array (
                'PokemonHabilidadID' => 1213,
                'PokemonID' => 741,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            213 => 
            array (
                'PokemonHabilidadID' => 1214,
                'PokemonID' => 742,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            214 => 
            array (
                'PokemonHabilidadID' => 1215,
                'PokemonID' => 743,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            215 => 
            array (
                'PokemonHabilidadID' => 1216,
                'PokemonID' => 743,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            216 => 
            array (
                'PokemonHabilidadID' => 1217,
                'PokemonID' => 743,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            217 => 
            array (
                'PokemonHabilidadID' => 1218,
                'PokemonID' => 744,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            218 => 
            array (
                'PokemonHabilidadID' => 1219,
                'PokemonID' => 744,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            219 => 
            array (
                'PokemonHabilidadID' => 1220,
                'PokemonID' => 744,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            220 => 
            array (
                'PokemonHabilidadID' => 1221,
                'PokemonID' => 745,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            221 => 
            array (
                'PokemonHabilidadID' => 1222,
                'PokemonID' => 745,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            222 => 
            array (
                'PokemonHabilidadID' => 1223,
                'PokemonID' => 746,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            223 => 
            array (
                'PokemonHabilidadID' => 1224,
                'PokemonID' => 746,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            224 => 
            array (
                'PokemonHabilidadID' => 1225,
                'PokemonID' => 747,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            225 => 
            array (
                'PokemonHabilidadID' => 1226,
                'PokemonID' => 747,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            226 => 
            array (
                'PokemonHabilidadID' => 1227,
                'PokemonID' => 748,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            227 => 
            array (
                'PokemonHabilidadID' => 1228,
                'PokemonID' => 748,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            228 => 
            array (
                'PokemonHabilidadID' => 1229,
                'PokemonID' => 749,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            229 => 
            array (
                'PokemonHabilidadID' => 1230,
                'PokemonID' => 749,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            230 => 
            array (
                'PokemonHabilidadID' => 1231,
                'PokemonID' => 750,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            231 => 
            array (
                'PokemonHabilidadID' => 1232,
                'PokemonID' => 750,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            232 => 
            array (
                'PokemonHabilidadID' => 1233,
                'PokemonID' => 751,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            233 => 
            array (
                'PokemonHabilidadID' => 1234,
                'PokemonID' => 751,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            234 => 
            array (
                'PokemonHabilidadID' => 1235,
                'PokemonID' => 752,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            235 => 
            array (
                'PokemonHabilidadID' => 1236,
                'PokemonID' => 752,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            236 => 
            array (
                'PokemonHabilidadID' => 1237,
                'PokemonID' => 752,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            237 => 
            array (
                'PokemonHabilidadID' => 1238,
                'PokemonID' => 753,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            238 => 
            array (
                'PokemonHabilidadID' => 1239,
                'PokemonID' => 754,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            239 => 
            array (
                'PokemonHabilidadID' => 1240,
                'PokemonID' => 754,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            240 => 
            array (
                'PokemonHabilidadID' => 1241,
                'PokemonID' => 755,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            241 => 
            array (
                'PokemonHabilidadID' => 1242,
                'PokemonID' => 756,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            242 => 
            array (
                'PokemonHabilidadID' => 1243,
                'PokemonID' => 756,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            243 => 
            array (
                'PokemonHabilidadID' => 1244,
                'PokemonID' => 757,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            244 => 
            array (
                'PokemonHabilidadID' => 1245,
                'PokemonID' => 758,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            245 => 
            array (
                'PokemonHabilidadID' => 1246,
                'PokemonID' => 759,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            246 => 
            array (
                'PokemonHabilidadID' => 1247,
                'PokemonID' => 760,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            247 => 
            array (
                'PokemonHabilidadID' => 1248,
                'PokemonID' => 761,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            248 => 
            array (
                'PokemonHabilidadID' => 1249,
                'PokemonID' => 761,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            249 => 
            array (
                'PokemonHabilidadID' => 1250,
                'PokemonID' => 762,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            250 => 
            array (
                'PokemonHabilidadID' => 1251,
                'PokemonID' => 762,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            251 => 
            array (
                'PokemonHabilidadID' => 1252,
                'PokemonID' => 765,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            252 => 
            array (
                'PokemonHabilidadID' => 1253,
                'PokemonID' => 765,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            253 => 
            array (
                'PokemonHabilidadID' => 1254,
                'PokemonID' => 766,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            254 => 
            array (
                'PokemonHabilidadID' => 1255,
                'PokemonID' => 766,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            255 => 
            array (
                'PokemonHabilidadID' => 1256,
                'PokemonID' => 767,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            256 => 
            array (
                'PokemonHabilidadID' => 1257,
                'PokemonID' => 767,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            257 => 
            array (
                'PokemonHabilidadID' => 1258,
                'PokemonID' => 768,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            258 => 
            array (
                'PokemonHabilidadID' => 1259,
                'PokemonID' => 768,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            259 => 
            array (
                'PokemonHabilidadID' => 1260,
                'PokemonID' => 769,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            260 => 
            array (
                'PokemonHabilidadID' => 1261,
                'PokemonID' => 769,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            261 => 
            array (
                'PokemonHabilidadID' => 1262,
                'PokemonID' => 770,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            262 => 
            array (
                'PokemonHabilidadID' => 1263,
                'PokemonID' => 770,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            263 => 
            array (
                'PokemonHabilidadID' => 1264,
                'PokemonID' => 770,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            264 => 
            array (
                'PokemonHabilidadID' => 1265,
                'PokemonID' => 771,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            265 => 
            array (
                'PokemonHabilidadID' => 1266,
                'PokemonID' => 771,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            266 => 
            array (
                'PokemonHabilidadID' => 1267,
                'PokemonID' => 771,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            267 => 
            array (
                'PokemonHabilidadID' => 1268,
                'PokemonID' => 772,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            268 => 
            array (
                'PokemonHabilidadID' => 1269,
                'PokemonID' => 772,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            269 => 
            array (
                'PokemonHabilidadID' => 1270,
                'PokemonID' => 772,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            270 => 
            array (
                'PokemonHabilidadID' => 1271,
                'PokemonID' => 773,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            271 => 
            array (
                'PokemonHabilidadID' => 1272,
                'PokemonID' => 773,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            272 => 
            array (
                'PokemonHabilidadID' => 1273,
                'PokemonID' => 774,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            273 => 
            array (
                'PokemonHabilidadID' => 1274,
                'PokemonID' => 774,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            274 => 
            array (
                'PokemonHabilidadID' => 1275,
                'PokemonID' => 774,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            275 => 
            array (
                'PokemonHabilidadID' => 1276,
                'PokemonID' => 774,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            276 => 
            array (
                'PokemonHabilidadID' => 1277,
                'PokemonID' => 775,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            277 => 
            array (
                'PokemonHabilidadID' => 1278,
                'PokemonID' => 776,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            278 => 
            array (
                'PokemonHabilidadID' => 1279,
                'PokemonID' => 776,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            279 => 
            array (
                'PokemonHabilidadID' => 1280,
                'PokemonID' => 777,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            280 => 
            array (
                'PokemonHabilidadID' => 1281,
                'PokemonID' => 777,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            281 => 
            array (
                'PokemonHabilidadID' => 1282,
                'PokemonID' => 778,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            282 => 
            array (
                'PokemonHabilidadID' => 1283,
                'PokemonID' => 778,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            283 => 
            array (
                'PokemonHabilidadID' => 1284,
                'PokemonID' => 779,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            284 => 
            array (
                'PokemonHabilidadID' => 1285,
                'PokemonID' => 779,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            285 => 
            array (
                'PokemonHabilidadID' => 1286,
                'PokemonID' => 780,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            286 => 
            array (
                'PokemonHabilidadID' => 1287,
                'PokemonID' => 780,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            287 => 
            array (
                'PokemonHabilidadID' => 1288,
                'PokemonID' => 781,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            288 => 
            array (
                'PokemonHabilidadID' => 1289,
                'PokemonID' => 782,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            289 => 
            array (
                'PokemonHabilidadID' => 1290,
                'PokemonID' => 783,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            290 => 
            array (
                'PokemonHabilidadID' => 1291,
                'PokemonID' => 783,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            291 => 
            array (
                'PokemonHabilidadID' => 1292,
                'PokemonID' => 784,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            292 => 
            array (
                'PokemonHabilidadID' => 1293,
                'PokemonID' => 784,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            293 => 
            array (
                'PokemonHabilidadID' => 1294,
                'PokemonID' => 785,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            294 => 
            array (
                'PokemonHabilidadID' => 1295,
                'PokemonID' => 785,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            295 => 
            array (
                'PokemonHabilidadID' => 1296,
                'PokemonID' => 786,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            296 => 
            array (
                'PokemonHabilidadID' => 1297,
                'PokemonID' => 786,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            297 => 
            array (
                'PokemonHabilidadID' => 1298,
                'PokemonID' => 787,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            298 => 
            array (
                'PokemonHabilidadID' => 1299,
                'PokemonID' => 787,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            299 => 
            array (
                'PokemonHabilidadID' => 1300,
                'PokemonID' => 788,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            300 => 
            array (
                'PokemonHabilidadID' => 1301,
                'PokemonID' => 789,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            301 => 
            array (
                'PokemonHabilidadID' => 1302,
                'PokemonID' => 789,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            302 => 
            array (
                'PokemonHabilidadID' => 1303,
                'PokemonID' => 790,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            303 => 
            array (
                'PokemonHabilidadID' => 1304,
                'PokemonID' => 790,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            304 => 
            array (
                'PokemonHabilidadID' => 1305,
                'PokemonID' => 791,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            305 => 
            array (
                'PokemonHabilidadID' => 1306,
                'PokemonID' => 791,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            306 => 
            array (
                'PokemonHabilidadID' => 1307,
                'PokemonID' => 792,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            307 => 
            array (
                'PokemonHabilidadID' => 1308,
                'PokemonID' => 792,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            308 => 
            array (
                'PokemonHabilidadID' => 1309,
                'PokemonID' => 793,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            309 => 
            array (
                'PokemonHabilidadID' => 1310,
                'PokemonID' => 793,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            310 => 
            array (
                'PokemonHabilidadID' => 1311,
                'PokemonID' => 794,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            311 => 
            array (
                'PokemonHabilidadID' => 1312,
                'PokemonID' => 794,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            312 => 
            array (
                'PokemonHabilidadID' => 1313,
                'PokemonID' => 794,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            313 => 
            array (
                'PokemonHabilidadID' => 1314,
                'PokemonID' => 794,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            314 => 
            array (
                'PokemonHabilidadID' => 1315,
                'PokemonID' => 795,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            315 => 
            array (
                'PokemonHabilidadID' => 1316,
                'PokemonID' => 795,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            316 => 
            array (
                'PokemonHabilidadID' => 1317,
                'PokemonID' => 795,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            317 => 
            array (
                'PokemonHabilidadID' => 1318,
                'PokemonID' => 796,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            318 => 
            array (
                'PokemonHabilidadID' => 1319,
                'PokemonID' => 797,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            319 => 
            array (
                'PokemonHabilidadID' => 1320,
                'PokemonID' => 798,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            320 => 
            array (
                'PokemonHabilidadID' => 1321,
                'PokemonID' => 798,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            321 => 
            array (
                'PokemonHabilidadID' => 1322,
                'PokemonID' => 798,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            322 => 
            array (
                'PokemonHabilidadID' => 1323,
                'PokemonID' => 798,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            323 => 
            array (
                'PokemonHabilidadID' => 1324,
                'PokemonID' => 799,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            324 => 
            array (
                'PokemonHabilidadID' => 1325,
                'PokemonID' => 799,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            325 => 
            array (
                'PokemonHabilidadID' => 1326,
                'PokemonID' => 799,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            326 => 
            array (
                'PokemonHabilidadID' => 1327,
                'PokemonID' => 800,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            327 => 
            array (
                'PokemonHabilidadID' => 1328,
                'PokemonID' => 801,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            328 => 
            array (
                'PokemonHabilidadID' => 1329,
                'PokemonID' => 804,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            329 => 
            array (
                'PokemonHabilidadID' => 1330,
                'PokemonID' => 804,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            330 => 
            array (
                'PokemonHabilidadID' => 1331,
                'PokemonID' => 804,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            331 => 
            array (
                'PokemonHabilidadID' => 1332,
                'PokemonID' => 804,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            332 => 
            array (
                'PokemonHabilidadID' => 1333,
                'PokemonID' => 805,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            333 => 
            array (
                'PokemonHabilidadID' => 1334,
                'PokemonID' => 805,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            334 => 
            array (
                'PokemonHabilidadID' => 1335,
                'PokemonID' => 805,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            335 => 
            array (
                'PokemonHabilidadID' => 1336,
                'PokemonID' => 806,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            336 => 
            array (
                'PokemonHabilidadID' => 1337,
                'PokemonID' => 806,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            337 => 
            array (
                'PokemonHabilidadID' => 1338,
                'PokemonID' => 807,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            338 => 
            array (
                'PokemonHabilidadID' => 1339,
                'PokemonID' => 807,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            339 => 
            array (
                'PokemonHabilidadID' => 1340,
                'PokemonID' => 808,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            340 => 
            array (
                'PokemonHabilidadID' => 1341,
                'PokemonID' => 808,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            341 => 
            array (
                'PokemonHabilidadID' => 1342,
                'PokemonID' => 808,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            342 => 
            array (
                'PokemonHabilidadID' => 1343,
                'PokemonID' => 809,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            343 => 
            array (
                'PokemonHabilidadID' => 1344,
                'PokemonID' => 809,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            344 => 
            array (
                'PokemonHabilidadID' => 1345,
                'PokemonID' => 809,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            345 => 
            array (
                'PokemonHabilidadID' => 1346,
                'PokemonID' => 809,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            346 => 
            array (
                'PokemonHabilidadID' => 1347,
                'PokemonID' => 810,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            347 => 
            array (
                'PokemonHabilidadID' => 1348,
                'PokemonID' => 810,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            348 => 
            array (
                'PokemonHabilidadID' => 1349,
                'PokemonID' => 810,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            349 => 
            array (
                'PokemonHabilidadID' => 1350,
                'PokemonID' => 810,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            350 => 
            array (
                'PokemonHabilidadID' => 1351,
                'PokemonID' => 811,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            351 => 
            array (
                'PokemonHabilidadID' => 1352,
                'PokemonID' => 811,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            352 => 
            array (
                'PokemonHabilidadID' => 1353,
                'PokemonID' => 811,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            353 => 
            array (
                'PokemonHabilidadID' => 1354,
                'PokemonID' => 811,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            354 => 
            array (
                'PokemonHabilidadID' => 1355,
                'PokemonID' => 816,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            355 => 
            array (
                'PokemonHabilidadID' => 1356,
                'PokemonID' => 817,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            356 => 
            array (
                'PokemonHabilidadID' => 1357,
                'PokemonID' => 818,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            357 => 
            array (
                'PokemonHabilidadID' => 1358,
                'PokemonID' => 819,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            358 => 
            array (
                'PokemonHabilidadID' => 1359,
                'PokemonID' => 820,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            359 => 
            array (
                'PokemonHabilidadID' => 1360,
                'PokemonID' => 821,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            360 => 
            array (
                'PokemonHabilidadID' => 1361,
                'PokemonID' => 822,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            361 => 
            array (
                'PokemonHabilidadID' => 1362,
                'PokemonID' => 823,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            362 => 
            array (
                'PokemonHabilidadID' => 1363,
                'PokemonID' => 823,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            363 => 
            array (
                'PokemonHabilidadID' => 1364,
                'PokemonID' => 824,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            364 => 
            array (
                'PokemonHabilidadID' => 1365,
                'PokemonID' => 824,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            365 => 
            array (
                'PokemonHabilidadID' => 1366,
                'PokemonID' => 825,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            366 => 
            array (
                'PokemonHabilidadID' => 1367,
                'PokemonID' => 826,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            367 => 
            array (
                'PokemonHabilidadID' => 1368,
                'PokemonID' => 827,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            368 => 
            array (
                'PokemonHabilidadID' => 1369,
                'PokemonID' => 828,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            369 => 
            array (
                'PokemonHabilidadID' => 1370,
                'PokemonID' => 829,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            370 => 
            array (
                'PokemonHabilidadID' => 1371,
                'PokemonID' => 830,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            371 => 
            array (
                'PokemonHabilidadID' => 1372,
                'PokemonID' => 831,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            372 => 
            array (
                'PokemonHabilidadID' => 1373,
                'PokemonID' => 832,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            373 => 
            array (
                'PokemonHabilidadID' => 1374,
                'PokemonID' => 832,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            374 => 
            array (
                'PokemonHabilidadID' => 1375,
                'PokemonID' => 833,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            375 => 
            array (
                'PokemonHabilidadID' => 1376,
                'PokemonID' => 833,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            376 => 
            array (
                'PokemonHabilidadID' => 1377,
                'PokemonID' => 833,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            377 => 
            array (
                'PokemonHabilidadID' => 1378,
                'PokemonID' => 834,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            378 => 
            array (
                'PokemonHabilidadID' => 1379,
                'PokemonID' => 834,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            379 => 
            array (
                'PokemonHabilidadID' => 1380,
                'PokemonID' => 834,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            380 => 
            array (
                'PokemonHabilidadID' => 1381,
                'PokemonID' => 834,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            381 => 
            array (
                'PokemonHabilidadID' => 1382,
                'PokemonID' => 835,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            382 => 
            array (
                'PokemonHabilidadID' => 1383,
                'PokemonID' => 835,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            383 => 
            array (
                'PokemonHabilidadID' => 1384,
                'PokemonID' => 835,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            384 => 
            array (
                'PokemonHabilidadID' => 1385,
                'PokemonID' => 835,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            385 => 
            array (
                'PokemonHabilidadID' => 1386,
                'PokemonID' => 836,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:49',
                'updated_at' => '2023-07-16 13:27:49',
            ),
            386 => 
            array (
                'PokemonHabilidadID' => 1387,
                'PokemonID' => 837,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            387 => 
            array (
                'PokemonHabilidadID' => 1388,
                'PokemonID' => 838,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            388 => 
            array (
                'PokemonHabilidadID' => 1389,
                'PokemonID' => 839,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            389 => 
            array (
                'PokemonHabilidadID' => 1390,
                'PokemonID' => 840,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            390 => 
            array (
                'PokemonHabilidadID' => 1391,
                'PokemonID' => 840,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            391 => 
            array (
                'PokemonHabilidadID' => 1392,
                'PokemonID' => 841,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            392 => 
            array (
                'PokemonHabilidadID' => 1393,
                'PokemonID' => 841,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            393 => 
            array (
                'PokemonHabilidadID' => 1394,
                'PokemonID' => 842,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            394 => 
            array (
                'PokemonHabilidadID' => 1395,
                'PokemonID' => 842,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            395 => 
            array (
                'PokemonHabilidadID' => 1396,
                'PokemonID' => 843,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            396 => 
            array (
                'PokemonHabilidadID' => 1397,
                'PokemonID' => 843,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            397 => 
            array (
                'PokemonHabilidadID' => 1398,
                'PokemonID' => 844,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            398 => 
            array (
                'PokemonHabilidadID' => 1399,
                'PokemonID' => 844,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            399 => 
            array (
                'PokemonHabilidadID' => 1400,
                'PokemonID' => 845,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            400 => 
            array (
                'PokemonHabilidadID' => 1401,
                'PokemonID' => 845,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            401 => 
            array (
                'PokemonHabilidadID' => 1402,
                'PokemonID' => 846,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            402 => 
            array (
                'PokemonHabilidadID' => 1403,
                'PokemonID' => 846,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            403 => 
            array (
                'PokemonHabilidadID' => 1404,
                'PokemonID' => 847,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            404 => 
            array (
                'PokemonHabilidadID' => 1405,
                'PokemonID' => 848,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            405 => 
            array (
                'PokemonHabilidadID' => 1406,
                'PokemonID' => 849,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            406 => 
            array (
                'PokemonHabilidadID' => 1407,
                'PokemonID' => 850,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            407 => 
            array (
                'PokemonHabilidadID' => 1408,
                'PokemonID' => 851,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            408 => 
            array (
                'PokemonHabilidadID' => 1409,
                'PokemonID' => 851,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            409 => 
            array (
                'PokemonHabilidadID' => 1410,
                'PokemonID' => 852,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            410 => 
            array (
                'PokemonHabilidadID' => 1411,
                'PokemonID' => 852,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            411 => 
            array (
                'PokemonHabilidadID' => 1412,
                'PokemonID' => 853,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            412 => 
            array (
                'PokemonHabilidadID' => 1413,
                'PokemonID' => 854,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            413 => 
            array (
                'PokemonHabilidadID' => 1414,
                'PokemonID' => 855,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            414 => 
            array (
                'PokemonHabilidadID' => 1415,
                'PokemonID' => 858,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            415 => 
            array (
                'PokemonHabilidadID' => 1416,
                'PokemonID' => 859,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            416 => 
            array (
                'PokemonHabilidadID' => 1417,
                'PokemonID' => 860,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            417 => 
            array (
                'PokemonHabilidadID' => 1418,
                'PokemonID' => 860,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            418 => 
            array (
                'PokemonHabilidadID' => 1419,
                'PokemonID' => 861,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            419 => 
            array (
                'PokemonHabilidadID' => 1420,
                'PokemonID' => 861,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            420 => 
            array (
                'PokemonHabilidadID' => 1421,
                'PokemonID' => 862,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            421 => 
            array (
                'PokemonHabilidadID' => 1422,
                'PokemonID' => 862,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            422 => 
            array (
                'PokemonHabilidadID' => 1423,
                'PokemonID' => 862,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            423 => 
            array (
                'PokemonHabilidadID' => 1424,
                'PokemonID' => 862,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            424 => 
            array (
                'PokemonHabilidadID' => 1425,
                'PokemonID' => 863,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            425 => 
            array (
                'PokemonHabilidadID' => 1426,
                'PokemonID' => 863,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            426 => 
            array (
                'PokemonHabilidadID' => 1427,
                'PokemonID' => 863,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            427 => 
            array (
                'PokemonHabilidadID' => 1428,
                'PokemonID' => 863,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            428 => 
            array (
                'PokemonHabilidadID' => 1429,
                'PokemonID' => 864,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            429 => 
            array (
                'PokemonHabilidadID' => 1430,
                'PokemonID' => 864,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            430 => 
            array (
                'PokemonHabilidadID' => 1431,
                'PokemonID' => 864,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            431 => 
            array (
                'PokemonHabilidadID' => 1432,
                'PokemonID' => 865,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            432 => 
            array (
                'PokemonHabilidadID' => 1433,
                'PokemonID' => 865,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            433 => 
            array (
                'PokemonHabilidadID' => 1434,
                'PokemonID' => 865,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            434 => 
            array (
                'PokemonHabilidadID' => 1435,
                'PokemonID' => 866,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            435 => 
            array (
                'PokemonHabilidadID' => 1436,
                'PokemonID' => 866,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            436 => 
            array (
                'PokemonHabilidadID' => 1437,
                'PokemonID' => 867,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            437 => 
            array (
                'PokemonHabilidadID' => 1438,
                'PokemonID' => 867,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            438 => 
            array (
                'PokemonHabilidadID' => 1439,
                'PokemonID' => 868,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            439 => 
            array (
                'PokemonHabilidadID' => 1440,
                'PokemonID' => 868,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            440 => 
            array (
                'PokemonHabilidadID' => 1441,
                'PokemonID' => 868,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            441 => 
            array (
                'PokemonHabilidadID' => 1442,
                'PokemonID' => 868,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            442 => 
            array (
                'PokemonHabilidadID' => 1443,
                'PokemonID' => 869,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            443 => 
            array (
                'PokemonHabilidadID' => 1444,
                'PokemonID' => 869,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            444 => 
            array (
                'PokemonHabilidadID' => 1445,
                'PokemonID' => 869,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            445 => 
            array (
                'PokemonHabilidadID' => 1446,
                'PokemonID' => 870,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            446 => 
            array (
                'PokemonHabilidadID' => 1447,
                'PokemonID' => 870,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            447 => 
            array (
                'PokemonHabilidadID' => 1448,
                'PokemonID' => 870,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            448 => 
            array (
                'PokemonHabilidadID' => 1449,
                'PokemonID' => 871,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            449 => 
            array (
                'PokemonHabilidadID' => 1450,
                'PokemonID' => 871,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            450 => 
            array (
                'PokemonHabilidadID' => 1451,
                'PokemonID' => 871,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            451 => 
            array (
                'PokemonHabilidadID' => 1452,
                'PokemonID' => 871,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            452 => 
            array (
                'PokemonHabilidadID' => 1453,
                'PokemonID' => 872,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            453 => 
            array (
                'PokemonHabilidadID' => 1454,
                'PokemonID' => 872,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            454 => 
            array (
                'PokemonHabilidadID' => 1455,
                'PokemonID' => 872,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            455 => 
            array (
                'PokemonHabilidadID' => 1456,
                'PokemonID' => 873,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            456 => 
            array (
                'PokemonHabilidadID' => 1457,
                'PokemonID' => 873,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            457 => 
            array (
                'PokemonHabilidadID' => 1458,
                'PokemonID' => 873,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            458 => 
            array (
                'PokemonHabilidadID' => 1459,
                'PokemonID' => 874,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            459 => 
            array (
                'PokemonHabilidadID' => 1460,
                'PokemonID' => 874,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            460 => 
            array (
                'PokemonHabilidadID' => 1461,
                'PokemonID' => 874,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            461 => 
            array (
                'PokemonHabilidadID' => 1462,
                'PokemonID' => 875,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            462 => 
            array (
                'PokemonHabilidadID' => 1463,
                'PokemonID' => 875,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            463 => 
            array (
                'PokemonHabilidadID' => 1464,
                'PokemonID' => 875,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            464 => 
            array (
                'PokemonHabilidadID' => 1465,
                'PokemonID' => 876,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            465 => 
            array (
                'PokemonHabilidadID' => 1466,
                'PokemonID' => 876,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            466 => 
            array (
                'PokemonHabilidadID' => 1467,
                'PokemonID' => 876,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            467 => 
            array (
                'PokemonHabilidadID' => 1468,
                'PokemonID' => 876,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            468 => 
            array (
                'PokemonHabilidadID' => 1469,
                'PokemonID' => 877,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            469 => 
            array (
                'PokemonHabilidadID' => 1470,
                'PokemonID' => 877,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            470 => 
            array (
                'PokemonHabilidadID' => 1471,
                'PokemonID' => 877,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            471 => 
            array (
                'PokemonHabilidadID' => 1472,
                'PokemonID' => 877,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            472 => 
            array (
                'PokemonHabilidadID' => 1473,
                'PokemonID' => 878,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            473 => 
            array (
                'PokemonHabilidadID' => 1474,
                'PokemonID' => 878,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            474 => 
            array (
                'PokemonHabilidadID' => 1475,
                'PokemonID' => 878,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            475 => 
            array (
                'PokemonHabilidadID' => 1476,
                'PokemonID' => 878,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            476 => 
            array (
                'PokemonHabilidadID' => 1477,
                'PokemonID' => 879,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            477 => 
            array (
                'PokemonHabilidadID' => 1478,
                'PokemonID' => 879,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            478 => 
            array (
                'PokemonHabilidadID' => 1479,
                'PokemonID' => 880,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            479 => 
            array (
                'PokemonHabilidadID' => 1480,
                'PokemonID' => 880,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            480 => 
            array (
                'PokemonHabilidadID' => 1481,
                'PokemonID' => 881,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            481 => 
            array (
                'PokemonHabilidadID' => 1482,
                'PokemonID' => 881,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            482 => 
            array (
                'PokemonHabilidadID' => 1483,
                'PokemonID' => 881,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            483 => 
            array (
                'PokemonHabilidadID' => 1484,
                'PokemonID' => 881,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            484 => 
            array (
                'PokemonHabilidadID' => 1485,
                'PokemonID' => 882,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            485 => 
            array (
                'PokemonHabilidadID' => 1486,
                'PokemonID' => 882,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            486 => 
            array (
                'PokemonHabilidadID' => 1487,
                'PokemonID' => 882,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            487 => 
            array (
                'PokemonHabilidadID' => 1488,
                'PokemonID' => 882,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            488 => 
            array (
                'PokemonHabilidadID' => 1489,
                'PokemonID' => 883,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            489 => 
            array (
                'PokemonHabilidadID' => 1490,
                'PokemonID' => 883,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            490 => 
            array (
                'PokemonHabilidadID' => 1491,
                'PokemonID' => 883,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            491 => 
            array (
                'PokemonHabilidadID' => 1492,
                'PokemonID' => 883,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            492 => 
            array (
                'PokemonHabilidadID' => 1493,
                'PokemonID' => 884,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            493 => 
            array (
                'PokemonHabilidadID' => 1494,
                'PokemonID' => 885,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            494 => 
            array (
                'PokemonHabilidadID' => 1495,
                'PokemonID' => 886,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            495 => 
            array (
                'PokemonHabilidadID' => 1496,
                'PokemonID' => 887,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            496 => 
            array (
                'PokemonHabilidadID' => 1497,
                'PokemonID' => 887,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            497 => 
            array (
                'PokemonHabilidadID' => 1498,
                'PokemonID' => 887,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            498 => 
            array (
                'PokemonHabilidadID' => 1499,
                'PokemonID' => 887,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            499 => 
            array (
                'PokemonHabilidadID' => 1500,
                'PokemonID' => 887,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
        ));
        \DB::table('PokemonHabilidad')->insert(array (
            0 => 
            array (
                'PokemonHabilidadID' => 1501,
                'PokemonID' => 887,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            1 => 
            array (
                'PokemonHabilidadID' => 1502,
                'PokemonID' => 888,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            2 => 
            array (
                'PokemonHabilidadID' => 1503,
                'PokemonID' => 888,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            3 => 
            array (
                'PokemonHabilidadID' => 1504,
                'PokemonID' => 888,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            4 => 
            array (
                'PokemonHabilidadID' => 1505,
                'PokemonID' => 888,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            5 => 
            array (
                'PokemonHabilidadID' => 1506,
                'PokemonID' => 888,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            6 => 
            array (
                'PokemonHabilidadID' => 1507,
                'PokemonID' => 888,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            7 => 
            array (
                'PokemonHabilidadID' => 1508,
                'PokemonID' => 889,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            8 => 
            array (
                'PokemonHabilidadID' => 1509,
                'PokemonID' => 889,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            9 => 
            array (
                'PokemonHabilidadID' => 1510,
                'PokemonID' => 889,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            10 => 
            array (
                'PokemonHabilidadID' => 1511,
                'PokemonID' => 890,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            11 => 
            array (
                'PokemonHabilidadID' => 1512,
                'PokemonID' => 890,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            12 => 
            array (
                'PokemonHabilidadID' => 1513,
                'PokemonID' => 890,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            13 => 
            array (
                'PokemonHabilidadID' => 1514,
                'PokemonID' => 890,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            14 => 
            array (
                'PokemonHabilidadID' => 1515,
                'PokemonID' => 891,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            15 => 
            array (
                'PokemonHabilidadID' => 1516,
                'PokemonID' => 891,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            16 => 
            array (
                'PokemonHabilidadID' => 1517,
                'PokemonID' => 891,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            17 => 
            array (
                'PokemonHabilidadID' => 1518,
                'PokemonID' => 892,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            18 => 
            array (
                'PokemonHabilidadID' => 1519,
                'PokemonID' => 892,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            19 => 
            array (
                'PokemonHabilidadID' => 1520,
                'PokemonID' => 892,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            20 => 
            array (
                'PokemonHabilidadID' => 1521,
                'PokemonID' => 893,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            21 => 
            array (
                'PokemonHabilidadID' => 1522,
                'PokemonID' => 893,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            22 => 
            array (
                'PokemonHabilidadID' => 1523,
                'PokemonID' => 893,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            23 => 
            array (
                'PokemonHabilidadID' => 1524,
                'PokemonID' => 893,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            24 => 
            array (
                'PokemonHabilidadID' => 1525,
                'PokemonID' => 893,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            25 => 
            array (
                'PokemonHabilidadID' => 1526,
                'PokemonID' => 894,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            26 => 
            array (
                'PokemonHabilidadID' => 1527,
                'PokemonID' => 894,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            27 => 
            array (
                'PokemonHabilidadID' => 1528,
                'PokemonID' => 894,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            28 => 
            array (
                'PokemonHabilidadID' => 1529,
                'PokemonID' => 894,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            29 => 
            array (
                'PokemonHabilidadID' => 1530,
                'PokemonID' => 894,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            30 => 
            array (
                'PokemonHabilidadID' => 1531,
                'PokemonID' => 895,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            31 => 
            array (
                'PokemonHabilidadID' => 1532,
                'PokemonID' => 895,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            32 => 
            array (
                'PokemonHabilidadID' => 1533,
                'PokemonID' => 895,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            33 => 
            array (
                'PokemonHabilidadID' => 1534,
                'PokemonID' => 896,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            34 => 
            array (
                'PokemonHabilidadID' => 1535,
                'PokemonID' => 896,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            35 => 
            array (
                'PokemonHabilidadID' => 1536,
                'PokemonID' => 896,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            36 => 
            array (
                'PokemonHabilidadID' => 1537,
                'PokemonID' => 896,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            37 => 
            array (
                'PokemonHabilidadID' => 1538,
                'PokemonID' => 897,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            38 => 
            array (
                'PokemonHabilidadID' => 1539,
                'PokemonID' => 897,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            39 => 
            array (
                'PokemonHabilidadID' => 1540,
                'PokemonID' => 897,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            40 => 
            array (
                'PokemonHabilidadID' => 1541,
                'PokemonID' => 897,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            41 => 
            array (
                'PokemonHabilidadID' => 1542,
                'PokemonID' => 898,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            42 => 
            array (
                'PokemonHabilidadID' => 1543,
                'PokemonID' => 898,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            43 => 
            array (
                'PokemonHabilidadID' => 1544,
                'PokemonID' => 898,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            44 => 
            array (
                'PokemonHabilidadID' => 1545,
                'PokemonID' => 899,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            45 => 
            array (
                'PokemonHabilidadID' => 1546,
                'PokemonID' => 899,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            46 => 
            array (
                'PokemonHabilidadID' => 1547,
                'PokemonID' => 899,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            47 => 
            array (
                'PokemonHabilidadID' => 1548,
                'PokemonID' => 899,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            48 => 
            array (
                'PokemonHabilidadID' => 1549,
                'PokemonID' => 899,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            49 => 
            array (
                'PokemonHabilidadID' => 1550,
                'PokemonID' => 900,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            50 => 
            array (
                'PokemonHabilidadID' => 1551,
                'PokemonID' => 900,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            51 => 
            array (
                'PokemonHabilidadID' => 1552,
                'PokemonID' => 900,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            52 => 
            array (
                'PokemonHabilidadID' => 1553,
                'PokemonID' => 900,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            53 => 
            array (
                'PokemonHabilidadID' => 1554,
                'PokemonID' => 900,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            54 => 
            array (
                'PokemonHabilidadID' => 1555,
                'PokemonID' => 901,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            55 => 
            array (
                'PokemonHabilidadID' => 1556,
                'PokemonID' => 901,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            56 => 
            array (
                'PokemonHabilidadID' => 1557,
                'PokemonID' => 901,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            57 => 
            array (
                'PokemonHabilidadID' => 1558,
                'PokemonID' => 901,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            58 => 
            array (
                'PokemonHabilidadID' => 1559,
                'PokemonID' => 901,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            59 => 
            array (
                'PokemonHabilidadID' => 1560,
                'PokemonID' => 902,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            60 => 
            array (
                'PokemonHabilidadID' => 1561,
                'PokemonID' => 902,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            61 => 
            array (
                'PokemonHabilidadID' => 1562,
                'PokemonID' => 902,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            62 => 
            array (
                'PokemonHabilidadID' => 1563,
                'PokemonID' => 902,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            63 => 
            array (
                'PokemonHabilidadID' => 1564,
                'PokemonID' => 902,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            64 => 
            array (
                'PokemonHabilidadID' => 1565,
                'PokemonID' => 903,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            65 => 
            array (
                'PokemonHabilidadID' => 1566,
                'PokemonID' => 903,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            66 => 
            array (
                'PokemonHabilidadID' => 1567,
                'PokemonID' => 903,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            67 => 
            array (
                'PokemonHabilidadID' => 1568,
                'PokemonID' => 903,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            68 => 
            array (
                'PokemonHabilidadID' => 1569,
                'PokemonID' => 904,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            69 => 
            array (
                'PokemonHabilidadID' => 1570,
                'PokemonID' => 904,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            70 => 
            array (
                'PokemonHabilidadID' => 1571,
                'PokemonID' => 904,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            71 => 
            array (
                'PokemonHabilidadID' => 1572,
                'PokemonID' => 904,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            72 => 
            array (
                'PokemonHabilidadID' => 1573,
                'PokemonID' => 905,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            73 => 
            array (
                'PokemonHabilidadID' => 1574,
                'PokemonID' => 905,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            74 => 
            array (
                'PokemonHabilidadID' => 1575,
                'PokemonID' => 905,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            75 => 
            array (
                'PokemonHabilidadID' => 1576,
                'PokemonID' => 906,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            76 => 
            array (
                'PokemonHabilidadID' => 1577,
                'PokemonID' => 906,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            77 => 
            array (
                'PokemonHabilidadID' => 1578,
                'PokemonID' => 906,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            78 => 
            array (
                'PokemonHabilidadID' => 1579,
                'PokemonID' => 907,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            79 => 
            array (
                'PokemonHabilidadID' => 1580,
                'PokemonID' => 907,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            80 => 
            array (
                'PokemonHabilidadID' => 1581,
                'PokemonID' => 907,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            81 => 
            array (
                'PokemonHabilidadID' => 1582,
                'PokemonID' => 908,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            82 => 
            array (
                'PokemonHabilidadID' => 1583,
                'PokemonID' => 908,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            83 => 
            array (
                'PokemonHabilidadID' => 1584,
                'PokemonID' => 908,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            84 => 
            array (
                'PokemonHabilidadID' => 1585,
                'PokemonID' => 908,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            85 => 
            array (
                'PokemonHabilidadID' => 1586,
                'PokemonID' => 909,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            86 => 
            array (
                'PokemonHabilidadID' => 1587,
                'PokemonID' => 909,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            87 => 
            array (
                'PokemonHabilidadID' => 1588,
                'PokemonID' => 909,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            88 => 
            array (
                'PokemonHabilidadID' => 1589,
                'PokemonID' => 909,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            89 => 
            array (
                'PokemonHabilidadID' => 1590,
                'PokemonID' => 910,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            90 => 
            array (
                'PokemonHabilidadID' => 1591,
                'PokemonID' => 910,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            91 => 
            array (
                'PokemonHabilidadID' => 1592,
                'PokemonID' => 910,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            92 => 
            array (
                'PokemonHabilidadID' => 1593,
                'PokemonID' => 910,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            93 => 
            array (
                'PokemonHabilidadID' => 1594,
                'PokemonID' => 911,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            94 => 
            array (
                'PokemonHabilidadID' => 1595,
                'PokemonID' => 911,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            95 => 
            array (
                'PokemonHabilidadID' => 1596,
                'PokemonID' => 911,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            96 => 
            array (
                'PokemonHabilidadID' => 1597,
                'PokemonID' => 911,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            97 => 
            array (
                'PokemonHabilidadID' => 1598,
                'PokemonID' => 912,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            98 => 
            array (
                'PokemonHabilidadID' => 1599,
                'PokemonID' => 912,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            99 => 
            array (
                'PokemonHabilidadID' => 1600,
                'PokemonID' => 912,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            100 => 
            array (
                'PokemonHabilidadID' => 1601,
                'PokemonID' => 912,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            101 => 
            array (
                'PokemonHabilidadID' => 1602,
                'PokemonID' => 913,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            102 => 
            array (
                'PokemonHabilidadID' => 1603,
                'PokemonID' => 913,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            103 => 
            array (
                'PokemonHabilidadID' => 1604,
                'PokemonID' => 914,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            104 => 
            array (
                'PokemonHabilidadID' => 1605,
                'PokemonID' => 914,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            105 => 
            array (
                'PokemonHabilidadID' => 1606,
                'PokemonID' => 915,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            106 => 
            array (
                'PokemonHabilidadID' => 1607,
                'PokemonID' => 915,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            107 => 
            array (
                'PokemonHabilidadID' => 1608,
                'PokemonID' => 915,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            108 => 
            array (
                'PokemonHabilidadID' => 1609,
                'PokemonID' => 916,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            109 => 
            array (
                'PokemonHabilidadID' => 1610,
                'PokemonID' => 916,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            110 => 
            array (
                'PokemonHabilidadID' => 1611,
                'PokemonID' => 916,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            111 => 
            array (
                'PokemonHabilidadID' => 1612,
                'PokemonID' => 917,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            112 => 
            array (
                'PokemonHabilidadID' => 1613,
                'PokemonID' => 917,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            113 => 
            array (
                'PokemonHabilidadID' => 1614,
                'PokemonID' => 917,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            114 => 
            array (
                'PokemonHabilidadID' => 1615,
                'PokemonID' => 917,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            115 => 
            array (
                'PokemonHabilidadID' => 1616,
                'PokemonID' => 918,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            116 => 
            array (
                'PokemonHabilidadID' => 1617,
                'PokemonID' => 918,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            117 => 
            array (
                'PokemonHabilidadID' => 1618,
                'PokemonID' => 918,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            118 => 
            array (
                'PokemonHabilidadID' => 1619,
                'PokemonID' => 918,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            119 => 
            array (
                'PokemonHabilidadID' => 1620,
                'PokemonID' => 918,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            120 => 
            array (
                'PokemonHabilidadID' => 1621,
                'PokemonID' => 919,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            121 => 
            array (
                'PokemonHabilidadID' => 1622,
                'PokemonID' => 919,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            122 => 
            array (
                'PokemonHabilidadID' => 1623,
                'PokemonID' => 919,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            123 => 
            array (
                'PokemonHabilidadID' => 1624,
                'PokemonID' => 920,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            124 => 
            array (
                'PokemonHabilidadID' => 1625,
                'PokemonID' => 920,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            125 => 
            array (
                'PokemonHabilidadID' => 1626,
                'PokemonID' => 920,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            126 => 
            array (
                'PokemonHabilidadID' => 1627,
                'PokemonID' => 921,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            127 => 
            array (
                'PokemonHabilidadID' => 1628,
                'PokemonID' => 921,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            128 => 
            array (
                'PokemonHabilidadID' => 1629,
                'PokemonID' => 921,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            129 => 
            array (
                'PokemonHabilidadID' => 1630,
                'PokemonID' => 921,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            130 => 
            array (
                'PokemonHabilidadID' => 1631,
                'PokemonID' => 922,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            131 => 
            array (
                'PokemonHabilidadID' => 1632,
                'PokemonID' => 922,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            132 => 
            array (
                'PokemonHabilidadID' => 1633,
                'PokemonID' => 922,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            133 => 
            array (
                'PokemonHabilidadID' => 1634,
                'PokemonID' => 922,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            134 => 
            array (
                'PokemonHabilidadID' => 1635,
                'PokemonID' => 922,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            135 => 
            array (
                'PokemonHabilidadID' => 1636,
                'PokemonID' => 923,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            136 => 
            array (
                'PokemonHabilidadID' => 1637,
                'PokemonID' => 923,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            137 => 
            array (
                'PokemonHabilidadID' => 1638,
                'PokemonID' => 923,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            138 => 
            array (
                'PokemonHabilidadID' => 1639,
                'PokemonID' => 923,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            139 => 
            array (
                'PokemonHabilidadID' => 1640,
                'PokemonID' => 923,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            140 => 
            array (
                'PokemonHabilidadID' => 1641,
                'PokemonID' => 924,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            141 => 
            array (
                'PokemonHabilidadID' => 1642,
                'PokemonID' => 924,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            142 => 
            array (
                'PokemonHabilidadID' => 1643,
                'PokemonID' => 924,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            143 => 
            array (
                'PokemonHabilidadID' => 1644,
                'PokemonID' => 924,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            144 => 
            array (
                'PokemonHabilidadID' => 1645,
                'PokemonID' => 924,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            145 => 
            array (
                'PokemonHabilidadID' => 1646,
                'PokemonID' => 925,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            146 => 
            array (
                'PokemonHabilidadID' => 1647,
                'PokemonID' => 925,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            147 => 
            array (
                'PokemonHabilidadID' => 1648,
                'PokemonID' => 925,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            148 => 
            array (
                'PokemonHabilidadID' => 1649,
                'PokemonID' => 925,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            149 => 
            array (
                'PokemonHabilidadID' => 1650,
                'PokemonID' => 925,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            150 => 
            array (
                'PokemonHabilidadID' => 1651,
                'PokemonID' => 926,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            151 => 
            array (
                'PokemonHabilidadID' => 1652,
                'PokemonID' => 926,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            152 => 
            array (
                'PokemonHabilidadID' => 1653,
                'PokemonID' => 926,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            153 => 
            array (
                'PokemonHabilidadID' => 1654,
                'PokemonID' => 926,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            154 => 
            array (
                'PokemonHabilidadID' => 1655,
                'PokemonID' => 926,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            155 => 
            array (
                'PokemonHabilidadID' => 1656,
                'PokemonID' => 927,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            156 => 
            array (
                'PokemonHabilidadID' => 1657,
                'PokemonID' => 927,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            157 => 
            array (
                'PokemonHabilidadID' => 1658,
                'PokemonID' => 927,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            158 => 
            array (
                'PokemonHabilidadID' => 1659,
                'PokemonID' => 927,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            159 => 
            array (
                'PokemonHabilidadID' => 1660,
                'PokemonID' => 928,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            160 => 
            array (
                'PokemonHabilidadID' => 1661,
                'PokemonID' => 928,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            161 => 
            array (
                'PokemonHabilidadID' => 1662,
                'PokemonID' => 928,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            162 => 
            array (
                'PokemonHabilidadID' => 1663,
                'PokemonID' => 929,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            163 => 
            array (
                'PokemonHabilidadID' => 1664,
                'PokemonID' => 929,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            164 => 
            array (
                'PokemonHabilidadID' => 1665,
                'PokemonID' => 929,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            165 => 
            array (
                'PokemonHabilidadID' => 1666,
                'PokemonID' => 930,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            166 => 
            array (
                'PokemonHabilidadID' => 1667,
                'PokemonID' => 930,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            167 => 
            array (
                'PokemonHabilidadID' => 1668,
                'PokemonID' => 931,
                'HabilidadID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            168 => 
            array (
                'PokemonHabilidadID' => 1669,
                'PokemonID' => 931,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            169 => 
            array (
                'PokemonHabilidadID' => 1670,
                'PokemonID' => 931,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            170 => 
            array (
                'PokemonHabilidadID' => 1671,
                'PokemonID' => 931,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            171 => 
            array (
                'PokemonHabilidadID' => 1672,
                'PokemonID' => 932,
                'HabilidadID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            172 => 
            array (
                'PokemonHabilidadID' => 1673,
                'PokemonID' => 932,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            173 => 
            array (
                'PokemonHabilidadID' => 1674,
                'PokemonID' => 932,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            174 => 
            array (
                'PokemonHabilidadID' => 1675,
                'PokemonID' => 932,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            175 => 
            array (
                'PokemonHabilidadID' => 1676,
                'PokemonID' => 933,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            176 => 
            array (
                'PokemonHabilidadID' => 1677,
                'PokemonID' => 933,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            177 => 
            array (
                'PokemonHabilidadID' => 1678,
                'PokemonID' => 934,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            178 => 
            array (
                'PokemonHabilidadID' => 1679,
                'PokemonID' => 934,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            179 => 
            array (
                'PokemonHabilidadID' => 1680,
                'PokemonID' => 934,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            180 => 
            array (
                'PokemonHabilidadID' => 1681,
                'PokemonID' => 935,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            181 => 
            array (
                'PokemonHabilidadID' => 1682,
                'PokemonID' => 935,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            182 => 
            array (
                'PokemonHabilidadID' => 1683,
                'PokemonID' => 935,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            183 => 
            array (
                'PokemonHabilidadID' => 1684,
                'PokemonID' => 936,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            184 => 
            array (
                'PokemonHabilidadID' => 1685,
                'PokemonID' => 936,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            185 => 
            array (
                'PokemonHabilidadID' => 1686,
                'PokemonID' => 936,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            186 => 
            array (
                'PokemonHabilidadID' => 1687,
                'PokemonID' => 937,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            187 => 
            array (
                'PokemonHabilidadID' => 1688,
                'PokemonID' => 937,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            188 => 
            array (
                'PokemonHabilidadID' => 1689,
                'PokemonID' => 937,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            189 => 
            array (
                'PokemonHabilidadID' => 1690,
                'PokemonID' => 937,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            190 => 
            array (
                'PokemonHabilidadID' => 1691,
                'PokemonID' => 938,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            191 => 
            array (
                'PokemonHabilidadID' => 1692,
                'PokemonID' => 938,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            192 => 
            array (
                'PokemonHabilidadID' => 1693,
                'PokemonID' => 938,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            193 => 
            array (
                'PokemonHabilidadID' => 1694,
                'PokemonID' => 938,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            194 => 
            array (
                'PokemonHabilidadID' => 1695,
                'PokemonID' => 939,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            195 => 
            array (
                'PokemonHabilidadID' => 1696,
                'PokemonID' => 939,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            196 => 
            array (
                'PokemonHabilidadID' => 1697,
                'PokemonID' => 939,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            197 => 
            array (
                'PokemonHabilidadID' => 1698,
                'PokemonID' => 939,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            198 => 
            array (
                'PokemonHabilidadID' => 1699,
                'PokemonID' => 940,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            199 => 
            array (
                'PokemonHabilidadID' => 1700,
                'PokemonID' => 940,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            200 => 
            array (
                'PokemonHabilidadID' => 1701,
                'PokemonID' => 941,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            201 => 
            array (
                'PokemonHabilidadID' => 1702,
                'PokemonID' => 941,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            202 => 
            array (
                'PokemonHabilidadID' => 1703,
                'PokemonID' => 941,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            203 => 
            array (
                'PokemonHabilidadID' => 1704,
                'PokemonID' => 942,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            204 => 
            array (
                'PokemonHabilidadID' => 1705,
                'PokemonID' => 942,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            205 => 
            array (
                'PokemonHabilidadID' => 1706,
                'PokemonID' => 942,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            206 => 
            array (
                'PokemonHabilidadID' => 1707,
                'PokemonID' => 943,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            207 => 
            array (
                'PokemonHabilidadID' => 1708,
                'PokemonID' => 943,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            208 => 
            array (
                'PokemonHabilidadID' => 1709,
                'PokemonID' => 943,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            209 => 
            array (
                'PokemonHabilidadID' => 1710,
                'PokemonID' => 943,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            210 => 
            array (
                'PokemonHabilidadID' => 1711,
                'PokemonID' => 944,
                'HabilidadID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            211 => 
            array (
                'PokemonHabilidadID' => 1712,
                'PokemonID' => 944,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            212 => 
            array (
                'PokemonHabilidadID' => 1713,
                'PokemonID' => 944,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            213 => 
            array (
                'PokemonHabilidadID' => 1714,
                'PokemonID' => 944,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            214 => 
            array (
                'PokemonHabilidadID' => 1715,
                'PokemonID' => 944,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            215 => 
            array (
                'PokemonHabilidadID' => 1716,
                'PokemonID' => 945,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            216 => 
            array (
                'PokemonHabilidadID' => 1717,
                'PokemonID' => 945,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            217 => 
            array (
                'PokemonHabilidadID' => 1718,
                'PokemonID' => 945,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            218 => 
            array (
                'PokemonHabilidadID' => 1719,
                'PokemonID' => 945,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            219 => 
            array (
                'PokemonHabilidadID' => 1720,
                'PokemonID' => 946,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            220 => 
            array (
                'PokemonHabilidadID' => 1721,
                'PokemonID' => 946,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            221 => 
            array (
                'PokemonHabilidadID' => 1722,
                'PokemonID' => 946,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            222 => 
            array (
                'PokemonHabilidadID' => 1723,
                'PokemonID' => 947,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            223 => 
            array (
                'PokemonHabilidadID' => 1724,
                'PokemonID' => 947,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            224 => 
            array (
                'PokemonHabilidadID' => 1725,
                'PokemonID' => 947,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            225 => 
            array (
                'PokemonHabilidadID' => 1726,
                'PokemonID' => 947,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            226 => 
            array (
                'PokemonHabilidadID' => 1727,
                'PokemonID' => 948,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            227 => 
            array (
                'PokemonHabilidadID' => 1728,
                'PokemonID' => 948,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            228 => 
            array (
                'PokemonHabilidadID' => 1729,
                'PokemonID' => 948,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            229 => 
            array (
                'PokemonHabilidadID' => 1730,
                'PokemonID' => 948,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            230 => 
            array (
                'PokemonHabilidadID' => 1731,
                'PokemonID' => 949,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            231 => 
            array (
                'PokemonHabilidadID' => 1732,
                'PokemonID' => 949,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            232 => 
            array (
                'PokemonHabilidadID' => 1733,
                'PokemonID' => 949,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            233 => 
            array (
                'PokemonHabilidadID' => 1734,
                'PokemonID' => 949,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            234 => 
            array (
                'PokemonHabilidadID' => 1735,
                'PokemonID' => 950,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            235 => 
            array (
                'PokemonHabilidadID' => 1736,
                'PokemonID' => 950,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            236 => 
            array (
                'PokemonHabilidadID' => 1737,
                'PokemonID' => 950,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            237 => 
            array (
                'PokemonHabilidadID' => 1738,
                'PokemonID' => 950,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            238 => 
            array (
                'PokemonHabilidadID' => 1739,
                'PokemonID' => 951,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            239 => 
            array (
                'PokemonHabilidadID' => 1740,
                'PokemonID' => 951,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            240 => 
            array (
                'PokemonHabilidadID' => 1741,
                'PokemonID' => 951,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            241 => 
            array (
                'PokemonHabilidadID' => 1742,
                'PokemonID' => 951,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            242 => 
            array (
                'PokemonHabilidadID' => 1743,
                'PokemonID' => 952,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            243 => 
            array (
                'PokemonHabilidadID' => 1744,
                'PokemonID' => 952,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            244 => 
            array (
                'PokemonHabilidadID' => 1745,
                'PokemonID' => 952,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            245 => 
            array (
                'PokemonHabilidadID' => 1746,
                'PokemonID' => 953,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            246 => 
            array (
                'PokemonHabilidadID' => 1747,
                'PokemonID' => 953,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            247 => 
            array (
                'PokemonHabilidadID' => 1748,
                'PokemonID' => 953,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            248 => 
            array (
                'PokemonHabilidadID' => 1749,
                'PokemonID' => 953,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            249 => 
            array (
                'PokemonHabilidadID' => 1750,
                'PokemonID' => 954,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            250 => 
            array (
                'PokemonHabilidadID' => 1751,
                'PokemonID' => 954,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            251 => 
            array (
                'PokemonHabilidadID' => 1752,
                'PokemonID' => 954,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            252 => 
            array (
                'PokemonHabilidadID' => 1753,
                'PokemonID' => 954,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            253 => 
            array (
                'PokemonHabilidadID' => 1754,
                'PokemonID' => 955,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            254 => 
            array (
                'PokemonHabilidadID' => 1755,
                'PokemonID' => 955,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            255 => 
            array (
                'PokemonHabilidadID' => 1756,
                'PokemonID' => 955,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            256 => 
            array (
                'PokemonHabilidadID' => 1757,
                'PokemonID' => 955,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            257 => 
            array (
                'PokemonHabilidadID' => 1758,
                'PokemonID' => 956,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            258 => 
            array (
                'PokemonHabilidadID' => 1759,
                'PokemonID' => 956,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            259 => 
            array (
                'PokemonHabilidadID' => 1760,
                'PokemonID' => 956,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            260 => 
            array (
                'PokemonHabilidadID' => 1761,
                'PokemonID' => 956,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            261 => 
            array (
                'PokemonHabilidadID' => 1762,
                'PokemonID' => 957,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            262 => 
            array (
                'PokemonHabilidadID' => 1763,
                'PokemonID' => 957,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            263 => 
            array (
                'PokemonHabilidadID' => 1764,
                'PokemonID' => 957,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            264 => 
            array (
                'PokemonHabilidadID' => 1765,
                'PokemonID' => 957,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            265 => 
            array (
                'PokemonHabilidadID' => 1766,
                'PokemonID' => 957,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            266 => 
            array (
                'PokemonHabilidadID' => 1767,
                'PokemonID' => 958,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            267 => 
            array (
                'PokemonHabilidadID' => 1768,
                'PokemonID' => 958,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            268 => 
            array (
                'PokemonHabilidadID' => 1769,
                'PokemonID' => 958,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            269 => 
            array (
                'PokemonHabilidadID' => 1770,
                'PokemonID' => 958,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            270 => 
            array (
                'PokemonHabilidadID' => 1771,
                'PokemonID' => 959,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            271 => 
            array (
                'PokemonHabilidadID' => 1772,
                'PokemonID' => 959,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            272 => 
            array (
                'PokemonHabilidadID' => 1773,
                'PokemonID' => 959,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            273 => 
            array (
                'PokemonHabilidadID' => 1774,
                'PokemonID' => 959,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            274 => 
            array (
                'PokemonHabilidadID' => 1775,
                'PokemonID' => 960,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            275 => 
            array (
                'PokemonHabilidadID' => 1776,
                'PokemonID' => 960,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            276 => 
            array (
                'PokemonHabilidadID' => 1777,
                'PokemonID' => 960,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            277 => 
            array (
                'PokemonHabilidadID' => 1778,
                'PokemonID' => 960,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            278 => 
            array (
                'PokemonHabilidadID' => 1779,
                'PokemonID' => 961,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            279 => 
            array (
                'PokemonHabilidadID' => 1780,
                'PokemonID' => 961,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            280 => 
            array (
                'PokemonHabilidadID' => 1781,
                'PokemonID' => 961,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            281 => 
            array (
                'PokemonHabilidadID' => 1782,
                'PokemonID' => 961,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            282 => 
            array (
                'PokemonHabilidadID' => 1783,
                'PokemonID' => 962,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            283 => 
            array (
                'PokemonHabilidadID' => 1784,
                'PokemonID' => 962,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            284 => 
            array (
                'PokemonHabilidadID' => 1785,
                'PokemonID' => 962,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            285 => 
            array (
                'PokemonHabilidadID' => 1786,
                'PokemonID' => 962,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            286 => 
            array (
                'PokemonHabilidadID' => 1787,
                'PokemonID' => 963,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            287 => 
            array (
                'PokemonHabilidadID' => 1788,
                'PokemonID' => 963,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            288 => 
            array (
                'PokemonHabilidadID' => 1789,
                'PokemonID' => 963,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            289 => 
            array (
                'PokemonHabilidadID' => 1790,
                'PokemonID' => 963,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            290 => 
            array (
                'PokemonHabilidadID' => 1791,
                'PokemonID' => 963,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            291 => 
            array (
                'PokemonHabilidadID' => 1792,
                'PokemonID' => 963,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            292 => 
            array (
                'PokemonHabilidadID' => 1793,
                'PokemonID' => 964,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            293 => 
            array (
                'PokemonHabilidadID' => 1794,
                'PokemonID' => 964,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            294 => 
            array (
                'PokemonHabilidadID' => 1795,
                'PokemonID' => 964,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            295 => 
            array (
                'PokemonHabilidadID' => 1796,
                'PokemonID' => 964,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            296 => 
            array (
                'PokemonHabilidadID' => 1797,
                'PokemonID' => 964,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            297 => 
            array (
                'PokemonHabilidadID' => 1798,
                'PokemonID' => 964,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            298 => 
            array (
                'PokemonHabilidadID' => 1799,
                'PokemonID' => 965,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            299 => 
            array (
                'PokemonHabilidadID' => 1800,
                'PokemonID' => 966,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            300 => 
            array (
                'PokemonHabilidadID' => 1801,
                'PokemonID' => 966,
                'HabilidadID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            301 => 
            array (
                'PokemonHabilidadID' => 1802,
                'PokemonID' => 966,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            302 => 
            array (
                'PokemonHabilidadID' => 1803,
                'PokemonID' => 967,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            303 => 
            array (
                'PokemonHabilidadID' => 1804,
                'PokemonID' => 967,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            304 => 
            array (
                'PokemonHabilidadID' => 1805,
                'PokemonID' => 967,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            305 => 
            array (
                'PokemonHabilidadID' => 1806,
                'PokemonID' => 967,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            306 => 
            array (
                'PokemonHabilidadID' => 1807,
                'PokemonID' => 967,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            307 => 
            array (
                'PokemonHabilidadID' => 1808,
                'PokemonID' => 967,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            308 => 
            array (
                'PokemonHabilidadID' => 1809,
                'PokemonID' => 967,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            309 => 
            array (
                'PokemonHabilidadID' => 1810,
                'PokemonID' => 968,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            310 => 
            array (
                'PokemonHabilidadID' => 1811,
                'PokemonID' => 969,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            311 => 
            array (
                'PokemonHabilidadID' => 1812,
                'PokemonID' => 970,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            312 => 
            array (
                'PokemonHabilidadID' => 1813,
                'PokemonID' => 971,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            313 => 
            array (
                'PokemonHabilidadID' => 1814,
                'PokemonID' => 971,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            314 => 
            array (
                'PokemonHabilidadID' => 1815,
                'PokemonID' => 971,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            315 => 
            array (
                'PokemonHabilidadID' => 1816,
                'PokemonID' => 972,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            316 => 
            array (
                'PokemonHabilidadID' => 1817,
                'PokemonID' => 972,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            317 => 
            array (
                'PokemonHabilidadID' => 1818,
                'PokemonID' => 973,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            318 => 
            array (
                'PokemonHabilidadID' => 1819,
                'PokemonID' => 973,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            319 => 
            array (
                'PokemonHabilidadID' => 1820,
                'PokemonID' => 974,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            320 => 
            array (
                'PokemonHabilidadID' => 1821,
                'PokemonID' => 975,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            321 => 
            array (
                'PokemonHabilidadID' => 1822,
                'PokemonID' => 975,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            322 => 
            array (
                'PokemonHabilidadID' => 1823,
                'PokemonID' => 976,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            323 => 
            array (
                'PokemonHabilidadID' => 1824,
                'PokemonID' => 977,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            324 => 
            array (
                'PokemonHabilidadID' => 1825,
                'PokemonID' => 977,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            325 => 
            array (
                'PokemonHabilidadID' => 1826,
                'PokemonID' => 978,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            326 => 
            array (
                'PokemonHabilidadID' => 1827,
                'PokemonID' => 978,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            327 => 
            array (
                'PokemonHabilidadID' => 1828,
                'PokemonID' => 979,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            328 => 
            array (
                'PokemonHabilidadID' => 1829,
                'PokemonID' => 980,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            329 => 
            array (
                'PokemonHabilidadID' => 1830,
                'PokemonID' => 981,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            330 => 
            array (
                'PokemonHabilidadID' => 1831,
                'PokemonID' => 982,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            331 => 
            array (
                'PokemonHabilidadID' => 1832,
                'PokemonID' => 982,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            332 => 
            array (
                'PokemonHabilidadID' => 1833,
                'PokemonID' => 982,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            333 => 
            array (
                'PokemonHabilidadID' => 1834,
                'PokemonID' => 983,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            334 => 
            array (
                'PokemonHabilidadID' => 1835,
                'PokemonID' => 983,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            335 => 
            array (
                'PokemonHabilidadID' => 1836,
                'PokemonID' => 983,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            336 => 
            array (
                'PokemonHabilidadID' => 1837,
                'PokemonID' => 984,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            337 => 
            array (
                'PokemonHabilidadID' => 1838,
                'PokemonID' => 984,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            338 => 
            array (
                'PokemonHabilidadID' => 1839,
                'PokemonID' => 984,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            339 => 
            array (
                'PokemonHabilidadID' => 1840,
                'PokemonID' => 985,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            340 => 
            array (
                'PokemonHabilidadID' => 1841,
                'PokemonID' => 986,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            341 => 
            array (
                'PokemonHabilidadID' => 1842,
                'PokemonID' => 986,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            342 => 
            array (
                'PokemonHabilidadID' => 1843,
                'PokemonID' => 986,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            343 => 
            array (
                'PokemonHabilidadID' => 1844,
                'PokemonID' => 986,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            344 => 
            array (
                'PokemonHabilidadID' => 1845,
                'PokemonID' => 987,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            345 => 
            array (
                'PokemonHabilidadID' => 1846,
                'PokemonID' => 987,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            346 => 
            array (
                'PokemonHabilidadID' => 1847,
                'PokemonID' => 988,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            347 => 
            array (
                'PokemonHabilidadID' => 1848,
                'PokemonID' => 988,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            348 => 
            array (
                'PokemonHabilidadID' => 1849,
                'PokemonID' => 989,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            349 => 
            array (
                'PokemonHabilidadID' => 1850,
                'PokemonID' => 989,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            350 => 
            array (
                'PokemonHabilidadID' => 1851,
                'PokemonID' => 990,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            351 => 
            array (
                'PokemonHabilidadID' => 1852,
                'PokemonID' => 990,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            352 => 
            array (
                'PokemonHabilidadID' => 1853,
                'PokemonID' => 991,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            353 => 
            array (
                'PokemonHabilidadID' => 1854,
                'PokemonID' => 991,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            354 => 
            array (
                'PokemonHabilidadID' => 1855,
                'PokemonID' => 991,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            355 => 
            array (
                'PokemonHabilidadID' => 1856,
                'PokemonID' => 992,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            356 => 
            array (
                'PokemonHabilidadID' => 1857,
                'PokemonID' => 992,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            357 => 
            array (
                'PokemonHabilidadID' => 1858,
                'PokemonID' => 992,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            358 => 
            array (
                'PokemonHabilidadID' => 1859,
                'PokemonID' => 993,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            359 => 
            array (
                'PokemonHabilidadID' => 1860,
                'PokemonID' => 993,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            360 => 
            array (
                'PokemonHabilidadID' => 1861,
                'PokemonID' => 993,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            361 => 
            array (
                'PokemonHabilidadID' => 1862,
                'PokemonID' => 994,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            362 => 
            array (
                'PokemonHabilidadID' => 1863,
                'PokemonID' => 994,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            363 => 
            array (
                'PokemonHabilidadID' => 1864,
                'PokemonID' => 994,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            364 => 
            array (
                'PokemonHabilidadID' => 1865,
                'PokemonID' => 994,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            365 => 
            array (
                'PokemonHabilidadID' => 1866,
                'PokemonID' => 994,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            366 => 
            array (
                'PokemonHabilidadID' => 1867,
                'PokemonID' => 995,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            367 => 
            array (
                'PokemonHabilidadID' => 1868,
                'PokemonID' => 995,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            368 => 
            array (
                'PokemonHabilidadID' => 1869,
                'PokemonID' => 996,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            369 => 
            array (
                'PokemonHabilidadID' => 1870,
                'PokemonID' => 996,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            370 => 
            array (
                'PokemonHabilidadID' => 1871,
                'PokemonID' => 997,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            371 => 
            array (
                'PokemonHabilidadID' => 1872,
                'PokemonID' => 997,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            372 => 
            array (
                'PokemonHabilidadID' => 1873,
                'PokemonID' => 998,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            373 => 
            array (
                'PokemonHabilidadID' => 1874,
                'PokemonID' => 998,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            374 => 
            array (
                'PokemonHabilidadID' => 1875,
                'PokemonID' => 999,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            375 => 
            array (
                'PokemonHabilidadID' => 1876,
                'PokemonID' => 999,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            376 => 
            array (
                'PokemonHabilidadID' => 1877,
                'PokemonID' => 999,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            377 => 
            array (
                'PokemonHabilidadID' => 1878,
                'PokemonID' => 1000,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            378 => 
            array (
                'PokemonHabilidadID' => 1879,
                'PokemonID' => 1000,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            379 => 
            array (
                'PokemonHabilidadID' => 1880,
                'PokemonID' => 1000,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            380 => 
            array (
                'PokemonHabilidadID' => 1881,
                'PokemonID' => 1001,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            381 => 
            array (
                'PokemonHabilidadID' => 1882,
                'PokemonID' => 1001,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            382 => 
            array (
                'PokemonHabilidadID' => 1883,
                'PokemonID' => 1001,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            383 => 
            array (
                'PokemonHabilidadID' => 1884,
                'PokemonID' => 1002,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            384 => 
            array (
                'PokemonHabilidadID' => 1885,
                'PokemonID' => 1002,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            385 => 
            array (
                'PokemonHabilidadID' => 1886,
                'PokemonID' => 1002,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            386 => 
            array (
                'PokemonHabilidadID' => 1887,
                'PokemonID' => 1003,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            387 => 
            array (
                'PokemonHabilidadID' => 1888,
                'PokemonID' => 1003,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            388 => 
            array (
                'PokemonHabilidadID' => 1889,
                'PokemonID' => 1003,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            389 => 
            array (
                'PokemonHabilidadID' => 1890,
                'PokemonID' => 1004,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            390 => 
            array (
                'PokemonHabilidadID' => 1891,
                'PokemonID' => 1004,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            391 => 
            array (
                'PokemonHabilidadID' => 1892,
                'PokemonID' => 1004,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            392 => 
            array (
                'PokemonHabilidadID' => 1893,
                'PokemonID' => 1005,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            393 => 
            array (
                'PokemonHabilidadID' => 1894,
                'PokemonID' => 1005,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            394 => 
            array (
                'PokemonHabilidadID' => 1895,
                'PokemonID' => 1005,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            395 => 
            array (
                'PokemonHabilidadID' => 1896,
                'PokemonID' => 1006,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            396 => 
            array (
                'PokemonHabilidadID' => 1897,
                'PokemonID' => 1006,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            397 => 
            array (
                'PokemonHabilidadID' => 1898,
                'PokemonID' => 1006,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            398 => 
            array (
                'PokemonHabilidadID' => 1899,
                'PokemonID' => 1007,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            399 => 
            array (
                'PokemonHabilidadID' => 1900,
                'PokemonID' => 1007,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            400 => 
            array (
                'PokemonHabilidadID' => 1901,
                'PokemonID' => 1007,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            401 => 
            array (
                'PokemonHabilidadID' => 1902,
                'PokemonID' => 1007,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            402 => 
            array (
                'PokemonHabilidadID' => 1903,
                'PokemonID' => 1008,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            403 => 
            array (
                'PokemonHabilidadID' => 1904,
                'PokemonID' => 1008,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            404 => 
            array (
                'PokemonHabilidadID' => 1905,
                'PokemonID' => 1008,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            405 => 
            array (
                'PokemonHabilidadID' => 1906,
                'PokemonID' => 1008,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            406 => 
            array (
                'PokemonHabilidadID' => 1907,
                'PokemonID' => 1009,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            407 => 
            array (
                'PokemonHabilidadID' => 1908,
                'PokemonID' => 1009,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            408 => 
            array (
                'PokemonHabilidadID' => 1909,
                'PokemonID' => 1009,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            409 => 
            array (
                'PokemonHabilidadID' => 1910,
                'PokemonID' => 1009,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            410 => 
            array (
                'PokemonHabilidadID' => 1911,
                'PokemonID' => 1010,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            411 => 
            array (
                'PokemonHabilidadID' => 1912,
                'PokemonID' => 1010,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            412 => 
            array (
                'PokemonHabilidadID' => 1913,
                'PokemonID' => 1010,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            413 => 
            array (
                'PokemonHabilidadID' => 1914,
                'PokemonID' => 1010,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            414 => 
            array (
                'PokemonHabilidadID' => 1915,
                'PokemonID' => 1011,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            415 => 
            array (
                'PokemonHabilidadID' => 1916,
                'PokemonID' => 1011,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            416 => 
            array (
                'PokemonHabilidadID' => 1917,
                'PokemonID' => 1011,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            417 => 
            array (
                'PokemonHabilidadID' => 1918,
                'PokemonID' => 1011,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            418 => 
            array (
                'PokemonHabilidadID' => 1919,
                'PokemonID' => 1012,
                'HabilidadID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            419 => 
            array (
                'PokemonHabilidadID' => 1920,
                'PokemonID' => 1012,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            420 => 
            array (
                'PokemonHabilidadID' => 1921,
                'PokemonID' => 1012,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            421 => 
            array (
                'PokemonHabilidadID' => 1922,
                'PokemonID' => 1012,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            422 => 
            array (
                'PokemonHabilidadID' => 1923,
                'PokemonID' => 1012,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            423 => 
            array (
                'PokemonHabilidadID' => 1924,
                'PokemonID' => 1013,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            424 => 
            array (
                'PokemonHabilidadID' => 1925,
                'PokemonID' => 1013,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            425 => 
            array (
                'PokemonHabilidadID' => 1926,
                'PokemonID' => 1013,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            426 => 
            array (
                'PokemonHabilidadID' => 1927,
                'PokemonID' => 1013,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            427 => 
            array (
                'PokemonHabilidadID' => 1928,
                'PokemonID' => 1014,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            428 => 
            array (
                'PokemonHabilidadID' => 1929,
                'PokemonID' => 1014,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            429 => 
            array (
                'PokemonHabilidadID' => 1930,
                'PokemonID' => 1014,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            430 => 
            array (
                'PokemonHabilidadID' => 1931,
                'PokemonID' => 1015,
                'HabilidadID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            431 => 
            array (
                'PokemonHabilidadID' => 1932,
                'PokemonID' => 1015,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            432 => 
            array (
                'PokemonHabilidadID' => 1933,
                'PokemonID' => 1015,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            433 => 
            array (
                'PokemonHabilidadID' => 1934,
                'PokemonID' => 1016,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            434 => 
            array (
                'PokemonHabilidadID' => 1935,
                'PokemonID' => 1016,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            435 => 
            array (
                'PokemonHabilidadID' => 1936,
                'PokemonID' => 1016,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            436 => 
            array (
                'PokemonHabilidadID' => 1937,
                'PokemonID' => 1017,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            437 => 
            array (
                'PokemonHabilidadID' => 1938,
                'PokemonID' => 1017,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            438 => 
            array (
                'PokemonHabilidadID' => 1939,
                'PokemonID' => 1017,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            439 => 
            array (
                'PokemonHabilidadID' => 1940,
                'PokemonID' => 1017,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            440 => 
            array (
                'PokemonHabilidadID' => 1941,
                'PokemonID' => 1018,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            441 => 
            array (
                'PokemonHabilidadID' => 1942,
                'PokemonID' => 1018,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            442 => 
            array (
                'PokemonHabilidadID' => 1943,
                'PokemonID' => 1018,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            443 => 
            array (
                'PokemonHabilidadID' => 1944,
                'PokemonID' => 1018,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            444 => 
            array (
                'PokemonHabilidadID' => 1945,
                'PokemonID' => 1019,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            445 => 
            array (
                'PokemonHabilidadID' => 1946,
                'PokemonID' => 1019,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            446 => 
            array (
                'PokemonHabilidadID' => 1947,
                'PokemonID' => 1019,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            447 => 
            array (
                'PokemonHabilidadID' => 1948,
                'PokemonID' => 1019,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            448 => 
            array (
                'PokemonHabilidadID' => 1949,
                'PokemonID' => 1020,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            449 => 
            array (
                'PokemonHabilidadID' => 1950,
                'PokemonID' => 1020,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            450 => 
            array (
                'PokemonHabilidadID' => 1951,
                'PokemonID' => 1020,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            451 => 
            array (
                'PokemonHabilidadID' => 1952,
                'PokemonID' => 1020,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            452 => 
            array (
                'PokemonHabilidadID' => 1953,
                'PokemonID' => 1020,
                'HabilidadID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            453 => 
            array (
                'PokemonHabilidadID' => 1954,
                'PokemonID' => 1020,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            454 => 
            array (
                'PokemonHabilidadID' => 1955,
                'PokemonID' => 1020,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            455 => 
            array (
                'PokemonHabilidadID' => 1956,
                'PokemonID' => 1021,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            456 => 
            array (
                'PokemonHabilidadID' => 1957,
                'PokemonID' => 1021,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            457 => 
            array (
                'PokemonHabilidadID' => 1958,
                'PokemonID' => 1021,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            458 => 
            array (
                'PokemonHabilidadID' => 1959,
                'PokemonID' => 1021,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            459 => 
            array (
                'PokemonHabilidadID' => 1960,
                'PokemonID' => 1021,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            460 => 
            array (
                'PokemonHabilidadID' => 1961,
                'PokemonID' => 1021,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            461 => 
            array (
                'PokemonHabilidadID' => 1962,
                'PokemonID' => 1022,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            462 => 
            array (
                'PokemonHabilidadID' => 1963,
                'PokemonID' => 1022,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            463 => 
            array (
                'PokemonHabilidadID' => 1964,
                'PokemonID' => 1022,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            464 => 
            array (
                'PokemonHabilidadID' => 1965,
                'PokemonID' => 1022,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            465 => 
            array (
                'PokemonHabilidadID' => 1966,
                'PokemonID' => 1022,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            466 => 
            array (
                'PokemonHabilidadID' => 1967,
                'PokemonID' => 1022,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            467 => 
            array (
                'PokemonHabilidadID' => 1968,
                'PokemonID' => 1022,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            468 => 
            array (
                'PokemonHabilidadID' => 1969,
                'PokemonID' => 1023,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            469 => 
            array (
                'PokemonHabilidadID' => 1970,
                'PokemonID' => 1023,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            470 => 
            array (
                'PokemonHabilidadID' => 1971,
                'PokemonID' => 1023,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            471 => 
            array (
                'PokemonHabilidadID' => 1972,
                'PokemonID' => 1023,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            472 => 
            array (
                'PokemonHabilidadID' => 1973,
                'PokemonID' => 1023,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            473 => 
            array (
                'PokemonHabilidadID' => 1974,
                'PokemonID' => 1023,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            474 => 
            array (
                'PokemonHabilidadID' => 1975,
                'PokemonID' => 1024,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            475 => 
            array (
                'PokemonHabilidadID' => 1976,
                'PokemonID' => 1024,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            476 => 
            array (
                'PokemonHabilidadID' => 1977,
                'PokemonID' => 1024,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            477 => 
            array (
                'PokemonHabilidadID' => 1978,
                'PokemonID' => 1025,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            478 => 
            array (
                'PokemonHabilidadID' => 1979,
                'PokemonID' => 1025,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            479 => 
            array (
                'PokemonHabilidadID' => 1980,
                'PokemonID' => 1025,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            480 => 
            array (
                'PokemonHabilidadID' => 1981,
                'PokemonID' => 1026,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            481 => 
            array (
                'PokemonHabilidadID' => 1982,
                'PokemonID' => 1026,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            482 => 
            array (
                'PokemonHabilidadID' => 1983,
                'PokemonID' => 1026,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            483 => 
            array (
                'PokemonHabilidadID' => 1984,
                'PokemonID' => 1026,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            484 => 
            array (
                'PokemonHabilidadID' => 1985,
                'PokemonID' => 1026,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            485 => 
            array (
                'PokemonHabilidadID' => 1986,
                'PokemonID' => 1026,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            486 => 
            array (
                'PokemonHabilidadID' => 1987,
                'PokemonID' => 1027,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            487 => 
            array (
                'PokemonHabilidadID' => 1988,
                'PokemonID' => 1027,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            488 => 
            array (
                'PokemonHabilidadID' => 1989,
                'PokemonID' => 1027,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            489 => 
            array (
                'PokemonHabilidadID' => 1990,
                'PokemonID' => 1027,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            490 => 
            array (
                'PokemonHabilidadID' => 1991,
                'PokemonID' => 1027,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            491 => 
            array (
                'PokemonHabilidadID' => 1992,
                'PokemonID' => 1028,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            492 => 
            array (
                'PokemonHabilidadID' => 1993,
                'PokemonID' => 1028,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            493 => 
            array (
                'PokemonHabilidadID' => 1994,
                'PokemonID' => 1028,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            494 => 
            array (
                'PokemonHabilidadID' => 1995,
                'PokemonID' => 1028,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            495 => 
            array (
                'PokemonHabilidadID' => 1996,
                'PokemonID' => 1028,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            496 => 
            array (
                'PokemonHabilidadID' => 1997,
                'PokemonID' => 1029,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            497 => 
            array (
                'PokemonHabilidadID' => 1998,
                'PokemonID' => 1029,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            498 => 
            array (
                'PokemonHabilidadID' => 1999,
                'PokemonID' => 1029,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            499 => 
            array (
                'PokemonHabilidadID' => 2000,
                'PokemonID' => 1029,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
        ));
        \DB::table('PokemonHabilidad')->insert(array (
            0 => 
            array (
                'PokemonHabilidadID' => 2001,
                'PokemonID' => 1030,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            1 => 
            array (
                'PokemonHabilidadID' => 2002,
                'PokemonID' => 1030,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            2 => 
            array (
                'PokemonHabilidadID' => 2003,
                'PokemonID' => 1030,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            3 => 
            array (
                'PokemonHabilidadID' => 2004,
                'PokemonID' => 1031,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            4 => 
            array (
                'PokemonHabilidadID' => 2005,
                'PokemonID' => 1031,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            5 => 
            array (
                'PokemonHabilidadID' => 2006,
                'PokemonID' => 1031,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            6 => 
            array (
                'PokemonHabilidadID' => 2007,
                'PokemonID' => 1032,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            7 => 
            array (
                'PokemonHabilidadID' => 2008,
                'PokemonID' => 1033,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            8 => 
            array (
                'PokemonHabilidadID' => 2009,
                'PokemonID' => 1034,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            9 => 
            array (
                'PokemonHabilidadID' => 2010,
                'PokemonID' => 1034,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            10 => 
            array (
                'PokemonHabilidadID' => 2011,
                'PokemonID' => 1034,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            11 => 
            array (
                'PokemonHabilidadID' => 2012,
                'PokemonID' => 1034,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            12 => 
            array (
                'PokemonHabilidadID' => 2013,
                'PokemonID' => 1034,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            13 => 
            array (
                'PokemonHabilidadID' => 2014,
                'PokemonID' => 1034,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            14 => 
            array (
                'PokemonHabilidadID' => 2015,
                'PokemonID' => 1035,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            15 => 
            array (
                'PokemonHabilidadID' => 2016,
                'PokemonID' => 1035,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            16 => 
            array (
                'PokemonHabilidadID' => 2017,
                'PokemonID' => 1035,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            17 => 
            array (
                'PokemonHabilidadID' => 2018,
                'PokemonID' => 1035,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            18 => 
            array (
                'PokemonHabilidadID' => 2019,
                'PokemonID' => 1035,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            19 => 
            array (
                'PokemonHabilidadID' => 2020,
                'PokemonID' => 1035,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            20 => 
            array (
                'PokemonHabilidadID' => 2021,
                'PokemonID' => 1035,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            21 => 
            array (
                'PokemonHabilidadID' => 2022,
                'PokemonID' => 1036,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            22 => 
            array (
                'PokemonHabilidadID' => 2023,
                'PokemonID' => 1036,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            23 => 
            array (
                'PokemonHabilidadID' => 2024,
                'PokemonID' => 1036,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            24 => 
            array (
                'PokemonHabilidadID' => 2025,
                'PokemonID' => 1036,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            25 => 
            array (
                'PokemonHabilidadID' => 2026,
                'PokemonID' => 1036,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            26 => 
            array (
                'PokemonHabilidadID' => 2027,
                'PokemonID' => 1036,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            27 => 
            array (
                'PokemonHabilidadID' => 2028,
                'PokemonID' => 1036,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            28 => 
            array (
                'PokemonHabilidadID' => 2029,
                'PokemonID' => 1037,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            29 => 
            array (
                'PokemonHabilidadID' => 2030,
                'PokemonID' => 1037,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            30 => 
            array (
                'PokemonHabilidadID' => 2031,
                'PokemonID' => 1038,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            31 => 
            array (
                'PokemonHabilidadID' => 2032,
                'PokemonID' => 1038,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            32 => 
            array (
                'PokemonHabilidadID' => 2033,
                'PokemonID' => 1039,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            33 => 
            array (
                'PokemonHabilidadID' => 2034,
                'PokemonID' => 1039,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            34 => 
            array (
                'PokemonHabilidadID' => 2035,
                'PokemonID' => 1039,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            35 => 
            array (
                'PokemonHabilidadID' => 2036,
                'PokemonID' => 1040,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            36 => 
            array (
                'PokemonHabilidadID' => 2037,
                'PokemonID' => 1040,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            37 => 
            array (
                'PokemonHabilidadID' => 2038,
                'PokemonID' => 1040,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            38 => 
            array (
                'PokemonHabilidadID' => 2039,
                'PokemonID' => 1041,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            39 => 
            array (
                'PokemonHabilidadID' => 2040,
                'PokemonID' => 1041,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            40 => 
            array (
                'PokemonHabilidadID' => 2041,
                'PokemonID' => 1041,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            41 => 
            array (
                'PokemonHabilidadID' => 2042,
                'PokemonID' => 1041,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            42 => 
            array (
                'PokemonHabilidadID' => 2043,
                'PokemonID' => 1042,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            43 => 
            array (
                'PokemonHabilidadID' => 2044,
                'PokemonID' => 1042,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            44 => 
            array (
                'PokemonHabilidadID' => 2045,
                'PokemonID' => 1042,
                'HabilidadID' => 41,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            45 => 
            array (
                'PokemonHabilidadID' => 2046,
                'PokemonID' => 1043,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            46 => 
            array (
                'PokemonHabilidadID' => 2047,
                'PokemonID' => 1044,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            47 => 
            array (
                'PokemonHabilidadID' => 2048,
                'PokemonID' => 1044,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            48 => 
            array (
                'PokemonHabilidadID' => 2049,
                'PokemonID' => 1045,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            49 => 
            array (
                'PokemonHabilidadID' => 2050,
                'PokemonID' => 1045,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            50 => 
            array (
                'PokemonHabilidadID' => 2051,
                'PokemonID' => 1046,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            51 => 
            array (
                'PokemonHabilidadID' => 2052,
                'PokemonID' => 1046,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            52 => 
            array (
                'PokemonHabilidadID' => 2053,
                'PokemonID' => 1047,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            53 => 
            array (
                'PokemonHabilidadID' => 2054,
                'PokemonID' => 1047,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            54 => 
            array (
                'PokemonHabilidadID' => 2055,
                'PokemonID' => 1048,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            55 => 
            array (
                'PokemonHabilidadID' => 2056,
                'PokemonID' => 1048,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            56 => 
            array (
                'PokemonHabilidadID' => 2057,
                'PokemonID' => 1048,
                'HabilidadID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            57 => 
            array (
                'PokemonHabilidadID' => 2058,
                'PokemonID' => 1048,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            58 => 
            array (
                'PokemonHabilidadID' => 2059,
                'PokemonID' => 1048,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            59 => 
            array (
                'PokemonHabilidadID' => 2060,
                'PokemonID' => 1049,
                'HabilidadID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            60 => 
            array (
                'PokemonHabilidadID' => 2061,
                'PokemonID' => 1049,
                'HabilidadID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            61 => 
            array (
                'PokemonHabilidadID' => 2062,
                'PokemonID' => 1049,
                'HabilidadID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            62 => 
            array (
                'PokemonHabilidadID' => 2063,
                'PokemonID' => 1049,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            63 => 
            array (
                'PokemonHabilidadID' => 2064,
                'PokemonID' => 1049,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            64 => 
            array (
                'PokemonHabilidadID' => 2065,
                'PokemonID' => 1050,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            65 => 
            array (
                'PokemonHabilidadID' => 2066,
                'PokemonID' => 1050,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            66 => 
            array (
                'PokemonHabilidadID' => 2067,
                'PokemonID' => 1050,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            67 => 
            array (
                'PokemonHabilidadID' => 2068,
                'PokemonID' => 1050,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            68 => 
            array (
                'PokemonHabilidadID' => 2069,
                'PokemonID' => 1051,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            69 => 
            array (
                'PokemonHabilidadID' => 2070,
                'PokemonID' => 1051,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            70 => 
            array (
                'PokemonHabilidadID' => 2071,
                'PokemonID' => 1051,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            71 => 
            array (
                'PokemonHabilidadID' => 2072,
                'PokemonID' => 1051,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            72 => 
            array (
                'PokemonHabilidadID' => 2073,
                'PokemonID' => 1052,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            73 => 
            array (
                'PokemonHabilidadID' => 2074,
                'PokemonID' => 1052,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            74 => 
            array (
                'PokemonHabilidadID' => 2075,
                'PokemonID' => 1052,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            75 => 
            array (
                'PokemonHabilidadID' => 2076,
                'PokemonID' => 1052,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            76 => 
            array (
                'PokemonHabilidadID' => 2077,
                'PokemonID' => 1052,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            77 => 
            array (
                'PokemonHabilidadID' => 2078,
                'PokemonID' => 1052,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            78 => 
            array (
                'PokemonHabilidadID' => 2079,
                'PokemonID' => 1053,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            79 => 
            array (
                'PokemonHabilidadID' => 2080,
                'PokemonID' => 1053,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            80 => 
            array (
                'PokemonHabilidadID' => 2081,
                'PokemonID' => 1053,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            81 => 
            array (
                'PokemonHabilidadID' => 2082,
                'PokemonID' => 1053,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            82 => 
            array (
                'PokemonHabilidadID' => 2083,
                'PokemonID' => 1053,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            83 => 
            array (
                'PokemonHabilidadID' => 2084,
                'PokemonID' => 1053,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            84 => 
            array (
                'PokemonHabilidadID' => 2085,
                'PokemonID' => 1054,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            85 => 
            array (
                'PokemonHabilidadID' => 2086,
                'PokemonID' => 1054,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            86 => 
            array (
                'PokemonHabilidadID' => 2087,
                'PokemonID' => 1054,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            87 => 
            array (
                'PokemonHabilidadID' => 2088,
                'PokemonID' => 1054,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            88 => 
            array (
                'PokemonHabilidadID' => 2089,
                'PokemonID' => 1054,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            89 => 
            array (
                'PokemonHabilidadID' => 2090,
                'PokemonID' => 1054,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            90 => 
            array (
                'PokemonHabilidadID' => 2091,
                'PokemonID' => 1055,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            91 => 
            array (
                'PokemonHabilidadID' => 2092,
                'PokemonID' => 1055,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            92 => 
            array (
                'PokemonHabilidadID' => 2093,
                'PokemonID' => 1055,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            93 => 
            array (
                'PokemonHabilidadID' => 2094,
                'PokemonID' => 1055,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            94 => 
            array (
                'PokemonHabilidadID' => 2095,
                'PokemonID' => 1055,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            95 => 
            array (
                'PokemonHabilidadID' => 2096,
                'PokemonID' => 1055,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            96 => 
            array (
                'PokemonHabilidadID' => 2097,
                'PokemonID' => 1056,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            97 => 
            array (
                'PokemonHabilidadID' => 2098,
                'PokemonID' => 1056,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            98 => 
            array (
                'PokemonHabilidadID' => 2099,
                'PokemonID' => 1056,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            99 => 
            array (
                'PokemonHabilidadID' => 2100,
                'PokemonID' => 1056,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            100 => 
            array (
                'PokemonHabilidadID' => 2101,
                'PokemonID' => 1056,
                'HabilidadID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            101 => 
            array (
                'PokemonHabilidadID' => 2102,
                'PokemonID' => 1057,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            102 => 
            array (
                'PokemonHabilidadID' => 2103,
                'PokemonID' => 1057,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            103 => 
            array (
                'PokemonHabilidadID' => 2104,
                'PokemonID' => 1057,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            104 => 
            array (
                'PokemonHabilidadID' => 2105,
                'PokemonID' => 1057,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            105 => 
            array (
                'PokemonHabilidadID' => 2106,
                'PokemonID' => 1057,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            106 => 
            array (
                'PokemonHabilidadID' => 2107,
                'PokemonID' => 1058,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            107 => 
            array (
                'PokemonHabilidadID' => 2108,
                'PokemonID' => 1058,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            108 => 
            array (
                'PokemonHabilidadID' => 2109,
                'PokemonID' => 1058,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            109 => 
            array (
                'PokemonHabilidadID' => 2110,
                'PokemonID' => 1058,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            110 => 
            array (
                'PokemonHabilidadID' => 2111,
                'PokemonID' => 1058,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            111 => 
            array (
                'PokemonHabilidadID' => 2112,
                'PokemonID' => 1059,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            112 => 
            array (
                'PokemonHabilidadID' => 2113,
                'PokemonID' => 1059,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            113 => 
            array (
                'PokemonHabilidadID' => 2114,
                'PokemonID' => 1059,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            114 => 
            array (
                'PokemonHabilidadID' => 2115,
                'PokemonID' => 1059,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            115 => 
            array (
                'PokemonHabilidadID' => 2116,
                'PokemonID' => 1059,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            116 => 
            array (
                'PokemonHabilidadID' => 2117,
                'PokemonID' => 1060,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            117 => 
            array (
                'PokemonHabilidadID' => 2118,
                'PokemonID' => 1060,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            118 => 
            array (
                'PokemonHabilidadID' => 2119,
                'PokemonID' => 1060,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            119 => 
            array (
                'PokemonHabilidadID' => 2120,
                'PokemonID' => 1060,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            120 => 
            array (
                'PokemonHabilidadID' => 2121,
                'PokemonID' => 1060,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            121 => 
            array (
                'PokemonHabilidadID' => 2122,
                'PokemonID' => 1061,
                'HabilidadID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            122 => 
            array (
                'PokemonHabilidadID' => 2123,
                'PokemonID' => 1061,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            123 => 
            array (
                'PokemonHabilidadID' => 2124,
                'PokemonID' => 1061,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            124 => 
            array (
                'PokemonHabilidadID' => 2125,
                'PokemonID' => 1061,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            125 => 
            array (
                'PokemonHabilidadID' => 2126,
                'PokemonID' => 1061,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            126 => 
            array (
                'PokemonHabilidadID' => 2127,
                'PokemonID' => 1062,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            127 => 
            array (
                'PokemonHabilidadID' => 2128,
                'PokemonID' => 1062,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            128 => 
            array (
                'PokemonHabilidadID' => 2129,
                'PokemonID' => 1063,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            129 => 
            array (
                'PokemonHabilidadID' => 2130,
                'PokemonID' => 1064,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            130 => 
            array (
                'PokemonHabilidadID' => 2131,
                'PokemonID' => 1064,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            131 => 
            array (
                'PokemonHabilidadID' => 2132,
                'PokemonID' => 1064,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            132 => 
            array (
                'PokemonHabilidadID' => 2133,
                'PokemonID' => 1064,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            133 => 
            array (
                'PokemonHabilidadID' => 2134,
                'PokemonID' => 1064,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            134 => 
            array (
                'PokemonHabilidadID' => 2135,
                'PokemonID' => 1065,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            135 => 
            array (
                'PokemonHabilidadID' => 2136,
                'PokemonID' => 1065,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            136 => 
            array (
                'PokemonHabilidadID' => 2137,
                'PokemonID' => 1065,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            137 => 
            array (
                'PokemonHabilidadID' => 2138,
                'PokemonID' => 1065,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            138 => 
            array (
                'PokemonHabilidadID' => 2139,
                'PokemonID' => 1065,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            139 => 
            array (
                'PokemonHabilidadID' => 2140,
                'PokemonID' => 1066,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            140 => 
            array (
                'PokemonHabilidadID' => 2141,
                'PokemonID' => 1066,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            141 => 
            array (
                'PokemonHabilidadID' => 2142,
                'PokemonID' => 1066,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            142 => 
            array (
                'PokemonHabilidadID' => 2143,
                'PokemonID' => 1066,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            143 => 
            array (
                'PokemonHabilidadID' => 2144,
                'PokemonID' => 1066,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            144 => 
            array (
                'PokemonHabilidadID' => 2145,
                'PokemonID' => 1066,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            145 => 
            array (
                'PokemonHabilidadID' => 2146,
                'PokemonID' => 1067,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            146 => 
            array (
                'PokemonHabilidadID' => 2147,
                'PokemonID' => 1067,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            147 => 
            array (
                'PokemonHabilidadID' => 2148,
                'PokemonID' => 1067,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            148 => 
            array (
                'PokemonHabilidadID' => 2149,
                'PokemonID' => 1067,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            149 => 
            array (
                'PokemonHabilidadID' => 2150,
                'PokemonID' => 1067,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            150 => 
            array (
                'PokemonHabilidadID' => 2151,
                'PokemonID' => 1067,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            151 => 
            array (
                'PokemonHabilidadID' => 2152,
                'PokemonID' => 1068,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            152 => 
            array (
                'PokemonHabilidadID' => 2153,
                'PokemonID' => 1068,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            153 => 
            array (
                'PokemonHabilidadID' => 2154,
                'PokemonID' => 1068,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            154 => 
            array (
                'PokemonHabilidadID' => 2155,
                'PokemonID' => 1068,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            155 => 
            array (
                'PokemonHabilidadID' => 2156,
                'PokemonID' => 1068,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            156 => 
            array (
                'PokemonHabilidadID' => 2157,
                'PokemonID' => 1068,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            157 => 
            array (
                'PokemonHabilidadID' => 2158,
                'PokemonID' => 1069,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            158 => 
            array (
                'PokemonHabilidadID' => 2159,
                'PokemonID' => 1069,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            159 => 
            array (
                'PokemonHabilidadID' => 2160,
                'PokemonID' => 1069,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            160 => 
            array (
                'PokemonHabilidadID' => 2161,
                'PokemonID' => 1069,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            161 => 
            array (
                'PokemonHabilidadID' => 2162,
                'PokemonID' => 1069,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            162 => 
            array (
                'PokemonHabilidadID' => 2163,
                'PokemonID' => 1069,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            163 => 
            array (
                'PokemonHabilidadID' => 2164,
                'PokemonID' => 1070,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            164 => 
            array (
                'PokemonHabilidadID' => 2165,
                'PokemonID' => 1070,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            165 => 
            array (
                'PokemonHabilidadID' => 2166,
                'PokemonID' => 1070,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            166 => 
            array (
                'PokemonHabilidadID' => 2167,
                'PokemonID' => 1070,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            167 => 
            array (
                'PokemonHabilidadID' => 2168,
                'PokemonID' => 1070,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            168 => 
            array (
                'PokemonHabilidadID' => 2169,
                'PokemonID' => 1071,
                'HabilidadID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            169 => 
            array (
                'PokemonHabilidadID' => 2170,
                'PokemonID' => 1071,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            170 => 
            array (
                'PokemonHabilidadID' => 2171,
                'PokemonID' => 1071,
                'HabilidadID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            171 => 
            array (
                'PokemonHabilidadID' => 2172,
                'PokemonID' => 1071,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            172 => 
            array (
                'PokemonHabilidadID' => 2173,
                'PokemonID' => 1071,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            173 => 
            array (
                'PokemonHabilidadID' => 2174,
                'PokemonID' => 1072,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            174 => 
            array (
                'PokemonHabilidadID' => 2175,
                'PokemonID' => 1072,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            175 => 
            array (
                'PokemonHabilidadID' => 2176,
                'PokemonID' => 1072,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            176 => 
            array (
                'PokemonHabilidadID' => 2177,
                'PokemonID' => 1072,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            177 => 
            array (
                'PokemonHabilidadID' => 2178,
                'PokemonID' => 1072,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            178 => 
            array (
                'PokemonHabilidadID' => 2179,
                'PokemonID' => 1073,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            179 => 
            array (
                'PokemonHabilidadID' => 2180,
                'PokemonID' => 1073,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            180 => 
            array (
                'PokemonHabilidadID' => 2181,
                'PokemonID' => 1073,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            181 => 
            array (
                'PokemonHabilidadID' => 2182,
                'PokemonID' => 1073,
                'HabilidadID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            182 => 
            array (
                'PokemonHabilidadID' => 2183,
                'PokemonID' => 1073,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            183 => 
            array (
                'PokemonHabilidadID' => 2184,
                'PokemonID' => 1074,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            184 => 
            array (
                'PokemonHabilidadID' => 2185,
                'PokemonID' => 1074,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            185 => 
            array (
                'PokemonHabilidadID' => 2186,
                'PokemonID' => 1074,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            186 => 
            array (
                'PokemonHabilidadID' => 2187,
                'PokemonID' => 1074,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            187 => 
            array (
                'PokemonHabilidadID' => 2188,
                'PokemonID' => 1074,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            188 => 
            array (
                'PokemonHabilidadID' => 2189,
                'PokemonID' => 1074,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            189 => 
            array (
                'PokemonHabilidadID' => 2190,
                'PokemonID' => 1075,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            190 => 
            array (
                'PokemonHabilidadID' => 2191,
                'PokemonID' => 1075,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            191 => 
            array (
                'PokemonHabilidadID' => 2192,
                'PokemonID' => 1075,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            192 => 
            array (
                'PokemonHabilidadID' => 2193,
                'PokemonID' => 1075,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            193 => 
            array (
                'PokemonHabilidadID' => 2194,
                'PokemonID' => 1075,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            194 => 
            array (
                'PokemonHabilidadID' => 2195,
                'PokemonID' => 1075,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            195 => 
            array (
                'PokemonHabilidadID' => 2196,
                'PokemonID' => 1076,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            196 => 
            array (
                'PokemonHabilidadID' => 2197,
                'PokemonID' => 1076,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            197 => 
            array (
                'PokemonHabilidadID' => 2198,
                'PokemonID' => 1076,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            198 => 
            array (
                'PokemonHabilidadID' => 2199,
                'PokemonID' => 1076,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            199 => 
            array (
                'PokemonHabilidadID' => 2200,
                'PokemonID' => 1076,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            200 => 
            array (
                'PokemonHabilidadID' => 2201,
                'PokemonID' => 1077,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            201 => 
            array (
                'PokemonHabilidadID' => 2202,
                'PokemonID' => 1077,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            202 => 
            array (
                'PokemonHabilidadID' => 2203,
                'PokemonID' => 1077,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            203 => 
            array (
                'PokemonHabilidadID' => 2204,
                'PokemonID' => 1077,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            204 => 
            array (
                'PokemonHabilidadID' => 2205,
                'PokemonID' => 1077,
                'HabilidadID' => 44,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            205 => 
            array (
                'PokemonHabilidadID' => 2206,
                'PokemonID' => 1078,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            206 => 
            array (
                'PokemonHabilidadID' => 2207,
                'PokemonID' => 1078,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            207 => 
            array (
                'PokemonHabilidadID' => 2208,
                'PokemonID' => 1078,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            208 => 
            array (
                'PokemonHabilidadID' => 2209,
                'PokemonID' => 1078,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            209 => 
            array (
                'PokemonHabilidadID' => 2210,
                'PokemonID' => 1078,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            210 => 
            array (
                'PokemonHabilidadID' => 2211,
                'PokemonID' => 1079,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            211 => 
            array (
                'PokemonHabilidadID' => 2212,
                'PokemonID' => 1079,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            212 => 
            array (
                'PokemonHabilidadID' => 2213,
                'PokemonID' => 1079,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            213 => 
            array (
                'PokemonHabilidadID' => 2214,
                'PokemonID' => 1079,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            214 => 
            array (
                'PokemonHabilidadID' => 2215,
                'PokemonID' => 1079,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            215 => 
            array (
                'PokemonHabilidadID' => 2216,
                'PokemonID' => 1080,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            216 => 
            array (
                'PokemonHabilidadID' => 2217,
                'PokemonID' => 1080,
                'HabilidadID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            217 => 
            array (
                'PokemonHabilidadID' => 2218,
                'PokemonID' => 1080,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            218 => 
            array (
                'PokemonHabilidadID' => 2219,
                'PokemonID' => 1080,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            219 => 
            array (
                'PokemonHabilidadID' => 2220,
                'PokemonID' => 1080,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            220 => 
            array (
                'PokemonHabilidadID' => 2221,
                'PokemonID' => 1081,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            221 => 
            array (
                'PokemonHabilidadID' => 2222,
                'PokemonID' => 1081,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            222 => 
            array (
                'PokemonHabilidadID' => 2223,
                'PokemonID' => 1081,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            223 => 
            array (
                'PokemonHabilidadID' => 2224,
                'PokemonID' => 1081,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            224 => 
            array (
                'PokemonHabilidadID' => 2225,
                'PokemonID' => 1081,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            225 => 
            array (
                'PokemonHabilidadID' => 2226,
                'PokemonID' => 1082,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            226 => 
            array (
                'PokemonHabilidadID' => 2227,
                'PokemonID' => 1082,
                'HabilidadID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            227 => 
            array (
                'PokemonHabilidadID' => 2228,
                'PokemonID' => 1082,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            228 => 
            array (
                'PokemonHabilidadID' => 2229,
                'PokemonID' => 1082,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            229 => 
            array (
                'PokemonHabilidadID' => 2230,
                'PokemonID' => 1082,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            230 => 
            array (
                'PokemonHabilidadID' => 2231,
                'PokemonID' => 1083,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            231 => 
            array (
                'PokemonHabilidadID' => 2232,
                'PokemonID' => 1083,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            232 => 
            array (
                'PokemonHabilidadID' => 2233,
                'PokemonID' => 1083,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            233 => 
            array (
                'PokemonHabilidadID' => 2234,
                'PokemonID' => 1083,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            234 => 
            array (
                'PokemonHabilidadID' => 2235,
                'PokemonID' => 1083,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            235 => 
            array (
                'PokemonHabilidadID' => 2236,
                'PokemonID' => 1083,
                'HabilidadID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            236 => 
            array (
                'PokemonHabilidadID' => 2237,
                'PokemonID' => 1084,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            237 => 
            array (
                'PokemonHabilidadID' => 2238,
                'PokemonID' => 1084,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            238 => 
            array (
                'PokemonHabilidadID' => 2239,
                'PokemonID' => 1084,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            239 => 
            array (
                'PokemonHabilidadID' => 2240,
                'PokemonID' => 1084,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            240 => 
            array (
                'PokemonHabilidadID' => 2241,
                'PokemonID' => 1084,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            241 => 
            array (
                'PokemonHabilidadID' => 2242,
                'PokemonID' => 1084,
                'HabilidadID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            242 => 
            array (
                'PokemonHabilidadID' => 2243,
                'PokemonID' => 1085,
                'HabilidadID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            243 => 
            array (
                'PokemonHabilidadID' => 2244,
                'PokemonID' => 1085,
                'HabilidadID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            244 => 
            array (
                'PokemonHabilidadID' => 2245,
                'PokemonID' => 1085,
                'HabilidadID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            245 => 
            array (
                'PokemonHabilidadID' => 2246,
                'PokemonID' => 1085,
                'HabilidadID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            246 => 
            array (
                'PokemonHabilidadID' => 2247,
                'PokemonID' => 1085,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            247 => 
            array (
                'PokemonHabilidadID' => 2248,
                'PokemonID' => 1085,
                'HabilidadID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            248 => 
            array (
                'PokemonHabilidadID' => 2249,
                'PokemonID' => 1086,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            249 => 
            array (
                'PokemonHabilidadID' => 2250,
                'PokemonID' => 1086,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            250 => 
            array (
                'PokemonHabilidadID' => 2251,
                'PokemonID' => 1086,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            251 => 
            array (
                'PokemonHabilidadID' => 2252,
                'PokemonID' => 1086,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            252 => 
            array (
                'PokemonHabilidadID' => 2253,
                'PokemonID' => 1086,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            253 => 
            array (
                'PokemonHabilidadID' => 2254,
                'PokemonID' => 1086,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            254 => 
            array (
                'PokemonHabilidadID' => 2255,
                'PokemonID' => 1087,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            255 => 
            array (
                'PokemonHabilidadID' => 2256,
                'PokemonID' => 1087,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            256 => 
            array (
                'PokemonHabilidadID' => 2257,
                'PokemonID' => 1087,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            257 => 
            array (
                'PokemonHabilidadID' => 2258,
                'PokemonID' => 1087,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            258 => 
            array (
                'PokemonHabilidadID' => 2259,
                'PokemonID' => 1087,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            259 => 
            array (
                'PokemonHabilidadID' => 2260,
                'PokemonID' => 1087,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            260 => 
            array (
                'PokemonHabilidadID' => 2261,
                'PokemonID' => 1088,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            261 => 
            array (
                'PokemonHabilidadID' => 2262,
                'PokemonID' => 1088,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            262 => 
            array (
                'PokemonHabilidadID' => 2263,
                'PokemonID' => 1088,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            263 => 
            array (
                'PokemonHabilidadID' => 2264,
                'PokemonID' => 1088,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            264 => 
            array (
                'PokemonHabilidadID' => 2265,
                'PokemonID' => 1088,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            265 => 
            array (
                'PokemonHabilidadID' => 2266,
                'PokemonID' => 1088,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            266 => 
            array (
                'PokemonHabilidadID' => 2267,
                'PokemonID' => 1089,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            267 => 
            array (
                'PokemonHabilidadID' => 2268,
                'PokemonID' => 1089,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            268 => 
            array (
                'PokemonHabilidadID' => 2269,
                'PokemonID' => 1089,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            269 => 
            array (
                'PokemonHabilidadID' => 2270,
                'PokemonID' => 1089,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            270 => 
            array (
                'PokemonHabilidadID' => 2271,
                'PokemonID' => 1089,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            271 => 
            array (
                'PokemonHabilidadID' => 2272,
                'PokemonID' => 1089,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            272 => 
            array (
                'PokemonHabilidadID' => 2273,
                'PokemonID' => 1090,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            273 => 
            array (
                'PokemonHabilidadID' => 2274,
                'PokemonID' => 1090,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            274 => 
            array (
                'PokemonHabilidadID' => 2275,
                'PokemonID' => 1090,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            275 => 
            array (
                'PokemonHabilidadID' => 2276,
                'PokemonID' => 1090,
                'HabilidadID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            276 => 
            array (
                'PokemonHabilidadID' => 2277,
                'PokemonID' => 1090,
                'HabilidadID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            277 => 
            array (
                'PokemonHabilidadID' => 2278,
                'PokemonID' => 1090,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            278 => 
            array (
                'PokemonHabilidadID' => 2279,
                'PokemonID' => 1091,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            279 => 
            array (
                'PokemonHabilidadID' => 2280,
                'PokemonID' => 1091,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            280 => 
            array (
                'PokemonHabilidadID' => 2281,
                'PokemonID' => 1091,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            281 => 
            array (
                'PokemonHabilidadID' => 2282,
                'PokemonID' => 1091,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            282 => 
            array (
                'PokemonHabilidadID' => 2283,
                'PokemonID' => 1091,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            283 => 
            array (
                'PokemonHabilidadID' => 2284,
                'PokemonID' => 1091,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            284 => 
            array (
                'PokemonHabilidadID' => 2285,
                'PokemonID' => 1092,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            285 => 
            array (
                'PokemonHabilidadID' => 2286,
                'PokemonID' => 1092,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            286 => 
            array (
                'PokemonHabilidadID' => 2287,
                'PokemonID' => 1092,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            287 => 
            array (
                'PokemonHabilidadID' => 2288,
                'PokemonID' => 1092,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            288 => 
            array (
                'PokemonHabilidadID' => 2289,
                'PokemonID' => 1092,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            289 => 
            array (
                'PokemonHabilidadID' => 2290,
                'PokemonID' => 1092,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            290 => 
            array (
                'PokemonHabilidadID' => 2291,
                'PokemonID' => 1093,
                'HabilidadID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            291 => 
            array (
                'PokemonHabilidadID' => 2292,
                'PokemonID' => 1093,
                'HabilidadID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            292 => 
            array (
                'PokemonHabilidadID' => 2293,
                'PokemonID' => 1093,
                'HabilidadID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            293 => 
            array (
                'PokemonHabilidadID' => 2294,
                'PokemonID' => 1093,
                'HabilidadID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            294 => 
            array (
                'PokemonHabilidadID' => 2295,
                'PokemonID' => 1093,
                'HabilidadID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            295 => 
            array (
                'PokemonHabilidadID' => 2296,
                'PokemonID' => 1093,
                'HabilidadID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            296 => 
            array (
                'PokemonHabilidadID' => 2297,
                'PokemonID' => 1093,
                'HabilidadID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:27:50',
                'updated_at' => '2023-07-16 13:27:50',
            ),
            297 => 
            array (
                'PokemonHabilidadID' => 2298,
                'PokemonID' => 1094,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            298 => 
            array (
                'PokemonHabilidadID' => 2299,
                'PokemonID' => 1094,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            299 => 
            array (
                'PokemonHabilidadID' => 2300,
                'PokemonID' => 1095,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            300 => 
            array (
                'PokemonHabilidadID' => 2301,
                'PokemonID' => 1095,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            301 => 
            array (
                'PokemonHabilidadID' => 2302,
                'PokemonID' => 1096,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            302 => 
            array (
                'PokemonHabilidadID' => 2303,
                'PokemonID' => 1097,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            303 => 
            array (
                'PokemonHabilidadID' => 2304,
                'PokemonID' => 1098,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            304 => 
            array (
                'PokemonHabilidadID' => 2305,
                'PokemonID' => 1099,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            305 => 
            array (
                'PokemonHabilidadID' => 2306,
                'PokemonID' => 1099,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            306 => 
            array (
                'PokemonHabilidadID' => 2307,
                'PokemonID' => 1100,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            307 => 
            array (
                'PokemonHabilidadID' => 2308,
                'PokemonID' => 1100,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            308 => 
            array (
                'PokemonHabilidadID' => 2309,
                'PokemonID' => 1101,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            309 => 
            array (
                'PokemonHabilidadID' => 2310,
                'PokemonID' => 1101,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            310 => 
            array (
                'PokemonHabilidadID' => 2311,
                'PokemonID' => 1103,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            311 => 
            array (
                'PokemonHabilidadID' => 2312,
                'PokemonID' => 1103,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            312 => 
            array (
                'PokemonHabilidadID' => 2313,
                'PokemonID' => 1104,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            313 => 
            array (
                'PokemonHabilidadID' => 2314,
                'PokemonID' => 1104,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            314 => 
            array (
                'PokemonHabilidadID' => 2315,
                'PokemonID' => 1105,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            315 => 
            array (
                'PokemonHabilidadID' => 2316,
                'PokemonID' => 1105,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            316 => 
            array (
                'PokemonHabilidadID' => 2317,
                'PokemonID' => 1106,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            317 => 
            array (
                'PokemonHabilidadID' => 2318,
                'PokemonID' => 1107,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            318 => 
            array (
                'PokemonHabilidadID' => 2319,
                'PokemonID' => 1108,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            319 => 
            array (
                'PokemonHabilidadID' => 2320,
                'PokemonID' => 1109,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            320 => 
            array (
                'PokemonHabilidadID' => 2321,
                'PokemonID' => 1109,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            321 => 
            array (
                'PokemonHabilidadID' => 2322,
                'PokemonID' => 1110,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            322 => 
            array (
                'PokemonHabilidadID' => 2323,
                'PokemonID' => 1110,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            323 => 
            array (
                'PokemonHabilidadID' => 2324,
                'PokemonID' => 1111,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            324 => 
            array (
                'PokemonHabilidadID' => 2325,
                'PokemonID' => 1111,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            325 => 
            array (
                'PokemonHabilidadID' => 2326,
                'PokemonID' => 1113,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            326 => 
            array (
                'PokemonHabilidadID' => 2327,
                'PokemonID' => 1113,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            327 => 
            array (
                'PokemonHabilidadID' => 2328,
                'PokemonID' => 1114,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            328 => 
            array (
                'PokemonHabilidadID' => 2329,
                'PokemonID' => 1114,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            329 => 
            array (
                'PokemonHabilidadID' => 2330,
                'PokemonID' => 1115,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            330 => 
            array (
                'PokemonHabilidadID' => 2331,
                'PokemonID' => 1115,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            331 => 
            array (
                'PokemonHabilidadID' => 2332,
                'PokemonID' => 1116,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            332 => 
            array (
                'PokemonHabilidadID' => 2333,
                'PokemonID' => 1117,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            333 => 
            array (
                'PokemonHabilidadID' => 2334,
                'PokemonID' => 1118,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            334 => 
            array (
                'PokemonHabilidadID' => 2335,
                'PokemonID' => 1119,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            335 => 
            array (
                'PokemonHabilidadID' => 2336,
                'PokemonID' => 1119,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            336 => 
            array (
                'PokemonHabilidadID' => 2337,
                'PokemonID' => 1120,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            337 => 
            array (
                'PokemonHabilidadID' => 2338,
                'PokemonID' => 1120,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            338 => 
            array (
                'PokemonHabilidadID' => 2339,
                'PokemonID' => 1121,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            339 => 
            array (
                'PokemonHabilidadID' => 2340,
                'PokemonID' => 1121,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            340 => 
            array (
                'PokemonHabilidadID' => 2341,
                'PokemonID' => 1123,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            341 => 
            array (
                'PokemonHabilidadID' => 2342,
                'PokemonID' => 1123,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            342 => 
            array (
                'PokemonHabilidadID' => 2343,
                'PokemonID' => 1124,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            343 => 
            array (
                'PokemonHabilidadID' => 2344,
                'PokemonID' => 1124,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            344 => 
            array (
                'PokemonHabilidadID' => 2345,
                'PokemonID' => 1125,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            345 => 
            array (
                'PokemonHabilidadID' => 2346,
                'PokemonID' => 1125,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            346 => 
            array (
                'PokemonHabilidadID' => 2347,
                'PokemonID' => 1126,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            347 => 
            array (
                'PokemonHabilidadID' => 2348,
                'PokemonID' => 1127,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            348 => 
            array (
                'PokemonHabilidadID' => 2349,
                'PokemonID' => 1128,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            349 => 
            array (
                'PokemonHabilidadID' => 2350,
                'PokemonID' => 1129,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            350 => 
            array (
                'PokemonHabilidadID' => 2351,
                'PokemonID' => 1129,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            351 => 
            array (
                'PokemonHabilidadID' => 2352,
                'PokemonID' => 1130,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            352 => 
            array (
                'PokemonHabilidadID' => 2353,
                'PokemonID' => 1130,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            353 => 
            array (
                'PokemonHabilidadID' => 2354,
                'PokemonID' => 1131,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            354 => 
            array (
                'PokemonHabilidadID' => 2355,
                'PokemonID' => 1131,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            355 => 
            array (
                'PokemonHabilidadID' => 2356,
                'PokemonID' => 1133,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            356 => 
            array (
                'PokemonHabilidadID' => 2357,
                'PokemonID' => 1133,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            357 => 
            array (
                'PokemonHabilidadID' => 2358,
                'PokemonID' => 1134,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            358 => 
            array (
                'PokemonHabilidadID' => 2359,
                'PokemonID' => 1134,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            359 => 
            array (
                'PokemonHabilidadID' => 2360,
                'PokemonID' => 1135,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            360 => 
            array (
                'PokemonHabilidadID' => 2361,
                'PokemonID' => 1135,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            361 => 
            array (
                'PokemonHabilidadID' => 2362,
                'PokemonID' => 1136,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            362 => 
            array (
                'PokemonHabilidadID' => 2363,
                'PokemonID' => 1137,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            363 => 
            array (
                'PokemonHabilidadID' => 2364,
                'PokemonID' => 1138,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            364 => 
            array (
                'PokemonHabilidadID' => 2365,
                'PokemonID' => 1139,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            365 => 
            array (
                'PokemonHabilidadID' => 2366,
                'PokemonID' => 1139,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            366 => 
            array (
                'PokemonHabilidadID' => 2367,
                'PokemonID' => 1140,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            367 => 
            array (
                'PokemonHabilidadID' => 2368,
                'PokemonID' => 1140,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            368 => 
            array (
                'PokemonHabilidadID' => 2369,
                'PokemonID' => 1141,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            369 => 
            array (
                'PokemonHabilidadID' => 2370,
                'PokemonID' => 1141,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            370 => 
            array (
                'PokemonHabilidadID' => 2371,
                'PokemonID' => 1143,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            371 => 
            array (
                'PokemonHabilidadID' => 2372,
                'PokemonID' => 1143,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            372 => 
            array (
                'PokemonHabilidadID' => 2373,
                'PokemonID' => 1144,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            373 => 
            array (
                'PokemonHabilidadID' => 2374,
                'PokemonID' => 1144,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            374 => 
            array (
                'PokemonHabilidadID' => 2375,
                'PokemonID' => 1145,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            375 => 
            array (
                'PokemonHabilidadID' => 2376,
                'PokemonID' => 1145,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            376 => 
            array (
                'PokemonHabilidadID' => 2377,
                'PokemonID' => 1146,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            377 => 
            array (
                'PokemonHabilidadID' => 2378,
                'PokemonID' => 1147,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            378 => 
            array (
                'PokemonHabilidadID' => 2379,
                'PokemonID' => 1148,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            379 => 
            array (
                'PokemonHabilidadID' => 2380,
                'PokemonID' => 1149,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            380 => 
            array (
                'PokemonHabilidadID' => 2381,
                'PokemonID' => 1149,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            381 => 
            array (
                'PokemonHabilidadID' => 2382,
                'PokemonID' => 1150,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            382 => 
            array (
                'PokemonHabilidadID' => 2383,
                'PokemonID' => 1150,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            383 => 
            array (
                'PokemonHabilidadID' => 2384,
                'PokemonID' => 1151,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            384 => 
            array (
                'PokemonHabilidadID' => 2385,
                'PokemonID' => 1151,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            385 => 
            array (
                'PokemonHabilidadID' => 2386,
                'PokemonID' => 1153,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            386 => 
            array (
                'PokemonHabilidadID' => 2387,
                'PokemonID' => 1153,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            387 => 
            array (
                'PokemonHabilidadID' => 2388,
                'PokemonID' => 1154,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            388 => 
            array (
                'PokemonHabilidadID' => 2389,
                'PokemonID' => 1154,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:05',
                'updated_at' => '2023-08-06 21:27:05',
            ),
            389 => 
            array (
                'PokemonHabilidadID' => 2390,
                'PokemonID' => 1155,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            390 => 
            array (
                'PokemonHabilidadID' => 2391,
                'PokemonID' => 1155,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            391 => 
            array (
                'PokemonHabilidadID' => 2392,
                'PokemonID' => 1156,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            392 => 
            array (
                'PokemonHabilidadID' => 2393,
                'PokemonID' => 1157,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            393 => 
            array (
                'PokemonHabilidadID' => 2394,
                'PokemonID' => 1158,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            394 => 
            array (
                'PokemonHabilidadID' => 2395,
                'PokemonID' => 1159,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            395 => 
            array (
                'PokemonHabilidadID' => 2396,
                'PokemonID' => 1159,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            396 => 
            array (
                'PokemonHabilidadID' => 2397,
                'PokemonID' => 1160,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            397 => 
            array (
                'PokemonHabilidadID' => 2398,
                'PokemonID' => 1160,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            398 => 
            array (
                'PokemonHabilidadID' => 2399,
                'PokemonID' => 1161,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            399 => 
            array (
                'PokemonHabilidadID' => 2400,
                'PokemonID' => 1161,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            400 => 
            array (
                'PokemonHabilidadID' => 2401,
                'PokemonID' => 1163,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            401 => 
            array (
                'PokemonHabilidadID' => 2402,
                'PokemonID' => 1163,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            402 => 
            array (
                'PokemonHabilidadID' => 2403,
                'PokemonID' => 1164,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            403 => 
            array (
                'PokemonHabilidadID' => 2404,
                'PokemonID' => 1164,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            404 => 
            array (
                'PokemonHabilidadID' => 2405,
                'PokemonID' => 1165,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            405 => 
            array (
                'PokemonHabilidadID' => 2406,
                'PokemonID' => 1165,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            406 => 
            array (
                'PokemonHabilidadID' => 2407,
                'PokemonID' => 1166,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            407 => 
            array (
                'PokemonHabilidadID' => 2408,
                'PokemonID' => 1167,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            408 => 
            array (
                'PokemonHabilidadID' => 2409,
                'PokemonID' => 1168,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            409 => 
            array (
                'PokemonHabilidadID' => 2410,
                'PokemonID' => 1169,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            410 => 
            array (
                'PokemonHabilidadID' => 2411,
                'PokemonID' => 1169,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            411 => 
            array (
                'PokemonHabilidadID' => 2412,
                'PokemonID' => 1170,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            412 => 
            array (
                'PokemonHabilidadID' => 2413,
                'PokemonID' => 1170,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            413 => 
            array (
                'PokemonHabilidadID' => 2414,
                'PokemonID' => 1171,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            414 => 
            array (
                'PokemonHabilidadID' => 2415,
                'PokemonID' => 1171,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            415 => 
            array (
                'PokemonHabilidadID' => 2416,
                'PokemonID' => 1173,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            416 => 
            array (
                'PokemonHabilidadID' => 2417,
                'PokemonID' => 1173,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            417 => 
            array (
                'PokemonHabilidadID' => 2418,
                'PokemonID' => 1174,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            418 => 
            array (
                'PokemonHabilidadID' => 2419,
                'PokemonID' => 1174,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            419 => 
            array (
                'PokemonHabilidadID' => 2420,
                'PokemonID' => 1175,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            420 => 
            array (
                'PokemonHabilidadID' => 2421,
                'PokemonID' => 1175,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            421 => 
            array (
                'PokemonHabilidadID' => 2422,
                'PokemonID' => 1176,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            422 => 
            array (
                'PokemonHabilidadID' => 2423,
                'PokemonID' => 1177,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            423 => 
            array (
                'PokemonHabilidadID' => 2424,
                'PokemonID' => 1178,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            424 => 
            array (
                'PokemonHabilidadID' => 2425,
                'PokemonID' => 1179,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            425 => 
            array (
                'PokemonHabilidadID' => 2426,
                'PokemonID' => 1179,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            426 => 
            array (
                'PokemonHabilidadID' => 2427,
                'PokemonID' => 1180,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            427 => 
            array (
                'PokemonHabilidadID' => 2428,
                'PokemonID' => 1180,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            428 => 
            array (
                'PokemonHabilidadID' => 2429,
                'PokemonID' => 1181,
                'HabilidadID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            429 => 
            array (
                'PokemonHabilidadID' => 2430,
                'PokemonID' => 1181,
                'HabilidadID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            430 => 
            array (
                'PokemonHabilidadID' => 2431,
                'PokemonID' => 1183,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            431 => 
            array (
                'PokemonHabilidadID' => 2432,
                'PokemonID' => 1183,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            432 => 
            array (
                'PokemonHabilidadID' => 2433,
                'PokemonID' => 1184,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            433 => 
            array (
                'PokemonHabilidadID' => 2434,
                'PokemonID' => 1184,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            434 => 
            array (
                'PokemonHabilidadID' => 2435,
                'PokemonID' => 1185,
                'HabilidadID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            435 => 
            array (
                'PokemonHabilidadID' => 2436,
                'PokemonID' => 1185,
                'HabilidadID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
            436 => 
            array (
                'PokemonHabilidadID' => 2437,
                'PokemonID' => 1186,
                'HabilidadID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-06 21:27:06',
                'updated_at' => '2023-08-06 21:27:06',
            ),
        ));
        
        
    }
}