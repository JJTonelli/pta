<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Habitat extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'Habitat';
    protected $primaryKey = 'HabitatID';

    public function pokemones() {
        return $this->belongsToMany('App\Models\Pokemon', 'PokemonHabitat', 'HabitatID', 'PokemonID');
    }
}
