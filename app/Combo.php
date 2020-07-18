<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    protected $primaryKey = 'combo_id';

    public function items()
    {
        return $this->belongsToMany('App\Item');
    }

    public function order()
    {
        return $this->belongsToMany('App\Order');
    }
}
