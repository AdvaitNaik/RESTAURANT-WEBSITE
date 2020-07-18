<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodaySpecial extends Model
{
    protected $primaryKey = 'today_special_id';

    public function item()
    {
        return $this->hasMany('App\Item');
    }
}
