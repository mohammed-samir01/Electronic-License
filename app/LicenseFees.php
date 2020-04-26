<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LicenseFees extends Model
{
    protected $table = 'license_fees';
    public $timestamps = true;
    protected $fillable = array('name' , 'price');
  
}
