<?php
/**
 * Created by PhpStorm.
 * User: Saitama
 * Date: 07.12.2017
 * Time: 9:17
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class OrderTime extends Model
{
    public function intervals() {
        return $this->hasMany('App\Basket');
    }
}