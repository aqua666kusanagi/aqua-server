<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supply extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [

        'name',
        'registry_number',
        'data_sheet',
        'security_term',
        'product_category_id',

    ];

    public function product_categori(){
        return $this->hasOne('App\Models\ProductCategory','id','product_category_id');
    }
}
