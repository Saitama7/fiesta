<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public function vip() {
        return $this->belongsTo('App\Vip');
    }
    public function delivery() {
        return $this->belongsTo('App\Delivery');
    }

    public function products() {
        return $this->belongsToMany('App\Product')
            ->withPivot('count_product')
            ->withTimestamps();
    }
}
