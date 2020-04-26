<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retrives extends Model
{
    protected $table = 'retrives';
    public $timestamps = true;
    protected $fillable = array('phone_number' , 'email' , 'city' , 'type_of_license' , 'governorate' 
                                    ,  'license_number' , 'withdraw_license');
  
}
