<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('full_name');
            $table->string('password');
            $table->string('address');
            $table->string('date_of_birth');
            $table->string('health_certificate');
            $table->string('email');
            $table->enum('blood_type', ['A+' , 'A-' , 'B+' , 'B-' , 'AB+' , 'AB-' , 'O+' , 'O-']);
            $table->string('mobil_number');
            $table->enum('type_of_license' , ['درجه اولى' , 'درجه تانيه' , 'درجه ثالثه' , 'خاصه']);
            $table->integer('city_id')->unsigned();
            $table->integer('governorate_id')->unsigned();
            $table->string('api_token' ,60)->nullable();
            $table->string('pen_code',6)->nullable();


            



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
        Schema::dropIfExists('clients');
    }
}

