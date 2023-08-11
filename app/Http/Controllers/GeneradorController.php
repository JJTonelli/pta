<?php

namespace App\Http\Controllers;

use App\Models\Estadistica;
use App\Models\Habitat;
use App\Models\Naturaleza;
use App\Models\Pasiva;
use App\Models\PasivaEstadistica;
use App\Models\Pokemon;
use App\Models\PokemonEstadistica;
use App\Models\PokemonPasiva;
use App\Models\Tipo;
use Illuminate\Http\Request;
use mysql_xdevapi\Collection;

class GeneradorController extends Controller
{
    public function index(Request $request) {

        $validated = $request->validate([
            'tipo1' => 'nullable',
            'tipo2' => 'nullable',
            'naturaleza' => 'nullable',
            'cantidad' => 'nullable',
            'habitat' => 'nullable',
            'rareza' => 'nullable',
        ]);

        $tipo1 = $validated['tipo1'] ?? null;
        $tipo2 = $validated['tipo2'] ?? null;
        $naturalezaSeleccionada = $validated['naturaleza'] ?? null;
        $cantidad = $validated['cantidad'] ?? 5;
        $habitatSeleccionado = $validated['habitat'] ?? null;
        $rareza = $validated['rareza'] ?? null;
        $pokemonesCollection = collect();

        $pokemones = Pokemon::query();
        $pokemones = $pokemones->when($tipo1, function($query) use($tipo1) {
            $query = $query->where('Tipo1ID', $tipo1);
        })->when($tipo2, function($query) use($tipo2) {
            $query = $query->where('Tipo2ID', $tipo2);
        })->when($habitatSeleccionado, function($query) use($habitatSeleccionado) {
            $query = $query->whereHas('habitats', function($h) use($habitatSeleccionado){
                $h = $h->where('Habitat.HabitatID', $habitatSeleccionado);
            });
        })->when($rareza, function($query) use($rareza) {
            $query = $query->where('Rareza', $rareza);
        })->inRandomOrder()->limit($cantidad)->get();

        foreach ($pokemones as $pokemon) {
            $pokemon->NaturalezaID = Naturaleza::inRandomOrder()->limit(1)->first()->NaturalezaID;

            $pokemonesCollection->push($pokemon);
        }

        $tipos = Tipo::all();
        $naturalezas = Naturaleza::all();
        $habitats = Habitat::all();

        return view('pokemon.pokemonGenerador', [
            'tipos' => $tipos,
            'naturalezas' => $naturalezas,
            'habitats' => $habitats,
            'pokemonesCollection' => $pokemonesCollection,
            'habitatSeleccionado' => $habitatSeleccionado,
            'naturalezaSeleccionada' => $naturalezaSeleccionada,
            'tipo1' => $tipo1,
            'tipo2' => $tipo2,
            'cantidad' => $cantidad,
        ]);
    }
}
