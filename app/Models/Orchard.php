<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orchard extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [

        'type_avocado_id',
        'type_topography_id',
        'type_soil_id',
        'climate_type_id',
        'user_id',
        'name_orchard',
        'path_image',
        'location_orchard',
        'point',
        'area',
        'altitude',
        'surface',
        'state',
        'creation_year',
        'planting_density',
        'irrigation',

    ];
}
