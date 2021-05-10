<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function brand()
    {
        return $this->belongsTo(\App\brand::class, 'brand_id');
    }
}
