<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quotations extends Model
{
    protected $fillable = [
        'customer_id', 'supplies_id', 'totalPrice', 'amount'
    ];
}
