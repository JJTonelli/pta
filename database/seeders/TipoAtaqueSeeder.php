<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoAtaque;

class TipoAtaqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tipoAtaque = TipoAtaque::where('Titulo', 'Attack')->first();
        if($tipoAtaque == null) {
            $tipoAtaque = new TipoAtaque;
            $tipoAtaque->Titulo = 'Attack';
            $tipoAtaque->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/3/31/latest/20140504181227/Clase_f%C3%ADsico.gif';
            $tipoAtaque->save();
        }

        $tipoAtaque = TipoAtaque::where('Titulo', 'Special')->first();
        if($tipoAtaque == null) {
            $tipoAtaque = new TipoAtaque;
            $tipoAtaque->Titulo = 'Special';
            $tipoAtaque->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/6/61/latest/20140504180925/Clase_especial.gif';
            $tipoAtaque->save();
        }

        $tipoAtaque = TipoAtaque::where('Titulo', 'Effect')->first();
        if($tipoAtaque == null) {
            $tipoAtaque = new TipoAtaque;
            $tipoAtaque->Titulo = 'Effect';
            $tipoAtaque->Imagen = 'https://images.wikidexcdn.net/mwuploads/wikidex/0/06/latest/20141020094029/Clase_estado.gif';
            $tipoAtaque->save();
        }

        $tipoAtaque = TipoAtaque::where('Titulo', 'Varia')->first();
        if($tipoAtaque == null) {
            $tipoAtaque = new TipoAtaque;
            $tipoAtaque->Titulo = 'Varia';
            $tipoAtaque->save();
        }

    }
}
