<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //

    public function scopeActive($query){
        
        return $query->where('active',true)->get();
    }
}
