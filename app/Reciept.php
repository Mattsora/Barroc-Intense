<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reciept extends Model
{
    protected $fillable = [
         'user_id', 'lease_id', 'description', 'in_stock'
    ];

    protected $table = 'work_orders';
   
}
