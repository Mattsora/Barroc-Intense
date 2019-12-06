<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lease_contract extends Model
{
    //
    protected $fillable = [
        'customer_id', 'start_date', 'end_date'
    ];
}
