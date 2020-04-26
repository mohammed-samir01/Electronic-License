<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Client;
use Update;
use Validator;
use Mail;
use Illuminate\Validation\Rule;
use App\Mail\ResetPassword;

class AuthController extends Controller
{
    
    public function register(Request $request){

        $validator = Validator::make($request->all(), [

            'user_name'              => 'required' , 
            'full_name'              => 'required' , 
            'password'               => 'required' , 
            'address'                => 'required' , 
            'date_of_birth'          => 'required' , 
            'health_certificate'     => 'required' , 
            'email'                  => 'required' , 
            'blood_type'             => 'required' , 
            'mobil_number'           => 'required' , 
            'type_of_license'        => 'required' , 
            'city_id'                => 'required' , 
            'governorate_id'         => 'required' , 


        ]);

        if($validator->fails())
        {
            return responseJson(0 ,$validator->errors()->first(),$validator->errors());
        }
        $request->merge(['password' => bcrypt($request->password)]);
        $clients = Client::create($request->all());
        $clients->api_token = str_random(60);
        $clients->save();

        return responseJson(1 , 'تم الدخول بنجاح' ,[
            'api_token' => $clients->api_token,
            'clients' => $clients 
            ]);

    }//end of register

    public function login(Request $request){

        $validator = Validator::make($request->all() , [

            'mobil_number'      =>  'required',
            'password'          =>  'required',

        ]); 
        if($validator->fails())
        {
            return  responseJson(0 , $validator->errors()->first() , $validator->errors());
        }
        $clients = Client::where('mobil_number'  , $request->mobil_number)->first();

        if($clients){
            if(Hash::check($request->password, $clients->password))
            {
                return responseJson(1 ,'تم التسجيل بنجاح',[
                    'api_token' => $clients->api_token,
                    'clients' => $clients
                ]);
            }else{
                return responseJson(0,'البيانات المدخله غير صحيحه');
    
            }
    
        }else{
            return responseJson(0,'البيانات المدخله غير صحيحه');
        }


    }//end of login
    public function profile(Request $request){

        $validator = validator()->make($request->all() , [
    
            'password'  => 'confirmed',
             'email'    => Rule::unique('clients')->ignore($request->user()->id),
        ]);
        if($validator->fails()){
            $data = $validator->errors();
            return responseJson( 0  , $validator->errors()->first() , $data);
        }
        $loginUser = $request->user();
        $loginUser->update($request->all());
    
        if($request->has('password')){
        $loginUser->password = bcrypt($request->password);
        }
        $loginUser->save();
        
        $data = [
            'user' => $request->user()->fresh()
        ];
        return responseJson(1,'تم تحديث البيانات',$data);
    }//end of update profile
    public function reset(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'mobil_number' => 'required',
        ]);
        if($validator->fails())
        {
            $data = $validator->errors();
            return responseJson(0, $validator->errors()->first(), $data);
        }
        $user = Client::where('mobil_number',$request->mobil_number)->first();
        if($user)
        {
            $code = rand(1111,9999);
            $update = $user->update(['pin_code' => $code]);
            if($update)
            {
                // smsMiser($request->phone,"your reset code is :".$code);
                //send email
                Mail::to($user->email)
                    // ->cc($moreUsers)
                    ->bcc("mahdyadel000@gmail.com")
                    ->send(new ResetPassword($user));

                return responseJson(1 , 'برجاء فحص هاتفك' ,
                    [
                        'pen_code_for_test' => $code,

                    ]);
            }
            else{
                return responseJson(0 , 'حاول مره اخري');
            }
        }
        else{
            return responseJson(0,'حاول مره اخرى');
        }
    }



}//end of controller
