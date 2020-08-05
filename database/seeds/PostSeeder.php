<?php

use Illuminate\Database\Seeder;
 

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'body' => Str::random(10),
            'user_id' => '1'
        ]);

        

    }
}

