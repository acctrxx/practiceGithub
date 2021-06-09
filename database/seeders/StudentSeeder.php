<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('students')->truncate();
        
        $faker = Factory::create();

        $gender = ['Men', 'Women'];
        $religion = ['Islam', 'Christian', 'Katholik', 'Buddha', 'Hindu', 'Atheis'];

        for ($i = 0; $i < 20; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'age' => $faker->numberBetween(1, 69),
                'class' => $faker->numberBetween(7, 12),
                'address' => $faker->address,
                'gender' => $faker->randomElement($gender),
                'religion' => $faker->randomElement($religion),
                'status' => $faker->boolean()
            ]);
        }
        
    }
}