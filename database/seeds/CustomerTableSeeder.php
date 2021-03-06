<?php

use Illuminate\Database\Seeder;
use App\Customer;
use Faker\Factory;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Customer::truncate();

        foreach (range(10,50) as $i){
            Customer::create([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->safeEmail,
                'address' => $faker->address
            ]);
        }
    }
}
