<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bkrcheckmdl extends Model
{
    protected $table = 'companydetails';

    protected $fillable = ['companyname', 'healthcheck'];
}
