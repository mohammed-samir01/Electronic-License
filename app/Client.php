<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('user_name' , 'full_name' , 'password' , 'address' , 'date_of_birth' , 'health_certificate' , 'email' , 'blood_type' , 'mobil_number' , 
                                'type_of_license' ,'city_id' , 'pen_code' , 'governorate_id' , 'api_token');
  
    
    public function city()
    {
        return $this->belongsTo('App\City');
    }
    public function Governrate()
    {
        return $this->belongsTo('App\Governrate');
    }

    protected $hidden = [
        'password', 'api_token','pen_code',
    ];

}//end of clients
