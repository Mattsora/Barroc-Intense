<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    protected $table = 'leases';
    //
   // protected $fillable = ['name'];

   public function lease_type() {
    return $this->belongsTo('\App\LeaseType', 'lease_type_id');
   }
   public function user() {
    return $this->belongsTo('\App\User', 'customer_id');
   }


}
