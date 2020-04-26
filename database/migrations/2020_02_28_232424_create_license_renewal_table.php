<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenseRenewalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('license_renewal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('national_id');
            $table->string('id_image');
            $table->string('personal_image');
            $table->string('health_certificate');
            $table->string('eye_examination_certificate');
            $table->string('expired_license_number');
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
        Schema::dropIfExists('license_renewal');
    }
}
