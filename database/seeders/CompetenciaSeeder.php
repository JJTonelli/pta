<?php

namespace Database\Seeders;

use App\Models\Compentencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $competencia = Compentencia::where('Titulo', 'Bug')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Bug';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Dark')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Dark';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Dragon')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Dragon';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Electric')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Electric';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Fairy')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Fairy';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Fighting')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Fighting';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Fire')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Fire';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Flying')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Flying';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Ghost')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Ghost';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Grass')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Grass';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Ground')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Ground';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Ice')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Ice';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Poison')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Poison';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Psychic')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Psychic';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Rock')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Rock';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Steel')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Steel';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Water')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Water';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Any')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Any';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Avian')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Avian';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Blades/Claws')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Blades/Claws';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Bruiser')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Bruiser';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Cutesy')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Cutesy';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Draconian')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Draconian';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Energy Blast')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Energy Blast';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Elemental Attacks Electric')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Elemental Attacks Electric';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Elemental Attacks Fire')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Elemental Attacks Fire';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Elemental Attacks Ice')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Elemental Attacks Ice';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Fangs')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Fangs';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Floral')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Floral';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Glutton')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Glutton';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Hexwork')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Hexwork';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Healer')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Healer';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Horned')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Horned';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Lepidopteran')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Lepidopteran';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Martial')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Martial';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Punches')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Punches';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Kicks')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Kicks';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Magnetism')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Magnetism';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Munition')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Munition';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Parasitic')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Parasitic';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Prickly')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Prickly';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Pulse')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Pulse';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Normal Block')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Normal Block';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Piscian')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Piscian';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Sound')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Sound';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Spellcraft')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Spellcraft';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Stampeding')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Stampeding';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Tricky')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Tricky';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Weather')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Weather';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Weird')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Weird';
            $competencia->save();
        }

        $competencia = Compentencia::where('Titulo', 'Winged')->first();
        if($competencia == null) {
            $competencia = new Compentencia();
            $competencia->Titulo = 'Winged';
            $competencia->save();
        }
    }
}
