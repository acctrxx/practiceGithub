<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        $faker = Factory::create('en_EN');
        $machine = ['V - Twins', 'V - 8f'];

        for ($i=0; $i < 30; $i++) { 
            DB::table('products')->insert([
                'name' => $faker->name,
                'price' => $faker->numberBetween(70000000, 10000000),
                'production_date' => $faker->dateTimeBetween($startDate = '-50 years', $endDate = 'now', $timezone = null),
                'producer' => $faker->name,
                'machine' => $faker->randomElement($machine),
                'expired' => $faker->date,
                'description' => $faker->text,
                'stock' => $faker->numberBetween(1, 30),
                'address' => $faker->address,
                'postcode' => $faker->postcode,
                'status' => $faker->boolean()
            ]);
        }
    }
}
