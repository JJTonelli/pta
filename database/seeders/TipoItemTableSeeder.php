<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoItemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('TipoItem')->delete();
        
        \DB::table('TipoItem')->insert(array (
            0 => 
            array (
                'TipoItemID' => 1,
                'Descripcion' => 'Key Items',
                'created_at' => '2023-07-23 19:32:32',
                'updated_at' => '2023-07-23 19:32:32',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'TipoItemID' => 2,
                'Descripcion' => 'Medical Items',
                'created_at' => '2023-07-23 19:32:32',
                'updated_at' => '2023-07-23 19:32:32',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'TipoItemID' => 3,
                'Descripcion' => 'Pokemon Items',
                'created_at' => '2023-07-23 19:32:32',
                'updated_at' => '2023-07-23 19:32:32',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'TipoItemID' => 4,
                'Descripcion' => 'Berries',
                'created_at' => '2023-07-23 19:32:32',
                'updated_at' => '2023-07-23 19:32:32',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'TipoItemID' => 5,
                'Descripcion' => 'Pokeballs',
                'created_at' => '2023-07-23 19:32:33',
                'updated_at' => '2023-07-23 19:32:33',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'TipoItemID' => 6,
                'Descripcion' => 'Trainer Equipment',
                'created_at' => '2023-07-23 19:32:33',
                'updated_at' => '2023-07-23 19:32:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}