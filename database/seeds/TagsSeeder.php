<?php

use App\Tags;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newTags = new Tags();
            $newTags->name = $faker->words();
            $newTags->category = $faker->sentence(10);
            $newTags->Save();
        }
    }
}
