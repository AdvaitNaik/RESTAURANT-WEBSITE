<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemOrder extends Model
{
    protected $primaryKey = 'item_order_id';
    public $table = 'item_order';
}
