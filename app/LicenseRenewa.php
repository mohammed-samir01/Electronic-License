<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LicenseRenewa extends Model
{
    protected $table = 'license_renewal';
    public $timestamps = true;
    protected $fillable = array('full_name' , 'national_id' , 'id_image' , 'personal_image' , 'health_certificate' , 'eye_examination_certificate' , 'expired_license_number' , 
                                        'email' ,'phone_number' , 'clearance_certificate');
  
}
