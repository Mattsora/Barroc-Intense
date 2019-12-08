<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lease_rules extends Model
{

    protected $table = 'lease_rules';
    //
    protected $fillable = ['lease_id', 'supply_id'];
}
