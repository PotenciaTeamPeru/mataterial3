<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\User::create([ 

            'id' => '1',
            'name' => 'norma',
            'email' => 'normacruzchambi@gmail.com',
            'password' => bcrypt('bombita'),

        ]);        

        App\User::create([ 

            'id' => '2',
            'name' => 'al3x',
            'email' => 'al3xi7o@outlook.com',
            'password' => bcrypt('bombita'),

        ]);  
    }
}
