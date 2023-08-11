<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Dado;
use App\Models\Estadistica;
use App\Models\GrupoHuevo;
use App\Models\TipoAtaque;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            DadoSeeder::class,
            TipoAtaqueSeeder::class,
            TipoSeeder::class,
        ]);
        $this->call(HabilidadTableSeeder::class);
        $this->call(MovimientoTableSeeder::class);
        $this->call(HabitatSeeder::class);
        //$this->call(GrupoHuevoSeeder::class);
        $this->call(GrupoHuevoTableSeeder::class);
        $this->call(TipoPasivaSeeder::class);
        $this->call(PasivaTableSeeder::class);
        $this->call(CompetenciaSeeder::class);
        $this->call(MovimientoCompetenciaTableSeeder::class);
        $this->call(TamañoTableSeeder::class);
        $this->call(PesoTableSeeder::class);
        $this->call(PokemonTableSeeder::class);
        $this->call(PokemonMovimientoTableSeeder::class);
        $this->call(PokemonCompetenciaTableSeeder::class);
        $this->call(PokemonGrupoHuevoTableSeeder::class);
        $this->call(PokemonHabitatTableSeeder::class);
        $this->call(PokemonHabilidadTableSeeder::class);
        $this->call(PokemonPasivaTableSeeder::class);
        $this->call(TipoItemTableSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(EstadisticaSeeder::class);
        $this->call(PokemonEstadisticaTableSeeder::class);
        $this->call(PasivaEstadisticaTableSeeder::class);
        $this->call(NaturalezaSeeder::class);
        $this->call(NaturalezaEstadisticaSeeder::class);
    }
}
