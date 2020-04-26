<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObtainingLicenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obtaining_license', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('id_image');
            $table->string('traffic_file_form');
            $table->string('qualification_photo');
            $table->string('personal_photo');
            $table->string('undercover_certificate');
            $table->string('eye_examination_certificate');
            $table->enum('blood_type', ['A+' , 'A-' , 'B+' , 'B-' , 'AB+' , 'AB-' , 'O+' , 'O-']);
            $table->string('medical_commission');
            $table->string('military_sevices');
            $table->enum('type_of_license' , ['درجه اولى' , 'درجه تانيه' , 'درجه ثالثه' , 'خاصه']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obtaining_license');
    }
}
