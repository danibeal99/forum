<?php

use Illuminate\Database\Seeder;



class UserSeeder extends Seeder
{

    public function run()
    {

        factory(App\User::class, 5)->create();

        // $this->call('Factory');

        // $this->command->info('User table seeded!');
    }
}