<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Contact;
use App\Damaged;
use App\Fine;
use App\LicenseFees;
use App\LicenseRenewa;
use App\ObtainingLicense;
use App\Governorate;
use App\ReplacementOfLost;
use App\Retrives;
use App\City;
use Update;
use Validator;
use RequestLog;
use Illuminate\Validation\Rule;

class MainController extends Controller
{
    public function contacts(Request $request){

        $contacts = Contact::all();
         
        return responseJson(1 , 'successs' , $contacts);
    
    }//end of index

    public function store(Request $request){
        $validator = Validator::make($request->all() , [
            
            'full_name'   =>  'required',
            'email'       =>  'required',
            'phone_number' =>  'required',
            'message'     =>  'required',

        ]);

        if($validator->fails()){

            return responseJson(0 , $validator->errors()->first() , $validator->errors());
        }

        $contacts = Contact::create($request->all());
        $contacts->save();
        return responseJson(1 , 'تم التواصل بنجاح' , [
            'contacts'  => $contacts,
        ]);
    }//end of create

    public function create(Request $request){
        $validator = Validator::make($request->all() , [
            'license_number'           =>   'required',
            'email'                    =>   'required',
            'type_of_license'          =>   'required',
            'national_id'              =>   'required',
            'id_image'                 =>   'required',
            'damaged_license'          =>   'required',
            'phone_number'             =>   'required',
            'clearance_certificate'    =>   'required',

           
        ]);
        if($validator->fails()){
            return responseJson(0 , $validator->errors()->first() , $validator->errors());
        }
        $damaged = Damaged::create($request->all());
        $damaged->save();
        return responseJson(1 , 'تم التواصل بنجاح' , [
            'damaged'  => $damaged,
        ]);


    }//end of index damaged

    public function fines(Request $request){

        $fines = Fine::all();

        return responseJson(1 , 'success' , $fines);

    }//end of fines

    public function governorates(Request $request){

        $governorates = Governorate::all();

        return responseJson(1 , 'success' , $governorates);

    }//end of governorates
    public function cites(Request $request){

        $cites = City::all();

        return responseJson(1 , 'success' , $cites);

    }//end of cites

    public function license_fees(Request $request){

        $license_fees = LicenseFees::all();

        return responseJson(1 , 'success' , $license_fees);

    }//end of license_fees

    public function license_renewal(Request $request){
        $validator = Validator::make($request->all() , [
            'full_name'           =>   'required',
            'national_id'                    =>   'required',
            'id_image'          =>   'required',
            'personal_image'              =>   'required',
            'health_certificate'                 =>   'required',
            'eye_examination_certificate'          =>   'required',
            'expired_license_number'             =>   'required',
            'email'    =>   'required',
            'phone_number'    =>   'required',
            'clearance_certificate'    =>   'required',


           
        ]);
        if($validator->fails()){
            return responseJson(0 , $validator->errors()->first() , $validator->errors());
        }
        $license_renewal = LicenseRenewa::create($request->all());
        $license_renewal->save();
        return responseJson(1 , 'تم التواصل بنجاح' , [
            'license_renewal'  => $license_renewal,
        ]);


    }//end of index license_renewal
    
    public function obtaining_license(Request $request){
        $validator = Validator::make($request->all() , [
            'full_name'           =>   'required',
            'phone_number'                    =>   'required',
            'id_image'          =>   'required',
            'traffic_file_form'              =>   'required',
            'qualification_photo'                 =>   'required',
            'personal_photo'          =>   'required',
            'undercover_certificate'             =>   'required',
            'eye_examination_certificate'    =>   'required',
            'blood_type'    =>   'required',
            'medical_commission'    =>   'required',
            'military_sevices'    =>   'required',
            'type_of_license'    =>   'required',
           



           
        ]);
        if($validator->fails()){
            return responseJson(0 , $validator->errors()->first() , $validator->errors());
        }
        $obtaining_license = ObtainingLicense::create($request->all());
        $obtaining_license->save();
        return responseJson(1 , 'تم التواصل بنجاح' , [
            'obtaining_license'  => $obtaining_license,
        ]);


    }//end of index obtaining_license

    public function replacement_of_lost(Request $request){
        $validator = Validator::make($request->all() , [
            'phone_number'           =>   'required',
            'email'                    =>   'required',
            'license_number'          =>   'required',
            'type_of_license'              =>   'required',
            'id_image'                 =>   'required',
            'national_id'          =>   'required',
            'clearance_certificate'             =>   'required',
            'loss_report'    =>   'required',
           
           
        ]);
        if($validator->fails()){
            return responseJson(0 , $validator->errors()->first() , $validator->errors());
        }
        $replacement_of_lost = ReplacementOfLost::create($request->all());
        $replacement_of_lost->save();
        return responseJson(1 , 'تم التواصل بنجاح' , [
            'replacement_of_lost'  => $replacement_of_lost,
        ]);


    }//end of index replacement_of_lost
    public function retrives (Request $request){
        $validator = Validator::make($request->all() , [
            'phone_number'           =>   'required',
            'email'                    =>   'required',
            'city'                     =>   'required',
            'type_of_license'              =>   'required',
            'governorate'                 =>   'required',
            'license_number'             =>   'required',
            'withdraw_license'          =>   'required',
           

        ]);
        if($validator->fails()){
            return responseJson(0 , $validator->errors()->first() , $validator->errors());
        }
        $retrives = Retrives::create($request->all());
        $retrives->save();
        return responseJson(1 , 'تم التواصل بنجاح' , [
            'retrives'  => $retrives,
        ]);


    }//end of index retrives

   



}//end of controller
