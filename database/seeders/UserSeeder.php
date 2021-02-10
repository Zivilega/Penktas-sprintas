<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Zivile',
            'email' => 'zivilega@gmail.com',
            'password' => Hash::make('zivile'),
        ]);
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@test.lt',
            'password' => Hash::make('test'),
        ]);
    }
}
