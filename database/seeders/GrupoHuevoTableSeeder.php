<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GrupoHuevoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('GrupoHuevo')->delete();
        
        \DB::table('GrupoHuevo')->insert(array (
            0 => 
            array (
                'GrupoHuevoID' => 1,
                'Nombre' => 'Amorphous',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            1 => 
            array (
                'GrupoHuevoID' => 2,
                'Nombre' => 'Bug',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            2 => 
            array (
                'GrupoHuevoID' => 3,
                'Nombre' => 'Dragon',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            3 => 
            array (
                'GrupoHuevoID' => 4,
                'Nombre' => 'Fairy',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            4 => 
            array (
                'GrupoHuevoID' => 5,
                'Nombre' => 'Field',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            5 => 
            array (
                'GrupoHuevoID' => 6,
                'Nombre' => 'Grass',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            6 => 
            array (
                'GrupoHuevoID' => 7,
                'Nombre' => 'Human-Like',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            7 => 
            array (
                'GrupoHuevoID' => 8,
                'Nombre' => 'Mineral',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            8 => 
            array (
                'GrupoHuevoID' => 9,
                'Nombre' => 'Monster',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            9 => 
            array (
                'GrupoHuevoID' => 10,
                'Nombre' => 'Water 1',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            10 => 
            array (
                'GrupoHuevoID' => 11,
                'Nombre' => 'Water 2',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            11 => 
            array (
                'GrupoHuevoID' => 12,
                'Nombre' => 'Water 3',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            12 => 
            array (
                'GrupoHuevoID' => 13,
                'Nombre' => 'Ditto',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:23:55',
                'updated_at' => '2023-08-08 18:23:55',
            ),
            13 => 
            array (
                'GrupoHuevoID' => 14,
                'Nombre' => 'Flying',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:29:29',
                'updated_at' => '2023-08-08 18:29:29',
            ),
            14 => 
            array (
                'GrupoHuevoID' => 15,
                'Nombre' => 'Humanshape',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:31:15',
                'updated_at' => '2023-08-08 18:31:15',
            ),
            15 => 
            array (
                'GrupoHuevoID' => 16,
                'Nombre' => 'Water',
                'Descripcion' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-08-08 18:32:01',
                'updated_at' => '2023-08-08 18:32:01',
            ),
        ));
        
        
    }
}