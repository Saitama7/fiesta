<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Product extends Model
{
    public function type(){
        return $this->belongsTo('App\Type');
    }

    public function size(){
        return $this->belongsTo('App\Size');
    }

    public function baskets() {
        return $this->belongsToMany('App\Basket');
    }
}
