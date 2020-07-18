<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComboItem extends Model
{
    protected $primaryKey = 'combo_item_id';
    public $table = 'combo_item';
    protected $fillable = [
        'combo_id_fk', 'item_id_fk',
    ];

}
