<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplies extends Model
{
    protected $fillable = [
        'name', 'lease_cost', 'startup_cost', 'description', 'in_stock'
    ];
    public function  roll(){
        return $this->belongsTo('\App\Product_roll', 'roll_id');
    }

}
