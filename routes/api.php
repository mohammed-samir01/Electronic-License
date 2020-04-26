<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


    Route::group(['prefix'  => 'v1' , 'namespace' => 'api'] , function(){

    //route register 
    Route::post('register' , 'AuthController@register');
    //route LOgin
    Route::post('login' , 'AuthController@login');




    //route profile
    Route::post('profile' , 'AuthController@profile');
    //reset password
    Route::post('reset' , 'AuthController@reset');
    
    //route contact us
    Route::get('contacts' , 'MainController@contacts');
    Route::post('contact' , 'MainController@store');

    //route damageds
    Route::post('damageds' , 'MainController@create');
    //route fines
    Route::get('fines' , 'MainController@fines');
    //route governorate
    Route::get('governorates' , 'MainController@governorates');
    //route city
    Route::get('cites' , 'MainController@cites');
    //route licensefees
    Route::get('license_fees' , 'MainController@license_fees');
    //route license_renewal
    Route::post('license_renewal' , 'MainController@license_renewal');
     //route obtaining_license
     Route::post('obtaining_license' , 'MainController@obtaining_license');
      //route replacement_of_lost
     Route::post('replacement_of_lost' , 'MainController@replacement_of_lost');
       //route retrives
     Route::post('retrives' , 'MainController@retrives');
      



    

    
});