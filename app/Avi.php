<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avi extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'comment',
    ];

    public function product(){

        return $this->belongsTo('App\Product');
    }
}
