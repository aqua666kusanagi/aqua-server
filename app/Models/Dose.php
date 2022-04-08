<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dose extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [

        'application_id',
        'chemical_element_id',
        'unit_id',
        'dose',

    ];

    public function application(){
        return $this->hasOne('App\Models\Application','id','application_id');
    }
    public function chemicalelement(){
        return $this->hasOne('App\Models\ChemicalElement','id','chemical_element_id');
    }
    public function unit(){
        return $this->hasOne('App\Models\Unit','id','unit_id');
    }
}
