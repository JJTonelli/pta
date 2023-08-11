<?php

namespace App\Http\Livewire\Pokemon;

use App\Models\Habitat;
use App\Models\Pokemon;
use App\Models\Tipo;
use Livewire\Component;
use Livewire\WithPagination;

class PokemonListado extends Component
{
    use WithPagination;

    public $pokemon;
    public $tipo1;
    public $tipo2;
    public $tipos;
    public $habitats;
    public $habitat;

    public function mount() {
        $this->tipos = Tipo::all();
        $this->habitats = Habitat::all();
    }

    public function render()
    {

        $pokemones = Pokemon::with(['tipo', 'tipo2'])
            ->where('Gigantamax', null)
            ->where('Mega', null)
            ->where('Numero', '!=', null)
            ->orderBy('Numero')
            ->when($this->pokemon, function($query) {
                return $query->where('Nombre', 'like', '%'.$this->pokemon.'%');
            })
            ->when($this->tipo1, function($query) {
                return $query->where('Tipo1ID', $this->tipo1);
            })
            ->when($this->tipo2, function($query) {
                return $query->where('Tipo2ID', $this->tipo2);
            })
            ->when($this->habitat, function($query) {
                return $query->whereHas('habitats', function($habitat){
                    $habitat = $habitat->where('Habitat.HabitatID', $this->habitat);
                });
            });


        $pokemones = $pokemones->paginate(12);

        return view('livewire.pokemon.pokemon-listado', ['pokemones' => $pokemones]);
    }
}
