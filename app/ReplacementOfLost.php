<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplacementOfLost extends Model
{
    protected $table = 'replacement_of_lost';
    public $timestamps = true;
    protected $fillable = array('phone_number' , 'email' , 'license_number' , 'type_of_license' , 'id_image'  ,'national_id'
                                    ,  'clearance_certificate' , 'loss_report' );
  
}
