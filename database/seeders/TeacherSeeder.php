<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->truncate();
        $faker = Factory::create('id_ID');
        
        $gender = ['Men', 'Women'];
        $religion = ['Islam', 'Christian', 'Katholik', 'Buddha', 'Hindu', 'Atheis'];
        
        for ($i = 0; $i < 10; $i++) {
            DB::table('teachers')->insert([
                'name' => $faker->name,
                'age' => $faker->numberBetween(1, 69),
                'address' => $faker->address,
                'gender' => $faker->randomElement($gender),
                'religion' => $faker->randomElement($religion),
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'birth_date' => $faker->dateTimeBetween($startDate = '-50 years', $endDate = 'now', $timezone = null),
                'description' => $faker->text
            ]);
            }
            
            }
            }
