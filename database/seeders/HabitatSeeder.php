<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Habitat;

class HabitatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $habitat = Habitat::where('Nombre', 'Beach')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Beach';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Desert')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Desert';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Field')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Field';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Forest')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Forest';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Freshwater')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Freshwater';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Grasslands')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Grasslands';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Jungle')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Jungle';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Mountains')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Mountains';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Ocean')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Ocean';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Polar')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Polar';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Tundra')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Tundra';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Urban')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Urban';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Wetlands')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Wetlands';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Woodlands')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Woodlands';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Volcanoes')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Volcanoes';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Savanna')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Savanna';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Lakes')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Lakes';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Marsh')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Marsh';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Cave')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Cave';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Meadows')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Meadows';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Urban Plants')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Urban Plants';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Urban Abandoned')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Urban Abandoned';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Swamp')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Swamp';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Rainforests')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Rainforests';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Badlands')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Badlands';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Ocean Abyss')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Ocean Abyss';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Rivers')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Rivers';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Plains')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Plains';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Ocean Floors')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Ocean Floors';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Unknown')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Unknown';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Ocean Reefs')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Ocean Reefs';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Ruins')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Ruins';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Urban Burial')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Urban Burial';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Orchards')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Orchards';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Glaciers')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Glaciers';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Variable')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Variable';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Ponds')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Ponds';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Urban Lab')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Urban Lab';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Foreign Dimension')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Foreign Dimension';
            $habitat->Descripcion = null;
            $habitat->save();
        }
        $habitat = Habitat::where('Nombre', 'Deep Cave')->first();
        if($habitat == null) {
            $habitat = new Habitat();
            $habitat->Nombre = 'Deep Cave';
            $habitat->Descripcion = null;
            $habitat->save();
        }
    }
}
