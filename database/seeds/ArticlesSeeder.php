<?php

use App\Article;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newArticle = new Article();
            $newArticle->title = $faker->words(3,true);
            $newArticle->description = $faker->sentence(15);
            $newArticle->Save();
        }
    }
}
