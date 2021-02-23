<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $newPost = new Post();
        $newPost->title = $faker->words(3,true);
        $newPost->description = $faker->sentence(15);
        $newPost->Save();
    }
}
