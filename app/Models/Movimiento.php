<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movimiento extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $table = 'Movimiento';
    protected $primaryKey = 'MovimientoID';

    public function competencias() {
        return $this->belongsToMany('App\Models\Compentencia', 'MovimientoCompetencia', 'CompetenciaID', 'MovimientoID');
    }
}
