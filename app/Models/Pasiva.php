<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasiva extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'Pasiva';
    protected $primaryKey = 'PasivaID';

    public function tipoPasiva() {
        return $this->belongsTo('App\Models\TipoPasiva', 'TipoPasivaID', 'TipoPasivaID');
    }

    public function estadisticas() {
        return $this->belongsToMany('App\Models\Estadistica', 'PasivaEstadistica', 'PasivaID', 'EstadisticaID')->withPivot("Valor");
    }
}
