<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GrupoHuevo;

class GrupoHuevoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grupoHuevo = GrupoHuevo::where('Nombre', 'Amorphous')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Amorphous';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }

        $grupoHuevo = GrupoHuevo::where('Nombre', 'Bug')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Bug';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }

        $grupoHuevo = GrupoHuevo::where('Nombre', 'Dragon')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Dragon';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }

        $grupoHuevo = GrupoHuevo::where('Nombre', 'Fairy')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Fairy';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }
        $grupoHuevo = GrupoHuevo::where('Nombre', 'Field')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Field';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }
        $grupoHuevo = GrupoHuevo::where('Nombre', 'Grass')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Grass';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }
        $grupoHuevo = GrupoHuevo::where('Nombre', 'Human-Like')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Human-Like';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }
        $grupoHuevo = GrupoHuevo::where('Nombre', 'Mineral')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Mineral';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }
        $grupoHuevo = GrupoHuevo::where('Nombre', 'Monster')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Monster';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }
        $grupoHuevo = GrupoHuevo::where('Nombre', 'Water 1')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Water 1';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }
        $grupoHuevo = GrupoHuevo::where('Nombre', 'Water 2')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Water 2';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }
        $grupoHuevo = GrupoHuevo::where('Nombre', 'Water 3')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Water 3';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }
        $grupoHuevo = GrupoHuevo::where('Nombre', 'Ditto')->first();
        if($grupoHuevo == null) {
            $grupoHuevo = new GrupoHuevo();
            $grupoHuevo->Nombre = 'Ditto';
            $grupoHuevo->Descripcion = null;
            $grupoHuevo->save();
        }
    }
}
