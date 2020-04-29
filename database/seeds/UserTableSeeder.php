<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
		DB::table('governorates')->insert(['name' => 'الدقهلية', 'created_at' => now(), 'updated_at' => now()]);
		DB::table('cites')->insert(['name' => 'المنصورة', 'created_at' => now(), 'updated_at' => now()]);
    }
}
