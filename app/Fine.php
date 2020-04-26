<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    protected $table = 'fines';
    public $timestamps = true;
    protected $fillable = array('license_number' , 'fine' );
  
}
