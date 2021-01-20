<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i < 4; $i++) {
            DB::table('banners')->insert([
                'title' => $faker->realText($maxNbChars = 15),
                'content' => $faker->realText($maxNbChars = 250),
                'link' => $faker->url
            ]);
        }
    }
}
