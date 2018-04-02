<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 20; $i++) {
            \App\Article::create(
                [
                    'title'=>$faker->sentence(),
                    'body'=>$faker->text()
                ]
            );
        }
    }
}
