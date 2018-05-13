<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public function catagories(){
        return $this->belongsToMany('App\categories');
    }
}
