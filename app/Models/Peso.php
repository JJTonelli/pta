<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peso extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'Peso';
    protected $primaryKey = 'PesoID';
}
