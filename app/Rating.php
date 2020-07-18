<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $primaryKey = 'rating_id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
