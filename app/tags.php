<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    //
    //
    public function Parent()
    {
        return $this->hasMany(\App\tags::class, 'parent_id');
    }
    public function Childs() {
        return $this->hasMany(\App\tags::class,'parent_id','id') ;
    }
}
