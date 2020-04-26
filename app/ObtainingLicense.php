<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObtainingLicense extends Model
{
    protected $table = 'obtaining_license';
    public $timestamps = true;
    protected $fillable = array('full_name' , 'phone_number' , 'id_image' , 'traffic_file_form' , 'qualification_photo'  ,'personal_photo'
                                    ,  'undercover_certificate' , 'eye_examination_certificate' , 'blood_type' , 'medical_commission' ,'military_sevices' ,'type_of_license');
  
}
