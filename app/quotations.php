<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quotations extends Model
{
    protected $fillable = [
        'sales_id', 'customer_id', 'content',
    ];
}
