<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newCategories = new Category();
            $newCategories->name = $faker->word();
            $newCategories->description = $faker->sentence(10);
            $newCategories->Save();
        }
    }
}
