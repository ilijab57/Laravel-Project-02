<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Маркетинг','Бизнис','UX','Дизајн','Програмирање','Data Science'];
        $images = ['marketing','business','ux','design','programming','data_science'];
        for($i = 0; $i < count($categories); $i++) {
        DB::table('categories')->insert([
            
                'category' => $categories[$i],
                'image_url' => $images[$i].'.png',
                'description' => 'Студии на случај ќе научиш како да се справуваш со 
                маркетинг предизвиците во дигиталниот свет и ќе ги
                стекнеш најбараните вештини во моментот.'

        ]);
        }
    }
}
