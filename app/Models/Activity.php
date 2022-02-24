<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory;
    use SoftDeletes;
    //public $timestamps = false;
    protected $fillable = [

        'workday_id',
        'type_job_id',
        'cost',

    ];
}
