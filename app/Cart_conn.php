<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_conn extends Model
{
    //
    public function Product()
    {
        return $this->belongsTo(\App\Product::class, 'product_id');
    }
}
