<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PokemonHabitatTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('PokemonHabitat')->delete();
        
        \DB::table('PokemonHabitat')->insert(array (
            0 => 
            array (
                'PokemonHabitatID' => 1,
                'PokemonID' => 1,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            1 => 
            array (
                'PokemonHabitatID' => 2,
                'PokemonID' => 1,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            2 => 
            array (
                'PokemonHabitatID' => 3,
                'PokemonID' => 2,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            3 => 
            array (
                'PokemonHabitatID' => 4,
                'PokemonID' => 2,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            4 => 
            array (
                'PokemonHabitatID' => 5,
                'PokemonID' => 3,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            5 => 
            array (
                'PokemonHabitatID' => 6,
                'PokemonID' => 3,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            6 => 
            array (
                'PokemonHabitatID' => 7,
                'PokemonID' => 4,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            7 => 
            array (
                'PokemonHabitatID' => 8,
                'PokemonID' => 4,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            8 => 
            array (
                'PokemonHabitatID' => 9,
                'PokemonID' => 5,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            9 => 
            array (
                'PokemonHabitatID' => 10,
                'PokemonID' => 5,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            10 => 
            array (
                'PokemonHabitatID' => 11,
                'PokemonID' => 6,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            11 => 
            array (
                'PokemonHabitatID' => 12,
                'PokemonID' => 7,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            12 => 
            array (
                'PokemonHabitatID' => 13,
                'PokemonID' => 8,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            13 => 
            array (
                'PokemonHabitatID' => 14,
                'PokemonID' => 9,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            14 => 
            array (
                'PokemonHabitatID' => 15,
                'PokemonID' => 10,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            15 => 
            array (
                'PokemonHabitatID' => 16,
                'PokemonID' => 11,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            16 => 
            array (
                'PokemonHabitatID' => 17,
                'PokemonID' => 12,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            17 => 
            array (
                'PokemonHabitatID' => 18,
                'PokemonID' => 13,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            18 => 
            array (
                'PokemonHabitatID' => 19,
                'PokemonID' => 14,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            19 => 
            array (
                'PokemonHabitatID' => 20,
                'PokemonID' => 15,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            20 => 
            array (
                'PokemonHabitatID' => 21,
                'PokemonID' => 16,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            21 => 
            array (
                'PokemonHabitatID' => 22,
                'PokemonID' => 16,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            22 => 
            array (
                'PokemonHabitatID' => 23,
                'PokemonID' => 16,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            23 => 
            array (
                'PokemonHabitatID' => 24,
                'PokemonID' => 17,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            24 => 
            array (
                'PokemonHabitatID' => 25,
                'PokemonID' => 17,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            25 => 
            array (
                'PokemonHabitatID' => 26,
                'PokemonID' => 17,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            26 => 
            array (
                'PokemonHabitatID' => 27,
                'PokemonID' => 18,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            27 => 
            array (
                'PokemonHabitatID' => 28,
                'PokemonID' => 18,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            28 => 
            array (
                'PokemonHabitatID' => 29,
                'PokemonID' => 18,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            29 => 
            array (
                'PokemonHabitatID' => 30,
                'PokemonID' => 19,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            30 => 
            array (
                'PokemonHabitatID' => 31,
                'PokemonID' => 19,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            31 => 
            array (
                'PokemonHabitatID' => 32,
                'PokemonID' => 19,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            32 => 
            array (
                'PokemonHabitatID' => 33,
                'PokemonID' => 20,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            33 => 
            array (
                'PokemonHabitatID' => 34,
                'PokemonID' => 20,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            34 => 
            array (
                'PokemonHabitatID' => 35,
                'PokemonID' => 20,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            35 => 
            array (
                'PokemonHabitatID' => 36,
                'PokemonID' => 21,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            36 => 
            array (
                'PokemonHabitatID' => 37,
                'PokemonID' => 21,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            37 => 
            array (
                'PokemonHabitatID' => 38,
                'PokemonID' => 21,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            38 => 
            array (
                'PokemonHabitatID' => 39,
                'PokemonID' => 22,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            39 => 
            array (
                'PokemonHabitatID' => 40,
                'PokemonID' => 22,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            40 => 
            array (
                'PokemonHabitatID' => 41,
                'PokemonID' => 23,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            41 => 
            array (
                'PokemonHabitatID' => 42,
                'PokemonID' => 23,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            42 => 
            array (
                'PokemonHabitatID' => 43,
                'PokemonID' => 24,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            43 => 
            array (
                'PokemonHabitatID' => 44,
                'PokemonID' => 25,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            44 => 
            array (
                'PokemonHabitatID' => 45,
                'PokemonID' => 25,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            45 => 
            array (
                'PokemonHabitatID' => 46,
                'PokemonID' => 26,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            46 => 
            array (
                'PokemonHabitatID' => 47,
                'PokemonID' => 27,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            47 => 
            array (
                'PokemonHabitatID' => 48,
                'PokemonID' => 28,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            48 => 
            array (
                'PokemonHabitatID' => 49,
                'PokemonID' => 29,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            49 => 
            array (
                'PokemonHabitatID' => 50,
                'PokemonID' => 30,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            50 => 
            array (
                'PokemonHabitatID' => 51,
                'PokemonID' => 30,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            51 => 
            array (
                'PokemonHabitatID' => 52,
                'PokemonID' => 31,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            52 => 
            array (
                'PokemonHabitatID' => 53,
                'PokemonID' => 31,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            53 => 
            array (
                'PokemonHabitatID' => 54,
                'PokemonID' => 32,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            54 => 
            array (
                'PokemonHabitatID' => 55,
                'PokemonID' => 32,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:21',
                'updated_at' => '2023-07-16 13:20:21',
            ),
            55 => 
            array (
                'PokemonHabitatID' => 56,
                'PokemonID' => 33,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            56 => 
            array (
                'PokemonHabitatID' => 57,
                'PokemonID' => 33,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            57 => 
            array (
                'PokemonHabitatID' => 58,
                'PokemonID' => 34,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            58 => 
            array (
                'PokemonHabitatID' => 59,
                'PokemonID' => 34,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            59 => 
            array (
                'PokemonHabitatID' => 60,
                'PokemonID' => 35,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            60 => 
            array (
                'PokemonHabitatID' => 61,
                'PokemonID' => 35,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            61 => 
            array (
                'PokemonHabitatID' => 62,
                'PokemonID' => 36,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            62 => 
            array (
                'PokemonHabitatID' => 63,
                'PokemonID' => 36,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            63 => 
            array (
                'PokemonHabitatID' => 64,
                'PokemonID' => 37,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            64 => 
            array (
                'PokemonHabitatID' => 65,
                'PokemonID' => 37,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            65 => 
            array (
                'PokemonHabitatID' => 66,
                'PokemonID' => 38,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            66 => 
            array (
                'PokemonHabitatID' => 67,
                'PokemonID' => 38,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            67 => 
            array (
                'PokemonHabitatID' => 68,
                'PokemonID' => 39,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            68 => 
            array (
                'PokemonHabitatID' => 69,
                'PokemonID' => 39,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            69 => 
            array (
                'PokemonHabitatID' => 70,
                'PokemonID' => 40,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            70 => 
            array (
                'PokemonHabitatID' => 71,
                'PokemonID' => 40,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            71 => 
            array (
                'PokemonHabitatID' => 72,
                'PokemonID' => 41,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            72 => 
            array (
                'PokemonHabitatID' => 73,
                'PokemonID' => 41,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            73 => 
            array (
                'PokemonHabitatID' => 74,
                'PokemonID' => 42,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            74 => 
            array (
                'PokemonHabitatID' => 75,
                'PokemonID' => 42,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            75 => 
            array (
                'PokemonHabitatID' => 76,
                'PokemonID' => 43,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            76 => 
            array (
                'PokemonHabitatID' => 77,
                'PokemonID' => 43,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            77 => 
            array (
                'PokemonHabitatID' => 78,
                'PokemonID' => 44,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            78 => 
            array (
                'PokemonHabitatID' => 79,
                'PokemonID' => 45,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            79 => 
            array (
                'PokemonHabitatID' => 80,
                'PokemonID' => 46,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            80 => 
            array (
                'PokemonHabitatID' => 81,
                'PokemonID' => 47,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            81 => 
            array (
                'PokemonHabitatID' => 82,
                'PokemonID' => 47,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            82 => 
            array (
                'PokemonHabitatID' => 83,
                'PokemonID' => 48,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            83 => 
            array (
                'PokemonHabitatID' => 84,
                'PokemonID' => 48,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            84 => 
            array (
                'PokemonHabitatID' => 85,
                'PokemonID' => 49,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            85 => 
            array (
                'PokemonHabitatID' => 86,
                'PokemonID' => 49,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            86 => 
            array (
                'PokemonHabitatID' => 87,
                'PokemonID' => 50,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            87 => 
            array (
                'PokemonHabitatID' => 88,
                'PokemonID' => 50,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            88 => 
            array (
                'PokemonHabitatID' => 89,
                'PokemonID' => 51,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            89 => 
            array (
                'PokemonHabitatID' => 90,
                'PokemonID' => 51,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            90 => 
            array (
                'PokemonHabitatID' => 91,
                'PokemonID' => 52,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            91 => 
            array (
                'PokemonHabitatID' => 92,
                'PokemonID' => 52,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            92 => 
            array (
                'PokemonHabitatID' => 93,
                'PokemonID' => 53,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            93 => 
            array (
                'PokemonHabitatID' => 94,
                'PokemonID' => 53,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            94 => 
            array (
                'PokemonHabitatID' => 95,
                'PokemonID' => 54,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            95 => 
            array (
                'PokemonHabitatID' => 96,
                'PokemonID' => 54,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            96 => 
            array (
                'PokemonHabitatID' => 97,
                'PokemonID' => 55,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            97 => 
            array (
                'PokemonHabitatID' => 98,
                'PokemonID' => 55,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            98 => 
            array (
                'PokemonHabitatID' => 99,
                'PokemonID' => 56,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            99 => 
            array (
                'PokemonHabitatID' => 100,
                'PokemonID' => 57,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            100 => 
            array (
                'PokemonHabitatID' => 101,
                'PokemonID' => 58,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            101 => 
            array (
                'PokemonHabitatID' => 102,
                'PokemonID' => 59,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            102 => 
            array (
                'PokemonHabitatID' => 103,
                'PokemonID' => 60,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            103 => 
            array (
                'PokemonHabitatID' => 104,
                'PokemonID' => 60,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            104 => 
            array (
                'PokemonHabitatID' => 105,
                'PokemonID' => 61,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            105 => 
            array (
                'PokemonHabitatID' => 106,
                'PokemonID' => 61,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            106 => 
            array (
                'PokemonHabitatID' => 107,
                'PokemonID' => 62,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            107 => 
            array (
                'PokemonHabitatID' => 108,
                'PokemonID' => 62,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            108 => 
            array (
                'PokemonHabitatID' => 109,
                'PokemonID' => 63,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            109 => 
            array (
                'PokemonHabitatID' => 110,
                'PokemonID' => 63,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            110 => 
            array (
                'PokemonHabitatID' => 111,
                'PokemonID' => 64,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            111 => 
            array (
                'PokemonHabitatID' => 112,
                'PokemonID' => 64,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            112 => 
            array (
                'PokemonHabitatID' => 113,
                'PokemonID' => 65,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            113 => 
            array (
                'PokemonHabitatID' => 114,
                'PokemonID' => 65,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            114 => 
            array (
                'PokemonHabitatID' => 115,
                'PokemonID' => 66,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            115 => 
            array (
                'PokemonHabitatID' => 116,
                'PokemonID' => 66,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            116 => 
            array (
                'PokemonHabitatID' => 117,
                'PokemonID' => 67,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            117 => 
            array (
                'PokemonHabitatID' => 118,
                'PokemonID' => 67,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            118 => 
            array (
                'PokemonHabitatID' => 119,
                'PokemonID' => 68,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            119 => 
            array (
                'PokemonHabitatID' => 120,
                'PokemonID' => 68,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            120 => 
            array (
                'PokemonHabitatID' => 121,
                'PokemonID' => 69,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            121 => 
            array (
                'PokemonHabitatID' => 122,
                'PokemonID' => 69,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            122 => 
            array (
                'PokemonHabitatID' => 123,
                'PokemonID' => 70,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            123 => 
            array (
                'PokemonHabitatID' => 124,
                'PokemonID' => 70,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            124 => 
            array (
                'PokemonHabitatID' => 125,
                'PokemonID' => 71,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            125 => 
            array (
                'PokemonHabitatID' => 126,
                'PokemonID' => 71,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            126 => 
            array (
                'PokemonHabitatID' => 127,
                'PokemonID' => 72,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            127 => 
            array (
                'PokemonHabitatID' => 128,
                'PokemonID' => 73,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            128 => 
            array (
                'PokemonHabitatID' => 129,
                'PokemonID' => 74,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            129 => 
            array (
                'PokemonHabitatID' => 130,
                'PokemonID' => 75,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            130 => 
            array (
                'PokemonHabitatID' => 131,
                'PokemonID' => 76,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            131 => 
            array (
                'PokemonHabitatID' => 132,
                'PokemonID' => 77,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            132 => 
            array (
                'PokemonHabitatID' => 133,
                'PokemonID' => 79,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            133 => 
            array (
                'PokemonHabitatID' => 134,
                'PokemonID' => 79,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            134 => 
            array (
                'PokemonHabitatID' => 135,
                'PokemonID' => 80,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            135 => 
            array (
                'PokemonHabitatID' => 136,
                'PokemonID' => 80,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            136 => 
            array (
                'PokemonHabitatID' => 137,
                'PokemonID' => 81,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            137 => 
            array (
                'PokemonHabitatID' => 138,
                'PokemonID' => 81,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            138 => 
            array (
                'PokemonHabitatID' => 139,
                'PokemonID' => 82,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            139 => 
            array (
                'PokemonHabitatID' => 140,
                'PokemonID' => 82,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            140 => 
            array (
                'PokemonHabitatID' => 141,
                'PokemonID' => 83,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            141 => 
            array (
                'PokemonHabitatID' => 142,
                'PokemonID' => 84,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            142 => 
            array (
                'PokemonHabitatID' => 143,
                'PokemonID' => 85,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            143 => 
            array (
                'PokemonHabitatID' => 144,
                'PokemonID' => 86,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            144 => 
            array (
                'PokemonHabitatID' => 145,
                'PokemonID' => 87,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            145 => 
            array (
                'PokemonHabitatID' => 146,
                'PokemonID' => 88,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            146 => 
            array (
                'PokemonHabitatID' => 147,
                'PokemonID' => 89,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            147 => 
            array (
                'PokemonHabitatID' => 148,
                'PokemonID' => 90,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            148 => 
            array (
                'PokemonHabitatID' => 149,
                'PokemonID' => 90,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            149 => 
            array (
                'PokemonHabitatID' => 150,
                'PokemonID' => 91,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            150 => 
            array (
                'PokemonHabitatID' => 151,
                'PokemonID' => 91,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            151 => 
            array (
                'PokemonHabitatID' => 152,
                'PokemonID' => 92,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            152 => 
            array (
                'PokemonHabitatID' => 153,
                'PokemonID' => 92,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            153 => 
            array (
                'PokemonHabitatID' => 154,
                'PokemonID' => 93,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            154 => 
            array (
                'PokemonHabitatID' => 155,
                'PokemonID' => 93,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            155 => 
            array (
                'PokemonHabitatID' => 156,
                'PokemonID' => 94,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            156 => 
            array (
                'PokemonHabitatID' => 157,
                'PokemonID' => 94,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            157 => 
            array (
                'PokemonHabitatID' => 158,
                'PokemonID' => 95,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            158 => 
            array (
                'PokemonHabitatID' => 159,
                'PokemonID' => 95,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            159 => 
            array (
                'PokemonHabitatID' => 160,
                'PokemonID' => 96,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            160 => 
            array (
                'PokemonHabitatID' => 161,
                'PokemonID' => 96,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            161 => 
            array (
                'PokemonHabitatID' => 162,
                'PokemonID' => 97,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            162 => 
            array (
                'PokemonHabitatID' => 163,
                'PokemonID' => 97,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            163 => 
            array (
                'PokemonHabitatID' => 164,
                'PokemonID' => 98,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            164 => 
            array (
                'PokemonHabitatID' => 165,
                'PokemonID' => 98,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            165 => 
            array (
                'PokemonHabitatID' => 166,
                'PokemonID' => 99,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            166 => 
            array (
                'PokemonHabitatID' => 167,
                'PokemonID' => 99,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            167 => 
            array (
                'PokemonHabitatID' => 168,
                'PokemonID' => 100,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            168 => 
            array (
                'PokemonHabitatID' => 169,
                'PokemonID' => 100,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            169 => 
            array (
                'PokemonHabitatID' => 170,
                'PokemonID' => 101,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            170 => 
            array (
                'PokemonHabitatID' => 171,
                'PokemonID' => 101,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            171 => 
            array (
                'PokemonHabitatID' => 172,
                'PokemonID' => 102,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            172 => 
            array (
                'PokemonHabitatID' => 173,
                'PokemonID' => 102,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            173 => 
            array (
                'PokemonHabitatID' => 174,
                'PokemonID' => 103,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            174 => 
            array (
                'PokemonHabitatID' => 175,
                'PokemonID' => 103,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            175 => 
            array (
                'PokemonHabitatID' => 176,
                'PokemonID' => 104,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            176 => 
            array (
                'PokemonHabitatID' => 177,
                'PokemonID' => 104,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            177 => 
            array (
                'PokemonHabitatID' => 178,
                'PokemonID' => 105,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            178 => 
            array (
                'PokemonHabitatID' => 179,
                'PokemonID' => 105,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            179 => 
            array (
                'PokemonHabitatID' => 180,
                'PokemonID' => 106,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            180 => 
            array (
                'PokemonHabitatID' => 181,
                'PokemonID' => 106,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            181 => 
            array (
                'PokemonHabitatID' => 182,
                'PokemonID' => 107,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            182 => 
            array (
                'PokemonHabitatID' => 183,
                'PokemonID' => 107,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            183 => 
            array (
                'PokemonHabitatID' => 184,
                'PokemonID' => 108,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            184 => 
            array (
                'PokemonHabitatID' => 185,
                'PokemonID' => 108,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            185 => 
            array (
                'PokemonHabitatID' => 186,
                'PokemonID' => 109,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            186 => 
            array (
                'PokemonHabitatID' => 187,
                'PokemonID' => 109,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            187 => 
            array (
                'PokemonHabitatID' => 188,
                'PokemonID' => 110,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            188 => 
            array (
                'PokemonHabitatID' => 189,
                'PokemonID' => 110,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            189 => 
            array (
                'PokemonHabitatID' => 190,
                'PokemonID' => 111,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            190 => 
            array (
                'PokemonHabitatID' => 191,
                'PokemonID' => 111,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            191 => 
            array (
                'PokemonHabitatID' => 192,
                'PokemonID' => 112,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            192 => 
            array (
                'PokemonHabitatID' => 193,
                'PokemonID' => 112,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            193 => 
            array (
                'PokemonHabitatID' => 194,
                'PokemonID' => 113,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            194 => 
            array (
                'PokemonHabitatID' => 195,
                'PokemonID' => 113,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            195 => 
            array (
                'PokemonHabitatID' => 196,
                'PokemonID' => 114,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            196 => 
            array (
                'PokemonHabitatID' => 197,
                'PokemonID' => 114,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            197 => 
            array (
                'PokemonHabitatID' => 198,
                'PokemonID' => 115,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            198 => 
            array (
                'PokemonHabitatID' => 199,
                'PokemonID' => 115,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            199 => 
            array (
                'PokemonHabitatID' => 200,
                'PokemonID' => 116,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            200 => 
            array (
                'PokemonHabitatID' => 201,
                'PokemonID' => 117,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            201 => 
            array (
                'PokemonHabitatID' => 202,
                'PokemonID' => 118,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            202 => 
            array (
                'PokemonHabitatID' => 203,
                'PokemonID' => 119,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            203 => 
            array (
                'PokemonHabitatID' => 204,
                'PokemonID' => 120,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            204 => 
            array (
                'PokemonHabitatID' => 205,
                'PokemonID' => 121,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            205 => 
            array (
                'PokemonHabitatID' => 206,
                'PokemonID' => 122,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            206 => 
            array (
                'PokemonHabitatID' => 207,
                'PokemonID' => 122,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            207 => 
            array (
                'PokemonHabitatID' => 208,
                'PokemonID' => 123,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            208 => 
            array (
                'PokemonHabitatID' => 209,
                'PokemonID' => 123,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            209 => 
            array (
                'PokemonHabitatID' => 210,
                'PokemonID' => 124,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            210 => 
            array (
                'PokemonHabitatID' => 211,
                'PokemonID' => 124,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            211 => 
            array (
                'PokemonHabitatID' => 212,
                'PokemonID' => 125,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            212 => 
            array (
                'PokemonHabitatID' => 213,
                'PokemonID' => 125,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            213 => 
            array (
                'PokemonHabitatID' => 214,
                'PokemonID' => 126,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            214 => 
            array (
                'PokemonHabitatID' => 215,
                'PokemonID' => 126,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            215 => 
            array (
                'PokemonHabitatID' => 216,
                'PokemonID' => 127,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            216 => 
            array (
                'PokemonHabitatID' => 217,
                'PokemonID' => 127,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            217 => 
            array (
                'PokemonHabitatID' => 218,
                'PokemonID' => 128,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            218 => 
            array (
                'PokemonHabitatID' => 219,
                'PokemonID' => 128,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            219 => 
            array (
                'PokemonHabitatID' => 220,
                'PokemonID' => 129,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            220 => 
            array (
                'PokemonHabitatID' => 221,
                'PokemonID' => 130,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            221 => 
            array (
                'PokemonHabitatID' => 222,
                'PokemonID' => 131,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            222 => 
            array (
                'PokemonHabitatID' => 223,
                'PokemonID' => 132,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            223 => 
            array (
                'PokemonHabitatID' => 224,
                'PokemonID' => 133,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            224 => 
            array (
                'PokemonHabitatID' => 225,
                'PokemonID' => 134,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            225 => 
            array (
                'PokemonHabitatID' => 226,
                'PokemonID' => 134,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            226 => 
            array (
                'PokemonHabitatID' => 227,
                'PokemonID' => 135,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            227 => 
            array (
                'PokemonHabitatID' => 228,
                'PokemonID' => 135,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            228 => 
            array (
                'PokemonHabitatID' => 229,
                'PokemonID' => 136,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            229 => 
            array (
                'PokemonHabitatID' => 230,
                'PokemonID' => 136,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            230 => 
            array (
                'PokemonHabitatID' => 231,
                'PokemonID' => 137,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            231 => 
            array (
                'PokemonHabitatID' => 232,
                'PokemonID' => 137,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            232 => 
            array (
                'PokemonHabitatID' => 233,
                'PokemonID' => 138,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            233 => 
            array (
                'PokemonHabitatID' => 234,
                'PokemonID' => 138,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            234 => 
            array (
                'PokemonHabitatID' => 235,
                'PokemonID' => 139,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            235 => 
            array (
                'PokemonHabitatID' => 236,
                'PokemonID' => 139,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            236 => 
            array (
                'PokemonHabitatID' => 237,
                'PokemonID' => 140,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            237 => 
            array (
                'PokemonHabitatID' => 238,
                'PokemonID' => 140,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            238 => 
            array (
                'PokemonHabitatID' => 239,
                'PokemonID' => 141,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            239 => 
            array (
                'PokemonHabitatID' => 240,
                'PokemonID' => 141,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            240 => 
            array (
                'PokemonHabitatID' => 241,
                'PokemonID' => 142,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            241 => 
            array (
                'PokemonHabitatID' => 242,
                'PokemonID' => 142,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            242 => 
            array (
                'PokemonHabitatID' => 243,
                'PokemonID' => 142,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            243 => 
            array (
                'PokemonHabitatID' => 244,
                'PokemonID' => 143,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            244 => 
            array (
                'PokemonHabitatID' => 245,
                'PokemonID' => 143,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            245 => 
            array (
                'PokemonHabitatID' => 246,
                'PokemonID' => 143,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            246 => 
            array (
                'PokemonHabitatID' => 247,
                'PokemonID' => 144,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            247 => 
            array (
                'PokemonHabitatID' => 248,
                'PokemonID' => 145,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            248 => 
            array (
                'PokemonHabitatID' => 249,
                'PokemonID' => 146,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            249 => 
            array (
                'PokemonHabitatID' => 250,
                'PokemonID' => 147,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            250 => 
            array (
                'PokemonHabitatID' => 251,
                'PokemonID' => 148,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            251 => 
            array (
                'PokemonHabitatID' => 252,
                'PokemonID' => 148,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            252 => 
            array (
                'PokemonHabitatID' => 253,
                'PokemonID' => 148,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            253 => 
            array (
                'PokemonHabitatID' => 254,
                'PokemonID' => 149,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            254 => 
            array (
                'PokemonHabitatID' => 255,
                'PokemonID' => 149,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            255 => 
            array (
                'PokemonHabitatID' => 256,
                'PokemonID' => 149,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            256 => 
            array (
                'PokemonHabitatID' => 257,
                'PokemonID' => 150,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            257 => 
            array (
                'PokemonHabitatID' => 258,
                'PokemonID' => 150,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            258 => 
            array (
                'PokemonHabitatID' => 259,
                'PokemonID' => 150,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            259 => 
            array (
                'PokemonHabitatID' => 260,
                'PokemonID' => 151,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            260 => 
            array (
                'PokemonHabitatID' => 261,
                'PokemonID' => 151,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            261 => 
            array (
                'PokemonHabitatID' => 262,
                'PokemonID' => 151,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            262 => 
            array (
                'PokemonHabitatID' => 263,
                'PokemonID' => 152,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            263 => 
            array (
                'PokemonHabitatID' => 264,
                'PokemonID' => 153,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            264 => 
            array (
                'PokemonHabitatID' => 265,
                'PokemonID' => 154,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            265 => 
            array (
                'PokemonHabitatID' => 266,
                'PokemonID' => 154,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            266 => 
            array (
                'PokemonHabitatID' => 267,
                'PokemonID' => 154,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            267 => 
            array (
                'PokemonHabitatID' => 268,
                'PokemonID' => 155,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            268 => 
            array (
                'PokemonHabitatID' => 269,
                'PokemonID' => 155,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            269 => 
            array (
                'PokemonHabitatID' => 270,
                'PokemonID' => 156,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            270 => 
            array (
                'PokemonHabitatID' => 271,
                'PokemonID' => 156,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            271 => 
            array (
                'PokemonHabitatID' => 272,
                'PokemonID' => 156,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            272 => 
            array (
                'PokemonHabitatID' => 273,
                'PokemonID' => 157,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            273 => 
            array (
                'PokemonHabitatID' => 274,
                'PokemonID' => 157,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            274 => 
            array (
                'PokemonHabitatID' => 275,
                'PokemonID' => 157,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            275 => 
            array (
                'PokemonHabitatID' => 276,
                'PokemonID' => 158,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            276 => 
            array (
                'PokemonHabitatID' => 277,
                'PokemonID' => 158,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            277 => 
            array (
                'PokemonHabitatID' => 278,
                'PokemonID' => 158,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            278 => 
            array (
                'PokemonHabitatID' => 279,
                'PokemonID' => 159,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            279 => 
            array (
                'PokemonHabitatID' => 280,
                'PokemonID' => 159,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            280 => 
            array (
                'PokemonHabitatID' => 281,
                'PokemonID' => 159,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            281 => 
            array (
                'PokemonHabitatID' => 282,
                'PokemonID' => 160,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            282 => 
            array (
                'PokemonHabitatID' => 283,
                'PokemonID' => 160,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            283 => 
            array (
                'PokemonHabitatID' => 284,
                'PokemonID' => 161,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            284 => 
            array (
                'PokemonHabitatID' => 285,
                'PokemonID' => 161,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            285 => 
            array (
                'PokemonHabitatID' => 286,
                'PokemonID' => 162,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            286 => 
            array (
                'PokemonHabitatID' => 287,
                'PokemonID' => 163,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            287 => 
            array (
                'PokemonHabitatID' => 288,
                'PokemonID' => 164,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            288 => 
            array (
                'PokemonHabitatID' => 289,
                'PokemonID' => 164,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            289 => 
            array (
                'PokemonHabitatID' => 290,
                'PokemonID' => 164,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            290 => 
            array (
                'PokemonHabitatID' => 291,
                'PokemonID' => 165,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            291 => 
            array (
                'PokemonHabitatID' => 292,
                'PokemonID' => 165,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            292 => 
            array (
                'PokemonHabitatID' => 293,
                'PokemonID' => 165,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            293 => 
            array (
                'PokemonHabitatID' => 294,
                'PokemonID' => 166,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            294 => 
            array (
                'PokemonHabitatID' => 295,
                'PokemonID' => 166,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            295 => 
            array (
                'PokemonHabitatID' => 296,
                'PokemonID' => 167,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            296 => 
            array (
                'PokemonHabitatID' => 297,
                'PokemonID' => 167,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            297 => 
            array (
                'PokemonHabitatID' => 298,
                'PokemonID' => 168,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            298 => 
            array (
                'PokemonHabitatID' => 299,
                'PokemonID' => 168,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            299 => 
            array (
                'PokemonHabitatID' => 300,
                'PokemonID' => 169,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            300 => 
            array (
                'PokemonHabitatID' => 301,
                'PokemonID' => 169,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            301 => 
            array (
                'PokemonHabitatID' => 302,
                'PokemonID' => 170,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            302 => 
            array (
                'PokemonHabitatID' => 303,
                'PokemonID' => 170,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            303 => 
            array (
                'PokemonHabitatID' => 304,
                'PokemonID' => 170,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            304 => 
            array (
                'PokemonHabitatID' => 305,
                'PokemonID' => 171,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            305 => 
            array (
                'PokemonHabitatID' => 306,
                'PokemonID' => 171,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            306 => 
            array (
                'PokemonHabitatID' => 307,
                'PokemonID' => 171,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            307 => 
            array (
                'PokemonHabitatID' => 308,
                'PokemonID' => 172,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            308 => 
            array (
                'PokemonHabitatID' => 309,
                'PokemonID' => 172,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            309 => 
            array (
                'PokemonHabitatID' => 310,
                'PokemonID' => 172,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            310 => 
            array (
                'PokemonHabitatID' => 311,
                'PokemonID' => 173,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            311 => 
            array (
                'PokemonHabitatID' => 312,
                'PokemonID' => 173,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            312 => 
            array (
                'PokemonHabitatID' => 313,
                'PokemonID' => 173,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            313 => 
            array (
                'PokemonHabitatID' => 314,
                'PokemonID' => 174,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            314 => 
            array (
                'PokemonHabitatID' => 315,
                'PokemonID' => 174,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            315 => 
            array (
                'PokemonHabitatID' => 316,
                'PokemonID' => 174,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            316 => 
            array (
                'PokemonHabitatID' => 317,
                'PokemonID' => 175,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            317 => 
            array (
                'PokemonHabitatID' => 318,
                'PokemonID' => 175,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            318 => 
            array (
                'PokemonHabitatID' => 319,
                'PokemonID' => 176,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            319 => 
            array (
                'PokemonHabitatID' => 320,
                'PokemonID' => 176,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            320 => 
            array (
                'PokemonHabitatID' => 321,
                'PokemonID' => 177,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            321 => 
            array (
                'PokemonHabitatID' => 322,
                'PokemonID' => 177,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            322 => 
            array (
                'PokemonHabitatID' => 323,
                'PokemonID' => 178,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            323 => 
            array (
                'PokemonHabitatID' => 324,
                'PokemonID' => 178,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            324 => 
            array (
                'PokemonHabitatID' => 325,
                'PokemonID' => 178,
                'HabitatID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            325 => 
            array (
                'PokemonHabitatID' => 326,
                'PokemonID' => 179,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            326 => 
            array (
                'PokemonHabitatID' => 327,
                'PokemonID' => 180,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            327 => 
            array (
                'PokemonHabitatID' => 328,
                'PokemonID' => 181,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            328 => 
            array (
                'PokemonHabitatID' => 329,
                'PokemonID' => 181,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            329 => 
            array (
                'PokemonHabitatID' => 330,
                'PokemonID' => 182,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            330 => 
            array (
                'PokemonHabitatID' => 331,
                'PokemonID' => 182,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            331 => 
            array (
                'PokemonHabitatID' => 332,
                'PokemonID' => 183,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            332 => 
            array (
                'PokemonHabitatID' => 333,
                'PokemonID' => 183,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            333 => 
            array (
                'PokemonHabitatID' => 334,
                'PokemonID' => 183,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            334 => 
            array (
                'PokemonHabitatID' => 335,
                'PokemonID' => 184,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            335 => 
            array (
                'PokemonHabitatID' => 336,
                'PokemonID' => 184,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            336 => 
            array (
                'PokemonHabitatID' => 337,
                'PokemonID' => 185,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            337 => 
            array (
                'PokemonHabitatID' => 338,
                'PokemonID' => 185,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            338 => 
            array (
                'PokemonHabitatID' => 339,
                'PokemonID' => 186,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            339 => 
            array (
                'PokemonHabitatID' => 340,
                'PokemonID' => 186,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            340 => 
            array (
                'PokemonHabitatID' => 341,
                'PokemonID' => 187,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            341 => 
            array (
                'PokemonHabitatID' => 342,
                'PokemonID' => 187,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            342 => 
            array (
                'PokemonHabitatID' => 343,
                'PokemonID' => 188,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            343 => 
            array (
                'PokemonHabitatID' => 344,
                'PokemonID' => 188,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            344 => 
            array (
                'PokemonHabitatID' => 345,
                'PokemonID' => 189,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            345 => 
            array (
                'PokemonHabitatID' => 346,
                'PokemonID' => 189,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            346 => 
            array (
                'PokemonHabitatID' => 347,
                'PokemonID' => 190,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            347 => 
            array (
                'PokemonHabitatID' => 348,
                'PokemonID' => 190,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            348 => 
            array (
                'PokemonHabitatID' => 349,
                'PokemonID' => 191,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            349 => 
            array (
                'PokemonHabitatID' => 350,
                'PokemonID' => 191,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            350 => 
            array (
                'PokemonHabitatID' => 351,
                'PokemonID' => 192,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            351 => 
            array (
                'PokemonHabitatID' => 352,
                'PokemonID' => 192,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            352 => 
            array (
                'PokemonHabitatID' => 353,
                'PokemonID' => 193,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            353 => 
            array (
                'PokemonHabitatID' => 354,
                'PokemonID' => 193,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            354 => 
            array (
                'PokemonHabitatID' => 355,
                'PokemonID' => 193,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            355 => 
            array (
                'PokemonHabitatID' => 356,
                'PokemonID' => 193,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            356 => 
            array (
                'PokemonHabitatID' => 357,
                'PokemonID' => 194,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            357 => 
            array (
                'PokemonHabitatID' => 358,
                'PokemonID' => 194,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            358 => 
            array (
                'PokemonHabitatID' => 359,
                'PokemonID' => 194,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            359 => 
            array (
                'PokemonHabitatID' => 360,
                'PokemonID' => 194,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            360 => 
            array (
                'PokemonHabitatID' => 361,
                'PokemonID' => 195,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            361 => 
            array (
                'PokemonHabitatID' => 362,
                'PokemonID' => 195,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            362 => 
            array (
                'PokemonHabitatID' => 363,
                'PokemonID' => 195,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            363 => 
            array (
                'PokemonHabitatID' => 364,
                'PokemonID' => 195,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            364 => 
            array (
                'PokemonHabitatID' => 365,
                'PokemonID' => 196,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            365 => 
            array (
                'PokemonHabitatID' => 366,
                'PokemonID' => 196,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            366 => 
            array (
                'PokemonHabitatID' => 367,
                'PokemonID' => 196,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            367 => 
            array (
                'PokemonHabitatID' => 368,
                'PokemonID' => 197,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            368 => 
            array (
                'PokemonHabitatID' => 369,
                'PokemonID' => 197,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            369 => 
            array (
                'PokemonHabitatID' => 370,
                'PokemonID' => 197,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            370 => 
            array (
                'PokemonHabitatID' => 371,
                'PokemonID' => 198,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            371 => 
            array (
                'PokemonHabitatID' => 372,
                'PokemonID' => 198,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            372 => 
            array (
                'PokemonHabitatID' => 373,
                'PokemonID' => 198,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            373 => 
            array (
                'PokemonHabitatID' => 374,
                'PokemonID' => 199,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            374 => 
            array (
                'PokemonHabitatID' => 375,
                'PokemonID' => 199,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            375 => 
            array (
                'PokemonHabitatID' => 376,
                'PokemonID' => 200,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            376 => 
            array (
                'PokemonHabitatID' => 377,
                'PokemonID' => 200,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            377 => 
            array (
                'PokemonHabitatID' => 378,
                'PokemonID' => 201,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            378 => 
            array (
                'PokemonHabitatID' => 379,
                'PokemonID' => 201,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            379 => 
            array (
                'PokemonHabitatID' => 380,
                'PokemonID' => 202,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            380 => 
            array (
                'PokemonHabitatID' => 381,
                'PokemonID' => 202,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            381 => 
            array (
                'PokemonHabitatID' => 382,
                'PokemonID' => 203,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            382 => 
            array (
                'PokemonHabitatID' => 383,
                'PokemonID' => 203,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            383 => 
            array (
                'PokemonHabitatID' => 384,
                'PokemonID' => 203,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            384 => 
            array (
                'PokemonHabitatID' => 385,
                'PokemonID' => 203,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            385 => 
            array (
                'PokemonHabitatID' => 386,
                'PokemonID' => 204,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            386 => 
            array (
                'PokemonHabitatID' => 387,
                'PokemonID' => 204,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            387 => 
            array (
                'PokemonHabitatID' => 388,
                'PokemonID' => 204,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            388 => 
            array (
                'PokemonHabitatID' => 389,
                'PokemonID' => 204,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            389 => 
            array (
                'PokemonHabitatID' => 390,
                'PokemonID' => 205,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            390 => 
            array (
                'PokemonHabitatID' => 391,
                'PokemonID' => 205,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            391 => 
            array (
                'PokemonHabitatID' => 392,
                'PokemonID' => 205,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            392 => 
            array (
                'PokemonHabitatID' => 393,
                'PokemonID' => 206,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            393 => 
            array (
                'PokemonHabitatID' => 394,
                'PokemonID' => 206,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            394 => 
            array (
                'PokemonHabitatID' => 395,
                'PokemonID' => 206,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            395 => 
            array (
                'PokemonHabitatID' => 396,
                'PokemonID' => 207,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            396 => 
            array (
                'PokemonHabitatID' => 397,
                'PokemonID' => 207,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            397 => 
            array (
                'PokemonHabitatID' => 398,
                'PokemonID' => 207,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            398 => 
            array (
                'PokemonHabitatID' => 399,
                'PokemonID' => 208,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            399 => 
            array (
                'PokemonHabitatID' => 400,
                'PokemonID' => 208,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            400 => 
            array (
                'PokemonHabitatID' => 401,
                'PokemonID' => 208,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            401 => 
            array (
                'PokemonHabitatID' => 402,
                'PokemonID' => 209,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            402 => 
            array (
                'PokemonHabitatID' => 403,
                'PokemonID' => 209,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            403 => 
            array (
                'PokemonHabitatID' => 404,
                'PokemonID' => 209,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            404 => 
            array (
                'PokemonHabitatID' => 405,
                'PokemonID' => 210,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            405 => 
            array (
                'PokemonHabitatID' => 406,
                'PokemonID' => 210,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            406 => 
            array (
                'PokemonHabitatID' => 407,
                'PokemonID' => 210,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            407 => 
            array (
                'PokemonHabitatID' => 408,
                'PokemonID' => 211,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            408 => 
            array (
                'PokemonHabitatID' => 409,
                'PokemonID' => 211,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            409 => 
            array (
                'PokemonHabitatID' => 410,
                'PokemonID' => 212,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            410 => 
            array (
                'PokemonHabitatID' => 411,
                'PokemonID' => 212,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            411 => 
            array (
                'PokemonHabitatID' => 412,
                'PokemonID' => 213,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            412 => 
            array (
                'PokemonHabitatID' => 413,
                'PokemonID' => 213,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            413 => 
            array (
                'PokemonHabitatID' => 414,
                'PokemonID' => 213,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            414 => 
            array (
                'PokemonHabitatID' => 415,
                'PokemonID' => 213,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            415 => 
            array (
                'PokemonHabitatID' => 416,
                'PokemonID' => 214,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            416 => 
            array (
                'PokemonHabitatID' => 417,
                'PokemonID' => 214,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            417 => 
            array (
                'PokemonHabitatID' => 418,
                'PokemonID' => 214,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            418 => 
            array (
                'PokemonHabitatID' => 419,
                'PokemonID' => 214,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            419 => 
            array (
                'PokemonHabitatID' => 420,
                'PokemonID' => 215,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            420 => 
            array (
                'PokemonHabitatID' => 421,
                'PokemonID' => 215,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            421 => 
            array (
                'PokemonHabitatID' => 422,
                'PokemonID' => 215,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            422 => 
            array (
                'PokemonHabitatID' => 423,
                'PokemonID' => 216,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            423 => 
            array (
                'PokemonHabitatID' => 424,
                'PokemonID' => 216,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            424 => 
            array (
                'PokemonHabitatID' => 425,
                'PokemonID' => 216,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            425 => 
            array (
                'PokemonHabitatID' => 426,
                'PokemonID' => 217,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            426 => 
            array (
                'PokemonHabitatID' => 427,
                'PokemonID' => 217,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            427 => 
            array (
                'PokemonHabitatID' => 428,
                'PokemonID' => 217,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            428 => 
            array (
                'PokemonHabitatID' => 429,
                'PokemonID' => 217,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            429 => 
            array (
                'PokemonHabitatID' => 430,
                'PokemonID' => 218,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            430 => 
            array (
                'PokemonHabitatID' => 431,
                'PokemonID' => 218,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            431 => 
            array (
                'PokemonHabitatID' => 432,
                'PokemonID' => 219,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            432 => 
            array (
                'PokemonHabitatID' => 433,
                'PokemonID' => 219,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            433 => 
            array (
                'PokemonHabitatID' => 434,
                'PokemonID' => 219,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            434 => 
            array (
                'PokemonHabitatID' => 435,
                'PokemonID' => 219,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            435 => 
            array (
                'PokemonHabitatID' => 436,
                'PokemonID' => 220,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            436 => 
            array (
                'PokemonHabitatID' => 437,
                'PokemonID' => 220,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            437 => 
            array (
                'PokemonHabitatID' => 438,
                'PokemonID' => 221,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            438 => 
            array (
                'PokemonHabitatID' => 439,
                'PokemonID' => 221,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            439 => 
            array (
                'PokemonHabitatID' => 440,
                'PokemonID' => 222,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            440 => 
            array (
                'PokemonHabitatID' => 441,
                'PokemonID' => 222,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            441 => 
            array (
                'PokemonHabitatID' => 442,
                'PokemonID' => 223,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            442 => 
            array (
                'PokemonHabitatID' => 443,
                'PokemonID' => 223,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            443 => 
            array (
                'PokemonHabitatID' => 444,
                'PokemonID' => 223,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            444 => 
            array (
                'PokemonHabitatID' => 445,
                'PokemonID' => 224,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            445 => 
            array (
                'PokemonHabitatID' => 446,
                'PokemonID' => 224,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            446 => 
            array (
                'PokemonHabitatID' => 447,
                'PokemonID' => 224,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            447 => 
            array (
                'PokemonHabitatID' => 448,
                'PokemonID' => 227,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            448 => 
            array (
                'PokemonHabitatID' => 449,
                'PokemonID' => 228,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            449 => 
            array (
                'PokemonHabitatID' => 450,
                'PokemonID' => 229,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            450 => 
            array (
                'PokemonHabitatID' => 451,
                'PokemonID' => 230,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            451 => 
            array (
                'PokemonHabitatID' => 452,
                'PokemonID' => 231,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            452 => 
            array (
                'PokemonHabitatID' => 453,
                'PokemonID' => 231,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            453 => 
            array (
                'PokemonHabitatID' => 454,
                'PokemonID' => 232,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            454 => 
            array (
                'PokemonHabitatID' => 455,
                'PokemonID' => 232,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            455 => 
            array (
                'PokemonHabitatID' => 456,
                'PokemonID' => 233,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            456 => 
            array (
                'PokemonHabitatID' => 457,
                'PokemonID' => 233,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            457 => 
            array (
                'PokemonHabitatID' => 458,
                'PokemonID' => 234,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            458 => 
            array (
                'PokemonHabitatID' => 459,
                'PokemonID' => 234,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            459 => 
            array (
                'PokemonHabitatID' => 460,
                'PokemonID' => 235,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            460 => 
            array (
                'PokemonHabitatID' => 461,
                'PokemonID' => 235,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            461 => 
            array (
                'PokemonHabitatID' => 462,
                'PokemonID' => 236,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            462 => 
            array (
                'PokemonHabitatID' => 463,
                'PokemonID' => 236,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            463 => 
            array (
                'PokemonHabitatID' => 464,
                'PokemonID' => 237,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            464 => 
            array (
                'PokemonHabitatID' => 465,
                'PokemonID' => 237,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            465 => 
            array (
                'PokemonHabitatID' => 466,
                'PokemonID' => 238,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            466 => 
            array (
                'PokemonHabitatID' => 467,
                'PokemonID' => 238,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            467 => 
            array (
                'PokemonHabitatID' => 468,
                'PokemonID' => 239,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            468 => 
            array (
                'PokemonHabitatID' => 469,
                'PokemonID' => 239,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            469 => 
            array (
                'PokemonHabitatID' => 470,
                'PokemonID' => 240,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            470 => 
            array (
                'PokemonHabitatID' => 471,
                'PokemonID' => 240,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            471 => 
            array (
                'PokemonHabitatID' => 472,
                'PokemonID' => 241,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            472 => 
            array (
                'PokemonHabitatID' => 473,
                'PokemonID' => 241,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            473 => 
            array (
                'PokemonHabitatID' => 474,
                'PokemonID' => 242,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            474 => 
            array (
                'PokemonHabitatID' => 475,
                'PokemonID' => 242,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            475 => 
            array (
                'PokemonHabitatID' => 476,
                'PokemonID' => 243,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            476 => 
            array (
                'PokemonHabitatID' => 477,
                'PokemonID' => 243,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            477 => 
            array (
                'PokemonHabitatID' => 478,
                'PokemonID' => 244,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            478 => 
            array (
                'PokemonHabitatID' => 479,
                'PokemonID' => 244,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            479 => 
            array (
                'PokemonHabitatID' => 480,
                'PokemonID' => 245,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            480 => 
            array (
                'PokemonHabitatID' => 481,
                'PokemonID' => 245,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            481 => 
            array (
                'PokemonHabitatID' => 482,
                'PokemonID' => 246,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            482 => 
            array (
                'PokemonHabitatID' => 483,
                'PokemonID' => 246,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            483 => 
            array (
                'PokemonHabitatID' => 484,
                'PokemonID' => 247,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            484 => 
            array (
                'PokemonHabitatID' => 485,
                'PokemonID' => 247,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            485 => 
            array (
                'PokemonHabitatID' => 486,
                'PokemonID' => 248,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            486 => 
            array (
                'PokemonHabitatID' => 487,
                'PokemonID' => 248,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            487 => 
            array (
                'PokemonHabitatID' => 488,
                'PokemonID' => 249,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            488 => 
            array (
                'PokemonHabitatID' => 489,
                'PokemonID' => 249,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            489 => 
            array (
                'PokemonHabitatID' => 490,
                'PokemonID' => 251,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            490 => 
            array (
                'PokemonHabitatID' => 491,
                'PokemonID' => 251,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            491 => 
            array (
                'PokemonHabitatID' => 492,
                'PokemonID' => 253,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            492 => 
            array (
                'PokemonHabitatID' => 493,
                'PokemonID' => 253,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            493 => 
            array (
                'PokemonHabitatID' => 494,
                'PokemonID' => 253,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            494 => 
            array (
                'PokemonHabitatID' => 495,
                'PokemonID' => 254,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            495 => 
            array (
                'PokemonHabitatID' => 496,
                'PokemonID' => 254,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            496 => 
            array (
                'PokemonHabitatID' => 497,
                'PokemonID' => 254,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            497 => 
            array (
                'PokemonHabitatID' => 498,
                'PokemonID' => 255,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            498 => 
            array (
                'PokemonHabitatID' => 499,
                'PokemonID' => 255,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            499 => 
            array (
                'PokemonHabitatID' => 500,
                'PokemonID' => 255,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
        ));
        \DB::table('PokemonHabitat')->insert(array (
            0 => 
            array (
                'PokemonHabitatID' => 501,
                'PokemonID' => 256,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            1 => 
            array (
                'PokemonHabitatID' => 502,
                'PokemonID' => 256,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            2 => 
            array (
                'PokemonHabitatID' => 503,
                'PokemonID' => 257,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            3 => 
            array (
                'PokemonHabitatID' => 504,
                'PokemonID' => 257,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            4 => 
            array (
                'PokemonHabitatID' => 505,
                'PokemonID' => 258,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            5 => 
            array (
                'PokemonHabitatID' => 506,
                'PokemonID' => 258,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            6 => 
            array (
                'PokemonHabitatID' => 507,
                'PokemonID' => 259,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            7 => 
            array (
                'PokemonHabitatID' => 508,
                'PokemonID' => 260,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            8 => 
            array (
                'PokemonHabitatID' => 509,
                'PokemonID' => 260,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            9 => 
            array (
                'PokemonHabitatID' => 510,
                'PokemonID' => 261,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            10 => 
            array (
                'PokemonHabitatID' => 511,
                'PokemonID' => 261,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            11 => 
            array (
                'PokemonHabitatID' => 512,
                'PokemonID' => 262,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            12 => 
            array (
                'PokemonHabitatID' => 513,
                'PokemonID' => 262,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            13 => 
            array (
                'PokemonHabitatID' => 514,
                'PokemonID' => 263,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            14 => 
            array (
                'PokemonHabitatID' => 515,
                'PokemonID' => 263,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            15 => 
            array (
                'PokemonHabitatID' => 516,
                'PokemonID' => 264,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            16 => 
            array (
                'PokemonHabitatID' => 517,
                'PokemonID' => 264,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            17 => 
            array (
                'PokemonHabitatID' => 518,
                'PokemonID' => 265,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            18 => 
            array (
                'PokemonHabitatID' => 519,
                'PokemonID' => 265,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            19 => 
            array (
                'PokemonHabitatID' => 520,
                'PokemonID' => 266,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            20 => 
            array (
                'PokemonHabitatID' => 521,
                'PokemonID' => 267,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            21 => 
            array (
                'PokemonHabitatID' => 522,
                'PokemonID' => 268,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            22 => 
            array (
                'PokemonHabitatID' => 523,
                'PokemonID' => 269,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            23 => 
            array (
                'PokemonHabitatID' => 524,
                'PokemonID' => 270,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            24 => 
            array (
                'PokemonHabitatID' => 525,
                'PokemonID' => 270,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            25 => 
            array (
                'PokemonHabitatID' => 526,
                'PokemonID' => 271,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            26 => 
            array (
                'PokemonHabitatID' => 527,
                'PokemonID' => 271,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            27 => 
            array (
                'PokemonHabitatID' => 528,
                'PokemonID' => 272,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            28 => 
            array (
                'PokemonHabitatID' => 529,
                'PokemonID' => 272,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            29 => 
            array (
                'PokemonHabitatID' => 530,
                'PokemonID' => 273,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            30 => 
            array (
                'PokemonHabitatID' => 531,
                'PokemonID' => 273,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            31 => 
            array (
                'PokemonHabitatID' => 532,
                'PokemonID' => 274,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            32 => 
            array (
                'PokemonHabitatID' => 533,
                'PokemonID' => 274,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            33 => 
            array (
                'PokemonHabitatID' => 534,
                'PokemonID' => 275,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            34 => 
            array (
                'PokemonHabitatID' => 535,
                'PokemonID' => 275,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            35 => 
            array (
                'PokemonHabitatID' => 536,
                'PokemonID' => 276,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            36 => 
            array (
                'PokemonHabitatID' => 537,
                'PokemonID' => 276,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            37 => 
            array (
                'PokemonHabitatID' => 538,
                'PokemonID' => 277,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            38 => 
            array (
                'PokemonHabitatID' => 539,
                'PokemonID' => 277,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            39 => 
            array (
                'PokemonHabitatID' => 540,
                'PokemonID' => 278,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            40 => 
            array (
                'PokemonHabitatID' => 541,
                'PokemonID' => 279,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            41 => 
            array (
                'PokemonHabitatID' => 542,
                'PokemonID' => 280,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            42 => 
            array (
                'PokemonHabitatID' => 543,
                'PokemonID' => 281,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            43 => 
            array (
                'PokemonHabitatID' => 544,
                'PokemonID' => 282,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            44 => 
            array (
                'PokemonHabitatID' => 545,
                'PokemonID' => 283,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            45 => 
            array (
                'PokemonHabitatID' => 546,
                'PokemonID' => 283,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            46 => 
            array (
                'PokemonHabitatID' => 547,
                'PokemonID' => 283,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            47 => 
            array (
                'PokemonHabitatID' => 548,
                'PokemonID' => 284,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            48 => 
            array (
                'PokemonHabitatID' => 549,
                'PokemonID' => 284,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            49 => 
            array (
                'PokemonHabitatID' => 550,
                'PokemonID' => 284,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            50 => 
            array (
                'PokemonHabitatID' => 551,
                'PokemonID' => 285,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            51 => 
            array (
                'PokemonHabitatID' => 552,
                'PokemonID' => 285,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            52 => 
            array (
                'PokemonHabitatID' => 553,
                'PokemonID' => 285,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            53 => 
            array (
                'PokemonHabitatID' => 554,
                'PokemonID' => 286,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            54 => 
            array (
                'PokemonHabitatID' => 555,
                'PokemonID' => 287,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            55 => 
            array (
                'PokemonHabitatID' => 556,
                'PokemonID' => 290,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            56 => 
            array (
                'PokemonHabitatID' => 557,
                'PokemonID' => 290,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            57 => 
            array (
                'PokemonHabitatID' => 558,
                'PokemonID' => 291,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            58 => 
            array (
                'PokemonHabitatID' => 559,
                'PokemonID' => 291,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            59 => 
            array (
                'PokemonHabitatID' => 560,
                'PokemonID' => 292,
                'HabitatID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            60 => 
            array (
                'PokemonHabitatID' => 561,
                'PokemonID' => 293,
                'HabitatID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            61 => 
            array (
                'PokemonHabitatID' => 562,
                'PokemonID' => 294,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            62 => 
            array (
                'PokemonHabitatID' => 563,
                'PokemonID' => 294,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            63 => 
            array (
                'PokemonHabitatID' => 564,
                'PokemonID' => 294,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            64 => 
            array (
                'PokemonHabitatID' => 565,
                'PokemonID' => 295,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            65 => 
            array (
                'PokemonHabitatID' => 566,
                'PokemonID' => 296,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            66 => 
            array (
                'PokemonHabitatID' => 567,
                'PokemonID' => 296,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            67 => 
            array (
                'PokemonHabitatID' => 568,
                'PokemonID' => 297,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            68 => 
            array (
                'PokemonHabitatID' => 569,
                'PokemonID' => 297,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            69 => 
            array (
                'PokemonHabitatID' => 570,
                'PokemonID' => 298,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            70 => 
            array (
                'PokemonHabitatID' => 571,
                'PokemonID' => 298,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            71 => 
            array (
                'PokemonHabitatID' => 572,
                'PokemonID' => 299,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            72 => 
            array (
                'PokemonHabitatID' => 573,
                'PokemonID' => 299,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            73 => 
            array (
                'PokemonHabitatID' => 574,
                'PokemonID' => 299,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            74 => 
            array (
                'PokemonHabitatID' => 575,
                'PokemonID' => 300,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            75 => 
            array (
                'PokemonHabitatID' => 576,
                'PokemonID' => 301,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            76 => 
            array (
                'PokemonHabitatID' => 577,
                'PokemonID' => 302,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            77 => 
            array (
                'PokemonHabitatID' => 578,
                'PokemonID' => 302,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            78 => 
            array (
                'PokemonHabitatID' => 579,
                'PokemonID' => 303,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            79 => 
            array (
                'PokemonHabitatID' => 580,
                'PokemonID' => 303,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            80 => 
            array (
                'PokemonHabitatID' => 581,
                'PokemonID' => 304,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            81 => 
            array (
                'PokemonHabitatID' => 582,
                'PokemonID' => 304,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            82 => 
            array (
                'PokemonHabitatID' => 583,
                'PokemonID' => 304,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            83 => 
            array (
                'PokemonHabitatID' => 584,
                'PokemonID' => 305,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            84 => 
            array (
                'PokemonHabitatID' => 585,
                'PokemonID' => 305,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            85 => 
            array (
                'PokemonHabitatID' => 586,
                'PokemonID' => 306,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            86 => 
            array (
                'PokemonHabitatID' => 587,
                'PokemonID' => 306,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            87 => 
            array (
                'PokemonHabitatID' => 588,
                'PokemonID' => 307,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            88 => 
            array (
                'PokemonHabitatID' => 589,
                'PokemonID' => 307,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            89 => 
            array (
                'PokemonHabitatID' => 590,
                'PokemonID' => 308,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            90 => 
            array (
                'PokemonHabitatID' => 591,
                'PokemonID' => 308,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            91 => 
            array (
                'PokemonHabitatID' => 592,
                'PokemonID' => 309,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            92 => 
            array (
                'PokemonHabitatID' => 593,
                'PokemonID' => 309,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            93 => 
            array (
                'PokemonHabitatID' => 594,
                'PokemonID' => 310,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            94 => 
            array (
                'PokemonHabitatID' => 595,
                'PokemonID' => 310,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            95 => 
            array (
                'PokemonHabitatID' => 596,
                'PokemonID' => 311,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            96 => 
            array (
                'PokemonHabitatID' => 597,
                'PokemonID' => 312,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            97 => 
            array (
                'PokemonHabitatID' => 598,
                'PokemonID' => 313,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            98 => 
            array (
                'PokemonHabitatID' => 599,
                'PokemonID' => 314,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            99 => 
            array (
                'PokemonHabitatID' => 600,
                'PokemonID' => 314,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            100 => 
            array (
                'PokemonHabitatID' => 601,
                'PokemonID' => 315,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            101 => 
            array (
                'PokemonHabitatID' => 602,
                'PokemonID' => 315,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            102 => 
            array (
                'PokemonHabitatID' => 603,
                'PokemonID' => 316,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            103 => 
            array (
                'PokemonHabitatID' => 604,
                'PokemonID' => 316,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            104 => 
            array (
                'PokemonHabitatID' => 605,
                'PokemonID' => 317,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            105 => 
            array (
                'PokemonHabitatID' => 606,
                'PokemonID' => 318,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            106 => 
            array (
                'PokemonHabitatID' => 607,
                'PokemonID' => 319,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            107 => 
            array (
                'PokemonHabitatID' => 608,
                'PokemonID' => 319,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            108 => 
            array (
                'PokemonHabitatID' => 609,
                'PokemonID' => 320,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            109 => 
            array (
                'PokemonHabitatID' => 610,
                'PokemonID' => 320,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            110 => 
            array (
                'PokemonHabitatID' => 611,
                'PokemonID' => 321,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            111 => 
            array (
                'PokemonHabitatID' => 612,
                'PokemonID' => 321,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            112 => 
            array (
                'PokemonHabitatID' => 613,
                'PokemonID' => 322,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            113 => 
            array (
                'PokemonHabitatID' => 614,
                'PokemonID' => 322,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            114 => 
            array (
                'PokemonHabitatID' => 615,
                'PokemonID' => 323,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            115 => 
            array (
                'PokemonHabitatID' => 616,
                'PokemonID' => 324,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            116 => 
            array (
                'PokemonHabitatID' => 617,
                'PokemonID' => 324,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            117 => 
            array (
                'PokemonHabitatID' => 618,
                'PokemonID' => 325,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            118 => 
            array (
                'PokemonHabitatID' => 619,
                'PokemonID' => 325,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            119 => 
            array (
                'PokemonHabitatID' => 620,
                'PokemonID' => 326,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            120 => 
            array (
                'PokemonHabitatID' => 621,
                'PokemonID' => 326,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            121 => 
            array (
                'PokemonHabitatID' => 622,
                'PokemonID' => 327,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            122 => 
            array (
                'PokemonHabitatID' => 623,
                'PokemonID' => 327,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            123 => 
            array (
                'PokemonHabitatID' => 624,
                'PokemonID' => 328,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            124 => 
            array (
                'PokemonHabitatID' => 625,
                'PokemonID' => 328,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            125 => 
            array (
                'PokemonHabitatID' => 626,
                'PokemonID' => 329,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            126 => 
            array (
                'PokemonHabitatID' => 627,
                'PokemonID' => 329,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            127 => 
            array (
                'PokemonHabitatID' => 628,
                'PokemonID' => 330,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            128 => 
            array (
                'PokemonHabitatID' => 629,
                'PokemonID' => 330,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            129 => 
            array (
                'PokemonHabitatID' => 630,
                'PokemonID' => 331,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            130 => 
            array (
                'PokemonHabitatID' => 631,
                'PokemonID' => 331,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            131 => 
            array (
                'PokemonHabitatID' => 632,
                'PokemonID' => 331,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            132 => 
            array (
                'PokemonHabitatID' => 633,
                'PokemonID' => 332,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            133 => 
            array (
                'PokemonHabitatID' => 634,
                'PokemonID' => 332,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            134 => 
            array (
                'PokemonHabitatID' => 635,
                'PokemonID' => 332,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            135 => 
            array (
                'PokemonHabitatID' => 636,
                'PokemonID' => 333,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            136 => 
            array (
                'PokemonHabitatID' => 637,
                'PokemonID' => 333,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            137 => 
            array (
                'PokemonHabitatID' => 638,
                'PokemonID' => 334,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            138 => 
            array (
                'PokemonHabitatID' => 639,
                'PokemonID' => 334,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            139 => 
            array (
                'PokemonHabitatID' => 640,
                'PokemonID' => 335,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            140 => 
            array (
                'PokemonHabitatID' => 641,
                'PokemonID' => 335,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            141 => 
            array (
                'PokemonHabitatID' => 642,
                'PokemonID' => 336,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            142 => 
            array (
                'PokemonHabitatID' => 643,
                'PokemonID' => 336,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            143 => 
            array (
                'PokemonHabitatID' => 644,
                'PokemonID' => 337,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            144 => 
            array (
                'PokemonHabitatID' => 645,
                'PokemonID' => 338,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            145 => 
            array (
                'PokemonHabitatID' => 646,
                'PokemonID' => 339,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            146 => 
            array (
                'PokemonHabitatID' => 647,
                'PokemonID' => 339,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            147 => 
            array (
                'PokemonHabitatID' => 648,
                'PokemonID' => 339,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            148 => 
            array (
                'PokemonHabitatID' => 649,
                'PokemonID' => 340,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            149 => 
            array (
                'PokemonHabitatID' => 650,
                'PokemonID' => 340,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            150 => 
            array (
                'PokemonHabitatID' => 651,
                'PokemonID' => 340,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            151 => 
            array (
                'PokemonHabitatID' => 652,
                'PokemonID' => 341,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            152 => 
            array (
                'PokemonHabitatID' => 653,
                'PokemonID' => 341,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            153 => 
            array (
                'PokemonHabitatID' => 654,
                'PokemonID' => 342,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            154 => 
            array (
                'PokemonHabitatID' => 655,
                'PokemonID' => 342,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            155 => 
            array (
                'PokemonHabitatID' => 656,
                'PokemonID' => 343,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            156 => 
            array (
                'PokemonHabitatID' => 657,
                'PokemonID' => 343,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            157 => 
            array (
                'PokemonHabitatID' => 658,
                'PokemonID' => 344,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            158 => 
            array (
                'PokemonHabitatID' => 659,
                'PokemonID' => 345,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            159 => 
            array (
                'PokemonHabitatID' => 660,
                'PokemonID' => 346,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            160 => 
            array (
                'PokemonHabitatID' => 661,
                'PokemonID' => 346,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            161 => 
            array (
                'PokemonHabitatID' => 662,
                'PokemonID' => 347,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            162 => 
            array (
                'PokemonHabitatID' => 663,
                'PokemonID' => 347,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            163 => 
            array (
                'PokemonHabitatID' => 664,
                'PokemonID' => 348,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            164 => 
            array (
                'PokemonHabitatID' => 665,
                'PokemonID' => 348,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            165 => 
            array (
                'PokemonHabitatID' => 666,
                'PokemonID' => 349,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            166 => 
            array (
                'PokemonHabitatID' => 667,
                'PokemonID' => 349,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            167 => 
            array (
                'PokemonHabitatID' => 668,
                'PokemonID' => 350,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            168 => 
            array (
                'PokemonHabitatID' => 669,
                'PokemonID' => 350,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            169 => 
            array (
                'PokemonHabitatID' => 670,
                'PokemonID' => 351,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            170 => 
            array (
                'PokemonHabitatID' => 671,
                'PokemonID' => 351,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            171 => 
            array (
                'PokemonHabitatID' => 672,
                'PokemonID' => 352,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            172 => 
            array (
                'PokemonHabitatID' => 673,
                'PokemonID' => 352,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            173 => 
            array (
                'PokemonHabitatID' => 674,
                'PokemonID' => 353,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            174 => 
            array (
                'PokemonHabitatID' => 675,
                'PokemonID' => 353,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            175 => 
            array (
                'PokemonHabitatID' => 676,
                'PokemonID' => 354,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            176 => 
            array (
                'PokemonHabitatID' => 677,
                'PokemonID' => 354,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            177 => 
            array (
                'PokemonHabitatID' => 678,
                'PokemonID' => 355,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            178 => 
            array (
                'PokemonHabitatID' => 679,
                'PokemonID' => 355,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            179 => 
            array (
                'PokemonHabitatID' => 680,
                'PokemonID' => 356,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            180 => 
            array (
                'PokemonHabitatID' => 681,
                'PokemonID' => 356,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            181 => 
            array (
                'PokemonHabitatID' => 682,
                'PokemonID' => 357,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            182 => 
            array (
                'PokemonHabitatID' => 683,
                'PokemonID' => 357,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            183 => 
            array (
                'PokemonHabitatID' => 684,
                'PokemonID' => 358,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            184 => 
            array (
                'PokemonHabitatID' => 685,
                'PokemonID' => 358,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            185 => 
            array (
                'PokemonHabitatID' => 686,
                'PokemonID' => 359,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            186 => 
            array (
                'PokemonHabitatID' => 687,
                'PokemonID' => 359,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            187 => 
            array (
                'PokemonHabitatID' => 688,
                'PokemonID' => 360,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            188 => 
            array (
                'PokemonHabitatID' => 689,
                'PokemonID' => 360,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            189 => 
            array (
                'PokemonHabitatID' => 690,
                'PokemonID' => 361,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            190 => 
            array (
                'PokemonHabitatID' => 691,
                'PokemonID' => 361,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            191 => 
            array (
                'PokemonHabitatID' => 692,
                'PokemonID' => 362,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            192 => 
            array (
                'PokemonHabitatID' => 693,
                'PokemonID' => 362,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            193 => 
            array (
                'PokemonHabitatID' => 694,
                'PokemonID' => 363,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            194 => 
            array (
                'PokemonHabitatID' => 695,
                'PokemonID' => 364,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            195 => 
            array (
                'PokemonHabitatID' => 696,
                'PokemonID' => 365,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            196 => 
            array (
                'PokemonHabitatID' => 697,
                'PokemonID' => 366,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            197 => 
            array (
                'PokemonHabitatID' => 698,
                'PokemonID' => 366,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            198 => 
            array (
                'PokemonHabitatID' => 699,
                'PokemonID' => 366,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            199 => 
            array (
                'PokemonHabitatID' => 700,
                'PokemonID' => 366,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            200 => 
            array (
                'PokemonHabitatID' => 701,
                'PokemonID' => 367,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            201 => 
            array (
                'PokemonHabitatID' => 702,
                'PokemonID' => 367,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            202 => 
            array (
                'PokemonHabitatID' => 703,
                'PokemonID' => 367,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            203 => 
            array (
                'PokemonHabitatID' => 704,
                'PokemonID' => 367,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            204 => 
            array (
                'PokemonHabitatID' => 705,
                'PokemonID' => 368,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            205 => 
            array (
                'PokemonHabitatID' => 706,
                'PokemonID' => 368,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            206 => 
            array (
                'PokemonHabitatID' => 707,
                'PokemonID' => 368,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            207 => 
            array (
                'PokemonHabitatID' => 708,
                'PokemonID' => 368,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            208 => 
            array (
                'PokemonHabitatID' => 709,
                'PokemonID' => 369,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            209 => 
            array (
                'PokemonHabitatID' => 710,
                'PokemonID' => 369,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            210 => 
            array (
                'PokemonHabitatID' => 711,
                'PokemonID' => 370,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            211 => 
            array (
                'PokemonHabitatID' => 712,
                'PokemonID' => 370,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            212 => 
            array (
                'PokemonHabitatID' => 713,
                'PokemonID' => 371,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            213 => 
            array (
                'PokemonHabitatID' => 714,
                'PokemonID' => 371,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            214 => 
            array (
                'PokemonHabitatID' => 715,
                'PokemonID' => 372,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            215 => 
            array (
                'PokemonHabitatID' => 716,
                'PokemonID' => 372,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            216 => 
            array (
                'PokemonHabitatID' => 717,
                'PokemonID' => 373,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            217 => 
            array (
                'PokemonHabitatID' => 718,
                'PokemonID' => 373,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            218 => 
            array (
                'PokemonHabitatID' => 719,
                'PokemonID' => 374,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            219 => 
            array (
                'PokemonHabitatID' => 720,
                'PokemonID' => 374,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            220 => 
            array (
                'PokemonHabitatID' => 721,
                'PokemonID' => 375,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            221 => 
            array (
                'PokemonHabitatID' => 722,
                'PokemonID' => 376,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            222 => 
            array (
                'PokemonHabitatID' => 723,
                'PokemonID' => 377,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            223 => 
            array (
                'PokemonHabitatID' => 724,
                'PokemonID' => 378,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            224 => 
            array (
                'PokemonHabitatID' => 725,
                'PokemonID' => 378,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            225 => 
            array (
                'PokemonHabitatID' => 726,
                'PokemonID' => 378,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            226 => 
            array (
                'PokemonHabitatID' => 727,
                'PokemonID' => 379,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            227 => 
            array (
                'PokemonHabitatID' => 728,
                'PokemonID' => 379,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            228 => 
            array (
                'PokemonHabitatID' => 729,
                'PokemonID' => 379,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            229 => 
            array (
                'PokemonHabitatID' => 730,
                'PokemonID' => 380,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            230 => 
            array (
                'PokemonHabitatID' => 731,
                'PokemonID' => 380,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            231 => 
            array (
                'PokemonHabitatID' => 732,
                'PokemonID' => 380,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            232 => 
            array (
                'PokemonHabitatID' => 733,
                'PokemonID' => 381,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            233 => 
            array (
                'PokemonHabitatID' => 734,
                'PokemonID' => 381,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            234 => 
            array (
                'PokemonHabitatID' => 735,
                'PokemonID' => 381,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            235 => 
            array (
                'PokemonHabitatID' => 736,
                'PokemonID' => 382,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            236 => 
            array (
                'PokemonHabitatID' => 737,
                'PokemonID' => 382,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            237 => 
            array (
                'PokemonHabitatID' => 738,
                'PokemonID' => 383,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            238 => 
            array (
                'PokemonHabitatID' => 739,
                'PokemonID' => 383,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            239 => 
            array (
                'PokemonHabitatID' => 740,
                'PokemonID' => 384,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            240 => 
            array (
                'PokemonHabitatID' => 741,
                'PokemonID' => 384,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            241 => 
            array (
                'PokemonHabitatID' => 742,
                'PokemonID' => 385,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            242 => 
            array (
                'PokemonHabitatID' => 743,
                'PokemonID' => 386,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            243 => 
            array (
                'PokemonHabitatID' => 744,
                'PokemonID' => 387,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            244 => 
            array (
                'PokemonHabitatID' => 745,
                'PokemonID' => 387,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            245 => 
            array (
                'PokemonHabitatID' => 746,
                'PokemonID' => 387,
                'HabitatID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            246 => 
            array (
                'PokemonHabitatID' => 747,
                'PokemonID' => 388,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            247 => 
            array (
                'PokemonHabitatID' => 748,
                'PokemonID' => 388,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            248 => 
            array (
                'PokemonHabitatID' => 749,
                'PokemonID' => 388,
                'HabitatID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            249 => 
            array (
                'PokemonHabitatID' => 750,
                'PokemonID' => 389,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            250 => 
            array (
                'PokemonHabitatID' => 751,
                'PokemonID' => 389,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            251 => 
            array (
                'PokemonHabitatID' => 752,
                'PokemonID' => 389,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            252 => 
            array (
                'PokemonHabitatID' => 753,
                'PokemonID' => 390,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            253 => 
            array (
                'PokemonHabitatID' => 754,
                'PokemonID' => 391,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            254 => 
            array (
                'PokemonHabitatID' => 755,
                'PokemonID' => 391,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            255 => 
            array (
                'PokemonHabitatID' => 756,
                'PokemonID' => 391,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            256 => 
            array (
                'PokemonHabitatID' => 757,
                'PokemonID' => 392,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            257 => 
            array (
                'PokemonHabitatID' => 758,
                'PokemonID' => 392,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            258 => 
            array (
                'PokemonHabitatID' => 759,
                'PokemonID' => 392,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            259 => 
            array (
                'PokemonHabitatID' => 760,
                'PokemonID' => 393,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            260 => 
            array (
                'PokemonHabitatID' => 761,
                'PokemonID' => 393,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            261 => 
            array (
                'PokemonHabitatID' => 762,
                'PokemonID' => 393,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            262 => 
            array (
                'PokemonHabitatID' => 763,
                'PokemonID' => 394,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            263 => 
            array (
                'PokemonHabitatID' => 764,
                'PokemonID' => 394,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            264 => 
            array (
                'PokemonHabitatID' => 765,
                'PokemonID' => 394,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            265 => 
            array (
                'PokemonHabitatID' => 766,
                'PokemonID' => 395,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            266 => 
            array (
                'PokemonHabitatID' => 767,
                'PokemonID' => 395,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            267 => 
            array (
                'PokemonHabitatID' => 768,
                'PokemonID' => 395,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            268 => 
            array (
                'PokemonHabitatID' => 769,
                'PokemonID' => 396,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            269 => 
            array (
                'PokemonHabitatID' => 770,
                'PokemonID' => 396,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            270 => 
            array (
                'PokemonHabitatID' => 771,
                'PokemonID' => 397,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            271 => 
            array (
                'PokemonHabitatID' => 772,
                'PokemonID' => 397,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            272 => 
            array (
                'PokemonHabitatID' => 773,
                'PokemonID' => 398,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            273 => 
            array (
                'PokemonHabitatID' => 774,
                'PokemonID' => 398,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            274 => 
            array (
                'PokemonHabitatID' => 775,
                'PokemonID' => 399,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            275 => 
            array (
                'PokemonHabitatID' => 776,
                'PokemonID' => 400,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            276 => 
            array (
                'PokemonHabitatID' => 777,
                'PokemonID' => 401,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            277 => 
            array (
                'PokemonHabitatID' => 778,
                'PokemonID' => 402,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            278 => 
            array (
                'PokemonHabitatID' => 779,
                'PokemonID' => 403,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            279 => 
            array (
                'PokemonHabitatID' => 780,
                'PokemonID' => 403,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            280 => 
            array (
                'PokemonHabitatID' => 781,
                'PokemonID' => 403,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            281 => 
            array (
                'PokemonHabitatID' => 782,
                'PokemonID' => 404,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            282 => 
            array (
                'PokemonHabitatID' => 783,
                'PokemonID' => 404,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            283 => 
            array (
                'PokemonHabitatID' => 784,
                'PokemonID' => 404,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            284 => 
            array (
                'PokemonHabitatID' => 785,
                'PokemonID' => 405,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            285 => 
            array (
                'PokemonHabitatID' => 786,
                'PokemonID' => 405,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            286 => 
            array (
                'PokemonHabitatID' => 787,
                'PokemonID' => 405,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            287 => 
            array (
                'PokemonHabitatID' => 788,
                'PokemonID' => 406,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            288 => 
            array (
                'PokemonHabitatID' => 789,
                'PokemonID' => 406,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            289 => 
            array (
                'PokemonHabitatID' => 790,
                'PokemonID' => 406,
                'HabitatID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            290 => 
            array (
                'PokemonHabitatID' => 791,
                'PokemonID' => 407,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            291 => 
            array (
                'PokemonHabitatID' => 792,
                'PokemonID' => 407,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            292 => 
            array (
                'PokemonHabitatID' => 793,
                'PokemonID' => 407,
                'HabitatID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            293 => 
            array (
                'PokemonHabitatID' => 794,
                'PokemonID' => 408,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            294 => 
            array (
                'PokemonHabitatID' => 795,
                'PokemonID' => 408,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            295 => 
            array (
                'PokemonHabitatID' => 796,
                'PokemonID' => 408,
                'HabitatID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            296 => 
            array (
                'PokemonHabitatID' => 797,
                'PokemonID' => 409,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            297 => 
            array (
                'PokemonHabitatID' => 798,
                'PokemonID' => 409,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            298 => 
            array (
                'PokemonHabitatID' => 799,
                'PokemonID' => 409,
                'HabitatID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            299 => 
            array (
                'PokemonHabitatID' => 800,
                'PokemonID' => 410,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            300 => 
            array (
                'PokemonHabitatID' => 801,
                'PokemonID' => 410,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            301 => 
            array (
                'PokemonHabitatID' => 802,
                'PokemonID' => 410,
                'HabitatID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            302 => 
            array (
                'PokemonHabitatID' => 803,
                'PokemonID' => 411,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            303 => 
            array (
                'PokemonHabitatID' => 804,
                'PokemonID' => 411,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            304 => 
            array (
                'PokemonHabitatID' => 805,
                'PokemonID' => 412,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            305 => 
            array (
                'PokemonHabitatID' => 806,
                'PokemonID' => 412,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            306 => 
            array (
                'PokemonHabitatID' => 807,
                'PokemonID' => 413,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            307 => 
            array (
                'PokemonHabitatID' => 808,
                'PokemonID' => 413,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            308 => 
            array (
                'PokemonHabitatID' => 809,
                'PokemonID' => 414,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            309 => 
            array (
                'PokemonHabitatID' => 810,
                'PokemonID' => 414,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            310 => 
            array (
                'PokemonHabitatID' => 811,
                'PokemonID' => 414,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            311 => 
            array (
                'PokemonHabitatID' => 812,
                'PokemonID' => 415,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            312 => 
            array (
                'PokemonHabitatID' => 813,
                'PokemonID' => 415,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            313 => 
            array (
                'PokemonHabitatID' => 814,
                'PokemonID' => 415,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            314 => 
            array (
                'PokemonHabitatID' => 815,
                'PokemonID' => 416,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            315 => 
            array (
                'PokemonHabitatID' => 816,
                'PokemonID' => 416,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            316 => 
            array (
                'PokemonHabitatID' => 817,
                'PokemonID' => 417,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            317 => 
            array (
                'PokemonHabitatID' => 818,
                'PokemonID' => 417,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            318 => 
            array (
                'PokemonHabitatID' => 819,
                'PokemonID' => 418,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            319 => 
            array (
                'PokemonHabitatID' => 820,
                'PokemonID' => 418,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            320 => 
            array (
                'PokemonHabitatID' => 821,
                'PokemonID' => 418,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            321 => 
            array (
                'PokemonHabitatID' => 822,
                'PokemonID' => 419,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            322 => 
            array (
                'PokemonHabitatID' => 823,
                'PokemonID' => 419,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            323 => 
            array (
                'PokemonHabitatID' => 824,
                'PokemonID' => 419,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            324 => 
            array (
                'PokemonHabitatID' => 825,
                'PokemonID' => 420,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            325 => 
            array (
                'PokemonHabitatID' => 826,
                'PokemonID' => 420,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            326 => 
            array (
                'PokemonHabitatID' => 827,
                'PokemonID' => 421,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            327 => 
            array (
                'PokemonHabitatID' => 828,
                'PokemonID' => 421,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            328 => 
            array (
                'PokemonHabitatID' => 829,
                'PokemonID' => 422,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            329 => 
            array (
                'PokemonHabitatID' => 830,
                'PokemonID' => 422,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            330 => 
            array (
                'PokemonHabitatID' => 831,
                'PokemonID' => 423,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            331 => 
            array (
                'PokemonHabitatID' => 832,
                'PokemonID' => 423,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            332 => 
            array (
                'PokemonHabitatID' => 833,
                'PokemonID' => 424,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            333 => 
            array (
                'PokemonHabitatID' => 834,
                'PokemonID' => 424,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            334 => 
            array (
                'PokemonHabitatID' => 835,
                'PokemonID' => 425,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            335 => 
            array (
                'PokemonHabitatID' => 836,
                'PokemonID' => 425,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            336 => 
            array (
                'PokemonHabitatID' => 837,
                'PokemonID' => 426,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            337 => 
            array (
                'PokemonHabitatID' => 838,
                'PokemonID' => 426,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            338 => 
            array (
                'PokemonHabitatID' => 839,
                'PokemonID' => 427,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            339 => 
            array (
                'PokemonHabitatID' => 840,
                'PokemonID' => 427,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            340 => 
            array (
                'PokemonHabitatID' => 841,
                'PokemonID' => 428,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            341 => 
            array (
                'PokemonHabitatID' => 842,
                'PokemonID' => 429,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            342 => 
            array (
                'PokemonHabitatID' => 843,
                'PokemonID' => 430,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            343 => 
            array (
                'PokemonHabitatID' => 844,
                'PokemonID' => 431,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            344 => 
            array (
                'PokemonHabitatID' => 845,
                'PokemonID' => 432,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            345 => 
            array (
                'PokemonHabitatID' => 846,
                'PokemonID' => 433,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            346 => 
            array (
                'PokemonHabitatID' => 847,
                'PokemonID' => 433,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            347 => 
            array (
                'PokemonHabitatID' => 848,
                'PokemonID' => 434,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            348 => 
            array (
                'PokemonHabitatID' => 849,
                'PokemonID' => 434,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            349 => 
            array (
                'PokemonHabitatID' => 850,
                'PokemonID' => 435,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            350 => 
            array (
                'PokemonHabitatID' => 851,
                'PokemonID' => 436,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            351 => 
            array (
                'PokemonHabitatID' => 852,
                'PokemonID' => 437,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            352 => 
            array (
                'PokemonHabitatID' => 853,
                'PokemonID' => 437,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            353 => 
            array (
                'PokemonHabitatID' => 854,
                'PokemonID' => 438,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            354 => 
            array (
                'PokemonHabitatID' => 855,
                'PokemonID' => 439,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            355 => 
            array (
                'PokemonHabitatID' => 856,
                'PokemonID' => 440,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            356 => 
            array (
                'PokemonHabitatID' => 857,
                'PokemonID' => 440,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            357 => 
            array (
                'PokemonHabitatID' => 858,
                'PokemonID' => 441,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            358 => 
            array (
                'PokemonHabitatID' => 859,
                'PokemonID' => 441,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            359 => 
            array (
                'PokemonHabitatID' => 860,
                'PokemonID' => 442,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            360 => 
            array (
                'PokemonHabitatID' => 861,
                'PokemonID' => 442,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            361 => 
            array (
                'PokemonHabitatID' => 862,
                'PokemonID' => 443,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            362 => 
            array (
                'PokemonHabitatID' => 863,
                'PokemonID' => 444,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            363 => 
            array (
                'PokemonHabitatID' => 864,
                'PokemonID' => 445,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            364 => 
            array (
                'PokemonHabitatID' => 865,
                'PokemonID' => 446,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            365 => 
            array (
                'PokemonHabitatID' => 866,
                'PokemonID' => 446,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            366 => 
            array (
                'PokemonHabitatID' => 867,
                'PokemonID' => 447,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            367 => 
            array (
                'PokemonHabitatID' => 868,
                'PokemonID' => 447,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            368 => 
            array (
                'PokemonHabitatID' => 869,
                'PokemonID' => 448,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            369 => 
            array (
                'PokemonHabitatID' => 870,
                'PokemonID' => 448,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            370 => 
            array (
                'PokemonHabitatID' => 871,
                'PokemonID' => 449,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            371 => 
            array (
                'PokemonHabitatID' => 872,
                'PokemonID' => 449,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            372 => 
            array (
                'PokemonHabitatID' => 873,
                'PokemonID' => 449,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            373 => 
            array (
                'PokemonHabitatID' => 874,
                'PokemonID' => 450,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            374 => 
            array (
                'PokemonHabitatID' => 875,
                'PokemonID' => 450,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            375 => 
            array (
                'PokemonHabitatID' => 876,
                'PokemonID' => 450,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            376 => 
            array (
                'PokemonHabitatID' => 877,
                'PokemonID' => 451,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            377 => 
            array (
                'PokemonHabitatID' => 878,
                'PokemonID' => 451,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            378 => 
            array (
                'PokemonHabitatID' => 879,
                'PokemonID' => 451,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            379 => 
            array (
                'PokemonHabitatID' => 880,
                'PokemonID' => 452,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            380 => 
            array (
                'PokemonHabitatID' => 881,
                'PokemonID' => 452,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            381 => 
            array (
                'PokemonHabitatID' => 882,
                'PokemonID' => 453,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            382 => 
            array (
                'PokemonHabitatID' => 883,
                'PokemonID' => 453,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            383 => 
            array (
                'PokemonHabitatID' => 884,
                'PokemonID' => 454,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            384 => 
            array (
                'PokemonHabitatID' => 885,
                'PokemonID' => 454,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            385 => 
            array (
                'PokemonHabitatID' => 886,
                'PokemonID' => 455,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            386 => 
            array (
                'PokemonHabitatID' => 887,
                'PokemonID' => 455,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            387 => 
            array (
                'PokemonHabitatID' => 888,
                'PokemonID' => 455,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            388 => 
            array (
                'PokemonHabitatID' => 889,
                'PokemonID' => 456,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            389 => 
            array (
                'PokemonHabitatID' => 890,
                'PokemonID' => 456,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            390 => 
            array (
                'PokemonHabitatID' => 891,
                'PokemonID' => 456,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            391 => 
            array (
                'PokemonHabitatID' => 892,
                'PokemonID' => 457,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            392 => 
            array (
                'PokemonHabitatID' => 893,
                'PokemonID' => 457,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            393 => 
            array (
                'PokemonHabitatID' => 894,
                'PokemonID' => 457,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            394 => 
            array (
                'PokemonHabitatID' => 895,
                'PokemonID' => 458,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            395 => 
            array (
                'PokemonHabitatID' => 896,
                'PokemonID' => 458,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            396 => 
            array (
                'PokemonHabitatID' => 897,
                'PokemonID' => 458,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            397 => 
            array (
                'PokemonHabitatID' => 898,
                'PokemonID' => 459,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            398 => 
            array (
                'PokemonHabitatID' => 899,
                'PokemonID' => 460,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            399 => 
            array (
                'PokemonHabitatID' => 900,
                'PokemonID' => 461,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            400 => 
            array (
                'PokemonHabitatID' => 901,
                'PokemonID' => 462,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            401 => 
            array (
                'PokemonHabitatID' => 902,
                'PokemonID' => 463,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            402 => 
            array (
                'PokemonHabitatID' => 903,
                'PokemonID' => 463,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            403 => 
            array (
                'PokemonHabitatID' => 904,
                'PokemonID' => 464,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            404 => 
            array (
                'PokemonHabitatID' => 905,
                'PokemonID' => 464,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            405 => 
            array (
                'PokemonHabitatID' => 906,
                'PokemonID' => 465,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            406 => 
            array (
                'PokemonHabitatID' => 907,
                'PokemonID' => 466,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            407 => 
            array (
                'PokemonHabitatID' => 908,
                'PokemonID' => 467,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            408 => 
            array (
                'PokemonHabitatID' => 909,
                'PokemonID' => 468,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            409 => 
            array (
                'PokemonHabitatID' => 910,
                'PokemonID' => 469,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            410 => 
            array (
                'PokemonHabitatID' => 911,
                'PokemonID' => 469,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            411 => 
            array (
                'PokemonHabitatID' => 912,
                'PokemonID' => 470,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            412 => 
            array (
                'PokemonHabitatID' => 913,
                'PokemonID' => 470,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            413 => 
            array (
                'PokemonHabitatID' => 914,
                'PokemonID' => 471,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            414 => 
            array (
                'PokemonHabitatID' => 915,
                'PokemonID' => 471,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            415 => 
            array (
                'PokemonHabitatID' => 916,
                'PokemonID' => 472,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            416 => 
            array (
                'PokemonHabitatID' => 917,
                'PokemonID' => 472,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            417 => 
            array (
                'PokemonHabitatID' => 918,
                'PokemonID' => 473,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            418 => 
            array (
                'PokemonHabitatID' => 919,
                'PokemonID' => 473,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            419 => 
            array (
                'PokemonHabitatID' => 920,
                'PokemonID' => 474,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            420 => 
            array (
                'PokemonHabitatID' => 921,
                'PokemonID' => 474,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            421 => 
            array (
                'PokemonHabitatID' => 922,
                'PokemonID' => 475,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            422 => 
            array (
                'PokemonHabitatID' => 923,
                'PokemonID' => 475,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            423 => 
            array (
                'PokemonHabitatID' => 924,
                'PokemonID' => 475,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            424 => 
            array (
                'PokemonHabitatID' => 925,
                'PokemonID' => 476,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            425 => 
            array (
                'PokemonHabitatID' => 926,
                'PokemonID' => 476,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            426 => 
            array (
                'PokemonHabitatID' => 927,
                'PokemonID' => 476,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            427 => 
            array (
                'PokemonHabitatID' => 928,
                'PokemonID' => 477,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            428 => 
            array (
                'PokemonHabitatID' => 929,
                'PokemonID' => 478,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            429 => 
            array (
                'PokemonHabitatID' => 930,
                'PokemonID' => 479,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            430 => 
            array (
                'PokemonHabitatID' => 931,
                'PokemonID' => 480,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            431 => 
            array (
                'PokemonHabitatID' => 932,
                'PokemonID' => 481,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            432 => 
            array (
                'PokemonHabitatID' => 933,
                'PokemonID' => 482,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            433 => 
            array (
                'PokemonHabitatID' => 934,
                'PokemonID' => 482,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            434 => 
            array (
                'PokemonHabitatID' => 935,
                'PokemonID' => 483,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            435 => 
            array (
                'PokemonHabitatID' => 936,
                'PokemonID' => 483,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            436 => 
            array (
                'PokemonHabitatID' => 937,
                'PokemonID' => 484,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            437 => 
            array (
                'PokemonHabitatID' => 938,
                'PokemonID' => 484,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            438 => 
            array (
                'PokemonHabitatID' => 939,
                'PokemonID' => 484,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            439 => 
            array (
                'PokemonHabitatID' => 940,
                'PokemonID' => 485,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            440 => 
            array (
                'PokemonHabitatID' => 941,
                'PokemonID' => 485,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            441 => 
            array (
                'PokemonHabitatID' => 942,
                'PokemonID' => 485,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            442 => 
            array (
                'PokemonHabitatID' => 943,
                'PokemonID' => 486,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            443 => 
            array (
                'PokemonHabitatID' => 944,
                'PokemonID' => 486,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            444 => 
            array (
                'PokemonHabitatID' => 945,
                'PokemonID' => 486,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            445 => 
            array (
                'PokemonHabitatID' => 946,
                'PokemonID' => 487,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            446 => 
            array (
                'PokemonHabitatID' => 947,
                'PokemonID' => 487,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            447 => 
            array (
                'PokemonHabitatID' => 948,
                'PokemonID' => 488,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            448 => 
            array (
                'PokemonHabitatID' => 949,
                'PokemonID' => 488,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            449 => 
            array (
                'PokemonHabitatID' => 950,
                'PokemonID' => 489,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            450 => 
            array (
                'PokemonHabitatID' => 951,
                'PokemonID' => 489,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            451 => 
            array (
                'PokemonHabitatID' => 952,
                'PokemonID' => 489,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            452 => 
            array (
                'PokemonHabitatID' => 953,
                'PokemonID' => 490,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            453 => 
            array (
                'PokemonHabitatID' => 954,
                'PokemonID' => 490,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            454 => 
            array (
                'PokemonHabitatID' => 955,
                'PokemonID' => 490,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            455 => 
            array (
                'PokemonHabitatID' => 956,
                'PokemonID' => 491,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            456 => 
            array (
                'PokemonHabitatID' => 957,
                'PokemonID' => 491,
                'HabitatID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            457 => 
            array (
                'PokemonHabitatID' => 958,
                'PokemonID' => 492,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            458 => 
            array (
                'PokemonHabitatID' => 959,
                'PokemonID' => 492,
                'HabitatID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            459 => 
            array (
                'PokemonHabitatID' => 960,
                'PokemonID' => 493,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            460 => 
            array (
                'PokemonHabitatID' => 961,
                'PokemonID' => 493,
                'HabitatID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            461 => 
            array (
                'PokemonHabitatID' => 962,
                'PokemonID' => 494,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            462 => 
            array (
                'PokemonHabitatID' => 963,
                'PokemonID' => 494,
                'HabitatID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            463 => 
            array (
                'PokemonHabitatID' => 964,
                'PokemonID' => 495,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            464 => 
            array (
                'PokemonHabitatID' => 965,
                'PokemonID' => 495,
                'HabitatID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            465 => 
            array (
                'PokemonHabitatID' => 966,
                'PokemonID' => 496,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            466 => 
            array (
                'PokemonHabitatID' => 967,
                'PokemonID' => 496,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            467 => 
            array (
                'PokemonHabitatID' => 968,
                'PokemonID' => 496,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            468 => 
            array (
                'PokemonHabitatID' => 969,
                'PokemonID' => 497,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            469 => 
            array (
                'PokemonHabitatID' => 970,
                'PokemonID' => 497,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            470 => 
            array (
                'PokemonHabitatID' => 971,
                'PokemonID' => 497,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            471 => 
            array (
                'PokemonHabitatID' => 972,
                'PokemonID' => 498,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            472 => 
            array (
                'PokemonHabitatID' => 973,
                'PokemonID' => 498,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            473 => 
            array (
                'PokemonHabitatID' => 974,
                'PokemonID' => 498,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            474 => 
            array (
                'PokemonHabitatID' => 975,
                'PokemonID' => 499,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            475 => 
            array (
                'PokemonHabitatID' => 976,
                'PokemonID' => 499,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            476 => 
            array (
                'PokemonHabitatID' => 977,
                'PokemonID' => 499,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            477 => 
            array (
                'PokemonHabitatID' => 978,
                'PokemonID' => 500,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            478 => 
            array (
                'PokemonHabitatID' => 979,
                'PokemonID' => 501,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            479 => 
            array (
                'PokemonHabitatID' => 980,
                'PokemonID' => 502,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            480 => 
            array (
                'PokemonHabitatID' => 981,
                'PokemonID' => 502,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            481 => 
            array (
                'PokemonHabitatID' => 982,
                'PokemonID' => 502,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            482 => 
            array (
                'PokemonHabitatID' => 983,
                'PokemonID' => 502,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            483 => 
            array (
                'PokemonHabitatID' => 984,
                'PokemonID' => 502,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            484 => 
            array (
                'PokemonHabitatID' => 985,
                'PokemonID' => 503,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            485 => 
            array (
                'PokemonHabitatID' => 986,
                'PokemonID' => 503,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            486 => 
            array (
                'PokemonHabitatID' => 987,
                'PokemonID' => 503,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            487 => 
            array (
                'PokemonHabitatID' => 988,
                'PokemonID' => 503,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            488 => 
            array (
                'PokemonHabitatID' => 989,
                'PokemonID' => 503,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            489 => 
            array (
                'PokemonHabitatID' => 990,
                'PokemonID' => 504,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            490 => 
            array (
                'PokemonHabitatID' => 991,
                'PokemonID' => 504,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            491 => 
            array (
                'PokemonHabitatID' => 992,
                'PokemonID' => 504,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            492 => 
            array (
                'PokemonHabitatID' => 993,
                'PokemonID' => 504,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            493 => 
            array (
                'PokemonHabitatID' => 994,
                'PokemonID' => 504,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            494 => 
            array (
                'PokemonHabitatID' => 995,
                'PokemonID' => 505,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            495 => 
            array (
                'PokemonHabitatID' => 996,
                'PokemonID' => 506,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            496 => 
            array (
                'PokemonHabitatID' => 997,
                'PokemonID' => 507,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            497 => 
            array (
                'PokemonHabitatID' => 998,
                'PokemonID' => 508,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            498 => 
            array (
                'PokemonHabitatID' => 999,
                'PokemonID' => 509,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            499 => 
            array (
                'PokemonHabitatID' => 1000,
                'PokemonID' => 510,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
        ));
        \DB::table('PokemonHabitat')->insert(array (
            0 => 
            array (
                'PokemonHabitatID' => 1001,
                'PokemonID' => 511,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            1 => 
            array (
                'PokemonHabitatID' => 1002,
                'PokemonID' => 512,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            2 => 
            array (
                'PokemonHabitatID' => 1003,
                'PokemonID' => 513,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            3 => 
            array (
                'PokemonHabitatID' => 1004,
                'PokemonID' => 513,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            4 => 
            array (
                'PokemonHabitatID' => 1005,
                'PokemonID' => 514,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            5 => 
            array (
                'PokemonHabitatID' => 1006,
                'PokemonID' => 514,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            6 => 
            array (
                'PokemonHabitatID' => 1007,
                'PokemonID' => 515,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            7 => 
            array (
                'PokemonHabitatID' => 1008,
                'PokemonID' => 515,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            8 => 
            array (
                'PokemonHabitatID' => 1009,
                'PokemonID' => 516,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            9 => 
            array (
                'PokemonHabitatID' => 1010,
                'PokemonID' => 516,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            10 => 
            array (
                'PokemonHabitatID' => 1011,
                'PokemonID' => 517,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            11 => 
            array (
                'PokemonHabitatID' => 1012,
                'PokemonID' => 517,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            12 => 
            array (
                'PokemonHabitatID' => 1013,
                'PokemonID' => 518,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            13 => 
            array (
                'PokemonHabitatID' => 1014,
                'PokemonID' => 518,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            14 => 
            array (
                'PokemonHabitatID' => 1015,
                'PokemonID' => 519,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            15 => 
            array (
                'PokemonHabitatID' => 1016,
                'PokemonID' => 519,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            16 => 
            array (
                'PokemonHabitatID' => 1017,
                'PokemonID' => 519,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            17 => 
            array (
                'PokemonHabitatID' => 1018,
                'PokemonID' => 520,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            18 => 
            array (
                'PokemonHabitatID' => 1019,
                'PokemonID' => 520,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            19 => 
            array (
                'PokemonHabitatID' => 1020,
                'PokemonID' => 520,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            20 => 
            array (
                'PokemonHabitatID' => 1021,
                'PokemonID' => 521,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            21 => 
            array (
                'PokemonHabitatID' => 1022,
                'PokemonID' => 522,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            22 => 
            array (
                'PokemonHabitatID' => 1023,
                'PokemonID' => 523,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            23 => 
            array (
                'PokemonHabitatID' => 1024,
                'PokemonID' => 524,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            24 => 
            array (
                'PokemonHabitatID' => 1025,
                'PokemonID' => 525,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            25 => 
            array (
                'PokemonHabitatID' => 1026,
                'PokemonID' => 525,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            26 => 
            array (
                'PokemonHabitatID' => 1027,
                'PokemonID' => 526,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            27 => 
            array (
                'PokemonHabitatID' => 1028,
                'PokemonID' => 526,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            28 => 
            array (
                'PokemonHabitatID' => 1029,
                'PokemonID' => 527,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            29 => 
            array (
                'PokemonHabitatID' => 1030,
                'PokemonID' => 527,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            30 => 
            array (
                'PokemonHabitatID' => 1031,
                'PokemonID' => 528,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            31 => 
            array (
                'PokemonHabitatID' => 1032,
                'PokemonID' => 528,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            32 => 
            array (
                'PokemonHabitatID' => 1033,
                'PokemonID' => 529,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            33 => 
            array (
                'PokemonHabitatID' => 1034,
                'PokemonID' => 529,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            34 => 
            array (
                'PokemonHabitatID' => 1035,
                'PokemonID' => 529,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            35 => 
            array (
                'PokemonHabitatID' => 1036,
                'PokemonID' => 529,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            36 => 
            array (
                'PokemonHabitatID' => 1037,
                'PokemonID' => 530,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            37 => 
            array (
                'PokemonHabitatID' => 1038,
                'PokemonID' => 530,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            38 => 
            array (
                'PokemonHabitatID' => 1039,
                'PokemonID' => 530,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            39 => 
            array (
                'PokemonHabitatID' => 1040,
                'PokemonID' => 530,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            40 => 
            array (
                'PokemonHabitatID' => 1041,
                'PokemonID' => 531,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            41 => 
            array (
                'PokemonHabitatID' => 1042,
                'PokemonID' => 532,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            42 => 
            array (
                'PokemonHabitatID' => 1043,
                'PokemonID' => 533,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            43 => 
            array (
                'PokemonHabitatID' => 1044,
                'PokemonID' => 534,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            44 => 
            array (
                'PokemonHabitatID' => 1045,
                'PokemonID' => 535,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            45 => 
            array (
                'PokemonHabitatID' => 1046,
                'PokemonID' => 536,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            46 => 
            array (
                'PokemonHabitatID' => 1047,
                'PokemonID' => 536,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            47 => 
            array (
                'PokemonHabitatID' => 1048,
                'PokemonID' => 536,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            48 => 
            array (
                'PokemonHabitatID' => 1049,
                'PokemonID' => 536,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            49 => 
            array (
                'PokemonHabitatID' => 1050,
                'PokemonID' => 537,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            50 => 
            array (
                'PokemonHabitatID' => 1051,
                'PokemonID' => 537,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            51 => 
            array (
                'PokemonHabitatID' => 1052,
                'PokemonID' => 537,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            52 => 
            array (
                'PokemonHabitatID' => 1053,
                'PokemonID' => 537,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            53 => 
            array (
                'PokemonHabitatID' => 1054,
                'PokemonID' => 538,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            54 => 
            array (
                'PokemonHabitatID' => 1055,
                'PokemonID' => 538,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            55 => 
            array (
                'PokemonHabitatID' => 1056,
                'PokemonID' => 538,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            56 => 
            array (
                'PokemonHabitatID' => 1057,
                'PokemonID' => 538,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            57 => 
            array (
                'PokemonHabitatID' => 1058,
                'PokemonID' => 539,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            58 => 
            array (
                'PokemonHabitatID' => 1059,
                'PokemonID' => 539,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            59 => 
            array (
                'PokemonHabitatID' => 1060,
                'PokemonID' => 540,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            60 => 
            array (
                'PokemonHabitatID' => 1061,
                'PokemonID' => 540,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            61 => 
            array (
                'PokemonHabitatID' => 1062,
                'PokemonID' => 541,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            62 => 
            array (
                'PokemonHabitatID' => 1063,
                'PokemonID' => 541,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            63 => 
            array (
                'PokemonHabitatID' => 1064,
                'PokemonID' => 542,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            64 => 
            array (
                'PokemonHabitatID' => 1065,
                'PokemonID' => 542,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            65 => 
            array (
                'PokemonHabitatID' => 1066,
                'PokemonID' => 543,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            66 => 
            array (
                'PokemonHabitatID' => 1067,
                'PokemonID' => 543,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            67 => 
            array (
                'PokemonHabitatID' => 1068,
                'PokemonID' => 544,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            68 => 
            array (
                'PokemonHabitatID' => 1069,
                'PokemonID' => 544,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            69 => 
            array (
                'PokemonHabitatID' => 1070,
                'PokemonID' => 544,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            70 => 
            array (
                'PokemonHabitatID' => 1071,
                'PokemonID' => 545,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            71 => 
            array (
                'PokemonHabitatID' => 1072,
                'PokemonID' => 545,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            72 => 
            array (
                'PokemonHabitatID' => 1073,
                'PokemonID' => 545,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            73 => 
            array (
                'PokemonHabitatID' => 1074,
                'PokemonID' => 546,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            74 => 
            array (
                'PokemonHabitatID' => 1075,
                'PokemonID' => 546,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            75 => 
            array (
                'PokemonHabitatID' => 1076,
                'PokemonID' => 546,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            76 => 
            array (
                'PokemonHabitatID' => 1077,
                'PokemonID' => 547,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            77 => 
            array (
                'PokemonHabitatID' => 1078,
                'PokemonID' => 547,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            78 => 
            array (
                'PokemonHabitatID' => 1079,
                'PokemonID' => 548,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            79 => 
            array (
                'PokemonHabitatID' => 1080,
                'PokemonID' => 548,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            80 => 
            array (
                'PokemonHabitatID' => 1081,
                'PokemonID' => 549,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            81 => 
            array (
                'PokemonHabitatID' => 1082,
                'PokemonID' => 549,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            82 => 
            array (
                'PokemonHabitatID' => 1083,
                'PokemonID' => 550,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            83 => 
            array (
                'PokemonHabitatID' => 1084,
                'PokemonID' => 550,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            84 => 
            array (
                'PokemonHabitatID' => 1085,
                'PokemonID' => 550,
                'HabitatID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            85 => 
            array (
                'PokemonHabitatID' => 1086,
                'PokemonID' => 551,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            86 => 
            array (
                'PokemonHabitatID' => 1087,
                'PokemonID' => 551,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            87 => 
            array (
                'PokemonHabitatID' => 1088,
                'PokemonID' => 551,
                'HabitatID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            88 => 
            array (
                'PokemonHabitatID' => 1089,
                'PokemonID' => 552,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            89 => 
            array (
                'PokemonHabitatID' => 1090,
                'PokemonID' => 552,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            90 => 
            array (
                'PokemonHabitatID' => 1091,
                'PokemonID' => 552,
                'HabitatID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            91 => 
            array (
                'PokemonHabitatID' => 1092,
                'PokemonID' => 553,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            92 => 
            array (
                'PokemonHabitatID' => 1093,
                'PokemonID' => 553,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            93 => 
            array (
                'PokemonHabitatID' => 1094,
                'PokemonID' => 553,
                'HabitatID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            94 => 
            array (
                'PokemonHabitatID' => 1095,
                'PokemonID' => 554,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            95 => 
            array (
                'PokemonHabitatID' => 1096,
                'PokemonID' => 554,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            96 => 
            array (
                'PokemonHabitatID' => 1097,
                'PokemonID' => 554,
                'HabitatID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            97 => 
            array (
                'PokemonHabitatID' => 1098,
                'PokemonID' => 555,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            98 => 
            array (
                'PokemonHabitatID' => 1099,
                'PokemonID' => 556,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            99 => 
            array (
                'PokemonHabitatID' => 1100,
                'PokemonID' => 557,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            100 => 
            array (
                'PokemonHabitatID' => 1101,
                'PokemonID' => 558,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            101 => 
            array (
                'PokemonHabitatID' => 1102,
                'PokemonID' => 558,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            102 => 
            array (
                'PokemonHabitatID' => 1103,
                'PokemonID' => 559,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            103 => 
            array (
                'PokemonHabitatID' => 1104,
                'PokemonID' => 559,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            104 => 
            array (
                'PokemonHabitatID' => 1105,
                'PokemonID' => 560,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            105 => 
            array (
                'PokemonHabitatID' => 1106,
                'PokemonID' => 560,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            106 => 
            array (
                'PokemonHabitatID' => 1107,
                'PokemonID' => 560,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            107 => 
            array (
                'PokemonHabitatID' => 1108,
                'PokemonID' => 561,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            108 => 
            array (
                'PokemonHabitatID' => 1109,
                'PokemonID' => 561,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            109 => 
            array (
                'PokemonHabitatID' => 1110,
                'PokemonID' => 561,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            110 => 
            array (
                'PokemonHabitatID' => 1111,
                'PokemonID' => 562,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            111 => 
            array (
                'PokemonHabitatID' => 1112,
                'PokemonID' => 562,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            112 => 
            array (
                'PokemonHabitatID' => 1113,
                'PokemonID' => 562,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            113 => 
            array (
                'PokemonHabitatID' => 1114,
                'PokemonID' => 563,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            114 => 
            array (
                'PokemonHabitatID' => 1115,
                'PokemonID' => 563,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            115 => 
            array (
                'PokemonHabitatID' => 1116,
                'PokemonID' => 563,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            116 => 
            array (
                'PokemonHabitatID' => 1117,
                'PokemonID' => 564,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            117 => 
            array (
                'PokemonHabitatID' => 1118,
                'PokemonID' => 565,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            118 => 
            array (
                'PokemonHabitatID' => 1119,
                'PokemonID' => 566,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            119 => 
            array (
                'PokemonHabitatID' => 1120,
                'PokemonID' => 566,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            120 => 
            array (
                'PokemonHabitatID' => 1121,
                'PokemonID' => 566,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            121 => 
            array (
                'PokemonHabitatID' => 1122,
                'PokemonID' => 567,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            122 => 
            array (
                'PokemonHabitatID' => 1123,
                'PokemonID' => 567,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            123 => 
            array (
                'PokemonHabitatID' => 1124,
                'PokemonID' => 567,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            124 => 
            array (
                'PokemonHabitatID' => 1125,
                'PokemonID' => 568,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            125 => 
            array (
                'PokemonHabitatID' => 1126,
                'PokemonID' => 568,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            126 => 
            array (
                'PokemonHabitatID' => 1127,
                'PokemonID' => 568,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            127 => 
            array (
                'PokemonHabitatID' => 1128,
                'PokemonID' => 569,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            128 => 
            array (
                'PokemonHabitatID' => 1129,
                'PokemonID' => 569,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            129 => 
            array (
                'PokemonHabitatID' => 1130,
                'PokemonID' => 569,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            130 => 
            array (
                'PokemonHabitatID' => 1131,
                'PokemonID' => 570,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            131 => 
            array (
                'PokemonHabitatID' => 1132,
                'PokemonID' => 570,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            132 => 
            array (
                'PokemonHabitatID' => 1133,
                'PokemonID' => 571,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            133 => 
            array (
                'PokemonHabitatID' => 1134,
                'PokemonID' => 571,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            134 => 
            array (
                'PokemonHabitatID' => 1135,
                'PokemonID' => 572,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            135 => 
            array (
                'PokemonHabitatID' => 1136,
                'PokemonID' => 573,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            136 => 
            array (
                'PokemonHabitatID' => 1137,
                'PokemonID' => 574,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            137 => 
            array (
                'PokemonHabitatID' => 1138,
                'PokemonID' => 575,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            138 => 
            array (
                'PokemonHabitatID' => 1139,
                'PokemonID' => 576,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            139 => 
            array (
                'PokemonHabitatID' => 1140,
                'PokemonID' => 577,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            140 => 
            array (
                'PokemonHabitatID' => 1141,
                'PokemonID' => 577,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            141 => 
            array (
                'PokemonHabitatID' => 1142,
                'PokemonID' => 578,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            142 => 
            array (
                'PokemonHabitatID' => 1143,
                'PokemonID' => 578,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            143 => 
            array (
                'PokemonHabitatID' => 1144,
                'PokemonID' => 579,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            144 => 
            array (
                'PokemonHabitatID' => 1145,
                'PokemonID' => 579,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            145 => 
            array (
                'PokemonHabitatID' => 1146,
                'PokemonID' => 580,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            146 => 
            array (
                'PokemonHabitatID' => 1147,
                'PokemonID' => 580,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            147 => 
            array (
                'PokemonHabitatID' => 1148,
                'PokemonID' => 581,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            148 => 
            array (
                'PokemonHabitatID' => 1149,
                'PokemonID' => 581,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            149 => 
            array (
                'PokemonHabitatID' => 1150,
                'PokemonID' => 582,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            150 => 
            array (
                'PokemonHabitatID' => 1151,
                'PokemonID' => 582,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            151 => 
            array (
                'PokemonHabitatID' => 1152,
                'PokemonID' => 583,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            152 => 
            array (
                'PokemonHabitatID' => 1153,
                'PokemonID' => 583,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            153 => 
            array (
                'PokemonHabitatID' => 1154,
                'PokemonID' => 583,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            154 => 
            array (
                'PokemonHabitatID' => 1155,
                'PokemonID' => 583,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            155 => 
            array (
                'PokemonHabitatID' => 1156,
                'PokemonID' => 584,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            156 => 
            array (
                'PokemonHabitatID' => 1157,
                'PokemonID' => 584,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            157 => 
            array (
                'PokemonHabitatID' => 1158,
                'PokemonID' => 584,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            158 => 
            array (
                'PokemonHabitatID' => 1159,
                'PokemonID' => 584,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            159 => 
            array (
                'PokemonHabitatID' => 1160,
                'PokemonID' => 585,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            160 => 
            array (
                'PokemonHabitatID' => 1161,
                'PokemonID' => 585,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            161 => 
            array (
                'PokemonHabitatID' => 1162,
                'PokemonID' => 585,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            162 => 
            array (
                'PokemonHabitatID' => 1163,
                'PokemonID' => 585,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            163 => 
            array (
                'PokemonHabitatID' => 1164,
                'PokemonID' => 586,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            164 => 
            array (
                'PokemonHabitatID' => 1165,
                'PokemonID' => 586,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            165 => 
            array (
                'PokemonHabitatID' => 1166,
                'PokemonID' => 586,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            166 => 
            array (
                'PokemonHabitatID' => 1167,
                'PokemonID' => 586,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            167 => 
            array (
                'PokemonHabitatID' => 1168,
                'PokemonID' => 587,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            168 => 
            array (
                'PokemonHabitatID' => 1169,
                'PokemonID' => 587,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            169 => 
            array (
                'PokemonHabitatID' => 1170,
                'PokemonID' => 587,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            170 => 
            array (
                'PokemonHabitatID' => 1171,
                'PokemonID' => 587,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            171 => 
            array (
                'PokemonHabitatID' => 1172,
                'PokemonID' => 588,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            172 => 
            array (
                'PokemonHabitatID' => 1173,
                'PokemonID' => 588,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            173 => 
            array (
                'PokemonHabitatID' => 1174,
                'PokemonID' => 588,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            174 => 
            array (
                'PokemonHabitatID' => 1175,
                'PokemonID' => 588,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            175 => 
            array (
                'PokemonHabitatID' => 1176,
                'PokemonID' => 589,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            176 => 
            array (
                'PokemonHabitatID' => 1177,
                'PokemonID' => 589,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            177 => 
            array (
                'PokemonHabitatID' => 1178,
                'PokemonID' => 589,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            178 => 
            array (
                'PokemonHabitatID' => 1179,
                'PokemonID' => 589,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            179 => 
            array (
                'PokemonHabitatID' => 1180,
                'PokemonID' => 590,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            180 => 
            array (
                'PokemonHabitatID' => 1181,
                'PokemonID' => 591,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            181 => 
            array (
                'PokemonHabitatID' => 1182,
                'PokemonID' => 592,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            182 => 
            array (
                'PokemonHabitatID' => 1183,
                'PokemonID' => 593,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            183 => 
            array (
                'PokemonHabitatID' => 1184,
                'PokemonID' => 594,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            184 => 
            array (
                'PokemonHabitatID' => 1185,
                'PokemonID' => 595,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            185 => 
            array (
                'PokemonHabitatID' => 1186,
                'PokemonID' => 596,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            186 => 
            array (
                'PokemonHabitatID' => 1187,
                'PokemonID' => 596,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            187 => 
            array (
                'PokemonHabitatID' => 1188,
                'PokemonID' => 597,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            188 => 
            array (
                'PokemonHabitatID' => 1189,
                'PokemonID' => 597,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            189 => 
            array (
                'PokemonHabitatID' => 1190,
                'PokemonID' => 598,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            190 => 
            array (
                'PokemonHabitatID' => 1191,
                'PokemonID' => 598,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            191 => 
            array (
                'PokemonHabitatID' => 1192,
                'PokemonID' => 599,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            192 => 
            array (
                'PokemonHabitatID' => 1193,
                'PokemonID' => 599,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            193 => 
            array (
                'PokemonHabitatID' => 1194,
                'PokemonID' => 599,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            194 => 
            array (
                'PokemonHabitatID' => 1195,
                'PokemonID' => 599,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            195 => 
            array (
                'PokemonHabitatID' => 1196,
                'PokemonID' => 600,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            196 => 
            array (
                'PokemonHabitatID' => 1197,
                'PokemonID' => 600,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            197 => 
            array (
                'PokemonHabitatID' => 1198,
                'PokemonID' => 600,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            198 => 
            array (
                'PokemonHabitatID' => 1199,
                'PokemonID' => 600,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            199 => 
            array (
                'PokemonHabitatID' => 1200,
                'PokemonID' => 601,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            200 => 
            array (
                'PokemonHabitatID' => 1201,
                'PokemonID' => 601,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            201 => 
            array (
                'PokemonHabitatID' => 1202,
                'PokemonID' => 601,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            202 => 
            array (
                'PokemonHabitatID' => 1203,
                'PokemonID' => 601,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            203 => 
            array (
                'PokemonHabitatID' => 1204,
                'PokemonID' => 602,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            204 => 
            array (
                'PokemonHabitatID' => 1205,
                'PokemonID' => 603,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            205 => 
            array (
                'PokemonHabitatID' => 1206,
                'PokemonID' => 604,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            206 => 
            array (
                'PokemonHabitatID' => 1207,
                'PokemonID' => 605,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            207 => 
            array (
                'PokemonHabitatID' => 1208,
                'PokemonID' => 605,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            208 => 
            array (
                'PokemonHabitatID' => 1209,
                'PokemonID' => 606,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            209 => 
            array (
                'PokemonHabitatID' => 1210,
                'PokemonID' => 606,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            210 => 
            array (
                'PokemonHabitatID' => 1211,
                'PokemonID' => 607,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            211 => 
            array (
                'PokemonHabitatID' => 1212,
                'PokemonID' => 608,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            212 => 
            array (
                'PokemonHabitatID' => 1213,
                'PokemonID' => 609,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            213 => 
            array (
                'PokemonHabitatID' => 1214,
                'PokemonID' => 609,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            214 => 
            array (
                'PokemonHabitatID' => 1215,
                'PokemonID' => 609,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            215 => 
            array (
                'PokemonHabitatID' => 1216,
                'PokemonID' => 610,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            216 => 
            array (
                'PokemonHabitatID' => 1217,
                'PokemonID' => 610,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            217 => 
            array (
                'PokemonHabitatID' => 1218,
                'PokemonID' => 610,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            218 => 
            array (
                'PokemonHabitatID' => 1219,
                'PokemonID' => 611,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            219 => 
            array (
                'PokemonHabitatID' => 1220,
                'PokemonID' => 611,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            220 => 
            array (
                'PokemonHabitatID' => 1221,
                'PokemonID' => 611,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            221 => 
            array (
                'PokemonHabitatID' => 1222,
                'PokemonID' => 612,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            222 => 
            array (
                'PokemonHabitatID' => 1223,
                'PokemonID' => 612,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            223 => 
            array (
                'PokemonHabitatID' => 1224,
                'PokemonID' => 612,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            224 => 
            array (
                'PokemonHabitatID' => 1225,
                'PokemonID' => 613,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            225 => 
            array (
                'PokemonHabitatID' => 1226,
                'PokemonID' => 613,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            226 => 
            array (
                'PokemonHabitatID' => 1227,
                'PokemonID' => 613,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            227 => 
            array (
                'PokemonHabitatID' => 1228,
                'PokemonID' => 614,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            228 => 
            array (
                'PokemonHabitatID' => 1229,
                'PokemonID' => 614,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            229 => 
            array (
                'PokemonHabitatID' => 1230,
                'PokemonID' => 615,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            230 => 
            array (
                'PokemonHabitatID' => 1231,
                'PokemonID' => 615,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            231 => 
            array (
                'PokemonHabitatID' => 1232,
                'PokemonID' => 616,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            232 => 
            array (
                'PokemonHabitatID' => 1233,
                'PokemonID' => 616,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            233 => 
            array (
                'PokemonHabitatID' => 1234,
                'PokemonID' => 616,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            234 => 
            array (
                'PokemonHabitatID' => 1235,
                'PokemonID' => 617,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            235 => 
            array (
                'PokemonHabitatID' => 1236,
                'PokemonID' => 617,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            236 => 
            array (
                'PokemonHabitatID' => 1237,
                'PokemonID' => 617,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            237 => 
            array (
                'PokemonHabitatID' => 1238,
                'PokemonID' => 618,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            238 => 
            array (
                'PokemonHabitatID' => 1239,
                'PokemonID' => 618,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            239 => 
            array (
                'PokemonHabitatID' => 1240,
                'PokemonID' => 619,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            240 => 
            array (
                'PokemonHabitatID' => 1241,
                'PokemonID' => 619,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            241 => 
            array (
                'PokemonHabitatID' => 1242,
                'PokemonID' => 620,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            242 => 
            array (
                'PokemonHabitatID' => 1243,
                'PokemonID' => 620,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            243 => 
            array (
                'PokemonHabitatID' => 1244,
                'PokemonID' => 621,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            244 => 
            array (
                'PokemonHabitatID' => 1245,
                'PokemonID' => 621,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            245 => 
            array (
                'PokemonHabitatID' => 1246,
                'PokemonID' => 622,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            246 => 
            array (
                'PokemonHabitatID' => 1247,
                'PokemonID' => 622,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            247 => 
            array (
                'PokemonHabitatID' => 1248,
                'PokemonID' => 623,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            248 => 
            array (
                'PokemonHabitatID' => 1249,
                'PokemonID' => 623,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            249 => 
            array (
                'PokemonHabitatID' => 1250,
                'PokemonID' => 624,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            250 => 
            array (
                'PokemonHabitatID' => 1251,
                'PokemonID' => 624,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            251 => 
            array (
                'PokemonHabitatID' => 1252,
                'PokemonID' => 625,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            252 => 
            array (
                'PokemonHabitatID' => 1253,
                'PokemonID' => 625,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            253 => 
            array (
                'PokemonHabitatID' => 1254,
                'PokemonID' => 626,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            254 => 
            array (
                'PokemonHabitatID' => 1255,
                'PokemonID' => 626,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            255 => 
            array (
                'PokemonHabitatID' => 1256,
                'PokemonID' => 627,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            256 => 
            array (
                'PokemonHabitatID' => 1257,
                'PokemonID' => 627,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            257 => 
            array (
                'PokemonHabitatID' => 1258,
                'PokemonID' => 628,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            258 => 
            array (
                'PokemonHabitatID' => 1259,
                'PokemonID' => 628,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            259 => 
            array (
                'PokemonHabitatID' => 1260,
                'PokemonID' => 629,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            260 => 
            array (
                'PokemonHabitatID' => 1261,
                'PokemonID' => 629,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            261 => 
            array (
                'PokemonHabitatID' => 1262,
                'PokemonID' => 630,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            262 => 
            array (
                'PokemonHabitatID' => 1263,
                'PokemonID' => 630,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            263 => 
            array (
                'PokemonHabitatID' => 1264,
                'PokemonID' => 631,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            264 => 
            array (
                'PokemonHabitatID' => 1265,
                'PokemonID' => 631,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            265 => 
            array (
                'PokemonHabitatID' => 1266,
                'PokemonID' => 632,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            266 => 
            array (
                'PokemonHabitatID' => 1267,
                'PokemonID' => 632,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            267 => 
            array (
                'PokemonHabitatID' => 1268,
                'PokemonID' => 632,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            268 => 
            array (
                'PokemonHabitatID' => 1269,
                'PokemonID' => 633,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            269 => 
            array (
                'PokemonHabitatID' => 1270,
                'PokemonID' => 633,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            270 => 
            array (
                'PokemonHabitatID' => 1271,
                'PokemonID' => 633,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            271 => 
            array (
                'PokemonHabitatID' => 1272,
                'PokemonID' => 634,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            272 => 
            array (
                'PokemonHabitatID' => 1273,
                'PokemonID' => 634,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            273 => 
            array (
                'PokemonHabitatID' => 1274,
                'PokemonID' => 634,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            274 => 
            array (
                'PokemonHabitatID' => 1275,
                'PokemonID' => 634,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            275 => 
            array (
                'PokemonHabitatID' => 1276,
                'PokemonID' => 635,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            276 => 
            array (
                'PokemonHabitatID' => 1277,
                'PokemonID' => 635,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            277 => 
            array (
                'PokemonHabitatID' => 1278,
                'PokemonID' => 635,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            278 => 
            array (
                'PokemonHabitatID' => 1279,
                'PokemonID' => 635,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            279 => 
            array (
                'PokemonHabitatID' => 1280,
                'PokemonID' => 636,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            280 => 
            array (
                'PokemonHabitatID' => 1281,
                'PokemonID' => 636,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            281 => 
            array (
                'PokemonHabitatID' => 1282,
                'PokemonID' => 637,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            282 => 
            array (
                'PokemonHabitatID' => 1283,
                'PokemonID' => 637,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            283 => 
            array (
                'PokemonHabitatID' => 1284,
                'PokemonID' => 638,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            284 => 
            array (
                'PokemonHabitatID' => 1285,
                'PokemonID' => 638,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            285 => 
            array (
                'PokemonHabitatID' => 1286,
                'PokemonID' => 639,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            286 => 
            array (
                'PokemonHabitatID' => 1287,
                'PokemonID' => 639,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            287 => 
            array (
                'PokemonHabitatID' => 1288,
                'PokemonID' => 639,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            288 => 
            array (
                'PokemonHabitatID' => 1289,
                'PokemonID' => 640,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            289 => 
            array (
                'PokemonHabitatID' => 1290,
                'PokemonID' => 640,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            290 => 
            array (
                'PokemonHabitatID' => 1291,
                'PokemonID' => 640,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            291 => 
            array (
                'PokemonHabitatID' => 1292,
                'PokemonID' => 641,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            292 => 
            array (
                'PokemonHabitatID' => 1293,
                'PokemonID' => 641,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            293 => 
            array (
                'PokemonHabitatID' => 1294,
                'PokemonID' => 642,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            294 => 
            array (
                'PokemonHabitatID' => 1295,
                'PokemonID' => 642,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            295 => 
            array (
                'PokemonHabitatID' => 1296,
                'PokemonID' => 643,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            296 => 
            array (
                'PokemonHabitatID' => 1297,
                'PokemonID' => 643,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            297 => 
            array (
                'PokemonHabitatID' => 1298,
                'PokemonID' => 643,
                'HabitatID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            298 => 
            array (
                'PokemonHabitatID' => 1299,
                'PokemonID' => 644,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            299 => 
            array (
                'PokemonHabitatID' => 1300,
                'PokemonID' => 644,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            300 => 
            array (
                'PokemonHabitatID' => 1301,
                'PokemonID' => 644,
                'HabitatID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            301 => 
            array (
                'PokemonHabitatID' => 1302,
                'PokemonID' => 645,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            302 => 
            array (
                'PokemonHabitatID' => 1303,
                'PokemonID' => 645,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            303 => 
            array (
                'PokemonHabitatID' => 1304,
                'PokemonID' => 645,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            304 => 
            array (
                'PokemonHabitatID' => 1305,
                'PokemonID' => 646,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            305 => 
            array (
                'PokemonHabitatID' => 1306,
                'PokemonID' => 646,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            306 => 
            array (
                'PokemonHabitatID' => 1307,
                'PokemonID' => 646,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            307 => 
            array (
                'PokemonHabitatID' => 1308,
                'PokemonID' => 647,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            308 => 
            array (
                'PokemonHabitatID' => 1309,
                'PokemonID' => 648,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            309 => 
            array (
                'PokemonHabitatID' => 1310,
                'PokemonID' => 649,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            310 => 
            array (
                'PokemonHabitatID' => 1311,
                'PokemonID' => 649,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            311 => 
            array (
                'PokemonHabitatID' => 1312,
                'PokemonID' => 650,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            312 => 
            array (
                'PokemonHabitatID' => 1313,
                'PokemonID' => 650,
                'HabitatID' => 20,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            313 => 
            array (
                'PokemonHabitatID' => 1314,
                'PokemonID' => 651,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            314 => 
            array (
                'PokemonHabitatID' => 1315,
                'PokemonID' => 651,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            315 => 
            array (
                'PokemonHabitatID' => 1316,
                'PokemonID' => 651,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            316 => 
            array (
                'PokemonHabitatID' => 1317,
                'PokemonID' => 652,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            317 => 
            array (
                'PokemonHabitatID' => 1318,
                'PokemonID' => 652,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            318 => 
            array (
                'PokemonHabitatID' => 1319,
                'PokemonID' => 652,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            319 => 
            array (
                'PokemonHabitatID' => 1320,
                'PokemonID' => 653,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            320 => 
            array (
                'PokemonHabitatID' => 1321,
                'PokemonID' => 653,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            321 => 
            array (
                'PokemonHabitatID' => 1322,
                'PokemonID' => 654,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            322 => 
            array (
                'PokemonHabitatID' => 1323,
                'PokemonID' => 654,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            323 => 
            array (
                'PokemonHabitatID' => 1324,
                'PokemonID' => 655,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            324 => 
            array (
                'PokemonHabitatID' => 1325,
                'PokemonID' => 655,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            325 => 
            array (
                'PokemonHabitatID' => 1326,
                'PokemonID' => 656,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            326 => 
            array (
                'PokemonHabitatID' => 1327,
                'PokemonID' => 656,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            327 => 
            array (
                'PokemonHabitatID' => 1328,
                'PokemonID' => 657,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            328 => 
            array (
                'PokemonHabitatID' => 1329,
                'PokemonID' => 657,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            329 => 
            array (
                'PokemonHabitatID' => 1330,
                'PokemonID' => 658,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            330 => 
            array (
                'PokemonHabitatID' => 1331,
                'PokemonID' => 658,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            331 => 
            array (
                'PokemonHabitatID' => 1332,
                'PokemonID' => 658,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            332 => 
            array (
                'PokemonHabitatID' => 1333,
                'PokemonID' => 659,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            333 => 
            array (
                'PokemonHabitatID' => 1334,
                'PokemonID' => 659,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            334 => 
            array (
                'PokemonHabitatID' => 1335,
                'PokemonID' => 659,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            335 => 
            array (
                'PokemonHabitatID' => 1336,
                'PokemonID' => 660,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            336 => 
            array (
                'PokemonHabitatID' => 1337,
                'PokemonID' => 660,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            337 => 
            array (
                'PokemonHabitatID' => 1338,
                'PokemonID' => 661,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            338 => 
            array (
                'PokemonHabitatID' => 1339,
                'PokemonID' => 661,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            339 => 
            array (
                'PokemonHabitatID' => 1340,
                'PokemonID' => 662,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            340 => 
            array (
                'PokemonHabitatID' => 1341,
                'PokemonID' => 662,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            341 => 
            array (
                'PokemonHabitatID' => 1342,
                'PokemonID' => 663,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            342 => 
            array (
                'PokemonHabitatID' => 1343,
                'PokemonID' => 664,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            343 => 
            array (
                'PokemonHabitatID' => 1344,
                'PokemonID' => 665,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            344 => 
            array (
                'PokemonHabitatID' => 1345,
                'PokemonID' => 666,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            345 => 
            array (
                'PokemonHabitatID' => 1346,
                'PokemonID' => 667,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            346 => 
            array (
                'PokemonHabitatID' => 1347,
                'PokemonID' => 668,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            347 => 
            array (
                'PokemonHabitatID' => 1348,
                'PokemonID' => 668,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            348 => 
            array (
                'PokemonHabitatID' => 1349,
                'PokemonID' => 668,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            349 => 
            array (
                'PokemonHabitatID' => 1350,
                'PokemonID' => 668,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            350 => 
            array (
                'PokemonHabitatID' => 1351,
                'PokemonID' => 669,
                'HabitatID' => 36,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            351 => 
            array (
                'PokemonHabitatID' => 1352,
                'PokemonID' => 670,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            352 => 
            array (
                'PokemonHabitatID' => 1353,
                'PokemonID' => 671,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            353 => 
            array (
                'PokemonHabitatID' => 1354,
                'PokemonID' => 672,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            354 => 
            array (
                'PokemonHabitatID' => 1355,
                'PokemonID' => 672,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            355 => 
            array (
                'PokemonHabitatID' => 1356,
                'PokemonID' => 673,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            356 => 
            array (
                'PokemonHabitatID' => 1357,
                'PokemonID' => 674,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            357 => 
            array (
                'PokemonHabitatID' => 1358,
                'PokemonID' => 674,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            358 => 
            array (
                'PokemonHabitatID' => 1359,
                'PokemonID' => 675,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            359 => 
            array (
                'PokemonHabitatID' => 1360,
                'PokemonID' => 675,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            360 => 
            array (
                'PokemonHabitatID' => 1361,
                'PokemonID' => 676,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            361 => 
            array (
                'PokemonHabitatID' => 1362,
                'PokemonID' => 676,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            362 => 
            array (
                'PokemonHabitatID' => 1363,
                'PokemonID' => 677,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            363 => 
            array (
                'PokemonHabitatID' => 1364,
                'PokemonID' => 677,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            364 => 
            array (
                'PokemonHabitatID' => 1365,
                'PokemonID' => 677,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            365 => 
            array (
                'PokemonHabitatID' => 1366,
                'PokemonID' => 678,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            366 => 
            array (
                'PokemonHabitatID' => 1367,
                'PokemonID' => 679,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            367 => 
            array (
                'PokemonHabitatID' => 1368,
                'PokemonID' => 679,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            368 => 
            array (
                'PokemonHabitatID' => 1369,
                'PokemonID' => 680,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            369 => 
            array (
                'PokemonHabitatID' => 1370,
                'PokemonID' => 680,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            370 => 
            array (
                'PokemonHabitatID' => 1371,
                'PokemonID' => 681,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            371 => 
            array (
                'PokemonHabitatID' => 1372,
                'PokemonID' => 681,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            372 => 
            array (
                'PokemonHabitatID' => 1373,
                'PokemonID' => 682,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            373 => 
            array (
                'PokemonHabitatID' => 1374,
                'PokemonID' => 682,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            374 => 
            array (
                'PokemonHabitatID' => 1375,
                'PokemonID' => 683,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            375 => 
            array (
                'PokemonHabitatID' => 1376,
                'PokemonID' => 683,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            376 => 
            array (
                'PokemonHabitatID' => 1377,
                'PokemonID' => 684,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            377 => 
            array (
                'PokemonHabitatID' => 1378,
                'PokemonID' => 684,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            378 => 
            array (
                'PokemonHabitatID' => 1379,
                'PokemonID' => 684,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            379 => 
            array (
                'PokemonHabitatID' => 1380,
                'PokemonID' => 685,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            380 => 
            array (
                'PokemonHabitatID' => 1381,
                'PokemonID' => 685,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            381 => 
            array (
                'PokemonHabitatID' => 1382,
                'PokemonID' => 686,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            382 => 
            array (
                'PokemonHabitatID' => 1383,
                'PokemonID' => 687,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            383 => 
            array (
                'PokemonHabitatID' => 1384,
                'PokemonID' => 687,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            384 => 
            array (
                'PokemonHabitatID' => 1385,
                'PokemonID' => 688,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            385 => 
            array (
                'PokemonHabitatID' => 1386,
                'PokemonID' => 688,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            386 => 
            array (
                'PokemonHabitatID' => 1387,
                'PokemonID' => 689,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            387 => 
            array (
                'PokemonHabitatID' => 1388,
                'PokemonID' => 689,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            388 => 
            array (
                'PokemonHabitatID' => 1389,
                'PokemonID' => 690,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            389 => 
            array (
                'PokemonHabitatID' => 1390,
                'PokemonID' => 690,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            390 => 
            array (
                'PokemonHabitatID' => 1391,
                'PokemonID' => 691,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            391 => 
            array (
                'PokemonHabitatID' => 1392,
                'PokemonID' => 691,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            392 => 
            array (
                'PokemonHabitatID' => 1393,
                'PokemonID' => 692,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            393 => 
            array (
                'PokemonHabitatID' => 1394,
                'PokemonID' => 692,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            394 => 
            array (
                'PokemonHabitatID' => 1395,
                'PokemonID' => 693,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            395 => 
            array (
                'PokemonHabitatID' => 1396,
                'PokemonID' => 694,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            396 => 
            array (
                'PokemonHabitatID' => 1397,
                'PokemonID' => 695,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            397 => 
            array (
                'PokemonHabitatID' => 1398,
                'PokemonID' => 696,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            398 => 
            array (
                'PokemonHabitatID' => 1399,
                'PokemonID' => 696,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            399 => 
            array (
                'PokemonHabitatID' => 1400,
                'PokemonID' => 697,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            400 => 
            array (
                'PokemonHabitatID' => 1401,
                'PokemonID' => 697,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            401 => 
            array (
                'PokemonHabitatID' => 1402,
                'PokemonID' => 698,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            402 => 
            array (
                'PokemonHabitatID' => 1403,
                'PokemonID' => 698,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            403 => 
            array (
                'PokemonHabitatID' => 1404,
                'PokemonID' => 699,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            404 => 
            array (
                'PokemonHabitatID' => 1405,
                'PokemonID' => 699,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            405 => 
            array (
                'PokemonHabitatID' => 1406,
                'PokemonID' => 700,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            406 => 
            array (
                'PokemonHabitatID' => 1407,
                'PokemonID' => 700,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            407 => 
            array (
                'PokemonHabitatID' => 1408,
                'PokemonID' => 701,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            408 => 
            array (
                'PokemonHabitatID' => 1409,
                'PokemonID' => 701,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            409 => 
            array (
                'PokemonHabitatID' => 1410,
                'PokemonID' => 702,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            410 => 
            array (
                'PokemonHabitatID' => 1411,
                'PokemonID' => 702,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            411 => 
            array (
                'PokemonHabitatID' => 1412,
                'PokemonID' => 703,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            412 => 
            array (
                'PokemonHabitatID' => 1413,
                'PokemonID' => 703,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            413 => 
            array (
                'PokemonHabitatID' => 1414,
                'PokemonID' => 704,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            414 => 
            array (
                'PokemonHabitatID' => 1415,
                'PokemonID' => 705,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            415 => 
            array (
                'PokemonHabitatID' => 1416,
                'PokemonID' => 706,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            416 => 
            array (
                'PokemonHabitatID' => 1417,
                'PokemonID' => 706,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            417 => 
            array (
                'PokemonHabitatID' => 1418,
                'PokemonID' => 706,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            418 => 
            array (
                'PokemonHabitatID' => 1419,
                'PokemonID' => 707,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            419 => 
            array (
                'PokemonHabitatID' => 1420,
                'PokemonID' => 707,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            420 => 
            array (
                'PokemonHabitatID' => 1421,
                'PokemonID' => 707,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            421 => 
            array (
                'PokemonHabitatID' => 1422,
                'PokemonID' => 708,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            422 => 
            array (
                'PokemonHabitatID' => 1423,
                'PokemonID' => 708,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            423 => 
            array (
                'PokemonHabitatID' => 1424,
                'PokemonID' => 709,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            424 => 
            array (
                'PokemonHabitatID' => 1425,
                'PokemonID' => 709,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            425 => 
            array (
                'PokemonHabitatID' => 1426,
                'PokemonID' => 710,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            426 => 
            array (
                'PokemonHabitatID' => 1427,
                'PokemonID' => 710,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            427 => 
            array (
                'PokemonHabitatID' => 1428,
                'PokemonID' => 711,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            428 => 
            array (
                'PokemonHabitatID' => 1429,
                'PokemonID' => 711,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            429 => 
            array (
                'PokemonHabitatID' => 1430,
                'PokemonID' => 712,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            430 => 
            array (
                'PokemonHabitatID' => 1431,
                'PokemonID' => 712,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            431 => 
            array (
                'PokemonHabitatID' => 1432,
                'PokemonID' => 713,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            432 => 
            array (
                'PokemonHabitatID' => 1433,
                'PokemonID' => 713,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            433 => 
            array (
                'PokemonHabitatID' => 1434,
                'PokemonID' => 714,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            434 => 
            array (
                'PokemonHabitatID' => 1435,
                'PokemonID' => 714,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            435 => 
            array (
                'PokemonHabitatID' => 1436,
                'PokemonID' => 715,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            436 => 
            array (
                'PokemonHabitatID' => 1437,
                'PokemonID' => 715,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            437 => 
            array (
                'PokemonHabitatID' => 1438,
                'PokemonID' => 716,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            438 => 
            array (
                'PokemonHabitatID' => 1439,
                'PokemonID' => 716,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            439 => 
            array (
                'PokemonHabitatID' => 1440,
                'PokemonID' => 717,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            440 => 
            array (
                'PokemonHabitatID' => 1441,
                'PokemonID' => 717,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            441 => 
            array (
                'PokemonHabitatID' => 1442,
                'PokemonID' => 718,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            442 => 
            array (
                'PokemonHabitatID' => 1443,
                'PokemonID' => 718,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            443 => 
            array (
                'PokemonHabitatID' => 1444,
                'PokemonID' => 719,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            444 => 
            array (
                'PokemonHabitatID' => 1445,
                'PokemonID' => 719,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            445 => 
            array (
                'PokemonHabitatID' => 1446,
                'PokemonID' => 720,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            446 => 
            array (
                'PokemonHabitatID' => 1447,
                'PokemonID' => 720,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            447 => 
            array (
                'PokemonHabitatID' => 1448,
                'PokemonID' => 721,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            448 => 
            array (
                'PokemonHabitatID' => 1449,
                'PokemonID' => 721,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            449 => 
            array (
                'PokemonHabitatID' => 1450,
                'PokemonID' => 722,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            450 => 
            array (
                'PokemonHabitatID' => 1451,
                'PokemonID' => 723,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            451 => 
            array (
                'PokemonHabitatID' => 1452,
                'PokemonID' => 723,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            452 => 
            array (
                'PokemonHabitatID' => 1453,
                'PokemonID' => 724,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            453 => 
            array (
                'PokemonHabitatID' => 1454,
                'PokemonID' => 724,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            454 => 
            array (
                'PokemonHabitatID' => 1455,
                'PokemonID' => 725,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            455 => 
            array (
                'PokemonHabitatID' => 1456,
                'PokemonID' => 725,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            456 => 
            array (
                'PokemonHabitatID' => 1457,
                'PokemonID' => 726,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            457 => 
            array (
                'PokemonHabitatID' => 1458,
                'PokemonID' => 726,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            458 => 
            array (
                'PokemonHabitatID' => 1459,
                'PokemonID' => 727,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            459 => 
            array (
                'PokemonHabitatID' => 1460,
                'PokemonID' => 727,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            460 => 
            array (
                'PokemonHabitatID' => 1461,
                'PokemonID' => 728,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            461 => 
            array (
                'PokemonHabitatID' => 1462,
                'PokemonID' => 728,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            462 => 
            array (
                'PokemonHabitatID' => 1463,
                'PokemonID' => 729,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            463 => 
            array (
                'PokemonHabitatID' => 1464,
                'PokemonID' => 729,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            464 => 
            array (
                'PokemonHabitatID' => 1465,
                'PokemonID' => 730,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            465 => 
            array (
                'PokemonHabitatID' => 1466,
                'PokemonID' => 731,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            466 => 
            array (
                'PokemonHabitatID' => 1467,
                'PokemonID' => 732,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            467 => 
            array (
                'PokemonHabitatID' => 1468,
                'PokemonID' => 733,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            468 => 
            array (
                'PokemonHabitatID' => 1469,
                'PokemonID' => 734,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            469 => 
            array (
                'PokemonHabitatID' => 1470,
                'PokemonID' => 734,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            470 => 
            array (
                'PokemonHabitatID' => 1471,
                'PokemonID' => 735,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            471 => 
            array (
                'PokemonHabitatID' => 1472,
                'PokemonID' => 735,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            472 => 
            array (
                'PokemonHabitatID' => 1473,
                'PokemonID' => 736,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            473 => 
            array (
                'PokemonHabitatID' => 1474,
                'PokemonID' => 736,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            474 => 
            array (
                'PokemonHabitatID' => 1475,
                'PokemonID' => 737,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            475 => 
            array (
                'PokemonHabitatID' => 1476,
                'PokemonID' => 737,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            476 => 
            array (
                'PokemonHabitatID' => 1477,
                'PokemonID' => 738,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            477 => 
            array (
                'PokemonHabitatID' => 1478,
                'PokemonID' => 738,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            478 => 
            array (
                'PokemonHabitatID' => 1479,
                'PokemonID' => 739,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            479 => 
            array (
                'PokemonHabitatID' => 1480,
                'PokemonID' => 739,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            480 => 
            array (
                'PokemonHabitatID' => 1481,
                'PokemonID' => 740,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            481 => 
            array (
                'PokemonHabitatID' => 1482,
                'PokemonID' => 740,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            482 => 
            array (
                'PokemonHabitatID' => 1483,
                'PokemonID' => 741,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            483 => 
            array (
                'PokemonHabitatID' => 1484,
                'PokemonID' => 741,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            484 => 
            array (
                'PokemonHabitatID' => 1485,
                'PokemonID' => 742,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            485 => 
            array (
                'PokemonHabitatID' => 1486,
                'PokemonID' => 742,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            486 => 
            array (
                'PokemonHabitatID' => 1487,
                'PokemonID' => 743,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            487 => 
            array (
                'PokemonHabitatID' => 1488,
                'PokemonID' => 743,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            488 => 
            array (
                'PokemonHabitatID' => 1489,
                'PokemonID' => 744,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            489 => 
            array (
                'PokemonHabitatID' => 1490,
                'PokemonID' => 744,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            490 => 
            array (
                'PokemonHabitatID' => 1491,
                'PokemonID' => 745,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            491 => 
            array (
                'PokemonHabitatID' => 1492,
                'PokemonID' => 745,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            492 => 
            array (
                'PokemonHabitatID' => 1493,
                'PokemonID' => 746,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            493 => 
            array (
                'PokemonHabitatID' => 1494,
                'PokemonID' => 746,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            494 => 
            array (
                'PokemonHabitatID' => 1495,
                'PokemonID' => 747,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            495 => 
            array (
                'PokemonHabitatID' => 1496,
                'PokemonID' => 747,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            496 => 
            array (
                'PokemonHabitatID' => 1497,
                'PokemonID' => 747,
                'HabitatID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            497 => 
            array (
                'PokemonHabitatID' => 1498,
                'PokemonID' => 748,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            498 => 
            array (
                'PokemonHabitatID' => 1499,
                'PokemonID' => 748,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            499 => 
            array (
                'PokemonHabitatID' => 1500,
                'PokemonID' => 748,
                'HabitatID' => 33,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
        ));
        \DB::table('PokemonHabitat')->insert(array (
            0 => 
            array (
                'PokemonHabitatID' => 1501,
                'PokemonID' => 749,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            1 => 
            array (
                'PokemonHabitatID' => 1502,
                'PokemonID' => 749,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            2 => 
            array (
                'PokemonHabitatID' => 1503,
                'PokemonID' => 749,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            3 => 
            array (
                'PokemonHabitatID' => 1504,
                'PokemonID' => 749,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            4 => 
            array (
                'PokemonHabitatID' => 1505,
                'PokemonID' => 750,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            5 => 
            array (
                'PokemonHabitatID' => 1506,
                'PokemonID' => 750,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            6 => 
            array (
                'PokemonHabitatID' => 1507,
                'PokemonID' => 750,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            7 => 
            array (
                'PokemonHabitatID' => 1508,
                'PokemonID' => 750,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            8 => 
            array (
                'PokemonHabitatID' => 1509,
                'PokemonID' => 751,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            9 => 
            array (
                'PokemonHabitatID' => 1510,
                'PokemonID' => 751,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            10 => 
            array (
                'PokemonHabitatID' => 1511,
                'PokemonID' => 752,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            11 => 
            array (
                'PokemonHabitatID' => 1512,
                'PokemonID' => 752,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            12 => 
            array (
                'PokemonHabitatID' => 1513,
                'PokemonID' => 753,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            13 => 
            array (
                'PokemonHabitatID' => 1514,
                'PokemonID' => 753,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            14 => 
            array (
                'PokemonHabitatID' => 1515,
                'PokemonID' => 754,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            15 => 
            array (
                'PokemonHabitatID' => 1516,
                'PokemonID' => 754,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            16 => 
            array (
                'PokemonHabitatID' => 1517,
                'PokemonID' => 755,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            17 => 
            array (
                'PokemonHabitatID' => 1518,
                'PokemonID' => 755,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            18 => 
            array (
                'PokemonHabitatID' => 1519,
                'PokemonID' => 755,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            19 => 
            array (
                'PokemonHabitatID' => 1520,
                'PokemonID' => 756,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            20 => 
            array (
                'PokemonHabitatID' => 1521,
                'PokemonID' => 756,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            21 => 
            array (
                'PokemonHabitatID' => 1522,
                'PokemonID' => 756,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            22 => 
            array (
                'PokemonHabitatID' => 1523,
                'PokemonID' => 757,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            23 => 
            array (
                'PokemonHabitatID' => 1524,
                'PokemonID' => 757,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            24 => 
            array (
                'PokemonHabitatID' => 1525,
                'PokemonID' => 758,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            25 => 
            array (
                'PokemonHabitatID' => 1526,
                'PokemonID' => 758,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            26 => 
            array (
                'PokemonHabitatID' => 1527,
                'PokemonID' => 759,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            27 => 
            array (
                'PokemonHabitatID' => 1528,
                'PokemonID' => 759,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            28 => 
            array (
                'PokemonHabitatID' => 1529,
                'PokemonID' => 760,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            29 => 
            array (
                'PokemonHabitatID' => 1530,
                'PokemonID' => 760,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            30 => 
            array (
                'PokemonHabitatID' => 1531,
                'PokemonID' => 761,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            31 => 
            array (
                'PokemonHabitatID' => 1532,
                'PokemonID' => 761,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            32 => 
            array (
                'PokemonHabitatID' => 1533,
                'PokemonID' => 762,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            33 => 
            array (
                'PokemonHabitatID' => 1534,
                'PokemonID' => 762,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            34 => 
            array (
                'PokemonHabitatID' => 1535,
                'PokemonID' => 763,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            35 => 
            array (
                'PokemonHabitatID' => 1536,
                'PokemonID' => 763,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            36 => 
            array (
                'PokemonHabitatID' => 1537,
                'PokemonID' => 764,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            37 => 
            array (
                'PokemonHabitatID' => 1538,
                'PokemonID' => 764,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            38 => 
            array (
                'PokemonHabitatID' => 1539,
                'PokemonID' => 765,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            39 => 
            array (
                'PokemonHabitatID' => 1540,
                'PokemonID' => 765,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            40 => 
            array (
                'PokemonHabitatID' => 1541,
                'PokemonID' => 766,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            41 => 
            array (
                'PokemonHabitatID' => 1542,
                'PokemonID' => 766,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            42 => 
            array (
                'PokemonHabitatID' => 1543,
                'PokemonID' => 767,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            43 => 
            array (
                'PokemonHabitatID' => 1544,
                'PokemonID' => 767,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            44 => 
            array (
                'PokemonHabitatID' => 1545,
                'PokemonID' => 768,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            45 => 
            array (
                'PokemonHabitatID' => 1546,
                'PokemonID' => 768,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            46 => 
            array (
                'PokemonHabitatID' => 1547,
                'PokemonID' => 769,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            47 => 
            array (
                'PokemonHabitatID' => 1548,
                'PokemonID' => 769,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            48 => 
            array (
                'PokemonHabitatID' => 1549,
                'PokemonID' => 770,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            49 => 
            array (
                'PokemonHabitatID' => 1550,
                'PokemonID' => 770,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            50 => 
            array (
                'PokemonHabitatID' => 1551,
                'PokemonID' => 771,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            51 => 
            array (
                'PokemonHabitatID' => 1552,
                'PokemonID' => 771,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            52 => 
            array (
                'PokemonHabitatID' => 1553,
                'PokemonID' => 772,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            53 => 
            array (
                'PokemonHabitatID' => 1554,
                'PokemonID' => 772,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            54 => 
            array (
                'PokemonHabitatID' => 1555,
                'PokemonID' => 773,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            55 => 
            array (
                'PokemonHabitatID' => 1556,
                'PokemonID' => 774,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            56 => 
            array (
                'PokemonHabitatID' => 1557,
                'PokemonID' => 775,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            57 => 
            array (
                'PokemonHabitatID' => 1558,
                'PokemonID' => 775,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            58 => 
            array (
                'PokemonHabitatID' => 1559,
                'PokemonID' => 776,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            59 => 
            array (
                'PokemonHabitatID' => 1560,
                'PokemonID' => 776,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            60 => 
            array (
                'PokemonHabitatID' => 1561,
                'PokemonID' => 777,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            61 => 
            array (
                'PokemonHabitatID' => 1562,
                'PokemonID' => 777,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            62 => 
            array (
                'PokemonHabitatID' => 1563,
                'PokemonID' => 778,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            63 => 
            array (
                'PokemonHabitatID' => 1564,
                'PokemonID' => 778,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            64 => 
            array (
                'PokemonHabitatID' => 1565,
                'PokemonID' => 779,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            65 => 
            array (
                'PokemonHabitatID' => 1566,
                'PokemonID' => 779,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            66 => 
            array (
                'PokemonHabitatID' => 1567,
                'PokemonID' => 780,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            67 => 
            array (
                'PokemonHabitatID' => 1568,
                'PokemonID' => 780,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            68 => 
            array (
                'PokemonHabitatID' => 1569,
                'PokemonID' => 781,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            69 => 
            array (
                'PokemonHabitatID' => 1570,
                'PokemonID' => 781,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            70 => 
            array (
                'PokemonHabitatID' => 1571,
                'PokemonID' => 782,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            71 => 
            array (
                'PokemonHabitatID' => 1572,
                'PokemonID' => 782,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            72 => 
            array (
                'PokemonHabitatID' => 1573,
                'PokemonID' => 783,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            73 => 
            array (
                'PokemonHabitatID' => 1574,
                'PokemonID' => 783,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            74 => 
            array (
                'PokemonHabitatID' => 1575,
                'PokemonID' => 784,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            75 => 
            array (
                'PokemonHabitatID' => 1576,
                'PokemonID' => 784,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            76 => 
            array (
                'PokemonHabitatID' => 1577,
                'PokemonID' => 785,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            77 => 
            array (
                'PokemonHabitatID' => 1578,
                'PokemonID' => 785,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            78 => 
            array (
                'PokemonHabitatID' => 1579,
                'PokemonID' => 786,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            79 => 
            array (
                'PokemonHabitatID' => 1580,
                'PokemonID' => 786,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            80 => 
            array (
                'PokemonHabitatID' => 1581,
                'PokemonID' => 787,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            81 => 
            array (
                'PokemonHabitatID' => 1582,
                'PokemonID' => 787,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            82 => 
            array (
                'PokemonHabitatID' => 1583,
                'PokemonID' => 788,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            83 => 
            array (
                'PokemonHabitatID' => 1584,
                'PokemonID' => 788,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            84 => 
            array (
                'PokemonHabitatID' => 1585,
                'PokemonID' => 788,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            85 => 
            array (
                'PokemonHabitatID' => 1586,
                'PokemonID' => 789,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            86 => 
            array (
                'PokemonHabitatID' => 1587,
                'PokemonID' => 789,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            87 => 
            array (
                'PokemonHabitatID' => 1588,
                'PokemonID' => 789,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            88 => 
            array (
                'PokemonHabitatID' => 1589,
                'PokemonID' => 790,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            89 => 
            array (
                'PokemonHabitatID' => 1590,
                'PokemonID' => 790,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            90 => 
            array (
                'PokemonHabitatID' => 1591,
                'PokemonID' => 790,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            91 => 
            array (
                'PokemonHabitatID' => 1592,
                'PokemonID' => 791,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            92 => 
            array (
                'PokemonHabitatID' => 1593,
                'PokemonID' => 791,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            93 => 
            array (
                'PokemonHabitatID' => 1594,
                'PokemonID' => 791,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            94 => 
            array (
                'PokemonHabitatID' => 1595,
                'PokemonID' => 792,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            95 => 
            array (
                'PokemonHabitatID' => 1596,
                'PokemonID' => 792,
                'HabitatID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            96 => 
            array (
                'PokemonHabitatID' => 1597,
                'PokemonID' => 793,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            97 => 
            array (
                'PokemonHabitatID' => 1598,
                'PokemonID' => 793,
                'HabitatID' => 35,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            98 => 
            array (
                'PokemonHabitatID' => 1599,
                'PokemonID' => 794,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            99 => 
            array (
                'PokemonHabitatID' => 1600,
                'PokemonID' => 794,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            100 => 
            array (
                'PokemonHabitatID' => 1601,
                'PokemonID' => 795,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            101 => 
            array (
                'PokemonHabitatID' => 1602,
                'PokemonID' => 795,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            102 => 
            array (
                'PokemonHabitatID' => 1603,
                'PokemonID' => 796,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            103 => 
            array (
                'PokemonHabitatID' => 1604,
                'PokemonID' => 796,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            104 => 
            array (
                'PokemonHabitatID' => 1605,
                'PokemonID' => 797,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            105 => 
            array (
                'PokemonHabitatID' => 1606,
                'PokemonID' => 797,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            106 => 
            array (
                'PokemonHabitatID' => 1607,
                'PokemonID' => 798,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            107 => 
            array (
                'PokemonHabitatID' => 1608,
                'PokemonID' => 799,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            108 => 
            array (
                'PokemonHabitatID' => 1609,
                'PokemonID' => 800,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            109 => 
            array (
                'PokemonHabitatID' => 1610,
                'PokemonID' => 801,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            110 => 
            array (
                'PokemonHabitatID' => 1611,
                'PokemonID' => 802,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            111 => 
            array (
                'PokemonHabitatID' => 1612,
                'PokemonID' => 803,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            112 => 
            array (
                'PokemonHabitatID' => 1613,
                'PokemonID' => 804,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            113 => 
            array (
                'PokemonHabitatID' => 1614,
                'PokemonID' => 804,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            114 => 
            array (
                'PokemonHabitatID' => 1615,
                'PokemonID' => 805,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            115 => 
            array (
                'PokemonHabitatID' => 1616,
                'PokemonID' => 805,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            116 => 
            array (
                'PokemonHabitatID' => 1617,
                'PokemonID' => 806,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            117 => 
            array (
                'PokemonHabitatID' => 1618,
                'PokemonID' => 806,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            118 => 
            array (
                'PokemonHabitatID' => 1619,
                'PokemonID' => 807,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            119 => 
            array (
                'PokemonHabitatID' => 1620,
                'PokemonID' => 807,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            120 => 
            array (
                'PokemonHabitatID' => 1621,
                'PokemonID' => 808,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            121 => 
            array (
                'PokemonHabitatID' => 1622,
                'PokemonID' => 808,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            122 => 
            array (
                'PokemonHabitatID' => 1623,
                'PokemonID' => 809,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            123 => 
            array (
                'PokemonHabitatID' => 1624,
                'PokemonID' => 809,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            124 => 
            array (
                'PokemonHabitatID' => 1625,
                'PokemonID' => 810,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            125 => 
            array (
                'PokemonHabitatID' => 1626,
                'PokemonID' => 810,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            126 => 
            array (
                'PokemonHabitatID' => 1627,
                'PokemonID' => 811,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            127 => 
            array (
                'PokemonHabitatID' => 1628,
                'PokemonID' => 811,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            128 => 
            array (
                'PokemonHabitatID' => 1629,
                'PokemonID' => 812,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            129 => 
            array (
                'PokemonHabitatID' => 1630,
                'PokemonID' => 812,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            130 => 
            array (
                'PokemonHabitatID' => 1631,
                'PokemonID' => 813,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            131 => 
            array (
                'PokemonHabitatID' => 1632,
                'PokemonID' => 813,
                'HabitatID' => 14,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            132 => 
            array (
                'PokemonHabitatID' => 1633,
                'PokemonID' => 814,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            133 => 
            array (
                'PokemonHabitatID' => 1634,
                'PokemonID' => 815,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            134 => 
            array (
                'PokemonHabitatID' => 1635,
                'PokemonID' => 816,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            135 => 
            array (
                'PokemonHabitatID' => 1636,
                'PokemonID' => 816,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            136 => 
            array (
                'PokemonHabitatID' => 1637,
                'PokemonID' => 816,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            137 => 
            array (
                'PokemonHabitatID' => 1638,
                'PokemonID' => 816,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            138 => 
            array (
                'PokemonHabitatID' => 1639,
                'PokemonID' => 817,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            139 => 
            array (
                'PokemonHabitatID' => 1640,
                'PokemonID' => 817,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            140 => 
            array (
                'PokemonHabitatID' => 1641,
                'PokemonID' => 817,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            141 => 
            array (
                'PokemonHabitatID' => 1642,
                'PokemonID' => 817,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            142 => 
            array (
                'PokemonHabitatID' => 1643,
                'PokemonID' => 818,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            143 => 
            array (
                'PokemonHabitatID' => 1644,
                'PokemonID' => 818,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            144 => 
            array (
                'PokemonHabitatID' => 1645,
                'PokemonID' => 818,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            145 => 
            array (
                'PokemonHabitatID' => 1646,
                'PokemonID' => 818,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            146 => 
            array (
                'PokemonHabitatID' => 1647,
                'PokemonID' => 819,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            147 => 
            array (
                'PokemonHabitatID' => 1648,
                'PokemonID' => 819,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            148 => 
            array (
                'PokemonHabitatID' => 1649,
                'PokemonID' => 819,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            149 => 
            array (
                'PokemonHabitatID' => 1650,
                'PokemonID' => 819,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            150 => 
            array (
                'PokemonHabitatID' => 1651,
                'PokemonID' => 820,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            151 => 
            array (
                'PokemonHabitatID' => 1652,
                'PokemonID' => 820,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            152 => 
            array (
                'PokemonHabitatID' => 1653,
                'PokemonID' => 821,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            153 => 
            array (
                'PokemonHabitatID' => 1654,
                'PokemonID' => 821,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            154 => 
            array (
                'PokemonHabitatID' => 1655,
                'PokemonID' => 822,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            155 => 
            array (
                'PokemonHabitatID' => 1656,
                'PokemonID' => 822,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            156 => 
            array (
                'PokemonHabitatID' => 1657,
                'PokemonID' => 823,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            157 => 
            array (
                'PokemonHabitatID' => 1658,
                'PokemonID' => 823,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            158 => 
            array (
                'PokemonHabitatID' => 1659,
                'PokemonID' => 824,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            159 => 
            array (
                'PokemonHabitatID' => 1660,
                'PokemonID' => 824,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            160 => 
            array (
                'PokemonHabitatID' => 1661,
                'PokemonID' => 825,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            161 => 
            array (
                'PokemonHabitatID' => 1662,
                'PokemonID' => 826,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            162 => 
            array (
                'PokemonHabitatID' => 1663,
                'PokemonID' => 827,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            163 => 
            array (
                'PokemonHabitatID' => 1664,
                'PokemonID' => 827,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            164 => 
            array (
                'PokemonHabitatID' => 1665,
                'PokemonID' => 828,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            165 => 
            array (
                'PokemonHabitatID' => 1666,
                'PokemonID' => 828,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            166 => 
            array (
                'PokemonHabitatID' => 1667,
                'PokemonID' => 829,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            167 => 
            array (
                'PokemonHabitatID' => 1668,
                'PokemonID' => 829,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            168 => 
            array (
                'PokemonHabitatID' => 1669,
                'PokemonID' => 830,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            169 => 
            array (
                'PokemonHabitatID' => 1670,
                'PokemonID' => 830,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            170 => 
            array (
                'PokemonHabitatID' => 1671,
                'PokemonID' => 831,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            171 => 
            array (
                'PokemonHabitatID' => 1672,
                'PokemonID' => 831,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            172 => 
            array (
                'PokemonHabitatID' => 1673,
                'PokemonID' => 832,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            173 => 
            array (
                'PokemonHabitatID' => 1674,
                'PokemonID' => 832,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            174 => 
            array (
                'PokemonHabitatID' => 1675,
                'PokemonID' => 833,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            175 => 
            array (
                'PokemonHabitatID' => 1676,
                'PokemonID' => 833,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            176 => 
            array (
                'PokemonHabitatID' => 1677,
                'PokemonID' => 834,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            177 => 
            array (
                'PokemonHabitatID' => 1678,
                'PokemonID' => 834,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            178 => 
            array (
                'PokemonHabitatID' => 1679,
                'PokemonID' => 835,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            179 => 
            array (
                'PokemonHabitatID' => 1680,
                'PokemonID' => 835,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            180 => 
            array (
                'PokemonHabitatID' => 1681,
                'PokemonID' => 836,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            181 => 
            array (
                'PokemonHabitatID' => 1682,
                'PokemonID' => 836,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            182 => 
            array (
                'PokemonHabitatID' => 1683,
                'PokemonID' => 837,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            183 => 
            array (
                'PokemonHabitatID' => 1684,
                'PokemonID' => 837,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            184 => 
            array (
                'PokemonHabitatID' => 1685,
                'PokemonID' => 838,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            185 => 
            array (
                'PokemonHabitatID' => 1686,
                'PokemonID' => 838,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            186 => 
            array (
                'PokemonHabitatID' => 1687,
                'PokemonID' => 839,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            187 => 
            array (
                'PokemonHabitatID' => 1688,
                'PokemonID' => 839,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            188 => 
            array (
                'PokemonHabitatID' => 1689,
                'PokemonID' => 840,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            189 => 
            array (
                'PokemonHabitatID' => 1690,
                'PokemonID' => 840,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            190 => 
            array (
                'PokemonHabitatID' => 1691,
                'PokemonID' => 841,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            191 => 
            array (
                'PokemonHabitatID' => 1692,
                'PokemonID' => 841,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            192 => 
            array (
                'PokemonHabitatID' => 1693,
                'PokemonID' => 842,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            193 => 
            array (
                'PokemonHabitatID' => 1694,
                'PokemonID' => 842,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            194 => 
            array (
                'PokemonHabitatID' => 1695,
                'PokemonID' => 843,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            195 => 
            array (
                'PokemonHabitatID' => 1696,
                'PokemonID' => 843,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            196 => 
            array (
                'PokemonHabitatID' => 1697,
                'PokemonID' => 844,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            197 => 
            array (
                'PokemonHabitatID' => 1698,
                'PokemonID' => 844,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            198 => 
            array (
                'PokemonHabitatID' => 1699,
                'PokemonID' => 845,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            199 => 
            array (
                'PokemonHabitatID' => 1700,
                'PokemonID' => 845,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            200 => 
            array (
                'PokemonHabitatID' => 1701,
                'PokemonID' => 845,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            201 => 
            array (
                'PokemonHabitatID' => 1702,
                'PokemonID' => 846,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            202 => 
            array (
                'PokemonHabitatID' => 1703,
                'PokemonID' => 846,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            203 => 
            array (
                'PokemonHabitatID' => 1704,
                'PokemonID' => 846,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            204 => 
            array (
                'PokemonHabitatID' => 1705,
                'PokemonID' => 847,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            205 => 
            array (
                'PokemonHabitatID' => 1706,
                'PokemonID' => 847,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            206 => 
            array (
                'PokemonHabitatID' => 1707,
                'PokemonID' => 847,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            207 => 
            array (
                'PokemonHabitatID' => 1708,
                'PokemonID' => 848,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            208 => 
            array (
                'PokemonHabitatID' => 1709,
                'PokemonID' => 848,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            209 => 
            array (
                'PokemonHabitatID' => 1710,
                'PokemonID' => 849,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            210 => 
            array (
                'PokemonHabitatID' => 1711,
                'PokemonID' => 849,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            211 => 
            array (
                'PokemonHabitatID' => 1712,
                'PokemonID' => 850,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            212 => 
            array (
                'PokemonHabitatID' => 1713,
                'PokemonID' => 850,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            213 => 
            array (
                'PokemonHabitatID' => 1714,
                'PokemonID' => 851,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            214 => 
            array (
                'PokemonHabitatID' => 1715,
                'PokemonID' => 851,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            215 => 
            array (
                'PokemonHabitatID' => 1716,
                'PokemonID' => 852,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            216 => 
            array (
                'PokemonHabitatID' => 1717,
                'PokemonID' => 852,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            217 => 
            array (
                'PokemonHabitatID' => 1718,
                'PokemonID' => 853,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            218 => 
            array (
                'PokemonHabitatID' => 1719,
                'PokemonID' => 853,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            219 => 
            array (
                'PokemonHabitatID' => 1720,
                'PokemonID' => 854,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            220 => 
            array (
                'PokemonHabitatID' => 1721,
                'PokemonID' => 854,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            221 => 
            array (
                'PokemonHabitatID' => 1722,
                'PokemonID' => 855,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            222 => 
            array (
                'PokemonHabitatID' => 1723,
                'PokemonID' => 856,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            223 => 
            array (
                'PokemonHabitatID' => 1724,
                'PokemonID' => 857,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            224 => 
            array (
                'PokemonHabitatID' => 1725,
                'PokemonID' => 858,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            225 => 
            array (
                'PokemonHabitatID' => 1726,
                'PokemonID' => 858,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            226 => 
            array (
                'PokemonHabitatID' => 1727,
                'PokemonID' => 859,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            227 => 
            array (
                'PokemonHabitatID' => 1728,
                'PokemonID' => 859,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            228 => 
            array (
                'PokemonHabitatID' => 1729,
                'PokemonID' => 859,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            229 => 
            array (
                'PokemonHabitatID' => 1730,
                'PokemonID' => 860,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            230 => 
            array (
                'PokemonHabitatID' => 1731,
                'PokemonID' => 860,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            231 => 
            array (
                'PokemonHabitatID' => 1732,
                'PokemonID' => 860,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            232 => 
            array (
                'PokemonHabitatID' => 1733,
                'PokemonID' => 861,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            233 => 
            array (
                'PokemonHabitatID' => 1734,
                'PokemonID' => 861,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            234 => 
            array (
                'PokemonHabitatID' => 1735,
                'PokemonID' => 861,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            235 => 
            array (
                'PokemonHabitatID' => 1736,
                'PokemonID' => 862,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            236 => 
            array (
                'PokemonHabitatID' => 1737,
                'PokemonID' => 862,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            237 => 
            array (
                'PokemonHabitatID' => 1738,
                'PokemonID' => 863,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            238 => 
            array (
                'PokemonHabitatID' => 1739,
                'PokemonID' => 863,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            239 => 
            array (
                'PokemonHabitatID' => 1740,
                'PokemonID' => 864,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            240 => 
            array (
                'PokemonHabitatID' => 1741,
                'PokemonID' => 864,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            241 => 
            array (
                'PokemonHabitatID' => 1742,
                'PokemonID' => 865,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            242 => 
            array (
                'PokemonHabitatID' => 1743,
                'PokemonID' => 866,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            243 => 
            array (
                'PokemonHabitatID' => 1744,
                'PokemonID' => 867,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            244 => 
            array (
                'PokemonHabitatID' => 1745,
                'PokemonID' => 868,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            245 => 
            array (
                'PokemonHabitatID' => 1746,
                'PokemonID' => 868,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            246 => 
            array (
                'PokemonHabitatID' => 1747,
                'PokemonID' => 869,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            247 => 
            array (
                'PokemonHabitatID' => 1748,
                'PokemonID' => 869,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            248 => 
            array (
                'PokemonHabitatID' => 1749,
                'PokemonID' => 870,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            249 => 
            array (
                'PokemonHabitatID' => 1750,
                'PokemonID' => 870,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            250 => 
            array (
                'PokemonHabitatID' => 1751,
                'PokemonID' => 871,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            251 => 
            array (
                'PokemonHabitatID' => 1752,
                'PokemonID' => 871,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            252 => 
            array (
                'PokemonHabitatID' => 1753,
                'PokemonID' => 871,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            253 => 
            array (
                'PokemonHabitatID' => 1754,
                'PokemonID' => 872,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            254 => 
            array (
                'PokemonHabitatID' => 1755,
                'PokemonID' => 872,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            255 => 
            array (
                'PokemonHabitatID' => 1756,
                'PokemonID' => 872,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            256 => 
            array (
                'PokemonHabitatID' => 1757,
                'PokemonID' => 873,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            257 => 
            array (
                'PokemonHabitatID' => 1758,
                'PokemonID' => 873,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            258 => 
            array (
                'PokemonHabitatID' => 1759,
                'PokemonID' => 873,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            259 => 
            array (
                'PokemonHabitatID' => 1760,
                'PokemonID' => 874,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            260 => 
            array (
                'PokemonHabitatID' => 1761,
                'PokemonID' => 874,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            261 => 
            array (
                'PokemonHabitatID' => 1762,
                'PokemonID' => 874,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            262 => 
            array (
                'PokemonHabitatID' => 1763,
                'PokemonID' => 875,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            263 => 
            array (
                'PokemonHabitatID' => 1764,
                'PokemonID' => 875,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            264 => 
            array (
                'PokemonHabitatID' => 1765,
                'PokemonID' => 875,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            265 => 
            array (
                'PokemonHabitatID' => 1766,
                'PokemonID' => 875,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            266 => 
            array (
                'PokemonHabitatID' => 1767,
                'PokemonID' => 876,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            267 => 
            array (
                'PokemonHabitatID' => 1768,
                'PokemonID' => 876,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            268 => 
            array (
                'PokemonHabitatID' => 1769,
                'PokemonID' => 876,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            269 => 
            array (
                'PokemonHabitatID' => 1770,
                'PokemonID' => 876,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            270 => 
            array (
                'PokemonHabitatID' => 1771,
                'PokemonID' => 877,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            271 => 
            array (
                'PokemonHabitatID' => 1772,
                'PokemonID' => 877,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            272 => 
            array (
                'PokemonHabitatID' => 1773,
                'PokemonID' => 877,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            273 => 
            array (
                'PokemonHabitatID' => 1774,
                'PokemonID' => 877,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            274 => 
            array (
                'PokemonHabitatID' => 1775,
                'PokemonID' => 878,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            275 => 
            array (
                'PokemonHabitatID' => 1776,
                'PokemonID' => 878,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            276 => 
            array (
                'PokemonHabitatID' => 1777,
                'PokemonID' => 878,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            277 => 
            array (
                'PokemonHabitatID' => 1778,
                'PokemonID' => 878,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            278 => 
            array (
                'PokemonHabitatID' => 1779,
                'PokemonID' => 879,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            279 => 
            array (
                'PokemonHabitatID' => 1780,
                'PokemonID' => 880,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            280 => 
            array (
                'PokemonHabitatID' => 1781,
                'PokemonID' => 881,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            281 => 
            array (
                'PokemonHabitatID' => 1782,
                'PokemonID' => 882,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            282 => 
            array (
                'PokemonHabitatID' => 1783,
                'PokemonID' => 883,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            283 => 
            array (
                'PokemonHabitatID' => 1784,
                'PokemonID' => 884,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            284 => 
            array (
                'PokemonHabitatID' => 1785,
                'PokemonID' => 884,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            285 => 
            array (
                'PokemonHabitatID' => 1786,
                'PokemonID' => 885,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            286 => 
            array (
                'PokemonHabitatID' => 1787,
                'PokemonID' => 885,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            287 => 
            array (
                'PokemonHabitatID' => 1788,
                'PokemonID' => 886,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            288 => 
            array (
                'PokemonHabitatID' => 1789,
                'PokemonID' => 886,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            289 => 
            array (
                'PokemonHabitatID' => 1790,
                'PokemonID' => 887,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            290 => 
            array (
                'PokemonHabitatID' => 1791,
                'PokemonID' => 887,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            291 => 
            array (
                'PokemonHabitatID' => 1792,
                'PokemonID' => 888,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            292 => 
            array (
                'PokemonHabitatID' => 1793,
                'PokemonID' => 888,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            293 => 
            array (
                'PokemonHabitatID' => 1794,
                'PokemonID' => 889,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            294 => 
            array (
                'PokemonHabitatID' => 1795,
                'PokemonID' => 889,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            295 => 
            array (
                'PokemonHabitatID' => 1796,
                'PokemonID' => 890,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            296 => 
            array (
                'PokemonHabitatID' => 1797,
                'PokemonID' => 890,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            297 => 
            array (
                'PokemonHabitatID' => 1798,
                'PokemonID' => 891,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            298 => 
            array (
                'PokemonHabitatID' => 1799,
                'PokemonID' => 891,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            299 => 
            array (
                'PokemonHabitatID' => 1800,
                'PokemonID' => 891,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            300 => 
            array (
                'PokemonHabitatID' => 1801,
                'PokemonID' => 892,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            301 => 
            array (
                'PokemonHabitatID' => 1802,
                'PokemonID' => 892,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            302 => 
            array (
                'PokemonHabitatID' => 1803,
                'PokemonID' => 892,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            303 => 
            array (
                'PokemonHabitatID' => 1804,
                'PokemonID' => 893,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            304 => 
            array (
                'PokemonHabitatID' => 1805,
                'PokemonID' => 893,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            305 => 
            array (
                'PokemonHabitatID' => 1806,
                'PokemonID' => 894,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            306 => 
            array (
                'PokemonHabitatID' => 1807,
                'PokemonID' => 894,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            307 => 
            array (
                'PokemonHabitatID' => 1808,
                'PokemonID' => 895,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            308 => 
            array (
                'PokemonHabitatID' => 1809,
                'PokemonID' => 895,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            309 => 
            array (
                'PokemonHabitatID' => 1810,
                'PokemonID' => 896,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            310 => 
            array (
                'PokemonHabitatID' => 1811,
                'PokemonID' => 896,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            311 => 
            array (
                'PokemonHabitatID' => 1812,
                'PokemonID' => 897,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            312 => 
            array (
                'PokemonHabitatID' => 1813,
                'PokemonID' => 897,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            313 => 
            array (
                'PokemonHabitatID' => 1814,
                'PokemonID' => 897,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            314 => 
            array (
                'PokemonHabitatID' => 1815,
                'PokemonID' => 898,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            315 => 
            array (
                'PokemonHabitatID' => 1816,
                'PokemonID' => 898,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            316 => 
            array (
                'PokemonHabitatID' => 1817,
                'PokemonID' => 898,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            317 => 
            array (
                'PokemonHabitatID' => 1818,
                'PokemonID' => 899,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            318 => 
            array (
                'PokemonHabitatID' => 1819,
                'PokemonID' => 899,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            319 => 
            array (
                'PokemonHabitatID' => 1820,
                'PokemonID' => 900,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            320 => 
            array (
                'PokemonHabitatID' => 1821,
                'PokemonID' => 900,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            321 => 
            array (
                'PokemonHabitatID' => 1822,
                'PokemonID' => 901,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            322 => 
            array (
                'PokemonHabitatID' => 1823,
                'PokemonID' => 901,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            323 => 
            array (
                'PokemonHabitatID' => 1824,
                'PokemonID' => 902,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            324 => 
            array (
                'PokemonHabitatID' => 1825,
                'PokemonID' => 902,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            325 => 
            array (
                'PokemonHabitatID' => 1826,
                'PokemonID' => 903,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            326 => 
            array (
                'PokemonHabitatID' => 1827,
                'PokemonID' => 903,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            327 => 
            array (
                'PokemonHabitatID' => 1828,
                'PokemonID' => 903,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            328 => 
            array (
                'PokemonHabitatID' => 1829,
                'PokemonID' => 904,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            329 => 
            array (
                'PokemonHabitatID' => 1830,
                'PokemonID' => 904,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            330 => 
            array (
                'PokemonHabitatID' => 1831,
                'PokemonID' => 904,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            331 => 
            array (
                'PokemonHabitatID' => 1832,
                'PokemonID' => 905,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            332 => 
            array (
                'PokemonHabitatID' => 1833,
                'PokemonID' => 905,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            333 => 
            array (
                'PokemonHabitatID' => 1834,
                'PokemonID' => 906,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            334 => 
            array (
                'PokemonHabitatID' => 1835,
                'PokemonID' => 906,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            335 => 
            array (
                'PokemonHabitatID' => 1836,
                'PokemonID' => 907,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            336 => 
            array (
                'PokemonHabitatID' => 1837,
                'PokemonID' => 907,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            337 => 
            array (
                'PokemonHabitatID' => 1838,
                'PokemonID' => 908,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            338 => 
            array (
                'PokemonHabitatID' => 1839,
                'PokemonID' => 908,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            339 => 
            array (
                'PokemonHabitatID' => 1840,
                'PokemonID' => 908,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            340 => 
            array (
                'PokemonHabitatID' => 1841,
                'PokemonID' => 909,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            341 => 
            array (
                'PokemonHabitatID' => 1842,
                'PokemonID' => 909,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            342 => 
            array (
                'PokemonHabitatID' => 1843,
                'PokemonID' => 909,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            343 => 
            array (
                'PokemonHabitatID' => 1844,
                'PokemonID' => 910,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            344 => 
            array (
                'PokemonHabitatID' => 1845,
                'PokemonID' => 910,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            345 => 
            array (
                'PokemonHabitatID' => 1846,
                'PokemonID' => 910,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            346 => 
            array (
                'PokemonHabitatID' => 1847,
                'PokemonID' => 911,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            347 => 
            array (
                'PokemonHabitatID' => 1848,
                'PokemonID' => 912,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            348 => 
            array (
                'PokemonHabitatID' => 1849,
                'PokemonID' => 913,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            349 => 
            array (
                'PokemonHabitatID' => 1850,
                'PokemonID' => 913,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            350 => 
            array (
                'PokemonHabitatID' => 1851,
                'PokemonID' => 913,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            351 => 
            array (
                'PokemonHabitatID' => 1852,
                'PokemonID' => 914,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            352 => 
            array (
                'PokemonHabitatID' => 1853,
                'PokemonID' => 914,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            353 => 
            array (
                'PokemonHabitatID' => 1854,
                'PokemonID' => 914,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            354 => 
            array (
                'PokemonHabitatID' => 1855,
                'PokemonID' => 915,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            355 => 
            array (
                'PokemonHabitatID' => 1856,
                'PokemonID' => 915,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            356 => 
            array (
                'PokemonHabitatID' => 1857,
                'PokemonID' => 915,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            357 => 
            array (
                'PokemonHabitatID' => 1858,
                'PokemonID' => 916,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            358 => 
            array (
                'PokemonHabitatID' => 1859,
                'PokemonID' => 916,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            359 => 
            array (
                'PokemonHabitatID' => 1860,
                'PokemonID' => 916,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            360 => 
            array (
                'PokemonHabitatID' => 1861,
                'PokemonID' => 917,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            361 => 
            array (
                'PokemonHabitatID' => 1862,
                'PokemonID' => 917,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            362 => 
            array (
                'PokemonHabitatID' => 1863,
                'PokemonID' => 918,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            363 => 
            array (
                'PokemonHabitatID' => 1864,
                'PokemonID' => 918,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            364 => 
            array (
                'PokemonHabitatID' => 1865,
                'PokemonID' => 919,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            365 => 
            array (
                'PokemonHabitatID' => 1866,
                'PokemonID' => 920,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            366 => 
            array (
                'PokemonHabitatID' => 1867,
                'PokemonID' => 921,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            367 => 
            array (
                'PokemonHabitatID' => 1868,
                'PokemonID' => 921,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            368 => 
            array (
                'PokemonHabitatID' => 1869,
                'PokemonID' => 921,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            369 => 
            array (
                'PokemonHabitatID' => 1870,
                'PokemonID' => 922,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            370 => 
            array (
                'PokemonHabitatID' => 1871,
                'PokemonID' => 922,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            371 => 
            array (
                'PokemonHabitatID' => 1872,
                'PokemonID' => 922,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            372 => 
            array (
                'PokemonHabitatID' => 1873,
                'PokemonID' => 923,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            373 => 
            array (
                'PokemonHabitatID' => 1874,
                'PokemonID' => 923,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            374 => 
            array (
                'PokemonHabitatID' => 1875,
                'PokemonID' => 924,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            375 => 
            array (
                'PokemonHabitatID' => 1876,
                'PokemonID' => 924,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            376 => 
            array (
                'PokemonHabitatID' => 1877,
                'PokemonID' => 925,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            377 => 
            array (
                'PokemonHabitatID' => 1878,
                'PokemonID' => 925,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            378 => 
            array (
                'PokemonHabitatID' => 1879,
                'PokemonID' => 926,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            379 => 
            array (
                'PokemonHabitatID' => 1880,
                'PokemonID' => 926,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            380 => 
            array (
                'PokemonHabitatID' => 1881,
                'PokemonID' => 927,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            381 => 
            array (
                'PokemonHabitatID' => 1882,
                'PokemonID' => 927,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            382 => 
            array (
                'PokemonHabitatID' => 1883,
                'PokemonID' => 928,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            383 => 
            array (
                'PokemonHabitatID' => 1884,
                'PokemonID' => 928,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            384 => 
            array (
                'PokemonHabitatID' => 1885,
                'PokemonID' => 929,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            385 => 
            array (
                'PokemonHabitatID' => 1886,
                'PokemonID' => 929,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            386 => 
            array (
                'PokemonHabitatID' => 1887,
                'PokemonID' => 930,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            387 => 
            array (
                'PokemonHabitatID' => 1888,
                'PokemonID' => 930,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            388 => 
            array (
                'PokemonHabitatID' => 1889,
                'PokemonID' => 931,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            389 => 
            array (
                'PokemonHabitatID' => 1890,
                'PokemonID' => 932,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            390 => 
            array (
                'PokemonHabitatID' => 1891,
                'PokemonID' => 933,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            391 => 
            array (
                'PokemonHabitatID' => 1892,
                'PokemonID' => 933,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            392 => 
            array (
                'PokemonHabitatID' => 1893,
                'PokemonID' => 934,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            393 => 
            array (
                'PokemonHabitatID' => 1894,
                'PokemonID' => 934,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            394 => 
            array (
                'PokemonHabitatID' => 1895,
                'PokemonID' => 935,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            395 => 
            array (
                'PokemonHabitatID' => 1896,
                'PokemonID' => 935,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            396 => 
            array (
                'PokemonHabitatID' => 1897,
                'PokemonID' => 935,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            397 => 
            array (
                'PokemonHabitatID' => 1898,
                'PokemonID' => 935,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            398 => 
            array (
                'PokemonHabitatID' => 1899,
                'PokemonID' => 936,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            399 => 
            array (
                'PokemonHabitatID' => 1900,
                'PokemonID' => 936,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            400 => 
            array (
                'PokemonHabitatID' => 1901,
                'PokemonID' => 936,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            401 => 
            array (
                'PokemonHabitatID' => 1902,
                'PokemonID' => 936,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            402 => 
            array (
                'PokemonHabitatID' => 1903,
                'PokemonID' => 937,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            403 => 
            array (
                'PokemonHabitatID' => 1904,
                'PokemonID' => 937,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            404 => 
            array (
                'PokemonHabitatID' => 1905,
                'PokemonID' => 937,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            405 => 
            array (
                'PokemonHabitatID' => 1906,
                'PokemonID' => 938,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            406 => 
            array (
                'PokemonHabitatID' => 1907,
                'PokemonID' => 938,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            407 => 
            array (
                'PokemonHabitatID' => 1908,
                'PokemonID' => 938,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            408 => 
            array (
                'PokemonHabitatID' => 1909,
                'PokemonID' => 939,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            409 => 
            array (
                'PokemonHabitatID' => 1910,
                'PokemonID' => 939,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            410 => 
            array (
                'PokemonHabitatID' => 1911,
                'PokemonID' => 939,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            411 => 
            array (
                'PokemonHabitatID' => 1912,
                'PokemonID' => 940,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            412 => 
            array (
                'PokemonHabitatID' => 1913,
                'PokemonID' => 940,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            413 => 
            array (
                'PokemonHabitatID' => 1914,
                'PokemonID' => 940,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            414 => 
            array (
                'PokemonHabitatID' => 1915,
                'PokemonID' => 941,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            415 => 
            array (
                'PokemonHabitatID' => 1916,
                'PokemonID' => 941,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            416 => 
            array (
                'PokemonHabitatID' => 1917,
                'PokemonID' => 941,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            417 => 
            array (
                'PokemonHabitatID' => 1918,
                'PokemonID' => 942,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            418 => 
            array (
                'PokemonHabitatID' => 1919,
                'PokemonID' => 942,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            419 => 
            array (
                'PokemonHabitatID' => 1920,
                'PokemonID' => 942,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            420 => 
            array (
                'PokemonHabitatID' => 1921,
                'PokemonID' => 943,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            421 => 
            array (
                'PokemonHabitatID' => 1922,
                'PokemonID' => 943,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            422 => 
            array (
                'PokemonHabitatID' => 1923,
                'PokemonID' => 943,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            423 => 
            array (
                'PokemonHabitatID' => 1924,
                'PokemonID' => 944,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            424 => 
            array (
                'PokemonHabitatID' => 1925,
                'PokemonID' => 945,
                'HabitatID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            425 => 
            array (
                'PokemonHabitatID' => 1926,
                'PokemonID' => 946,
                'HabitatID' => 30,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            426 => 
            array (
                'PokemonHabitatID' => 1927,
                'PokemonID' => 947,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            427 => 
            array (
                'PokemonHabitatID' => 1928,
                'PokemonID' => 947,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            428 => 
            array (
                'PokemonHabitatID' => 1929,
                'PokemonID' => 948,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            429 => 
            array (
                'PokemonHabitatID' => 1930,
                'PokemonID' => 948,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            430 => 
            array (
                'PokemonHabitatID' => 1931,
                'PokemonID' => 949,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            431 => 
            array (
                'PokemonHabitatID' => 1932,
                'PokemonID' => 949,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            432 => 
            array (
                'PokemonHabitatID' => 1933,
                'PokemonID' => 950,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            433 => 
            array (
                'PokemonHabitatID' => 1934,
                'PokemonID' => 950,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            434 => 
            array (
                'PokemonHabitatID' => 1935,
                'PokemonID' => 951,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            435 => 
            array (
                'PokemonHabitatID' => 1936,
                'PokemonID' => 951,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            436 => 
            array (
                'PokemonHabitatID' => 1937,
                'PokemonID' => 952,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            437 => 
            array (
                'PokemonHabitatID' => 1938,
                'PokemonID' => 952,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            438 => 
            array (
                'PokemonHabitatID' => 1939,
                'PokemonID' => 952,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            439 => 
            array (
                'PokemonHabitatID' => 1940,
                'PokemonID' => 953,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            440 => 
            array (
                'PokemonHabitatID' => 1941,
                'PokemonID' => 953,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            441 => 
            array (
                'PokemonHabitatID' => 1942,
                'PokemonID' => 954,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            442 => 
            array (
                'PokemonHabitatID' => 1943,
                'PokemonID' => 954,
                'HabitatID' => 10,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            443 => 
            array (
                'PokemonHabitatID' => 1944,
                'PokemonID' => 955,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            444 => 
            array (
                'PokemonHabitatID' => 1945,
                'PokemonID' => 955,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            445 => 
            array (
                'PokemonHabitatID' => 1946,
                'PokemonID' => 956,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            446 => 
            array (
                'PokemonHabitatID' => 1947,
                'PokemonID' => 956,
                'HabitatID' => 29,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            447 => 
            array (
                'PokemonHabitatID' => 1948,
                'PokemonID' => 957,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            448 => 
            array (
                'PokemonHabitatID' => 1949,
                'PokemonID' => 958,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            449 => 
            array (
                'PokemonHabitatID' => 1950,
                'PokemonID' => 959,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            450 => 
            array (
                'PokemonHabitatID' => 1951,
                'PokemonID' => 960,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            451 => 
            array (
                'PokemonHabitatID' => 1952,
                'PokemonID' => 960,
                'HabitatID' => 26,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            452 => 
            array (
                'PokemonHabitatID' => 1953,
                'PokemonID' => 961,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            453 => 
            array (
                'PokemonHabitatID' => 1954,
                'PokemonID' => 961,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            454 => 
            array (
                'PokemonHabitatID' => 1955,
                'PokemonID' => 962,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            455 => 
            array (
                'PokemonHabitatID' => 1956,
                'PokemonID' => 962,
                'HabitatID' => 31,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            456 => 
            array (
                'PokemonHabitatID' => 1957,
                'PokemonID' => 963,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            457 => 
            array (
                'PokemonHabitatID' => 1958,
                'PokemonID' => 963,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            458 => 
            array (
                'PokemonHabitatID' => 1959,
                'PokemonID' => 963,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            459 => 
            array (
                'PokemonHabitatID' => 1960,
                'PokemonID' => 963,
                'HabitatID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            460 => 
            array (
                'PokemonHabitatID' => 1961,
                'PokemonID' => 964,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            461 => 
            array (
                'PokemonHabitatID' => 1962,
                'PokemonID' => 964,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            462 => 
            array (
                'PokemonHabitatID' => 1963,
                'PokemonID' => 964,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            463 => 
            array (
                'PokemonHabitatID' => 1964,
                'PokemonID' => 964,
                'HabitatID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            464 => 
            array (
                'PokemonHabitatID' => 1965,
                'PokemonID' => 965,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            465 => 
            array (
                'PokemonHabitatID' => 1966,
                'PokemonID' => 965,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            466 => 
            array (
                'PokemonHabitatID' => 1967,
                'PokemonID' => 965,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            467 => 
            array (
                'PokemonHabitatID' => 1968,
                'PokemonID' => 966,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            468 => 
            array (
                'PokemonHabitatID' => 1969,
                'PokemonID' => 966,
                'HabitatID' => 38,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            469 => 
            array (
                'PokemonHabitatID' => 1970,
                'PokemonID' => 967,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            470 => 
            array (
                'PokemonHabitatID' => 1971,
                'PokemonID' => 967,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            471 => 
            array (
                'PokemonHabitatID' => 1972,
                'PokemonID' => 967,
                'HabitatID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            472 => 
            array (
                'PokemonHabitatID' => 1973,
                'PokemonID' => 968,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            473 => 
            array (
                'PokemonHabitatID' => 1974,
                'PokemonID' => 968,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            474 => 
            array (
                'PokemonHabitatID' => 1975,
                'PokemonID' => 969,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            475 => 
            array (
                'PokemonHabitatID' => 1976,
                'PokemonID' => 969,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            476 => 
            array (
                'PokemonHabitatID' => 1977,
                'PokemonID' => 970,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            477 => 
            array (
                'PokemonHabitatID' => 1978,
                'PokemonID' => 970,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            478 => 
            array (
                'PokemonHabitatID' => 1979,
                'PokemonID' => 971,
                'HabitatID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            479 => 
            array (
                'PokemonHabitatID' => 1980,
                'PokemonID' => 972,
                'HabitatID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            480 => 
            array (
                'PokemonHabitatID' => 1981,
                'PokemonID' => 973,
                'HabitatID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            481 => 
            array (
                'PokemonHabitatID' => 1982,
                'PokemonID' => 974,
                'HabitatID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            482 => 
            array (
                'PokemonHabitatID' => 1983,
                'PokemonID' => 975,
                'HabitatID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            483 => 
            array (
                'PokemonHabitatID' => 1984,
                'PokemonID' => 976,
                'HabitatID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            484 => 
            array (
                'PokemonHabitatID' => 1985,
                'PokemonID' => 977,
                'HabitatID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            485 => 
            array (
                'PokemonHabitatID' => 1986,
                'PokemonID' => 978,
                'HabitatID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            486 => 
            array (
                'PokemonHabitatID' => 1987,
                'PokemonID' => 979,
                'HabitatID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            487 => 
            array (
                'PokemonHabitatID' => 1988,
                'PokemonID' => 980,
                'HabitatID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            488 => 
            array (
                'PokemonHabitatID' => 1989,
                'PokemonID' => 981,
                'HabitatID' => 39,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            489 => 
            array (
                'PokemonHabitatID' => 1990,
                'PokemonID' => 982,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            490 => 
            array (
                'PokemonHabitatID' => 1991,
                'PokemonID' => 983,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            491 => 
            array (
                'PokemonHabitatID' => 1992,
                'PokemonID' => 984,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            492 => 
            array (
                'PokemonHabitatID' => 1993,
                'PokemonID' => 984,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            493 => 
            array (
                'PokemonHabitatID' => 1994,
                'PokemonID' => 985,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            494 => 
            array (
                'PokemonHabitatID' => 1995,
                'PokemonID' => 985,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            495 => 
            array (
                'PokemonHabitatID' => 1996,
                'PokemonID' => 986,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            496 => 
            array (
                'PokemonHabitatID' => 1997,
                'PokemonID' => 986,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            497 => 
            array (
                'PokemonHabitatID' => 1998,
                'PokemonID' => 987,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            498 => 
            array (
                'PokemonHabitatID' => 1999,
                'PokemonID' => 987,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            499 => 
            array (
                'PokemonHabitatID' => 2000,
                'PokemonID' => 988,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
        ));
        \DB::table('PokemonHabitat')->insert(array (
            0 => 
            array (
                'PokemonHabitatID' => 2001,
                'PokemonID' => 988,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            1 => 
            array (
                'PokemonHabitatID' => 2002,
                'PokemonID' => 989,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            2 => 
            array (
                'PokemonHabitatID' => 2003,
                'PokemonID' => 989,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            3 => 
            array (
                'PokemonHabitatID' => 2004,
                'PokemonID' => 990,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            4 => 
            array (
                'PokemonHabitatID' => 2005,
                'PokemonID' => 990,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            5 => 
            array (
                'PokemonHabitatID' => 2006,
                'PokemonID' => 991,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            6 => 
            array (
                'PokemonHabitatID' => 2007,
                'PokemonID' => 991,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            7 => 
            array (
                'PokemonHabitatID' => 2008,
                'PokemonID' => 992,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            8 => 
            array (
                'PokemonHabitatID' => 2009,
                'PokemonID' => 992,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            9 => 
            array (
                'PokemonHabitatID' => 2010,
                'PokemonID' => 993,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            10 => 
            array (
                'PokemonHabitatID' => 2011,
                'PokemonID' => 993,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            11 => 
            array (
                'PokemonHabitatID' => 2012,
                'PokemonID' => 994,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            12 => 
            array (
                'PokemonHabitatID' => 2013,
                'PokemonID' => 994,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            13 => 
            array (
                'PokemonHabitatID' => 2014,
                'PokemonID' => 995,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            14 => 
            array (
                'PokemonHabitatID' => 2015,
                'PokemonID' => 995,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            15 => 
            array (
                'PokemonHabitatID' => 2016,
                'PokemonID' => 995,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            16 => 
            array (
                'PokemonHabitatID' => 2017,
                'PokemonID' => 995,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            17 => 
            array (
                'PokemonHabitatID' => 2018,
                'PokemonID' => 996,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            18 => 
            array (
                'PokemonHabitatID' => 2019,
                'PokemonID' => 996,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            19 => 
            array (
                'PokemonHabitatID' => 2020,
                'PokemonID' => 996,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            20 => 
            array (
                'PokemonHabitatID' => 2021,
                'PokemonID' => 996,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            21 => 
            array (
                'PokemonHabitatID' => 2022,
                'PokemonID' => 997,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            22 => 
            array (
                'PokemonHabitatID' => 2023,
                'PokemonID' => 997,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            23 => 
            array (
                'PokemonHabitatID' => 2024,
                'PokemonID' => 997,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            24 => 
            array (
                'PokemonHabitatID' => 2025,
                'PokemonID' => 997,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            25 => 
            array (
                'PokemonHabitatID' => 2026,
                'PokemonID' => 998,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            26 => 
            array (
                'PokemonHabitatID' => 2027,
                'PokemonID' => 998,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            27 => 
            array (
                'PokemonHabitatID' => 2028,
                'PokemonID' => 998,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            28 => 
            array (
                'PokemonHabitatID' => 2029,
                'PokemonID' => 998,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            29 => 
            array (
                'PokemonHabitatID' => 2030,
                'PokemonID' => 999,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            30 => 
            array (
                'PokemonHabitatID' => 2031,
                'PokemonID' => 1000,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            31 => 
            array (
                'PokemonHabitatID' => 2032,
                'PokemonID' => 1001,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            32 => 
            array (
                'PokemonHabitatID' => 2033,
                'PokemonID' => 1002,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            33 => 
            array (
                'PokemonHabitatID' => 2034,
                'PokemonID' => 1003,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            34 => 
            array (
                'PokemonHabitatID' => 2035,
                'PokemonID' => 1004,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            35 => 
            array (
                'PokemonHabitatID' => 2036,
                'PokemonID' => 1005,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            36 => 
            array (
                'PokemonHabitatID' => 2037,
                'PokemonID' => 1006,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            37 => 
            array (
                'PokemonHabitatID' => 2038,
                'PokemonID' => 1007,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            38 => 
            array (
                'PokemonHabitatID' => 2039,
                'PokemonID' => 1007,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            39 => 
            array (
                'PokemonHabitatID' => 2040,
                'PokemonID' => 1007,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            40 => 
            array (
                'PokemonHabitatID' => 2041,
                'PokemonID' => 1007,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            41 => 
            array (
                'PokemonHabitatID' => 2042,
                'PokemonID' => 1008,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            42 => 
            array (
                'PokemonHabitatID' => 2043,
                'PokemonID' => 1008,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            43 => 
            array (
                'PokemonHabitatID' => 2044,
                'PokemonID' => 1008,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            44 => 
            array (
                'PokemonHabitatID' => 2045,
                'PokemonID' => 1008,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            45 => 
            array (
                'PokemonHabitatID' => 2046,
                'PokemonID' => 1009,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            46 => 
            array (
                'PokemonHabitatID' => 2047,
                'PokemonID' => 1009,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            47 => 
            array (
                'PokemonHabitatID' => 2048,
                'PokemonID' => 1009,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            48 => 
            array (
                'PokemonHabitatID' => 2049,
                'PokemonID' => 1009,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            49 => 
            array (
                'PokemonHabitatID' => 2050,
                'PokemonID' => 1010,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            50 => 
            array (
                'PokemonHabitatID' => 2051,
                'PokemonID' => 1010,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            51 => 
            array (
                'PokemonHabitatID' => 2052,
                'PokemonID' => 1010,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            52 => 
            array (
                'PokemonHabitatID' => 2053,
                'PokemonID' => 1010,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            53 => 
            array (
                'PokemonHabitatID' => 2054,
                'PokemonID' => 1011,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            54 => 
            array (
                'PokemonHabitatID' => 2055,
                'PokemonID' => 1011,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            55 => 
            array (
                'PokemonHabitatID' => 2056,
                'PokemonID' => 1012,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            56 => 
            array (
                'PokemonHabitatID' => 2057,
                'PokemonID' => 1012,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            57 => 
            array (
                'PokemonHabitatID' => 2058,
                'PokemonID' => 1013,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            58 => 
            array (
                'PokemonHabitatID' => 2059,
                'PokemonID' => 1013,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            59 => 
            array (
                'PokemonHabitatID' => 2060,
                'PokemonID' => 1014,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            60 => 
            array (
                'PokemonHabitatID' => 2061,
                'PokemonID' => 1014,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            61 => 
            array (
                'PokemonHabitatID' => 2062,
                'PokemonID' => 1015,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            62 => 
            array (
                'PokemonHabitatID' => 2063,
                'PokemonID' => 1015,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            63 => 
            array (
                'PokemonHabitatID' => 2064,
                'PokemonID' => 1016,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            64 => 
            array (
                'PokemonHabitatID' => 2065,
                'PokemonID' => 1016,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            65 => 
            array (
                'PokemonHabitatID' => 2066,
                'PokemonID' => 1016,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            66 => 
            array (
                'PokemonHabitatID' => 2067,
                'PokemonID' => 1017,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            67 => 
            array (
                'PokemonHabitatID' => 2068,
                'PokemonID' => 1017,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            68 => 
            array (
                'PokemonHabitatID' => 2069,
                'PokemonID' => 1018,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            69 => 
            array (
                'PokemonHabitatID' => 2070,
                'PokemonID' => 1018,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            70 => 
            array (
                'PokemonHabitatID' => 2071,
                'PokemonID' => 1019,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            71 => 
            array (
                'PokemonHabitatID' => 2072,
                'PokemonID' => 1019,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            72 => 
            array (
                'PokemonHabitatID' => 2073,
                'PokemonID' => 1020,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            73 => 
            array (
                'PokemonHabitatID' => 2074,
                'PokemonID' => 1020,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            74 => 
            array (
                'PokemonHabitatID' => 2075,
                'PokemonID' => 1021,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            75 => 
            array (
                'PokemonHabitatID' => 2076,
                'PokemonID' => 1021,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            76 => 
            array (
                'PokemonHabitatID' => 2077,
                'PokemonID' => 1022,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            77 => 
            array (
                'PokemonHabitatID' => 2078,
                'PokemonID' => 1023,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            78 => 
            array (
                'PokemonHabitatID' => 2079,
                'PokemonID' => 1023,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            79 => 
            array (
                'PokemonHabitatID' => 2080,
                'PokemonID' => 1024,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            80 => 
            array (
                'PokemonHabitatID' => 2081,
                'PokemonID' => 1025,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            81 => 
            array (
                'PokemonHabitatID' => 2082,
                'PokemonID' => 1026,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            82 => 
            array (
                'PokemonHabitatID' => 2083,
                'PokemonID' => 1026,
                'HabitatID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            83 => 
            array (
                'PokemonHabitatID' => 2084,
                'PokemonID' => 1027,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            84 => 
            array (
                'PokemonHabitatID' => 2085,
                'PokemonID' => 1027,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            85 => 
            array (
                'PokemonHabitatID' => 2086,
                'PokemonID' => 1027,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            86 => 
            array (
                'PokemonHabitatID' => 2087,
                'PokemonID' => 1028,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            87 => 
            array (
                'PokemonHabitatID' => 2088,
                'PokemonID' => 1028,
                'HabitatID' => 21,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            88 => 
            array (
                'PokemonHabitatID' => 2089,
                'PokemonID' => 1029,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            89 => 
            array (
                'PokemonHabitatID' => 2090,
                'PokemonID' => 1030,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            90 => 
            array (
                'PokemonHabitatID' => 2091,
                'PokemonID' => 1030,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            91 => 
            array (
                'PokemonHabitatID' => 2092,
                'PokemonID' => 1031,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            92 => 
            array (
                'PokemonHabitatID' => 2093,
                'PokemonID' => 1031,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            93 => 
            array (
                'PokemonHabitatID' => 2094,
                'PokemonID' => 1032,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            94 => 
            array (
                'PokemonHabitatID' => 2095,
                'PokemonID' => 1033,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            95 => 
            array (
                'PokemonHabitatID' => 2096,
                'PokemonID' => 1034,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            96 => 
            array (
                'PokemonHabitatID' => 2097,
                'PokemonID' => 1035,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            97 => 
            array (
                'PokemonHabitatID' => 2098,
                'PokemonID' => 1036,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            98 => 
            array (
                'PokemonHabitatID' => 2099,
                'PokemonID' => 1037,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            99 => 
            array (
                'PokemonHabitatID' => 2100,
                'PokemonID' => 1038,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            100 => 
            array (
                'PokemonHabitatID' => 2101,
                'PokemonID' => 1039,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            101 => 
            array (
                'PokemonHabitatID' => 2102,
                'PokemonID' => 1039,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            102 => 
            array (
                'PokemonHabitatID' => 2103,
                'PokemonID' => 1040,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            103 => 
            array (
                'PokemonHabitatID' => 2104,
                'PokemonID' => 1040,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            104 => 
            array (
                'PokemonHabitatID' => 2105,
                'PokemonID' => 1041,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            105 => 
            array (
                'PokemonHabitatID' => 2106,
                'PokemonID' => 1041,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            106 => 
            array (
                'PokemonHabitatID' => 2107,
                'PokemonID' => 1041,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            107 => 
            array (
                'PokemonHabitatID' => 2108,
                'PokemonID' => 1042,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            108 => 
            array (
                'PokemonHabitatID' => 2109,
                'PokemonID' => 1042,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            109 => 
            array (
                'PokemonHabitatID' => 2110,
                'PokemonID' => 1043,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            110 => 
            array (
                'PokemonHabitatID' => 2111,
                'PokemonID' => 1043,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            111 => 
            array (
                'PokemonHabitatID' => 2112,
                'PokemonID' => 1044,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            112 => 
            array (
                'PokemonHabitatID' => 2113,
                'PokemonID' => 1044,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            113 => 
            array (
                'PokemonHabitatID' => 2114,
                'PokemonID' => 1045,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            114 => 
            array (
                'PokemonHabitatID' => 2115,
                'PokemonID' => 1045,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            115 => 
            array (
                'PokemonHabitatID' => 2116,
                'PokemonID' => 1046,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            116 => 
            array (
                'PokemonHabitatID' => 2117,
                'PokemonID' => 1046,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            117 => 
            array (
                'PokemonHabitatID' => 2118,
                'PokemonID' => 1047,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            118 => 
            array (
                'PokemonHabitatID' => 2119,
                'PokemonID' => 1048,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            119 => 
            array (
                'PokemonHabitatID' => 2120,
                'PokemonID' => 1049,
                'HabitatID' => 22,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            120 => 
            array (
                'PokemonHabitatID' => 2121,
                'PokemonID' => 1050,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            121 => 
            array (
                'PokemonHabitatID' => 2122,
                'PokemonID' => 1050,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:22',
                'updated_at' => '2023-07-16 13:20:22',
            ),
            122 => 
            array (
                'PokemonHabitatID' => 2123,
                'PokemonID' => 1051,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            123 => 
            array (
                'PokemonHabitatID' => 2124,
                'PokemonID' => 1051,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            124 => 
            array (
                'PokemonHabitatID' => 2125,
                'PokemonID' => 1056,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            125 => 
            array (
                'PokemonHabitatID' => 2126,
                'PokemonID' => 1056,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            126 => 
            array (
                'PokemonHabitatID' => 2127,
                'PokemonID' => 1056,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            127 => 
            array (
                'PokemonHabitatID' => 2128,
                'PokemonID' => 1057,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            128 => 
            array (
                'PokemonHabitatID' => 2129,
                'PokemonID' => 1057,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            129 => 
            array (
                'PokemonHabitatID' => 2130,
                'PokemonID' => 1057,
                'HabitatID' => 24,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            130 => 
            array (
                'PokemonHabitatID' => 2131,
                'PokemonID' => 1058,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            131 => 
            array (
                'PokemonHabitatID' => 2132,
                'PokemonID' => 1058,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            132 => 
            array (
                'PokemonHabitatID' => 2133,
                'PokemonID' => 1059,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            133 => 
            array (
                'PokemonHabitatID' => 2134,
                'PokemonID' => 1059,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            134 => 
            array (
                'PokemonHabitatID' => 2135,
                'PokemonID' => 1060,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            135 => 
            array (
                'PokemonHabitatID' => 2136,
                'PokemonID' => 1060,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            136 => 
            array (
                'PokemonHabitatID' => 2137,
                'PokemonID' => 1061,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            137 => 
            array (
                'PokemonHabitatID' => 2138,
                'PokemonID' => 1061,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            138 => 
            array (
                'PokemonHabitatID' => 2139,
                'PokemonID' => 1062,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            139 => 
            array (
                'PokemonHabitatID' => 2140,
                'PokemonID' => 1062,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            140 => 
            array (
                'PokemonHabitatID' => 2141,
                'PokemonID' => 1063,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            141 => 
            array (
                'PokemonHabitatID' => 2142,
                'PokemonID' => 1063,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            142 => 
            array (
                'PokemonHabitatID' => 2143,
                'PokemonID' => 1064,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            143 => 
            array (
                'PokemonHabitatID' => 2144,
                'PokemonID' => 1064,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            144 => 
            array (
                'PokemonHabitatID' => 2145,
                'PokemonID' => 1065,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            145 => 
            array (
                'PokemonHabitatID' => 2146,
                'PokemonID' => 1065,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            146 => 
            array (
                'PokemonHabitatID' => 2147,
                'PokemonID' => 1066,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            147 => 
            array (
                'PokemonHabitatID' => 2148,
                'PokemonID' => 1067,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            148 => 
            array (
                'PokemonHabitatID' => 2149,
                'PokemonID' => 1068,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            149 => 
            array (
                'PokemonHabitatID' => 2150,
                'PokemonID' => 1069,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            150 => 
            array (
                'PokemonHabitatID' => 2151,
                'PokemonID' => 1070,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            151 => 
            array (
                'PokemonHabitatID' => 2152,
                'PokemonID' => 1071,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            152 => 
            array (
                'PokemonHabitatID' => 2153,
                'PokemonID' => 1072,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            153 => 
            array (
                'PokemonHabitatID' => 2154,
                'PokemonID' => 1072,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            154 => 
            array (
                'PokemonHabitatID' => 2155,
                'PokemonID' => 1073,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            155 => 
            array (
                'PokemonHabitatID' => 2156,
                'PokemonID' => 1073,
                'HabitatID' => 15,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            156 => 
            array (
                'PokemonHabitatID' => 2157,
                'PokemonID' => 1074,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            157 => 
            array (
                'PokemonHabitatID' => 2158,
                'PokemonID' => 1075,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            158 => 
            array (
                'PokemonHabitatID' => 2159,
                'PokemonID' => 1081,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            159 => 
            array (
                'PokemonHabitatID' => 2160,
                'PokemonID' => 1082,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            160 => 
            array (
                'PokemonHabitatID' => 2161,
                'PokemonID' => 1083,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            161 => 
            array (
                'PokemonHabitatID' => 2162,
                'PokemonID' => 1083,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            162 => 
            array (
                'PokemonHabitatID' => 2163,
                'PokemonID' => 1083,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            163 => 
            array (
                'PokemonHabitatID' => 2164,
                'PokemonID' => 1084,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            164 => 
            array (
                'PokemonHabitatID' => 2165,
                'PokemonID' => 1084,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            165 => 
            array (
                'PokemonHabitatID' => 2166,
                'PokemonID' => 1084,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            166 => 
            array (
                'PokemonHabitatID' => 2167,
                'PokemonID' => 1085,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            167 => 
            array (
                'PokemonHabitatID' => 2168,
                'PokemonID' => 1085,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            168 => 
            array (
                'PokemonHabitatID' => 2169,
                'PokemonID' => 1085,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 13:20:23',
                'updated_at' => '2023-07-16 13:20:23',
            ),
            169 => 
            array (
                'PokemonHabitatID' => 2170,
                'PokemonID' => 1094,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            170 => 
            array (
                'PokemonHabitatID' => 2171,
                'PokemonID' => 1094,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            171 => 
            array (
                'PokemonHabitatID' => 2172,
                'PokemonID' => 1095,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            172 => 
            array (
                'PokemonHabitatID' => 2173,
                'PokemonID' => 1095,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            173 => 
            array (
                'PokemonHabitatID' => 2174,
                'PokemonID' => 1096,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            174 => 
            array (
                'PokemonHabitatID' => 2175,
                'PokemonID' => 1096,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            175 => 
            array (
                'PokemonHabitatID' => 2176,
                'PokemonID' => 1097,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            176 => 
            array (
                'PokemonHabitatID' => 2177,
                'PokemonID' => 1097,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            177 => 
            array (
                'PokemonHabitatID' => 2178,
                'PokemonID' => 1098,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            178 => 
            array (
                'PokemonHabitatID' => 2179,
                'PokemonID' => 1098,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            179 => 
            array (
                'PokemonHabitatID' => 2180,
                'PokemonID' => 1099,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            180 => 
            array (
                'PokemonHabitatID' => 2181,
                'PokemonID' => 1099,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            181 => 
            array (
                'PokemonHabitatID' => 2182,
                'PokemonID' => 1100,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            182 => 
            array (
                'PokemonHabitatID' => 2183,
                'PokemonID' => 1100,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            183 => 
            array (
                'PokemonHabitatID' => 2184,
                'PokemonID' => 1101,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            184 => 
            array (
                'PokemonHabitatID' => 2185,
                'PokemonID' => 1101,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            185 => 
            array (
                'PokemonHabitatID' => 2186,
                'PokemonID' => 1102,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            186 => 
            array (
                'PokemonHabitatID' => 2187,
                'PokemonID' => 1102,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            187 => 
            array (
                'PokemonHabitatID' => 2188,
                'PokemonID' => 1102,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            188 => 
            array (
                'PokemonHabitatID' => 2189,
                'PokemonID' => 1103,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            189 => 
            array (
                'PokemonHabitatID' => 2190,
                'PokemonID' => 1103,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            190 => 
            array (
                'PokemonHabitatID' => 2191,
                'PokemonID' => 1103,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            191 => 
            array (
                'PokemonHabitatID' => 2192,
                'PokemonID' => 1104,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            192 => 
            array (
                'PokemonHabitatID' => 2193,
                'PokemonID' => 1105,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            193 => 
            array (
                'PokemonHabitatID' => 2194,
                'PokemonID' => 1106,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            194 => 
            array (
                'PokemonHabitatID' => 2195,
                'PokemonID' => 1106,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            195 => 
            array (
                'PokemonHabitatID' => 2196,
                'PokemonID' => 1107,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            196 => 
            array (
                'PokemonHabitatID' => 2197,
                'PokemonID' => 1107,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            197 => 
            array (
                'PokemonHabitatID' => 2198,
                'PokemonID' => 1108,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            198 => 
            array (
                'PokemonHabitatID' => 2199,
                'PokemonID' => 1109,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            199 => 
            array (
                'PokemonHabitatID' => 2200,
                'PokemonID' => 1110,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            200 => 
            array (
                'PokemonHabitatID' => 2201,
                'PokemonID' => 1110,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            201 => 
            array (
                'PokemonHabitatID' => 2202,
                'PokemonID' => 1110,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            202 => 
            array (
                'PokemonHabitatID' => 2203,
                'PokemonID' => 1111,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            203 => 
            array (
                'PokemonHabitatID' => 2204,
                'PokemonID' => 1112,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            204 => 
            array (
                'PokemonHabitatID' => 2205,
                'PokemonID' => 1113,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            205 => 
            array (
                'PokemonHabitatID' => 2206,
                'PokemonID' => 1114,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            206 => 
            array (
                'PokemonHabitatID' => 2207,
                'PokemonID' => 1114,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            207 => 
            array (
                'PokemonHabitatID' => 2208,
                'PokemonID' => 1115,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            208 => 
            array (
                'PokemonHabitatID' => 2209,
                'PokemonID' => 1115,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            209 => 
            array (
                'PokemonHabitatID' => 2210,
                'PokemonID' => 1116,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            210 => 
            array (
                'PokemonHabitatID' => 2211,
                'PokemonID' => 1116,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            211 => 
            array (
                'PokemonHabitatID' => 2212,
                'PokemonID' => 1117,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            212 => 
            array (
                'PokemonHabitatID' => 2213,
                'PokemonID' => 1117,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            213 => 
            array (
                'PokemonHabitatID' => 2214,
                'PokemonID' => 1118,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            214 => 
            array (
                'PokemonHabitatID' => 2215,
                'PokemonID' => 1118,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            215 => 
            array (
                'PokemonHabitatID' => 2216,
                'PokemonID' => 1119,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            216 => 
            array (
                'PokemonHabitatID' => 2217,
                'PokemonID' => 1119,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            217 => 
            array (
                'PokemonHabitatID' => 2218,
                'PokemonID' => 1120,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            218 => 
            array (
                'PokemonHabitatID' => 2219,
                'PokemonID' => 1120,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            219 => 
            array (
                'PokemonHabitatID' => 2220,
                'PokemonID' => 1121,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            220 => 
            array (
                'PokemonHabitatID' => 2221,
                'PokemonID' => 1121,
                'HabitatID' => 13,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            221 => 
            array (
                'PokemonHabitatID' => 2222,
                'PokemonID' => 1122,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            222 => 
            array (
                'PokemonHabitatID' => 2223,
                'PokemonID' => 1123,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            223 => 
            array (
                'PokemonHabitatID' => 2224,
                'PokemonID' => 1124,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            224 => 
            array (
                'PokemonHabitatID' => 2225,
                'PokemonID' => 1124,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            225 => 
            array (
                'PokemonHabitatID' => 2226,
                'PokemonID' => 1124,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            226 => 
            array (
                'PokemonHabitatID' => 2227,
                'PokemonID' => 1125,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            227 => 
            array (
                'PokemonHabitatID' => 2228,
                'PokemonID' => 1125,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            228 => 
            array (
                'PokemonHabitatID' => 2229,
                'PokemonID' => 1125,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            229 => 
            array (
                'PokemonHabitatID' => 2230,
                'PokemonID' => 1126,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            230 => 
            array (
                'PokemonHabitatID' => 2231,
                'PokemonID' => 1126,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            231 => 
            array (
                'PokemonHabitatID' => 2232,
                'PokemonID' => 1126,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:26',
                'updated_at' => '2023-08-08 18:21:26',
            ),
            232 => 
            array (
                'PokemonHabitatID' => 2233,
                'PokemonID' => 1127,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            233 => 
            array (
                'PokemonHabitatID' => 2234,
                'PokemonID' => 1128,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            234 => 
            array (
                'PokemonHabitatID' => 2235,
                'PokemonID' => 1129,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            235 => 
            array (
                'PokemonHabitatID' => 2236,
                'PokemonID' => 1129,
                'HabitatID' => 7,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            236 => 
            array (
                'PokemonHabitatID' => 2237,
                'PokemonID' => 1129,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            237 => 
            array (
                'PokemonHabitatID' => 2238,
                'PokemonID' => 1130,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            238 => 
            array (
                'PokemonHabitatID' => 2239,
                'PokemonID' => 1130,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            239 => 
            array (
                'PokemonHabitatID' => 2240,
                'PokemonID' => 1131,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            240 => 
            array (
                'PokemonHabitatID' => 2241,
                'PokemonID' => 1131,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            241 => 
            array (
                'PokemonHabitatID' => 2242,
                'PokemonID' => 1132,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            242 => 
            array (
                'PokemonHabitatID' => 2243,
                'PokemonID' => 1132,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            243 => 
            array (
                'PokemonHabitatID' => 2244,
                'PokemonID' => 1133,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            244 => 
            array (
                'PokemonHabitatID' => 2245,
                'PokemonID' => 1133,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            245 => 
            array (
                'PokemonHabitatID' => 2246,
                'PokemonID' => 1133,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            246 => 
            array (
                'PokemonHabitatID' => 2247,
                'PokemonID' => 1134,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            247 => 
            array (
                'PokemonHabitatID' => 2248,
                'PokemonID' => 1134,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            248 => 
            array (
                'PokemonHabitatID' => 2249,
                'PokemonID' => 1134,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            249 => 
            array (
                'PokemonHabitatID' => 2250,
                'PokemonID' => 1135,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            250 => 
            array (
                'PokemonHabitatID' => 2251,
                'PokemonID' => 1135,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            251 => 
            array (
                'PokemonHabitatID' => 2252,
                'PokemonID' => 1135,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            252 => 
            array (
                'PokemonHabitatID' => 2253,
                'PokemonID' => 1136,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            253 => 
            array (
                'PokemonHabitatID' => 2254,
                'PokemonID' => 1136,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            254 => 
            array (
                'PokemonHabitatID' => 2255,
                'PokemonID' => 1137,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            255 => 
            array (
                'PokemonHabitatID' => 2256,
                'PokemonID' => 1137,
                'HabitatID' => 37,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            256 => 
            array (
                'PokemonHabitatID' => 2257,
                'PokemonID' => 1137,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            257 => 
            array (
                'PokemonHabitatID' => 2258,
                'PokemonID' => 1138,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            258 => 
            array (
                'PokemonHabitatID' => 2259,
                'PokemonID' => 1138,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            259 => 
            array (
                'PokemonHabitatID' => 2260,
                'PokemonID' => 1138,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            260 => 
            array (
                'PokemonHabitatID' => 2261,
                'PokemonID' => 1138,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            261 => 
            array (
                'PokemonHabitatID' => 2262,
                'PokemonID' => 1139,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            262 => 
            array (
                'PokemonHabitatID' => 2263,
                'PokemonID' => 1139,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            263 => 
            array (
                'PokemonHabitatID' => 2264,
                'PokemonID' => 1139,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            264 => 
            array (
                'PokemonHabitatID' => 2265,
                'PokemonID' => 1139,
                'HabitatID' => 11,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            265 => 
            array (
                'PokemonHabitatID' => 2266,
                'PokemonID' => 1140,
                'HabitatID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            266 => 
            array (
                'PokemonHabitatID' => 2267,
                'PokemonID' => 1141,
                'HabitatID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            267 => 
            array (
                'PokemonHabitatID' => 2268,
                'PokemonID' => 1142,
                'HabitatID' => 34,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            268 => 
            array (
                'PokemonHabitatID' => 2269,
                'PokemonID' => 1143,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            269 => 
            array (
                'PokemonHabitatID' => 2270,
                'PokemonID' => 1143,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            270 => 
            array (
                'PokemonHabitatID' => 2271,
                'PokemonID' => 1144,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            271 => 
            array (
                'PokemonHabitatID' => 2272,
                'PokemonID' => 1144,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            272 => 
            array (
                'PokemonHabitatID' => 2273,
                'PokemonID' => 1145,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            273 => 
            array (
                'PokemonHabitatID' => 2274,
                'PokemonID' => 1145,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            274 => 
            array (
                'PokemonHabitatID' => 2275,
                'PokemonID' => 1146,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            275 => 
            array (
                'PokemonHabitatID' => 2276,
                'PokemonID' => 1146,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            276 => 
            array (
                'PokemonHabitatID' => 2277,
                'PokemonID' => 1147,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            277 => 
            array (
                'PokemonHabitatID' => 2278,
                'PokemonID' => 1147,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            278 => 
            array (
                'PokemonHabitatID' => 2279,
                'PokemonID' => 1148,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            279 => 
            array (
                'PokemonHabitatID' => 2280,
                'PokemonID' => 1148,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            280 => 
            array (
                'PokemonHabitatID' => 2281,
                'PokemonID' => 1149,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            281 => 
            array (
                'PokemonHabitatID' => 2282,
                'PokemonID' => 1150,
                'HabitatID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            282 => 
            array (
                'PokemonHabitatID' => 2283,
                'PokemonID' => 1151,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            283 => 
            array (
                'PokemonHabitatID' => 2284,
                'PokemonID' => 1152,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            284 => 
            array (
                'PokemonHabitatID' => 2285,
                'PokemonID' => 1152,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            285 => 
            array (
                'PokemonHabitatID' => 2286,
                'PokemonID' => 1153,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            286 => 
            array (
                'PokemonHabitatID' => 2287,
                'PokemonID' => 1153,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            287 => 
            array (
                'PokemonHabitatID' => 2288,
                'PokemonID' => 1154,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            288 => 
            array (
                'PokemonHabitatID' => 2289,
                'PokemonID' => 1154,
                'HabitatID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            289 => 
            array (
                'PokemonHabitatID' => 2290,
                'PokemonID' => 1155,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            290 => 
            array (
                'PokemonHabitatID' => 2291,
                'PokemonID' => 1156,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            291 => 
            array (
                'PokemonHabitatID' => 2292,
                'PokemonID' => 1157,
                'HabitatID' => 28,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            292 => 
            array (
                'PokemonHabitatID' => 2293,
                'PokemonID' => 1157,
                'HabitatID' => 16,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            293 => 
            array (
                'PokemonHabitatID' => 2294,
                'PokemonID' => 1158,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            294 => 
            array (
                'PokemonHabitatID' => 2295,
                'PokemonID' => 1159,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            295 => 
            array (
                'PokemonHabitatID' => 2296,
                'PokemonID' => 1160,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            296 => 
            array (
                'PokemonHabitatID' => 2297,
                'PokemonID' => 1161,
                'HabitatID' => 12,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            297 => 
            array (
                'PokemonHabitatID' => 2298,
                'PokemonID' => 1162,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            298 => 
            array (
                'PokemonHabitatID' => 2299,
                'PokemonID' => 1163,
                'HabitatID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            299 => 
            array (
                'PokemonHabitatID' => 2300,
                'PokemonID' => 1164,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            300 => 
            array (
                'PokemonHabitatID' => 2301,
                'PokemonID' => 1164,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            301 => 
            array (
                'PokemonHabitatID' => 2302,
                'PokemonID' => 1165,
                'HabitatID' => 18,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            302 => 
            array (
                'PokemonHabitatID' => 2303,
                'PokemonID' => 1165,
                'HabitatID' => 23,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            303 => 
            array (
                'PokemonHabitatID' => 2304,
                'PokemonID' => 1166,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            304 => 
            array (
                'PokemonHabitatID' => 2305,
                'PokemonID' => 1166,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            305 => 
            array (
                'PokemonHabitatID' => 2306,
                'PokemonID' => 1166,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            306 => 
            array (
                'PokemonHabitatID' => 2307,
                'PokemonID' => 1167,
                'HabitatID' => 25,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            307 => 
            array (
                'PokemonHabitatID' => 2308,
                'PokemonID' => 1167,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            308 => 
            array (
                'PokemonHabitatID' => 2309,
                'PokemonID' => 1167,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            309 => 
            array (
                'PokemonHabitatID' => 2310,
                'PokemonID' => 1168,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            310 => 
            array (
                'PokemonHabitatID' => 2311,
                'PokemonID' => 1168,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            311 => 
            array (
                'PokemonHabitatID' => 2312,
                'PokemonID' => 1168,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            312 => 
            array (
                'PokemonHabitatID' => 2313,
                'PokemonID' => 1169,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            313 => 
            array (
                'PokemonHabitatID' => 2314,
                'PokemonID' => 1169,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            314 => 
            array (
                'PokemonHabitatID' => 2315,
                'PokemonID' => 1169,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            315 => 
            array (
                'PokemonHabitatID' => 2316,
                'PokemonID' => 1170,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            316 => 
            array (
                'PokemonHabitatID' => 2317,
                'PokemonID' => 1170,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            317 => 
            array (
                'PokemonHabitatID' => 2318,
                'PokemonID' => 1170,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            318 => 
            array (
                'PokemonHabitatID' => 2319,
                'PokemonID' => 1171,
                'HabitatID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            319 => 
            array (
                'PokemonHabitatID' => 2320,
                'PokemonID' => 1172,
                'HabitatID' => 40,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            320 => 
            array (
                'PokemonHabitatID' => 2321,
                'PokemonID' => 1173,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            321 => 
            array (
                'PokemonHabitatID' => 2322,
                'PokemonID' => 1173,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            322 => 
            array (
                'PokemonHabitatID' => 2323,
                'PokemonID' => 1174,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            323 => 
            array (
                'PokemonHabitatID' => 2324,
                'PokemonID' => 1175,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            324 => 
            array (
                'PokemonHabitatID' => 2325,
                'PokemonID' => 1176,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            325 => 
            array (
                'PokemonHabitatID' => 2326,
                'PokemonID' => 1177,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            326 => 
            array (
                'PokemonHabitatID' => 2327,
                'PokemonID' => 1177,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            327 => 
            array (
                'PokemonHabitatID' => 2328,
                'PokemonID' => 1177,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            328 => 
            array (
                'PokemonHabitatID' => 2329,
                'PokemonID' => 1178,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            329 => 
            array (
                'PokemonHabitatID' => 2330,
                'PokemonID' => 1178,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            330 => 
            array (
                'PokemonHabitatID' => 2331,
                'PokemonID' => 1178,
                'HabitatID' => 32,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            331 => 
            array (
                'PokemonHabitatID' => 2332,
                'PokemonID' => 1179,
                'HabitatID' => 19,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            332 => 
            array (
                'PokemonHabitatID' => 2333,
                'PokemonID' => 1179,
                'HabitatID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            333 => 
            array (
                'PokemonHabitatID' => 2334,
                'PokemonID' => 1179,
                'HabitatID' => 8,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            334 => 
            array (
                'PokemonHabitatID' => 2335,
                'PokemonID' => 1180,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            335 => 
            array (
                'PokemonHabitatID' => 2336,
                'PokemonID' => 1181,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            336 => 
            array (
                'PokemonHabitatID' => 2337,
                'PokemonID' => 1182,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            337 => 
            array (
                'PokemonHabitatID' => 2338,
                'PokemonID' => 1183,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            338 => 
            array (
                'PokemonHabitatID' => 2339,
                'PokemonID' => 1183,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            339 => 
            array (
                'PokemonHabitatID' => 2340,
                'PokemonID' => 1184,
                'HabitatID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            340 => 
            array (
                'PokemonHabitatID' => 2341,
                'PokemonID' => 1184,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            341 => 
            array (
                'PokemonHabitatID' => 2342,
                'PokemonID' => 1185,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            342 => 
            array (
                'PokemonHabitatID' => 2343,
                'PokemonID' => 1185,
                'HabitatID' => 27,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            343 => 
            array (
                'PokemonHabitatID' => 2344,
                'PokemonID' => 1186,
                'HabitatID' => 17,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
            344 => 
            array (
                'PokemonHabitatID' => 2345,
                'PokemonID' => 1186,
                'HabitatID' => 9,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:21:27',
                'updated_at' => '2023-08-08 18:21:27',
            ),
        ));
        
        
    }
}