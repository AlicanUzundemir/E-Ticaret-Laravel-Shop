<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Faker\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i <10 ; $i++) { 
            
            DB::table('users')->insert([
                'name' => $faker ->name,
                'email'=> $faker ->email,
                'password' => $faker ->password,
                
                
            ]);
        }
    }
}
