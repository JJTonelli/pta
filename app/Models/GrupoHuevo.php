<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoHuevo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'GrupoHuevo';
    protected $primaryKey = 'GrupoHuevoID';
}
