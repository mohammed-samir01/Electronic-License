<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetrivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retrives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone_number');
            $table->string('email');
            $table->string('city');
            $table->enum('type_of_license' , ['درجه اولى' , 'درجه تانيه' , 'درجه ثالثه' , 'خاصه']);
            $table->string('governorate');
            $table->string('license_number');
            $table->string('withdraw_license');
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
        Schema::dropIfExists('retrives');
    }
}
