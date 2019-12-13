<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maintanceUsed extends Model
{
    protected $table = 'maintanceused';
    //
    protected $fillable = ['customer_id', 'suplly_id', 'date'];

    public function supplies() {
        return $this->belongsTo('\App\supplies', 'suplly_id');
    }
    public function customer() {
        return $this->belongsTo('\App\User', 'customer_id');
    }
}
