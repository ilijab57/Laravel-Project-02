<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 100; $i++) {
            $created = $faker->dateTimeBetween($startDate = '-2 years',$endDate = 'now');
            DB::table('lessons')->insert([
                'title' => $faker->realText($maxNbChars = 10),
                'description' => $faker->realText($maxNbChars = 200),
                'created_at' => $created,
                'updated_at' => $created,
                'category_id' => rand(1,6)
            ]);
        }
    }
}
