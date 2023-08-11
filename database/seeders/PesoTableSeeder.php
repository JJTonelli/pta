<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PesoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Peso')->delete();
        
        \DB::table('Peso')->insert(array (
            0 => 
            array (
                'PesoID' => 1,
                'Titulo' => 'Light',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:19',
                'updated_at' => '2023-07-16 11:03:19',
            ),
            1 => 
            array (
                'PesoID' => 2,
                'Titulo' => 'Medium',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:19',
                'updated_at' => '2023-07-16 11:03:19',
            ),
            2 => 
            array (
                'PesoID' => 3,
                'Titulo' => 'Heavy',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:19',
                'updated_at' => '2023-07-16 11:03:19',
            ),
            3 => 
            array (
                'PesoID' => 4,
            'Titulo' => 'Heavy (Dynamic)',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:19',
                'updated_at' => '2023-07-16 11:03:19',
            ),
            4 => 
            array (
                'PesoID' => 5,
                'Titulo' => 'Superweight',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:19',
                'updated_at' => '2023-07-16 11:03:19',
            ),
            5 => 
            array (
                'PesoID' => 6,
                'Titulo' => 'Featherweight',
                'deleted_at' => NULL,
                'created_at' => '2023-07-16 11:03:19',
                'updated_at' => '2023-07-16 11:03:19',
            ),
        ));
        
        
    }
}