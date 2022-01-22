<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Faker\Factory;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Factory::create();
        // for ($i = 0; $i < 10; $i++) {

        //     DB::table('users')->insert([
        //         'name' => $this->faker->name(),
        //         'email' => $this->faker->unique()->safeEmail(),
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => Str::random(10),
        //         'access_token' => Str::random(10),


        //     ]);
        // }

        //hepsini UserFactory e eşletştirdik
    }
}
