<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Damaged extends Model
{
    protected $table = 'damageds';
    public $timestamps = true;
    protected $fillable = array('license_number' , 'email' , 'type_of_license' , 'national_id' , 'id_image' , 'damaged_license' , 
                                      'phone_number' , 'clearance_certificate');
}
