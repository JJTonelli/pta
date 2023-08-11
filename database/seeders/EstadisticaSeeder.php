<?php

namespace Database\Seeders;

use App\Models\Estadistica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadisticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estadistica = Estadistica::where('Nombre', 'HP')->first();
        if($estadistica == null) {
            $estadistica = new Estadistica();
            $estadistica->Nombre = 'HP';
            $estadistica->save();
        }

        $estadistica = Estadistica::where('Nombre', 'Ataque')->first();
        if($estadistica == null) {
            $estadistica = new Estadistica();
            $estadistica->Nombre = 'Ataque';
            $estadistica->save();
        }

        $estadistica = Estadistica::where('Nombre', 'Defensa')->first();
        if($estadistica == null) {
            $estadistica = new Estadistica();
            $estadistica->Nombre = 'Defensa';
            $estadistica->save();
        }

        $estadistica = Estadistica::where('Nombre', 'Velocidad')->first();
        if($estadistica == null) {
            $estadistica = new Estadistica();
            $estadistica->Nombre = 'Velocidad';
            $estadistica->save();
        }

        $estadistica = Estadistica::where('Nombre', 'AtaqueEspecial')->first();
        if($estadistica == null) {
            $estadistica = new Estadistica();
            $estadistica->Nombre = 'AtaqueEspecial';
            $estadistica->save();
        }

        $estadistica = Estadistica::where('Nombre', 'DefensaEspecial')->first();
        if($estadistica == null) {
            $estadistica = new Estadistica();
            $estadistica->Nombre = 'DefensaEspecial';
            $estadistica->save();
        }
    }
}
