<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDamagedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('damageds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('license_number');
            $table->enum('type_of_license' , ['درجه اولى' , 'درجه تانيه' , 'درجه ثالثه' , 'خاصه']);
            $table->integer('national_id');
            $table->string('id_image');
            $table->string('damaged_license');
            $table->string('email');
            $table->string('phone_number');
            $table->string('clearance_certificate');
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
        Schema::dropIfExists('damageds');
    }
}
