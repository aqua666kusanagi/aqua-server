<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory;
    use SoftDeletes;
    //public $timestamps = false;
    protected $fillable = [

        'workday_id',
        'application_mode_id',
        'date',
        'note',

    ];
}
