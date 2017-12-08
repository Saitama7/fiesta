<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vip extends Model
{
    public function baskets() {
        return $this->hasMany('App\Basket');
    }
}
