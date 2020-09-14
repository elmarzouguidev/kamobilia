<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function scopePromos($query){

        return $query->where('hasPromo',true)->get();
    }

    public function scopeNews($query){
        
        return $query->where('inHome',true)->get();
    }

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }
}
