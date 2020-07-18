<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $primaryKey = 'suggestion_id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
