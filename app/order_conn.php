<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_conn extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
    public function order()
    {
        return $this->hasMany(\App\Cart_conn::class, 'cart_id',"cart_id");
    }
}
