<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function item()
    {
        return $this->belongsToMany('App\Item');
    }

    public function combo()
    {
        return $this->belongsToMany('App\Combo');
    }

}
