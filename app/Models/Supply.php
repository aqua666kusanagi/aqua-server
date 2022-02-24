<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supply extends Model
{
    use HasFactory;
    use SoftDeletes;
    //public $timestamps = false;
    protected $fillable = [

        'name',
        'registry_number',
        'data_sheet',
        'security_term',
        'product_category_id',

    ];
}
