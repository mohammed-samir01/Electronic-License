<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplacementOfLostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replacement_of_lost', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone_number');
            $table->string('email');
            $table->string('license_number');
            $table->enum('type_of_license' , ['درجه اولى' , 'درجه تانيه' , 'درجه ثالثه' , 'خاصه']);
            $table->string('id_image');
            $table->string('national_id');
            $table->string('clearance_certificate');
            $table->string('loss_report');
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
        Schema::dropIfExists('replacement_of_lost');
    }
}
