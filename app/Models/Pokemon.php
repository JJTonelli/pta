<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    protected $table = 'Pokemon';
    protected $primaryKey = 'PokemonID';

    public function tipo() {
        return $this->belongsTo('App\Models\Tipo', 'Tipo1ID', 'TipoID');
    }

    public function tipo2() {
        return $this->belongsTo('App\Models\Tipo', 'Tipo2ID', 'TipoID');
    }

    public function movimientos() {
        return $this->belongsToMany('App\Models\Movimiento', 'PokemonMovimiento', 'PokemonID', 'MovimientoID');
    }

    public function habilidades() {
        return $this->belongsToMany('App\Models\Habilidad', 'PokemonHabilidad', 'PokemonID', 'HabilidadID');
    }

    public function pasivas() {
        return $this->belongsToMany('App\Models\Pasiva', 'PokemonPasiva', 'PokemonID', 'PasivaID');
    }

    public function peso() {
        return $this->belongsTo('App\Models\Peso', 'PesoID', 'PesoID');
    }

    public function tamaño() {
        return $this->belongsTo('App\Models\Tamaño', 'TamañoID', 'TamañoID');
    }

    public function habitats() {
        return $this->belongsToMany('App\Models\Habitat', 'PokemonHabitat', 'PokemonID', 'HabitatID');
    }

    public function gruposHuevo() {
        return $this->belongsToMany('App\Models\GrupoHuevo', 'PokemonGrupoHuevo', 'PokemonID', 'GrupoHuevoID');
    }

    public function estadisticas() {
        return $this->belongsToMany('App\Models\Estadistica', 'PokemonEstadistica', 'PokemonID', 'EstadisticaID')->withPivot("Valor");
    }

    public function naturaleza() {
        return $this->belongsTo('App\Models\Naturaleza', 'NaturalezaID', 'NaturalezaID');
    }

    public function getHPTotalAttribute(){
        return $this->estadisticas->where('Nombre', 'HP')->first()->pivot->Valor;
    }

    public function getDefensaTotalAttribute($key)
    {
        $defensaTotal = $this->estadisticas->where('Nombre', 'Defensa')->first()->pivot->Valor;
        $defensaPasivas = $this->pasivas()->whereHas('estadisticas', function($estadisticas) {
            $estadisticas = $estadisticas->where('Nombre', 'Defensa');
        })->get();
        foreach($defensaPasivas as $dp) {
            foreach($dp->estadisticas as $e) {
                $defensaTotal += $e->pivot->Valor;
            }
        }

        if($this->naturaleza) {
            $defensaNaturaleza = $this->naturaleza()->whereHas('estadisticas', function($estadisticas) {
                $estadisticas = $estadisticas->where('Nombre', 'Defensa');
            })->get();
            if($defensaNaturaleza) {
                foreach ($defensaNaturaleza as $df) {
                    $defensaTotal += $df->estadisticas->where('Nombre', 'Defensa')->first()->pivot->Valor;
                }
            }
        }

        return $defensaTotal;
    }

    public function getAtaqueTotalAttribute($key)
    {
        $ataqueTotal = $this->estadisticas->where('Nombre', 'Ataque')->first()->pivot->Valor;
        $ataquePasivas = $this->pasivas()->whereHas('estadisticas', function($estadisticas) {
            $estadisticas = $estadisticas->where('Nombre', 'Ataque');
        })->get();
        foreach($ataquePasivas as $dp) {
            foreach($dp->estadisticas as $e) {
                $ataqueTotal += $e->pivot->Valor;
            }
        }

        if($this->naturaleza) {
            $ataqueNaturaleza = $this->naturaleza()->whereHas('estadisticas', function($estadisticas) {
                $estadisticas = $estadisticas->where('Nombre', 'Ataque');
            })->get();
            if($ataqueNaturaleza) {
                foreach ($ataqueNaturaleza as $an) {
                    $ataqueTotal += $an->estadisticas->where('Nombre', 'Ataque')->first()->pivot->Valor;
                }
            }
        }

        return $ataqueTotal;
    }

    public function getAtaqueEspecialTotalAttribute($key)
    {
        $ataqueTotal = $this->estadisticas->where('Nombre', 'AtaqueEspecial')->first()->pivot->Valor;
        $ataquePasivas = $this->pasivas()->whereHas('estadisticas', function($estadisticas) {
            $estadisticas = $estadisticas->where('Nombre', 'AtaqueEspecial');
        })->get();
        foreach($ataquePasivas as $dp) {
            foreach($dp->estadisticas as $e) {
                $ataqueTotal += $e->pivot->Valor;
            }
        }

        if($this->naturaleza) {
            $ataqueNaturaleza = $this->naturaleza()->whereHas('estadisticas', function($estadisticas) {
                $estadisticas = $estadisticas->where('Nombre', 'AtaqueEspecial');
            })->get();
            if($ataqueNaturaleza) {
                foreach ($ataqueNaturaleza as $an) {
                    $ataqueTotal += $an->estadisticas->where('Nombre', 'AtaqueEspecial')->first()->pivot->Valor;
                }
            }
        }

        return $ataqueTotal;
    }

    public function getDefensaEspecialTotalAttribute($key)
    {
        $defensaEspecialTotal = $this->estadisticas->where('Nombre', 'DefensaEspecial')->first()->pivot->Valor;
        $defensaEspecialPasivas = $this->pasivas()->whereHas('estadisticas', function($estadisticas) {
            $estadisticas = $estadisticas->where('Nombre', 'DefensaEspecial');
        })->get();
        foreach($defensaEspecialPasivas as $dp) {
            foreach($dp->estadisticas as $e) {
                $defensaEspecialTotal += $e->pivot->Valor;
            }
        }

        if($this->naturaleza) {
            $defensaEspecialNaturaleza = $this->naturaleza()->whereHas('estadisticas', function($estadisticas) {
                $estadisticas = $estadisticas->where('Nombre', 'DefensaEspecial');
            })->get();
            if($defensaEspecialNaturaleza) {
                foreach($defensaEspecialNaturaleza as $den) {
                    $defensaEspecialTotal += $den->estadisticas->where('Nombre', 'DefensaEspecial')->first()->pivot->Valor;
                }
            }
        }

        return $defensaEspecialTotal;
    }

    public function getVelocidadTotalAttribute($key)
    {
        $velocidadTotal = $this->estadisticas->where('Nombre', 'Velocidad')->first()->pivot->Valor;
        $velocidadPasivas = $this->pasivas()->whereHas('estadisticas', function($estadisticas) {
            $estadisticas = $estadisticas->where('Nombre', 'Velocidad');
        })->get();
        foreach($velocidadPasivas as $dp) {
            foreach($dp->estadisticas as $e) {
                $velocidadTotal += $e->pivot->Valor;
            }
        }

        if($this->naturaleza) {
            $velocidadNaturaleza = $this->naturaleza()->whereHas('estadisticas', function($estadisticas) {
                $estadisticas = $estadisticas->where('Nombre', 'Velocidad');
            })->get();
            if($velocidadNaturaleza) {
                foreach ($velocidadNaturaleza as $v) {
                    $velocidadTotal += $v->estadisticas->where('Nombre', 'Velocidad')->first()->pivot->Valor;
                }
            }
        }

        return $velocidadTotal;
    }
}
