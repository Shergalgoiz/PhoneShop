<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $table = 'product_type';

    public function products() {
        return $this->hasMany('App\Models\Product','id_type','id');
    }

}
