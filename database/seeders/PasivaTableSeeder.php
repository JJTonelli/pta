<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasivaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Pasiva')->delete();
        
        \DB::table('Pasiva')->insert(array (
            0 => 
            array (
                'PasivaID' => 1,
                'Titulo' => 'Gear Up',
                'Descripcion' => '+1 Attack',
                'TipoPasivaID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            1 => 
            array (
                'PasivaID' => 2,
                'Titulo' => 'Gorilla Tactics',
                'Descripcion' => '+1 Attack',
                'TipoPasivaID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            2 => 
            array (
                'PasivaID' => 3,
                'Titulo' => 'Howl',
                'Descripcion' => '+1 Attack',
                'TipoPasivaID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            3 => 
            array (
                'PasivaID' => 4,
                'Titulo' => 'Leer',
                'Descripcion' => '+1 Attack',
                'TipoPasivaID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            4 => 
            array (
                'PasivaID' => 5,
                'Titulo' => 'Meditate',
                'Descripcion' => '+1 Attack',
                'TipoPasivaID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            5 => 
            array (
                'PasivaID' => 6,
                'Titulo' => 'Moxie',
                'Descripcion' => '+1 Attack',
                'TipoPasivaID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            6 => 
            array (
                'PasivaID' => 7,
                'Titulo' => 'Sharpen',
                'Descripcion' => '+1 Attack',
                'TipoPasivaID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            7 => 
            array (
                'PasivaID' => 8,
                'Titulo' => 'Tail Whip',
                'Descripcion' => '+1 Attack',
                'TipoPasivaID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            8 => 
            array (
                'PasivaID' => 9,
                'Titulo' => 'Screech',
                'Descripcion' => '+2 Attack',
                'TipoPasivaID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            9 => 
            array (
                'PasivaID' => 10,
                'Titulo' => 'Swords Dance',
                'Descripcion' => '+2 Attack',
                'TipoPasivaID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            10 => 
            array (
                'PasivaID' => 11,
                'Titulo' => 'Huge Power',
                'Descripcion' => '+6 Attack',
                'TipoPasivaID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            11 => 
            array (
                'PasivaID' => 12,
                'Titulo' => 'Pure Power',
                'Descripcion' => '+6 Attack',
                'TipoPasivaID' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            12 => 
            array (
                'PasivaID' => 13,
                'Titulo' => 'Baby-Doll Eyes',
                'Descripcion' => '+1 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            13 => 
            array (
                'PasivaID' => 14,
                'Titulo' => 'Charm',
                'Descripcion' => '+1 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            14 => 
            array (
                'PasivaID' => 15,
                'Titulo' => 'Defense Curl',
                'Descripcion' => '+1 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            15 => 
            array (
                'PasivaID' => 16,
                'Titulo' => 'Growl',
                'Descripcion' => '+1 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            16 => 
            array (
                'PasivaID' => 17,
                'Titulo' => 'Harden',
                'Descripcion' => '+1 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            17 => 
            array (
                'PasivaID' => 18,
                'Titulo' => 'Intimidate',
                'Descripcion' => '+1 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            18 => 
            array (
                'PasivaID' => 19,
                'Titulo' => 'Play Nice',
                'Descripcion' => '+1 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            19 => 
            array (
                'PasivaID' => 20,
                'Titulo' => 'Withdraw',
                'Descripcion' => '+1 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            20 => 
            array (
                'PasivaID' => 21,
                'Titulo' => 'Acid Armor',
                'Descripcion' => '+2 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            21 => 
            array (
                'PasivaID' => 22,
                'Titulo' => 'Barrier',
                'Descripcion' => '+2 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            22 => 
            array (
                'PasivaID' => 23,
                'Titulo' => 'Feather Dance',
                'Descripcion' => '+2 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            23 => 
            array (
                'PasivaID' => 24,
                'Titulo' => 'Iron Defense',
                'Descripcion' => '+2 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            24 => 
            array (
                'PasivaID' => 25,
                'Titulo' => 'Stamina',
                'Descripcion' => '+2 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            25 => 
            array (
                'PasivaID' => 26,
                'Titulo' => 'Cotton Guard',
                'Descripcion' => '+3 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            26 => 
            array (
                'PasivaID' => 27,
                'Titulo' => 'Shelter',
                'Descripcion' => '+3 Defense',
                'TipoPasivaID' => 2,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            27 => 
            array (
                'PasivaID' => 28,
                'Titulo' => 'Metal Sound',
                'Descripcion' => '+1 Special Attack',
                'TipoPasivaID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            28 => 
            array (
                'PasivaID' => 29,
                'Titulo' => 'Nasty Plot',
                'Descripcion' => '+1 Special Attack',
                'TipoPasivaID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            29 => 
            array (
                'PasivaID' => 30,
                'Titulo' => 'Fake Tears',
                'Descripcion' => '+2 Special Attack',
                'TipoPasivaID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            30 => 
            array (
                'PasivaID' => 31,
                'Titulo' => 'Plan Out',
                'Descripcion' => '+2 Special Attack',
                'TipoPasivaID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            31 => 
            array (
                'PasivaID' => 32,
                'Titulo' => 'Tail Glow',
                'Descripcion' => '+3 Special Attack',
                'TipoPasivaID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            32 => 
            array (
                'PasivaID' => 33,
                'Titulo' => 'Big Brained',
                'Descripcion' => '+6 Special Attack',
                'TipoPasivaID' => 3,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            33 => 
            array (
                'PasivaID' => 34,
                'Titulo' => 'Aromatic Mist',
                'Descripcion' => '+1 Special Defense',
                'TipoPasivaID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            34 => 
            array (
                'PasivaID' => 35,
                'Titulo' => 'Confide',
                'Descripcion' => '+1 Special Defense',
                'TipoPasivaID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            35 => 
            array (
                'PasivaID' => 36,
                'Titulo' => 'Headache',
                'Descripcion' => '+1 Special Defense',
                'TipoPasivaID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            36 => 
            array (
                'PasivaID' => 37,
                'Titulo' => 'Snarl',
                'Descripcion' => '+1 Special Defense',
                'TipoPasivaID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            37 => 
            array (
                'PasivaID' => 38,
                'Titulo' => 'Amnesia',
                'Descripcion' => '+2 Special Defense',
                'TipoPasivaID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            38 => 
            array (
                'PasivaID' => 39,
                'Titulo' => 'Captivate',
                'Descripcion' => '+2 Special Defense',
                'TipoPasivaID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            39 => 
            array (
                'PasivaID' => 40,
                'Titulo' => 'Eerie Impulse',
                'Descripcion' => '+2 Special Defense',
                'TipoPasivaID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            40 => 
            array (
                'PasivaID' => 41,
                'Titulo' => 'Dissipate',
                'Descripcion' => '+3 Special Defense',
                'TipoPasivaID' => 4,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            41 => 
            array (
                'PasivaID' => 42,
                'Titulo' => 'Cotton Down',
                'Descripcion' => '+1 Speed',
                'TipoPasivaID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            42 => 
            array (
                'PasivaID' => 43,
                'Titulo' => 'Gooey',
                'Descripcion' => '+1 Speed',
                'TipoPasivaID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            43 => 
            array (
                'PasivaID' => 44,
                'Titulo' => 'Run Away',
                'Descripcion' => '+1 Speed',
                'TipoPasivaID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            44 => 
            array (
                'PasivaID' => 45,
                'Titulo' => 'Tangling Hair',
                'Descripcion' => '+1 Speed',
                'TipoPasivaID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            45 => 
            array (
                'PasivaID' => 46,
                'Titulo' => 'Agility',
                'Descripcion' => '+2 Speed',
                'TipoPasivaID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            46 => 
            array (
                'PasivaID' => 47,
                'Titulo' => 'Autotomize',
                'Descripcion' => '+2 Speed',
                'TipoPasivaID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            47 => 
            array (
                'PasivaID' => 48,
                'Titulo' => 'Cotton Spore',
                'Descripcion' => '+2 Speed',
                'TipoPasivaID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            48 => 
            array (
                'PasivaID' => 49,
                'Titulo' => 'Rock Polish',
                'Descripcion' => '+2 Speed',
                'TipoPasivaID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            49 => 
            array (
                'PasivaID' => 50,
                'Titulo' => 'Scary Face',
                'Descripcion' => '+2 Speed',
                'TipoPasivaID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            50 => 
            array (
                'PasivaID' => 51,
                'Titulo' => 'Speed Boost',
                'Descripcion' => '+2 Speed',
                'TipoPasivaID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            51 => 
            array (
                'PasivaID' => 52,
                'Titulo' => 'String Shot',
                'Descripcion' => '+2 Speed',
                'TipoPasivaID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            52 => 
            array (
                'PasivaID' => 53,
                'Titulo' => 'Tailwind',
                'Descripcion' => '+2 Speed',
                'TipoPasivaID' => 5,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            53 => 
            array (
                'PasivaID' => 54,
                'Titulo' => 'Attack Order',
                'Descripcion' => '+1 Attack, +1 Defense',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            54 => 
            array (
                'PasivaID' => 55,
                'Titulo' => 'Bulk Up',
                'Descripcion' => '+1 Attack, +1 Defense',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            55 => 
            array (
                'PasivaID' => 56,
                'Titulo' => 'Calm Mind',
                'Descripcion' => '+1 Special Attack, +1 Special Defense',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            56 => 
            array (
                'PasivaID' => 57,
                'Titulo' => 'Coil',
                'Descripcion' => '+1 Attack, +1 Defense, +1 to accuracy checks',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            57 => 
            array (
                'PasivaID' => 58,
                'Titulo' => 'Cosmic Power',
                'Descripcion' => '+1 Defense, +1 Special Defense',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            58 => 
            array (
                'PasivaID' => 59,
                'Titulo' => 'Decorate',
                'Descripcion' => '+2 Attack, +2 Special Attack',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            59 => 
            array (
                'PasivaID' => 60,
                'Titulo' => 'Defend Order',
                'Descripcion' => '+1 Defense, +1 Special Defense',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            60 => 
            array (
                'PasivaID' => 61,
                'Titulo' => 'Dragon Dance',
                'Descripcion' => '+1 Attack, +1 Speed',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            61 => 
            array (
                'PasivaID' => 62,
                'Titulo' => 'Fae Frolic',
                'Descripcion' => '+1 Special Attack, +1 Speed',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            62 => 
            array (
                'PasivaID' => 63,
                'Titulo' => 'Growth',
                'Descripcion' => '+1 Attack, +1 Special Attack',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            63 => 
            array (
                'PasivaID' => 64,
                'Titulo' => 'Headstrong',
                'Descripcion' => '+4 Special Attack, -2 to accuracy checks',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            64 => 
            array (
                'PasivaID' => 65,
                'Titulo' => 'Hone Claws',
                'Descripcion' => '+1 Attack, +1 to accuracy checks',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            65 => 
            array (
                'PasivaID' => 66,
                'Titulo' => 'Hustle',
                'Descripcion' => '+4 Attack, -2 to accuracy checks',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            66 => 
            array (
                'PasivaID' => 67,
                'Titulo' => 'Magnetic Flux',
                'Descripcion' => '+1 Defense, +1 Special Defense',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            67 => 
            array (
                'PasivaID' => 68,
                'Titulo' => 'Majesty\'s Order',
                'Descripcion' => '+1 Attack, Special Attack, Defense, and Special Defense',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            68 => 
            array (
                'PasivaID' => 69,
                'Titulo' => 'Noble Roar',
                'Descripcion' => '+1 Defense, +1 Special Defense',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            69 => 
            array (
                'PasivaID' => 70,
                'Titulo' => 'Quiver Dance',
                'Descripcion' => '+1 Special Attack, +1 Special Defense, +1 Speed',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            70 => 
            array (
                'PasivaID' => 71,
                'Titulo' => 'Rototiller',
                'Descripcion' => '+1 Attack, +1 Special Attack',
                'TipoPasivaID' => 6,
                'deleted_at' => NULL,
                'created_at' => '2023-04-29 16:14:59',
                'updated_at' => '2023-04-29 16:14:59',
            ),
            71 => 
            array (
                'PasivaID' => 72,
                'Titulo' => 'Seer Sight',
            'Descripcion' => '+1 Special Attack, +1 to accuracy checks)',
            'TipoPasivaID' => 6,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        72 => 
        array (
            'PasivaID' => 73,
            'Titulo' => 'Shift Gear',
            'Descripcion' => '+1 Attack, +2 Speed',
            'TipoPasivaID' => 6,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        73 => 
        array (
            'PasivaID' => 74,
            'Titulo' => 'Tearful Look',
            'Descripcion' => '+1 Defense, +1 Special Defense',
            'TipoPasivaID' => 6,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        74 => 
        array (
            'PasivaID' => 75,
            'Titulo' => 'Tickle',
            'Descripcion' => '+1 Attack, +1 Defense',
            'TipoPasivaID' => 6,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        75 => 
        array (
            'PasivaID' => 76,
            'Titulo' => 'Work Up',
            'Descripcion' => '+1 Attack, +1 Special Attack',
            'TipoPasivaID' => 6,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        76 => 
        array (
            'PasivaID' => 77,
            'Titulo' => 'Focus Energy',
            'Descripcion' => 'Attacks are critical hits on natural 18-20',
            'TipoPasivaID' => 7,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        77 => 
        array (
            'PasivaID' => 78,
            'Titulo' => 'Super Luck',
            'Descripcion' => 'Attacks are critical hits on natural 18-20',
            'TipoPasivaID' => 7,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        78 => 
        array (
            'PasivaID' => 79,
            'Titulo' => 'Adaptability',
            'Descripcion' => 'Moves that are the same type as you deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        79 => 
        array (
            'PasivaID' => 80,
            'Titulo' => 'Aerilate',
            'Descripcion' => 'Normal-type moves performed by you are treated as Flying-type moves.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        80 => 
        array (
            'PasivaID' => 81,
            'Titulo' => 'Aftermath',
            'Descripcion' => 'When knocked out by a melee attack, the attacker loses 1d20 HP.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        81 => 
        array (
            'PasivaID' => 82,
            'Titulo' => 'Analytic',
            'Descripcion' => 'When attacking a foe who has already acted this round, deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        82 => 
        array (
            'PasivaID' => 83,
            'Titulo' => 'Anger Point',
            'Descripcion' => 'When hit by a critical hit, raise Attack +6 for 10 mins. This passive does not stack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        83 => 
        array (
            'PasivaID' => 84,
            'Titulo' => 'Aroma Veil',
            'Descripcion' => 'You and your allies within 10ft of you are immune to the effects of the moves Heal Block, Taunt, Encore, and Disable and the passive Cursed Body.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        84 => 
        array (
            'PasivaID' => 85,
            'Titulo' => 'Battery',
            'Descripcion' => 'Allies within 15 ft of you have +1 Special Attack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        85 => 
        array (
            'PasivaID' => 86,
            'Titulo' => 'Battle Armor',
            'Descripcion' => 'Critical hits are treated as normal hits against you.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        86 => 
        array (
            'PasivaID' => 87,
            'Titulo' => 'Battle Bond',
            'Descripcion' => 'Mega Greninja’s Water Shuriken’s base damage changes from 1d4 to 1d10.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        87 => 
        array (
            'PasivaID' => 88,
            'Titulo' => 'Berserk',
            'Descripcion' => 'While below half HP, you have +2 Special Attack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        88 => 
        array (
            'PasivaID' => 89,
            'Titulo' => 'Big Pecks',
            'Descripcion' => 'Your Defense cannot be lowered by a foe’s effects.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        89 => 
        array (
            'PasivaID' => 90,
            'Titulo' => 'Blaze',
            'Descripcion' => 'When you are below 20 HP, your Fire type attacks deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        90 => 
        array (
            'PasivaID' => 91,
            'Titulo' => 'Centered Focus',
            'Descripcion' => 'Mega Gallade is immune to being Stunned. Mega Gallade has +2 more Defense.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        91 => 
        array (
            'PasivaID' => 92,
            'Titulo' => 'Cheek Pouch',
            'Descripcion' => 'Whenever you consume a berry, you recover 10 HP in addition to any other effects.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        92 => 
        array (
            'PasivaID' => 93,
            'Titulo' => 'Champion Boose',
        'Descripcion' => 'Whenever you knock out a foe, your highest stat is raised +2 for 10 mins. If you have two or more stats tied for your highest, pick one of them to raise by two this combat (This effect may stack)',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        93 => 
        array (
            'PasivaID' => 94,
            'Titulo' => 'Chlorophyll',
            'Descripcion' => 'While in Sunny Weather, your Speed is +2.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        94 => 
        array (
            'PasivaID' => 95,
            'Titulo' => 'Clear Body',
            'Descripcion' => 'Your stats cannot be lowered by a foe’s effects.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        95 => 
        array (
            'PasivaID' => 96,
            'Titulo' => 'Cloud Nine',
            'Descripcion' => 'As a free action you may deplete one use of Defog and use Defog.,',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        96 => 
        array (
            'PasivaID' => 97,
            'Titulo' => 'Color Change',
            'Descripcion' => 'Whenever you are attacked, your type is changed to the same type as the attack after taking damage and effects.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        97 => 
        array (
            'PasivaID' => 98,
            'Titulo' => 'Comatose',
            'Descripcion' => 'You are always Asleep but can still act as if you aren’t. You are also immune to other afflictions.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        98 => 
        array (
            'PasivaID' => 99,
            'Titulo' => 'Competitive',
            'Descripcion' => 'If a foe lowers any of your stats, you have +2 Special Attack until your lowered stats are returned to normal.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        99 => 
        array (
            'PasivaID' => 100,
            'Titulo' => 'Compound Eyes',
            'Descripcion' => 'Add +1 during accuracy check whenever you use a ranged attack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        100 => 
        array (
            'PasivaID' => 101,
            'Titulo' => 'Corrosion',
            'Descripcion' => 'You can Poison and Toxify Steel-types and Poison-types.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        101 => 
        array (
            'PasivaID' => 102,
            'Titulo' => 'Curious Medicine',
            'Descripcion' => 'Your stats and your adjacent ally’s stats cannot be lowered by a foe’s effects.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        102 => 
        array (
            'PasivaID' => 103,
            'Titulo' => 'Cursed Body',
            'Descripcion' => 'When you are hit by a foe’s melee attack, disable that attack for 10 mins. Cursed Body can only affect one attack at a time.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        103 => 
        array (
            'PasivaID' => 104,
            'Titulo' => 'Cute Charm',
            'Descripcion' => 'Whenever you are hit with a melee attack, roll 1d4. On 4, Infatuate the attacker.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        104 => 
        array (
            'PasivaID' => 105,
            'Titulo' => 'Damp',
            'Descripcion' => 'Explosion, Misty Explosion, and Self-Destruct fail to do anything if used within 40ft of you.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        105 => 
        array (
            'PasivaID' => 106,
            'Titulo' => 'Dazzling',
            'Descripcion' => 'You may not be targeted by Priority moves that are being used out of turn order.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        106 => 
        array (
            'PasivaID' => 107,
            'Titulo' => 'Defeatist',
            'Descripcion' => 'When your HP is below half of your max hit points, your stats are all -2.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        107 => 
        array (
            'PasivaID' => 108,
            'Titulo' => 'Defiant',
            'Descripcion' => 'If a foe lowers any of your stats, you have +2 Attack until your lowered stats are returned to normal.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        108 => 
        array (
            'PasivaID' => 109,
            'Titulo' => 'Disguise',
            'Descripcion' => 'The first time you are hit with an attack each encounter, the attack is negated.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        109 => 
        array (
            'PasivaID' => 110,
            'Titulo' => 'Download',
            'Descripcion' => 'Your Attack is +1 against targets with lower Special Defense than Defense. Your Special Attack is +1 against targets with lower Defense than Special Defense.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        110 => 
        array (
            'PasivaID' => 111,
            'Titulo' => 'Drizzle',
            'Descripcion' => 'As a free action you may deplete one use of Rain Dance and use Rain Dance.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        111 => 
        array (
            'PasivaID' => 112,
            'Titulo' => 'Drought',
            'Descripcion' => 'As a free action you may deplete one use of Sunny Day and use Sunny Day.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        112 => 
        array (
            'PasivaID' => 113,
            'Titulo' => 'Dry Skin',
            'Descripcion' => 'In sunny weather, you lose 4 HP at the end of your actions. In rainy weather, you recover 4 HP at the end of your actions. You are immune to Water-type attacks.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        113 => 
        array (
            'PasivaID' => 114,
            'Titulo' => 'Early Bird',
            'Descripcion' => 'You roll twice during checks to wake from Sleep and use the higher result.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        114 => 
        array (
            'PasivaID' => 115,
            'Titulo' => 'Effect Spore',
            'Descripcion' => 'Whenever you are hit with a melee attack, roll 1d4. On 4, randomly either Paralyze, Poison, or put to Sleep the attacker.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        115 => 
        array (
            'PasivaID' => 116,
            'Titulo' => 'Electric Surge',
            'Descripcion' => 'As a free action you may deplete one use of Electric Terrain and use Electric Terrain.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        116 => 
        array (
            'PasivaID' => 117,
            'Titulo' => 'Emergency Exit',
            'Descripcion' => 'You cannot fight when first damaged below half of Max HP. You will want to run away or return to a Poke Ball for 2 rounds. During those two rounds, your speed is doubled.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        117 => 
        array (
            'PasivaID' => 118,
            'Titulo' => 'Exposed',
        'Descripcion' => 'When you use a move or attack, you have –8 Defense and –8 Special Defense until your next turn. You also deal –8 damage with all attacks before applying weakness and resistance), Sturdy (If you would be brought from Max HP to 0 or below, you are instead brought to 1 HP.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        118 => 
        array (
            'PasivaID' => 119,
            'Titulo' => 'Filter',
            'Descripcion' => 'Super-effective attacks against you deal -4 damage after applying weakness.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        119 => 
        array (
            'PasivaID' => 120,
            'Titulo' => 'Flame Body',
            'Descripcion' => 'Whenever you are hit with a melee attack, roll 1d4. On 4, Burn the attacker.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        120 => 
        array (
            'PasivaID' => 121,
            'Titulo' => 'Flare Boost',
            'Descripcion' => 'While Burned, your Special Attack is +4.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        121 => 
        array (
            'PasivaID' => 122,
            'Titulo' => 'Flash Fire',
            'Descripcion' => 'You are immune to Fire-type attacks. If you would be hit by a Fire-type attack, your Fire type attacks deal +4 damage for 2 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        122 => 
        array (
            'PasivaID' => 123,
            'Titulo' => 'Flower Gift',
            'Descripcion' => 'While Cherrim is in Sunny Weather, Cherrim’s Attack and Special Defense is +6',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        123 => 
        array (
            'PasivaID' => 124,
            'Titulo' => 'Flower Veil',
            'Descripcion' => 'You and your allied Grass-type’s stats cannot be lowered by effects within 25ft of you.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        124 => 
        array (
            'PasivaID' => 125,
            'Titulo' => 'Fluffy',
            'Descripcion' => 'If hit by a melee attack, you only take half the damage. If hit by a Fire-type attack, you take twice the damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        125 => 
        array (
            'PasivaID' => 126,
            'Titulo' => 'Forecast',
            'Descripcion' => 'Your appearance and type changes with the weather. In Hailing, Hazy, or Misty weather, Castform is Ice-type. In Raining weather, Castform is Water-type. In Sandstorming weather, Castform is Rock-type. In Sunny weather, Castform is Fire-type.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        126 => 
        array (
            'PasivaID' => 127,
            'Titulo' => 'Friend Guard',
            'Descripcion' => 'Allies within 25ft of you take -1d4 damage when attacked.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        127 => 
        array (
            'PasivaID' => 128,
            'Titulo' => 'Fur Coat',
            'Descripcion' => 'If hit by a move using the Attack stat, you only take half the damage you would take.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        128 => 
        array (
            'PasivaID' => 129,
            'Titulo' => 'Gale Wings',
            'Descripcion' => 'If you use a Flying Type Move during your turn, your Speed is +2 until your next turn.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        129 => 
        array (
            'PasivaID' => 130,
            'Titulo' => 'Galvanize',
            'Descripcion' => 'Normal-type moves performed by you are treated as Electric-type moves.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        130 => 
        array (
            'PasivaID' => 131,
            'Titulo' => 'Grass Pelt',
            'Descripcion' => 'While in Grassy Terrain, your Defense is +2.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        131 => 
        array (
            'PasivaID' => 132,
            'Titulo' => 'Grassy Surge',
            'Descripcion' => 'As a free action you may deplete one use of Grassy Terrain and use Grassy Terrain.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        132 => 
        array (
            'PasivaID' => 133,
            'Titulo' => 'Gulp Missile',
            'Descripcion' => 'Whenever Cramorant goes underwater, it gathers waste in its mouth. When hit by an attack within 30ft while Cramorant has waste, Cramorant ejects the waste at the offender, dealing 4 damage or 8 damage if Cramorant has less than 20 HP',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        133 => 
        array (
            'PasivaID' => 134,
            'Titulo' => 'Guts',
            'Descripcion' => 'While afflicted, your Attack is +2.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        134 => 
        array (
            'PasivaID' => 135,
            'Titulo' => 'Harvest',
            'Descripcion' => 'When using a Berry, you only use half of it while still gaining its full effects. You can only use half of a Berry if you have Harvest.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        135 => 
        array (
            'PasivaID' => 136,
            'Titulo' => 'Healer',
            'Descripcion' => 'After acting, you may roll 1d20. On 16 or higher, any adjacent allies are cured of all afflictions.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        136 => 
        array (
            'PasivaID' => 137,
            'Titulo' => 'Heatproof',
            'Descripcion' => 'Fire-type attacks are resisted by you. If you are already resistant to Fire-type, half any Fire-type attack’s damage again.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        137 => 
        array (
            'PasivaID' => 138,
            'Titulo' => 'Hunger Switch',
            'Descripcion' => 'Whenever Morpeko acts, it changes from Full Belly mode to Hangry mode or back into Full Belly mode from Hangry mode. Aura Wheel is Electric-type in Full Belly mode, Aura Wheel is Dark-type in Hangry mode.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        138 => 
        array (
            'PasivaID' => 139,
            'Titulo' => 'Hydration',
            'Descripcion' => 'While in Raining weather, you are cured of any afflictions.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        139 => 
        array (
            'PasivaID' => 140,
            'Titulo' => 'Hyper Cutter',
            'Descripcion' => 'Your Attack cannot be lowered by a foe’s effects.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        140 => 
        array (
            'PasivaID' => 141,
            'Titulo' => 'Ice Body',
            'Descripcion' => 'If in Hailing weather, you recover 4 HP during your action and you don’t take damage from Hailing weather.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        141 => 
        array (
            'PasivaID' => 142,
            'Titulo' => 'Ice Face',
            'Descripcion' => 'The first time you are hit with a melee attack each encounter; the attack is negated. Ice Face is reset whenever it starts Hailing while you are within its area of effect.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        142 => 
        array (
            'PasivaID' => 143,
            'Titulo' => 'Ice Scales',
            'Descripcion' => 'If hit by a Special Attack, you only take half the damage you would take.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        143 => 
        array (
            'PasivaID' => 144,
            'Titulo' => 'Illusion',
            'Descripcion' => 'As a free action, you may change your appearance to look like any Pokémon you have interacted with within the past hour. You may not appear as a Pokémon more than twice your size and the illusion is dropped when you are hit by an attack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        144 => 
        array (
            'PasivaID' => 145,
            'Titulo' => 'Immunity',
            'Descripcion' => 'You are immune to getting Poisoned and Toxified.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        145 => 
        array (
            'PasivaID' => 146,
            'Titulo' => 'Imposter',
            'Descripcion' => 'As a free action you may use Transform.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        146 => 
        array (
            'PasivaID' => 147,
            'Titulo' => 'Infiltrator',
            'Descripcion' => 'Hindering terrain and Walls do not affect you or your attacks.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        147 => 
        array (
            'PasivaID' => 148,
            'Titulo' => 'Innards Out',
            'Descripcion' => 'When you are knocked out by a melee attack, deal damage to the attacker equal to the damage you just took.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        148 => 
        array (
            'PasivaID' => 149,
            'Titulo' => 'Inner Focus',
            'Descripcion' => 'You are immune to being Stunned.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        149 => 
        array (
            'PasivaID' => 150,
            'Titulo' => 'Insomnia',
            'Descripcion' => 'You are immune to being put to Sleep.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        150 => 
        array (
            'PasivaID' => 151,
            'Titulo' => 'Iron Barbs',
            'Descripcion' => 'Whenever you are hit with a melee attack, the attacker takes 4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        151 => 
        array (
            'PasivaID' => 152,
            'Titulo' => 'Iron Fist',
            'Descripcion' => 'Your punching attacks deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        152 => 
        array (
            'PasivaID' => 153,
            'Titulo' => 'Justified',
            'Descripcion' => 'When a foe hits you with a Dark-type attack, your Attack is +1 for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        153 => 
        array (
            'PasivaID' => 154,
            'Titulo' => 'Keen Eye',
            'Descripcion' => 'Your accuracy checks cannot be negatively affected by foes.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        154 => 
        array (
            'PasivaID' => 155,
            'Titulo' => 'Leaf Guard',
            'Descripcion' => 'While in sunny weather, you are cured of any afflictions.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        155 => 
        array (
            'PasivaID' => 156,
            'Titulo' => 'Levitate',
            'Descripcion' => 'You are immune to Ground-type moves while you are airborne.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        156 => 
        array (
            'PasivaID' => 157,
            'Titulo' => 'Libero',
            'Descripcion' => 'You may change your type to the same type as an attack you are making while making it for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        157 => 
        array (
            'PasivaID' => 158,
            'Titulo' => 'Lightning Rod',
            'Descripcion' => 'Any foe’s ranged Electric-type attacks within 25ft or any adjacent foe’s Electric-type attacks are negated and drawn to you. Your Special Attack is +2 until the end of your next turn whenever you negate an Electric-type attack',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        158 => 
        array (
            'PasivaID' => 159,
            'Titulo' => 'Limber',
            'Descripcion' => 'You are immune to being Paralyzed.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        159 => 
        array (
            'PasivaID' => 160,
            'Titulo' => 'Liquid Ooze',
            'Descripcion' => 'If you are hit by an attack that damages you and heals the attacker, the attacker is dealt damage equal to what they would have healed, instead of healing.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        160 => 
        array (
            'PasivaID' => 161,
            'Titulo' => 'Liquid Voice',
            'Descripcion' => 'Sound-based moves made by you are Water-type.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        161 => 
        array (
            'PasivaID' => 162,
            'Titulo' => 'Long Reach',
            'Descripcion' => 'Your melee ranged attacks all have a range of 25ft, and are still melee attacks.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        162 => 
        array (
            'PasivaID' => 163,
            'Titulo' => 'Magic Bounce',
            'Descripcion' => 'If you are hit by an attack that does not deal damage, the attacker is instead affected by the effects of their own attack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        163 => 
        array (
            'PasivaID' => 164,
            'Titulo' => 'Magic Guard',
            'Descripcion' => 'You can only take damage from attacks that deal damage. You are unaffected by damage from afflictions, coats, hazards, weather or any passives.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        164 => 
        array (
            'PasivaID' => 165,
            'Titulo' => 'Magician',
            'Descripcion' => 'When hitting with a melee attack, you steal the target’s held item, if any.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        165 => 
        array (
            'PasivaID' => 166,
            'Titulo' => 'Mega Adaptability',
            'Descripcion' => 'Moves that are the same type as Mega Beedrill or Mega Lucario deal +8 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        166 => 
        array (
            'PasivaID' => 167,
            'Titulo' => 'Magma Armor',
            'Descripcion' => 'You are immune being Frozen.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        167 => 
        array (
            'PasivaID' => 168,
            'Titulo' => 'Marvel Scale',
            'Descripcion' => 'While afflicted, your Defense is +2.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        168 => 
        array (
            'PasivaID' => 169,
            'Titulo' => 'Mega Cannon',
            'Descripcion' => 'Mega Blastoise’s ranged attacks deal +8 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        169 => 
        array (
            'PasivaID' => 170,
            'Titulo' => 'Mega Filter',
            'Descripcion' => 'Super-effective attacks against Mega Aggron deal -1d20 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        170 => 
        array (
            'PasivaID' => 171,
            'Titulo' => 'Mega Healer',
            'Descripcion' => 'After acting, Mega Audino may roll 1d20. On 7 or higher, any adjacent allies are cured of all afflictions. Mega Healer replaces Mega Audino’s Healer passive.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        171 => 
        array (
            'PasivaID' => 172,
            'Titulo' => 'Mega Intimidate',
            'Descripcion' => 'Mega Manectric has +4 more Defense',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        172 => 
        array (
            'PasivaID' => 173,
            'Titulo' => 'Mega Jaw',
            'Descripcion' => 'Mega Sharpedo’s biting attacks deal +8 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        173 => 
        array (
            'PasivaID' => 174,
            'Titulo' => 'Mega Launcher',
            'Descripcion' => 'Your pulse attacks deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        174 => 
        array (
            'PasivaID' => 175,
            'Titulo' => 'Mega Shell Armor',
            'Descripcion' => 'Critical hits are treated as normal hits against Mega Slowbro. Mega Slowbro has +2 more Defense.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        175 => 
        array (
            'PasivaID' => 176,
            'Titulo' => 'Mega Skill Link',
            'Descripcion' => 'Mega Heracross’s scatter moves get to be completely used, even if you miss you may still attempt each possible attack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        176 => 
        array (
            'PasivaID' => 177,
            'Titulo' => 'Mega Technician',
            'Descripcion' => 'When rolling damage, replace any rolled 1s, 2s, or 3s with 4s.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        177 => 
        array (
            'PasivaID' => 178,
            'Titulo' => 'Merciless',
            'Descripcion' => 'On hit, your attacks are critical hits if the target is Poisoned or Toxified.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        178 => 
        array (
            'PasivaID' => 179,
            'Titulo' => 'Mettle',
            'Descripcion' => 'Your attacks cannot be redirected by passives or any other ability, instead only hitting a target your attack was directed at.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        179 => 
        array (
            'PasivaID' => 180,
            'Titulo' => 'Mimicry',
            'Descripcion' => 'Your Type changes to reflect your current surroundings. If you are in a grassy field, Grass type; if you are in water, Water type; if you are on a mountain, Rock type; etc.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        180 => 
        array (
            'PasivaID' => 181,
            'Titulo' => 'Minus',
            'Descripcion' => 'If at least one ally has Plus or Minus within 10ft you, you have +3 Special Attack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        181 => 
        array (
            'PasivaID' => 182,
            'Titulo' => 'Mirror Armor',
            'Descripcion' => 'If your stats would be lowered by a foe’s effects, instead that offender’s stat is lowered.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        182 => 
        array (
            'PasivaID' => 183,
            'Titulo' => 'Misty Surge',
            'Descripcion' => 'As a free action you may deplete one use of Misty Terrain and use Misty Terrain.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        183 => 
        array (
            'PasivaID' => 184,
            'Titulo' => 'Mold Breaker',
            'Descripcion' => 'Your attacks ignore any passives that would redirect, negate or weaken your attacks.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        184 => 
        array (
            'PasivaID' => 185,
            'Titulo' => 'Motor Drive',
            'Descripcion' => 'Any Electric-type attack that hits you is negated and your speed is +1 for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        185 => 
        array (
            'PasivaID' => 186,
            'Titulo' => 'Multiscale',
            'Descripcion' => 'When you are at Max HP, you take -4 damage from all attacks.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        186 => 
        array (
            'PasivaID' => 187,
            'Titulo' => 'Mummy',
            'Descripcion' => 'Whenever you are hit with a melee attack, the not-Stat passives of the attacker become Mummy for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        187 => 
        array (
            'PasivaID' => 188,
            'Titulo' => 'Natural Cure',
            'Descripcion' => 'Whenever returned to a Poke Ball, you are cured of any afflictions.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        188 => 
        array (
            'PasivaID' => 189,
            'Titulo' => 'Neutralizing Gas',
            'Descripcion' => 'Non-Stat passives other than your own do not work within 10ft of you.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        189 => 
        array (
            'PasivaID' => 190,
            'Titulo' => 'No Guard',
            'Descripcion' => 'You cannot miss your attacks, and attacks made against you cannot miss.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        190 => 
        array (
            'PasivaID' => 191,
            'Titulo' => 'Normalize',
            'Descripcion' => 'Attacks performed by you are treated as Normal-type attacks.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        191 => 
        array (
            'PasivaID' => 192,
            'Titulo' => 'Oblivious',
            'Descripcion' => 'You are immune to Infatuation.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        192 => 
        array (
            'PasivaID' => 193,
            'Titulo' => 'Overcoat',
            'Descripcion' => 'You are immune to damage from weather.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        193 => 
        array (
            'PasivaID' => 194,
            'Titulo' => 'Overgrow',
            'Descripcion' => 'When you are below 20 HP, your Grass-type attacks deal +4 damage',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        194 => 
        array (
            'PasivaID' => 195,
            'Titulo' => 'Own Tempo',
            'Descripcion' => 'You are immune to being Confused.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        195 => 
        array (
            'PasivaID' => 196,
            'Titulo' => 'Parental Bond',
            'Descripcion' => 'After attacking, Mega Kangas-khan may immediately make the same attack again. If they hit with the second attack, do not add any die rolls to your damage, instead only using your modifier and any non-dice bonuses as damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        196 => 
        array (
            'PasivaID' => 197,
            'Titulo' => 'Pastel Veil',
            'Descripcion' => 'You and your allies within 10ft of you are immune to being Poisoned or Toxified.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        197 => 
        array (
            'PasivaID' => 198,
            'Titulo' => 'Perish Body',
            'Descripcion' => 'When you are hit by a melee attack, the offender receives 3 Perish Coats. The Coat has the following ability: After acting, destroy one of your Perish Coats. If this is the third Perish coat you’ve destroyed during this encounter, set your HP to 0.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        198 => 
        array (
            'PasivaID' => 199,
            'Titulo' => 'Pickpocket',
            'Descripcion' => 'When you are hit by a melee attack, you steal the offender’s held item, if any.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        199 => 
        array (
            'PasivaID' => 200,
            'Titulo' => 'Pixilate',
            'Descripcion' => 'Normal-type moves performed by you are treated as Fairy-type moves.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        200 => 
        array (
            'PasivaID' => 201,
            'Titulo' => 'Plus',
            'Descripcion' => 'If at least one ally has Plus or Minus within 10ft you, you have +3 Special Attack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        201 => 
        array (
            'PasivaID' => 202,
            'Titulo' => 'Poison Heal',
            'Descripcion' => 'While afflicted with Poison or Toxification, you are healed instead of damaged by those afflictions. You are cured of Poison or Toxin once you are at Max HP.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        202 => 
        array (
            'PasivaID' => 203,
            'Titulo' => 'Poison Point',
            'Descripcion' => 'Whenever you are hit with a melee attack, roll 1d4. On 4, Poison the attacker.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        203 => 
        array (
            'PasivaID' => 204,
            'Titulo' => 'Poison Touch',
            'Descripcion' => 'Whenever you hit with a melee attack, you may roll 1d6. On 6, Poison the target.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        204 => 
        array (
            'PasivaID' => 205,
            'Titulo' => 'Power of Alchemy',
            'Descripcion' => 'When an ally is knocked out within 10ft of you, you gain one of your ally’s passives for 2 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        205 => 
        array (
            'PasivaID' => 206,
            'Titulo' => 'Power Spot',
            'Descripcion' => 'Attacks made within 10ft of you deal +4 damage, regardless if the attacker is friend or foe.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        206 => 
        array (
            'PasivaID' => 207,
            'Titulo' => 'Prankster',
            'Descripcion' => 'Your attacks that do not deal damage on hit have Priority.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        207 => 
        array (
            'PasivaID' => 208,
            'Titulo' => 'Pressure',
            'Descripcion' => 'If you are hit by a 3/day attack, the attacker can’t use that attack for the remainder of the day.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        208 => 
        array (
            'PasivaID' => 209,
            'Titulo' => 'Propeller Tail',
            'Descripcion' => 'Your attacks cannot be redirected by passives or any other ability, instead only hitting a target your attack was directed at.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        209 => 
        array (
            'PasivaID' => 210,
            'Titulo' => 'Protean',
            'Descripcion' => 'You may change your type to the same type as an attack you are making while making it for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        210 => 
        array (
            'PasivaID' => 211,
            'Titulo' => 'Psychic Surge',
            'Descripcion' => 'As a free action you may deplete one use of Psychic Terrain and use Psychic Terrain.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        211 => 
        array (
            'PasivaID' => 212,
            'Titulo' => 'Punk Rock',
            'Descripcion' => 'Your sound-based attacks deal +4 damage. You take 4 less damage from sound-based attacks.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        212 => 
        array (
            'PasivaID' => 213,
            'Titulo' => 'Purest Power',
            'Descripcion' => 'Mega Medicham has +4 More Attack',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        213 => 
        array (
            'PasivaID' => 214,
            'Titulo' => 'Queenly Majesty',
            'Descripcion' => 'You may not be targeted by Priority moves that are being used out of turn order.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        214 => 
        array (
            'PasivaID' => 215,
            'Titulo' => 'Quick Draw',
            'Descripcion' => '1/day, you may give one of your moves priority.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        215 => 
        array (
            'PasivaID' => 216,
            'Titulo' => 'Quick Feet',
            'Descripcion' => 'While afflicted, your Speed is +2.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        216 => 
        array (
            'PasivaID' => 217,
            'Titulo' => 'Rain Dish',
            'Descripcion' => 'If in Raining Weather, you regain 4 HP after you act.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        217 => 
        array (
            'PasivaID' => 218,
            'Titulo' => 'Rattled',
            'Descripcion' => 'When a foe hits you with a Bug-type, Ghost-type, or Dark-type attack, your Speed is +1 for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        218 => 
        array (
            'PasivaID' => 219,
            'Titulo' => 'Receiver',
            'Descripcion' => 'When an ally is knocked out within 10ft of you, you gain one of your ally’s passives for 2 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        219 => 
        array (
            'PasivaID' => 220,
            'Titulo' => 'Reckless',
            'Descripcion' => 'Your attacks that damage yourself on hit, deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        220 => 
        array (
            'PasivaID' => 221,
            'Titulo' => 'Recycle',
            'Descripcion' => 'When using a Berry, you only use half of it while still gaining its full effects. You can only use half of a Berry if you have Recycle.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        221 => 
        array (
            'PasivaID' => 222,
            'Titulo' => 'Refrigerate',
            'Descripcion' => 'Normal-type moves performed by you are treated as Ice-type moves.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        222 => 
        array (
            'PasivaID' => 223,
            'Titulo' => 'Regenerator',
            'Descripcion' => 'When returned to a Poke Ball, you recover to Max HP after being stored for 1 hour.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        223 => 
        array (
            'PasivaID' => 224,
            'Titulo' => 'Ripen',
            'Descripcion' => 'When you use a Berry, double any effects it has.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        224 => 
        array (
            'PasivaID' => 225,
            'Titulo' => 'Rock Head',
            'Descripcion' => 'Your attacks that damage yourself on hit do not damage yourself.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        225 => 
        array (
            'PasivaID' => 226,
            'Titulo' => 'Rough Skin',
            'Descripcion' => 'Whenever you are hit with a melee attack, the attacker takes 4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        226 => 
        array (
            'PasivaID' => 227,
            'Titulo' => 'Sand Force',
            'Descripcion' => 'While in Sandstorming Weather, your Rock-type and Ground-type attacks deal +4 damage and you don’t take damage from Sandstorming weather.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        227 => 
        array (
            'PasivaID' => 228,
            'Titulo' => 'Sand Power',
            'Descripcion' => 'While in Sandstorming Weather, Mega Garchomp’s Rock-type and Ground-type attacks deal +8 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        228 => 
        array (
            'PasivaID' => 229,
            'Titulo' => 'Sand Rush',
            'Descripcion' => 'While in Sandstorming Weather, Your Speed is +2 and you don’t take damage from Sandstorming weather.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        229 => 
        array (
            'PasivaID' => 230,
            'Titulo' => 'Sand Spit',
            'Descripcion' => 'Whenever you are hit with a melee attack, use Sandstorm as a free action.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        230 => 
        array (
            'PasivaID' => 231,
            'Titulo' => 'Sand Veil',
            'Descripcion' => 'While in Sandstorming Weather, any foe’s attacks made against you have -1 during accuracy check and you don’t take damage from Sandstorming weather.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        231 => 
        array (
            'PasivaID' => 232,
            'Titulo' => 'Sand Stream',
            'Descripcion' => 'As a free action you may deplete one use of Sandstorm and use Sandstorm.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        232 => 
        array (
            'PasivaID' => 233,
            'Titulo' => 'Sand Vortex',
            'Descripcion' => 'As a free action Mega Tyranitar may use Sandstorm, even if it’s not on their move list.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        233 => 
        array (
            'PasivaID' => 234,
            'Titulo' => 'Sap Sipper',
            'Descripcion' => 'You are immune to Grass-type attacks. If you would be hit by a Grass-type attack, your Attack is +2 for 10 mins. This effect does not stack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        234 => 
        array (
            'PasivaID' => 235,
            'Titulo' => 'Schooling',
            'Descripcion' => 'When Wishiwashi is at half its HP or higher, it is in its School form. In its School form, Wishiwashi summons hundreds of fish-shaped balls of water and surrounds itself making it appear larger and making it stronger. When below 15 HP, Wishiwashi is in its Single form, dropping its façade and appearing much smaller on its own.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        235 => 
        array (
            'PasivaID' => 236,
            'Titulo' => 'Scrappy',
            'Descripcion' => 'Your Normal-type and Fighting-type attacks can hit Ghost-type targets.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        236 => 
        array (
            'PasivaID' => 237,
            'Titulo' => 'Screen Cleaner',
            'Descripcion' => 'Whenever you move through a Wall, Hazard, or adjacent to someone with a Coat, destroy all Walls, Hazards and Coats.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        237 => 
        array (
            'PasivaID' => 238,
            'Titulo' => 'Shadow Pull',
            'Descripcion' => 'Foes within 10ft of Mega Gengar cannot move away from you',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        238 => 
        array (
            'PasivaID' => 239,
            'Titulo' => 'Shed Skin',
            'Descripcion' => 'After acting, you may roll 1d4. On 4, you are cured of any afflictions.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        239 => 
        array (
            'PasivaID' => 240,
            'Titulo' => 'Sheerest Force',
            'Descripcion' => 'Mega Camerupt’s attacks that have additional effects that affect the target may deal +1d20 damage, but will not have those additional effects.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        240 => 
        array (
            'PasivaID' => 241,
            'Titulo' => 'Sheer Force',
            'Descripcion' => 'Your attacks that have additional effects that affect the target may deal +4 damage, but will not have those additional effects.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        241 => 
        array (
            'PasivaID' => 242,
            'Titulo' => 'Shell Armor',
            'Descripcion' => 'Critical hits are treated as normal hits against you',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        242 => 
        array (
            'PasivaID' => 243,
            'Titulo' => 'Shields Down',
            'Descripcion' => 'When your HP is below half of your max hit points, your form changes to Core Form and your stats change. While Minior is not in its Core Revealed from, it is immune to afflictions',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        243 => 
        array (
            'PasivaID' => 244,
            'Titulo' => 'Shield Dust',
            'Descripcion' => 'You are unaffected by additional effects from attacks that deal damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        244 => 
        array (
            'PasivaID' => 245,
            'Titulo' => 'Skill Link',
            'Descripcion' => 'Your scatter moves have +2 during Accuracy Check.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        245 => 
        array (
            'PasivaID' => 246,
            'Titulo' => 'Speed Purity',
            'Descripcion' => 'Mega Blaziken has +4 more Speed',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        246 => 
        array (
            'PasivaID' => 247,
            'Titulo' => 'Slush Rush',
            'Descripcion' => 'While in Hailing weather, your Speed is +2 and you don’t take damage from Hailing weather.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        247 => 
        array (
            'PasivaID' => 248,
            'Titulo' => 'Sniper',
            'Descripcion' => 'When you land a critical hit, you deal an additional 8 damage, applied before weakness and resistances.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        248 => 
        array (
            'PasivaID' => 249,
            'Titulo' => 'Snow Cloak',
            'Descripcion' => 'While in Hailing weather, any foe’s attacks made against you have -1 during Accuracy Check and you don’t take damage from Hailing weather',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        249 => 
        array (
            'PasivaID' => 250,
            'Titulo' => 'Snow Front',
            'Descripcion' => 'While in Hailing Weather, Mega Abomasnow’s Ice-type attacks deal +1d8 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        250 => 
        array (
            'PasivaID' => 251,
            'Titulo' => 'Snow Warning',
            'Descripcion' => 'As a free action you may deplete one use of Hail and use Hail.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        251 => 
        array (
            'PasivaID' => 252,
            'Titulo' => 'Solar Energy',
            'Descripcion' => 'While in Sunny weather, Mega Houndoom deals an additional 8 damage while attacking.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        252 => 
        array (
            'PasivaID' => 253,
            'Titulo' => 'Solar Power',
            'Descripcion' => 'While in Sunny weather, you deal an additional 4 damage while attacking. After acting in Sunny weather, you take 4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        253 => 
        array (
            'PasivaID' => 254,
            'Titulo' => 'Solid Rock',
            'Descripcion' => 'Super-effective attacks against you deal -4 damage after applying weakness.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        254 => 
        array (
            'PasivaID' => 255,
            'Titulo' => 'Soul-Heart',
            'Descripcion' => 'When an ally is knocked out within 10ft of you, your Special Attack is +1 for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        255 => 
        array (
            'PasivaID' => 256,
            'Titulo' => 'Soundproof',
            'Descripcion' => 'You are immune to sound-based attacks, like Boomburst, Bug Buzz, Chatter, Clanging Scales, Disarming Voice, Echoed Voice, Eerie Spell, Grass Whistle, Hyper Voice, Overdrive, Perish Song, Roar, Round, Sing, Snore, Sparkling Aria, Supersonic, Uproar',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        256 => 
        array (
            'PasivaID' => 257,
            'Titulo' => 'Stakeout',
            'Descripcion' => 'When you attack a target who has just joined the encounter since your last turn, you deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        257 => 
        array (
            'PasivaID' => 258,
            'Titulo' => 'Stance Change',
            'Descripcion' => 'Aegislash has two forms it constantly changes between. When you attack a foe, before making your accuracy check change into your Sword Form. When using a reaction move such as King’s Shield or Protect, or a protective move like Safeguard or Light Screen, immediately change to Shield Form.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        258 => 
        array (
            'PasivaID' => 259,
            'Titulo' => 'Static',
            'Descripcion' => 'Whenever you are hit with a melee attack, roll 1d4. On 4, Paralyze the attacker.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        259 => 
        array (
            'PasivaID' => 260,
            'Titulo' => 'Steadfast',
            'Descripcion' => 'When you are Stunned, your Speed is +1 for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        260 => 
        array (
            'PasivaID' => 261,
            'Titulo' => 'Steam Engine',
            'Descripcion' => 'When a foe hits you with a Fire-type or Water-type attack, your Speed is +2 for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        261 => 
        array (
            'PasivaID' => 262,
            'Titulo' => 'Steel Force',
            'Descripcion' => 'While in Sandstorming Weather, Mega Steelix’s Rock-type and Ground-type attacks deal +8 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        262 => 
        array (
            'PasivaID' => 263,
            'Titulo' => 'Steelworker',
            'Descripcion' => 'Your Steel-type attacks deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        263 => 
        array (
            'PasivaID' => 264,
            'Titulo' => 'Steely Spirit',
            'Descripcion' => 'Steel-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        264 => 
        array (
            'PasivaID' => 265,
            'Titulo' => 'Stench',
            'Descripcion' => 'Whenever you are hit with a melee attack, roll 1d4. On 4, Stun the attacker',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        265 => 
        array (
            'PasivaID' => 266,
            'Titulo' => 'Sticky Hold',
            'Descripcion' => 'You cannot drop held items or have held items stolen from you.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        266 => 
        array (
            'PasivaID' => 267,
            'Titulo' => 'Storm Drain',
            'Descripcion' => 'Any foe’s ranged Water-type attacks within 25ft or any adjacent foe’s Water-type attacks are negated and drawn to you. Your Special Attack is +2 until the end of your next turn whenever you negate an Water-type attack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        267 => 
        array (
            'PasivaID' => 268,
            'Titulo' => 'Strong Jaw',
            'Descripcion' => 'Your biting attacks deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        268 => 
        array (
            'PasivaID' => 269,
            'Titulo' => 'Sturdy',
            'Descripcion' => 'If you would be brought from Max HP to 0 or below, you are instead brought to 1 HP.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        269 => 
        array (
            'PasivaID' => 270,
            'Titulo' => 'Suction Cups',
            'Descripcion' => 'You cannot be moved by a foe’s attacks.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        270 => 
        array (
            'PasivaID' => 271,
            'Titulo' => 'Surge Surfer',
            'Descripcion' => 'While in Electrified terrain, your Speed is +2.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        271 => 
        array (
            'PasivaID' => 272,
            'Titulo' => 'Swarm',
            'Descripcion' => 'When you are below 20 HP, your Bug-type attacks deal +4 damage',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        272 => 
        array (
            'PasivaID' => 273,
            'Titulo' => 'Sweet Veil',
            'Descripcion' => 'You and your allies within 10ft of you are immune to being put to Sleep.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        273 => 
        array (
            'PasivaID' => 274,
            'Titulo' => 'Swifter Swim',
            'Descripcion' => 'While in Raining weather, Mega Swampert’s Speed is +4.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        274 => 
        array (
            'PasivaID' => 275,
            'Titulo' => 'Swift Swim',
            'Descripcion' => 'While in Raining weather, your Speed is +2.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        275 => 
        array (
            'PasivaID' => 276,
            'Titulo' => 'Symbiosis',
            'Descripcion' => 'You can pass held items to allies within 10ft as a free action.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        276 => 
        array (
            'PasivaID' => 277,
            'Titulo' => 'Synchronize',
            'Descripcion' => 'When you are Burned, Poisoned, Paralyzed, or Toxified by a foe, the offender is also given the same affliction.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        277 => 
        array (
            'PasivaID' => 278,
        'Titulo' => 'Tangled Feet (Spinda)',
            'Descripcion' => 'When Own Tempo prevent you from becoming confused, any foe’s attacks made against you have -1 during accuracy check for the remainder of combat.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        278 => 
        array (
            'PasivaID' => 279,
            'Titulo' => 'Tangled Feet',
            'Descripcion' => 'While you are confused, foes need to roll +1 during Accuracy Checks against you.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        279 => 
        array (
            'PasivaID' => 280,
            'Titulo' => 'Technician',
            'Descripcion' => 'When rolling damage, replace any rolled 1s or 2s with 3s.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        280 => 
        array (
            'PasivaID' => 281,
            'Titulo' => 'Telepathy',
            'Descripcion' => 'Your allies within 25ft do not harm you when the ally is using attacks that have an area of effect.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        281 => 
        array (
            'PasivaID' => 282,
            'Titulo' => 'Thick Fat',
            'Descripcion' => 'You take -4 damage from Fire-type attacks and Ice-type attacks.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        282 => 
        array (
            'PasivaID' => 283,
            'Titulo' => 'Thicker Fat',
            'Descripcion' => 'Mega Venusaur takes –6 damage from Fire-type and Ice-type attacks after applying weaknesses and resistance.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        283 => 
        array (
            'PasivaID' => 284,
            'Titulo' => 'Tinted Lens',
            'Descripcion' => 'Your resisted attacks deal +4 damage after applying weaknesses and resistance.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        284 => 
        array (
            'PasivaID' => 285,
            'Titulo' => 'Torrent',
            'Descripcion' => 'When you are below 20 HP, your Water-type attacks deal +4 damage',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        285 => 
        array (
            'PasivaID' => 286,
            'Titulo' => 'Tough Claws',
            'Descripcion' => 'Your slashing attacks deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        286 => 
        array (
            'PasivaID' => 287,
            'Titulo' => 'Tough Claws and Fangs',
            'Descripcion' => 'Mega Charizard X’s, Mega Aeridactyl\'s, and Mega Metagross\'s slashing and biting attacks deal +8 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        287 => 
        array (
            'PasivaID' => 288,
            'Titulo' => 'Toxic Boost',
            'Descripcion' => 'If you would have been Poisoned or Toxified you are not and your Attack is +2 for 2 mins. This effect does not stack',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        288 => 
        array (
            'PasivaID' => 289,
            'Titulo' => 'Trace',
            'Descripcion' => 'If Mega Alakazam is affected by a foe’s passive, Mega Alakazam gains that passive until you lose Trace.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        289 => 
        array (
            'PasivaID' => 290,
            'Titulo' => 'Triage',
            'Descripcion' => 'Any moves you know that can heal have Reaction.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        290 => 
        array (
            'PasivaID' => 291,
            'Titulo' => 'Truant',
            'Descripcion' => 'You can’t act on a round after a round where you have acted. Truant cannot be removed or disabled by any means.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        291 => 
        array (
            'PasivaID' => 292,
            'Titulo' => 'Unnerve',
            'Descripcion' => 'Foes within 25ft of you cannot consume food.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        292 => 
        array (
            'PasivaID' => 293,
            'Titulo' => 'Very Limber',
            'Descripcion' => 'Mega Lopunny are immune to being Paralyzed. Mega Lopunny has +2 more Speed',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        293 => 
        array (
            'PasivaID' => 294,
            'Titulo' => 'Vital Spirit',
            'Descripcion' => 'You are immune to being put to Sleep.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        294 => 
        array (
            'PasivaID' => 295,
            'Titulo' => 'Volt Absorb',
            'Descripcion' => 'When you are hit by an electric-type attack, half the damage, then you heal that much HP instead of taking damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        295 => 
        array (
            'PasivaID' => 296,
            'Titulo' => 'Wandering Spirit',
            'Descripcion' => 'Whenever you are hit with a melee attack, you gain all of the offender’s Not-Stat passives and lose Wandering Spirit, then they gain Wandering Spirit and lose all of their Not-Stat Passives for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        296 => 
        array (
            'PasivaID' => 297,
        'Titulo' => 'Water Absorb (Maractus)',
            'Descripcion' => 'When you negate a water-type attack, heal half the amount of damage your would have taken if you had not negated the attack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        297 => 
        array (
            'PasivaID' => 298,
            'Titulo' => 'Water Absorb',
            'Descripcion' => 'When you are hit by a water-type attack, half the damage, then you heal that much HP instead of taking damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        298 => 
        array (
            'PasivaID' => 299,
            'Titulo' => 'Water Bubble',
            'Descripcion' => 'You take -4 damage from Fire-type attacks. You add +4 damage to Water-type attacks. You are immune to being Burned.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        299 => 
        array (
            'PasivaID' => 300,
            'Titulo' => 'Water Compaction',
            'Descripcion' => 'When a foe hits you with a Water-type attack, your Defense is +2 for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        300 => 
        array (
            'PasivaID' => 301,
            'Titulo' => 'Water Veil',
            'Descripcion' => 'You are immune to being Burned.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        301 => 
        array (
            'PasivaID' => 302,
            'Titulo' => 'Weak Armor',
            'Descripcion' => 'When you are hit by a melee attack, Your Defense is -3 and your Speed is +3 for 10 mins. This does not stack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        302 => 
        array (
            'PasivaID' => 303,
            'Titulo' => 'White Smoke',
            'Descripcion' => 'Your stats cannot be lowered by a foe’s effects.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        303 => 
        array (
            'PasivaID' => 304,
            'Titulo' => 'Wonder Guard',
            'Descripcion' => 'Shedinja is immune to attacks that are not super-effective. Wonder Guard cannot be removed or disabled by any means.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        304 => 
        array (
            'PasivaID' => 305,
            'Titulo' => 'Wonder Skin',
            'Descripcion' => 'Your stats cannot be lowered by a foe’s effects.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        305 => 
        array (
            'PasivaID' => 306,
            'Titulo' => 'Zen Mode',
            'Descripcion' => 'Darmanitan changes to its Zen Form when it is below half of its max HP.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        306 => 
        array (
            'PasivaID' => 307,
            'Titulo' => 'All Out',
            'Descripcion' => 'When you are below 20 HP, your Fighting-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        307 => 
        array (
            'PasivaID' => 308,
            'Titulo' => 'Deep Freeze',
            'Descripcion' => 'When you are below 20 HP, your Ice-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        308 => 
        array (
            'PasivaID' => 309,
            'Titulo' => 'Dimming Light',
            'Descripcion' => 'When you are below 20 HP, your Dark-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        309 => 
        array (
            'PasivaID' => 310,
            'Titulo' => 'Dreaded',
            'Descripcion' => 'When you are below 20 HP, your Ghost-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        310 => 
        array (
            'PasivaID' => 311,
            'Titulo' => 'Freefall',
            'Descripcion' => 'When you are below 20 HP, your Flying-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        311 => 
        array (
            'PasivaID' => 312,
            'Titulo' => 'Last Chance',
            'Descripcion' => 'When you are below 20 HP, your Normal-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        312 => 
        array (
            'PasivaID' => 313,
            'Titulo' => 'Mind Fortress',
            'Descripcion' => 'When you are below 20 HP, your Psychic-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        313 => 
        array (
            'PasivaID' => 314,
            'Titulo' => 'Overdose',
            'Descripcion' => 'When you are below 20 HP, your Poison-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        314 => 
        array (
            'PasivaID' => 315,
            'Titulo' => 'Shattering',
            'Descripcion' => 'When you are below 20 HP, your Rock-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        315 => 
        array (
            'PasivaID' => 316,
            'Titulo' => 'Sinkhole',
            'Descripcion' => 'When you are below 20 HP, your Ground-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        316 => 
        array (
            'PasivaID' => 317,
            'Titulo' => 'Sparking',
            'Descripcion' => 'When you are below 20 HP, your Electric-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        317 => 
        array (
            'PasivaID' => 318,
            'Titulo' => 'Spritespell',
            'Descripcion' => 'When you are below 20 HP, your Fairy-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        318 => 
        array (
            'PasivaID' => 319,
            'Titulo' => 'Unbreakable',
            'Descripcion' => 'When you are below 20 HP, your Steel-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        319 => 
        array (
            'PasivaID' => 320,
            'Titulo' => 'Wyrmflare',
            'Descripcion' => 'When you are below 20 HP, your Dragon-type attacks deal +4 damage.',
            'TipoPasivaID' => 9,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        320 => 
        array (
            'PasivaID' => 321,
            'Titulo' => 'Darken',
            'Descripcion' => 'Normal-type moves performed by you are treated as Dark-type moves.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        321 => 
        array (
            'PasivaID' => 322,
            'Titulo' => 'Draconize',
            'Descripcion' => 'Normal-type moves performed by you are treated as Dragon-type attacks.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:14:59',
            'updated_at' => '2023-04-29 16:14:59',
        ),
        322 => 
        array (
            'PasivaID' => 323,
            'Titulo' => 'Inflariate',
            'Descripcion' => 'Normal-type moves performed by you are treated as Fire-type moves.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        323 => 
        array (
            'PasivaID' => 324,
            'Titulo' => 'Granitize',
            'Descripcion' => 'Normal-type moves performed by you are treated as Rock-type attacks.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        324 => 
        array (
            'PasivaID' => 325,
            'Titulo' => 'Hydrate',
            'Descripcion' => 'Normal-type moves performed by you are treated as Water-type moves.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        325 => 
        array (
            'PasivaID' => 326,
            'Titulo' => 'Martialize',
            'Descripcion' => 'Normal-type moves performed by you are treated as Fighting-type moves.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        326 => 
        array (
            'PasivaID' => 327,
            'Titulo' => 'Metalcoating',
            'Descripcion' => 'Normal-type moves performed by you are treated as Steel-type moves.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        327 => 
        array (
            'PasivaID' => 328,
            'Titulo' => 'Plantify',
            'Descripcion' => 'Normal-type moves performed by you are treated as Grass-type moves.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        328 => 
        array (
            'PasivaID' => 329,
            'Titulo' => 'Psionate',
            'Descripcion' => 'Normal-type moves performed by you are treated as Psychic-type attacks.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        329 => 
        array (
            'PasivaID' => 330,
            'Titulo' => 'Quakate',
            'Descripcion' => 'Normal-type moves performed by you are treated as Ground-type attacks.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        330 => 
        array (
            'PasivaID' => 331,
            'Titulo' => 'Scuttlize',
            'Descripcion' => 'Normal-type moves performed by you are treated as Bug-type attacks.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        331 => 
        array (
            'PasivaID' => 332,
            'Titulo' => 'Spookify',
            'Descripcion' => 'Normal-type moves performed by you are treated as Ghost-type attacks.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        332 => 
        array (
            'PasivaID' => 333,
            'Titulo' => 'Toxicate',
            'Descripcion' => 'Normal-type moves performed by you are treated as Poison-type moves.',
            'TipoPasivaID' => 10,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        333 => 
        array (
            'PasivaID' => 334,
            'Titulo' => 'Bland',
            'Descripcion' => 'Your Normal-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        334 => 
        array (
            'PasivaID' => 335,
            'Titulo' => 'Cold',
            'Descripcion' => 'Your Ice-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        335 => 
        array (
            'PasivaID' => 336,
            'Titulo' => 'Combative',
            'Descripcion' => 'Your Fighting-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        336 => 
        array (
            'PasivaID' => 337,
            'Titulo' => 'Corrupted',
            'Descripcion' => 'Your Dark-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        337 => 
        array (
            'PasivaID' => 338,
            'Titulo' => 'Draconian',
            'Descripcion' => 'Your Dragon-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        338 => 
        array (
            'PasivaID' => 339,
            'Titulo' => 'Grounded',
            'Descripcion' => 'Your Ground-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        339 => 
        array (
            'PasivaID' => 340,
            'Titulo' => 'Esper',
            'Descripcion' => 'Your Psychic-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        340 => 
        array (
            'PasivaID' => 341,
            'Titulo' => 'Fae',
            'Descripcion' => 'Your Fairy-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        341 => 
        array (
            'PasivaID' => 342,
            'Titulo' => 'Flaming',
            'Descripcion' => 'Your Fire-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        342 => 
        array (
            'PasivaID' => 343,
            'Titulo' => 'Ingrown',
            'Descripcion' => 'Your Grass-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        343 => 
        array (
            'PasivaID' => 344,
            'Titulo' => 'Insectoid',
            'Descripcion' => 'Your Bug-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        344 => 
        array (
            'PasivaID' => 345,
            'Titulo' => 'Livewire',
            'Descripcion' => 'Your Electric-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        345 => 
        array (
            'PasivaID' => 346,
            'Titulo' => 'Poisonous',
            'Descripcion' => 'Your Poison-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        346 => 
        array (
            'PasivaID' => 347,
            'Titulo' => 'Spirit',
            'Descripcion' => 'Your Ghost-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        347 => 
        array (
            'PasivaID' => 348,
            'Titulo' => 'Stoneskin',
            'Descripcion' => 'Your Rock-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        348 => 
        array (
            'PasivaID' => 349,
            'Titulo' => 'Watery',
            'Descripcion' => 'Your Water-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        349 => 
        array (
            'PasivaID' => 350,
            'Titulo' => 'Winged',
            'Descripcion' => 'Your Flying-type attacks deal +4 damage.',
            'TipoPasivaID' => 11,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        350 => 
        array (
            'PasivaID' => 351,
            'Titulo' => 'Buggy Spirit',
            'Descripcion' => 'Bug-type attacks used within 10ft of you by your-self or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        351 => 
        array (
            'PasivaID' => 352,
            'Titulo' => 'Dark Spirit',
            'Descripcion' => 'Dark-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        352 => 
        array (
            'PasivaID' => 353,
            'Titulo' => 'Draconian Spirit',
            'Descripcion' => 'Dragon-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        353 => 
        array (
            'PasivaID' => 354,
            'Titulo' => 'Fairy Spirit',
            'Descripcion' => 'Fairy-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        354 => 
        array (
            'PasivaID' => 355,
            'Titulo' => 'Fiery Spirit',
            'Descripcion' => 'Fire-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        355 => 
        array (
            'PasivaID' => 356,
            'Titulo' => 'Fighting Spirit',
            'Descripcion' => 'Fighting-type attacks used within 10ft of you by your-self or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        356 => 
        array (
            'PasivaID' => 357,
            'Titulo' => 'Flighty Spirit',
            'Descripcion' => 'Flying-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        357 => 
        array (
            'PasivaID' => 358,
            'Titulo' => 'Ghastly Spirit',
            'Descripcion' => 'Ghost-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        358 => 
        array (
            'PasivaID' => 359,
            'Titulo' => 'Grassy Spirit',
            'Descripcion' => 'Grass-type attacks used within 10ft of you by your-self or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        359 => 
        array (
            'PasivaID' => 360,
            'Titulo' => 'Grounded Spirit',
            'Descripcion' => 'Ground-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        360 => 
        array (
            'PasivaID' => 361,
            'Titulo' => 'Icy Spirit',
            'Descripcion' => 'Ice-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        361 => 
        array (
            'PasivaID' => 362,
            'Titulo' => 'Normy Spirit',
            'Descripcion' => 'Poison-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        362 => 
        array (
            'PasivaID' => 363,
            'Titulo' => 'Poisonous Spirit',
            'Descripcion' => 'Poison-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        363 => 
        array (
            'PasivaID' => 364,
            'Titulo' => 'Psychy Spirit',
            'Descripcion' => 'Psychic-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        364 => 
        array (
            'PasivaID' => 365,
            'Titulo' => 'Rocky Spirit',
            'Descripcion' => 'Rock-type attacks used within 10ft of you by your-self or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        365 => 
        array (
            'PasivaID' => 366,
            'Titulo' => 'Watery Spirit',
            'Descripcion' => 'Water-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        366 => 
        array (
            'PasivaID' => 367,
            'Titulo' => 'Zappy Spirit',
            'Descripcion' => 'Electric-type attacks used within 10ft of you by yourself or allies deal +4 damage.',
            'TipoPasivaID' => 12,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        367 => 
        array (
            'PasivaID' => 368,
            'Titulo' => 'Alacrity',
            'Descripcion' => 'Your Speed cannot be lowered by a foe’s effects.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        368 => 
        array (
            'PasivaID' => 369,
            'Titulo' => 'Benefactor',
            'Descripcion' => 'If any ally is knocked out within 10ft of you, you gain any temporary stat bonuses they had until those bonuses would expire.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        369 => 
        array (
            'PasivaID' => 370,
            'Titulo' => 'Carry On',
            'Descripcion' => 'Whenever an ally is knocked out, recover 1d6 HP.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        370 => 
        array (
            'PasivaID' => 371,
            'Titulo' => 'Close Quarters',
            'Descripcion' => 'Add +1 during accuracy check whenever you use a melee attack.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        371 => 
        array (
            'PasivaID' => 372,
            'Titulo' => 'Critastrophe',
            'Descripcion' => 'Your critical hits deal double the result of your rolled damage instead of dealing the maximum result possible.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        372 => 
        array (
            'PasivaID' => 373,
            'Titulo' => 'Dauntless',
            'Descripcion' => 'Your Special Attack cannot be lowered by a foe’s effects.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        373 => 
        array (
            'PasivaID' => 374,
            'Titulo' => 'Devious Entrance',
            'Descripcion' => 'As a free action you may deplete one use of Toxic Spikes and use Toxic Spikes.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        374 => 
        array (
            'PasivaID' => 375,
            'Titulo' => 'Dynamic Entry',
            'Descripcion' => 'You have +3 to your first accuracy check each combat.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        375 => 
        array (
            'PasivaID' => 376,
            'Titulo' => 'Enduring',
            'Descripcion' => 'You can only be knocked out when you are at 1 HP.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        376 => 
        array (
            'PasivaID' => 377,
            'Titulo' => 'Escape Artist',
            'Descripcion' => 'You are immune to being bound and cannot have your movement restricted.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        377 => 
        array (
            'PasivaID' => 378,
            'Titulo' => 'Gassy',
            'Descripcion' => 'As a free action you may deplete one use of Smoke Screen and use Smoke Screen.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        378 => 
        array (
            'PasivaID' => 379,
            'Titulo' => 'Gravitoid',
            'Descripcion' => 'As a free action you may deplete one use of Stealth Rock and use Stealth Rock.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        379 => 
        array (
            'PasivaID' => 380,
            'Titulo' => 'Gritty',
            'Descripcion' => 'While afflicted, you have +1 Defense and +1 Special Defense.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        380 => 
        array (
            'PasivaID' => 381,
            'Titulo' => 'Haymaker',
            'Descripcion' => 'When calculating damage, apply your relevant modi-fier twice.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        381 => 
        array (
            'PasivaID' => 382,
            'Titulo' => 'Herald',
            'Descripcion' => 'If any allies within 10ft have no stat passives, they have your stat passives.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        382 => 
        array (
            'PasivaID' => 383,
            'Titulo' => 'Impervious',
            'Descripcion' => 'Your stats cannot be lowered.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        383 => 
        array (
            'PasivaID' => 384,
            'Titulo' => 'Jackstones',
            'Descripcion' => 'As a free action you may deplete one use of Spikes and use Spikes.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        384 => 
        array (
            'PasivaID' => 385,
            'Titulo' => 'Last Breath',
            'Descripcion' => 'When knocked out by an attack, all adjacent allies recover 1d12 HP.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        385 => 
        array (
            'PasivaID' => 386,
            'Titulo' => 'No Quarter',
            'Descripcion' => 'Your attacks made against Stunned or bound target deal +4 damage.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        386 => 
        array (
            'PasivaID' => 387,
            'Titulo' => 'Reformation',
            'Descripcion' => 'The first time you take damage during combat, recover 1d12 HP.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        387 => 
        array (
            'PasivaID' => 388,
            'Titulo' => 'Resilience',
            'Descripcion' => 'You cannot receive any afflictions if you’ve already been cured of an affliction during the same combat.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        388 => 
        array (
            'PasivaID' => 389,
            'Titulo' => 'Resistance Up',
            'Descripcion' => 'While below half HP, you have +2 Special De-fense.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        389 => 
        array (
            'PasivaID' => 390,
            'Titulo' => 'Restoration',
            'Descripcion' => 'Whenever you recover HP, recover an additional 1d6 HP.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        390 => 
        array (
            'PasivaID' => 391,
            'Titulo' => 'Ridicure',
            'Descripcion' => 'Whenever a foe fails to hit an attack where you were a possible target, recover 1d4 HP.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        391 => 
        array (
            'PasivaID' => 392,
            'Titulo' => 'Sand Shelter',
            'Descripcion' => 'You take no damage from Sandstorming weather.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        392 => 
        array (
            'PasivaID' => 393,
            'Titulo' => 'Shields Up',
            'Descripcion' => 'While below half HP, you have +2 Defense.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        393 => 
        array (
            'PasivaID' => 394,
            'Titulo' => 'Side Effects',
            'Descripcion' => 'When attacking a foe who recovered HP since your last turn, you deal +1d12 damage on hit.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        394 => 
        array (
            'PasivaID' => 395,
            'Titulo' => 'Snow Shelter',
            'Descripcion' => 'You take no damage from Hailing weather.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        395 => 
        array (
            'PasivaID' => 396,
            'Titulo' => 'Stalwart',
            'Descripcion' => 'Your Special Defense cannot be lowered by a foe’s effects.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        396 => 
        array (
            'PasivaID' => 397,
            'Titulo' => 'Standfast',
            'Descripcion' => 'While Stunned, you have +3 Defense and +3 Special Defense.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        397 => 
        array (
            'PasivaID' => 398,
            'Titulo' => 'Viral',
            'Descripcion' => 'When you successfully afflict a target, any adjacent foes are also afflicted with the same affliction.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        398 => 
        array (
            'PasivaID' => 399,
            'Titulo' => 'Unyielding',
            'Descripcion' => 'If you at half of your max HP or less, you cannot take more than 20 damage at a time.',
            'TipoPasivaID' => 13,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        399 => 
        array (
            'PasivaID' => 400,
            'Titulo' => 'Genesis Panic',
            'Descripcion' => 'When your HP is at 40 or less HP, all of your attacks become At-Will frequency. If you use a move that you normally would not be able to use any more per day due to its frequency, you lose 1d12 HP when you use it.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        400 => 
        array (
            'PasivaID' => 401,
            'Titulo' => 'Mindslaver',
        'Descripcion' => 'When Mewtwo hits with a Psychic-type attack, the target must make a Concentration skill check of 11 or higher (Pokémon roll without adding anything). If they fail, Mewtwo may choose to deal no damage with the attack but now decides how the target acts on their turns until they make a Concentration Skill check of 16 or higher on their turn or Mewtwo dismisses them from control.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        401 => 
        array (
            'PasivaID' => 402,
            'Titulo' => 'Beast Boost',
            'Descripcion' => 'Whenever you knock out a foe, your highest stat is raised +1 for 10 mins.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        402 => 
        array (
            'PasivaID' => 403,
            'Titulo' => 'RKS System',
            'Descripcion' => 'Silvally changes its type depending on which Memory is held by Silvally',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        403 => 
        array (
            'PasivaID' => 404,
            'Titulo' => 'Folding Form',
            'Descripcion' => 'Once per turn as a free action, Genesect can change into its Folded Form or back into its regular form. While in its aerodynamic Folded Form, its Speed is 25, but Genesect cannot attack.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        404 => 
        array (
            'PasivaID' => 405,
            'Titulo' => 'Force Field',
            'Descripcion' => '+5 Defense, +5 Special Defense',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        405 => 
        array (
            'PasivaID' => 406,
            'Titulo' => 'Birds of Legend',
            'Descripcion' => 'You are compelled to compete for dominance in the presence of other Birds of Legend.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        406 => 
        array (
            'PasivaID' => 407,
            'Titulo' => 'Legendary Sprint',
            'Descripcion' => 'If you move in one direction for more than 100 ft, your Speed becomes 30 until you change direction or stop. While moving at this speed, you may run over any terrain.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        407 => 
        array (
            'PasivaID' => 408,
            'Titulo' => 'Guardian Deity',
        'Descripcion' => 'When at the post you are guarding (temple, shrine, sacred ground), you take 10 less damage from any attack.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        408 => 
        array (
            'PasivaID' => 409,
            'Titulo' => 'Guardian Sync',
            'Descripcion' => 'When you are with at least one other Guardian and at least one ally’s Guardian Deity is active, your HP is 420.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        409 => 
        array (
            'PasivaID' => 410,
            'Titulo' => 'Swords of Justice',
            'Descripcion' => 'Whenever you are fighting alongside another Sword of Justice, your attacks deal +6 damage. In addition, your Defense and Special Defense is +1 for each other Sword of Justice you are fighting alongside.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        410 => 
        array (
            'PasivaID' => 411,
            'Titulo' => 'Force of Nature',
            'Descripcion' => 'As a free action, you may change into your Therian Form, or change back into your Incarnate Form.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        411 => 
        array (
            'PasivaID' => 412,
            'Titulo' => 'Hex Nut Fist',
            'Descripcion' => 'Your punching attacks deal +8 damage.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        412 => 
        array (
            'PasivaID' => 413,
            'Titulo' => 'Legendary Flight',
            'Descripcion' => 'If you move in one direction for more than 100 ft, your Speed becomes 30 until you change direction or stop.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        413 => 
        array (
            'PasivaID' => 414,
            'Titulo' => 'Legendary Titans',
            'Descripcion' => 'When gathered with at least two other Legendary Titans, Regigigas is compelled to awaken if nearby.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        414 => 
        array (
            'PasivaID' => 415,
            'Titulo' => 'Transistor',
            'Descripcion' => 'Electric-type attacks used within 100ft of you deal +8 damage.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        415 => 
        array (
            'PasivaID' => 416,
            'Titulo' => 'Dragon\'s Maw',
            'Descripcion' => 'Dragon-type attacks used within 100ft of you deal +8 damage.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        416 => 
        array (
            'PasivaID' => 417,
            'Titulo' => 'Monstrous Strength',
            'Descripcion' => 'Regigigas can move mountains by shoving them as quickly as it can move.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        417 => 
        array (
            'PasivaID' => 418,
            'Titulo' => 'Slow Start',
            'Descripcion' => 'At the beginning of each of its turns, Regigigas gets +2 Attack, +2 Special Attack, and +2 Speed unless those stats are at 20 or higher. Then, if Regigigas uses Giga Impact or Hyper Beam while any of its stats are at 20 or higher, its Attack, Special Attack, and Speed are reset to 2 each and all of its frequencies are refreshed as if Regigigas has taken a long rest.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        418 => 
        array (
            'PasivaID' => 419,
            'Titulo' => 'Master of Birds',
            'Descripcion' => 'You are compelled to quell fighting between Articuno, Zapdos, and Moltres.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        419 => 
        array (
            'PasivaID' => 420,
            'Titulo' => 'Guardian Multiscale',
            'Descripcion' => 'When you are above half Max HP, you take -1d20 damage from all attacks.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        420 => 
        array (
            'PasivaID' => 421,
            'Titulo' => 'Master of Beasts',
            'Descripcion' => 'You are compelled to protect Raikou, Entei, and Suicune when any of them are in danger and you are nearby.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        421 => 
        array (
            'PasivaID' => 422,
            'Titulo' => 'Prince of the Sea',
            'Descripcion' => 'You are compelled to protect the ocean.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        422 => 
        array (
            'PasivaID' => 423,
            'Titulo' => 'Guardian of the Forest',
            'Descripcion' => 'You are compelled to protect forests.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        423 => 
        array (
            'PasivaID' => 424,
            'Titulo' => 'Victory Star',
            'Descripcion' => '+5 to accuracy checks',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        424 => 
        array (
            'PasivaID' => 425,
            'Titulo' => 'Sky Warrior',
            'Descripcion' => 'As a free action, you may change into your Sky Form, or change back into your Land Form.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        425 => 
        array (
            'PasivaID' => 426,
            'Titulo' => 'Chilling Neigh',
            'Descripcion' => 'When you knock out a foe, your Attack is +2 for 10 mins.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        426 => 
        array (
            'PasivaID' => 427,
            'Titulo' => 'Mount',
            'Descripcion' => 'As a free action, Calyrex can begin to ride you. While mounted, you both move using the Speed of Calyrex Ice or Shadow Rider. When acting, you both act at the same time and you both make attacks during the Calyrex Ice or Shadow Rider’s turn. You are only knocked out once Calyrex Ice or Shadow Rider is knocked out. As a free action, Calyrex can dismount. Whenever Calyrex dismounts from you, your HP is set to 100.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        427 => 
        array (
            'PasivaID' => 428,
            'Titulo' => 'Grim Neigh',
            'Descripcion' => 'When you knock out a foe, your Special Attack is +2 for 10 mins',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        428 => 
        array (
            'PasivaID' => 429,
            'Titulo' => 'Rider',
            'Descripcion' => 'As a free action, Calyrex can mount Glastrier or Spectrier to become Calyrex Ice Rider or Calyrex Shadow Rider respectively. Whenever you mount, you recover to full HP in your new form. You gain all of the moves of Glastrier or Spectrier when you mount them while retaining your moves. As a free action, you may also dismount. When you dismount, your mount is set to their full HP, but you lose HP from your full HP equal to the amount of HP you lost while in your Ice Rider or Shadow Rider form.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        429 => 
        array (
            'PasivaID' => 430,
            'Titulo' => 'Unseen Fist',
            'Descripcion' => 'Your moves cannot be prevented by a Reaction move.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        430 => 
        array (
            'PasivaID' => 431,
            'Titulo' => 'Bad Dreams',
            'Descripcion' => 'Foes who are Asleep lose 20 HP on your turn when within 30 ft of you.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        431 => 
        array (
            'PasivaID' => 432,
            'Titulo' => 'Intrepid Sword',
            'Descripcion' => '+6 Attack',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        432 => 
        array (
            'PasivaID' => 433,
            'Titulo' => 'Relic of Heroes',
            'Descripcion' => 'If you are in possession of your Hero Relic, you are in your Crowned form.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        433 => 
        array (
            'PasivaID' => 434,
            'Titulo' => 'Dauntless Shield',
            'Descripcion' => '+6 Defense',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        434 => 
        array (
            'PasivaID' => 435,
            'Titulo' => 'Guardian of Sunlight',
            'Descripcion' => 'While in sunlight, you deal +1d12 damage with your attacks.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        435 => 
        array (
            'PasivaID' => 436,
            'Titulo' => 'Guardian of Moonlight',
            'Descripcion' => 'While in moonlight, you deal +1d12 damage with your attacks.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        436 => 
        array (
            'PasivaID' => 437,
            'Titulo' => 'Trespasser Hunter',
            'Descripcion' => 'Your attacks against Ultra Beasts, Solgaleo, or Lunala deal +1d12 damage.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        437 => 
        array (
            'PasivaID' => 438,
            'Titulo' => 'Neuroforce',
            'Descripcion' => 'Your super effective and extremely effective attacks add an additional die to their damage rolls. Super effective attacks made against you are treated as regular attacks. Extremely effective attacks made against you are treated as super effective attacks.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        438 => 
        array (
            'PasivaID' => 439,
            'Titulo' => 'Pillager of Light',
            'Descripcion' => 'Necrozma can possess Solgaleo to become its Dusk Mane form or Lunala to become its Dawn Wings form. If Necrozma is able to posses both of them, it becomes its Ultra Mantle form. Necrozma only needs to touch Solgaleo or Lunala to possess them. Solgaleo or Lunala can only escape from Necrozma once Necrozma is knocked out. Necrozma also gains the moves of whoever Necrozma is possessing. When separating from Lunala, Solgaleo, or both; if you had more HP than any of their individual max HPs they are set to their max HP, otherwise each Pokémon is set to the HP you were at when you separated.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        439 => 
        array (
            'PasivaID' => 440,
            'Titulo' => 'Primordial Sea',
            'Descripcion' => 'As a free action you may use Rain Dance ignoring its frequency.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        440 => 
        array (
            'PasivaID' => 441,
            'Titulo' => 'Master of the Sea',
            'Descripcion' => 'If you encounter Groudon, you are compelled to flood the lands and fight them.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        441 => 
        array (
            'PasivaID' => 442,
            'Titulo' => 'Master of the Land',
            'Descripcion' => 'If you encounter Kyogre, you are compelled to evaporate the seas and fight them.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        442 => 
        array (
            'PasivaID' => 443,
            'Titulo' => 'Desolate Land',
            'Descripcion' => 'As a free action you may use Sunny Day ignoring its frequency.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        443 => 
        array (
            'PasivaID' => 444,
            'Titulo' => 'Air Lock',
            'Descripcion' => 'As a free action you may use Defog ignoring its frequency.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        444 => 
        array (
            'PasivaID' => 445,
            'Titulo' => 'Master of the Skies',
            'Descripcion' => 'You are compelled to quell any fighting between Kyogre and Groudon.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        445 => 
        array (
            'PasivaID' => 446,
            'Titulo' => 'Delta Stream',
            'Descripcion' => 'Your foes do not add dice to their attacks for super effective or extremely effective attacks due to your Flying-type.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        446 => 
        array (
            'PasivaID' => 447,
            'Titulo' => 'Turboblaze',
            'Descripcion' => 'Your attacks ignore any passives that would redirect, negate or weaken them.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        447 => 
        array (
            'PasivaID' => 448,
            'Titulo' => 'Teravolt',
            'Descripcion' => 'Your attacks ignore any passives that would redirect, negate or weaken them.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        448 => 
        array (
            'PasivaID' => 449,
            'Titulo' => 'Terafrost',
            'Descripcion' => 'Your attacks ignore any passives that would redirect, negate or weaken them.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        449 => 
        array (
            'PasivaID' => 450,
            'Titulo' => 'Unity of Energy',
            'Descripcion' => 'Kyurem can fuse with Reshiram to become its White Fusion form or Zekrom to become its Black Fusion form. Kyurem only needs to touch Reshiram or Zekrom to combine with them. Reshiram or Zekrom can only part from Kyurem’s hold once Kyurem is knocked out. Kyurem also gains the moves of whoever Kyurem is fused with. When separating from Reshiram or Zekrom; if you had more HP than any of their individual max HPs they are set to their max HP, otherwise each Pokémon is set to the HP you were at when you separated.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        450 => 
        array (
            'PasivaID' => 451,
            'Titulo' => 'Fairy Aura',
            'Descripcion' => 'Fairy-type attacks deal +10 damage within 25ft of you',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        451 => 
        array (
            'PasivaID' => 452,
            'Titulo' => 'Dark Aura',
            'Descripcion' => 'Dark-type attacks deal +10 damage within 25ft of you.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        452 => 
        array (
            'PasivaID' => 453,
            'Titulo' => 'Aura Break',
            'Descripcion' => 'Dark-type and Fairy-type type attacks deal -10 damage within 50ft of you. The Fairy Aura and Dark Aura Legendary Passives do not work within 50 ft of you',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        453 => 
        array (
            'PasivaID' => 454,
            'Titulo' => 'Life of the Land',
            'Descripcion' => 'Zygarde operates as tens of thousands of individual cells that observe the ecosystem while spread across world. An individual cell cannot battle and has only 6 HP. When a group of ten are together, Zygarde can combine and act as its 10% form. When a group of one-hundred are together, Zygarde can combine and act as its 50% form. When a group at least three-hundred are together, Zygarde can combine and act as its Complete form. Higher forms have access to the moves and abilities of lesser Zygarde forms..',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        454 => 
        array (
            'PasivaID' => 455,
            'Titulo' => 'God of Time',
        'Descripcion' => 'Dialga can warp time by either speeding it up, slowing it down, or stopping it altogether at-will. It can also travel through time to visit the past, present, and future. Others near Dialga when it freezes time may try and break free of manipulated time with a Concentration or Constitution check of 16 or higher on their turns (Pokémon do not add any modifiers).',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        455 => 
        array (
            'PasivaID' => 456,
            'Titulo' => 'God of Space',
        'Descripcion' => 'Palkia can warp space by either making space harder to move through, easier to move through, or by halting things within it altogether at-will. It can also travel through space instantaneously to go anywhere it wants and can even move into parallel worlds. Others near Palkia when it manipulates space may try and break free of manipulated space with a Concentration or Constitution check of 16 or higher on their turns (Pokémon do not add any modifiers).',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        456 => 
        array (
            'PasivaID' => 457,
            'Titulo' => 'Master of the Distortion World',
        'Descripcion' => 'Giratina can freely move between the Distortion World and the real world. When moving to and from the Distortion World, it opens a portal that remains open for five seconds. When in the Distortion World, or while bringing a shard of its power into the real world, Giratina is in its Origin Form. While in the real world, Giratina is in its Altered Form. In the Distortion World, Giratina can warp time and space at-will, travel through space instantaneously to go anywhere it wants, and travel through time to visit the past, present, and future. Others near Giratina when it manipulates time and space may try and break free of manipulated reality with a Concentration or Constitution check of 16 or higher on their turns (Pokémon do not add any modifiers).',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        457 => 
        array (
            'PasivaID' => 458,
            'Titulo' => 'Darkest Day',
            'Descripcion' => 'Eternatus is a mobile Power Spot. It can Eternamax at-will as a free action and other Pokémon can Dynamax or Gigantamax when near it. Eternatus can remain Eternamaxed indefinitely. While Eternamaxed, it is treated as a Dynamax Pokémon, but may still use its non-Dynamax moves and is not restricted in its movement.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        458 => 
        array (
            'PasivaID' => 459,
            'Titulo' => 'Multitype',
            'Descripcion' => 'As a free action, or as a free reaction, you can change your type to any type once per round. You can change your type before your attack’s damage or even before taking damage. You cannot have more than one type at a time.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        459 => 
        array (
            'PasivaID' => 460,
            'Titulo' => 'Creator',
            'Descripcion' => 'Once per round, Arceus can gain any passive or legendary passive until their next turn. Arceus cannot gain the same passive or legendary passive this way more than once per combat.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        460 => 
        array (
            'PasivaID' => 461,
            'Titulo' => 'Golden Regenerator',
            'Descripcion' => 'You recover to Max HP and remove any failed death savings throws after resting for 1 hour.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        461 => 
        array (
            'PasivaID' => 462,
            'Titulo' => 'Master of the Temporal World',
        'Descripcion' => 'Dialga can freely move between the Temporal World and the real world. When moving to and from the Temporal World, it opens a portal that remains open for five seconds. In the Temporal World, Dialga can freely warp time at-will and travel through time to visit the past, present, and future. Others near Dialga when it manipulates time in the Temporal World may try and break free of manipulated reality with a Concentration or Constitution check of 18 or higher on their turns (Pokémon do not add any modifiers). When Dialga is serving as a protector of the universe, when it is at peace with space, or when it is in the possession of the Adamant Crystal, it can revert to its Origin Form at-will.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        462 => 
        array (
            'PasivaID' => 463,
            'Titulo' => 'Master of the Spatial World',
        'Descripcion' => 'Palkia can freely move between the Spatial World and the real world. When moving to and from the Spatial World, it opens a portal that remains open for five seconds. In the Spatial World, Palkia can freely warp space at-will and travel any distance instantly. Others near Palkia when it manipulates space in the Spatial World may try and break free of manipulated reality with a Concentration or Constitution check of 18 or higher on their turns (Pokémon do not add any modifiers). When Palkia is serving as a protector of the universe, when it is at peace with time, or when it is in the possession of the Lustrous Globe, it can revert to its Origin Form at-will.',
            'TipoPasivaID' => 14,
            'deleted_at' => NULL,
            'created_at' => '2023-04-29 16:15:00',
            'updated_at' => '2023-04-29 16:15:00',
        ),
        463 => 
        array (
            'PasivaID' => 464,
            'Titulo' => 'Guard Dog',
            'Descripcion' => 'If a foes effect would cause you to flee or be moved, instead your Attack is raised +1 for 10 mins',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:42:21',
            'updated_at' => '2023-08-06 21:42:21',
        ),
        464 => 
        array (
            'PasivaID' => 465,
            'Titulo' => 'Supreme Overlord',
            'Descripcion' => 'When you join combat, your Attack and Special Attack are each raised +1 for each ally who has already been knocked out in the current encounter, for 10 mins. Supreme Overlord can only raise your Attack and Special Attack each up to +4.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:43:19',
            'updated_at' => '2023-08-06 21:43:19',
        ),
        465 => 
        array (
            'PasivaID' => 466,
            'Titulo' => 'Thermal Exchange',
            'Descripcion' => 'You are immune to being Burned. When you are hit by a Fire-type attack, your Attack is +2 for 10 mins. This effect does not stack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:45:00',
            'updated_at' => '2023-08-06 21:45:00',
        ),
        466 => 
        array (
            'PasivaID' => 467,
            'Titulo' => 'Commander',
            'Descripcion' => 'When adjacent to an allied Dondozo, Tatsugiri can go into Dondozos mouth as a free action. While inside the allied Dondozos mouth, Tatsugiri cannot act and its Skills and Passives cannot be used, but the allied Dondozo has +2 to its Attack, Defense, Special Attack, Special Defense, and Speed. Additionally, Tatsugiri cannot be targeted or hit by any attacks, is unaffected by the effects of any moves, and allows the allied Dondozo to use any of Tatsugiris moves.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:46:04',
            'updated_at' => '2023-08-06 21:46:04',
        ),
        467 => 
        array (
            'PasivaID' => 468,
            'Titulo' => 'Electromorphosis',
            'Descripcion' => 'When hit by an attack that deals damage, you may use the move Charge as a free action',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:46:58',
            'updated_at' => '2023-08-06 21:46:58',
        ),
        468 => 
        array (
            'PasivaID' => 469,
            'Titulo' => 'Wind Power',
            'Descripcion' => 'When hit by a wind based attack, you may usethe move Charge as a free action.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:47:55',
            'updated_at' => '2023-08-06 21:47:55',
        ),
        469 => 
        array (
            'PasivaID' => 470,
            'Titulo' => 'Well-Baked Body',
            'Descripcion' => 'You are immune to Fire-type attacks. When you are hit by Fire-type attacks, instead your Defense is +2 for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:48:44',
            'updated_at' => '2023-08-06 21:48:44',
        ),
        470 => 
        array (
            'PasivaID' => 471,
            'Titulo' => 'Cud Chew',
            'Descripcion' => 'When you consume a berry, its effect will activate a second time 1 round of combat later.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:49:30',
            'updated_at' => '2023-08-06 21:49:30',
        ),
        471 => 
        array (
            'PasivaID' => 472,
            'Titulo' => 'Rocky Payload',
            'Descripcion' => 'When you consume a berry, its effect will activate a second time 1 round of combat later.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:50:10',
            'updated_at' => '2023-08-06 21:50:10',
        ),
        472 => 
        array (
            'PasivaID' => 473,
            'Titulo' => 'Costar',
            'Descripcion' => 'At the start of combat, copy a stat passive from your nearest ally until the end of combat.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:50:51',
            'updated_at' => '2023-08-06 21:50:51',
        ),
        473 => 
        array (
            'PasivaID' => 474,
            'Titulo' => 'Seed Sower',
            'Descripcion' => 'When you are hit by an attack that dealt damage, as a free action you may deplete one use of Grassy Terrain and use Grassy Terrain immediately.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:51:31',
            'updated_at' => '2023-08-06 21:51:31',
        ),
        474 => 
        array (
            'PasivaID' => 475,
            'Titulo' => 'Wind Rider',
            'Descripcion' => 'When hit by a wind based attack, your Attack is +1 for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:52:10',
            'updated_at' => '2023-08-06 21:52:10',
        ),
        475 => 
        array (
            'PasivaID' => 476,
            'Titulo' => 'Mycelium Might',
            'Descripcion' => 'When using an attack that can cause afflictions, ignore any immunities that foes may have when applying the affliction.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:52:44',
            'updated_at' => '2023-08-06 21:52:44',
        ),
        476 => 
        array (
            'PasivaID' => 477,
            'Titulo' => 'Lingering Aroma',
            'Descripcion' => 'When you are hit by a foes melee attack, disable all of the foes ability passives, then they gain Lingering Aroma for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:53:39',
            'updated_at' => '2023-08-06 21:53:39',
        ),
        477 => 
        array (
            'PasivaID' => 478,
            'Titulo' => 'Sap Sipper',
            'Descripcion' => 'You are immune to Grass-type attacks. If you would be hit by a Grass-type attack, your Attack is +2 for 10 mins. This effect does not stack.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-06 21:54:14',
            'updated_at' => '2023-08-06 21:54:14',
        ),
        478 => 
        array (
            'PasivaID' => 479,
            'Titulo' => 'Armor Tail',
            'Descripcion' => 'You are immune to priority attacks that are used out of turn order during combat.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-08 18:03:50',
            'updated_at' => '2023-08-08 18:03:50',
        ),
        479 => 
        array (
            'PasivaID' => 480,
            'Titulo' => 'Purifying Salt',
            'Descripcion' => 'You are immune to status afflictions. You are resistant to Ghost-type attacks.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-08 18:04:35',
            'updated_at' => '2023-08-08 18:04:35',
        ),
        480 => 
        array (
            'PasivaID' => 481,
            'Titulo' => 'Anger Shell',
            'Descripcion' => 'While you are below 20 HP, your attacks deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-08 18:05:12',
            'updated_at' => '2023-08-08 18:05:50',
        ),
        481 => 
        array (
            'PasivaID' => 482,
            'Titulo' => 'Toxic Debris',
            'Descripcion' => 'When you are hit by an attack that dealt damage, as a free action you may deplete one use of Toxic Spikes and use Toxic Spikes immediately.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-08 18:06:57',
            'updated_at' => '2023-08-08 18:06:57',
        ),
        482 => 
        array (
            'PasivaID' => 483,
            'Titulo' => 'Good as Gold',
            'Descripcion' => 'You are immune to Effect moves',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-08 18:07:33',
            'updated_at' => '2023-08-08 18:07:33',
        ),
        483 => 
        array (
            'PasivaID' => 484,
            'Titulo' => 'Earth Eater',
            'Descripcion' => 'When you are hit by a Ground-type attack, halve the damage, then you heal that much HP instead of taking damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-08 18:08:02',
            'updated_at' => '2023-08-08 18:08:02',
        ),
        484 => 
        array (
            'PasivaID' => 485,
            'Titulo' => 'Zero to Hero',
            'Descripcion' => 'When Palafin is reduced to 30 or less HP or if an ally is knocked out within 30ft of Palafin, you change from your Zero form to your Hero form for 10 mins.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-08 18:08:34',
            'updated_at' => '2023-08-08 18:08:34',
        ),
        485 => 
        array (
            'PasivaID' => 486,
            'Titulo' => 'Sharpness',
            'Descripcion' => 'Your slashing attacks deal +4 damage.',
            'TipoPasivaID' => 8,
            'deleted_at' => NULL,
            'created_at' => '2023-08-08 18:09:06',
            'updated_at' => '2023-08-08 18:09:06',
        ),
    ));
        
        
    }
}