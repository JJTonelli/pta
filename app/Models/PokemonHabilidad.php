<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PokemonHabilidad extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'PokemonHabilidad';
    protected $primaryKey = 'PokemonHabilidadID';
}
