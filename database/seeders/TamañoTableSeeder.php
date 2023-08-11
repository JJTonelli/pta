<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TamañoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Tamaño')->delete();
        
        \DB::table('Tamaño')->insert(array (
            0 => 
            array (
                'TamañoID' => 1,
                'Titulo' => 'Small',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:19',
                'updated_at' => '2023-07-16 11:03:19',
            ),
            1 => 
            array (
                'TamañoID' => 2,
                'Titulo' => 'Medium',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:19',
                'updated_at' => '2023-07-16 11:03:19',
            ),
            2 => 
            array (
                'TamañoID' => 3,
                'Titulo' => 'Large',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:19',
                'updated_at' => '2023-07-16 11:03:19',
            ),
            3 => 
            array (
                'TamañoID' => 4,
                'Titulo' => 'Huge',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:19',
                'updated_at' => '2023-07-16 11:03:19',
            ),
            4 => 
            array (
                'TamañoID' => 5,
            'Titulo' => 'Large (Dynamic)',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:19',
                'updated_at' => '2023-07-16 11:03:19',
            ),
            5 => 
            array (
                'TamañoID' => 6,
                'Titulo' => 'Tiny',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:19',
                'updated_at' => '2023-07-16 11:03:19',
            ),
            6 => 
            array (
                'TamañoID' => 7,
                'Titulo' => 'Gigantic',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:20',
                'updated_at' => '2023-07-16 11:03:20',
            ),
            7 => 
            array (
                'TamañoID' => 8,
                'Titulo' => 'LArge',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:20',
                'updated_at' => '2023-07-16 11:03:20',
            ),
        ));
        
        
    }
}