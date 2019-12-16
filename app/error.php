<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class error extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'CompanyName', 'errorMessage', 'planned', 'user_id'
    ];

    protected $table = 'errors';

    public function  user(){
        return $this->belongsTo('\App\User', 'user_id');
    }
}
