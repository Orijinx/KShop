<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function Tag()
    {
        return $this->belongsTo(\App\tags::class, 'tag_id');
    }
    public function Brand()
    {
        return $this->belongsTo(\App\brand::class, 'brand_id');
    }
}
