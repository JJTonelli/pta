<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Naturaleza extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'Naturaleza';
    protected $primaryKey = 'NaturalezaID';


    public function estadisticas() {
        return $this->belongsToMany('App\Models\Estadistica', 'NaturalezaEstadistica', 'NaturalezaID', 'EstadisticaID')->withPivot("Valor");
    }

    public function getDetallesAttribute() {

        return '(+'.$this->estadisticas[0]->Nombre.'/ -'.$this->estadisticas[1]->Nombre.')';
    }
}
