<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $primaryKey = 'item_id';

    public function cuisine()
    {
        return $this->belongsTo('App\Cuisine');
    }

    public function combos()
    {
        return $this->belongsToMany('App\Combo');
    }

    public function order()
    {
        return $this->belongsToMany('App\Order');
    }

    public function today()
    {
        return $this->belongsTo('App\TodaySpecial');
    }

    public function rate()
    {
        return $this->hasMany('App\Rating');
    }
}
