<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cuisine extends Model
{
    protected $primaryKey = 'cuisine_id';

    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
