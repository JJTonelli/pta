<?php

namespace Database\Seeders;

use App\Models\TipoPasiva;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPasivaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasiva = TipoPasiva::where('Titulo', 'Attack')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Attack';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Defense')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Defense';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Special Attack')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Special Attack';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Special Defense')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Special Defense';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Speed')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Speed';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Mix')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Mix';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Critical Hit')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Critical Hit';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Ability')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Ability';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Last Chance')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Last Chance';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Last Chance')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Last Chance';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Type Shifting')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Type Shifting';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Type Shifting')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Type Shifting';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Extra STAB')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Extra STAB';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Ally STAB')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Ally STAB';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Additional')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Additional';
            $pasiva->save();
        }

        $pasiva = TipoPasiva::where('Titulo', 'Legendary')->first();
        if($pasiva == null) {
            $pasiva = new TipoPasiva();
            $pasiva->Titulo = 'Legendary';
            $pasiva->save();
        }
    }
}
