<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dado;

class DadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dado = Dado::where('Nombre', 'd4')->first();
        if($dado == null) {
            $dado = new Dado;
            $dado->Nombre = 'd4';
            $dado->Descripcion = 'Dado de 4 lados';

            $dado->save();
        }

        $dado = Dado::where('Nombre', 'd6')->first();
        if($dado == null) {
            $dado = new Dado;
            $dado->Nombre = 'd6';
            $dado->Descripcion = 'Dado de 6 lados';

            $dado->save();
        }

        $dado = Dado::where('Nombre', 'd8')->first();
        if($dado == null) {
            $dado = new Dado;
            $dado->Nombre = 'd8';
            $dado->Descripcion = 'Dado de 8 lados';

            $dado->save();
        }

        $dado = Dado::where('Nombre', 'd10')->first();
        if($dado == null) {
            $dado = new Dado;
            $dado->Nombre = 'd10';
            $dado->Descripcion = 'Dado de 10 lados';

            $dado->save();
        }

        $dado = Dado::where('Nombre', 'd12')->first();
        if($dado == null) {
            $dado = new Dado;
            $dado->Nombre = 'd12';
            $dado->Descripcion = 'Dado de 12 lados';

            $dado->save();
        }

        $dado = Dado::where('Nombre', 'd20')->first();
        if($dado == null) {
            $dado = new Dado;
            $dado->Nombre = 'd20';
            $dado->Descripcion = 'Dado de 20 lados';

            $dado->save();
        }



    }
}
