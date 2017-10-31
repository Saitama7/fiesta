<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    public function baskets() {
        return $this->hasMany('App\Basket');
    }
}
