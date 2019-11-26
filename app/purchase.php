<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $fillable = [
        'name', 'lease_cost', 'totalPrice', 'roll_id', 'in_stock'
    ];

}
