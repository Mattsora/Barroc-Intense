<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase_rules extends Model
{
    protected $fillable = [
        'purchase_id', 'supply_id'
    ];

}
