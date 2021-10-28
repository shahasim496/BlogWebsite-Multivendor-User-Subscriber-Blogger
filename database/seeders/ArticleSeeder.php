<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class ArticleSeeder extends Seeder
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
        DB::table('articles')->insert([
            'title' => Str::random(10),
            'description' => Str::random(20),
            
        ]);

    }
    }
}
