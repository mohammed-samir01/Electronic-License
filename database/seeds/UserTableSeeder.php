<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
		DB::table('governorates')->insert(['name' => 'الدقهلية', 'created_at' => now(), 'updated_at' => now()]);
		DB::table('cites')->insert(['name' => 'المنصورة', 'created_at' => now(), 'updated_at' => now()]);
		DB::table('fines')->insert(['license_number' => '1234', 'fine' => '2500', 'created_at' => now(), 'updated_at' => now()]);
		DB::table('license_fees')->insert(['name' => 'test name', 'price' => '500', 'created_at' => now(), 'updated_at' => now()]);
    }
}
