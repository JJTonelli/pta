<?php

namespace Database\Seeders;

use App\Models\Naturaleza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NaturalezaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $naturaleza = Naturaleza::where('Nombre', 'Lonely')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Lonely';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Adamant')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Adamant';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Naughty')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Naughty';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Brave')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Brave';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Bold')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Bold';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Impish')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Impish';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Lax')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Lax';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Relaxed')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Relaxed';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Modest')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Modest';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Mild')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Mild';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Rash')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Rash';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Quiet')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Quiet';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Calm')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Calm';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Gentle')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Gentle';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Careful')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Careful';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Sassy')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Sassy';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Timid')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Timid';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Hasty')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Hasty';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Jolly')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Jolly';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Naive')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Naive';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Hardy')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Hardy';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Docile')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Docile';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Bashful')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Bashful';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Quirky')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Quirky';
            $naturaleza->save();
        }

        $naturaleza = Naturaleza::where('Nombre', 'Serious')->first();
        if($naturaleza == null) {
            $naturaleza = new Naturaleza();
            $naturaleza->Nombre = 'Serious';
            $naturaleza->save();
        }

    }
}
