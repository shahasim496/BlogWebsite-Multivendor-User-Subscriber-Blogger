<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 100; $i++)
        {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'aboutus' => Str::random(10),
            'utype' => Str::random(3),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

    }
    }
}
